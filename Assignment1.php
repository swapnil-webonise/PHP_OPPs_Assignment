<?php
class student
{
	public $fullname;
	public $course;
	public $speciality;
	public $university;
	public $email;
	public $phone;
	
	public function student()
	{
		$fullname="";
		$course="";
		$speciality="";
		$university="";
		$email="";
		$phone=null;		
	}
	public function __construct($fullname)
	{
		$this->fullname=$fullname;
	}
	
	public function setFullname($fullname)
	{
		$this->fullname=$fullname;
	}
	
	public function setCourse($course)
	{
		$this->course=$course;
	}
	
	public function setSpeciality($speciality)
	{
		$this->speciality=$speciality;
	}

	public function setUniversity($university)
	{
		$this->university=$university;
	}	
	
	public function setEmailId($emailId)
	{
		$this->email=$emailId;
	}
	
	public function setPhone($phone)
	{
		$this->phone=$phone;
	}
	
	public function displayInformation()
	{
		echo "<pre>";
		echo "<br />Full name : ".$this->fullname;
		echo "<br />Course : ".$this->course;
		echo "<br />Speciality : ".$this->speciality;
		echo "<br />University : ".$this->university;
		echo "<br />Email Id : ".$this->email;
		echo "<br />Phone no : ".$this->phone;
		echo "</pre>";
	}
}

$s1=new student('Swapnil patil');
$s1->setCourse('MCA');
$s1->setSpeciality('Computer Application');
$s1->setUniversity('Pune');
$s1->setEmailId('swapnil.patil@weboniselab.com');
$s1->setPhone(9860439437);
$s2=new student('Vinod bhale');
$s2->setCourse('MBA');
$s2->setSpeciality('Marketing');
$s2->setUniversity('Pune');
$s2->setEmailId('vinod.bhale@gmail.com');
$s2->setPhone(9623457890);
$s1->displayInformation();
$s2->displayInformation();

unset($s1);
unset($s2);
?>
