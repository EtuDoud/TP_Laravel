<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <main>
        <!-- en tete -->

        <section class="banner">
            <header class="top_bar">
                <a href="#home" class="logo"> <span>Rent</span>Car</a>
                <nav>
                    <ul class="site_map">
                        <li><a href="index.html" class="#home actif">Accueil</a></li>
                        <li><a href="about.html" class="#aboutus">About</a></li>
                        <li><a href="service.html" class="#service">Services</a></li>
                        <li><a href="" class="#contactus">Contact</a></li>
                    </ul>
                </nav>
                <div class="bouton">
                    <button class="active">se connecter</button>
                    <button>s'inscrire</button>
                </div>
            </header>
        </section>


        <!-- a propos de nous  -->

        <section class="about">

            <div class="about_ecrit">
                <h1>Nos differents games de vehicules</h1>
                <h4>Prenez du plaisir avec nous.</h4>
            </div>

            <container class="container_about">
                <div class="partie1">
                    <img src="images/banner_section.jpg" alt="" width="450px" height="350px" class="image_gauche">
                    <div class="block_droit">
                        <h1>Vehicules de course</h1>
                        <p class="paragraph">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            <br> <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
                <div class="partie1">
                    <div class="block_droit">
                        <h1>Nos offres speciales</h1>
                        <p class="paragraph">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            <br> <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <img src="images/banner_section.jpg" alt="" width="450px" height="350px" class="image_droit">
                </div>

                <button class="plus">Voir plus</button>
            </container>

        </section>


        <!-- footer -->
        <footer>
            <div class="container_footer">
                <div class="contact">
                    <h1>Contact Us</h1>
                    <h4>Envoyer nous de message</h4>
                    <form>
                        <input type="text" placeholder="FirstName">
                        <input type="email" placeholder="Your email">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Your message"></textarea>
                        <button type="submit" class="btn">Submit</button>
                    </form>
                </div>
                <div class="sitemap">
                    <h1>Sitemap</h1>
                    <h4>Toutes nos pages</h4>

                    <div class="lien">
                        <a href="#accueil">-Accueil</a>
                        <a href="#accueil">-About</a>
                        <a href="#accueil">-Services</a>
                        <a href="#accueil">-Contacts</a>
                    </div>
                </div>

                <div class="social">
                    <a href="#home" class="logofooter"> <span>Rent</span>Car</a>
                    <div class="appel">
                        <img src="images/phonecall.svg" alt="" class="appel_icon" width="30px" height="30px"> (00229) 96173296
                    </div>
                    <div class="email">
                        <img src="images/envellope.svg" alt="" class="envellop" width="30px" height="30px"> emailexample@.com
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright@2022RentCar</p>
            </div>
        </footer>

    </main>
</body>

</html>