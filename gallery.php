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
                <a class="navbar-brand" href="index.php"><img src="images/icon.webp" height="60px" width="60px"> Bangladesh Travel & Tour Community</a>
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
                <form class="form-inline ml-auto" method="post" action="searchblog.php">
                    <input class="form-control" type="text" name="search" placeholder="Search tour destination">
                    <button class="btn btn-primary"><img src="images/search.png" height="20px" width="20px"></button>
                </form>
            </div>
        </nav>
        
        <br /><br />
        <div class="container" style="text-align: center">
            <h1 class="text-primary" style="text-decoration-color: black; font-style: italic; font-size: 22px; padding-top: 20px">Recently Added</h1>
            <hr>
            <br />
            <?php
                $con = mysqli_connect("localhost","root","","projectbttc");
    
                $sql = "select image from blog order by id desc limit 4";//ORDER BY id desc
                $query = mysqli_query($con, $sql);

                $result = mysqli_num_rows($query);
                $count = 0;
        
                if($result>0)
                {
                    for($i = 0; $i < $result; $i++){
                    
                        while($row = mysqli_fetch_assoc($query)){
                            ?>
                                <img src="<?php echo 'blog/' . $row['image'] ?>" width="260" height="230px" style="padding-left: 20px; padding-bottom: 20px">
                            <?php
                        
                            $count = $count+1;
                            if($count==4){
                                echo "<br />";
                            }
                        } 
                    }
                }
                mysqli_close($con);
            ?>
        </div>
        
        <br /><br />
        
        <br /><br />
        <div class="container" style="text-align: center">
            <h1 class="text-primary" style="text-decoration-color: black; font-style: italic; font-size: 22px; padding-top: 20px">Full Gallery</h1>
            <hr>
            <br />
            <?php
                $con = mysqli_connect("localhost","root","","projectbttc");
    
                $sql = "select image from blog order by id";//ORDER BY id desc
                $query = mysqli_query($con, $sql);

                $result = mysqli_num_rows($query);
                $count = 0;
        
                if($result>0)
                {
                    for($i = 0; $i < $result; $i++){
                    
                        while($row = mysqli_fetch_assoc($query)){
                            ?>
                                <img src="<?php echo 'blog/' . $row['image'] ?>" width="260" height="230px" style="padding-left: 20px; padding-bottom: 20px">
                            <?php
                        
                            $count = $count+1;
                            if($count==4){
                                echo "<br />";
                            }
                        } 
                    }
                }
                mysqli_close($con);
            ?>
        </div>
        
        <br /><br />
        <footer style="padding-right: 60px; padding-top: 10px; color: darkgray; text-align: right">
            <p style="font-family: cursive">Designed by: Md Zakir Hossain bhuiyan</p>
        </footer>
    </body>
</html>