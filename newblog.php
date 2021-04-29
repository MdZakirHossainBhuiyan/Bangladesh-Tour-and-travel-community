<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $image = $_POST['image'];
    
    $con = mysqli_connect("localhost","root","","projectbttc");
    
    $sql = "insert into user(`name`,`email`,`contact`,`address`,`password`,`image`) values('$name','$email','$contact','$address','$password','$image')";
    
    $query = mysqli_query($con,$sql);
    if($query)
    {
        header("location:login.php");
    }
    else
    {
        die(mysqli_connect_error());
    }
    
    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Bangladesh Travel and Tour Community</title>
        <link rel="icon" href="images/icon.webp" type="image/icon">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="login-title">
            <h1>Blog</h1>
            <h2>Write your blog</h2>
        </div>
        <div class="login-form">
            <form id="login-form" method="POST" action="newblog.php">
                <input name="name" type="name" class="form-login" placeholder="Your Name" required><br />
                <input name="title" type="title" class="form-login" placeholder="Title" required><br />
                <input name="date" type="date" class="form-login" placeholder="Date" required><br />
                <!--<textarea name="textarea" type="textarea" class="form-login" placeholder="Description" required><br />--><br />
                <textarea rows="6" cols="83" class="form-login"></textarea><br />
                <input type="submit" class="form-login submit" value="Submit Your Blog">
                
                <p style="text-align: right; font-size: 18px; font-family: cursive; color: white; padding-right: 380px">Back to <a href="profile.php" style="color: white">HOME</a></p>
            </form>
        </div>
    </body>
</html>