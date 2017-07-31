<?php
	session_start();
	
	if(!$_SESSION['aDmin_name'])
	{
		header("location: admin_login.php");
	}

try
{
	//Open database connection
	$con = mysql_connect("localhost", "race2dea_blagoeg", "strahil123");
	//selecting a specific database
	mysql_select_db("race2dea_pizza-bot_users_db", $con);

	//Getting records (listAction)
	if($_GET["action"] == "list")
	{
		//Get records from database
		$result = mysql_query("SELECT * FROM users;");
		
		//Add all records to an array
		$rows = array();
		while($row = mysql_fetch_array($result))
		{
		    $rows[] = $row;
		}

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
	}
	//Creating a new record (createAction)
	else if($_GET["action"] == "create")
	{
		//Insert record into database
		$result = mysql_query("INSERT INTO users(user_name, user_password, user_email) VALUES('" . $_POST["user_name"] . "', '" . $_POST["user_password"] . "', '" . $_POST["user_email"] . "');");
		
		//Get last inserted record (to return to jTable)
		$result = mysql_query("SELECT * FROM users WHERE user_id = LAST_INSERT_ID();");
		$row = mysql_fetch_array($result);

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Record'] = $row;
		print json_encode($jTableResult);
	}
	//Updating a record (updateAction)
	else if($_GET["action"] == "update")
	{
		//Update record in database
		$result = mysql_query("UPDATE users SET user_name = '" . $_POST["user_name"] . "', user_password = " . $_POST["user_password"] . " WHERE user_id = " . $_POST["user_id"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
	//Deleting a record (deleteAction)
	else if($_GET["action"] == "delete")
	{
		//Delete from database
		$result = mysql_query("DELETE FROM users WHERE user_id = " . $_POST["user_id"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}

	//Close database connection
	mysql_close($con);

}
catch(Exception $ex)
{
    //Return error message
	$jTableResult = array();
	$jTableResult['Result'] = "ERROR";
	$jTableResult['Message'] = $ex->getMessage();
	print json_encode($jTableResult);
}
	
?>