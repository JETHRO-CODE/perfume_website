
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

   



<div>
    <div class="form_style">
    
    <form method="POST">
   <br>
    <h1 class="order_request">Order Request</h1>
    <?php
                         $name_error = $lastname_error = $email_error = $gender_error = $message_error = $subject_error= $phone_error =
                         $only_letters = $only_lastname =   $only_email=   $only_numbers="";
                         if(isset($_POST['submit'])){

                         require"includes/order_db_conn.php";
                         $name = htmlspecialchars(trim($_POST['name']));
                         $lastname = htmlspecialchars(trim($_POST['lastname']));
                         $email = htmlspecialchars(trim($_POST['email']));
                         $phone =   htmlspecialchars(trim($_POST['phone']));
                         $products = htmlspecialchars(trim($_POST['products']));
                         

                         
                         if(isset($_POST['gender'])){
                            $gender = htmlspecialchars(trim($_POST['gender']));
                            }
                         $message = htmlspecialchars(trim($_POST['message'])) ;  

                         /*$_SESSION ['name'] = $name;
                         $_SESSION ['email'] = $email;
                         $_SESSION ['website'] = $website;*/

                         
            
                        
                         
                        if(empty($name)){
                             $name_error = "Enter your name";
                         }

                         if(!preg_match("/^[a-zA-Z ]*$/", $name))
                         {
                            $only_letters = "You are required to enter only letters ";
                         }

                         if(empty($lastname)){
                            $lastname_error = "Enter your name";
                        }

                        if(!preg_match("/^[a-zA-Z ]*$/", $lastname))
                        {
                           $only_lastname = "You are required to enter only letters ";
                        }

                         
                         if(empty($email)){
                             $email_error = "Enter your email";
                         }

                         if (!preg_match( "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email))
                         {
                            $only_email = "You are required to enter a working email address ";
                         }

                         
                         if(empty($phone)){
                            $phone_error = "Enter your name";
                        }

                        if(!preg_match("/^[0-9]*$/", $phone))
                        {
                           $only_numbers = "You are required to enter only numbers ";
                        }
                         


                 
                 
                         if(empty($gender)){
                             $gender_error = "Enter your gender";
                         }

                         else
                         
                         {
                            $sql="SELECT email FROM order_table WHERE email='$email'";
                            $result= mysqli_query($conn,$sql);
                
                            if(mysqli_num_rows($result)>0)
                            {
                              //echo "<p style='color:red; font-weight:bold;' >You are already Registered </p>";
                              $sql =" UPDATE order_table SET name = '$name', lastname='$lastname', email='$email', phone='$phone', products='$products',  Existing_Customer='$gender', 
                              Other_products_order='$message' where email='$email'";
                
                              if(mysqli_query($conn,$sql)){
                                echo "<p style='color:green; font-weight:bold;' >Successfully Updated </p>";
                              }else{
                                echo "<p style='color:red; font-weight:bold;' >Update failed </p>";
                              }
                            }
                            else{
                             $sql = "INSERT INTO order_table(name, lastname, email, phone, products, Existing_Customer, Other_products_order) VALUES('$name', '$lastname', '$email', '$phone', '$products', '$gender', '$message')";
 
                             if(mysqli_query($conn, $sql))
                             {
                                 echo "<p style='color:green; font-weight:bold;' >Successfully Ordered</p>";
                             }
                             else
                             {
                                 echo "<p style='color:red; font-weight:bold;' >Order failed </p>";

                             }
                            }
                         }

                                                
        
                          }         
                                      
                        ?>
    <div>
        
        <div class="form_input1">
            <div class="form_input">
            <label for="name"></label>
            <input type="text" id="name" name="name" placeholder=" Name" 
            value="<?php if(isset($_POST['name'])) {echo $name;} ?>"><span style='color:red; font-weight: bold;'>*</span>
            <?php echo  "<span style='color:red; font-weight:bold;'>$name_error</span>"  ;?>
             <?php echo  "<span style='color:red; font-weight:bold;'>$only_letters</span>"  ;?>
            </div>

            <div class="form_input">
            <label for="name"></label>
            <input type="text" id="lastname" name="lastname" placeholder=" Last Name" 
            value="<?php if(isset($_POST['name'])) {echo $lastname;} ?>"><span style='color:red; font-weight: bold;'>*</span>
            <?php echo  "<span style='color:red; font-weight:bold;'>$name_error</span>"  ;?>
             <?php echo  "<span style='color:red; font-weight:bold;'>$only_letters</span>"  ;?>
            </div>
        </div>
    </div>

            <label for="email"></label>
            <input type="" class="order_input"  id="email" name="email" placeholder=" Your email"
            value="<?php if(isset($_POST['email'])) {echo $email;} ?>"><span style='color:red; font-weight: bold;'>*</span>
            <?php echo  "<span style='color:red; font-weight:bold;'>$email_error</span>"  ;?>
            <?php echo  "<span style='color:red; font-weight:bold;'>$only_email</span>"  ;?>
    
            <label for="phone"></label>
            <input type="" class="order_input" id="phone" name="phone" placeholder=" Phone number" 
            value="<?php if(isset($_POST['phone'])) {echo $phone;} ?>"><span style='color:red; font-weight: bold;'>*</span>
            <?php echo  "<span style='color:red; font-weight:bold;'>$phone_error</span>"  ;?>
             <?php echo  "<span style='color:red; font-weight:bold;'>$only_numbers</span>"  ;?><br>

             <label for="cars">Choose a product:</label>
                <select name="products" id="products">
                    <option value="Smart">Smart</option>
                    <option value="Marques">Marques</option>
                    <option value="Black Opium">Black Opium</option>
                    <option value="Mousuf">Mousuf</option>
                    <option value="Lady Gold">Lady Gold</option>
                </select>
                <br><br>


    <div class="form_gender">
        
        <label for="gender"><span style='color:red; font-weight: bold;'>*</span>Are you an existing customer: </label><span> &nbsp&nbsp&nbsp&nbsp&nbsp </span>
        <label for="gender">Yes</label>
        <input  type="radio" id="gender" name="gender" value="Yes" 
        <?php if(isset($_POST['gender']) && $gender == "Yes") {echo  "checked";}?>> 
        <label for="gender">No</label>
        <input type="radio" id="gender" name="gender" value="No"
        <?php if(isset($_POST['gender']) && $gender == "No") {echo  "checked";}?>>
        <?php echo  "<span style='color:red; font-weight:bold;'>$gender_error</span>"  ;?>

    <br>

    
     </div>
    
    <label for="message"></label><br>
    <textarea name="message" id="message" cols="83" rows="5" placeholder="order other products not on list"></textarea>
    <br><br>
    

    <button type="submit" name="submit"id="form_button" >Submit request </button>
    </form>
    
 
   </div>
   
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


