<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost','root','','vegan') or die("Connection failed:".mysqli_connect_error());
        
        if(isset($_POST['username']) && isset($_POST['password'])) {
            $username= $_POST['username'];
            $password= $_POST['password'];
            
            $sql = "SELECT * FROM `signin` WHERE `username` = '$username' AND `password` = '$password'";
            $query = mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($query) == 1) {
                echo '<script>alert("Login Successful!")</script>';
                echo '<script>window.location="welcome.php"</script>'; 
            } else {
                echo '<script>alert("Invalid username or password. Please try again.")</script>';
            }
        }
    }
?> 
