<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Projet Laravel</title>
</head>

<body>


    <main class="container-globale">

        <!-- Menu Hero Banner session -->

        <section class="banner_section" style="background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.5)), url('images/banner1.jpg');">
            <header class="top_bar">
                <a href="#home" class="logo"> <span>Rent</span>Car</a>
                <nav>
                    <ul class="site_map">
                        <li><a href="index.html" class="actif">Accueil</a></li>
                        <li><a href="{{route('about.index')}}" class="">About</a></li>
                        <li><a href="{{route('service.index')}}" class="#service">Services</a></li>
                        <li><a href="#" class="#contactus">Contact</a></li>
                    </ul>
                </nav>
                <div class="bouton">
                    <button class="active">se connecter</button>
                    <button id="btn-inscription">s'inscrire</button>
                </div>
            </header>
            <div class="ecrit">
                <h1>Location de Vehicules au Benin</h1>
                <p class="sous_titre">Conduisez les Vehicules de vos reves avec nous</p>
            </div>
        </section>

        <!-- About section -->

        <section class="about_section">
            <div class="container_about">
                <img src="images/banner_section.jpg" alt="" class="voiture_gauche" width="600px" height="400px">
                <div class="block_droit">
                    <h1>About Us Title Example</h1>
                    <h4>Hero Sub-Title Description</h4>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        <br> <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    <button id="read_more">Read More</button>
                </div>
            </div>
        </section>

        <!-- Sponsor section -->

        <section class="sponsor_section">
            <div class="container_sponsor">
                <div class="block_haut">
                    <h1>Sponsors Example</h1>
                    <h4>Sponsors Description</h4>
                </div>
                <div class="block_bas">
                    <a href="#sponsor"><img src="images/sponsor.jpg" alt="logo des sponsors" class="sponsor_logo" width="200px" height="200px"></a>
                    <a href="#sponsor"><img src="images/sponsor.jpg" alt="logo des sponsors" class="sponsor_logo" width="200px" height="200px"></a>
                    <a href="#sponsor"><img src="images/sponsor.jpg" alt="logo des sponsors" class="sponsor_logo" width="200px" height="200px"></a>
                    <a href="#sponsor"><img src="images/sponsor.jpg" alt="logo des sponsors" class="sponsor_logo" width="200px" height="200px"></a>
                    <a href="#sponsor"><img src="images/sponsor.jpg" alt="logo des sponsors" class="sponsor_logo" width="200px" height="200px"></a>
                    <a href="#sponsor"><img src="images/sponsor.jpg" alt="logo des sponsors" class="sponsor_logo" width="200px" height="200px"></a>
                </div>
            </div>
        </section>

        <!-- footer section -->

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

    <script src="app.js"></script>
</body>

</html>