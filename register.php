<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit2'])) {
        $conn = mysqli_connect('localhost','root','','vegan') or die("Connection failed:".mysqli_connect_error());
        if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email'])&& isset($_POST['password'])&& isset($_POST['confirm'])) {
            $name= $_POST['name'];
            $username= $_POST['username'];
            $email= $_POST['email'];
            $password= $_POST['password'];
            $confirm= $_POST['confirm'];

            
            $sql = "INSERT INTO `signin`(`name`,`username`, `email`,`password`,`confirm`) VALUES ('$name', '$username', '$email','$password','$confirm')";

            $query = mysqli_query($conn,$sql);
            if($query){
                echo '<script>alert("Registration Successfully!")</script>';
                echo '<script>window.location="register.html"</script>'; 
            }
            else{
                echo '<script>alert("Error Occurred!..Try again")</script>';
            }
        }
    }
?>

