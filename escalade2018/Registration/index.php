<?php
//index.php

$error = '';
$teamname = '';
$college = '';
$lname = '';
$lnum = '';
$lemail = '';
$ladd = '';
$name1 = '';
$email1 = '';
$name2 = '';
$email2 = '';
$name3 = '';
$email3 = '';
$city = '';

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

	if(empty($_POST["college"]))
	{
		$error .= '<p>College Name is required</p>';
	}
	else
	{
		$college = clean_text($_POST["college"]);
	}

	if(empty($_POST["lname"]))
	{
		$error .= '<p>Please Enter Team Leader name</p>';
	}
	else
	{
		$lname = clean_text($_POST["lname"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$lname))
		{
			$error .= '<p>Only letters and white space allowed</p>';
		}
	}

  if(empty($_POST["lnum"]))
  {
    $error .= '<p>Phone no is required</p>';
  }
  else
  {
    $lnum = clean_text($_POST["lnum"]);
  }



	if(empty($_POST["lemail"]))
	{
		$error .= '<p>E-mail is required</p>';
	}
	else
	{
		$lemail = clean_text($_POST["lemail"]);
		if(!filter_var($lemail, FILTER_VALIDATE_EMAIL))
		{
			$error .= '<p>Invalid email format</p>';
		}
	}

	if(empty($_POST["ladd"]))
	{
		$error .= '<p>Please Enter your Address</p>';
	}
	else
	{
		$ladd = clean_text($_POST["ladd"]);
	}

	if(empty($_POST["name1"]))
	{
		$error .= '<p>Please Enter Team Leader name</p>';
	}
	else
	{
		$name1 = clean_text($_POST["name1"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$name1))
		{
			$error .= '<p>Only letters and white space allowed</p>';
		}
	}

  if(empty($_POST["city"]))
  {
    $error .= '<p>Please select a city</p>';
  }
  else
  {
    $city = clean_text($_POST["city"]);
  }



	if(empty($_POST["email1"]))
	{
		$error .= '<p>E-mail is required</p>';
	}
	else
	{
		$email1 = clean_text($_POST["email1"]);
		if(!filter_var($lemail, FILTER_VALIDATE_EMAIL))
		{
			$error .= '<p>Invalid email format</p>';
		}
	}

	/*if(empty($_POST["add1"]))
	{
		$error .= '<p>Please Enter your Address</p>';
	}
	else
	{
		$add1 = clean_text($_POST["add1"]);
	}*/
	
	if(empty($_POST["name2"]))
	{
		$error .= '<p>Please Enter Team Leader name</p>';
	}
	else
	{
		$name2 = clean_text($_POST["name2"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$name2))
		{
			$error .= '<p>Only letters and white space allowed</p>';
		}
	}

  /*if(empty($_POST["num2"]))
  {
    $error .= '<p>Phone no is required</p>';
  }
  else
  {
    $num2 = clean_text($_POST["num2"]);
  }*/



	if(empty($_POST["email2"]))
	{
		$error .= '<p>E-mail is required</p>';
	}
	else
	{
		$email2 = clean_text($_POST["email2"]);
		if(!filter_var($email2, FILTER_VALIDATE_EMAIL))
		{
			$error .= '<p>Invalid email format</p>';
		}
	}

	/*if(empty($_POST["add2"]))
	{
		$error .= '<p>Please Enter your Address</p>';
	}
	else
	{
		$add2 = clean_text($_POST["add2"]);
	} */
	
	
	if(empty($_POST["name3"]))
	{
		$error .= '<p>Please Enter Team Leader name</p>';
	}
	else
	{
		$name3 = clean_text($_POST["name3"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$name3))
		{
			$error .= '<p>Only letters and white space allowed</p>';
		}
	}

  /*if(empty($_POST["num3"]))
  {
    $error .= '<p>Phone no is required</p>';
  }
  else
  {
    $num3 = clean_text($_POST["num3"]);
  }
*/


	if(empty($_POST["email3"]))
	{
		$error .= '<p>E-mail is required</p>';
	}
	else
	{
		$email3 = clean_text($_POST["email3"]);
		if(!filter_var($email3, FILTER_VALIDATE_EMAIL))
		{
			$error .= '<p>Invalid email format</p>';
		}
	}

	/*if(empty($_POST["add3"]))
	{
		$error .= '<p>Please Enter your Address</p>';
	}
	else
	{
		$add3 = clean_text($_POST["add3"]);
	}
	*/
	
	
	
	
	
	

	if($error == '')
	{
		$file_open = fopen("register_escalade.csv", "a");
		$no_rows = count(file("register_escalade.csv"));
		if($no_rows > 1)
		{
			$no_rows = ($no_rows - 1) + 1;
		}
		$form_data = array(
			'sr_no'		    =>	  $no_rows,
			'city' => $city,
			'teamname'    =>    $teamname,
      'college'     =>    $college,
			'lname' =>    $lname,
			'lnum'    =>    $lnum,
      'lemail'    =>    $lemail,
			'ladd'        =>    $ladd,
			'name1' =>    $name1,
			
      'email1'    =>    $email1,
			
			'name2' =>    $name2,
			
      'email2'    =>    $email2,
			
			'name3' =>    $name3,
			
      'email3'    =>    $email3,
			
			
		);
		fputcsv($file_open, $form_data);
		$error = 'Congrats! You have registered successfully.';
		//Email Setup
		$conf_subject = 'Escalade Registration Confirmation Mail';
       
	   $message = "Line 1\r\nLine 2\r\nLine 3";
	   $message = wordwrap($message, 70, "\r\n");
	   
	
	   
		
$teamname = '';
$college = '';
$lname = '';
$lnum = '';
$lemail = '';
$ladd = '';

$name1 = '';

$email1 = '';

$name2 = '';

$email2 = '';

$name3 = '';

$email3 = '';

    echo "<script type='text/javascript'>alert(\"$error\");</script>";
    $error ='';

	}
	
	require_once('../escalade2018/Registration/PHPMailer-master/class.phpmailer.php');


$mail = new PHPMailer;
                                 
	
          $mail->Host = "smtp.gmail.com";                      // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'webops.techniche@gmail.com';                 // SMTP username
          $mail->Password = 'Webops2018';                           // SMTP password
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                                    // TCP port to connect to
  	  $mail->isHTML(true);
  	  
         

          
         

          if(!$mail->send()) {
              
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
          } else {
            
            exit();
          }

	   


	   
	   }
	   
	  

	   
	      
	   
	   
 ?>       
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Escalade - Techniche'18</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="stylemain.css">
    <link rel="stylesheet" href="style.css">
	
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      
      <link rel="stylesheet" href="css/form_style.css">
      
      <script src="js/form.js"></script>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
   
    
    
    
    
    <style>
     body,html, div, p, span {
    font-family: "Lato", sans-serif;
         margin:0;
         padding:0;
         
}
        
        .row{
        padding-top:20px
        }
        #background{
        padding-top:30vh;
        }
        .title_page{
        font-size:21px;;display:inline-block;padding:15px;padding-left:30px;width:70px;height:70px;}
        
  
        
        
        @media only screen and (max-width: 960px){
            .login1{
                width:100vw;
                padding:5vw;
                margin: auto;
                
            }
            
            .title_page{
            font-size:16px;;display:inline-block;padding:15px;padding-left:5px;width:auto;height:70px;
        }
        
        
 
 
        
        
       
    </style>
    
    
    
    
    
    
    
    
    
    
    
    
</head>


<body id="body">
<nav id="navbar">

<!--<span class="title_page"><p onclick="openNav()"></p></span>-->
<span class="title_page">ESCALADE</span>

<div class="logo">
    <a href="">
        <img src="img/Logo_Techniche2018_.png" alt="techniche">
    </a>
</div>
<!--<button class="btn btn-primary">Log In</button>
<button class="btn btn-primary">SignUp</button>-->
<!--
<form action="" id="search-option">
    <span class="search"><input type="text"  class="search-input" placeholder="Search the website">
    <i onclick="search()" class="material-icons">&#xE8B6;</i></span>
</form> --> 


</nav>

<!-- Navbar Ends -->

<!-- content starts here -->

<div id="background">
    <div class="container-fluid" >
          
          <h3 class="text-center">Register for Escalade</h3>
	  <?php echo $error; ?>
	  <br>
          
          
  

<!-- MultiStep Form -->
<div class="row">
   <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <form id="msform" method="post">
            <!-- progressbar 
            <ul id="progressbar">
                <li class="active">Personal Details</li>
                <li>Social Profiles</li>
               
            </ul>-->
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title text-center">Team Details</h2>
                <h3 class="fs-subtitle">Tell us about your team</h3>
                <br><p style="display:inline-block;text-align:left"> Centers near you (tentative):</p>
                <select name="city" style="display:inline-block;border:1px solid grey; border-radius:3px;">
  		
		  <option value="Hyderabad">Hyderabad</option>
		  <option value="Chennai">Chennai</option>
		  <option value="Kolkata">Kolkata</option>
		  <option value="Chandigarh">Chandigarh</option>
		  <option value="Pune">Pune</option>
		  <option value="Nagpur">Nagpur</option>
		  <option value="Indore">Indore</option>
		  <option value="Delhi">Delhi</option>
		  <option value="Bangalore">Bangalore</option>
		  <option value="Guwahati">Guwahati</option>
		  <option value="Bhubaneshwar">Bhubaneshwar</option>
		  <option value="Lucknow">Lucknow</option>
		</select>
		<br><br>
		 <input type="text" name="teamname" placeholder="Team Name"/>
                <input type="text" name="college" placeholder="College Name"/>
                <input type="text" name="lname" placeholder="Team Leader Name"/>
                <input type="text" name="lnum" placeholder="Team Leader Contact Number"/>
                <input type="email" name="lemail" placeholder="Team Leader E-mail"/>
                 <textarea form_id="msform" class="text-center" type="text" name="ladd" placeholder="Team Leader Address" rows="4"></textarea>
                
            <br><br><br>
                <h2 class="fs-title text-center">Team Member Details</h2>
                <h3 class="fs-subtitle">Each member in the team is important</h3>
                <input type="text" name="name1" placeholder="Member 1 Name (other than team leader)"/>
                <input type="email" name="email1" placeholder="Member 1 Email"/>
                <br><br>
                <input type="text" name="name2" placeholder="Member 2 Name"/>
                <input type="email" name="email2" placeholder="Member 2 Email"/>
                <br><br>
                <input type="text" name="name3" placeholder="Member 3 Name"/>
                <input type="email" name="email3" placeholder="Member 3 Email"/>
      <br><br><p class="text-center" style="color:grey;font-size:14px;">Registration fee of ₹200 to be paid at the time of the event.</p><br>
      
                <input type="submit" name="submit" class="submit action-button" value="Submit"/>
            </fieldset>
           
        </form>
       
    </div>
</div>
<!-- /.MultiStep Form -->
   <div class="col-lg-3 col-md-3"></div>

        </div>
   
    </div>
    




        


		
	
        

<script src="js/jquery-2.1.4.js"></script>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementsByClassName("submenu").style.height = "0" ;
    
}
    
var lastscrolpos = 0;
var scrolpos = 0;
 
    window.addEventListener('scroll',function(){
        
        
        scrolpos = window.scrollY; 
     
        
        if(scrolpos>150){
            document.getElementById('T18').style.backgroundColor = 'black';
           
        }
        else{
            document.getElementById('T18').style.backgroundColor = 'transparent';
           
        }
        
        if(scrolpos >= 610){
            document.getElementById("mySidenav").style.width = "250px";
        }
        else{
            document.getElementById("mySidenav").style.width = "0";
        }
        
        }
    )
</script>
<script src="main.js"></script>
 <script src="canvas-nest.js-master/dist/canvas-nest.js"></script>
  <script>

  color="255,255,255"

  opacity='0.5'

  zIndex="-2"

  count="200"

  src="canvas-nest.js-master/dist/canvas-nest.js">

</script>
  
  <script type="text/javascript" src="fullPage.js-master/vendors/scrolloverflow.min.js"></script>

	<script type="text/javascript" src="fullPage.js-master/jquery.fullPage.js"></script>
	<script type="text/javascript" src="examples.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
			  
			  anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
			  menu: '#menu',
			  continuousVertical: false
			});
		});
	</script>

  
   
  


    
</body>
</html>

  
   
  


    
</body>
</html>