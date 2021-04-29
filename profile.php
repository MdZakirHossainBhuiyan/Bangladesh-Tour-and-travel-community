<?php
    session_start();
    //echo $_SESSION['userid'];
    $id = $_SESSION['userid'];
   
    $con = mysqli_connect("localhost","root","","projectbttc");
            
    $sql = "select * from user where id = $id";
                
    $query = mysqli_query($con,$sql);
            
    $row = mysqli_fetch_assoc($query);
                    
?>

<!DOCTYPE html>
<hrml>
    <head>
        <title> Bangladesh Travel and Tour Community</title>
        <link rel="stylesheet" href="profile.css">
        <link rel="icon" href="images/icon.webp" type="image/icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <nav class="navbar navbar-light bg-light navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="profile.php"><img src="images/icon.webp" height="60px" width="60px"> Bangladesh Travel & Tour Community</a>
                <ul class="navbar-nav mx-auto">
                    <li class="navbar-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="writeblog.php?uid=<?php echo $row["id"]; ?>">Write Blog</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>
                    
                </ul>
                <?php
                    echo "<p style=' font-size: 20px; padding-top: 10px'>"."Hi "."<i>".$row["name"]."</i>"."</p>";
                ?>
                <!--<form class="form-inline ml-auto">
                    <input class="form-control" type="text" placeholder="Search tour destination">
                    <button class="btn btn-primary"><img src="images/search.png" height="20px" width="20px"></button>
                </form>-->
            </div>
        </nav>
        <br />              
        <div class="container" style="text-align: center">
        
            <img src="<?php echo 'imgs/' . $row['image'] ?>" width="200" height="220" alt='Profile pic' class="border border-dark img-thumbnail"><br /><br />
            
            <?php
                echo "<i style='font-size: 20px'>"."<b>".$row["name"]."</i>"."</b>"."<br /><br />";
                
                echo $row["email"]."<br />";
                echo $row["contact"]."<br />";
                echo $row["address"];
                echo "<br />";
                echo "<br />";
                          
            ?>
            <hr>
        
        </div>
    </body>
</hrml>