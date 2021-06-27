<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
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
    <link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet">
</head>

<body>
        <div class="wrapper">
            <nav> <input type="checkbox" id="show-search"> <input type="checkbox" id="show-menu"> <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
                <div class="content">
                    
                    <div class="logo"><a href="home.php">HOW2</a></div>
                    <ul class="links">
                    <?php 
                    
                    echo'
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

                    </ul>';?>
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
<h1>Explore</h1>
    <div class="row row-cols- row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="https://lequid.es/blog/wp-content/uploads/2018/05/WHAT-IS-THE-CORPORATE-WEBSITE.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">How to create your First Website</h5>
                    <p class="card-text">Learn how to design and promote your own website.</p>
                            <a href="https://www.websitebuilderexpert.com/building-websites/" 
                                target="popup" 
                                type="button"
                                class="btn btn-primary"
                                onclick="window.open('https://www.websitebuilderexpert.com/building-websites/','popup','width=900,height=600'); return false;">
                                    Read More
                            </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://www.talk-business.co.uk/wp-content/uploads/2019/08/shutterstock_597751172.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">How to Dress Professionally</h5>
                    <p class="card-text">Learn how to dress in a proffesional way</p>
                    <a href="https://www.glassdoor.com/blog/guide/how-to-dress-professional/" 
                                target="popup" 
                                type="button"
                                class="btn btn-primary"
                                onclick="window.open('https://www.glassdoor.com/blog/guide/how-to-dress-professional/','popup','width=900,height=600'); return false;">
                                    Read More
                            </a>   
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/article_thumbnails/slideshows/first_aid_tips_slideshow/1800x1200_first_aid_tips_slideshow.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> How to First-Aid!!!</h5>
                    <p class="card-text">Learn how to handle some life-threating encounter with some basic First Aid </p>
                    <a href="https://first-aid-product.com/free-first-aid-guide.html" 
                                target="popup" 
                                type="button"
                                class="btn btn-primary"
                                onclick="window.open('https://first-aid-product.com/free-first-aid-guide.html','popup','width=900,height=600'); return false;">
                                    Read More
                            </a>
                  </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://previews.123rf.com/images/wirojsid/wirojsid1908/wirojsid190800111/128569178-senior-elderly-man-reading-book-drinking-mug-of-coffee-in-garden.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">How to care for yourself</h5>
                    <p class="card-text">Learn how to take a better care for Mind and Soul through the art of self care</p>
                    <a href="https://mhanational.org/taking-good-care-yourself" 
                                target="popup" 
                                type="button"
                                class="btn btn-primary"
                                onclick="window.open('https://mhanational.org/taking-good-care-yourself','popup','width=900,height=600'); return false;">
                                    Read More
                            </a>
                  </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://www.lawnstarter.com/blog/wp-content/uploads/2020/10/raised-garden-beds.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">How to plant your own garden </h5>
                    <p class="card-text">Learn how to create and manage your garden</p>
                    <a href="https://www.almanac.com/vegetable-gardening-for-beginners" 
                                target="popup" 
                                type="button"
                                class="btn btn-primary"
                                onclick="window.open('https://www.almanac.com/vegetable-gardening-for-beginners','popup','width=900,height=600'); return false;">
                                    Read More
                            </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://akm-img-a-in.tosshub.com/indiatoday/sunsetyoga-2_647_062115121022.jpg?Q7x3aPFYhLV6E2CgD7oXmSdjoh5wnAiq&size=1200:675" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">How to Do Fitness Yoga</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="https://www.yogajournal.com/poses/yoga-by-benefit/fitness/" 
                                target="popup" 
                                type="button"
                                class="btn btn-primary"
                                onclick="window.open('https://www.yogajournal.com/poses/yoga-by-benefit/fitness/','popup','width=900,height=600'); return false;">
                                    Read More
                            </a>
                  </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>