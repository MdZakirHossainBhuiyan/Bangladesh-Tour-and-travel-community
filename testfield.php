<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Bangladesh Travel and Tour Community</title>
        <link rel="icon" href="images/icon.webp" type="image/icon">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <form class="form-inline ml-auto"method="post" action="searchblog.php">
                    <input class="form-control" type="text" name="search" placeholder="Search tour destination">
                    <button class="btn btn-primary"><img src="images/search.png" height="20px" width="20px"></button>
                </form>
            </div>
        </nav>
        
        <div class="info" style="height: 30px; width: 100%">
            <div class="infoleft bg-success" style="height: 30px; width: 16%; padding-left:40px; padding-top:3px; padding-right:10px; color: white; float: left; font-family: cursive">
                
                <p id="demo"></p>

                <script>
                    document.getElementById("demo").innerHTML = new Date();
                </script>
            </div>
            <div class="inforight" style="height: 30px; width: 84%; padding-top:3px; float: left; background-color: red; color: white">
                <marquee>"Bangladesh Travel And Tour Community" is the platform for those who loved to travel. </marquee>
            </div>
        </div>
        
        <div id="slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="active" data-target="#slider" data-slide-to="0"></li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="2"></li>
                <li data-target="#slider" data-slide-to="3"></li>
                <li data-target="#slider" data-slide-to="4"></li>
                <li data-target="#slider" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="images/bd-sl1.jpg" alt="First slide" height="400px" width="100%">
                    <div class="carousel-caption">
                        <h2>Chandranath Hill</h2>
                        <p>Sitakunda, Chittagong, Bangladesh</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/bd-sl2.jpg" alt="Second slide" height="400px" width="100%">
                    <div class="carousel-caption">
                        <h2>St. Martin's Island</h2>
                        <p>St. Martin (Island) is the only coral island in Bangladesh</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/bd-sl3.jpg" alt="Third slide" height="400px" width="100%">
                    <div class="carousel-caption">
                        <h2>Sundarbans</h2>
                        <p>Sundarban is the biggest mangrove forest in the world.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/adminlogin2.jpg" alt="Fourth slide" height="400px" width="100%">
                    <div class="carousel-caption">
                        <h2>Keep An Open Mind</h2>
                        <p>Don’t judge the lifestyles or customs of others if different from your own.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/bd-sl5.jpg" alt="Fift slide" height="400px" width="100%">
                    <div class="carousel-caption">
                        <h2>Ratargul Swamp Forest</h2>
                        <p>Ratargul Swamp Forest is a freshwater swamp forest located in Gowain River, Fatehpur Union, Gowainghat, Sylhet, Bangladesh.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/bd-sl6.jpg" alt="Sixth slide" height="400px" width="100%">
                    <div class="carousel-caption">
                        <h2>Break Out Of Your Comfort Zone</h2>
                        <p>Challenge yourself to try things that normally give you anxiety. The more you do this, the more that anxiety will fade away.</p>
                    </div>
                </div>
            </div>
            <a href="#slider" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#slider" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
            
            <script>
                $('.carousel').carousel({
                    interval: 2000,
                });
            </script>
        </div>
        
        <div class="container table-responsive">
            <br><br>
            <h1 class="text-primary text-center" style="font-size: 20px; font-style: italic">---- Public Review ----</h1>
            
            <p style="text-align: right; font-size: 18px; font-family: cursive; padding-right: 100px">You can also write your <a href="review.php">review</a></p>
            
            
            
            
            
            <?php
                $con = mysqli_connect("localhost","root","","projectbttc");
    
                $sql = "select id, name, review from review order by id desc limit 6";//ORDER BY id desc
                $result = mysqli_query($con, $sql);

                if(mysqli_num_rows($result)>0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<br />";
                        echo "<div style='width: 60%; margin-left: 230px; font-family: cursive' class='text-justify'>";
                            
                            echo $row["review"];
                            echo "<p style='text-align: right; padding-top: 10px;'>"."<b>"."-- ".$row["name"]."</b>"."<br />";
                            echo "<br />";
                        
                        echo "</div>";
                        
                    }
                }
                else
                {
                    echo "There is no review yet.";
                }
                mysqli_close($con);
            ?>
            
            
            
            
            
            <table class="table table-hover">
                <tbody>
                    
                <?php
                    $con = mysqli_connect("localhost","root","","projectbttc");
    
                    $sql = "select id, name, review from review order by id desc limit 10";//ORDER BY id desc
                    $result = mysqli_query($con, $sql);

                    if(mysqli_num_rows($result)>0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                                echo "<td>";
                                    echo $row["name"];
                                echo "</td>";
                                echo "<td>";
                                   
                                echo "</td>";
                                echo "<td>";
                                   
                                echo "</td>";
                                echo "<td>";
                                    echo $row["review"];
                                echo "</td>";
                            echo "</tr>";
                        }
                    }
                    else
                    {
                        echo "There is no review yet.";
                    }
                    mysqli_close($con);
                ?>
                </tbody>
            </table>
        </div>
        
        <footer style="padding-right: 60px; padding-top: 10px; color: darkgray; text-align: right">
            <p style="font-family: cursive">Designed by: Khalid Hasan</p>
        </footer>
    </body>
</html>