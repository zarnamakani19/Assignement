<?php
include('../Model/CommanModel.php');
class LandingController extends CommanModel{

    function __construct(){
        $this->url = "http://localhost/MVC/";
        parent::__construct();
    }
    function Home(){

        $user = $this->Select('users');

        include('../views/Home.php');
    }
    function About(){
        echo 'About';
    }
    
}

$LandingController = new LandingController;
if(isset($_SERVER['PATH_INFO'])){
    $path = $_SERVER['PATH_INFO'];
}else{
    $path = '/home';
}
switch ($path) {
    case '/home':
    $LandingController->Home();
    break;

    case '/about':
    $LandingController->About();
    break;


    default:
        // code..
    break;
}

?>
