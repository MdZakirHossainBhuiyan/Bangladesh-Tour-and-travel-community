<!DOCTYPE html>
<html>
    <head>
        <title>Bangladesh Travel & Tour Community</title>
        <link rel="icon" href="../images/icon.webp" type="image/icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md" style="background-color: #006747">
            <div class="container" style="">
                <a class="navbar-brand" href="adindex.php" style="color: #DA291C"><img src="../images/icon.webp" height="60px" width="60px">Bangladesh Travel & Tour Community</a>
                
                <ul class="navbar-nav mx-auto">
                    <li class="navbar-item">
                        <a class="nav-link" href="adindex.php" style="color: #DA291C">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="updatereview.php" style="color: #DA291C">Review</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="updateblog.php" style="color: #DA291C">Blog</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="adregistration.php" style="color: #DA291C">Registration</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="blockadmin.php" style="color: #DA291C">Block Admin</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="blockuser.php" style="color: #DA291C">block Member</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="adlogout.php" style="color: #DA291C">logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        
        <?php
            $con = mysqli_connect("localhost","root","","projectbttc");
            
            $sql = "select * from contact order by id desc";
            
            $query = mysqli_query($con,$sql);
            
            while($row = mysqli_fetch_assoc($query)){
                echo "<div class='container jumbotron' style='margin-top: 30px;'>";
                echo "You have a message from "."<b><i>".$row["name"]."</b></i>";
                echo "<hr align='left'>";
            
                echo "<div class='text-justify' style='padding-left: 50px'>";
                
                    echo "Name   &nbsp: "."<b><i>".$row["name"]."</b></i><br />";
                    echo "E-mail : "."<b><i>".$row["email"]."</b></i><br />";
                    echo "Subject: "."<b><i>".$row["subject"]."</b></i><br /><br />";
                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp "."<i>".$row["message"]."</i>";
                echo "</div>";
                echo "</div>";
            }
            
            
            
        ?>
    </body>
</html>