<?php 
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
				$Data = $db->fetchData($Query);
			
				//$Data = array(); // Initialize the $Student array
				$db->close();
				return $Data; // Return $Student instead of $Data
			}		
			public function getByPK($id)
			{
				$Query ="SELECT * FROM students WHERE id =$id";
				$db = new db();
				$Data = $db->fetchData($Query);
				$db->close();
				return $Data;
			}

			public function update($Data,$id)
			{
			$this->name    = $Data['name'];
			$this->email   = $Data['email'];
			$this->roll    = $Data['roll'];
			$this->address = $Data['address'];
			$this-> id=$id;
		 $Query="UPDATE students SET name = '$this->name ', roll='$this->roll ',email='$this->email', address='	$this->address'";
			echo $Query .="WHERE id =$this->id";

			$db = new db();
				$Data = $db->execute($Query);
				$db->close();
				return $Data;
			}
	}
?>