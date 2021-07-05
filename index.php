<?php
$insert = false;
if(isset($_POST['name'])){

 // set connection variable
    $servername = "localhost";
    $username = "root";
    $password = " ";

    // create a database connection
    $conn = mysqli_connect($server , $username ,$password);
//cheack for connection success
    if (!$conn){
        die("connection to this database failed due to ".
        mysqli_connect_error());
    }
    //echo "Connection success!";

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = INSERT INTO `us-trip`.'us-trip' (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`)
    VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$other',
     current_timestamp());
    // echo $sql;
    
    //execute the query
     if($con->query($sql) == true){
        // echo "Successfully inserted";

        //flag for successful insertion
        $insert = true;
     }
     else{
         echo "ERROR: $sql <br> $con-> error";
     }
     //close the database connection
     $con->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
       <img class="collage" src="collage.jpg" alt="REC KANNAUJ">

    <div class="container";>
        <h1>Welcome to REC KANNAUJ US trip form</h1>
            <h3><p>Enter your details and submit this form to conform your participation in the trip</p>
            <?php
            if($insert == true){
            echo "<p class='submitMsg'>Thanks for submitting your form.We are happy to see you comming joining us for
             the US trip </p></h3>";
            }
            ?>
             <center>
            <form action="index.php"method="post">
                <p><input type="text" name="name"id="name"placeholder="Enter your name"></p>
                <p><input type="text" name="age"id="age"placeholder="Enter your age"></p>
                <p><input type="text" name="gender"id="gender"placeholder="Enter your gender"><p/>
                <p><input type="email" name="email"id="email"placeholder="Enter your email"></p>
                <p><input type="phone" name="phone"id="phone"placeholder="Enter your phone"><p/>
                <textarea name="desc"id="desc"cols="30"rows="10"
                    placeholder="Enter any other information here"></textarea>
                 
                    <p><button type="Edit" class="btn btn-primary">Submit</button></p></center>
            </form>
            </div>
            <script src="index.js"></script>
            
           </body>
</html>





    