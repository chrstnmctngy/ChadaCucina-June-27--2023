<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./css/home.css">
        <link rel="icon" href="./assets/icons/ChadaCucina.png">
        <title> Chada Cucina </title>
    </head>

    <body>

        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav-logo">
                    <img src="./assets/icons/ChadaCucina.png" alt="ChadaCucina">
                </a>

                <div class="nav-menu" id="nav_menu">
                    <ul class="nav-list grid">

                        <li class="nav-item">
                            <a href="./home.php" class="nav-link"> Home </a>
                        </li>
        
                        <li class="nav-item">
                            <a href="./about.php" class="nav-link"> About </a>
                        </li>
        
                        <li class="nav-item">
                            <a href="./categories.php" class="nav-link"> Categories </a>
                        </li>

                        <li class="nav-item">
                            </button><a href="#order" class="nav-link"><button class="order"> Book Now </button></a> 
                        </li>
                        
                    </ul>

                    <div class="nav-close" id="nav_close">
                        <i class="ri-close-line"></i>
                    </div>

                </div>

                <div class="nav-buttons">

                    <i class="ri-moon-line change theme" id="theme-button"></i>

                    <div class="nav-toggle" id="nav_toggle">
                        <i class="ri-apps-2-line"></i>
                    </div>

                </div>

            </nav>
        </header>

        <main class="main">
           <section class="popular section" id="popular">
            <div class="shadow"></div>
            <span class="section-subtitle"> THE BEST FOOD</span>
            <h2 class="section-title">Popular Dishes</h2>

            <div class="popular-container container grid">
                <a href="./humba.php" class="link">
                    <article class="popular-card">
                      <img src="./assets/images/categories/img-humba.png" alt="popular image" class="popular-img">
                      <h3 class="popular-name">Humba</h3>
                      <span class="popular-description">Made with pork belly that is simmered in a sauce made with soy sauce, vinegar, brown sugar, garlic, and other spices.</span>
                      <span class="popular-price">₱ 150</span>
                      <button class="popular-button">
                        <i class="ri-shopping-bag-line"></i>
                      </button>
                    </article>
                  </a>
                <a href="./chickenadobo.php" class="link">
                <article class="popular-card">
                    <img src="./assets/images/categories/img-adobo.png" alt="popular image" class="popular-img">
                
                    <h3 class="popular-name">Chicken Adobo</h3>
                    <span class="popular-description">a flavorful dish made with meat (usually chicken or pork) marinated in vinegar, soy sauce, and garlic.</span>
                    <span class="popular-price">₱ 150</span>

                    <button class="popular-button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>
                </a>
                <a href="./sisig.php" class="link">
                <article class="popular-card">
                    <img src="./assets/images/categories/img-sisig.png" alt="popular image" class="popular-img">
                
                    <h3 class="popular-name">Crispy Sisig</h3>
                    <span class="popular-description">a sizzling pork dish made with chopped pig's head and liver, seasoned with calamansi and chili peppers.</span>
                    <span class="popular-price">₱ 150</span>

                    <button class="popular-button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>
                </a>
                <a href="./afritada.php" class="link">
                    <article class="popular-card">
                        <img src="./assets/images/categories/img-afritada.png" alt="popular image" class="popular-img">
                    
                        <h3 class="popular-name">Pork Afritada</h3>
                        <span class="popular-description">pork stewed in a tomato-based sauce with vegetables such as potatoes, carrots, and bell peppers.</span>
                        <span class="popular-price">₱ 150</span>
    
                        <button class="popular-button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
    
                    </article>
                    </a>
                <a href="./tinola.php" class="link">
                <article class="popular-card">
                    <img src="./assets/images/categories/img-tinola.png" alt="popular image" class="popular-img">
                
                    <h3 class="popular-name">Chicken Tinola</h3>
                    <span class="popular-description">a beef stew made with tomato sauce, soy sauce, and various spices.</span>
                    <span class="popular-price">₱ 150</span>

                    <button class="popular-button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>

                </article>
                </a>
                <a href="./bistek.php" class="link">
                <article class="popular-card">
                    <img src="./assets/images/categories/img-bistek.png" alt="popular image" class="popular-img">
                
                    <h3 class="popular-name">Bistek</h3>
                    <span class="popular-description">a beef dish marinated in soy sauce and calamansi, topped with caramelized onions.</span>
                    <span class="popular-price">₱ 150</span>

                    <button class="popular-button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>

                </article>
                </a>
            </section>
            </div>

            <section class="newsletter-section">
                <div class="newsletter-container">
                    <div class="picture"></div>
                    <div class="newsletter">
                        <h1 class="newsletter-title"> Don't miss out the latest offers!</h1>
                        <p> Subscribe to our newsletter to receive our latest updates.</p>
                        <form action="" class="newsletter-form">
                            <input type="text" class="emailInput" placeholder="E-Mail">
                            <input type="submit" class="newsletter-btn" value="Join Us">

                        </form>
                    </div>
                </div>
            </section>

        </main>

        <footer class="footer">
            <div class="footer-container container grid">
                <div>
                    <a href="#" class="footer-logo">
                        <img src="./assets/icons/ChadaCucina.png" alt="logo image">
                        ChadaCucina
                    </a>

                    <p class="footer-description">
                        Chada Cucina is a food blog and shopping <br/>
                        site that specializes in Filipino cuisine.  <br/>
                        The site was founded in 2022 by two student <br/>
                        Filipino food enthusiasts who wanted to <br/>
                        share their love for the rich and diverse <br/>
                        flavors of Filipino cooking with the world. <br/>
                    </p>
                </div>

                <div class="footer-content">
                    <div>
                        <h3 class="footer-title"> Main Menu </h3>
                            <ul class="footer-links">

                                <li>
                                    <a href="#" class="footer-link"> Home </a>
                                </li>

                                <li>
                                    <a href="#" class="footer-link"> About </a>
                                </li>

                                <li>
                                    <a href="#" class="footer-link"> Categories </a>
                                </li>

                                <li>
                                    <a href="#" class="footer-link"> Book Now </a>
                                </li>

                                
                            </ul>
                    </div>

                    <div>
                        <h3 class="footer-title"> Information </h3>
                            <ul class="footer-links">

                                <li>
                                    <a href="#" class="footer-link"> Contact </a>
                                </li>

                                <li>
                                    <a href="#" class="footer-link"> Orders & Returns </a>
                                </li>

                                <li>
                                    <a href="#" class="footer-link"> Videos </a>
                                </li>

                                <li>
                                    <a href="#" class="footer-link"> Reservation </a>
                                </li>
                            </ul>
                    </div>

                    <div>
                        <h3 class="footer-title"> Address </h3>
                            <ul class="footer-links">

                                <li class="footer-information">
                                    Cagayan de Oro City, Philippines 
                                </li>

                                <li class="footer-information">
                                    chadacucina@gmail.com <br/>
                                    +63 9123 456 7890
                                </li>

                                <li>
                                    <a href="www.facebook.com" target="blank" class="footer-social-link">
                                        <i class="ri-facebook-circle-fill"></i>
                                    </a>
                                    <a href="www.instagram.com" target="blank" class="footer-social-link">
                                        <i class="ri-instagram-fill"></i>
                                    </a>
                                    <a href="www.twitter.com" target="blank" class="footer-social-link">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
            
            <div class="footer-info container">
                <div class="footer-card">
                    <img src="./assets/icons/footer-card-1.png" alt="footer image">
                    <img src="./assets/icons/footer-card-2.png" alt="footer image">
                    <img src="./assets/icons/footer-card-3.png" alt="footer image">
                    <img src="./assets/icons/footer-card-4.png" alt="footer image">
                </div>

                <span class="footer-copy">
                    &#169; Copyright Brobro Company. All rights reserved.
                </span>
            </div>
        </footer>
       
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line"></i>
        </a>
        <script src="./js/scrollreveal.min.js"></script>
        <script src="./js/main.js"></script>
    </body>

</html>