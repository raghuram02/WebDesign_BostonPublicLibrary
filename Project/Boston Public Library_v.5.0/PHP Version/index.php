 
<?php
$cxn=mysqli_connect("localhost","root","root","bostondb") or die("Cannot connect to database"); 
 if(isset($_POST['submit']))
       {
            
            $qc="insert into contacts(contact_name,contact_email,contact_message) values('".$_POST['name2']."',
            	'".$_POST['email2']."','".$_POST['message2']."')";
               $out=mysqli_query($cxn,$qc);               
        }
?>


<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" ng-app="BostonPublicLibrary">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Boston Public Library</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>


		
		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		
		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
  		
  		<link rel="stylesheet" href="css/style1.css"> <!-- Resource style -->
  		
  		<script src="js/modernizr.js"></script> <!-- Modernizr -->
  		
  		<script src="js/jquery-2.1.4.js"></script>
  		
  		<script src="js/main.js"></script>
		
		<link rel="stylesheet" href="jquery.rateyo.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.0.1/jquery.rateyo.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.0.1/jquery.rateyo.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular-route.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
 
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/base/jquery-ui.css" rel="stylesheet">
	<script src="app.js">
	</script>

<style>
         #tabs {
    width: 95%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
}

	#userLogin123, #logOut {
		display: none;
	}
	
	#coll,#collections {
		display: none;
	}
      </style>
	<!--<script src = "script1.js"></script>-->
	
	</head>

	  
	<body class="no-trans" ng-controller="mainController">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
		
			<div id = "signUpModal" class = "modal fade" role = "dialog"> <!-- Sign Up Modal Window -->
				<div class = "modal-dialog">
			
					<div class = "modal-content">
						<div class = "modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Sign Up - Boston Library System</h4>
					
						</div>
				
						<div class="modal-body">
                <div ng-show="message" class="alert alert-danger" role="alert">{{message}}</div>
							<span>Enter your name : <input ng-model="user.name" type = "text" placeholder = "Name" class="form-control"  /></span>
							<span>Preferred username : <input ng-model="user.username" type = "text" placeholder = "Username" class="form-control"/></span>
							<span>Enter your password : <input ng-model="user.password" type = "password" class="form-control"/></span>
						</div>
				
						<div class="modal-footer">
							<button ng-click="signup(user)" type = "button" class = "btn btn-primary">Sign Up</button>
							<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div> <!-- end of sign up Modal -->
	
			<div id = "loginModal" class = "modal fade" role = "dialog"> <!-- Log in Modal Window -->
				<div class = "modal-dialog">
			
					<div class = "modal-content">
						<div class = "modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Login - Boston Library System</h4>				
						</div>
				
						<div class="modal-body">
							<span>Enter your Username : <input ng-model="user.username" type = "text" placeholder = "Name" class="form-control" id = "name25" /></span>
							
							<span>Enter your password : <input ng-model="user.password" type = "password" class="form-control" id = "password25" /></span>
							
						</div>
				
						<div class="modal-footer">
							<button ng-click="login(user)" type = "button" class = "btn btn-primary" id= "loginInButton">Login</button>
							<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div> <!-- end of log in Modal -->
		
			
		
			<div class="container">
				<div class="row">
					<div class="col-md-3">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="#banner"><img id="logo" src="images/logo.jpg" alt="Worthy"></a>
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<h1><div class="site-name"><a href="#banner">BPL</a></div></h1>
								<div class="site-slogan"> A citizen’s door to lifelong <a target="_blank" href="">learning</a></div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-9">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li class="active"><a href="#banner">Home</a></li>
												<li><a href="#about">About</a></li>
												<li ng-show="showCurrentUser"><a href="#showCollection">Collections</a></li>
												<li><a href="#popular">Popular Books</a></li>
												<li><a href="#resources">Resources</a></li>
												<li><a href="#clients">Reviews</a></li>
												<li><a href="#contact">Feedback</a></li>
												
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->
							 <!-- header Container --> 
								
				<div class="container-fluid navigation-header">
					<nav class="navbar navbar-default">
  						<div class="container-fluid">
    						
    
    						<div class="collapse navbar-collapse" id="myNavbar">      						
      							<ul class="nav navbar-nav navbar-right">
									<li ng-show="showCurrentUser"><a href="#">
										<span
										ng-show="showCurrent" class="glyphicon glyphicon-user"></span>
										Welcome {{loggedinUser.username}}</a></li>
        							<li ng-hide="showCurrentUser"><a data-target="#signUpModal" data-toggle="modal" href="#signUpModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        							<li ng-hide="showCurrentUser"><a data-target="#loginModal" data-toggle="modal" href="#loginModal" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        							<li ng-show="showCurrentUser"><a ng-click="logout()" href=""><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
	      						</ul>

    						</div>
  						</div>
					</nav>				
				
			</div>				
								
							</div>
							<!-- main-navigation end -->
				
							
						</div>
						
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->

		<!-- banner start -->
		<!-- ================ -->
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
							<h1 class="text-center">Boston Public Library</h1>
							<p class="lead text-center">A collection of over 23.7 million items, which makes it one of the largest municipal public library systems in the United States.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center">About <span>Boston Public Library</span></h1>
						<p class="lead text-center">The Boston Central Library is located in Copley Square in Boston's Back Bay neighborhood. The central library consists of McKim Building and Johnson Building, and the two buildings are attached and interconnected with interior passageways. The central library as a whole with the two buildings combined contains 930,000 square feet (86,000 m2) of space and houses 21,000,000 items in its collections as of 2015.</p>
						<div class="space"></div>
						<div class="row">
							<div class="col-md-6">
								<iframe width="560" height="358" src="https://www.youtube.com/embed/GdCoB8-FYyo" frameborder="0" allowfullscreen></iframe>
								<div class="space"></div>
							</div>
							<div class="col-md-6">
								<div id="tabs">
     <ul class="nav nav-tabs" id="myTab" style="background: none repeat scroll 0% 0% #3BB3F6  ;">
        <li class="active"><a href="#tabs-1" style="background: none repeat scroll 0% 0% #ffffff    ;">Corporate Events</a>
        </li>
        <li><a href="#tabs-2" style="background: none repeat scroll 0% 0% #ffffff    ;">Technology</a>
        </li>
        <li><a href="#tabs-3" style="background: none repeat scroll 0% 0% #ffffff    ;">Donate</a>
        </li>
    </ul>
   <div id="tabs-1">
   	<h3 class="text-center">Programs</h3>
        <p >The Boston Public Library hosts some of the most impressive corporate events held in Boston. Each year hundreds of corporations choose the Library as a venue for premieres, holiday parties, meetings, press conferences, product launches, and more. </p>
    </div>
    <div id="tabs-2">
	<h3 class="text-center">Laptop and Computers</h3>
        <p>Every Boston Public Library location, except the Central Branch, has laptops available for library card holders to borrow for up to 2 hours of in-library use.</p>
   <h3 class="text-center">Wireless</h3>
        <p>The BPL is a free wireless hotspot. Patrons using wireless devices may access the Library's Internet service at all locations.</p>
    </div>
    <div id="tabs-3">
	<h3 class="text-center">Please select your gift amount</h3></br>
        <button ng-click="showme=true"><span>$50</span></button></br>
		 <button ng-click="showme=false">$100</button> 
		 
		 <div class="wrapper">
    <p ng-hide="showme">$100 can put 14 brand-new books on Library shelves for readers to check out for years to come</p>
    <p ng-show="showme">$50 can add three books for our Job Search collection, helping prepare New Yorkers with interview skills, resume writing and finding positions</p>
  </div>
  </div>
  </div>
<div id="tabid"></div>
	<script>
  
    $("#tabs").tabs({
    activate: function (event, ui) {
        var active = $('#tabs').tabs('option', 'active');
        $("#tabid").html('the tab id is ' + $("#tabs ul>li a").eq(active).attr("href"));

    }
}

);

  </script>
  </div>
						</div>
						
						
						<div class="row">
							<div class="col-md-6">
								<p>The Boston Public Library offers an extensive benefits package which is very competitive with the nation’s leading libraries and other cultural organizations.  Our comprehensive health care benefits go beyond medical, dental, prescription drug and vision benefits.  The Library’s customized plans support the diversity of our staff members by offering a wealth of resources and services.   From health and wellness to supporting a positive work/life balance, we strive to meet the needs of our employees’ well-being.</p>
									<ul class="list-unstyled">
									<li><i class="fa fa-caret-right pr-10 text-colored"></i>Generous amount of paid time off</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Pre-tax flexible spending plans</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Gym membership discounts</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Wellness workshops, assessments and fairs</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> On-site flu shots</li>
								</ul>
							</div>
							<div class="col-md-6">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													I forgot my login/password and/or I am having issues with my login, what do I do?
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												Please visit the Search Opportunities page and click on the "Retrieve Password" link. If you created a profile with us, using a unique email address, you will receive an email that will direct you to reset your password. If the system does not recognize your email, or if you don't receive an email to reset your password, your profile does not exist in our system.
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													How do I apply for a job/internship?
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
											<div class="panel-body">
												To apply for a job and/or an internship, please visit the Search Opportunities page to view and apply for any opportunities at BPL. In order to be considered for any position, you need to create a candidate profile with a completed application.To apply for a job and/or an internship, please visit the Search Opportunities page to view and apply for any opportunities at BPL. In order to be considered for any position, you need to create a candidate profile with a completed application.
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingThree">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													Can I contact the HR Department regarding my application?
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="panel-body">
												Because of the volume of applications the Library receives, the HR Department is unable to answer individual inquiries. Please log into your profile to edit your candidate information, update your application/resume, and view the status of your application for a particular job.Because of the volume of applications the Library receives, the HR Department is unable to answer individual inquiries. Please log into your profile to edit your candidate information, update your application/resume, and view the status of your application for a particular job.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- Collections Section -->
    <section ng-show="showCurrentUser" id="showCollection" class="container content-section text-center">
       <div class="container">
        <div class="collection-section">
            <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1 class="text-center title">Collections &nbsp;&nbsp;&nbsp;</h1>
                <p>Browse through the list of books, dvd's and journals. Add them to your cart once you are registered as a member</p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href ="#" data-toggle="modal" data-target="#myModal1" class="btn btn-default btn-lg"> <span class="network-name">Books</span></a>
                    </li>
                    <li>
                        <a href ="#" data-toggle="modal" data-target="#myModal2" class="btn btn-default btn-lg"> <span class="network-name">Journals</span></a>
                    </li>
                    <li>
                        <a href ="#" data-toggle="modal" data-target="#myModal3" class="btn btn-default btn-lg"><span class="network-name">Dvds</span></a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
        </div>
    </section><!-- Collections Model1a -->
<div class="portfolio-modal modal fade" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <h2 style="color:#2c3e50;">Books Collection</h2>
                            <hr class="star-primary">

                            <a href="#0" class="cd-cart">
    <span>0</span>
  </a>
<div class="row">
                  
                  
<ul class="cd-gallery">
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
           <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
          
          

          <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
          

          <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>

        </ul> 
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="bookcover" src = "images/cover1.jpg"><p class = "bookdesc">Marvel Studios takes readers behind the scenes of one of the most eagerly anticipated films of all time in THE ART OF THE AVENGERS.  </p></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="bookcover" src = "images/cover2.jpg"><p class = "bookdesc">Dorothy, the Tin Woodman, Scarecrow, the Cowardly Lion, and a host of other curious creatures come to life as they set out on an exciting quest in search of the elusive Wizard </p></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="bookcover" src = "images/cover3.jpg"><p class = "bookdesc">Never before have we had access to a document that so powerfully conveys the depth of fear and horror, that gripped human society through the plague years. </p></div>
              </div>
              </div>
              <div class="row">
               
                <ul class="cd-gallery">
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
           <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
          
          

          <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
          

          <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>

        </ul> 
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="bookcover" src = "images/cover4.jpg"><p class = "bookdesc">Long ago the districts waged war and were defeated. As part of the surrender terms, each district agreed to send one boy to appear in an annual televised event. </p></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="bookcover" src = "images/cover5.jpg"><p class = "bookdesc">As millions of readers around the globe have already discovered, The Da Vinci Code is a reading experience unlike any other. Dan Brown's novel is a thrilling masterpiece </p></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="bookcover" src = "images/cover6.jpg"><p class = "bookdesc">Harvard symbologist Robert Langdon answers an unexpected summons to appear at the Capitol Building. The Lost Symbol is a lightning-paced story with surprises at every turn </p></div>
              </div>
              <div class="row">
               
                <ul class="cd-gallery">
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
           <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
          
          

          <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
          

          <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>

        </ul> 
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="bookcover" src = "images/cover7.jpg"><p class = "bookdesc">The Lost Symbol is an intelligent, lightning-paced story with surprises at every turn--Brown's most exciting novel yet. A thrilling, spooky, and funny read.</p></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="bookcover" src = "images/cover8.jpg"><p class = "bookdesc">This anthology examines the mythos of hell through art, poetry and short stories.  Go ahead. Be frightened by what you see. You may, in fact, already haunting these pages.</p></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="bookcover" src = "images/cover9.jpg"><p class = "bookdesc"> Beautiful photography and clear, authoritative text by Lucasfilm insider Pablo Hidalgo names and explains all the details of costumes, weapons, and accessories.</p></div>
              </div>
                            
                            <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   


    <!-- Collections Model1b -->
<div class="portfolio-modal modal fade" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <h2 style="color:#2c3e50;">List of Journals</h2>
                            <hr class="star-primary">

                            <a href="#0" class="cd-cart">
    
  </a>
<div class="row">
                  
                  
<ul class="cd-gallery">
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
           <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
          
          

          <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
          

          <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>

        </ul> 
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="journalcover" src = "images/j1.jpg"><p class = "journaldesc">The distinguished poet/essayist here presents diary entries from April 1986 through February 1987, written while she was recovering from a life-threatening stroke </p></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="journalcover" src = "images/j2.jpg"><p class = "journaldesc">Tolan offers listeners an easy-to-follow journey through a maddeningly stubborn conflict that has infused global politics since the 1940s. </p></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="journalcover" src = "images/j3.png"><p class = "journaldesc">This revised edition offers 30 specific strategies, readily integrated into daily lesson plans, to help K-12 students extend their thinking capabilities and raise their achievement levels. </p></div>
              </div>
              </div>
              <div class="row">
               
                <ul class="cd-gallery">
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
           <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
          
          

          <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
          

          <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>

        </ul> 
                   <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="journalcover" src = "images/j4.jpg"><p class = "journaldesc">As innovation becomes more democratic, many of the best ideas for new products and services no longer originate in well-financed corporate and government laboratories.</p></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="journalcover" src = "images/j5.jpg"><p class = "journaldesc">Abstraction has not only been an important 20th-century art form, it has also given rise to one of the most significant and influential schools of criticism </p></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="journalcover" src = "images/j6.jpg"><p class = "journaldesc">The highly anticipated complete novel of The Professional--the first installment in #1 New York Times bestselling author Kresley Cole's scorching Game Maker series </p></div>
              </div>
              
                            
                            <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- Collections Model1c -->
<div class="portfolio-modal modal fade" id="myModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <h2 style="color:#2c3e50;">DVD</h2>
                            <hr class="star-primary">

                            <a href="#0" class="cd-cart">
    
  </a>
<div class="row">
                  <h2>Genre: Horror</h2>
                  
<ul class="cd-gallery">
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
           <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
          
          

          <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
          

          <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>

        </ul> 
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="dvdcover" src = "images/horror1.jpg"><p class = "dvddesc">Not a box set. 9 individual DVDs, with all artwork. "25 Years of Terror" is a 2-disc set. Some are Region 1 imports, all in English, just like the original US releases.</p></div>

                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="dvdcover" src = "images/horror2.jpg"><p class = "dvddesc">Frank Spivey is a detective who rescues a strange young girl from a deranged killer. With a horribly disfigured face but a beautiful body, she is seductress, psychopath & succubus.</p></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="dvdcover" src = "images/horror3.jpg"><p class = "dvddesc">Brace yourself for an addictive thrill ride! American Horror Story is TV's most original new drama, a deeply stylish psychosexual haunt devised to keep you on the edge of your seat. </p></div>
              </div>
              <div class="row">
                <h2>Genre: SciFi</h2>
                <ul class="cd-gallery">
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
           <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
          
          

          <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
          

          <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>

        </ul> 
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="dvdcover" src = "images/dvd1.jpg"><p class = "dvddesc">Acclaimed filmmaker Christopher Nolan directs an international cast in this sci-fi actioner that travels around the globe and into the world of dreams. </p></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="dvdcover" src = "images/dvd2.jpg"><p class = "dvddesc">In Skyfall, Bond's loyalty to M is tested as her past comes back to haunt her. As MI6 comes under attack, 007 must track down and destroy the threat. </p></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="dvdcover" src = "images/dvd3.jpg"><p class = "dvddesc">Captain America leads the fight for freedom in the action-packed blockbuster starring Chris Evans as the ultimate weapon against evil!. </p></div>
              </div>
              <div class="row">
                <h2>Genre: Television Series</h2>
                <ul class="cd-gallery">
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
           <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
          
          

          <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>
    <li>
      <div class="cd-single-item">
        
        <div class="cd-customization">
          

          <button class="add-to-cart">
            <em>Loan</em>
            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
            </svg>
          </button>
        </div> <!-- .cd-customization -->

        <button class="cd-customization-trigger">Customize</button>
      </div> <!-- .cd-single-item -->

      
    </li>

        </ul> 
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="dvdcover" src = "images/tv1.jpg"><p class = "dvddesc">Box Set: The incredible saga of high-school-chemistry-teacher-turned-meth-kingpin Walter White is here in its entirety: all 62 uncut, uncensored episodes! </p></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="dvdcover" src = "images/tv2.jpg"><p class = "dvddesc">A good sitcom relies on strong jokes and characters, not a high concept, and Friends is obviously a huge example of that. It's about... friends. Being friends. </p></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="dvdcover" src = "images/tv3.jpg"><p class = "dvddesc">Prepare to enter the eighth dimension of television's perpetual laughter continuum as THE BIG BANG THEORY boldly crosses the frontiers of science and comedy.  </p></div>
              </div>
                            
                            <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></br></br></br></br>


		<!-- section start -->
		<!-- ================ -->
		<!-- Popular Section -->
     <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-center title" id="popular">Most Popular Books</h1>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cover1.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cover2.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cover7.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cover8.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cover3.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cover4.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cover6.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cover5.jpg" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Modals -->
     <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 style="color:#2c3e50;">Avengers</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cover1.jpg" class="img-responsive img-centered" alt="">
                            <p style="color:#2c3e50;">The Marvel Heroes of Reading line of early readers is designed to offer reluctant readers, specifically boys, books that they will want to read by featuring characters they love. The series is broken into three levels that invoke the rigorous training courses their favorite Marvel heroes must engage in to perfect their super powers. In reading this series, boys will prefect their own power to read.</p>
                            <ul class="list-inline item-details">
                                <li style="color:#2c3e50;">Release Date:
                                    <strong><a>April 2014 </a>
                                    </strong>
                                </li>&nbsp;&nbsp;Review:
                                <li style="color:#2c3e50;">
                                    
								<a class="rateYo" id="a1"></a>
									
                                </li>
								
                                <li style="color:#2c3e50;">Followers:
                                    <strong><a>12132</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://rateyo.fundoocode.ninja/bower_components/jquery-rateyo/min/jquery.rateyo.min.css" />
<script src="http://rateyo.fundoocode.ninja/bower_components/jquery-rateyo/min/jquery.rateyo.min.js"></script>
						<script>
	 
 $(".rateYo").each(function(e) {
      $(this).rateYo({
        onSet: function(rating, rateYoInstance) {
          $(this).next().val(rating);
        },
        rating: 4.3,
        starWidth: "20px",
        numStars: 5,
        fullStar: true
      });
    });
 
</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 color:#2c3e50;>The Wizard of Oz</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cover2.jpg" class="img-responsive img-centered" alt="">
                            <p style="color:#2c3e50;">Dorothy, the Tin Woodman, Scarecrow, the Cowardly Lion, and a host of other curious creatures come to life as they set out on an exciting quest down the Yellow Brick Road in search of the elusive Wizard. Reset in large, clear type and accompanied by 20 beautiful black-and-white illustrations. A selection of the Common Core State Standards Initiative.</p>
                            <ul class="list-inline item-details">
                                <li style="color:#2c3e50;">Release Date
                                    <strong><a>April 2014</a>
                                    </strong>
                                </li>&nbsp;&nbsp;Review:
     <li style="color:#2c3e50;">
                 <a class="rateYo" id="a1"></a>
				</li>


						<script>
	 
 $(".rateYo").each(function(e) {
      $(this).rateYo({
        onSet: function(rating, rateYoInstance) {
          $(this).next().val(rating);
        },
        rating: 2.3,
        starWidth: "20px",
        numStars: 5,
        fullStar: true
      });
    });
 
</script>
                                <li style="color:#2c3e50;">Followers:
                                    <strong><a>14365</a>
                                    </strong>
                                </li>
                            </ul>

                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 color:#2c3e50;>Something wickedly wierd</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cover7.jpg" class="img-responsive img-centered" alt="">
                            <p style="color:#2c3e50;">Stanley's claim on Candlestick Hall (the old house that his Great Uncle Bart left to Stanley in his will) is being seriously questioned by a creepy family named the Darklings. They are obviously up to no good, and Stanley knows it, but how can he prove that Candlestick Hall is truly his?</p>
                            <ul class="list-inline item-details">
                                <li style="color:#2c3e50;">Release Date:
                                    <strong><a>April 2014</a>
                                    </strong>
                                </li>&nbsp;&nbsp;Review:
     <li style="color:#2c3e50;">
                 <a class="rateYo" id="a1"></a>
				</li>


						<script>
	 
 $(".rateYo").each(function(e) {
      $(this).rateYo({
        onSet: function(rating, rateYoInstance) {
          $(this).next().val(rating);
        },
        rating: 3.3,
        starWidth: "20px",
        numStars: 5,
        fullStar: true
      });
    });
 
</script>
                                <li style="color:#2c3e50;">Followers:
                                    <strong><a>9716</a>
                                    </strong>
                                </li>
                            </ul>

                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 color:#2c3e50;>Hell</h2>
                            <img src="img/portfolio/cover8.jpg" class="img-responsive img-centered" alt="">
                            <p style="color:#2c3e50;">A bold daylight robbery costs the lives of two men and puts the futures of two ranches in doubt. The ranches, belonging to friends and a family member of Ben Blue makes it personal. Ben finds himself in a tangled knot of good and evil, with no way of knowing one from the other. All he can do is trust no one, and start unraveling the tangles until those responsible are exposed for what they are… if he can.
Many things stand in his way to keep him from seeing justice done. Even the gates of hell can’t stop him from trying. </p>
                            <ul class="list-inline item-details">
                                <li style="color:#2c3e50;">Release Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>&nbsp;&nbsp;Review:
     <li style="color:#2c3e50;">
                 <a class="rateYo" id="a1"></a>
				</li>
						<script>
	 
 $(".rateYo").each(function(e) {
      $(this).rateYo({
        onSet: function(rating, rateYoInstance) {
          $(this).next().val(rating);
        },
        rating: 4.3,
        starWidth: "20px",
        numStars: 5,
        fullStar: true
      });
    });
 
</script>
                                <li style="color:#2c3e50;">Followers:
                                    <strong><a>8623</a>
                                    </strong>
                                </li>
                            </ul>

                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 color:#2c3e50;>World War</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cover3.jpg" class="img-responsive img-centered" alt="">
                            <p>Famed Harvard symbologist Robert Langdon answers an unexpected summons to appear at the U.S. Capitol Building. His planned lecture is interrupted when a disturbing object—artfully encoded with five symbols—is discovered in the building. Langdon recognizes in the find an ancient invitation into a lost world of esoteric, potentially dangerous wisdom. When his mentor Peter Solomon—a longstanding Mason and beloved philanthropist—is kidnapped, Langdon realizes that the only way to save Solomon is to accept the mystical invitation and plunge headlong into a clandestine world of Masonic secrets, hidden history, and one inconceivable truth all under the watchful eye of Dan Brown's most terrifying villain to date.</p>
                            <ul class="list-inline item-details">
                               <li style="color:#2c3e50;">Release Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>&nbsp;&nbsp;Review:
     <li style="color:#2c3e50;">
                 <a class="rateYo" id="a1"></a>
				</li>
<script>
	 
 $(".rateYo").each(function(e) {
      $(this).rateYo({
        onSet: function(rating, rateYoInstance) {
          $(this).next().val(rating);
        },
        rating: 4.1,
        starWidth: "20px",
        numStars: 5,
        fullStar: true
      });
    });
 
</script>
                                <li style="color:#2c3e50;">Followers:
                                    <strong><a>8623</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 color:#2c3e50;>Star Wars</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cover4.jpg" class="img-responsive img-centered" alt="">
                            <p style="color:#2c3e50;">In the ruins of a place once known as North America lies the nation of Panem, a shining Capitol surrounded by twelve outlying districts. Long ago the districts waged war on the Capitol and were defeated. As part of the surrender terms, each district agreed to send one boy and one girl to appear in an annual televised event called, "The Hunger Games," a fight to the death on live TV. Sixteen-year-old Katniss Everdeen, who lives alone with her mother and younger sister, regards it as a death sentence when she is forced to represent her district in the Games. The terrain, rules, and level of audience participation may change but one thing is constant: kill or be killed.</p>
                            <ul class="list-inline item-details">
                                <li style="color:#2c3e50;">Release Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>&nbsp;&nbsp;Review:
     <li style="color:#2c3e50;">
                 <a class="rateYo" id="a1"></a>
				</li>
<script>
	 
 $(".rateYo").each(function(e) {
      $(this).rateYo({
        onSet: function(rating, rateYoInstance) {
          $(this).next().val(rating);
        },
        rating: 3.8,
        starWidth: "20px",
        numStars: 5,
        fullStar: true
      });
    });
 
</script>
                                <li style="color:#2c3e50;">Followers:
                                    <strong><a>8623</a>
                                    </strong>
                                </li>
                            </ul>

                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 color:#2c3e50;>The Hunger Games</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cover6.jpg" class="img-responsive img-centered" alt="">
                            <p style="color:#2c3e50;">In the ruins of a place once known as North America lies the nation of Panem, a shining Capitol surrounded by twelve outlying districts. Long ago the districts waged war on the Capitol and were defeated. As part of the surrender terms, each district agreed to send one boy and one girl to appear in an annual televised event called, "The Hunger Games," a fight to the death on live TV. Sixteen-year-old Katniss Everdeen, who lives alone with her mother and younger sister, regards it as a death sentence when she is forced to represent her district in the Games. The terrain, rules, and level of audience participation may change but one thing is constant: kill or be killed.</p>
                            <ul class="list-inline item-details">
                                <li style="color:#2c3e50;">Release Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                               </li>&nbsp;&nbsp;Review:
     <li style="color:#2c3e50;">
                 <a class="rateYo" id="a1"></a>
				</li>
<script>
	 
 $(".rateYo").each(function(e) {
      $(this).rateYo({
        onSet: function(rating, rateYoInstance) {
          $(this).next().val(rating);
        },
        rating: 4.7,
        starWidth: "20px",
        numStars: 5,
        fullStar: true
      });
    });
 
</script>
                                <li style="color:#2c3e50;">Followers:
                                    <strong><a>8623</a>
                                    </strong>
                                </li>
                            </ul>

                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 color:#2c3e50;>Da Vinci Code</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cover5.jpg" class="img-responsive img-centered" alt="">
                            <p style="color:#2c3e50;">In the ruins of a place once known as North America lies the nation of Panem, a shining Capitol surrounded by twelve outlying districts. Long ago the districts waged war on the Capitol and were defeated. As part of the surrender terms, each district agreed to send one boy and one girl to appear in an annual televised event called, "The Hunger Games," a fight to the death on live TV. Sixteen-year-old Katniss Everdeen, who lives alone with her mother and younger sister, regards it as a death sentence when she is forced to represent her district in the Games. The terrain, rules, and level of audience participation may change but one thing is constant: kill or be killed.</p>
                            <ul class="list-inline item-details">
                                <li style="color:#2c3e50;">Release Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>&nbsp;&nbsp;Review:
     <li style="color:#2c3e50;">
                 <a class="rateYo" id="a1"></a>
				</li>
<script>
	 
 $(".rateYo").each(function(e) {
      $(this).rateYo({
        onSet: function(rating, rateYoInstance) {
          $(this).next().val(rating);
        },
        rating: 3.9,
        starWidth: "20px",
        numStars: 5,
        fullStar: true
      });
    });
 
</script>
                                <li style="color:#2c3e50;">Followers:
                                    <strong><a>8623</a>
                                    </strong>
                                </li>
                            </ul>

                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
		<!-- section end -->

		
		<!-- section start -->
		<!-- ================ -->
		<div class="section">
			<div class="container">
				<h1 class="text-center title" id="resources">Resources</h1>
				<div class="separator"></div>
				<p class="lead text-center">The Rare Books Department at the Central Library in Copley Square will be implementing new hours. Public access to department materials, such as rare books and manuscripts, will now be available.</p>
				<br>			
				<div class="row object-non-visible" data-animation-effect="fadeIn">
					<div class="col-md-12">

						<!-- isotope filters start -->
						<div class="filters text-center">
							<ul class="nav nav-pills">
								<li class="active"><a href="#" data-filter="*">All</a></li>
								<li><a href="#" data-filter=".web-design">Events</a></li>
								<li><a href="#" data-filter=".app-development">Updates</a></li>
								<li><a href="#" data-filter=".site-building">Information</a></li>
							</ul>
						</div>
						<!-- isotope filters end -->

						<!-- portfolio items start -->
						<div class="isotope-container row grid-space-20">
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-1.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-1">
											<i class="fa fa-search-plus"></i>
											<span>Events</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-1"> Boston stories shared LIVE</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-1-label">Boston stories shared LIVE</h4>
											</div>
											<div class="modal-body">
												<h3>Boston Stories Shared LIVE: Presented by BPL, in collaboration with The Moth Community Program</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Join us for a Saturday afternoon of NYC stories shared LIVE at Andrew Heiskell Braille and Talking Book Library. BPL, in collaboration with The Moth Community Program, presents: NYC Stories Shared LIVE! 
</p>
														<p>The Moth, an acclaimed not-for-profit organization dedicated to the craft of personal storytelling, has presented more than 10,000 stories to standing-room-only crowds worldwide. The Moth Community Program brings storytelling workshops to diverse communities throughout New York. Through these workshops, participants learn to shape memorable life experiences into well-crafted stories.</p>
														<p>On Saturday, April 30th from 3:00 - 5:00pm...listen to some extraordinary stories from participants in our recent workshop.
														</p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-1.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-2.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-2">
											<i class="fa fa-search-plus"></i>
											<span>Updates</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-2">Temporary Room Closures</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-2-label">Temporary Room Closures</h4>
											</div>
											<div class="modal-body">
												<h3>Rose Main Reading Room Ceiling Restoration</h3>
												<div class="row">
													<div class="col-md-6">
														<p>The Boston Public Library’s Rose Main Reading Room and Bill Blass Public Catalog Room are closed temporarily for restoration of their historic ceilings. </p>
														<p>The project, which began this summer following a full assessment of the historic rooms, will repair slight cracking in the ceiling facades and will secure the rooms’ iconic plaster rosettes. Both the Rose Main Reading Room and the Bill Blass Public Catalog Room are expected to reopen in fall 2016. </p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-2.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-3.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-3">
											<i class="fa fa-search-plus"></i>
											<span>Events</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-3">Children’s Book Week Kickoff</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-3-label">Children’s Book Week Kickoff</h4>
											</div>
											<div class="modal-body">
												<h3>Jefferson Market Library</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Come to the Jefferson Market Library on Sunday, May 1st, to kick-off Children’s Book Week, the annual celebration of children’s books and the joy of reading.</p>
														<p>Kids ages 5 to 12, and their families, are invited to participate in age-based activities, including a picture book “Story Ball,” where kids create a story along with our guest illustrators.  There will also be a rousing game of Trivia, where authors pair up with kids from the audience to answer questions about their favorite books! Finally, join in a super fun yoga session, followed by crafts for all ages. Stick around to meet the authors and illustrators, and get your books signed! Book sales provided by neighborhood indie bookstore, Books of Wonder!</p><p>The library is opening early just for you! Join us at 11am (doors open at 10:45 am) to meet some of your favorite authors and illustrators, including, Phil Bildner, Nick Bruel, Nancy Krulik, Kevin Lewis, Meghan McCarthy, Eric Velasquez, and more!</p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-3.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-4.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-4">
											<i class="fa fa-search-plus"></i>
											<span>Information</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-4">Plan Your Visit</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-4" tabindex="-1" role="dialog" aria-labelledby="project-4-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-4-label">Plan Your Visit</h4>
											</div>
											<div class="modal-body">
												<h3>Stephen A. Schwarzman Building: Visitor Guide</h3>
												<div class="row">
													<div class="col-md-6">
														<p>A magnificent example of the Beaux-Arts style of  architecture, this library has symbolized the democratic  ideal of free and open access to knowledge since it opened to the public in 1911. Today, the Stephen A. Schwarzman Building welcomes millions of visitors a year from across the world who find inspiration in its majestic public spaces, unparalleled research collections, and vibrant programs and exhibitions.</p>
														<p>The landmarked library houses BPL’s world-renowned collections in the humanities, social sciences, and fine arts.  It is one of the Library's four research centers, part of a network including 88 neighborhood branches in the Bronx, Manhattan, and Staten Island.</p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-4.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-5.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-5">
											<i class="fa fa-search-plus"></i>
											<span>Updates</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-5">We're Hiring!</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-5" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-5-label">We're Hiring!</h4>
											</div>
											<div class="modal-body">
												<h3>Discover a World of Opportunity at The Boston Public Library!</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Are you a Librarian who is committed to changing lives and strengthening communities through the power of learning and reading? The Boston Public Library is in the midst of a major expansion thanks to Boston City’s recent historic investment in libraries—allowing us to build on our more than 100-year-old legacy as we continue to chart a new path for libraries in the 21st Century. What we do, and do well, is connect people with collections, expertise, services, and programs that inform and inspire. Join BPL to achieve your dreams while inspiring others. Our librarians start at $48,519 per year and are eligible in 6 months for an increased salary of $54,745! Learn more about careers at BPL.</p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-5.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-6.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-6">
											<i class="fa fa-search-plus"></i>
											<span>Events</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-6">Neighborhood Walking Tours</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-6" tabindex="-1" role="dialog" aria-labelledby="project-6-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-6-label">Neighborhood Walking Tours</h4>
											</div>
											<div class="modal-body">
												<h3>People's History of Harlem: Neighborhood Walking Tour</h3>
												<div class="row">
													<div class="col-md-6">
														<p>This neighborhood walking tour is part of Jane's Walk at Municipal Art Society. Jane's Walks are free, locally organized walking tours, in which people get together to explore, talk about, and celebrate their neighborhoods. Where more traditional tours are a bit like walking lectures, a Jane's Walk is more of a walking conversation.</p>
														<p>Join New York Public Library staff and volunteers with the Community Oral History project for an exploration of the rich history of Harlem. We’ll begin at the 115th Street 2nd Floor community room to listen to clips from oral histories with community members. Next, a longtime neighborhood resident will lead you on walk through the neighborhood, where you’ll see for yourself the local landmarks and centers of neighborhood life you hear in interviews.</p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-6.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-7.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-7">
											<i class="fa fa-search-plus"></i>
											<span>Information</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-7">Get a Library Card</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-7" tabindex="-1" role="dialog" aria-labelledby="project-7-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-7-label">Get a Library Card</h4>
											</div>
											<div class="modal-body">
												<h3>Apply for a Library Card</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Adult and teen users may either apply online or in person at any Boston Public Library location or Library-sponsored event. Applications for children ages 11 and under must be completed in person, and require the signature of a parent or guardian.</p>
														<p>When you apply for a card online, you will receive a 7-digit temporary barcode. This allows you to set a PIN, place circulating items on hold or submit requests for research items from offsite storage.</p><p>After you receive your permanent barcode, which is required to borrow materials, download eBWWPL content, search Library databases, or reserve a computer, you must validate your card.</p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-7.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-8.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-8">
											<i class="fa fa-search-plus"></i>
											<span>Events</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-8">Digital Exibition</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-8" tabindex="-1" role="dialog" aria-labelledby="project-8-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-8-label">Black Power: The Movement, the Legacy</h4>
											</div>
											<div class="modal-body">
												<h3>Schomburg Center for Research in Black Culture, Boston Public Library</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Black Power's reach extended to all racial and ethnic groups. Progressive Asians, Latinos, whites, and American Indians were an integral part of the movement. On the West Coast, one of the first groups to emulate the Black Panthers were the Brown Berets, a Chicano group with close to ninety chapters and five thousand members.</p>
														<p>The Rainbow Coalition consisted of the Black Panther Party, the Puerto Rican Young Lords Organization, and the white groups Young Patriots and Rising Up Angry.
														Rainbow Coalition unity press conference in Chicago in honor of Martin Luther King, April 4, 1969.</p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-8.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-9.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-9">
											<i class="fa fa-search-plus"></i>
											<span>Events</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-9">100 Years of the Pics Collection</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-9" tabindex="-1" role="dialog" aria-labelledby="project-9-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-9-label">100 Years of the Picture Collection</h4>
											</div>
											<div class="modal-body">
												<h3>From Abacus to Zoology</h3>
												<div class="row">
													<div class="col-md-6">
														<p>The Boston Public Library is celebrating the centennial of its Picture Collection with a new exhibition in the Wachenheim Gallery at the Stephen A. Schwarzman Building. Since its founding in 1915, the Collection has been an unparalleled and essential resource for artists and designers, students and scholars. Boasting close to 1.5 million images, the collection comprises more than 1,500 linear feet of materials—surpassing even the height of the Empire State Building. Images are organized according to roughly 12,000 alphabetical subject headings, from “Abacus” to “Zoology,” with many more thousands of subheadings. In fact, pictures of Boston City alone are broken down into more than 300 different categories. Whether you are looking for pictures of people and objects seen from behind (“Rear Views”) or cats wearing clothes (“Animals as Humans”), the Picture Collection has you covered.</p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-9.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-10.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-10">
											<i class="fa fa-search-plus"></i>
											<span>Information</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-10">Memory, People, Place</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-10" tabindex="-1" role="dialog" aria-labelledby="project-10-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-10-label">Memory, People, Place</h4>
											</div>
											<div class="modal-body">
												<h3>Boston Writers Workshop presents: Memory-People-Place with Timothy Tomlinson</h3>
												<div class="row">
													<div class="col-md-6">
														<p>The memory is a rich source of material (among other things).  So are people.  So is place.  In this workshop, we’ll dig into memory, excavate a person or persons, and locate them in a specific place.  We’ll look at an example or two of poems that do something similar, then we’ll write our own.</p>
														<p>Tim Tomlinson is a co-founder of Boston Writers Workshop and co-author of its popular text, The Portable MFA in Creative Writing.  He is also the author of the chapbook, Yolanda:  An Oral History in Verse (Finishing Line Press), and the forthcoming collection, Requiem for the Tree Fort I Set on Fire (Winter Goose).  His poems, stories, and essays have been published in China (United Verses and Anthill), the Philippines (Esquire, Tomas, Silliman Journal, and the anthology Fast Food Fiction), and in numerous U.S. venues including Long Island Noir (Akashic Books), and most recently in Lime Hawk,Mulberry Fork Review, and Sin Fronteras. He is a member of Asia Pacific Writers & Translators.  He teaches in the Global Liberal Studies Program at New York University. On February 15 of this year, he was named “Poet of the Week” by Massachusetts Poets.</p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-10.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-11.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-11">
											<i class="fa fa-search-plus"></i>
											<span>Events</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-11">Be a Part of History!</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-11" tabindex="-1" role="dialog" aria-labelledby="project-11-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-11-label">Be a Part of History — Dedicate a Chair!</h4>
											</div>
											<div class="modal-body">
												<h3>Secure Your Piece of History</h3>
												<div class="row">
													<div class="col-md-6">
														<p>The Boston Public Library is offering the chance to dedicate—for the first time ever—a spot in the Library’s landmark Rose Main Reading Room, in celebration of its reopening this fall. We're offering this once-in-a-lifetime-opportunity to honor family or friends in one of the city’s most iconic spaces. Supporters can add their name to a historic chair or table designed by Carrère and Hastings, the building’s original architects.Each chair is available with a gift of $5,000, and each table with a gift of $50,000. </p>
														<p>Each brass plaque is 5” long by 2” high with black engraved type. You have the choice of using one of 3 preset dedications, along with two lines of text with up to 24 characters per line (including spaces). Read the full terms and conditions here. You have until June 30 to take advantage of this once-in-a-lifetime opportunity and reserve your seat before the rededication of the Rose Main Reading Room this fall! Give today and secure a piece of history forever.</p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-11.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-12.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-12">
											<i class="fa fa-search-plus"></i>
											<span>Updates</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-12">Career & Information Services</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-12" tabindex="-1" role="dialog" aria-labelledby="project-12-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-12-label">Career and Education Information Services</h4>
											</div>
											<div class="modal-body">
												<h3>We specialize in serving job seekers, students, mid-career changers, veterans, and 55+ adults.</h3>
												<div class="row">
													<div class="col-md-6">
														<p>We offer FREE career coaching and résumé assistance services, which are scheduled by appointment. Career Coaching is available to job seekers who wish to focus on an existing job search strategy and/or gain insight on how to craft an effective self-marketing plan.</p>
														<p>Career Coaching is a sought-after service; therefore, we request that all appointments be honored as scheduled. In the event that you are unable to commit, immediately cancel your appointment by notifying us at ceisdepartment@gmail.com or call (718) 579-4260. Please indicate your name and appointment time in your message.</p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-12.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

						</div>
						<!-- portfolio items end -->
					
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section translucent-bg bg-image-2 pb-clear">
			<div class="container object-non-visible" data-animation-effect="fadeIn">
				<h1 id="clients" class="title text-center">Reviews</h1>
				<div class="space"></div>
				<div class="row">
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-1.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">You are Amazing!</h3>
								<blockquote>
									<p>The best collection a public library could possibly have</p>
									<footer>Chris Harris <cite title="Source Title"></cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-2.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Yeah!</h3>
								<blockquote>
									<p>The best resource for a citizen to enhance their knowledge </p>
									<footer>George Best <cite title="Source Title"></cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-3.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Excellent</h3>
								<blockquote>
									<p>One of my favourite places in the city!</p>
									<footer>Jeremy Richard </footer>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-2.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Thank You!</h3>
								<blockquote>
									<p>The best collection a public library could possibly have</p>
									<footer>Catherine Isabelle </footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-3.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Awesome!</h3>
								<blockquote>
									<p>Love the place for it's collection, maintenance and online system</p>
									<footer>James McArthur</footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-1.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading"><?php 
									$qc="select * from contacts where msg_id=(select max(msg_id) from contacts)";
									$out=mysqli_query($cxn,$qc);
									//$res1=mysqli_query($cxn,$q);
	                                while($res=mysqli_fetch_array($out))
	                                {
	                                	echo $res['contact_name'];
										echo '</h3><blockquote><p>';
										echo $res['contact_message'];
										echo '</p><footer><cite title="Source Title">'.$res['contact_email'].'</cite></footer>';
																		
	                                }
								?>
									
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
		<div class="default-bg space">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="text-center">10000+ Happy Clients!</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- footer start -->
		<!-- ================ -->
		<footer id="footer">

			<!-- .footer start -->
			<!-- ================ -->
			<div class="footer section">
				<div class="container">
					<h1 class="title text-center" id="contact">Feedback</h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-sm-6">
							<div class="footer-content">
								<p class="large">In the fiscal year 2015, Boston Public Library hosted 10,000 public programs, received 7.9 million visits to its website, and lent out 3.7 million books and audiovisual materials.</p>
								<ul class="list-icons">
									<li><i class="fa fa-map-marker pr-10"></i> 700 Boylston St., Boston MA 02116</li>
									<li><i class="fa fa-phone pr-10"></i> +1 617-536-5400</li>
									<li><i class="fa fa-fax pr-10"></i> +1 617-536-5401 </li>
									<li><i class="fa fa-envelope-o pr-10"></i>ask@bpl.org</li>
								</ul>
								<ul class="social-links">
									<li class="facebook"><a target="_blank" href="https://www.facebook.com/bostonpubliclibrary/?fref=ts"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a target="_blank" href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>
									<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
									<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
									<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
									<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
									<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="footer-content">
								<form role="form" id="footer-form" action="index.php" method="post">
									<div class="form-group has-feedback">
										<label class="sr-only" for="name2">Name</label>
										<input type="text" class="form-control" id="name2" placeholder="Name" name="name2" onFocus = "checkName2()" onKeyUp = "checkName(this.value)" onFocusOut = "checkName(this.value)" >
										<i class="fa fa-user form-control-feedback"></i>
										<p class="validation" id="validateName"></p>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="email2">Email address</label>
										<input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2" onFocusOut = "checkEmail(this.value)" onKeyUp = "checkEmail(this.value)" onfocus = "checkEmail1()" >
										<i class="fa fa-envelope form-control-feedback"></i>
										<p class="validation" id="validateEmail"></p>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="message2">Message</label>
										<textarea class="form-control" rows="8" id="message2" placeholder="Message" name="message2"></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
										<p class="validation" id="validateMessage"></p>
									</div>
									<input type="submit" value="Send" onclick="func3()" name="submit" class="btn btn-default">
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .footer end -->

			<!-- .subfooter start -->
			<!-- ================ -->
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">Copyright © 2016 by Boston Public Library <a target="_blank" href="http://htmlcoder.me">Privacy Policies</a></p>
						</div>
					</div>
				</div>
			</div>
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>
		<script src="script2.js"></script>

		<script>
								function checkName(x) {
			var flag = 0;
			if(!/^[a-zA-Z ]+$/.test(x)) {
				document.getElementById("validateName").innerHTML = "Name cannot contain special characters or blank";
				document.getElementById("name2").style.border = "1px solid #FF0000";
				flag=1;
			}
			else {
				document.getElementById("validateName").innerHTML = "";
				document.getElementById("name2").style.border = "none";
			}
		}

		function checkName1(x) {
			if(x.length == 0 || x.startsWith(" ")) {
				document.getElementById("validateName").innerHTML = "Name cannot be blank";
				document.getElementById("name2").style.border = "1px solid #FF0000";
			}
			else {
				document.getElementById("validateName").innerHTML = "";
				document.getElementById("name2").style.border = "none";
			}
		}
		function checkName2() {
			document.getElementById("validateName").innerHTML = "";
			document.getElementById("name2").style.border = "none";
		}

		function checkEmail(x) {
			var flag = 0;
			if(!/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(x)) {
				document.getElementById("validateEmail").innerHTML = "Please enter a valid Email Id";
				document.getElementById("email2").style.border = "1px solid #FF0000";
				flag=1;
			}
			else {
				document.getElementById("validateEmail").innerHTML = "";
				document.getElementById("email2").style.border = "none";
			}
		}

		function checkEmail1(x) {
			if(x.length == 0 || x.startsWith(" ")) {
				document.getElementById("validateEmail").innerHTML = "Email cannot be blank";
				document.getElementById("email2").style.border = "1px solid #FF0000";
			}
			else {
				document.getElementById("validateEmail").innerHTML = "";
				document.getElementById("email2").style.border = "none";
			}
		}
		

		function func3() {
			
			if(document.getElementById("name2").value.length > 0 && document.getElementById("email2").value.length > 0 && document.getElementById("validateName").innerHTML == "" && document.getElementById("validateEmail").innerHTML == "" )
			{
				
				alert("Thank you for your valuable feedback");
				
			}
			else {
				alert("Please provide valid inputs");
			}
		}
								</script>
		
	</body>
</html>
