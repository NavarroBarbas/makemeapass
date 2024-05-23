<?php
include_once(__DIR__."/conexiones.php");

class Password extends Conexion {
    private $passwordID;
    private $generatedPass;
    private $nombrePass;
    private $idUsuario;

    public function __construct(){
		parent::__construct();
		
	}

    public function getPasswordID(){
        return $this->passwordID;
    }

    public function getGeneratedPass(){
        return $this->generatedPass;
    }

    public function getNombrePass(){
        return $this->nombrePass;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setPasswordID($passwordID){
        $this->passwordID = $passwordID;
    }

    public function setGeneratedPass($generatedPass){
        $this->generatedPass = $generatedPass;
    }

    public function setNombrePass($nombrePass){
        $this->nombrePass = $nombrePass;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function load($searchedPass = null){
        $this->clearErr();
        $searchedPassValue = "%$searchedPass%";
        if($searchedPass != null) {
            $stmt = $this->getPdo()->prepare("SELECT * FROM saved_passwords WHERE user_id = :id AND nombre_pass LIKE :searchedPass ORDER BY nombre_pass ASC");
            $stmt->bindParam(':id', $this->idUsuario);
            $stmt->bindParam(':searchedPass', $searchedPassValue);
        } else {
            $stmt = $this->getPdo()->prepare("SELECT * FROM saved_passwords WHERE user_id = :id ORDER BY nombre_pass ASC");
            $stmt->bindParam(':id', $this->idUsuario);
        }
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($result as $row) {
            $nombrePass = $row["nombre_pass"];
            $password = htmlspecialchars($row["generated_pass"]);
            $passid = $row["password_id"];

            echo '<div id="savedpass" class="passwords__passdiv">
                    <h4 class="passdiv__nombre" id="' . $passid . '">' . $nombrePass . '</h4>
                    <a class="passdiv__password" id="' . $password . '">' . $password . '</a>
                    <nav class="passdiv__nav">
                    <a class="nav__eliminar" id="deleteClick" onclick="eliminarPass(\'' . $password . '\', \'' . $passid . '\')">Eliminar</a>
                    <a class="nav__copiar" onclick="copiar(\'' . $password . '\')">Copiar</a>
                    </nav>
                </div>';
        }
    }

    public function savePass(){
		$this->clearErr();
        try {
            $stmt = $this->getPdo()->prepare("INSERT INTO saved_passwords (generated_pass, nombre_pass, user_id) VALUES (:generatedPass, :nombrePass, :idUsuario)");
            $stmt->bindParam(':generatedPass', $this->generatedPass);
            $stmt->bindParam(':nombrePass', $this->nombrePass);
            $stmt->bindParam(':idUsuario', $this->idUsuario);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            $this->errCode = $e->getCode();
            $this->errMsg = $e->getMessage();
            return false;
        }
    }

    public function deletePass($id){
        $stmt = $this->getPdo()->prepare("DELETE FROM saved_passwords WHERE password_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}