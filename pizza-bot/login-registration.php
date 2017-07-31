<?php
    session_start();

    //making the connection 
    mysql_connect("localhost", "race2dea_blagoeg", "strahil123");
    //selecting a specific database
    mysql_select_db("race2dea_pizza-bot_users_db");

    
    if(isset($_POST['login']))
    {
        $password=$_POST['password'];
        $username=$_POST['username'];
        $check_user="SELECT * FROM users WHERE user_password='$password' AND user_name='$username'";
        
        $run=mysql_query($check_user);
        
        if(mysql_num_rows($run)>0)
        {
            //we are saving the username in the session(for a limited time)
            $_SESSION['uSer']=$username;
            //echo "<script>window.open('home.php', '_self')</script>";
            //the 'header('location: home.php');' function replaces the 'echo "<script>window.open('home.php', '_self')</script>"'; function
            header('location: index.php');
            //stops the rest of the program
            die();
        }
        
        else
        {
            echo "<script>alert('Incorrect username and/or password!')</script>";   
        }
    }
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="style/demo.css" />
        <link rel="stylesheet" type="text/css" href="style/login-registration_style.css" />
        <link rel="stylesheet" type="text/css" href="style/animate-custom.css" />
    </head>
    <body>
        <div class="container">
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
        
            <header>    
            </header>
        
            <section>               
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form action="login-registration.php" method="post" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
                                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
                                    <label for="loginkeeping">Keep me logged in</label>
                                </p>
                                <p class="login button"> 
                                    <input type="submit" name="login" value="Login" /> 
                                </p>
                                <p class="change_link">
                                    Not a member yet ?
                                    <a href="#toregister" class="to_register">Join us</a>
                                </p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form action="login-registration.php" method="post" autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
                                    <input type="submit" name="submit" value="Sign up"/> 
                                </p>
                                <p class="change_link">  
                                    Already a member ?
                                    <a href="#tologin" class="to_register"> Go and log in </a>
                                </p>
                            </form>
                        </div>
                        
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>

<?php
    //we check if the submit button with the name "sUbmit" has been pressed
    if (isset($_POST['submit'])) {
        //we make some variables in order to check the entered information
        $user_name = $_POST['usernamesignup'];
        $user_pass = $_POST['passwordsignup'];
        $user_pass_confirm = $_POST['passwordsignup_confirm'];
        $user_email = $_POST['emailsignup'];
        
        if ($user_name == '') {
            //a javascript alert
            echo "<script> alert('Please enter your username!') </script>";
            //don't execute the rest if that happens so we get only one message at one time if any 
            exit();
        }   
        
        if ($user_pass == '') {
            echo "<script> alert('Please enter your password!') </script>";
            exit();
        }

        if ($user_pass != $user_pass_confirm) {
            echo "<script> alert('The password confirmation must match your original password!') </script>";
            exit();
        }
        
        if ($user_email == '') {
            echo "<script> alert('Please enter your email!') </script>";
            exit();
        }
        
        //we gather all the emails in the user table in the users_db
        $check_email="SELECT * FROM users WHERE user_email='$user_email'";
        //we assign the $check_email variable to the $run one
        $run_email=mysql_query($check_email);
        
        //we check if there is more than 0 rows (meaning 1) with the same email
        //if so we alert the user and stop the program
        if(mysql_num_rows($run_email)>0)
        {
            echo "<script>alert('Email $user_email already exists in our database!')</script>";
            exit(); 
        }   
        
        $check_user="SELECT * FROM users WHERE user_name='$user_name'";
        $run_user=mysql_query($check_user);
        if(mysql_num_rows($run_user)>0)
        {
            echo "<script> alert('The user $user_name already exists in our database!')</script>";
            exit(); 
        }   
        
        $check_pass="SELECT * FROM users WHERE user_password='$user_pass'";
        $run_pass=mysql_query($check_pass);
        if(mysql_num_rows($run_pass)>0)
        {
            echo "<script> alert('The password already exists in our database!')</script>";
            exit(); 
        }   
        
        //we add the values of the variables which we declared in the beginning of the php code
        //then we insert them into the appropriate columns of our users table with the mysql function assigned to the variable query  
        $query="INSERT INTO users (user_name, user_password, user_email, won) VALUES ('$user_name', '$user_pass', '$user_email', '0')";
        if(mysql_query($query))
        {
            $_SESSION['uSer']=$user_name;
            //we want to be redirected to the main page after a successful registration so a simple alert won't do 
            //echo "<script>alert('Registration successful!')</script>"; 
            echo "<script>window.open('index.php', '_self')</script>";
            //"_self" means that the target(home.php) will be opened in the same window
        }
    }
?>