<?php

class PersonaAbm
{

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres 
     * de las variables instancias del objeto
     * @param array $param
     * @return Persona
     */
    private function cargarObjeto($param)
    {
        $obj = null;

        if (
            array_key_exists('NroDni', $param) &&
            array_key_exists('Apellido', $param) &&
            array_key_exists('Nombre', $param) &&
            array_key_exists('fechaNac', $param) &&
            array_key_exists('Telefono', $param) &&
            array_key_exists('Domicilio', $param)
        ) {
            $obj = new Persona();

            $obj->setear(
                $param['NroDni'],
                $param['Apellido'],
                $param['Nombre'],
                $param['fechaNac'],
                $param['Telefono'],
                $param['Domicilio']
            );
        }
        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * 
     * OBSERVACION: Se utiliza este método principalmente para borrar un registro, ya que para ello
     * solamente se necesitan las claves del mismo
     * 
     * @param array $param
     * @return Persona
     */
    private function cargarObjetoConClave($param)
    {
        $obj = null;

        if (isset($param['NroDni'])) {
            $obj = new Persona();
            $obj->setear($param['NroDni'], null, null, null, null, null);
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
        if (isset($param['NroDni']))
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
        $param['NroDni'] = null;*/

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
     * @return boolean
     */
    public function buscar($param)
    {

        /*Se incia la consulta sql en true por que facilita el armado de la misma
        según el criterio de busqueda */
        $where = " true ";

        if ($param <> NULL) {
            if (isset($param['NroDni']))
                $where .= " and NroDni = '" . $param['NroDni'] . "'";

            if (isset($param['Apellido']))
                $where .= " and Apellido = '" . $param['Apellido'] . "'";

            if (isset($param['Nombre']))
                $where .= " and Nombre = '" . $param['Nombre'] . "'";

            if (isset($param['fechaNac']))
                $where .= " and fechaNac = '" . $param['fechaNac'] . "'";

            if (isset($param['Telefono']))
                $where .= " and Telefono = '" . $param['Telefono'] . "'";

            if (isset($param['Domicilio']))
                $where .= " and Domicilio = '" . $param['Domicilio'] . "'";
        }

        /*$arreglo = Persona::listar($where);*/
        $obj = new Persona();
        $arreglo = $obj->listar($where);

        return $arreglo;
    }
}
