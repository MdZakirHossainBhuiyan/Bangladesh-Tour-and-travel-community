<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $review = $_POST['review'];

    $con = mysqli_connect("localhost","root","","projectbttc");
    
    $sql = "insert into review (`name`,`email`,`review`) values('$name','$email','$review')";
    $query = mysqli_query ($con,$sql);
    if($query){
        echo "Review saved";
    }
    else{
        echo mysqli_error($con);
    }
    
    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Bangladesh Travel and Tour Community</title>
        <link rel="icon" href="images/icon.webp" type="image/icon">
        <link rel="stylesheet" href="review.css">
        
    </head>
    <body>
        
        <div class="review-title">
            <h1>Hello</h1>
            <h2>We are alwas ready to serve you</h2>
        </div>
        
        <div  class="review-form">
            <form id="review-form" method="POST" action="review.php">
                <input name="name" type="text" class="form-review" placeholder="Write your full name" required><br />
                
                <input name="email" type="email" class="form-review" placeholder="Your E-mail" required><br />
                
                <textarea name="review" class="form-review" placeholder="Write your review" row="4" required></textarea><br />
                
                <input type="submit" class="form-review submit" value="Submit your review">
                
                <p style="text-align: right; font-size: 18px; font-family: cursive; color: white; padding-right: 380px">Back to <a href="index.php" style="color: white">HOME</a></p>
            </form>
        </div>
    </body>
</html>