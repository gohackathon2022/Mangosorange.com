<?php include 'database.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Upload Resume | MangosOrange</title>
  <meta content="We are Catering Services Provider, Contract Staffing, HR Solutions, Payroll Management &amp; Consulting Services company in the field of Skill Development based in Delhi NCR." name="descriptison">
  
  <meta content="Industrial Catering Service, Healthcare Kitchen and Dietary Service, Kitchen Services, Manpower Supply Services in Delhi NCR, Contract Labour Supplier, Contract Labour Supplier in Delhi NCR, Skill Consulting Services, Consultancy services for Skill Development, Payroll Services in Delhi NCR" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/MOFavicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="bootstrap.css" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-theme.css" crossorigin="anonymous">



<script>
if (RegExp('google', 'i').test(document.referrer)) {
 var js = document.createElement('script');
 js.setAttribute('src', 'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2597105471517433');
 js.setAttribute('crossorigin', 'anonymous');
 js.setAttribute('async', '');
 document.head.appendChild(js);
}
</script>

<script type="text/javascript"><!--
new Image().src = "//counter.yadro.ru/hit?r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random();//--></script>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:info@mangosorange.co.in">info@mangosorange.com</a>
        <i class="icofont-phone"></i> <a href="tel:+911204164821">+91 120 416 4821</a>
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.linkedin.com/company/mangosorange" target="new" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
       <!-- <h1 class="text-light"><a href="index.html"><span>Eterna</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="../index.html"><img src="../assets/img/MOLogo.png" height="150" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="../index.html">Home</a></li>
          <!--<li><a href="work-integrated-skill-training-apprenticeship.html">WISTA</a></li>-->

          <li><a href="../about-mangosorange.html">About</a></li>

          <li class="drop-down"><a href="../it-services.html">IT Services</a>
          	<ul>
              <li><a href="../web-development.html">Web Development</a></li>
              <li><a href="../app-development.html">App Development</a></li>
              <li><a href="../cloud-infrastructure.html">Cloud infrastructure</a></li>
              <li><a href="../open-source.html">Open Source</a></li>
				      <li><a href="../custom-software.html">Custom Software</a></li>
              <li><a href="../e-commerce.html">E-Commerce</a></li>
                 
            </ul>
          </li>

          <li class="drop-down"><a href="../Staffing-Solution-Services.html">Staffing</a>
          	<ul>
              <li><a href="../Offshore-Staffing.html">Offshore Staffing</a></li>
              <li><a href="../On-Premise-Staffing.html">On Premise Staffing</a></li>
              <li><a href="../contract-sourcing.html">Contract Sourcing</a></li>
              <li><a href="../staffing-solution.html">Staffing Solutions</a></li>
				      <li><a href="../payroll-outsourcing.html">Payroll Outsourcing</a></li>
              <li><a href="../management-consulting.html">Management Consulting</a></li>
                 
            </ul>
          </li>
			    <li><a href="../career-mangosorange.php">Openings</a></li>

          <li><a href="../contact-mangosorange.html">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../index.html">Home</a></li>
          <!-- <li>Career</li> -->
        </ol>
        <h2>Upload Resume</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
  
          <div class="row">
  
            <div class="col-lg-5">
              <form method="post" enctype="multipart/form-data">
					    <?php
						// If submit button is clicked
						if (isset($_POST['submit']))
						{
						// get name from the form when submitted
						$cand_name = $_POST['cand_name'];
						$cand_mob_no = $_POST['cand_mob_no'];
						$cand_email = $_POST['cand_email'];
						$cand_designation = $_POST['cand_designation'];
						$cand_expert = $_POST['cand_expert'];
						$cand_exp = $_POST['cand_exp'];
						$cand_ctc = $_POST['cand_ctc'];
						$cand_location = $_POST['cand_location'];
						$cand_org = $_POST['cand_org'];
						$cand_client = $_POST['cand_client'];
            $cand_subm_date = $_POST['cand_subm_date'];
						$cand_remark = $_POST['cand_remark'];	
						$entered_by = $_POST['entered_by'];		

						if (isset($_FILES['pdf_file']['name']))
						{
						// If the ‘pdf_file’ field has an attachment
							$file_name = $_FILES['pdf_file']['name'];
							$file_tmp = $_FILES['pdf_file']['tmp_name'];
							
							// Move the uploaded pdf file into the pdf folder
							move_uploaded_file($file_tmp,"./pdf/".$file_name);
							// Insert the submitted data from the form into the table
							$insertquery =
							"INSERT INTO employee(cand_name, cand_mob_no, cand_email, cand_designation, cand_expert,
							cand_exp, cand_ctc, cand_location, cand_org, cand_client, cand_subm_date, cand_remark,
							entered_by,filename) VALUES('$cand_name','$cand_mob_no','$cand_email','$cand_designation',
							'$cand_expert','$cand_exp','$cand_ctc','$cand_location','$cand_org','$cand_client', '$cand_subm_date',
							'$cand_remark','$entered_by','$file_name')";
							
							// Execute insert query
							$iquery = mysqli_query($conn, $insertquery);	

								if ($iquery)
							{							
					?>											
								<div class=
								"alert alert-success alert-dismissible fade show text-center">
									<a class="close" data-dismiss="alert" aria-label="close">
									×
									</a>
									<strong>Success!</strong> Data submitted successfully.
								</div>
								<?php
								}
								else
								{
								?>
								<div class=
								"alert alert-danger alert-dismissible fade show text-center">
									<a class="close" data-dismiss="alert" aria-label="close">
									×
									</a>
									<strong>Failed!</strong> Try Again!
								</div>
								<?php
								}
							}
							else
							{
							?>
								<div class=
								"alert alert-danger alert-dismissible fade show text-center">
								<a class="close" data-dismiss="alert" aria-label="close">
									×
								</a>
								<strong>Failed!</strong> File must be uploaded in PDF format!
								</div>
							<?php
							}// end if
						}// end if
					?>
					
					<div class="form-input py-2">
						<div class="col form-group">
							<input type="text" class="form-control"
								placeholder="Candidate's Name" name="cand_name" required>
						</div>

						<div class="col form-group">
							<input type="text" class="form-control"
								placeholder="Contact number" name="cand_mob_no" required>
						</div>
						
						<div class="col form-group">
							<input type="email" class="form-control"
								placeholder="Candidate's email" name="cand_email" required>
						</div>

						<div class="col form-group">
							<input type="text" class="form-control"
								placeholder="Current Designation" name="cand_designation" required>
						</div>

						<div class="col form-group">
							<input type="text" class="form-control"
								placeholder="Candidate's Area of Expertise" name="cand_expert" required>
						</div>

						<div class="col form-group">
							<input type="text" class="form-control"
								placeholder="Total Experience" name="cand_exp" required>
						</div>

						<div class="col form-group">
							<input type="text" class="form-control"
								placeholder="Current CTC" name="cand_ctc" required>
						</div>

						<div class="col form-group">
							<input type="text" class="form-control"
								placeholder="Current Location" name="cand_location" required>
						</div>

						<div class="col form-group">
							<input type="text" class="form-control"
								placeholder="Current Organisation" name="cand_org" required>
						</div>

						<div class="col form-group">
							<input type="text" class="form-control"
								placeholder="Client Name" name="cand_client" required>
						</div>

            <div class="col form-group">
							<input type="date" class="form-control"
								placeholder="Submition Date" name="cand_subm_date" required>
						</div>

						<div class="col form-group">
							<input type="text" class="form-control"
								placeholder="Remarks" name="cand_remark" required>
						</div>

						<div class="col form-group">
							<input type="text" class="form-control"
								placeholder="Entered By" name="entered_by" required>
						</div>
						
						<div class="col form-group">
							<input type="file" name="pdf_file"
								class="form-control" accept=".pdf" required/>
						</div>

						<div class="col form-group">
							<input type="submit"
								class="btn btn-success" name="submit" value="Submit">
						</div>
					</div>
				</form>
            </div>




            <div class="col-lg-7">
              <div class="card-header text-center">
                <h4>Search Candidate</h4>
                <!-- <a href="table.php"><button class="btn btn-primary">Search</button></a> -->
              </div> <br/>

<?php
include 'dbcon.php';
$searchErr = '';
$employee_details='';
if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from employee where cand_name like '%$search%' or cand_expert like '%$search%' or cand_email like '%$search%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($employee_details);
         
    }
    else
    {
        $searchErr = "Please enter the information";
    }
    
}
 
?>

<form class="" action="#" method="post">
    
        <div class="form-group">
            <!-- <label class="control-label " for="email"><b>Search Employee Information:</b>:</label> -->
            <div class="col form-group">
              <input type="text" class="form-control" name="search" placeholder="Search Here">
            </div>
            <div class="col form-group">
              <button type="submit" name="save" class="btn btn-success">Search</button>
            </div>
        </div>
        <div class="form-group">
            <span class="error" style="color:red;"> <?php echo $searchErr;?></span>
        </div>
         
    </form>
    <br/>
    <h3><u>Search Result</u></h3><br/>
    <div class="table-responsive">          
      <table class="table">
        <thead>
          <tr>
            <th>S.No</th>
            <th>Candidate Name</th>
            <th>Number</th>
            <th>Email</th>
            <th>Expertise</th>
            <th>Remarks</th>
          </tr>
        </thead>
        <tbody>
                <?php
                 if(!$employee_details)
                 {
                    echo '<tr>No data found</tr>';
                 }
                 else{
                    foreach($employee_details as $key=>$value)
                    {
                        ?>
                    <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $value['cand_name'];?></td>
                        <td><?php echo $value['cand_mob_no'];?></td>
                        <td><?php echo $value['cand_email'];?></td>
                        <td><?php echo $value['cand_expert'];?></td>
                        <td><?php echo $value['cand_remark'];?></td>
                        <td><a href="form.php?edit=<?php echo $value['id']; ?>" class="btn btn-success">Edit</a></td>
                    </tr>
                         
                        <?php
                    }
                     
                 }
                ?>
             
         </tbody>
      </table>
    </div>
</div>



              <!-- <div class="card-body">
                <form action="" method="GET">
                  <div class="row">
                    <div class="col-md-8">
                      <input type="text" name="cand_name" value="<?php if(isset($_GET['cand_name'])){echo $_GET['cand_name'];} ?>" class="form-control">
                    </div>
                    <div class="col-md-4">
                      <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                  </div>
                </form>
                
                <div class="row">
                  <div class="col-md-12">
                    <hr>

                    <?php 

                    $con = mysqli_connect("localhost","root","","mangosdb");

                    if(isset($_GET['cand_name']))
                    {
                      $cand_name = $_GET['cand_name'];
                      $query = "SELECT * FROM resume WHERE cand_name='$cand_name' ";
                      $query_run = mysqli_query($con, $query);

                      if(mysqli_num_rows($query_run) > 0)
                      {
                        foreach($query_run as $row)
                        {
                          ?>
                          
                          <div class="form-group mb-3">
                            <label for="">Candidate Name</label>
                            <input type="text" value="<?= $row['cand_name']; ?>" class="form-control">
                          </div>

                          <div class="form-group mb-3">
                            <label for="">Candidate Number</label>
                            <input type="text" value="<?= $row['cand_mob_no']; ?>" class="form-control">
                          </div>

                          <div class="form-group mb-3">
                            <label for="">Candidate Email</label>
                            <input type="text" value="<?= $row['cand_email']; ?>" class="form-control">
                          </div>

                          <hr>
                          
                          <?php
                        }
                      }
                      else
                      {
                        echo "No Record Found";
                      }
                    }
                                   
                          ?>

                  </div>
                </div>

            </div> -->
            </div>


  
            </div>
  
        </div>
      </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="../about-mangosorange.html">About us</a></li>
              <li><a href="../it-services.html">IT Services</a></li>
              <li><a href="../Staffing-Solution-Services.html">Staffing</a></li>
              <li><a href="../career-mangosorange.php">Openings</a></li>
              <li><a href="../contact-mangosorange.html">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="../it-services.html">IT Services</a></li>
              <li><a href="../Offshore-Staffing.html">Offshore Staffing</a></li>
              <li><a href="../On-Premise-Staffing.html">On Premise Staffing</a></li>
              <li><a href="../contract-sourcing.html">Contract Sourcing</a></li>
              <li><a href="../Staffing-Solution-Services.html">Staffing Solution</a></li> 
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              <strong>Corp. Office:</strong> 
              <br>H-87, 3rd Floor, Sector-63, Noida, U.P. - 201301<br><br>
              <strong>Phone:</strong> <a href="tel:+911204164821" style="color: white;">+91 120 416 4821</a><br>
              <strong>Email:</strong> <a href="mailto:info@mangosorange.com" style="color: white;">info@mangosorange.com</a><br>
            </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>MSPL 2022</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>