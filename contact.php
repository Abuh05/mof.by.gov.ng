
 <?php
        include_once 'dbconnect.php';
          if(isset($_POST['btn1']))
{
  $name = mysqli_real_escape_string($db, $_POST['fullname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
   $email = mysqli_real_escape_string($db, $_POST['subject']);
  $msg = mysqli_real_escape_string($db, $_POST['msg']);
  
if(mysqli_query($db, "INSERT INTO contact(name,email,subject,message,msgdate) VALUES('".$name."','".$email."','".$sub."','".$msg."',NOW())"))
  {
            $msg = "<font color=#581c0c;><h4>Message Send Successfully</h4></font>";
     echo '<meta content="6;index.php" http-equiv="refresh" />';
     
      //echo "<font color=red><h3>Record Added Successfully</h3></font>";
    
        
       
  }

  else
  {
            //$msg1 = 'Record already exist...';
  
       
        
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel ="stylesheet" href = "style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
       <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
</head>
<body>
      <!-- Full Page Image Header with Vertically Centered Content -->
      <header class="masthead">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-4 text-center">
                   <img src="img/logo.png">
            </div>
            <div class="col-8 text-left">
                <h1 class="font-weight-light" id = "h1">BAYELSA STATE</h1>
                <p class="lead" id = "p">MINISTRY OF FINANCE</p>
              </div>
          </div>
        </div>
      </header>
      <nav class="navbar navbar-expand-lg background">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class = "toggle">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </button>
      
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto middle" style = "color:white;">
            <li class="nav-item active">
              <a class="nav-link color" href="index.php">MINISTRY OF FINANCE |<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link color" href="treasury.php">TREASURY |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color" href="board.php">BOARD OF INTERNAL REVENURE |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color" href="principal.php">PRINCIPAL OFFICER |</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle color" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               RESOURCES 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="budget.php">Budget</a>
                <a class="dropdown-item" href="laws.php">Laws</a>
                <a class="dropdown-item" href="Financial_Statement.php">Financial Statement</a>
                <a class="dropdown-item" href="Others.php">Others</a>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link color" href="news.php">NEWS |</a>
              </li>
              <li class="nav-item">
                <a class="nav-link color" href="contact.php">CONTACT </a>
              </li>
          </ul>
        </div>
      </nav>
      <div class="float-container">
        <div class="float-child">
    
       <?php echo @$msg;?>
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Contact us</strong> </h5>
        
    
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" id="form" method="post">

            <!-- Name -->
            <div class="md-form mt-3">
                <input type="text"  name="fullname" id="materialContactFormName" class="form-control">
                <label  for="materialContactFormName">Name</label>
            </div>

            <!-- E-mail -->
            <div class="md-form">
                <input type="email"  id="materialContactFormEmail" class="form-control" name="email">
                <label for="materialContactFormEmail">E-mail</label>
            </div>

            <!-- Subject -->
            <div class="md-form">
                <input type="text"  id="materialContactFormEmail" class="form-control" name="subject">
                <label for="materialContactFormEmail">Subject</label>
            </div>

            <!--Message-->
            <div class="md-form">
                <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3" name="msg"></textarea>
                <label for="materialContactFormMessage">Message</label>
            </div>

            <!-- Copy -->
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="materialContactFormCopy">
                <label class="form-check-label" for="materialContactFormCopy">Send me a copy of this message</label>
            </div>

            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="btn1">Send</button>

        </form>
        <!-- Form -->

    </div>

</div>
</div>
<!-- Material form contact -->
     <div class="float-first">
         <h2 id = "news">NEWS UPDATE</h2>
         <div class = "aside">
         <div class = "aside">
         <h3>2020 BUDGET</h3>
         <p>
            The Bayelsa state budget for 2020...
         </p>
         <a href = "#">View More</a>
         <h3>COVID-19</h3>
         <p>
            The Nigeria Centre for Disease Control (NCDC)is responding to the challenges of public health emergencies and to enhance Nigeria’s preparedness 
         </p>
         <a href = "#">View More</a>
         <h3>DISTRIBUTION OF PALLIATIVE</h3>
         <p>
            The palliative measure employed by His Excellency Senetor Douye Diri is....
         </p>
         <a href = "#">View More</a>
        </div>
        </div>
        </div>
   </div>
     <div class="clr"></div>
     <!-- Footer -->
     <section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="index.php" title="Home"><i class="fa fa-angle-double-right"></i>Ministry of Finance</a></li>
						<li><a href="treasury.php" title="The State Treasury Office"><i class="fa fa-angle-double-right"></i>Treasury</a></li>
						<li><a href="contact.php" title="Contact us"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="board.php" title="Board of Internal Revenue"><i class="fa fa-angle-double-right"></i>Board of Internal Revenue</a></li>
						<li><a href="principal.php" title="Principal Officers"><i class="fa fa-angle-double-right"></i>Principal Officers</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="viewdown.php" title="Documents"><i class="fa fa-angle-double-right"></i>Resources</a></li>
						<li><a href="#" title="Responsibilities"><i class="fa fa-angle-double-right"></i>Responsibilities</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>Other Supervised MD's</a></li>
						<li><a href="news.php" title="News"><i class="fa fa-angle-double-right"></i>News</a></li>
						<li><a href="contact.php" title="Contact us"><i class="fa fa-angle-double-right"></i>Contact</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="index.php" title="Ministry of Finance"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="#" title="Audit Report"><i class="fa fa-angle-double-right"></i>Audit Report</a></li>
						<li><a href="principal.php" title="Principal Officers"><i class="fa fa-angle-double-right"></i>Principal Officers</a></li>
						<li><a href="board.php" title="board of Internal revenue"><i class="fa fa-angle-double-right"></i>Board of Internal Revenue</a></li>
						</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="index.php">Bayelsa State</a></u> Ministry of Finance</p>
					<p class="h6">© All right Reversed.<!-- <a class="text-green ml-2" href="#" target="_blank">KHAN INITIATIVE IT</a> --> </p>
				</div>
				<hr>
				<div class="scrolltop float-right">
        <i class="fa fa-arrow-up" onclick="topFunction()" id="myBTn"></i>
                        </div>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->
   <script>
       $('.count').counterUp({
         delay:10,
         time:3000
       })

       mybutton = document.getElementById("myBTn");

       window.onscroll = function(){scrollFunction()};

       function scrollFunction(){
         if(document.body.scrollTop> 20 || document.documentElement.scrollTop >20){
          mybutton.style.display ="block";
         }
         else{
           mybutton.style.display ="none";
         }
         }
         function topFunction(){
           document.body.scrollTop = 0;
           document.documentElement.scrollTop = 0;
         }
       
    </script>
    




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    
</body>
</html>