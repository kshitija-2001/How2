<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
        <div class="wrapper">
        <nav> <input type="checkbox" id="show-search"> <input type="checkbox" id="show-menu"> <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
                <div class="content">
                    <div class="logo"><a href="home.php">HOW2</a></div>
                    <ul class="links">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="recent.php">Recent</a></li>
                        <li><a href="submit.php">Submit Article</a></li>
                        <li> <a href="categories.php" class="desktop-link">Categories</a> <input type="checkbox" id="show-services"> <label for="show-services">Services</label>
                            <ul>
                                <li><a href="computer.php"><i class="fa fa-fw fa-laptop-code"></i>Computers and electronics</a></li>
                                <li><a href="maintain.php"><i class="fa fa-fw fa-wrench"></i>Maintainance assistance</a></li>
                                <li><a href="cooking.php"><i class="fa fa-fw fa-pizza-slice"></i>Cooking</a></li>
                                <li><a href="first.php"><i class="fa fa-fw fa-first-aid"></i>First aid</a></li>
                                <li> <a href="#" angle-right class="desktop-link">More Items</a> <input type="checkbox" id="show-items"> <label for="show-items">More Items</label>
                                    <ul>
                                        <li><a href="automob.php"><i class="fa fa-fw fa-car-alt"></i>Automobiles and driving</a></li>
                                        <li><a href="mental.php"><i class="fa fa-fw fa-heart"></i>Mental health</a></li>
                                        <li><a href="engineer.php"><i class="fa fa-fw fa-graduation-cap"></i>Education</a></li>
                                        <li><a href="gardening.php"><i class="fa fa-fw fa-seedling"></i>Gardening</a></li>
                                        <li><a href="fitness.php"><i class="fa fa-fw fa-dumbbell"></i>Fitness</a></li>
                                        <li><a href="self.php"><i class="fa fa-fw fa-hand-holding-heart"></i>Self care</a></li>
                                        <li><a href="art.php"><i class="fa fa-fw fa-theater-masks"></i>Art and Entertainment</a></li>
                                        <li><a href="hobbies.php"><i class="fa fa-fw fa-palette"></i>Hobbies and Craft</a></li>
                                    </ul>
                                </li>
                            </ul>
</li>
                    </ul>
                </div> <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
                <form action="" class="search-box"> <input type="text" placeholder="Type Something to Search..." required> <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button> </form>
                <a href="logout.php" type="button" class="btn btn-warning"><h5>Logout</h5></a>

            </nav>
            </div>
        </div>


    <!-- <div class="dummy-text">
        <h2>Search for anything</h2>
        <h2>We have you covered</h2>
    </div> -->

<div class="cardCase">
    <div class="row row-cols- row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="https://img.freepik.com/free-vector/software-application-testing-isometric-concept-debugging-development-process_106788-1775.jpg?size=626&ext=jpg" class="card-img-top" alt="computer">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-fw fa-laptop-code"></i>Computers and electronics</h5>
                    <p class="card-text">Not in touch with a tech geek? Hacks to make yourself aquanited with technology</p>
                    <a href="computer.php" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://img.freepik.com/free-vector/maintenance-concept-illustration_114360-391.jpg?size=626&ext=jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-fw fa-wrench"></i>Maintainence assistance</h5>
                    <p class="card-text">Fix your fan, tv, light or even your refrigerator with easy steps</p>
                    <a href="maintain.php" class="btn btn-primary">View More</a>
                 </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
            <img src="images/firstaid.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-fw fa-first-aid"></i>First aid</h5>
                    <p class="card-text">Helpful in emergencies involving injuries</p>
                    <a href="first.php" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="images/cook.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-fw fa-pizza-slice"></i>Cooking</h5>
                    <p class="card-text">Avoid lengthy videos and follow simple steps to be the best chef you know</p>
                    <a href="cooking.php" class="btn btn-primary">View More</a>
                 </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://image.freepik.com/free-vector/electric-automobiles-are-charging-garage-power-station-vector-illustration-flat-design_1150-43131.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-fw fa-car-alt"></i>Automobiles and driving</h5>
                    <p class="card-text">Be the mechanic your car deserves</p>
                    <a href="automob.php" class="btn btn-primary">View More</a>
                 </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="images/mental.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-fw fa-heart"></i>Mental health</h5>
                    <p class="card-text">The superpower which distinguishes humans from other creatures is the ability to feel</p>
                    <a href="mental.php" class="btn btn-primary">View More</a>
                 </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://img.freepik.com/free-vector/happy-women-learning-language-online-isolated-flat-vector-illustration-cartoon-female-characters-taking-individual-lessons-through-messenger-education-digital-technology-concept_74855-10088.jpg?size=626&ext=jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-fw fa-graduation-cap"></i>Education</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="engineer.php" class="btn btn-primary">View More</a>
                 </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://media.istockphoto.com/vectors/people-gardening-woman-planting-gardens-flowers-agriculture-gardener-vector-id1137974374?k=6&m=1137974374&s=612x612&w=0&h=4zHkzmDjgz0_tP84ZRHUBZfXzOtNRtOVFt8Gim2bC9k=" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-fw fa-seedling"></i>Gardening</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="gardening.php" class="btn btn-primary">View More</a>
                 </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://media.istockphoto.com/vectors/home-sports-vector-isometric-people-collection-vector-id1225800306?k=6&m=1225800306&s=612x612&w=0&h=ONdvDH2hL7f-gLBQJMz99VGEW4j8VXKkOLN0vanSQR0=" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-fw fa-dumbbell"></i>Fitness</h5>
                    <p class="card-text">How to plant your own garden</p>
                    <a href="fitness.php" class="btn btn-primary">View More</a>
                 </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="images/self.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-fw fa-hand-holding-heart"></i>Self care</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="self.php" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://www.forbesindia.com/media/images/2019/Oct/img_122801_media_and_entertainment_sm.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-fw fa-theater-masks"></i>Art and Entertainment</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="art.php" class="btn btn-primary">View More</a>
                  </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://img.freepik.com/free-vector/people-different-types-hobbies-coworking-center_82574-7008.jpg?size=626&ext=jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-fw fa-palette"></i>Hobbies and Craft</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="hobbies.php" class="btn btn-primary">View More</a>
                 </div>
            </div>
        </div>
        
    </div>
</div>
</body>

</html>