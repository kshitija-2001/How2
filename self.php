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
            <a href="logout.php" type="button" class="btn btn-warning">
                <h5>Logout</h5>
            </a>

        </nav>
    </div>
    </div>



    <div class="cardCase">
        <h1>Self care</h1>
        <div class="row row-cols- row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://assets.teenvogue.com/photos/5a8229e63c63d553492aab6a/master/w_1600%2Cc_limit/patch.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Teen self care tips</h5>
                        <p class="card-text">Simple steps to start a self care routine</p>
                        <a href="#" target="popup" type="button" class="btn btn-primary" onclick="window.open('https://www.mghclaycenter.org/parenting-concerns/11-self-care-tips-for-teens-and-young-adults/','popup','width=900,height=600'); return false;">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.healthyplace.com/sites/default/files/uploads/2015/09/self-care-is-important.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Why self care is important</h5>
                        <p class="card-text">Avoiding burnouts to attaining mental peace, here's why self care is important</p>
                        <a href="#" target="popup" type="button" class="btn btn-primary" onclick="window.open('https://www.snhu.edu/about-us/newsroom/2019/04/what-is-self-care','popup','width=900,height=600'); return false;">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.verywellmind.com/thmb/L3po_L2AlK9IKvLlEeFfLT8naD4=/1100x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/self-care-strategies-overall-stress-reduction-3144729-fde3507ef54d40eb9a45b15d57510bbf.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Celebrities sharing their self care experience</h5>
                        <p class="card-text">Draw inspiration from your favourite stars</p>
                        <a href="#" target="popup" type="button" class="btn btn-primary" onclick="window.open('https://www.slice.ca/21-celebrities-share-their-self-care-and-mental-wellness-tips/','popup','width=900,height=600'); return false;">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>