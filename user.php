<?php
include 'db.php';

class User extends DB{
    private $nombre;
    private $username;


    public function userExists($user, $pass){ //saber si existe el usuario con user y password
        $query = $this->connect()->prepare('SELECT * FROM sesiones WHERE username = :user AND password = :pass');  //conectarse a la db y validar datos
        $query->execute(['user' => $user, 'pass' => $pass]); //unir los datos con las variables temporales

        if($query->rowCount()){ //valida que el login fue incorrecto contando el número de filas
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){ //
        $query = $this->connect()->prepare('SELECT * FROM sesiones WHERE username = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) { //barrido
            $this->nombre = $currentUser['nombre'];
            $this->usename = $currentUser['username'];
        }
    }

    public function getNombre(){ //obtener la variable nombre
        return $this->nombre;
    }
}

?>