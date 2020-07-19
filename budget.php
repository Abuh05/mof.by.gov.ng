<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources - Budget</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel ="stylesheet" href = "style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
                <a class="nav-link color" href="board.php">BOARD OF INTERNAL REVENUE |</a>
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
 <!--  <div class = "float-l">
         <h2 id = "news">NEWS UPDATE</h2>
         <div class = "aside">
         <div class = "aside">
         <h3>2020 BUDGET</h3>
         <p>
            The Baylsa state budget for 2020...
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
      -->
      <div class="container">
     <div id="base">
          <h3 class="rhama">Budget Report</h3>
           <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th>FileName</th>
                <th>Download</th>
              </tr>
            </thead>
            </div>
               <?php
          require 'connection.php';
          $title= 'Budget';
          $row = $conn->query("SELECT * FROM file where title='$title'") or die(mysqli_error());
          while($fetch = $row->fetch_array()){
        ?>
          <tr>
            <?php 
              $name = explode('/', $fetch['file']);
            ?>
           
            <td><?php echo $fetch['name']?></td>
            <td><a href="download.php?file=<?php echo $name[1]?>" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Download</a></td>
          </tr>
        <?php
          }
        ?>
              </tbody>
              </table>
            </div>
          </div>
     <div class="clr"></div>
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




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    
</body>
</html>