<?php 

	/**
	 * Stdent Class
	 */
	class student
	{
		private $id;
		private $name ;
		private $roll;
		private $email;
		private $address;

		public function add($Data)
		{
			$this->name    = $Data['name'];
			$this->email   = $Data['email'];
			$this->roll    = $Data['roll'];
			$this->address = $Data['address'];

			$Query = "INSERT INTO students (name, roll, email, address)";
			$Query .= " VALUES('$this->name', '$this->roll', '$this->email', '$this->address')";

			$db = new db();

			$db->execute($Query);

			$db->close();
		}

		public function delete($id)
		{
			$this->id = $id;
			$Query = "DELETE FROM students WHERE id = $this->id";

			$db = new db();
			$db->execute($Query);
			$db->close();

		}

           
			public function getAll()

			{
				$Query = "SELECT * FROM students";
				$db = new db();
				$Data = $db->execute($Query);
			
				//$Data = array(); // Initialize the $Student array
			
				while ($Row = mysqli_fetch_assoc($Data)) {
					$Student[] = $Row;
				}
			
				$db->close();
				return $Student; // Return $Student instead of $Data
			}
			
	}



?>