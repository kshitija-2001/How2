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

    <body>
        <div class="wrapper">
            <nav> <input type="checkbox" id="show-search"> <input type="checkbox" id="show-menu"> <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
                <div class="content">
                    <div class="logo"><a href="#">HOW2</a></div>
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
        <h1>Cooking</h1>
            <div class="row row-cols- row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="https://thumbs.dreamstime.com/b/colourful-various-herbs-spices-cooking-dark-background-herbs-spices-cooking-dark-background-113655482.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Start Cooking at home</h5>
                            <p class="card-text">Essential skills include making a meal for yourself. Learn how to!</p>
                            <a href="#" target="popup" type="button" class="btn btn-primary" onclick="window.open('https://foodal.com/knowledge/paleo/can-start-cooking-home-simple-steps/','popup','width=900,height=600'); return false;">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://www.tarladalal.com/tips/cooking-tips_big.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cooking tips for all</h5>
                            <p class="card-text">Learn how to avoid pitfalls (or panfalls?) from a culinary expert</p>
                            <a href="#" target="popup" type="button" class="btn btn-primary" onclick="window.open('https://tasty.co/article/jesseszewczyk/culinary-school-tips-and-tricks','popup','width=900,height=600'); return false;">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://thumbs.dreamstime.com/b/cooking-oil-26738287.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Choosing the right cooking oil</h5>
                            <p class="card-text">Choosing a healthy cooking oil from a wide range of options is often overwhelming</p>
                            <a href="#" target="popup" type="button" class="btn btn-primary" onclick="window.open('https://health.clevelandclinic.org/how-to-choose-and-use-healthy-cooking-oils/','popup','width=900,height=600'); return false;">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>