<?php
    include 'connect.php';

    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['$user_id'];
    }
    else{
        $user_id = '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="css/styleadmin.css">

</head>
<body>

<?php
    include 'user_header.php';
?>








<script src="scriptadmin.js">  </script>
    
</body>
</html>