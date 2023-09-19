<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransReserve</title>
    <link rel="stylesheet" href="{{asset('css/stylee.css')}}">
</head>
<body>
    
    <header>
        <div class="logo">
            <img src="images/logoT.png" width="160px" alt="">
        </div>
        <ul class="menu">
            <li><a href="home">Acceuil</a></li>
            <li><a href="#propos">à propos</a></li>
            <li><a href="#destination">destinations</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
        <a href="{{route('register')}}" class="btn-reservation">S'inscrire</a>
        <a href="{{route('login')}}" class="btn-reservation">Se connecter</a>

        <div class="responsive-menu"></div>
    </header>
    <!-- acceuil section -->
    <section id="home">
      <div style="background-color: #222; border-top: 2px solid #FD5602; width: 500px; height: 200px" class="reserve">
        <h4>Bienvenu sur TransReserve</h4>
       
        <p style="font-size: 30px; text-align: center;">Rester chez vous et</p>
        <p style="font-size: 20px; text-align: center;">Reserver en un clic</p><br>
        <a href="client" style=" display: flex; justify-content: center;"><button class="btn-reservation">Réserver Maintenant</button></a>
        </div>
        <!-- <div class="find_trip">
            <form action="">
                <div>
                    <label>Pays</label>
                    <input type="text" placeholder="Entrez un Pays"> 
                </div>
                <div>
                    <label>Ville</label>
                    <input type="text" placeholder="Entrez une ville">
                </div>
                <div>
                    <label>Région</label>
                    <input type="text" placeholder="Entrez une région">
                </div>
                <input type="submit" value="voir">
            </form>
        </div> -->
    </section>

    <!-- A propos section -->
    <section id="a-propos" class="section2">
    <h1 id="propos">A PROPOS</h1><br><br>
    <div class="container">
    <div class="image">
        <img src="{{asset('images/logoT.png')}}" width="250px" alt="Image">
    </div>
    <div class="text">
    <h1>QUI SOMMES-NOUS ?</h1><br><br>
        <p>TransReserve est une plateforme qui vous aides à effectuer des réservations en un Clic depuis votre position.</p>
        <p>TransReserve vous permet d'économiser en cout et en temps</p>

    </div>
</div>

    </section>

    <!-- section destination -->
    <section id="popular-destination">
        <h1 id="destination">Destinations populaires</h1><br><br>
        <div class="content">
            <!-- box -->
            <div class="box">
                <img src="images/ouaga1.jpg" alt="">
                <div class="content"> 
                    <div>
                        <h4>Ouagadougou</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!-- box -->
            <!-- box -->
            <div class="box">
                <img src="images/banfora.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Banfora</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!-- box -->
            <!-- box -->
            <div class="box">
                <img src="images/kdg.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Koudougou</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!-- box -->
             <!-- box -->
             <div class="box">
                <img src="images/bobo.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Bobo</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!-- box -->
             <!-- box -->
             <div class="box">
                <img src="images/ouaga8.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Ouaga</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!-- box -->
             <!-- box -->
             <div class="box">
                <img src="images/bobo2.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Bobo</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!-- box -->
        </div>
    </section>

    <!--  contact section -->
    <section id="contact">
        <h1 class="title">Contact</h1>
        <form action="">
            <div class="left-right">
                <div class="left">
                    <label>Nom Complet</label>
                    <input type="text">
                    <label>Objet</label>
                    <input type="text">
                    <label>Email</label>
                    <input type="text">
                    <label>Message</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="right">
                    <label>Numéro</label>
                    <input type="text">
                    <label>Date</label>
                    <input type="text">
                    <label>Autres Details</label>
                    <input type="text">
                    <label>Adresse</label>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937595!2d2.292292615509614!3d48.85837007928746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1647531560805!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <button>Envoyer</button>
        </form>
    </section>

    <footer>
        <p> Réalisé par <span>Jean Ulrich Boncoungou</span> | Tous les droits sont réservés.</p>
    </footer>


    <script>
        var toggle_menu = document.querySelector('.responsive-menu');
        var menu = document.querySelector('.menu');
        toggle_menu.onclick= function(){
             toggle_menu.classList.toggle('active');
             menu.classList.toggle('responsive')
        }
    </script>


</body>
</html>