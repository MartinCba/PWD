<?php
include_once($_SESSION['ROOT'] . 'app/TP4/utils/functions.php');
class AutoAbm
{
    /**
     * Obtiene los datos de los autos y sus dueños formateados
     * @param array|null $param
     * @return array
     */
    public function obtenerDatosAutos($param = null)
    {
        $arrayAutos = $this->buscar($param);
        $datosAutos = [];

        if (is_array($arrayAutos) && count($arrayAutos) > 0) {
            foreach ($arrayAutos as $auto) {
                $persona = $auto->getPersona();
                $datosAutos[] = [
                    'patente' => $auto->getPatente(),
                    'marca' => $auto->getMarca(),
                    'modelo' => $auto->getModelo(),
                    'duenio' => $persona->getApellido() . ' ' . $persona->getNombre()
                ];
            }
        }

        return $datosAutos;
    }

    /**
     * Obtiene los datos de un auto y su dueño por patente
     * @param string $patente
     * @return array|null
     */
    public function obtenerDatosAutoPorPatente($patente)
    {
        $parametro['Patente'] = $patente;
        $info = $this->buscar($parametro);

        if (count($info) > 0) {
            $autoEncontrado = $info[0];
            $persona = $autoEncontrado->getPersona();
            return [
                'patente' => $autoEncontrado->getPatente(),
                'marca' => $autoEncontrado->getMarca(),
                'modelo' => $autoEncontrado->getModelo(),
                'dni' => $persona->getNroDni(),
                'apellido' => $persona->getApellido(),
                'nombre' => $persona->getNombre()
            ];
        }

        return null;
    }
    /**
     * Obtiene los autos asociados a una persona por DNI
     * @param string $dni
     * @return array
     */
    public function obtenerAutosPorDni($dni)
    {
        $parametro['DniDuenio'] = $dni;
        $info = $this->buscar($parametro);
        $listaAutos = [];

        foreach ($info as $auto) {
            $listaAutos[] = [
                'patente' => $auto->getPatente(),
                'marca' => $auto->getMarca(),
                'modelo' => $auto->getModelo()
            ];
        }

        return $listaAutos;
    }
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres 
     * de las variables instancias del objeto
     * @param array $param
     * @return Auto
     */
    private function cargarObjeto($param)
    {
        $objAuto = null;

        if (
            array_key_exists('Patente', $param) &&
            array_key_exists('Marca', $param) &&
            array_key_exists('Modelo', $param) &&
            array_key_exists('DniDuenio', $param)
        ) {
            $objPersona = new Persona();
            $objPersona->setNroDni($param['DniDuenio']);
            $objPersona->cargar();

            $objAuto = new Auto();

            $objAuto->setear(
                $param['Patente'],
                $param['Marca'],
                $param['Modelo'],
                $objPersona
            );
        }
        return $objAuto;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * 
     * OBSERVACION: Se utiliza este método principalmente para borrar un registro, ya que para ello
     * solamente se necesitan las claves del mismo
     * 
     * @param array $param
     * @return Auto
     */
    private function cargarObjetoConClave($param)
    {
        $obj = null;

        if (isset($param['Patente'])) {
            $obj = new Auto();
            $obj->setear($param['Patente'], null, null, null);
        }
        return $obj;
    }

    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    private function seteadosCamposClaves($param)
    {
        $resp = false;
        if (isset($param['Patente']))
            $resp = true;
        return $resp;
    }

    /**
     * Esta función carga la información de un objeto a la base de datos
     * 
     * @param array $param
     * @return boolean
     */
    public function alta($param)
    {
        $resp = false;

        /*Si el id del objeto tuviera autoincrement en la base de datos entonces los campos claves 
        del mismo deberían setearse en nulos al momento de realizar la insersión
        $param['Patente'] = null;*/

        $obj = $this->cargarObjeto($param);
        // verEstructura($obj);
        if ($obj != null && $obj->insertar()) {
            $resp = true;
        }
        return $resp;
    }

    /**
     * Permite eliminar un objeto de la base de datos
     * @param array $param
     * @return boolean
     */
    public function baja($param)
    {

        $resp = false;

        /*Primero verifica que el campo clave es enviado correctamente como parámetro */
        if ($this->seteadosCamposClaves($param)) {

            /*Carga solamente la clave recibida por parámetro en el objeto actual ya que es lo único
            que se necesita para eliminar el resgistro de la base de datos */
            $obj = $this->cargarObjetoConClave($param);
            if ($obj != null && $obj->eliminar()) {
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * Permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param)
    {
        //echo "Estoy en modificacion";
        $resp = false;

        /*Primero verifica que el campo clave es enviado correctamente como parámetro */
        if ($this->seteadosCamposClaves($param)) {

            /*Para realizar una modificación se debe recibir un arreglo con todos los datos 
            del registro cargados, tanto los que se desea editar como los que se desea que 
            permanezcan igual y se lo sobreescribe con la función modificar */
            $obj = $this->cargarObjeto($param);
            if ($obj != null and $obj->modificar()) {
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * Permite buscar un objeto según distintos criterios
     * @param array $param
     * @return array
     */
    public function buscar($param)
    {

        /*Se incia la consulta sql en true por que facilita el armado de la misma
        según el criterio de busqueda */
        $where = " true ";

        if ($param <> NULL) {
            if (isset($param['Patente']))
                $where .= " and Patente = '" . $param['Patente'] . "'";

            if (isset($param['Marca']))
                $where .= " and Marca = '" . $param['Marca'] . "'";

            if (isset($param['Modelo']))
                $where .= " and Modelo = " . $param['Modelo'];

            if (isset($param['DniDuenio']))
                $where .= " and DniDuenio = '" . $param['DniDuenio'] . "'";
        }

        /*$arreglo = Auto::listar($where);*/
        $obj = new Auto();
        $arreglo = $obj->listar($where);

        return $arreglo;
    }
}
