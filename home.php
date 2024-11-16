<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Xbox Home</title>
</head>
<body>
        <header id="header">
       <!-- <p><a href="home.php">Xbox </a> </p>-->
        <a href="#" class="logo"><img src="home_php/Logo.jpeg" alt="Xbox Logo"></a>
        <nav>
            <ul id="navbar">
                <li><a class="active" href="#">Home</a></li>
                <li><a href="games.php">Games</a></li>
                <li><a href="consoles.php">Consoles</a></li>
                <li><a href="#">Accessories</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </nav>
    </header>
    <section id="hero">
   
   <h4>Welcome to Xbox</h4>
   <h1>Power Your Dreams</h1>
   <button>Shop Now</button>
</section>     

    <!-- Hero Section -->

    <!-- Product 1 Section -->
    <section class="products">
        <h2>Featured Products</h2>
        <div class="product-list">
            <div class="product">
                <img src="home_php/console1.png" alt="Xbox Console">
                <h3>Xbox Series X</h3>
                <p>$499.99</p>
            </div>
            <div class="product">
                <img src="home_php/DragonBallSparking.jpeg" alt="Xbox Game">
                <h3>Dragon Ball Sparking</h3>
                <p>$69.99</p>
            </div>
            <div class="product">
                <img src="home_php/controller.jpeg" alt="Xbox Controller">
                <h3>Xbox Controller</h3>
                <p>$59.99</p>
            </div>
        </div>
    </section>

 <!-- GamePass Section -->
    <!-- Hero 2 -->
    <section id="hero2">
            <h1>Game Pass Ultimate</h1>
            <p>Access hundreds of games on console, PC, and mobile.</p>
            <button>Join Now</button>
        
        </section>
    
        <section class="icons">
            <h2>Featured Categories</h2>
            <div class="icons-list">
                <div class="icons">
                    <img src="home_php/gamepa.jpeg" alt="Game pass icon">
                    <h3>Game pass</h3>
                    <p></p>
                </div>
                <div class="icons">
                    <img src="home_php/sonic.jpeg" alt="Games icon">
                    <h3>Games</h3>
                    <p></p>
                </div>
                <div class="icons">
                    <img src="home_php/con.jpeg" alt="Consoles">
                    <h3>Consoles</h3>
                    <p></p>
                </div>
                <div class="icons">
                    <img src="home_php/ac.jpeg" alt="Accessories">
                    <h3>Accessories</h3>
                    <p></p>
                </div>
            </div>
        </section>


    <!-- Footer -->
    <footer>
        <p>© 2024 Xbox E-Commerce. All rights reserved.</p>
    </footer>
</body>
</html>

    </main>
</body>
</html>

        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>

            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>

        </div>
    </div>
 <!-- Hero Section -->
 <section class="slider">
        <div class="slides">
            <div class="slide"><img src="home_php/hero.jpeg" alt="Hero Image 1"></div>
            <div class="slide"><img src="home_php/hero2.jpeg" alt="Hero Image 2"></div>
            <div class="slide"><img src="home_php/hero3.jpeg" alt="Hero Image 3"></div>
        </div>
    </section>

    <!-- Product 1 Section -->
    <section class="products">
        <h2>Featured Products</h2>
        <div class="product-list">
            <div class="product">
                <img src="home_php/console1.png" alt="Xbox Console">
                <h3>Xbox Series X</h3>
                <p>$499.99</p>
            </div>
            <div class="product">
                <img src="DragonBallSparking.jpeg" alt="Xbox Game">
                <h3>Dragon Ball Sparking</h3>
                <p>$69.99</p>
            </div>
            <div class="product">
                <img src="controller.jpeg" alt="Xbox Controller">
                <h3>Xbox Controller</h3>
                <p>$59.99</p>
            </div>
        </div>
    </section>

 <!-- GamePass Section -->



    <!-- Footer -->
    <footer>
        <p>© 2024 Xbox E-Commerce. All rights reserved.</p>
    </footer>
</body>
</html>

    </main>
</body>
</html>