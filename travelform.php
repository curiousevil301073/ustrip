<?php
$insert = false;
// set connection b\variables
 if(isset($_POST['name'])){
    $server ="localhost";
    $database = "us_trip";
    $userenamne = "root";
    $password = "";
    //create a database connection  
    $con = mysqli_connect(
        $server,$userenamne,$password,$database);
        if(!$con){
            die("connection to this database failed due to ".
            mysqli_connect_error());
        }
        //echo"success connecting to db";

        //collect post variables
       $name = $_POST['name'];
       $age = $_POST['age'];
       $gender = $_POST['gender'];
       $email = $_POST['e-mail'];
       $phone = $_POST['phone'];
       $desc = $_POST['desc'];
        $sql = "INSERT INTO `trip` ( `name`, `age`, `gender`, `e-mail`, `phone`, `desc`, `dt`) 
        VALUES ('$name', '$age', '$gender', '$email', '$phone','$desc', current_timestamp());";
        //echo "$sql";

        //execute the query
        if($con->query($sql) == true){
           // echo "successfully inserted";

           //flag for successfull insertion
           $insert = true;
        }
        else{ 
            echo "error: $sql <br/> $con-> error";

        }

    //close tha database connection
        $con->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="travelform.css">
</head>
<body>
    <img src="bgimg.jpg" alt="iit Delhi" class="bgimg">
    <div class="container">
        <h1>
            Welcome to IIT Delhi US Trip
        </h1>
        <p id="paragraph">
            Enter your details and submit your form to confirm the registration for this trip
        </p>
        
        <form action="travelform.php" method="post">
            <input type="text" name="name" id="name" class ="name" placeholder="Enter your name">
            <input type="text" name="age" id="age"class ="name" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" class ="name" placeholder="Enter your gender">
            <input type="e-mail" name="e-mail" id="e-mail"class ="name" placeholder="Entere your e-mail id">  
            <input type="phone" name="phone" id="phone" class ="name" placeholder="Enter your phone no.">
            <textarea name="desc" id="desc" cols="30" rows="10" class="desc" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
            <!--<button class="btn">Reset</button>--> 

        </form> 
        <?php
        if($insert == true){
        echo "<p id= 'paramsg'>
            Thanks for submitting your form. We are happy to see you joining us for the US trip.</p> ";
        }
        ?>
    </div>
    
    <script src="travelform.js"></script>
    </body>
</html>