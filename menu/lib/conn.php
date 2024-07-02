<?php
	class conn extends page_info{
		//public $host = "localhost:3306";
		//public $user = "asbesocv_asbesoc";
		//public $pass = "Super@#$1234";
		//public $db   = "asbesocv_asbesoc";
		//public $paystack_key = "sk_live_0a18510eb3515d39530367f5d33f40bbc77e236f";
		//public $email = "asbesocng@gmail.com";
		//public $email = "info@asbesoc-vpad.org";
		//public $email_2 = "noreply@asbesoc-vpad.org";
		
		public $host = "localhost:3306";
		public $user = "root";
		public $pass = "";
		public $db   = "alert";
		public $email = "abrahamlivinus@gmail.com";
		public $email_2 = "abrahamlivinus@gmail.com";
		public $conn = NULL;
		
		
		//function connect(){
			//mysqli_connect($this->host,$this->user,$this->pass,$this->db);
		//}
		
	}
	$conn = new conn;
		
?>