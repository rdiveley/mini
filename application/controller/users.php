<?php

/**
 * Class Songs
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Users extends Controller
{
	 public function index()
	    {
	        // getting all users 
	        $users = $this->user->getAllUsers();

	       // load views. within the views we can echo out $users  easily
	        require APP . 'view/_templates/header.php';
	        require APP . 'view/users/index.php';
	        require APP . 'view/_templates/footer.php';
	    }

	 public function getUser($user_id){
	 	
   		 $users = $this->user->getUser($user_id);

	 	  require APP . 'view/_templates/header.php';
	      require APP . 'view/users/userDetails.php';
	      require APP . 'view/_templates/footer.php';

	 }   
}
?>