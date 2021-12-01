<?php 

class ConexionDB {
    private $host;
    private $user;
    private $password;
    private $databaseName;
    private $conexion;

    function __construct($host,$user,$password,$databaseName) {
        $this->host=$localhost;
        $this->user=$id17609461_tom;
        $this->password=$L12345Ll_1234;
        $this->databaseName=$id17609461_cac;
    }

    /**
     * Conecta con la base de datos,
     * matienen la conexión en el atributo $conexion
     */
    public function conectar() {
        $this->conexion = new mysqli($this->host,$this->user,$this->password,$this->databaseName);
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
