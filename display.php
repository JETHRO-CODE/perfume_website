<?php
if(isset($_POST['display'])){
        require"includes/order_db_conn.php";
            $sql = "SELECT * FROM order_table";

                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)> 0)

                    {
                        echo"<table border='1'>";
                        echo "
                        <th>Name</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Products</th>
                        <th>Existing Customer</th>
                        <th>Other products ordered</th>
                        
                        
                        
                        ";
                        while($retrieve = mysqli_fetch_array($result))
                        {
                            $name = $retrieve['name'];
                            $lastname = $retrieve['lastname'];
                            $email = $retrieve['email'];
                            $phone = $retrieve['phone'];
                            $products = $retrieve['products'];
                            $gender = $retrieve['Existing_Customer'];
                            $message = $retrieve['Other_products_order'];

                            echo "
                            <tr>
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>To see the students detail click below</h3>
    <form action="" method="POST">
             <button type="submit" name="display">Show result</button>
    </form>
</body>
</html>