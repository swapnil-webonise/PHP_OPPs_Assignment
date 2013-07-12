<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

class DBUtils
{
	public function dbConnect()
	{
		$con = mysql_connect("localhost","root","root");

		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}	
		mysql_select_db("message_board_system");	
		
		return $con;
	}

	public function dbClose($con)
	{
		mysql_close($con);
	}
	
	public function getAllMessages() 
	{
		$selectQuery=" select * from messages ";
		$recordSet=mysql_query($selectQuery) or die(mysql_errno());

		$messageArray=array();
		while ($row = mysql_fetch_array($recordSet, MYSQL_ASSOC)) {
			$messageObj=new Message();
			$messageObj->id=$row["id"];
			$messageObj->author=$row["author"];
			$messageObj->subject=$row["subject"];
			$messageObj->msgDate=$row["msgDate"];
			$messageObj->msgBody=$row["msgBody"];
			array_push($messageArray, $messageObj);
		}		
		return $messageArray;
	}
	
	public function addMessage($msg) 
	{
		$insertQuery="INSERT INTO messages(id,author,subject,msgDate,msgBody) VALUES (null,'".$msg->author."','".$msg->subject."','".$msg->msgDate."','".$msg->msgBody."')";

		$flag=mysql_query($insertQuery) or die(mysql_errno());
		return $flag;
	}
	
	public function updateMessage($msg) 
	{
		$updateQuery="update messages set author='".$msg->author."',subject='".$msg->subject."',msgDate='".$msg->msgDate."',msgBody='".$msg->msgBody."' where id=".$msg->id;

		$flag=mysql_query($updateQuery) or die(mysql_errno());	
		return $flag;
	}
	
	public function deleteMessageById($msg_id) 
	{
		$deleteQuery="delete from messages where id=".$msg_id;

		$flag=mysql_query($deleteQuery) or die(mysql_errno());	
		return $flag;
	}
}
?>
