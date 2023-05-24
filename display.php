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
            <h1 class="text-white display-3 mt-lg-5">Orders</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Register</p>
            </div>
        </div>
    </div>
    <!-- Header End -->




    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="form_style2">
    <br>
    <?php
if(isset($_POST['display'])){
    $email = htmlspecialchars(trim($_POST['email']));
        require"includes/order_db_conn.php";
            $sql = "SELECT id, name, email, products, Other_products_order FROM order_table where email='$email'";

                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)> 0)

                    {
                        echo"<table border='1'>";
                        echo "
                        <th>SN</th>
                        <th>Reg No</th>
                        <th>Name</th>
                        <th>Email</th>
                         <th>Products</th>                       
                        <th>Other products ordered</th>
                        
                        
                        
                        ";
                        $id= 0;
                        while($retrieve = mysqli_fetch_array($result))
                        {
                            $id +=1;
                            $reg = $retrieve['id'];
                            $name = $retrieve['name'];
                            $email = $retrieve['email'];
                            $products = $retrieve['products'];
                            $message = $retrieve['Other_products_order'];

                            echo "
                            <tr>

                                <td>$id</td>
                                <td>$reg</td>
                                <td>$name</td>
                                <td>$email</td>
                                <td>$products</td>
                                <td>$message</td>
                            </tr>
                                    
                            ";
                        }
                        echo"</table>";
                    }
        }


    if(isset($_POST['display_all'])){
            require"includes/order_db_conn.php";
            $sql = "SELECT  * FROM order_table ORDER BY name";

                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)> 0)

                    {
                        echo"<table border='1'>";
                        echo "
                        <th>SN</th>
                        <th>Reg No</th>
                        <th>Name</th>
                        <th>Lastame</th>
                        <th>Email</th>
                        <th>Phone</th>
                         <th>Products</th>  
                         <th>Existing Customer</th>                     
                        <th>Other products ordered</th>
                                                
                        
                        ";
                        $id= 0;
                        while($retrieve = mysqli_fetch_array($result))
                        {
                            $id +=1;
                            $reg = $retrieve['id'];
                            $name = $retrieve['name'];
                            $lastname = $retrieve['lastname'];
                            $email = $retrieve['email'];
                            $phone = $retrieve['phone'];
                            $products = $retrieve['products'];
                            $gender = $retrieve['Existing_Customer'];
                            $message = $retrieve['Other_products_order'];

                            echo "
                            <tr>

                                <td>$id</td>
                                <td>$reg</td>
                                <td>$name</td>
                                <td>$lastname</td>
                                <td>$email</td>
                                <td>$phone</td>
                                <td>$products</td>
                                <td>$gender</td>
                                <td>$message</td>
                            </tr>
                                    
                            ";
                        }
                        echo"</table>";
                    }
        }


        if(isset($_POST['display_name'])){
            
                require"includes/order_db_conn.php";
                    $sql = "SELECT id, name, lastname, phone FROM order_table";
        
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)> 0)
        
                            {
                                echo"<table border='1'>";
                                echo "
                                <th>SN</th>
                                <th>Reg No</th>
                                <th>Name</th>
                                <th>Lastname</th>
                                 <th>Phone</th>                       
                               
                                
                                
                                
                                ";
                                $id= 0;
                                while($retrieve = mysqli_fetch_array($result))
                                {
                                    $id +=1;
                                    $reg = $retrieve['id'];
                                    $name = $retrieve['name'];
                                    $lastname = $retrieve['lastname'];
                                    $phone = $retrieve['phone'];
                                   
        
                                    echo "
                                    <tr>
        
                                        <td>$id</td>
                                        <td>$reg</td>
                                        <td>$name</td>
                                        <td>$lastname</td>
                                        <td>$phone</td>
                                    </tr>
                                            
                                    ";
                                }
                                echo"</table>";
                            }
                }
                


                if(isset($_POST['delete'])){
                    require "includes/order_db_conn.php";
                    $email = htmlspecialchars(trim($_POST['email']));
                    $sql = "DELETE FROM order_table WHERE email='$email'";
                    
                    if(mysqli_query($conn, $sql))
                    {
                        echo"<span style = 'color:green; font-weight: bold;'>Successfully Deleted</span>";
                    }else{
                        echo"<span style = 'color:red; font-weight: bold;'>Failed</span>";
                    }
                }
                
?><br>
<h4> Click below to see all Customer and details </h4>
    <form action="" method="POST">
        <button type="submit" class="show_result" name="display_all">Show result</button>
    </form><br>

    <h4>Click below to see Customer name and phone number  </h4>
    <form action="" method="POST">
        <button type="submit" class="show_result" name="display_name">Show result</button>
    </form><br>

    <h4> Enter a particular email to search for the client order</h4>
    <form action="" method="POST">
        <input class="client_view" type="email" name="email" id="" placeholder="Enter your email">
            <button type="submit" class="show_result" name="display">Submit</button>
    </form><br>

    <h4>Enter a particular email to  delete an order</h4>
    <form  action="" method="POST">
        <input class="client_view" type="email" name="email" id="" placeholder="Enter your email">
             <button type="submit" name="delete" class="show_result" >Delete</button>
    </form>
</div>
    
</body>
</html>

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
