<?php

class UserSession{ //manejar la sesion

    public function __construct(){
        //session_start(); //inicializar las sesiones
    }

    public function setCurrentUser($user){ //ponerle un valor a mi sesion actual
        $_SESSION['user'] = $user; //guardar el username de la sesion
    }

    public function getCurrentUser(){
        return $_SESSION['user']; //devolver el valor de la sesion
    }

    public function closeSession(){ //cerrar sesion
        session_unset(); //borra los valores de las sesiones
        session_destroy(); //destruye las sesiones como tal
    }
}

?>