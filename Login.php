<?php
    include('Data/Usuario.php');
    
    $u=new user();
    
	$user=$_POST['user'];
    $pass=$_POST['pass'];
    
    
    $usuario=$u->BuscarUsuario($user, $pass);
    
    if($usuario==1)
    {
        echo "user ok";
    }
    else if($usuario>1)
    {
        header("location:Index.php");
    }
    else
    {
        header("location:Index.php");
    }
    
?>