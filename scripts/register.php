<?php

	function Error_msg ($geterror)
		{
			header("Location: http://www.blackairplane.com/invoticus/signup.php?err=$geterror&id=tagteam");
		}



	$dbUsrFirstName = $_REQUEST['firstname'];
	$dbUsrLastName = $_REQUEST['lastname'];
	$dbUsrName = $_REQUEST['username'];
	$dbUsrPass1 = $_REQUEST['password1'];
	$dbUsrPass2 = $_REQUEST['password2'];
	$dbUsrEmail1 = $_REQUEST['email1'];
	$dbUsrEmail2 = $_REQUEST['email2'];
	$birthMonth = $_REQUEST['bmonth'];
	$birthDay = $_REQUEST['bday'];
	$birthYear = $_REQUEST['byear'];
	$dbUsrGender = $_REQUEST['gender'];
	
	// Start entry verification
	// Check for NULL values
	

		if ($dbUsrFirstName == NULL)
			{ 
			Error_msg (1);
			}
		elseif ($dbUsrLastName == NULL)
			{ 
			Error_msg (1);
			}		
		elseif ($dbUsrName == NULL)
			{ 
			Error_msg (1);
			}
		elseif ($dbUsrPass1 == NULL)
			{ 
			Error_msg (1);
			}
		elseif ($dbUsrPass2 == NULL)
			{ 
			Error_msg (1);
			}
		elseif ($dbUsrEmail1 == NULL)
			{ 
			Error_msg (1);
			}
		elseif ($dbUsrEmail2 == NULL)
			{ 
			Error_msg (1);
			}
		elseif ($dbUsrGender == NULL)
			{ 
			Error_msg (1);
			}
		
		// Check that passwords and e-mails match
		
		elseif ($dbUsrPass1 != $dbUsrPass2)
			{ 
			Error_msg (2);
			}		
		elseif ($dbUsrEmail1 != $dbUsrEmail2)
			{ 
			Error_msg (3);
			}

		// Verify that e-mail is legitimate
		
		elseif (strlen($dbUsrEmail1) < 7)
			{
			Error_msg (4);
			}
		elseif (strlen($dbUsrEmail1) > 40)
			{
			Error_msg (4);
			}
		elseif (strpos($dbUsrEmail1, "@") == FALSE)
			{
			Error_msg (4);
			}
		elseif (strpos($dbUsrEmail1, ".") == FALSE)
			{
			Error_msg (4);
			}

		// Verify lengths of entries
		
			// Firstname 2 - 25 
		elseif (strlen($dbUsrFirstName) < 2)
			{
			Error_msg (5);
			}
		elseif (strlen($dbUsrFirstName) > 25)
			{
			Error_msg (5);
			}
			
			// Lastname	
		
		elseif (strlen($dbUsrLastName) < 2)
			{
			Error_msg (5);
			}
		elseif (strlen($dbUsrLastName) > 40)
			{
			Error_msg (5);
			}
			
			// Username	
		
		elseif (strlen($dbUsrName) < 4)
			{
			Error_msg (5);
			}
		elseif (strlen($dbUsrName) > 30)
			{
			Error_msg (5);
			}
			
			// Password	
		
		elseif (strlen($dbUsrPass1) > 15)
			{
			Error_msg (6);
			}
		elseif (strlen($dbUsrPass1) < 7)
			{
			Error_msg (6);
			}
						
		// Verify that username is not already in use
		else 
			{
			include("connection.php");
			$usernamequery = "SELECT * FROM Users WHERE dbUsrName = " . $dbUsrName;
			$usernameresult = mysql_query ($usernamequery);	
			$usernamerows = mysql_num_rows ($usernameresult);
				if ($usernamerows != 0)
					{
					Error_msg (7);
					}
			}
		// If all entries pass verification, the following script runs:
		
		echo "Everything is OK!<p />This will send to database in live test.";
			
			
?>