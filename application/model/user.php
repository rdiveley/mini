<?php
	class User
	{
		/**
	     * @param object $db A PDO database connection
	     */
	    function __construct($db)
	    {
	        try {
	            $this->db = $db;
	        } catch (PDOException $e) {
	            exit('Database connection could not be established.');
	        }
	    }

	    public function getAllUsers(){
	    	$sql = "SELECT id, fname, lname FROM users";
	        $query = $this->db->prepare($sql);
	        $query->execute();

	        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
	        // core/controller.php! If you prefer to get an associative array as the result, then do
	        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
	        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
	        return $query->fetchAll();
	    }

	     public function getUser($id){
	     	
	    	$sql = "SELECT id, fname, lname FROM users where id = :id";
	        $query = $this->db->prepare($sql);
	        $parameters = array(':id' => $id);
	        $query->execute($parameters);

	        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
	        // core/controller.php! If you prefer to get an associative array as the result, then do
	        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
	        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
	        return $query->fetchAll();
	    }

	}
?>