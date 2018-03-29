class reg_db
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
			$this->db = new PDO("mysql:host=localhost;port=3308;dbname=smonitor", $username, $password);
			// stores the outcome of the connection into a class variable
		}
		catch(PDOException $e)
		{
		   $this->db = -1;
		   $this->db_msg = "Could not connect to student centered learning system database: ".$e->getMessage();
		}
	}
	
		