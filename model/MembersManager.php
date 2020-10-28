<?php
require_once("Manager.php");

class  MembersManager extends Manager
{

	function addMembers($pseudo,$hash_pass,$mail){
		$db=$this->dbConnet();
		$members=$db->prepare("INSERT INTO members(pseudo,passwd,email,registration_date)  VALUE(?,?,?,now())");
		$registration=$members->execute(array($pseudo,$hash_pass,$mail));
		return $registration;


	}

	function connexionMembers($pseudo)
	{
		$db=$this->dbConnet();

		$req=$db->prepare("SELECT pseudo,passwd FROM members WHERE pseudo=? ");
		$req->execute(array($pseudo)); 
		$authentify=$req->fetch();
		return $authentify;
	         	
		

	}

}
