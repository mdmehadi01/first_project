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
				return $Result;
			}
			else
			{
				return false;
			}

		}

		public function close()
		{
			return $this->Connection->close();
		}
	}


 ?>