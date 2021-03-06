<html>
<head>
	<title>About Codesena - Who are we? Why are we here?</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Codesena">
		<meta name="description" content="Codesena is a team of a few designers, programmers, developers or any other name if you can give, working on a common cause of making learning more simpler.">
        <meta name="keywords" content="Java, Algorithms, Odd Numbers, Even Numbers, Odd or Even, Even or Odd, Program, Beginner level, Codesena">
 
		  <!-- css file for bootstrap functionalities : minified -->
		  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		  <!-- css file for bootstrap functionalities : minified -->
		  <link rel="stylesheet" type="text/css" href="css/prism.css">
		  <!-- css file for font-awesome icons functionality : minified -->
		  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		  <!-- css file for custom functionalities -->
		  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
		  <!-- css file for jquery ui functionalities : minified -->
		  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">  
</head>
<body>
    <!-- scripts to add facebook like and twitter follow button - begin -->
	<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "js/sdk.js";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<script>
			window.twttr = (function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0],
				t = window.twttr || {};
			  if (d.getElementById(id)) return t;
			  js = d.createElement(s);
			  js.id = id;
			  js.src = "js/widgets.js";
			  fjs.parentNode.insertBefore(js, fjs);

			  t._e = [];
			  t.ready = function(f) {
				t._e.push(f);
			  };
			  return t;
			}(document, "script", "twitter-wjs"));
		</script>
		<!-- scripts to add facebook like and twitter follow button - end -->
		
		<!-- header section - begin -->
		<header>
			<?php include 'header-page.html';?>
		</header>
		<!-- header section - end -->
		
		<!-- area between header and footer - begin -->
		<div class="container-fluid">
			<div class="row-fluid">
			    <!-- left panel area - begin -->
							<?php include 'left-panel.html';?>
				<!-- left panel area - end -->
				
				<!-- middle panel area - begin -->
				<div class="col-md-7 col-lg-7" id="wrap">
				<!-- design about page within about-pane div -->
				<div id="about-pane"> 
				 <!-- <div class="loader"></div> -->					
				<h1 class="text-center">About Us </h1>	
				<hr>
				</div>
				<div class="row-fluid" id="notification"></div>
				
				<div class="col-sm-4">
				    <div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Who are we?</h3>
						</div>
					    <div class="panel-body">
						We are a team of a few designers, programmers, developers,  engineers or any other name if you can give, working on a common cause of making learning more simpler.
					    </div>
					</div> 
					
				    <div class="panel panel-default">
					  <div class="panel-heading">
						<h3 class="panel-title">Why we need each other?</h3>
					  </div>
					  <div class="panel-body">
						when we had started a few years back with our career, we all had struggled with examples online which confused us more instead of getting us back on tracks, keeping this is mind, we've got our own platform for helping others, all we need is your helping hand for creating this platform a larger scale platform where we help each other.
					  </div>
					</div> 

				    <div class="panel panel-default">
					  <div class="panel-heading">
						<h3 class="panel-title">How different?</h3>
					  </div>
					  <div class="panel-body">
						We are not trying to be different but more helping where we take an easier approach on helping the code lovers learn, help us by writing to us on how you can help us with which technology.
					  </div>
					</div> 					
				</div>
				<div class="col-sm-4">
				   <div class="panel panel-default">
					  <div class="panel-heading">
						<h3 class="panel-title">Why are we here?</h3>
					  </div>
					  <div class="panel-body">
						As said, we are here with a common thought of getting a new and more simpler platform for newbies to get their doubts cleared for once and all.
					  </div>
				    </div> 
					
				   <div class="panel panel-default">
					  <div class="panel-heading">
						<h3 class="panel-title">Helping hands!</h3>
					  </div>
					  <div class="panel-body">
					 As said, we are here to help each other, help us, help you, help others, send us your doubts, send us your queries, send us your algorithm, notes tutorials whatever you have, to be published here for use of others'.
					  </div>
					</div> 	

				   <div class="panel panel-default">
					  <div class="panel-heading">
						<h3 class="panel-title">What else?</h3>
					  </div>
					  <div class="panel-body">
						 We are working hard from different location, institutions and companies on this common cause of getting problems of new 'into making' engineers resolved in a most simpler and understanding way.
					  </div>
					</div> 					
				</div>
				<div class="col-sm-4">
				   <div class="panel panel-default">
					  <div class="panel-heading">
						<h3 class="panel-title">Languages?</h3>
					  </div>
					  <div class="panel-body">
						As of now, we are starting with Core Java and will be taking care tutorials for Java, JavaScript, MERN, MEAN stack and Ruby in some days followed by mobile technologies like Android, iOS etc.
					  </div>
				   </div> 
				   
				    <div class="panel panel-default">
					  <div class="panel-heading">
						<h3 class="panel-title">Workings...</h3>
					  </div>
					  <div class="panel-body">
						We are working on different platforms and different technologies, this platform is one of those which are public, we are making a community of people who can help the people who are working hard to get their mind understand software and IT. some of the technologies we are working on: Databases, MERN Stack, MEAN Stack, CEAN Stack, Rails, iOS, Android, Java, Cordova, Phonegaps etc.
					  </div>
					</div> 				   
				</div>

				</div>
				
				</div>
				<!-- middle panel area - end -->
				
				<!-- right panel area - begin -->
				<?php include 'right-panel.html';?>
				<!-- right panel area - end -->
			</div>
		</div>
		<!-- area between header and footer - end -->
		
		<!-- Scroll to top - begin -->
		<a href="#" class="scrollToTop"></a>
		<!-- Scroll to top - end -->
		
		<!-- Footer section - begin -->
		<div>
			<?php include 'footer-page.html';?>
		</div>
		<!-- Footer section - end -->
		  <!-- js file to use jquery functionalities : minified -->
		  <script src="js/jquery-1.12.4.min.js"></script>
		  <!-- js file to use jquery ui functionalities : minified -->
		  <script src="js/jquery-ui.min.js"></script>
		  <!-- js file for bootstrap functionalities : minified -->
		  <script src="js/bootstrap.min.js"></script>
		  <!-- js file for code block functionalities : minified -->
		  <script src="js/prism.min.js"></script>
		  <!-- js file for custom functionalities -->
		  <script src="js/custom.js"></script>
		  <!-- Place this tag to add googleplus follow button : minified -->
		  <script src="js/platform.js" async defer></script>
		  <!-- json file to populate left panel -->
		  <script src="js/props.json"></script>	
</body>
</html>
