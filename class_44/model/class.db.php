<?php 
	/**
	 * DB Class
	 */
	class db
	{
		private $Host = 'localhost';
		private $User = 'root';
		private $Pass = '';
		private $Db   = 'sms';

		private $Connection;
		
		function __construct()
		{
			$this->Connection = new mysqli($this->Host, $this->User, $this->Pass, $this->Db);
		}

		public function execute($Query)
		{
			$Result = $this->Connection->query($Query);

			if ($Result) {
				return true;
			}
			else
			{
				return false;
			}

		}

		//sob dhoroner table ar select query ar jonno akta fetchdata banabo
		public function fetchData($Query)
		{
			$Result =$this->Connection->query($Query);

			if(mysqli_num_rows($Result) == 0)
			{
				return null;
			}
			else{
				while($Row = mysqli_fetch_assoc($Result))
				{
					$Data[] =$Row;
				}
				return $Data;
			}
		}

		public function close()
		{
			return $this->Connection->close();
		}
		public function getByPK($id){
			$Query = "SELECT * FROM students WHERE id = $id";
			$db= new db();
			$Data = $db->fetchData($Query);
			$db->close();
			return $Data;
		}

	}
 ?>