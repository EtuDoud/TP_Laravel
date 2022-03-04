<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/creation.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Projet Laravel</title>
</head>

<body>


    <main class="container-globale">

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

        //section creation de voiture

        <section class="creation">

            <div class="creation_container">
                <form action="{{route('voiture.store')}}" method="POST" enctype = "multipart/form-data">
                    @csrf 
                    <input type="text" placeholder="Entrez la marque du vehicule" name="marque">
                    <input type="number" placeholder="Entrez le prix du vehicule" name="PrixParJour">
                    <input type="file" placeholder="importez l'image du vehicule" name="image">

                    <button type="submit" class="boutton">creer</button>
                </form>
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

    <!-- <script src="app.js"></script> -->
</body>
</html>