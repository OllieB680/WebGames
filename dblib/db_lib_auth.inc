<?php 
class auth_db
{
    public $db_msg = "";
    private $db = "";
    private $pdata = "";
	private $debug = 0;
	
		/* ----------------------------------------------------------------
    function: __construct()
    Responsible for creating the object
	and connecting to the database using more secure PDO
    creates database handle $db
    ---------------------------------------------------------------- */
	public function __construct()
    {
		/*** mysql hostname ***/
		$hostname = "localhost";
		/*** mysql username ***/
		$username = "root";
		/*** mysql password ***/
		$password = "usbw";
	   
		try 
		{
			$this->db = new PDO("mysql:host=localhost;port=3308;dbname=dbgames", $username, $password);
			// stores the outcome of the connection into a class variable
		}
		catch(PDOException $e)
		{
		   $this->db = -1;
		   $this->db_msg = "Could not connect to student centered learning system database: ".$e->getMessage();
		}
	}

   public function authenticate($uname, $pw)
   {		
		$count = 0;
		try 
		{
			$sql = "SELECT CONCAT(uID, \":\", role, \":\", gID) As uProfile 
			        FROM users WHERE uname = \"$uname\" and pwd = \"$pw\"";
		//echo $sql;
			$query = $this->db->prepare( $sql );
			$query->execute();
			$value = $query->fetchColumn();	
									
		} 
		catch(PDOException $ex) 
		{
				$this->db_msg = "An Error occured writing to database: " .$ex->getMessage() ;
		}
		//if ($this->debug == 1)
			//$value = $sql;
		return $value;
		
   }
  
}
?>