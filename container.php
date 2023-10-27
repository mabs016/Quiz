<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel= "stylesheet" href="style.css">

</head>
<body>
   
    </div>
    <div class="login">
     
        <form action="" method="post">
        <h1>Student Account</h1>
        <form action="" method="post">

        <label>Fullname</label><br>
        <input type="text" name="Fullname" id=""class="txt"><br>
         
        <label>Password</label><br>
        <input type="password" name="Gwapo" id=""class="txt"><br>

        <label>Confirm Password</label><br> 
        <input type="password" name="Gwapo123" id=""class="txt"><br>
       
        <div style="text-align:center">
        <input type="submit" name="submit"value="Login" class="btn">
</div>
 <div class="login">

<?php
     if(isset($_POST['submit'])){
        $P1 =$_POST['Gwapo'];
        $P2 =$_POST['Gwapo123'];
        $size = strlen($P1);
          
        if($P1 != $P2){

            echo "<h2>Password not match!</h2>";
        
        }else if ($size < 4){

            echo "<h2>Password must be at least 6 character!</h2>";

        }else{

          
            echo "<meta http-equiv='refresh' content='0;url=quiz.php'>";

        }
    }

    ?>

</body>
</html>