<?php
	include 'message.class.php';

	$objDBUtils=new DBUtils();

	$connection=$objDBUtils->dbConnect();
	$date=new DateTime();
		
	if(isset($_POST['btnAddMessage']))
	{
		$date=new DateTime();
		$message=new Message();
		$message->id=null;
		$message->author=$_POST["txtAuthor"];
		$message->subject=$_POST["txtSubject"];
		$message->msgDate=$date->format("Y-m-d H:i:s");
		$message->msgBody=$_POST["txtBody"];
		$flag=$objDBUtils->addMessage($message);
		if($flag)
			echo "Message added successfully";
		else
			die("Message not added");
	}
	else if(isset($_POST['btnDeleteMessage']))
	{
		$flag=$objDBUtils->deleteMessageById(4);
		if($flag)
			echo "Message deleted successfully";
		else
			die("Message not deleted");		
	}
	else if(isset($_POST['btnUpdateMessage']))
	{
		$date=new DateTime();

		$messageUpdate=new Message();
		$messageUpdate->id=$_POST["txtMessageId"];
		$messageUpdate->author=$_POST["txtAuthor"];
		$messageUpdate->subject=$_POST["txtSubject"];
		$messageUpdate->msgDate=$date->format("Y-m-d H:i:s");
		$messageUpdate->msgBody=$_POST["txtBody"];
		$flag=$objDBUtils->updateMessage($messageUpdate);

		if($flag)
			echo "Message update successfully";
		else
			die("Message not updated");		
	}
	else
	{
?>
<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Message Board System</title>
	</head>
	<style>  
		a:link {color:blue;}      /* unvisited link */
		a:visited {color:navy;}  /* visited link */
		a:hover {color:#FF00FF;}  /* mouse over link */
		a:active {color:#0000FF;}
		.menu
		{ 
			padding: 5px 10px; 
			text-decoration: none;
			background-color: #d2d2d2;  
			border:1px solid #666;      
			margin: 2px;
		} 
	</style>
	<body>	
			<br />
			<a href="home.php?page=addMessage" name="lnkAddMessage" class="menu">Add Message</a>
			<a href="home.php?page=deleteMessage" name="lnkDeleteMessage" class="menu">Delete Message</a>
			<a href="home.php?page=updateMessage" name="lnkUpdateMessage" class="menu">Update Message</a>
			<a href="home.php?page=getAllMessages" name="lnkGetAllMessage" class="menu">Get All Messages</a>
			<br /><br />
		<?php
			if($_GET['page']==='addMessage')
			{
		?>
				<form name="addMessageForm" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<table>
						<tr>  
							<td><label for="txtAuthor" >Author</label></td>
							<td><input type="text" name="txtAuthor" id="txtAuthor" tabindex="1" /></td>  
						</tr>
						<tr>
							<td><label for="txtSubject" >Subject</label></td>
							<td><input type="text" name="txtSubject" id="txtSubject" tabindex="2" /></td>
						</tr>   
						<tr>
							<td><label for="txtBody" >Body</label></td>
							<td><input type="text" name="txtBody" id="txtBody" tabindex="3" /></td>
						</tr>   							
						<tr>
							<td></td>
							<td><input type="submit" name="btnAddMessage" tabindex="4"  value="Add Message"  /></td>            
						</tr> 
					</table>  
				</form>	 	
		<?php
			}
			else if($_GET['page']==='deleteMessage')
			{
		?>
				<form name="deleteMessageForm" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<table>
						<tr>  
							<td><label for="txtMessageId" >Message ID</label></td>
							<td><input type="text" name="txtMessageId" id="txtMessageId" tabindex="1" /></td>  
						</tr> 							
						<tr>
							<td></td>
							<td><input type="submit" name="btnDeleteMessage" tabindex="2"  value="Delete Message"  /></td>            
						</tr> 
					</table>  
				</form>	 	
		<?php
			}
			else if($_GET['page']==='updateMessage')
			{
		?>
				<form name="updateMessageForm" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<table>
						<tr>  
							<td><label for="txtMessageId" >Message ID</label></td>
							<td><input type="text" name="txtMessageId" id="txtMessageId" tabindex="1" /></td>  
						</tr> 
						<tr>  
							<td><label for="txtAuthor" >Author</label></td>
							<td><input type="text" name="txtAuthor" id="txtAuthor" tabindex="2" /></td>  
						</tr>
						<tr>
							<td><label for="txtSubject" >Subject</label></td>
							<td><input type="text" name="txtSubject" id="txtSubject" tabindex="3" /></td>
						</tr>   
						<tr>
							<td><label for="txtBody" >Body</label></td>
							<td><input type="text" name="txtBody" id="txtBody" tabindex="4" /></td>
						</tr>   							
						<tr>
							<td></td>
							<td><input type="submit" name="btnUpdateMessage" tabindex="5" value="Update Message"  /></td>            
						</tr> 
					</table>  
				</form>	
		<?php
			}
			else if($_GET['page']==='getAllMessages')
			{					
				$msgArray=$objDBUtils->getAllMessages(); 	
				echo "<table border=1><tr><th>No</th><th>Author</th><th>Subject</th><th>Message Date</th><th>Message Body</th></tr>";
				$index=1;
				foreach($msgArray as $val)
				{
					echo "<tr><th>".$index++."</th><th>".$val->author."</th><th>".$val->subject."</th><th>".$val->msgDate."</th><th>".$val->msgBody."</th></tr>";
				}	
				echo "</table>";
		?>			
	
		<?php
			}
		}
		?>
	</body>
</html>		
