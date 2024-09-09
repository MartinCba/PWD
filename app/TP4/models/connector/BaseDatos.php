<?php
class BaseDatos extends PDO
{

    //ATRIBUTOS
    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;
    private $debug;
    private $conec;
    private $indice;
    private $resultado;
    private $error;
    private $sql;

    //CONSTRUCTOR
    /**
     * Crea un objeto de tipo BaseDatos y además realiza la conexión con el servidor directamente
     */
    public function __construct()
    {
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = 'infoautos';
        $this->user = 'root';
        $this->pass = '';
        $this->debug = true;
        $this->error = "";
        $this->sql = "";
        $this->indice = 0;

        $dns = $this->engine . ':dbname=' . $this->database . ";host=" . $this->host;

        try {
            parent::__construct($dns, $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            $this->conec = true;
        } catch (PDOException $e) {
            $this->sql = $e->getMessage();
            $this->conec = false;
        }
    }

    /**
     * Inicia la coneccion con el Servidor y la  Base Datos Mysql.
     * Retorna true si la coneccion con el servidor se pudo establecer y false en caso contrario
     * 
     * OBSERVACIÓN: No incia la conexión con el servidor, solamente indica si la conexión se encuentra
     * activa o no
     *
     * @return boolean
     */
    public function Iniciar()
    {
        return $this->getConec();
    }

    public function getConec()
    {
        return $this->conec;
    }

    public function setDebug($debug)
    {
        $this->debug = $debug;
    }

    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Funcion que setea la variable instancia error
     */
    public function setError($e)
    {
        $this->error = $e;
    }

    /**
     * Funcion que retorna una cadena con descripcion del ultimo error seteado
     * @return string
     */
    public function getError()
    {
        return "\n" . $this->error;
    }

    /**
     * Funcion que setea la variable instancia sql
     */
    public function setSQL($e)
    {
        return "\n" . $this->sql = $e;
    }

    /**
     * Funcion que retorna una cadena con el ultimo sql seteado
     * @return string
     */
    public function getSQL()
    {
        return "\n" . $this->sql;
    }


    /**
     * Esta función lee una consulta sql externa y ejecuta la función que le corresponda.
     * Reinicia los valores de error y de contenido de última consulta sql
     * Dependiendo el tipo de función que se ejecute se van a obtener distintas respuestas
     * 
     * insert: Retorna el id del registro insertado si tiene autoincrement, -1 en caso contrario y
     * 0 si la operación falla.
     * 
     * update/delete: Devuelve un entero que indica la cantidad de filas afectadas por la consulta
     * o -1 si la operación falla.
     * 
     * select: Devuelve un entero que indica la cantidad de registros que se obtuvieron al realizar
     * esa consulta o -1 si la operación falla. (Setea los registros obtenidos en forma de arreglo
     * en el atributo resultado)
     * 
     * @return int
     */
    public function Ejecutar($sql)
    {

        $this->setError("");
        $this->setSQL($sql);

        if (stristr($sql, "insert")) { // se desea NSERT ? 
            $resp =  $this->EjecutarInsert($sql);
        }
        // se desea UPDATE o DELETE ? 
        if (stristr($sql, "update") or stristr($sql, "delete")) {
            $resp =  $this->EjecutarDeleteUpdate($sql);
        }

        // se desea ejecutar un select
        if (stristr($sql, "select")) {
            $resp =  $this->EjecutarSelect($sql);
        }
        return $resp;
    }

    /**
     * Si se inserta en una tabla que tiene una columna autoincrement se retorna el id con el que se inserto el registro
     * caso contrario se retorna -1. Si la consulta falla retornara 0
     */
    private function EjecutarInsert($sql)
    {

        //$resultado devuelve un objeto cuando la consulta es exitosa y falso en caso contrario
        $resultado = parent::query($sql);

        if (!$resultado) {
            $this->analizarDebug();
            $id = 0;
        } else {
            $id =  $this->lastInsertId();
            if ($id == 0) {
                $id = -1;
            }
        }
        return $id;
    }

    /**
     * Devuelve la cantidad de filas afectadas por la ejecucion SQL. Si el valor es <0 no se pudo realizar la opercion
     * @return integer 
     */
    private function EjecutarDeleteUpdate($sql)
    {
        $cantFilas = -1;

        //$resultado devuelve un objeto cuando la consulta es exitosa y falso en caso contrario
        $resultado = parent::query($sql);

        if (!$resultado) {
            $this->analizarDebug();
        } else {
            $cantFilas =  $resultado->rowCount();
        }
        return $cantFilas;
    }

    /**
     * Retorna cada uno de los registros de una consulta select
     * @return integer
     */
    private function EjecutarSelect($sql)
    {
        $cant = -1;

        //$resultado devuelve un objeto cuando la consulta es exitosa y falso en caso contrario
        $resultado = parent::query($sql);

        if (!$resultado) {
            $this->analizarDebug();
        } else {

            $arregloResult = $resultado->fetchAll();
            $cant = count($arregloResult);
            $this->setIndice(0);
            $this->setResultado($arregloResult);
        }
        return $cant;
    }

    /**
     * Devuelve un registro retornado por la ejecución de una consulta
     * el puntero se despleza al siguiente registro de la consulta
     *
     * @return array
     */
    public function Registro()
    {

        $filaActual = false;
        $indiceActual = $this->getIndice();

        /* Se utiliza el valor del indice para saber cuantos registros quedan en el arreglo
        guardado en resultado, cada vez que se accede al arreglo resultado este devuelve un registro
        que no haya sido accedido anteriormente */
        if ($indiceActual >= 0) {

            $filas = $this->getResultado();

            if ($indiceActual < count($filas)) {
                $filaActual =  $filas[$indiceActual];

                $indiceActual++;
                $this->setIndice($indiceActual);
            } else {
                $this->setIndice(-1);
            }
        }
        return $filaActual;
    }

    /**
     * Esta funcion si esta seteado la variable instancia $this->debug visualiza el debug
     */
    private function analizarDebug()
    {
        $e = $this->errorInfo();
        $this->setError($e);
        if ($this->getDebug()) {
            echo "<pre>";
            print_r($e);
            echo "</pre>";
        }
    }

    private function setIndice($valor)
    {
        $this->indice = $valor;
    }

    private function getIndice()
    {
        return $this->indice;
    }

    private function setResultado($valor)
    {
        $this->resultado = $valor;
    }

    private function getResultado()
    {
        return $this->resultado;
    }
}
