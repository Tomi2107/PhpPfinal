<?php 

class ConexionDB {
    private $localhost;
    private $id17609461_tom;
    private $SxSv)q4U8zAbyjC*;
    private $id17609461_cac;
    private $conexion;

    function __construct($localhost,$id17609461_tom,$SxSv)q4U8zAbyjC*,$id17609461_cac) {
        $this->host=$localhost;
        $this->user=$id17609461_tom;
        $this->password=$SxSv)q4U8zAbyjC*;
        $this->databaseName=$id17609461_cac;
    }

    /**
     * Conecta con la base de datos,
     * matienen la conexión en el atributo $conexion
     */
    public function conectar() {
        $this->conexion = new mysqli($this->localhost,$this-id17609461_tom,$this->SxSv)q4U8zAbyjC*,$this->id17609461_cac);
        if($this->conexion->connect_errno) {
            die("Error de conexión: (" . $this->conn->connect_error . ")" . $this->conn->connect_errno);
        }
    }

    public function cerrar() {
        $this->conexion->close();
    }

    /**
     * Ejecuta la query recibida con el 
     * parámetro $sql.
     * Devuelve el resultado
     */
    public function ejecutar($sql) {
        return $this->conexion->query($sql);
    }

    /**
     * Devuelve la cantidad de filas
     * que arrojó la última consulta a la 
     * conexión.
     */
    public function cantFilas() {
        return $this->conexion->affected_rows;
    }

}

?>
