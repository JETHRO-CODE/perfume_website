
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iCREAM - Ice Cream Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php require "includes/header1.php"; ?>
<?php require "includes/header2.php"; ?>


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Contact</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Contact Us For Any Query</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <div id="success"> 
                        <?php
                         $name_error = $email_error = $gender_error = $message_error =$subject_error= 
                         $only_letters = $only_email= $invalid_website="";
                         if(isset($_POST['submit'])){
                         $name = htmlspecialchars(trim($_POST['name']));
                         $email = htmlspecialchars(trim($_POST['email']));
                         $website = htmlspecialchars(trim($_POST['subject']));
                         $message = htmlspecialchars(trim($_POST['message'])) ;  
            
                         if(isset($_POST['gender'])){
                        $gender = htmlspecialchars(trim($_POST['gender']));

                         }
                         
                        if(empty($name)){
                             $name_error = "Enter your name";
                         }

                         if(!preg_match("/^[a-zA-Z ]*$/", $name))
                         {
                            $only_letters = "You are required to enter only letters ";
                         }

                         
                         if(empty($email)){
                             $email_error = "Enter your email";
                         }

                         if (!preg_match( "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email))
                         {
                            $only_email = "You are required to enter a working email address ";
                         }

                         if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=_|!:,.;]*[_a-z0-9+@#\/%=_|]/i", $website))
                         {
                            $invalid_website = "Enter a valid website ";
                         }


                 
                 
                         if(empty($gender)){
                             $gender_error = "Enter your gender";
                         }

                         if($name_error == "" && $email_error == "" && $message_error == "" && $subject_error == "" && $gender_error == "")
                         {
                            echo "<span style='color:green'; font-weight:bold;>Successfully Registered </span>";
                         }
                          }         
                                      
                        ?>
               
               
              
                        </div>

    <p>Fill the form below</p>
    <span style='color:red' font-weight:bold;>*</span>
    <spa font-weight:bold;>Required</span><br><br>
     <form  method="POST">

     <div>

        <div class="form_input1">
            <div class="form_input">
            <label for="name"></label>
            <input type="text" id="name" name="name" placeholder=" Your Name" 
            value="<?php if(isset($_POST['name'])) {echo $name;} ?>"><span style='color:red; font-weight: bold;'>*</span>
            <?php echo  "<span style='color:red; font-weight:bold;'>$name_error</span>"  ;?>
             <?php echo  "<span style='color:red; font-weight:bold;'>$only_letters</span>"  ;?>
            </div>
            
            <div class="form_input">
            <label for="email"></label>
            <input type="" id="email" name="email" placeholder=" Your email"
            value="<?php if(isset($_POST['email'])) {echo $email;} ?>"><span style='color:red; font-weight: bold;'>*</span>
            <?php echo  "<span style='color:red; font-weight:bold;'>$email_error</span>"  ;?>
            <?php echo  "<span style='color:red; font-weight:bold;'>$only_email</span>"  ;?>
            </div>
        </div>
                
     </div>
        <br>
     <div class="form_gender">
        <br>
        <label for="gender"><span style='color:red; font-weight: bold;'>*</span>Gender: </label><span> &nbsp&nbsp&nbsp&nbsp&nbsp </span>
        <label for="gender">Male</label>
        <input  type="radio" id="gender" name="gender" value="Male" 
        <?php if(isset($_POST['gender']) && $gender == "Male") {echo  "checked";}?>> 
        <label for="gender">Female</label>
        <input type="radio" id="gender" name="gender" value="Female"
        <?php if(isset($_POST['gender']) && $gender == "Female") {echo  "checked";}?>>
        <?php echo  "<span style='color:red; font-weight:bold;'>$gender_error</span>"  ;?>

    <br>

    
     </div>
     <div>

    <label for="subject"></label><br>
    <input type="text" id="subject" name="subject" placeholder="Website"
    value="<?php if(isset($_POST['subject'])) {echo $website;} ?>"><br>
    <?php echo  "<span style='color:red; font-weight:bold;'>$invalid_website</span>"  ;?>
     </div>
    
    <div>
    <br>

    <label for="message"></label><br>
    <textarea name="message" id="message" cols="85" rows="5" placeholder="Message"></textarea>
    <br><br>

    <button type="submit" name="submit"id="form_button" >Send Message</button>
    </div>

  </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


   

    <!-- Footer Start -->
    <?php require "includes/footer.php"; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>