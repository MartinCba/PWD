<?php

class Auto
{

    //ATRIBUTOS
    private $patente;
    private $marca;
    private $modelo;
    private $objPersona;
    private $msjOperacion;

    //CONSTRUCTOR
    /**
     * Crea un objeto de tipo Auto
     */
    public function __construct()
    {

        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->objPersona = null;
        $this->msjOperacion = "";
    }

    /**
     * Actualiza los atributos del objeto por los recibidos por parámetro
     * 
     * @param string $patente
     * @param string $marca
     * @param int $modelo
     * @param Persona $objPersona
     */
    public function setear($patente, $marca, $modelo, $objPersona)
    {

        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setObjPersona($objPersona);
    }

    // Getters and setters

    /**
     * @return string
     */
    public function getPatente()
    {
        return $this->patente;
    }
    public function setPatente($patente)
    {
        $this->patente = $patente;
    }

    /**
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return int
     */
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @return Persona
     */
    public function getObjPersona()
    {
        return $this->objPersona;
    }
    public function setObjPersona($objPersona)
    {
        $this->objPersona = $objPersona;
    }

    /**
     * @return string
     */
    public function getMsjOperacion()
    {
        return $this->msjOperacion;
    }
    public function setMsjOperacion($valor)
    {
        $this->msjOperacion = $valor;
    }

    // Funciones

    /**
     * Toma el atributo donde está cargado el id del objeto y lo utiliza para realizar
     * una consulta a la base de datos con el objetivo de actualizar el resto de los atributos del objeto.
     * Retora un booleano que indica el éxito o falla de la operación
     * 
     * @return boolean
     */
    public function cargar()
    {
        $exito = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto WHERE Patente = " . $this->getPatente();

        //Verifica si esta activa la base de datos
        if ($base->Iniciar()) {

            //Ejercuta la consulta (en este caso es un select, debe devolver un arreglo de registros)
            $res = $base->Ejecutar($sql);

            //Si $res es mayor a -1 quiere decir que la consulta se ejecuto con éxito
            if ($res > -1) {

                //Si $res es mayor a 0 quiere decir que la consulta genero al menos 1 registro
                if ($res > 0) {

                    /*Guardo en el arreglo $row el resultado del primer registro obtenido y seteo
                    esos valores al objeto Auto actual*/
                    $row = $base->Registro();

                    $objPersona = new Persona();

                    if ($row['DniDuenio'] != "null") {
                        $objPersona->setNroDni($row['DniDuenio']);
                        $objPersona->cargar();
                    } else {
                        $objPersona = null;
                    }

                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $objPersona);
                    $exito = true;
                }
            }
        } else {
            $this->setMsjOperacion("Auto->listar: " . $base->getError());
        }
        return $exito;
    }

    /**
     * Esta función lee los valores actuales de los atributos del objeto e inserta un nuevo
     * registro en la base de datos a partir de ellos.
     * Retorna un booleano que indica si le operación tuvo éxito
     * 
     * @return boolean
     */
    public function insertar()
    {

        $resp = false;
        $base = new BaseDatos();

        $objPersona = $this->getObjPersona();
        if ($objPersona != null) {
            $dniDuenio = $objPersona->getNroDni();
        } else {
            $dniDuenio = null;
        }

        $sql = "INSERT INTO auto(Patente, Marca, Modelo, DniDuenio) VALUES(
            '" . $this->getPatente() . "', 
            '" . $this->getMarca() . "', 
            " . $this->getModelo() . ", 
            '" . $dniDuenio . "'
            );";

        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                //Este objeto no tiene id con autoincrement
                // $this->setPatente($elid);
                $resp = true;
            } else {
                $this->setMsjOperacion("Tabla->insertar: " . $base->getError());
            }
        } else {
            $this->setMsjOperacion("Tabla->insertar: " . $base->getError());
        }
        return $resp;
    }

    /**
     * Esta función lee los valores actuales de los atributos del objeto y los actualiza en la
     * base de datos.
     * Retorna un booleano que indica si le operación tuvo éxito
     * 
     * @return boolean
     */
    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();

        $objPersona = $this->getObjPersona();
        if ($objPersona != null) {
            $dniDuenio = $objPersona->getNroDni();
        } else {
            $dniDuenio = null;
        }

        $sql = "UPDATE auto SET 
        Patente = '" . $this->getPatente() . "', 
        Marca = '" . $this->getMarca() . "', 
        Modelo = " . $this->getModelo() . ", 
        DniDuenio = '" . $dniDuenio . "' 
        WHERE Patente = '" . $this->getPatente() . "'";

        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMsjOperacion("Auto->modificar: " . $base->getError());
            }
        } else {
            $this->setMsjOperacion("Auto->modificar: " . $base->getError());
        }
        return $resp;
    }

    /**
     * Esta función lee el id actual del objeto y si puede lo borra de la base de datos
     * Retorna un booleano que indica si le operación tuvo éxito
     * 
     * @return boolean
     */
    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();

        $sql = "DELETE FROM auto WHERE Patente = '" . $this->getPatente() . "'";

        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setMsjOperacion("Auto->eliminar: " . $base->getError());
            }
        } else {
            $this->setMsjOperacion("Auto->eliminar: " . $base->getError());
        }
        return $resp;
    }

    /**
     * Esta función recibe condiciones de busqueda en forma de consulta sql para obtener
     * los registros requeridos.
     * Si por parámetro se envía el valor "" se devolveran todos los registros de la tabla
     * 
     * La función devuelve un arreglo compuesto por todos los objetos que cumplen la condición indicada
     * por parámetro
     * 
     * @return array
     */
    public function listar($parametro)
    {
        $arreglo = array();
        $base = new BaseDatos();

        $sql = "SELECT * FROM auto ";

        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }

        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {

                while ($row = $base->Registro()) {

                    $objPersona = new Persona();

                    if ($row['DniDuenio'] != "null") {
                        $objPersona->setNroDni($row['DniDuenio']);
                        $objPersona->cargar();
                    } else {
                        $objPersona = null;
                    }

                    $obj = new Auto();
                    $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $objPersona);
                    array_push($arreglo, $obj);
                }
            }
        } else {
            $this->setMsjOperacion("Auto->listar: " . $base->getError());
        }
        return $arreglo;
    }
}
