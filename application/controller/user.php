<?php

/**
 * Class Error
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class User extends Controller
{
    /**
     * PAGE: index
     * This method handles the error page that will be shown when a page is not found
     *
    *public function dashboard()
    *{
        *require APP . 'view/_templates/header.php';
        *require APP . 'view/user/dashboard.php';
       * require APP . 'view/_templates/footer.php';
    *} */
	
	public function profile()
    {
        session_start();
        if($_SESSION['is_logged_in']){
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/user/profile.php';
        require APP . 'view/_templates/footer.php';

        } else {

            header('location: ' . URL . 'user/login');

        }
    }
	
	public function login()
    {

        require APP . 'view/_templates/header.php';
        require APP . 'view/user/login.php';
        require APP . 'view/_templates/footer.php';

    }
	
	public function logout()
    {
		session_start();
        $_SESSION = array();
		session_destroy();
		header('location: ' . URL );
    }
	
	public function checkLogin($username)
    {	
        session_start();
		$username = isset($_POST['username']) ? $_POST['username'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';
	   
        $user = $this->model->checkLogin($username,$password);
        if($user){
            $_SESSION['is_logged_in'] = true;
            $_SESSION['username'] = $username;
            header('location: ' . URL .'user/profile');
        } else {
            $_SESSION['is_logged_in'] = false;
            require APP . 'view/_templates/header.php';
            require APP . 'view/user/login-failed.php';
            require APP . 'view/_templates/footer.php';
        }
    }
}
