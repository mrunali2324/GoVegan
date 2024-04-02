<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Submitbtn'])) {
        $conn = mysqli_connect('localhost','root','','Vegan') or die("Connection failed:".mysqli_connect_error());
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phnno']) && isset($_POST['msg'])) {
            $name= $_POST['name'];
            $email= $_POST['email'];
            $phnno= $_POST['phnno'];
            $msg= $_POST['msg'];
            
            $sql = "INSERT INTO `contactfrm`(`name`,`email`, `phone_no`,`query`) VALUES ('$name', '$email', '$phnno','$msg')";

            $query = mysqli_query($conn,$sql);
            if($query){
                echo '<script>alert("Message sent syccessfully!")</script>';
                echo '<script>window.location="cntctfrm.html"</script>'; 
            }
            else{
                echo '<script>alert("Error Occurred!..Try again")</script>';
            }
        }
    }
?>

