<?php

require_once('db-utils.class.php');

class Message
{
	public $id;
	public $author;
	public $subject;
	public $msgDate;
	public $msgBody;
	
	public function __construct()
	{
		$id=null;
		$author="";
		$subject="";
		$msgDate="";
		$msgBody="";
	}
	
	public function setAuthor($author)
	{
		$this->author=$author;
	}
	
	public function setSubject($subject)
	{
		$this->subject=$subject;
	}

	public function setMessageDate($msgDate)
	{
		$this->msgDate=$msgDate;
	}	
	
	public function setMessageBody($msgBody)
	{
		$this->msgBody=$msgBody;
	}
}


/*
echo "<pre>";

$objDBUtils=new DBUtils();

$connection=$objDBUtils->dbConnect();
$date=new DateTime();

$message1=new Message();
$message1->id=null;
$message1->author="Swapnil";
$message1->subject="Assignment 1";
$message1->msgDate=$date->format("Y-m-d H:i:s");
$message1->msgBody="Assignment 1 completed";
$objDBUtils->addMessage($message1);						

$message2=new Message();
$message2->id=null;
$message2->author="Swapnil";
$message2->subject="Assignment";
$message2->msgDate=$date->format("Y-m-d H:i:s");
$message2->msgBody="Assignment 2 completed";
$objDBUtils->addMessage($message2);

$message3=new Message();
$message3->id=null;
$message3->author="Swapnil";
$message3->subject="Assignment 3";
$message3->msgDate=$date->format("Y-m-d H:i:s");
$message3->msgBody="Assignment 3 completed";
$objDBUtils->addMessage($message3);

$message4=new Message();
$message4->id=null;
$message4->author="Swapnil";
$message4->subject="Assignment 4";
$message4->msgDate=$date->format("Y-m-d H:i:s");
$message4->msgBody="Assignment 4 completed";
$objDBUtils->addMessage($message4);

$messageUpdate=new Message();
$messageUpdate->id=2;
$messageUpdate->author="Swapnil";
$messageUpdate->subject="Assignment 2";
$messageUpdate->msgDate=$date->format("Y-m-d H:i:s");
$messageUpdate->msgBody="Assignment 2 completed";
$objDBUtils->updateMessage($messageUpdate); 			  

$objDBUtils->deleteMessageById(4);						 

$msgArray=$objDBUtils->getAllMessages();                 
print_r($msgArray);



$objDBUtils->dbClose($connection);

echo "</pre>";

*/
?>
