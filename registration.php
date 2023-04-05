
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
    <?php
                         $name_error = $password_error = $gender_error = $message_error =$subject_error= $re_enter_error = 
                         $only_letters = $only_email= $invalid_website = $only_password= $only_re_enter="";
                         if(isset($_POST['submit'])){
                         $name = htmlspecialchars(trim($_POST['name']));
                         $password = htmlspecialchars(trim($_POST['abcDeF1#']));
                         $re_enter_password = "";
                         
            
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




                         if(isset($_POST['submit'])){

                         if(empty($password)){
                             $password_error = "Enter your password";
                         }

            
                         elseif (!preg_match( "/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/", $password))
                         {
                            $only_password = "password is not strong enough ";
                         }
                         

                         /*elseif (empty($re_enter_password)){
                            $re_enter_error = "Enter your password";
                         }*/

           
                        elseif ( $re_enter_password != $password)
                        {
                           $only_re_enter = "password is not the the same ";
                        }

                        else
                        {
                            $only_re_enter  = " password matched ";
                        }

                        }

                                
                         if(empty($gender)){
                             $gender_error = "Enter your gender";
                         }

                         if($name_error == "" && $gender_error == "" && $re_enter_error =="" && $password_error == "")
                         {
                            echo "<span style='color:green'; font-weight:bold;>Successfully Registered </span>";
                         }
                          }         
                                      
                        ?>
               
               
    </div>

    <div>
        <?php
            if(isset($_POST['upload']))
        {
            $file = $_FILES['profile_picture'];
            $file_name = $_FILES['profile_picture']['name'];
            $file_tmp_name =$_FILES['profile_picture']['tmp_name'];
            $file_size = $_FILES['profile_picture']['size'];
            $file_error = $_FILES['profile_picture']['error'];
            $file_type = $_FILES['profile_picture']['type'];

            $exploded_file = explode('.', $file_name);
            $file_ext = strtolower(end($exploded_file));
            $allowed_ext = array('jpg', 'jpeg', 'png', 'gif', 'docx', 'pdf');

            if(in_array($file_ext, $allowed_ext)){

                if($file_error == 0){
                if($file_size < 1048576){
                    $file_name_new = uniqid('', true) . "." . $file_ext;
                    $file_destination = 'images/'. $file_name_new;
                    if(move_uploaded_file($file_tmp_name, $file_destination))
                    {
                        echo"<p style='color:green;'>Succesfully Uploaded</p>";
                    }else{
                        echo"<p style='color:red;'Fail to upload </p>";
                    }
                }else{
                    echo"<p style='color:red;'>You are not allowed to upload a file that is more than 1MB </p>";
                }
            }else
            {
                echo "<p style='color:red;'>Error Encountered</p>";
            }
            }else{
                echo"<p style='color:red;'>You cannot upload a file of this type </p>";
            }

        }
        
        ?>
    </div>

    <div>
        <div class="registration">
            <form action="" method="POST" enctype="multipart/form-data">
            <label for="name"></label>
            <input type="text" id="name" name="name" placeholder=" Your Name" 
            value="<?php if(isset($_POST['name'])) {echo $name;} ?>"><span style='color:red; font-weight: bold;'>*</span>
            <?php echo  "<span style='color:red; font-weight:bold;'>$name_error</span>"  ;?>
             <?php echo  "<span style='color:red; font-weight:bold;'>$only_letters</span>"  ;?><br><br>

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
             
             <label for="password">Password</label>
            <input type="" id="password" name="abcDeF1#" placeholder=" Your password"
            value="<?php if(isset($_POST['password'])) {echo $password;} ?>"><span style='color:red; font-weight: bold;'>*</span>
            <?php echo  "<span style='color:red; font-weight:bold;'>$password_error</span>"  ;?>
            <?php echo  "<span style='color:red; font-weight:bold;'>$only_password</span>"  ;?>

            <label for="Re-enter"> Re-enter</label>
            <input type="" id="Re-enter" name="abcDeF1#" placeholder="Re-enter your password"
            value="<?php if(isset($_POST['re_enter_password'])) {echo $re_enter_password;} ?>"><span style='color:red; font-weight: bold;'>*</span>
            <?php echo  "<span style='color:red; font-weight:bold;'>$re_enter_error</span>"  ;?>
            <?php echo  "<span style='color:red; font-weight:bold;'>$only_re_enter</span>"  ;?><br><br>

           

            <h1>UPLOAD YOUR PROFILE PICTURE</h1>
            <P>file type allowed: "*.jpg, *.jpeg, *.pdf,  *.docx"</P>
            <input type="file" name="profile_picture" class="picture_control"><br><br>
            <button type="submit" class="picture_button" name="upload" > Upload</button><br><br>

            <button type="submit" name="submit" id="form_button" > Register</button>
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


