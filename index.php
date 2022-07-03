<?php
if(isset($_POST['name'])){

 $server="localhost";
 $username="root";
 $password="";
//  $dbname="candidates";

 $con=mysqli_connect($server,$username,$password);

  if(!$con){
    die("connection to db failed".
    mysqli_connect_error());
 }
 
 $name=$_POST['name'];
 $age=$_POST['age'];
 $gender=$_POST['gender'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $other=$_POST['other'];


 $sql=" INSERT INTO  `sex_`.`candidates` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name',
 '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
 

 if($con->query($sql) == true){
   echo"";
 }
 else{
    echo"";
 }
 $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypertext</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <div class="container">
        <h1>Get your prostitute</h1>
        <p>You have to fill up this form</p>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $other=$_POST['other'];
    echo"<p class='msg' style='font-size: 30px;'> <i>You form is success fully submitted</i> </p>";
    }
        
?>
        

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Age">
            <input type="text" name="gender" id="gender" placeholder="Gender">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="phone" name="phone" id="phone" placeholder="Phone">

            <textarea name="other" id="other" cols="30" rows="10" placeholder="Other details"></textarea>
            <div class="but">
                <button class="btn">SUBMIT</button>
            </div>



        </form>
    </div>

    <!-- INSERT INTO `candidates` (`id`, `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES (NULL, 'jkjdffd',
    '45', 'male', 'hhu@gmail.com', '9797979797', 'jfjfdf jhsduihusd yfuu fduydsgds gydgysdf oi ', current_timestamp()); -->

</body>

</html>
