<?php
//index.php

$error = '';
$teamname = '';
$projectname = '';
$category = '';
$department='';
$abstract = '';
$link = '';
$college = '';
$participants = '';
$name = '';
$contact = '';
$email = '';
$class = '';

function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["submit"]))
{
	if(empty($_POST["teamname"]))
	{
		$error .= '<p>Please Enter your Team Name</p>';
	}
	else
	{
		$teamname = clean_text($_POST["teamname"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$teamname))
		{
			$error .= '<p>Only letters and white space allowed</p>';
		}
	}

	if(empty($_POST["projectname"]))
	{
		$error .= '<p>Project Name is required</p>';
	}
	else
	{
		$projectname = clean_text($_POST["projectname"]);
	}

	if(empty($_POST["category"]))
	{
		$error .= '<p>Please Enter your Category</p>';
	}
	else
	{
		$category = clean_text($_POST["category"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$category))
		{
			$error .= '<p>Only letters and white space allowed</p>';
		}
	}

if(empty($_POST["department"]))
	{
		$error .= '<p>Please Enter your Department</p>';
	}
	else
	{
		$department = clean_text($_POST["department"]);
		
	}

  if(empty($_POST["abstract"]))
  {
    $error .= '<p>Abstract is required</p>';
  }
  else
  {
    $abstract = clean_text($_POST["abstract"]);
  }

	$link = clean_text($_POST["link"]);


	if(empty($_POST["participants"]))
	{
		$error .= '<p>No. of Participants is required</p>';
	}
	else
	{
		$participants = clean_text($_POST["participants"]);
	}

	if(empty($_POST["name"]))
	{
		$error .= '<p>Please Enter the Names of Participants</p>';
	}
	else
	{
		$name = clean_text($_POST["name"]);
		if(!preg_match("/^[,a-zA-Z ]*$/",$name))
		{
			$error .= '<p>Only letters and white space allowed</p>';
		}
	}

  if(empty($_POST["college"]))
  {
    $error .= '<p>College/School is required</p>';
  }
  else
  {
    $college = clean_text($_POST["college"]);
  }

    if(empty($_POST["class"]))
  {
    $error .= '<p>City is required</p>';
  }
  else
  {
    $class = clean_text($_POST["class"]);
  }


	if(empty($_POST["contact"]))
	{
		$error .= '<p>Please Enter your Contact no.</p>';
	}
	else
	{
		$contact = clean_text($_POST["contact"]);
	}

	if(empty($_POST["email"]))
	{
		$error .= '<p>Please Enter your Email</p>';
	}
	else
	{
		$email = clean_text($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error .= '<p>Invalid email format</p>';
		}
	}
	

	if($error == '')
	{
		$file_open = fopen("register_techexpo.csv", "a");
		$no_rows = count(file("register_techexpo.csv"));
		if($no_rows > 1)
		{
			$no_rows = ($no_rows - 1) + 1;
		}
		$form_data = array(
			'sr_no'		    =>	  $no_rows,
			'teamname'    =>    $teamname,
			'projectname' =>    $projectname,
			'category'    =>    $category,
                        'department'   =>   $department,
      'abstract'    =>    $abstract,
			'link'        =>    $link,
			'participants'=>    $participants,
			'name'		    =>	  $name,
      'college'     =>    $college,
      'class'       =>    $class,
			'contact'	    =>	  $contact,
			'email'		    =>	  $email,
		);
		fputcsv($file_open, $form_data);
		$error = 'Congrats! You have registered successfully.';
		//Email Setup
		$conf_subject = 'TechExpo Registration Confirmation Mail';
/*
// Who should the confirmation email be from?
$conf_sender = 'TechExpo <techexpo@techniche.org>';

$msg = $teamname. ",\n\nThank you for your interest in TechExpo'18. This mail is regarding your registration to the the TechExpo 2018 round 1. Please take this as a confirmation of your participation. \nFor any further queries please write to techexpo@techniche.org or call us at +91 9957997211.\nWish you our best!\nTeam TechExpo\n";
$headers = "From: techexpo@techniche.org\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email";   

mail( $email, $conf_subject, $msg, $headers );	
	//Email Setup End*/
	$message = "Line 1\r\nLine 2\r\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('daman@iitg.ernet.in', 'My Subject', $message);
		$teamname = '';
		$projectname = '';
		$category = '';
                $department = '';
    $abstract = '';
		$link = '';
		$participants = '';
		$name = '';
    $college = '';
    $class = '';
		$contact = '';
		$email = '';

    echo "<script type='text/javascript'>alert(\"$error\");</script>";
    $error ='';

	}
}
?>


<!-- HTML Code -->
<!DOCTYPE html>
<html lang="en" >

<head>
  	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

  	<title>T'18 || TechExpo Registration</title>
    <link rel="stylesheet" href="style.css">

      <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css" />

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <style>
    .btn-file {
    position: relative;
    overflow: hidden;
}

.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;}

.text {
  background-color: #fed136;
  color: black;
  font-size: 16px;
  border-radius: 2px;
  padding: 10px 10px;
}
.team-member {
}

#image1 {
  opacity: 1;
  display: block;
  height: auto;
  transition: .5s ease;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -200%);
  -ms-transform: translate(-50%, -50%)
}

.team-member:hover #image1 {
  opacity: 0.3;
}

.team-member:hover .middle {
  opacity: 1;
}

#linkk{

    transition: transform 0.5s ease;
}

#hrefl:hover #linkk{
    transform: rotate(360deg);}

#leftc {
    animation-name: leftfly;
    animation-duration: 1s;
    animation-timing-function: ease-out;
    animation-delay: 1s;
    animation-fill-mode: both;
}

@keyframes leftfly{
    0% {
    opacity: 0;
    transform: translateX(-2000px);
  }

  60% {
    opacity: 1;
    transform: translateX(30px);
  }

  80% {
    transform: translateX(-10px);
  }

  100% {
    transform: translateX(0);
  }
}

#rightc {
    animation-name: rightfly;
    animation-duration: 1s;
    animation-delay: 1s;
    animation-timing-function: ease-out;
    animation-fill-mode: both;
}

@keyframes rightfly{
    0% {
        opacity: 0;
        transform:translateX(2000px);
    }

    60% {
        opacity: 1;
        transform: translateX(-30px);
    }

    80%{
        transform: translateX(10px);
    }

    100%{
        transform: translateX(0px);
    }
}

#anim{
    animation-name: kmore;
    animation-iteration-count: infinite;
    animation-duration: 1s;
    animation-timing-function: ease-in-out;
}

@keyframes kmore{
    0%{
        transform: translateY(0px);
    } 


    50%{
    transform : translateY(5px);
}

    100%{
        transform: translateY(0px);
    }


}

.blinking-cursor {
  font-weight: 100;
  font-size: 1px;
  color: #2E3D48;
  -webkit-animation: 0.7s blink step-end infinite;
  animation: 0.7s blink step-end infinite;
}

@keyframes "blink" {
  from, to {
    color: transparent;
  }
  50% {
    color: white;
  }
}


@-webkit-keyframes "blink" {
  from, to {
    color: transparent;
  }
  50% {
    color: white;
  }
}

</style>
    <script>
    
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index" style=" ">

	<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top" style="background-color: black">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="margin-top: 20px;">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="https://www.techniche.org/" style="padding: 0px"><img src="img.png" style="max-width: 100%;
    width: 55%;""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="margin-top: 18px; margin-bottom: 18px;">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="https://techniche.org/techexpo/#About">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="https://techniche.org/techexpo/#Benefits">Benefits</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="https://techniche.org/techexpo/#Registration">Registration</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="https://techniche.org/techexpo/#team">Previous Year Judges</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="https://techniche.org/techexpo/#reviews">Reviews</a>
                    </li><!--
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>	


<div class='login'>
  <!-- <img src='img.png' width="350px"> -->
  <form method="post">
	  <h3>Register for TechExpo</h3>
	  <?php echo $error; ?>
	  <br>
    <h4>Category : 
    <select name='category'>
      <option>Juniors</option>
      <option>Seniors</option>
    </select><br>

    <h4>Department : 
    <select name='department'>
      <option>Bio-Tech</option>
      <option>Electronics</option>
      <option>Robotics</option>
      <option>Physics</option>
      <option>Computer Science</option>
      <option>Design</option>
      <option>Chemistry</option>
      <option>Material Science</option>
      <option>Environmental Science</option>
    </select><br>


	  <input name='teamname' placeholder='Team Name' type='text' required="">
	  <input name='projectname' placeholder='Project Name' type='text' required=""> <br>
    <input name='abstract' placeholder='Abstract Link' type='text' required="">
	  <input name='link' placeholder='Video Link' type='text'>
    <input name='participants' placeholder='No. of Participants' type='text' required="">
    <input name='name' placeholder='Name of Participants' type='text' required="">
	  <input name='college' placeholder='College/School' type='text' required="">
    <input name='class' placeholder='City' type='text' required="">
	  <input name='contact' placeholder='Mobile Number' type='text' required="">
	  <input name='email' placeholder='E-Mail Address' type='text' required="">
	  <br>
	  <br>
	  <br>
	  <input name='submit' type='submit' value='Register'>
  </form>
</div>

</body>

</html>
