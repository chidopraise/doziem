<?php

	$page_info = new page_info;
	if($page_info->page_id == '1'){
		include("lib/conn.php");
	}elseif($page_info->page_id == '2'){
		include("../lib/conn.php");
	}elseif($page_info->page_id == '3'){
		include("../../lib/conn.php");
	}
	
	date_default_timezone_set("africa/lagos");
	$date = date("h:i:s D,d/m/Y");
	
	

	
	
	#[AllowDynamicProperties]
	class control extends conn{
		
		public $url = NULL;
		
		function path($url){
			$this->url = $url;
			if($this->page_id == 1){
				echo $this->url;
			}elseif($this->page_id == 2){
				echo"../".$this->url;
			}elseif($this->page_id == 3){
				echo"../../".$this->url;
			}
		}
		
		
		function selector($option1,$option2,$option0){
			$this->option1 = $option1;
			$this->option2 = $option2;
			$this->option0 = $option0;
			
			if(isset($_SESSION["first_name"]) AND $_SESSION["user_id"] == 1){
				echo $this->option1;
			}elseif(isset($_SESSION["first_name"])){
				echo $this->option2;
			}else{
				echo $this->option0;
			}
		}
		
		
		function home(){
			if(isset($_SESSION["first_name"])){
				$this->path('users/'.$_SESSION['user_name']);
			}else{
				$this->path('menu/discount');
			}
		}
		
		function profile(){
			if(isset($_SESSION["first_name"])){
				echo "<li id='li'><a href='";$this->path('menu/profile');echo"' class='a'>profile</a></li>";
			}else{
				
			}
		}
		
		function profile1(){
			if(isset($_SESSION["first_name"])){
				echo "<li id='li2'><a href='";$this->path('menu/profile');echo"' class='a2'>PROFILE</a></li>";
			}else{
				
			}
		}
		
		function match(){
			if(isset($_SESSION["first_name"])){
				echo "<li id='li'><a href='";$this->path('menu/match');echo"' class='a'>match</a></li>";
			}else{
				
			}
		}
		
		function purchase(){
			if(isset($_SESSION["first_name"])){
				echo "<li id='li'><a href='";$this->path('menu/purchase');echo"' class='a'>make purchase with 50% discount</a></li>";
			}else{
				
			}
		}
		
		function still_on(){
			if(isset($_SESSION["first_name"])){
				echo"<script>window.location.href = '../users/$_SESSION[user_name]';</script>";
			}
		}
		


	}
	$control = new control;
	
	
	#[AllowDynamicProperties]
	class fetcher extends conn{
		
	}
	
?>