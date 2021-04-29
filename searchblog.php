<!DOCTYPE html>
<html>
    <head>
        <title> Bangladesh Travel and Tour Community</title>
        <link rel="icon" href="images/icon.webp" type="image/icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="images/icon.webp" height="60px" width="60px"> Bangladesh Travel & Tour Community</a>
                <ul class="navbar-nav mx-auto">
                    <li class="navbar-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="login.php">Member</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="admin/adlogin.php">Admin</a>
                    </li>
                </ul>
                <form class="form-inline ml-auto">
                    <input class="form-control" type="text" placeholder="Search tour destination">
                    <button class="btn btn-primary"><img src="images/search.png" height="20px" width="20px"></button>
                </form>
                
            </div>
        </nav>
        
        <div>
            <?php
                if(!isset($_SESSION))
                    session_start();
            
                $con = mysqli_connect("localhost","root","","projectbttc");
                
                $get=$_POST['search'];
            
                if($get){
                    $sql = "select * from blog where district = '$get' order by id";//ORDER BY id desc
                    $result = mysqli_query($con, $sql);

                    if(mysqli_num_rows($result)>0)
                    {
                        echo "<div class='card mb-3 container' style='margin-top: 30px'>";
                            echo "<img class='card-img-top' src='images/bd-sl6.jpg' alt='Card image cap' height='250px'>";
                            echo "<div class='card-body'>";
                
                                echo "<table class='table'>";
                                    echo "<tr>";
                                        echo "<th>";
                                            echo "Blog Id";
                                        echo "</th>";
                                        echo "<th>";
                                            echo "Blog Title";
                                        echo "</th>";
                                        echo "<th>";
                                            echo "District";
                                        echo "</th>";
                                        echo "<th>";
                                            echo "Action";
                                        echo "</th>";
                                    echo "</tr>";
                
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        echo "<tr>";
                                            echo "<td>";
                                                echo $row["id"];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $row["title"];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $row["district"];
                                            echo "</td>";
                                            echo "<td>";
                                                ?>
                                                <a href="readpage.php?bid=<?php echo $row["id"];?>" style="text-align: right; font-family: cursive" class="btn text-success">Read</a>
                                                <?php
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                echo "</table>";
                            echo "</div>";
                        echo "</div>";
                    }
                    else
                    {
                        echo "There is no blog yet or give a wrong search title. Please click on Blog option and search again.";
                    }
                }
            
                
                mysqli_close($con);
            ?>
        </div>
        
        <footer style="padding-right: 60px; padding-top: 10px; color: darkgray; text-align: right">
            <p style="font-family: cursive">Designed by: Khalid Hasan</p>
        </footer>
    </body>
</html>



                    
                
                




