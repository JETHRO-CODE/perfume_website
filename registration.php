
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
    <script src="https://kit.fontawesome.com/8db71d15fc.js" crossorigin="anonymous"></script>
</head>

<body>
<?php require "includes/header1.php"; ?>
<?php require "includes/header2.php"; ?>


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Registration</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Register</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    /*
create a database for the contact form, anybody that fills their details will be seen on the database


on the menu bar create a link register, inside the register create a form with the following input
Name: First name , Last name
Email, Phone number,
How did you get to know about us 
do a dropdown it should have , facebook, website, instagram, twitter, others specify
Are you a existing customer use radio button(yes or no) 
address,country,Register
*/ 

<div>
    <form action="">
    <label for="name">Name:</label>
    <input type="text"><br>
    <label for="email">Email</label>
    <input type="email"><br>
    <label for="phone">Phone:</label>
    <input type="number" name="" id=""><br>
    <label for="dropdown">How did you come to know us:</label>
    <input type="button" value="" ><br>
    <label for="">Are you a existing customer</label>
    <label for="">Yes</label><br>
    <input type="radio" name="" id="">



    </form>
</div>
    

    
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


