

   
      <?php
	require_once 'connection.php'; ?>
	
<?php
		
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      	$path = "image/".$file_name;
			$title = $_POST['title'];
      
      $extensions= array("jpeg","jpg","png","pdf","doc");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG, PDF, O file.";
      }
      
      if($file_size > 209715200){
         $errors[]='File size must be excately 200 MB';
      }
      
      if(empty($errors)==true){
      		$conn->query("INSERT INTO `file` VALUES('', ' $file_name', '$path','$title')") or die(mysqli_error());
         move_uploaded_file($file_tmp,"files/".$file_name);
          $msg = "<font color=green><h3>File Send Successfully</h3></font>";
      }else{
         print_r($errors);
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources - Downloads</title>
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
              <a class="nav-link color" href="index.html">MINISTRY OF FINANCE |<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link color" href="treasury.html">TREASURY |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color" href="board.html">BOARD OF INTERNAL REVENUE |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color" href="principal.html">PRINCIPAL OFFICER |</a>
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
                <a class="nav-link color" href="news.html">NEWS |</a>
              </li>
              <li class="nav-item">
                <a class="nav-link color" href="contact.html">CONTACT </a>
              </li>
          </ul>
        </div>
      </nav>
   <div class = "float-l">
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
      
     <div id="base">
          <h1 class="rhama">Add File</h1>
            
              <?php echo @$msg;?>
          <form class="form-inline" method="POST" action="" enctype="multipart/form-data">
      <input class="form-control" type="file" name="image"/><br>
       <select class="form-control" name="title">
           
           <option>Select file title</option>
           <option>Law</option>
           <option>Budget</option>
           <option>Financial_Statement</option>
           <option>Others</option>
</select>           
            <br>
      <button type="submit" class="btn btn-success form-control" name="submit"><span class="glyphicon glyphicon-upload"></span> Upload</button>
    </form>
            </div>
          </div>
     <div class="clr"></div>
     <section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Ministry of Finance</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Treasury</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Board of Internal Revenue</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Principal Officers</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Resources</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Responsibilities</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Other Supervised MD's</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>News</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Contact</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Audit Report</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Principal Officers</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Board of Internal Revenue</a></li>
						<li><a href="#" title="Design and developed by"><i class="fa fa-angle-double-right"></i>F&A LTD</a></li>
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
					<p><u><a href="https://www.nationaltransaction.com/">Bayelsa State</a></u> Ministry of Finance</p>
					<p class="h6">© All right Reversed.<a class="text-green ml-2" href="#" target="_blank">KHAN INITIATIVE IT</a></p>
				</div>
				<hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    
</body>
</html>