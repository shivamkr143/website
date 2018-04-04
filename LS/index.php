<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LS</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->

<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!--Home-->
 <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>

    
    <link rel="stylesheet" href="stylemain.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,700'>
   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      
    
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style type='text/css'>

    #loader-wrapper{
	
	background-color:white;
	display:block;
	position:fixed;	
	width:100%;
	height:100%;
	z-index:990;

}

#pre-loader-new{	
	height:100px;
	width:100px;	
	margin-top:50vh;
	margin-left:50vw;
	transform: translate(-50px,-50px);
	
}

#pre-loader-new>img{

	height:100px;
	width:100px;
} </style>



<script>
     
     
     
     
      /* All your javascript code goes here*/
      
       function myFunction(){
    
    	setTimeout(function(){
    		var loader = document.getElementById("loader-wrapper");
    		loader.style.display = 'none';
    		document.body.style.overflowY = 'scroll';
   	 },2500);
   	 
   	 }
   </script>
   
<!--EndHome>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body onload="myFunction()" ">
<?php include ('preloader.php'); ?>
<!-- Navigation
    ==========================================-->
<nav id="navbar">

<div id="mySidenav" class="sidenav">
 <div id="menu-item">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
  <a href="https://www.techniche.org" active>Home</a>
  
  <p tabindex="0" onclick="events()" style="outline:none">Events <i class="material-icons" style="float:right;margin-right:10px;">arrow_drop_down</i></p>
  <div class="submenu-list" id="events-submenu">
  	<a href="https://www.techniche.org/LS">Lecture Series</a>
    <a href="https://www.techniche.org/industrial_conclave/"> Industrial Conclave</a>
    <a role="button" data-toggle="modal" data-target="#exampleModalCenter">Exhibitions</a>
    <a role="button" data-toggle="modal" data-target="#exampleModalCenter">Funniche</a>
    <a role="button" data-toggle="modal" data-target="#exampleModalCenter">Shows</a>
    <a href="https://techniche.org/ghm">Guwahati Half Marathon</a>
    
    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">COMING SOON</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        Thank you for showing interest! Please visit again once the event is launched.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
    
  </div>
    
    
  
  <p tabindex="0" onclick="competitions()" style="outline:none" autofocus>Competitions <i class="material-icons" style="float:right;margin-right:10px;">arrow_drop_down</i></p>
  
<div class="submenu-list" id="competitions-submenu">
    
    <a href="https://www.techniche.org/robotics/">Robotics</a>
    <a href="https://www.techniche.org/corporate/">Corporate</a>
    <a href="https://www.techniche.org/techolympics">TechOlympics</a>
    <a href="https://www.techniche.org/techexpo/">TechExpo</a>
    <a href="http://technothlon.techniche.org/">Technothlon</a>  
 </div>

  <a role="button" data-toggle="modal" data-target="#exampleModalCenter">Workshops</a>
 
  <a role="button" data-toggle="modal" data-target="#exampleModalCenter">Initiatives</a>
  <a href="https://www.techniche.org/techrep/" >Campus Ambassador</a>
  
</div>
</div>

<div style="padding-top:15px;padding-left:20px;display:inline-block;position:relative;" onclick="openNav()"> 
   <a onclick="openNav()" id="menu-btn"> 
       <span class="bar" id="bar1"></span>
        <span class="bar" id="bar2"></span>
        <span class="bar"></span>
    </a>

</div>

<div class="logo" id="logo">
    <a href="https://www.techniche.org/">
        <img src="img/Logo_Techniche2018_.png" alt="techniche">
    </a>
</div>

<div style="display: inline-block; float: right;">
<span style="float:right; padding:15px;padding-right:5vw">
  <a href="#notif" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="notif">
    <i class="material-icons" id="notification">notifications</i>
  </a>
</span>
<div class="collapse" id="notif">
  <h4 style="margin-left: 10px; color=#1dba9b" class="text-center">Latest Updates</h4>
  <h5 class="text-center" style="margin-left: 10px;">Techniche website is live.<br><a href="https://www.techniche.org/">Visit</a></h5>
</div>
</div>


</nav>

<!--Navbar End-->


<!-- Header -->
<header class="text-center" name="home">
  <div class="intro-text" style="font-family:'montserrat'">
    <h1> <strong>Lecture Series</strong></h1>
    <p style="font-weight: 800; font-size: 24px;"><strong>Conglomeration of Excellence</strong></p>
</header>

<!-- About Section -->
<div id="about-section">
  <div class="container">
    <div class="section-title text-center center">
      <h2>ABOUT US</h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="col-md-6"> <img src="img/Banner1_LS.JPG" class="img-responsive"> </div>
      <div class="col-md-6">
        <div class="about-text">
          <br><br><p style="font-weight: 400; font-size: 20px;">
An exciting gathering of some of the greatest minds from around the world. Lecture Series module of
Techniche provides an opportunity for academic community to dive deep and decipher the inner workings of a wide spectrum of fields ranging from sports to politics and from science to literature.
Lecture Series is a free medium and serves as a bridge between the savant and a seeker.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="section-title center text-center">
      <h2>Previous Speakers</h2>
      <hr>
   </div>

<section class="container">
   
    <div class="row active-with-click">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Red">
                <h2>
                    <span>Mr. Brooks Moore</span>
                    <strong >
                        <i class="fa fa-fw fa-star"></i>
                        Host: How It’s Made     
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="img/bmoore.jpg">
                    </div>
                    <div class="mc-description" style="overflow-y: scroll;">
                A winner of multiple Emmy, Telly and Sundace awards, Brooks Turner Moore is the person whose
voice we all grew up hearing on all our favourite shows on Discovery Channel and its related
networks. His most prominent work as a narrator for the well-known show "How it's made", satisfying
our innate curiosity regarding everything things.
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>

                </a>
                <!--<div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div> -->
            </article>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Pink">
                <h2>
                    <span>Dr. Nadrian Seeman</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                       Inventor of DNA Nanotechnology,
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="img/NedSeeman.jpg">
                    </div>
                    <div class="mc-description" style="overflow-y: scroll;">
                       An american chemist and crystallographer, Nadrian Seeman, is credited for the invention of DNA
nanotechnology and revolutionizing genetics. An avid researcher and a passionate speaker with a list
of achievements under his name, (Awardee of the Kavli Prize and the Feynman Prize) his research
paved the way for groundbreaking developments in DNA Computing and Nanorobotics, potentially
curing cancer
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <!--<div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div> -->
            </article>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Purple">
                <h2>
                    <span>Dr. Thomas Barclay</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        Research Scientist, NASA 
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="img/TomBarclay.jpg">
                    </div>
                    <div class="mc-description" style="overflow-y: scroll;">
                        A position many of us inspire to attain, Dr. Tom Barclay is the principal Investigator and Director of the
Kepler/K2 Guest Observer Office and is a wizard in data analytics from space and ground based
telescopes that had led to discovery of the smallest known planet and other such groundbreaking
work. His knowledge has opened minds to a new realm, a realm amongst the stars and beyond.
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <!--<div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div> -->
            </article>
        </div>
<br>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Deep-Purple">
                <h2>
                    <span>Shri Subramanian Swamy</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        Member of Rajya Sabha
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="img/swamy.jpg">
                    </div>
                    <div class="mc-description" style="overflow-y: scroll;">
                       An economist, mathematician and a politician, Dr. Subramanian Swamy is a Member of Parliament in Rajya Sabha. Dr. Swamy was a part of the group of eminent persons called to Geneva, Switzerland to prepare a report of the United Nations on Economic Co-operation between Developing countries. A man with a bold personality, he made sure to turn all heads, ears and eyes towards him in Techniche.
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <!--<div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div> -->
            </article>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Indigo">
                <h2>
                    <span>Mr. Mike Morasky</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        Visual Effects Supervisor
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="img/Mike_Morasky.jpg">
                    </div>
                    <div class="mc-description" style="overflow-y: scroll;">
                       An animator, AV effects artist, director and programmer, Mike Morasky is best known for his work at Valve Corporations composing the scores of Portal, Portal 2 and the Left 4 Dead Series. His career has involved working on some of the most interesting projects to a teenage mind. A driven speaker and music enthusiast, His work on the famous Lord of the Rings and The Matrix trilogy brought to life every child’s imagination.
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <!--<div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div> -->
            </article>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Blue">
                <h2>
                    <span>Shri Suresh Prabhu</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        Central Minister of India
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="img/prabhu.jpg">
                    </div>
                    <div class="mc-description" style="overflow-y: scroll;">
                        Suresh Prabhakar Prabhu is an Indian politician and the former Railway Minister of India. A chartered
accountant by profession, Mr Prabhu has successfully taken on various responsibilities such as a
member of the World Bank parliamentary network and the Union Minister for Power. An inspired man
with indispensable knowledge to share, he continues to spark a drive towards bringing about
unthinkable development in the country amongst the youth.
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <!--<div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a href="https://www.facebook.com/techniche.iitguwahati/" class="fa fa-fw fa-facebook"></a>
                    <a href="https://www.instagram.com/techniche_iitguwahati/ class="fa fa-fw fa-twitter"></a>
                    <a href="https://twitter.com/techniche_iitg" class="fa fa-fw fa-linkedin"></a>
                    <a href="https://technicheblog.wordpress.com/ class="fa fa-fw fa-google-plus"></a>
                    <a href="https://technicheblog.wordpress.com/ class="fa fa-fw fa-google-plus"></a>
                    
                </div> -->
            </article>
        </div>
        
    </div>
</section>

</div>





<!-- Contact Section -->
<div id="contact-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contact Us</h2>
      <hr>
      
    </div>


    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4">
          <a href="https://www.facebook.com/srinivas1999">Sai Srinivas Reddy</a>
        <p>+91-9000193895</p>
      </div>
      <div class="col-md-4">
          <a href="https://www.facebook.com/shruti.mittal.566790">Shruti Mittal</a>
        <p>+91-9957986955 </p>
      </div>
      <div class="col-md-4">
          <a href="https://www.facebook.com/umang.mathur.3760">Umang Mathur</a>
        <p>+91-9462747129</p>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
      <br>
<hr>
  </div>
</div>
</div>
<div id="social-section">
  <div class="container">
    <div class="social">
      <ul>
        <li><i class="fa fa-envelope-o"></i>Mail us at: lectureseries@techniche.org</li>
        <li><i class="fa fa-map-marker"></i>IIT Guwahati, Near Doul Gobinda Road, Amingaon, North Guwahati, Guwahati, Assam 781039</li>
      </ul>
    </div>
  </div>
</div>
<!--
<div id="footer">
  <div class="container">
    <div class="fnav">
      <p>Copyright &copy; Techniche 2018.</p>
    </div>
  </div>
</div>-->

<?php
include ('../footer.php');
?>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script type="text/javascript">
        $(function() {
        $('.material-card > .mc-btn-action').click(function () {
            var card = $(this).parent('.material-card');
            var icon = $(this).children('i');
            icon.addClass('fa-spin-fast');

            if (card.hasClass('mc-active')) {
                card.removeClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-arrow-left')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-bars');

                }, 800);
            } else {
                card.addClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-bars')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-arrow-left');

                }, 800);
            }
        });
    });
    </script>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/waypoints.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact_me.js"></script>

<!-- Javascripts
    ================================================== -->
<script type="text/javascript" src="js/main.js"></script>


<script src="js/jquery-2.1.4.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js'></script>
<script src="js/blinds.js"></script>




<script>
    

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementsByClassName("submenu").style.height = "0" ;
    
}
    
$(document).ready(function(){
  initialize();
});
    
    
  
        

var scrolpos = 0;
var navbar =  document.getElementById('navbar');
var logobg = document.getElementById('logo');
var menuBars = document.getElementsByClassName('bar');

    
 
    window.addEventListener('scroll',function(){
        
        
      // document.getElementById('background').style.top = '0px';
        
        scrolpos = window.scrollY; 
        var i = 0;
        
     
        
       if(scrolpos>80){
           navbar.style.backgroundColor = '#ffffff';
         navbar.style.borderBottom = '2px solid #1dba9b';
        logo.style.backgroundColor = '#ffffff';
           logo.style.borderBottom = '2px solid #1dba9b';
           document.getElementById('notification').style.color = '#1dba9b';
           
          
    for (i = 0; i < menuBars.length; i++) {
    menuBars[i].style.backgroundColor = "#1dba9b";
}
            
           
        }
        else{
          navbar.style.backgroundColor = 'transparent';
          navbar.style.borderBottom = 'none';
          logo.style.backgroundColor = 'transparent';
            
          /*  for (i = 0; i < menuBars.length; i++) {
    menuBars[i].style.backgroundColor = "#ffffff";
}
   */         
           
           
           
        } 
        
               
      if(scrolpos >= 1500){
           // document.getElementById("mySidenav").style.width = "250px";
        }
        else{
            document.getElementById("mySidenav").style.width = "0";
        }
        
        }
    )
    
   
    
</script>
<script src="main.js"></script>



</body>
</html>
