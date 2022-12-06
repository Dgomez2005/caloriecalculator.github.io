<?php
//librerias
include_once 'user.php';
include_once 'user_session.php';

$userSession = new UserSession(); //inicializar y validar sesiones
$user = new User();//manejar el usuario actual

if(isset($_SESSION['user'])){ //si existe la sesion
    $user->setUser($userSession->getCurrentUser());//recuperar usuario como para cuando se abre navegador pero no se cierra sesion
    include_once 'home.php';

}else if(isset($_POST['username']) && isset($_POST['password'])){ //validar si se dio submit
    //mapear la informacion
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    $user = new User();
    if($user->userExists($userForm, $passForm)){ //validar si son correctos
        //existe usuario
        $userSession->setCurrentUser($userForm);//guarda usuario
        $user->setUser($userForm);

        include_once 'home.php';
    }else{
        //no existe usuario
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'login.php';
    }
}else{ //si no sucede ninguna nos regresamos al login
    include_once 'login.php';
}



?>