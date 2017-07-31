<?php 
	session_start();
	
	if(!$_SESSION['aDmin_name'])
	{
		header("location: admin_login.php");
	}
?>

<html>
  <head>
	<meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="style/demo.css" />
        <link rel="stylesheet" type="text/css" href="style/login-registration_style.css" />
        <link rel="stylesheet" type="text/css" href="style/animate-custom.css" />
    	<link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
	
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    	<script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    	<script src="scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
	
  </head>
  <body>
  	<div class="container" style="top: 20vh; ">
            <nav>
            <ul>
            <li>
                <a href="index.php" class="active">Начало</a>
            </li>
            <li>
                <a href="index.php">Меню</a>
            </li>
            <li>
                <a href="chat-bot.php">Чат Бот</a>
            </li>
            <li>
                <a href="login-registration.php" class="active">Вход/Регистрация</a>
            </li>
            </ul>
        </nav>
  	
	<div id="PeopleTableContainer" style="width: 600px; margin-left: auto; margin-right: auto;"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
				title: 'Table of people',
				actions: {
					listAction: 'UserActions.php?action=list',
					createAction: 'UserActions.php?action=create',
					updateAction: 'UserActions.php?action=update',
					deleteAction: 'UserActions.php?action=delete'
				},
				fields: {
					user_id: {
						key: true,
						create: false,
						edit: false,
						list: false
					},
					user_name: {
						title: 'User Name',
						width: '40%'
					},
					user_password: {
						title: 'Password',
						width: '20%'
					},
					user_email: {
						title: 'Email',
						width: '20%'
					}
				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>
 	</div>
  </body>
</html>
