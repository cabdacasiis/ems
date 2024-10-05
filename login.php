<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="post">
        <label>user_name</label> <input type="text" name="user_name"><br><br>
        <label>pasword</label> <input type="password" name="pasword"><br><br>
        <button type="submit" value="submit" name="submit"  style="border: 1px green solid;background-color: green;color: white;width: 72px;height: 32px;border-radius: 6px">submit</button> <br><br>
</form>
    </div>
 


    <?php
    $con = mysqli_connect('localhost','root','','login');
    if(isset($_POST['submit'])){
        $user_name= $_POST['user_name'];
        $pasword= $_POST['pasword'];
        $user_name =stripcslashes($user_name);
        $pasword =stripcslashes($pasword);
        $user_name =mysqli_real_escape_string($con,$user_name);
        $pasword =mysqli_real_escape_string($con,$pasword);
        $sql = mysqli_query($con, "SELECT * FROM users WHERE user_name = '$user_name' AND pasword = '$pasword'");
        if(mysqli_num_rows($sql) < 1){
            echo"user_name or pasword incorrect!";
        }else{
            echo"suceed";
            
            echo"<script>alert('mahubtaa inaa diiwangalisay')</script>";
            header("Location: index.php");
        }
        

    }
    ?>
</body>
</html>