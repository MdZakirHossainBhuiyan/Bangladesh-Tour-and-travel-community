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
                    <img src="images/bd-sl4.jpg" alt="Fourth slide" height="400px" width="100%">
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
        
        <div class="container" style="font-family: cursive; margin-top:30px">
            <h1 class="text-primary text-center" style="font-size: 20px; font-style: italic">---- About Us ----</h1>
            <br><br>
            <p class="text-primary" style=" text-decoration-color: black; font-style: italic"><b>About Our Community</b></p>
            <p class="text-justify">My Tour aims to increase awareness of many tourist attractions, to encourage and support travel to My Tour. Although associated with the My Tour National Tourist Office – North America, My Tour remains an independent, non-profit, initiative to produce Web content and to offer assistance to North-American and Australian travelers interested in visiting My Tour. About the My Tour National Tourist Office The My Tour National Tourist Office — North America (MtNTO) is the official representative of the My Tour Tourist Authority Founded in 2012 to satisfy the growing demand for trusted information and knowledge about tourism , MtNTO's mission is to represent all the components of My Tour travel industry and to promote and facilitate increased inbound travel. MtNTO's activities include: Providing information to North American travelers, press, tour operators and travel agencies regarding tourist attractions, travel conditions, events and tourist facilities within My Tour. Facilitating contacts and cooperation between North American and My Tour organizations and business companies involved in travel and tourism in My Tour Marketing activities aimed at increasing awareness of tourist attractions among media, consumers and business companies resulting in increased visitation to My Tour. We handle all types of travel; everything from airline tickets, Canadian & International tours, packaged vacations in Canada, the United States and abroad, cruises & hotel bookings. We're also experts in travel to the island paradise of Cuba. We're also "specialists" in educational and youth organization tour travel. Our student travel services are second to none, which enables us to provide your student or youth organization group with excellent tours across North America, Britain and Europe. Whether you're a seasoned traveller, or a first timer, our goal is to ensure your vacation exceeds your expectations. If you're looking for a Tour Package to an international destination, you should pay a visit our Tour Information page first. You'll find everything you need to know about Tour selection and buying.</p>
            
            <br><br>
            <img src="images/aboutus1.jpg" alt="pictur" height="450px" width="1100px">
            
            <br><br>
            <p class="text-primary" style="text-decoration-color: black; font-style: italic"><b>Our Vision</b></p>
            <p class="text-justify">Tourism which is ethical, fair and a positive experience for both travellers and the people and places they visit.My Tour seeks to enhance the corporate management tools to improve the service while reducing your travel costs. We manage almost every type of travel needs, from simplest to the complex, and create an unparalleled experience that our customers could rely on. We aim to maintain our vision of high class travel services at reasonable prices through consistent leadership, controlled growth and excellent commitment.Keeping our vision, “value for money & client satisfaction” as a compass. The number of passengers serviced annually today, is more than ten times higher than that we serviced on annual basis when we first started up. Through continuous investments in contemporary travel related technology and quality assurance, My Tour Vision Travel has positioned itself today as one of the Top Ranked Travel and Tour Operating Companies in world, capable of meeting any Individual, Group, Organization or tour operator’s requirement. There are presently few competitors offering services similar to ours. However considering the pace of change and current growth rate of the tourism industry luring many companies into the sector, this may be short-lived. Hence there will be a need to not only firmly establish ourselves on the market, but also strongly differentiate ourselves from these other businesses. My Tour Vision Travel is one of the few organizations that can offer all over the world a full spectrum of tourism services with flexible and efficient solutions, as a one stop supplier. The services we provide are of a high standard as well as to save both time and money. We invite you to share our vision and benefit from our expertise, professionalism, flexibility, personalized approach, strong purchasing power and comprehensive product portfolio.</p>
            
            <br><br>
            <p class="text-primary" style=" text-decoration-color: black; font-style: italic"><b>Our Mission</b></p>
            <p class="text-justify">To ensure tourism always benefits local people by challenging bad practice and promoting better tourism.My travel seeks to manage the travel requirements of your company and add value to your travel spend. We tend to focus on the customers’ requirements to come up with effective strategies for meeting their demands in an efficient manner. Our mission is to offer corporate travel solutions and become the biggest travel agency in the World.Efficiency, Flexibility and Quality Service with a Personal Touch, combined with strong purchasing advantages and Value for Money. We’re committed to offer competitive value for money and high level services in order to achieve total client satisfaction. We want to meet and exceed all business clients ‘goals and objectives, strive for excellence in quality, integrity, professionalism and value in all we do. The Company offers packages in the most sought after international tickets, passport and visa assistance, pilgrim tours, inbound and outbound tours as well as to the most popular destinations Worldwide. We want our partners and ourselves to grow profitably in our respective country, through thorough market analysis, continuous product development, aggressive yield management and prudent financial risk monitoring.</p>
            
            <br>
            <p class="text-primary" style=" text-decoration-color: black; font-style: italic"><b>Safty Information</b></p>
            <p class="text-justify">Vacation is a time to relax in safe surroundings.For emergency aid of any kind, call <b style="color: red">999</b> from any phone... in your hotel, dial <b style="color: red">9-911</b>. some safety tips are:</p>
            
            <br>
            <p class="text-primary" style=" text-decoration-color: blue; font-style: italic">TRANSPORTATION SAFETY TIPS:</p>
            While traveling you should always keep in mind certain transportation safety tips as well:- 
                <ol>
                    <li>
                        Always choose the safest mode of transport for traveling. Do check its previous safety track record.
                    </li>
                    <li>
                        Be mindful of other passengers traveling with you and never hesitate to report any suspicious act to the concerned authorities.
                    </li>
                    <li>
                        Never share cab or taxi with strangers. As carjacking is the biggest threat for a traveler.
                    </li>
                    <li>
                        While traveling by flight, always pay attention to the preflight briefing about closest emergency exit door, fastening your seat belts properly, applying oxygen masks and other important details to be followed in case of emergency.
                    </li>
                    <li>
                        Do not ignore all significant details provided by flight attendant. They are prime source of aid in case of emergency and unexpected turbulence.
                    </li>
                    <li>
                        Wear money belts, hidden neck and waist pouches, hidden pocket wallets and zippered compartments under your clothes to avoid pick pocketing.
                    </li>
                </ol>
            
            <br>
            <p class="text-primary" style=" text-decoration-color: blue; font-style: italic">HOTEL SAFETY TIPS:</p>
                <ol>
                    <li>
                        Choosing the safest accommodation at an unknown place could be a biggest concern for you. Therefore be aware of certain tips while choosing a safest hotel for your self.
                    </li>
                    <li>
                        Never hesitate to choose the best and safest hotel in town.
                    </li>
                    <li>
                        Always carry all the important documents with you while going out of your hotel room.
                    </li>
                    <li>
                        Double check window and door locks before leaving the hotel room.
                    </li>
                    <li>
                        Prefer to keep your important luggage at receptions locker.
                    </li>
                    <li>
                        Get well versed with emergency exits, fire escapes, emergency stairwells to be used in case of emergency.
                    </li>
                    <li>
                        To make most out of your trip these basic general safety tips can prove to be very helpful.
                    </li>
                </ol>
        </div>
        
        
        <footer style="padding-right: 60px; padding-top: 10px; color: darkgray; text-align: right">
            <p style="font-family: cursive">Designed by: Md Zakir Hossain bhuiyan</p>
        </footer>
    </body>
</html>