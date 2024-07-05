<?php
session_start();

	class page_info{
		public $page_id = 2;
		public $page_name = 'signup';
		
	}
	include_once "control.php";
	
	class signup extends control{
		public function reg(){
			if(isset($_POST["signup"])){
				$sql = "INSERT INTO users(first_name, last_name, user_name, email, password, phone, date) VALUES('$_POST[first_name]','$_POST[last_name]','$_POST[user_name]','$_POST[email]','$_POST[password]', '$_POST[phone]','".$this->date."')";
				$text = "Hello Gift, can you see this? Just running a test!";
				
				$this->sql_query("insert",$sql);
				
				echo"<script>alert('A confirmation Link And Code Has Been Sent To Your Whataapp and Email, Provide The Code Or Click The Link To Confirm Your Account.');
				window.location.href='../index.php';</script>";
			}
		}
		
		public function login(){
			if(isset($_POST["login"])){
				$sql = "SELECT * FROM users WHERE email = '$_POST[email]' && password = '$_POST[password]' OR user_name = '$_POST[email]' && password = '$_POST[password]' OR phone = '$_POST[email]' && password = '$_POST[password]'";
				
				$this->sql_query("login",$sql);
			}
		}
		
		public function logout(){
			if($_REQUEST["page"] == "logout"){
				$sql = "UPDATE users SET presence = '0' WHERE id = '".$_SESSION['user_id']."'";
				if(mysqli_query($this->conn(),$sql) == true){
					echo"updated";
				}
				
				echo"<script type='text/javascript'> alert('(".$_REQUEST['app_name']."): Good bye ".$_SESSION['first_name']." ".$_SESSION['last_name'].", We Hope To See You Soon !!!'); </script>";
				
				unset($_SESSION['user_id']);
				unset($_SESSION['first_name']);
				unset($_SESSION['last_name']);
				unset($_SESSION['middle_name']);
				unset($_SESSION['user_name']);
				unset($_SESSION['password']);
				session_destroy();
				//header('location:../index');
				echo"<script type='text/javascript'> window.location.href= '../index.php'; </script>";
			}
		}
	}
	$signup = new signup;
	$signup->reg();
	$signup->login();
	$signup->logout();
?>