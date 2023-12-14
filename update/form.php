<?php include("developers.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Update Details @ MangosOrange Group</title>
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
        <h2>Update Data of Candidate</h2>
      </div>
    </section><!-- End Breadcrumbs -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <form method="post" >
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Candidate Name" name="cand_name" value="<?php echo $editData['cand_name']??''; ?>">
              </div>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Candidate Number" name="cand_mob_no" value="<?php echo $editData['cand_mob_no']??''; ?>">
              </div>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Candidate Email" name="cand_email" value="<?php echo $editData['cand_email']??''; ?>">
              </div>
              
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Cnadidate Designation" name="cand_designation" value="<?php echo $editData['cand_designation']??''; ?>">
              </div>
              
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Cnadidate Area of Expertise" name="cand_expert" value="<?php echo $editData['cand_expert']??''; ?>">
              </div>
              
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Total Experience" name="cand_exp" value="<?php echo $editData['cand_exp']??''; ?>">
              </div>
              
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Current CTC" name="cand_ctc" value="<?php echo $editData['cand_ctc']??''; ?>">
              </div>
              
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Current Location" name="cand_location" value="<?php echo $editData['cand_location']??''; ?>">
              </div>
              
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Current Organization" name="cand_org" value="<?php echo $editData['cand_org']??''; ?>">
              </div>
              
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Client Name" name="cand_client" value="<?php echo $editData['cand_client']??''; ?>">
              </div>
              
              <div class="form-group">
                <input type="date" class="form-control" placeholder="Enter Date" name="cand_subm_date" value="<?php echo $editData['cand_subm_date']??''; ?>">
              </div>
              
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Remarks" name="cand_remark" value="<?php echo $editData['cand_remark']??''; ?>">
              </div>
              
               <div class="form-group">
                <input type="text" class="form-control" placeholder="Entered By" name="entered_by" value="<?php echo $editData['entered_by']??''; ?>">
              </div>
              
              <div class="form-group">
                <input type="file" class="form-control" placeholder="Upload Resume" name="pdf_file" accept=".pdf" value="<?php echo $editData['pdf_file']??''; ?>">
              </div>
              
            <button type="submit"  name="<?php echo empty($editData)?'save':'update'; ?>" class="btn btn-success">Save</button>
            </form>
          </div>
  
        </div>
  
      </div>
      
      <div>
        <div class="card-header text-center">
          <h4></h4>
          <a href="dashboard.php"><button class="btn btn-primary">Back to Dashboard</button></a>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>