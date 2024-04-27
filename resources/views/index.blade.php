<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Jodhoor</title>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="{{asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet">
    <style>
         html {
    height: 100%;
    margin: 0;
    font-family: "Univers 85 Extra Black Oblique", sans-serif;

}

body {
    background-image: url("{{asset('assets/images/home/home.webp')}}");
    background-size: cover;

    height: 100%; /* Set body height to 100% */
    margin: 0; /* Remove default margin */
}



        .logo {
        width: 600px;
        height: 600px;
        background-color: #201938df;
        border-radius: 50%;
        text-align: center;
        line-height: 150px; /* This centers the text vertically */
        color: rgba(51, 51, 51, 0.3); /* Adjust transparency */
        font-size: 80px;
        margin: 65px auto ;

    }

        .brand-plus {
            display: flex;
            background-color: #eef7f700;
            /* padding: 20px; */
            color: rgba(51, 51, 51, 0.3); /* Adjust transparency */
            text-align: center;
            height: 720px;
            width: 50%;
        }
        .full-brand{
            width: 100%;
        }
        .right-brand{
            width: 50%;
            margin-left: auto;
        }

        .brand-plus-plus {
            margin-top: 1px;
            display: none;
            background-color: #fcfcfc;
            padding: 0px;
            color: rgba(51, 51, 51, 0.3);
            height: 720px;
            width: 100%;
            border-radius:50px;
        }

        /* Add some spacing between the h1 elements */
        .brand-plus-plus h1 {
            margin-top: 30px;
            font-size: 100px; /* Increase the font size */
            font-weight: 900;
            color: #201938;
            margin-bottom: 2px;
        }
        .brand-plus-plus button.add-button {


            background-color: rgba(51, 51, 51, 0); /* Adjust transparency */
            color: #201938; /* Adjust text color and transparency */
            border: none;
            font-size: 70px;
            cursor: pointer;

        }

        .brand-plus h1 {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    font-size: 150px;
    font-weight: 900;
    background: rgba(255, 255, 255, 0.8);
    height: 100%;
    width: 100%;
    color: black;
    mix-blend-mode: screen;
    border-radius: 50px 50px 50px 0px;
    padding: 100px; /* Adjust the padding value according to your preference */
}

        .right-brand h1{
            border-radius:50px 0px 0px 50px;
        }
        .bpp2 h1,
        .bpp3 h1,
        .bpp4 h1,
        .bpp5 h1,
        .bpp6 h1 {
            font-size: 70px;
        }


        .brand-plus button.add-button {
            background-color: rgba(51, 51, 51, 0); /* Adjust transparency */
            color: #302743;
            border: none;

            cursor: pointer;
            font-size: 150px;


        }


        .detail-page {

background-color: #fff;
color: #000;


}

p {
    font-size: larger;
}

.detail-page p {
color: #302743;
}
ul {
list-style-type: none;

margin: 0;
}

ul li {
margin-top: 10px;
font-size: 25px;
color: #302743; /* Example text color */
font-weight: bold;
}
.image-button {
width: 70px; /* Set the desired width */
height: auto; /* Maintain the aspect ratio */
border: none; /* Remove default button styles */
padding: 0; /* Remove default padding */
background: none; /* Remove background */
cursor: pointer;
}
.large-image-button{
width: 100px;
}

.image-button img {
width: 100%; /* Make the image fill the button */
height: auto; /* Maintain the aspect ratio */

}

.contact {
margin-top: 30px;
height: 720px;

}

.contact h2 {
color: white;
font-size: 24px;
margin-bottom: 40px;
text-align: center;
}

.contact .form-group {
margin-bottom: 20px;
}

.contact label {
display: flex;
font-size: 14px;
margin-bottom: 5px;
}

.contact input[type="text"],
.contact input[type="email"],
.contact textarea {
border: #201938df;
border-radius: 50px;
font-size: 30px;
height: 60px;
width: 100%;
background-color: #201938df;
color: white;
}
.contact textarea:focus{
    background-color: #201938df;
    color: white;
}
.contact textarea {
height: 300px;

}

.contact button[type="submit"] {
background-color: #201938df;
border: none;
border-radius: 50px;
color: #fff;
cursor: pointer;
font-size: 16px;

width: 100%;
}

.contact button[type="submit"]:hover {
background-color: #201938;
}
.contact iframe {
        width: 100%; /* Make the map iframe take up the full width on smaller screens */
        height: 100%; /* Adjust the height as needed for smaller screens */
    }


    .custom-navbar {
  position: fixed; /* Set navbar to fixed position */
    top: 0;
    width: 100%;
    background-color: transparent;
    z-index: 1000;
    box-shadow: transparent;



}
.hamburger-icon {
  background-color: #201938df;
  border: none;
  float: right;
  cursor: pointer;
  color: white; /* Set the color of the hamburger icon */
  font-size: 50px;
  border-radius: 5px;
  width:70px;
}

.sidebar {
  position: fixed;
  top: 0;
  right: -300px;
  width: 300px;
  height: 100%;
  background-color: #fff;
  box-shadow: -2px 0px 4px rgba(0, 0, 0, 0.1);
  transition: right 0.3s ease-in-out;
  z-index: 1000;
}


/* Add styles for sidebar header */
.sidebar-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  background-color: #f8f9fa;
  border-bottom: 1px solid #ccc;
}

.logomini img {
  max-width: 60px;
  height: auto;
}

.close-button .close-icon {
  background: none;
  border: none;
  font-size: 50px;
  color: #000000;
  cursor: pointer;
  height: auto;
  max-width: 60px;
}

.close-button .close-icon:hover {
  color: #f06292;
}


/* Add styles for sidebar content */
.sidebar-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
}

.navbar-nav {
  list-style: none;
  padding: 0;
  margin: 0;
  text-align: center;
}

.nav-item {
  margin-bottom: 10px;
}

.nav-link {
  text-decoration: none;
  color: #333;
  font-weight: bold;
  transition: color 0.3s;
}

.nav-link:hover {
  color: #f06292;
}


/* Add styles for sidebar footer */
.sidebar-footer {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #f8f9fa;
  padding: 10px;
  border-top: 1px solid #ccc;
}

.social-icon {
  display: inline-block;
  margin: 0 10px;
  font-size: 24px;
}

/* Override the default icon color */
.social-icon i {
  color: #ED6C4E;
}

.social-icon i:hover {
  color: white;
}
@media screen and (max-width: 360px),
 screen and (min-width: 361px) and (max-width: 380px),
 screen and (min-width: 381px) and (max-width: 768px) {
    .logo {
        width: 250px;
        height: 250px;
    }

    .brand-plus {
        width: 80%;
        height: auto;
        margin-top: 10px;
    }
    .full-brand{
            width: 100%;
        }

    .brand-plus h1 {
        font-size: 35px;

    }

    .brand-plus button.add-button {

        font-size: 70px;
    }

    .ul-full {
        margin-top: 20px;
    }
    .ul{
        margin-top: 20px;
    }

    /* Adjust the height of .brand-plus-plus to fit content */
    .brand-plus-plus {
        height: auto;
    }

    /* Adjust the font size and margin for better visibility on smaller screens */
    .brand-plus-plus h1 {
        font-size: 25px;
        margin-top: 15px;
    }

    /* Adjust the font size and margin for better visibility on smaller screens */
    .ul-full li {
        font-size: 18px;
        margin-top: 10px;
    }
    .ul li{
        font-size: 18px;
        margin-top: 10px;

    }


    /* Add more specific styling for the image button */
    .image-button {
        width: 70px;

    }
    .large-image-button {
        width: 70px; /* Changed size to 100px */
    }



    /* Adjust the margin-top for better spacing on smaller screens */
    .brand-plus-plus .col {
        margin-top: 10px;
    }
    .contact{
        margin-top: 100px;
    }


    .contact h2 {
        font-size: 24px; /* Adjust the font size for smaller screens */
    }

    .contact form {
        margin-bottom: 20px; /* Add some spacing between the form and the map on smaller screens */
    }

    .contact .row {
        flex-direction: column; /* Stack columns on top of each other for smaller screens */
    }

    .contact .col-md-6 {
        width: 100%; /* Make each column take up the full width on smaller screens */
    }

    .contact iframe {
        width: 100%; /* Make the map iframe take up the full width on smaller screens */
        height: 300px; /* Adjust the height as needed for smaller screens */
    }



}
@media screen and (min-width: 381px) and (max-width: 768px) {


}
@media screen and (max-width: 360px) {

}

@media screen and (min-width: 361px) and (max-width: 380px) {
    .brand-plus h1 {
        font-size: 35px;

    }

    .full-brand h1 {
        font-size: 27px;

    }
    .brand-plus-plus h1 {
        font-size: 20px;
    }
    .add-button {

font-size: 50px;
}
.hamburger {
    font-size: auto; /* Inherit font size from parent (button) */
}
.hamburger-icon {
        width: auto; /* Reset width */
        font-size: 25px; /* Reset font size */
    }
}

    </style>
</head>
<body>
<nav class="custom-navbar">

                <div class="hamburger">
                    <button class="hamburger-icon" id="hamburgerBtn" class="hamburger-icon ">&#9776;</button>
                </div>
            </nav>
            <div class="sidebar" id="sidebar">
                <div class="sidebar-header">
                    <div class="logomini">
                        <a href="#contact">
                            <img src="{{asset('assets/logos/logo-orange.webp')}}" alt="Jodhoor Logo">
                        </a>
                    </div>
                    <div class="close-button">
                        <button class="close-icon" id="closeSidebarBtn">
                            <i class="bi bi-x"></i>
                        </button>
                    </div>
                </div>
                <div class="sidebar-content">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('project1') }}">{{ __('Projects') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('comingsoon') }}">{{ __('Achievements') }}</a>
                        </li>
                        @include('partials/language_switcher')

                    </ul>
                </div>

                <div class="sidebar-footer">
                   <a href="https://www.linkedin.com/company/jodhoor/" target="_blank" class="social-icon"><i class="bi bi-linkedin" style="color:#201938;"></i></a>
                   <a href="https://twitter.com/jodhoor" target="_blank" class="social-icon"><svg style="color: #201938;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                  </svg></a>
                   <a href="https://www.instagram.com/jodhoorsolutions/" target="_blank" class="social-icon"><i class="bi bi-instagram" style="color: #201938;"></i></a>
                </div>
            </div>
    {{-- <img src="{{asset('assets/images/home/home.webp')}}" alt="" style="height: 100%;width:100%;top:0;left:0;position: relative;object-fit:cover;"> --}}

        <div class="logo">
            <a href="#contact" >
            <img src="{{asset('assets/logos/Jodhoor White.png')}}" alt="Jodhoor Logo" style="height:105%;">
        </a>
        </div>

            <div class="brand-plus bp1">
            <h1>{{ __('BRAND') }} <button class="add-button" onclick="toggleVisibility('bp1', 'bpp1')">+</button></h1>

        </div>
        <div class="brand-plus-plus bpp1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-auto">
                            <h1>{{ __('BRAND CREATION') }}<button class="add-button plus-button" data-section="brandCreationPlus" onclick="showDetail('brandCreation',this)">+</button>
                                <button class="add-button minus-button" data-section="brandCreationMinus" onclick="hideDetail(this, 'brandCreation')" style="display: none;">-</button></h1>
                            <div id="brandCreation" class="detail-page" hidden>

                    <p>{{ __('TH1') }} <br>
                        {{ __('TH2') }}<br>
                        {{ __('TH3') }}<br>
                        {{ __('TH4') }}<br>
                        {{ __('TH5') }}<br>
                        {{ __('TH6') }}<br>
                        {{ __('TH7') }}
                        <button class="image-button" >
                            <a href="#contact">
                                <img src="{{asset('assets/images/contact-orange.webp')}}" alt="Image Alt Text">
                            </a>
                        </button>
                    </p>
                        <ul class="ul" id="brandCreationList"></ul>

                  </div>
                            <h1>{{ __('TH16') }}<button class="add-button plus-button" data-section="brandStrategyPlus" onclick="showDetail('brandStrategy',this)">+</button>
                                <button class="add-button minus-button" data-section="brandStrategyMinus" onclick="hideDetail(this, 'brandStrategy')" style="display: none;">-</button></h1>
                            <div id="brandStrategy" class="detail-page" hidden>
                                <p>
                                    {{ __('TH17') }}<br>
                                    {{ __('TH18') }}<br>
                                    {{ __('TH19') }}<br>
                                    {{ __('TH20') }}<br>
                                    {{ __('TH21') }}
                                    <button class="image-button">
                                        <a href="#contact">
                                            <img src="{{asset('assets/images/contact-orange.webp')}}" alt="Image Alt Text">
                                        </a>
                                    </button>
                                </p>

                                <ul class="ul" id="brandStrategyList"></ul>
                              </div>
                            <h1>{{ __('TH29') }} <button class="add-button plus-button" data-section="brandActivationPlus" onclick="showDetail('brandActivation',this)">+</button>
                                <button class="add-button minus-button" data-section="brandActivationMinus" onclick="hideDetail(this, 'brandActivation')" style="display: none;">-</button></h1>
                            <div id="brandActivation" class="detail-page" hidden>
                                <p>
                                    {{ __('TH30') }}  <br>
                                    {{ __('TH31') }}  <br>
                                    {{ __('TH32') }}  <br>
                                    {{ __('TH33') }}  <br>
                                    {{ __('TH34') }}  <br>
                                    <button class="image-button">
                                        <a href="#contact">
                                            <img src="{{asset('assets/images/contact-orange.webp')}}" alt="Image Alt Text">
                                        </a>
                                    </button>
                                </p>

                                <ul class="ul" id="brandActivationList"></ul>
                              </div>
                            <h1>{{ __('TH42') }}<button class="add-button plus-button" data-section="brandExperiencePlus" onclick="showDetail('brandExperience',this)">+</button>
                            <button class="add-button minus-button" data-section="brandExperienceMinus" onclick="hideDetail(this, 'brandExperience')" style="display: none;">-</button></h1>
                            <div id="brandExperience" class="detail-page" hidden>
                                <p>
                                    {{ __('TH43') }}  <br>
                                    {{ __('TH44') }} <br>
                                    {{ __('TH45') }} <br>
                                    {{ __('TH46') }} <br>
                                    {{ __('TH47') }} <br>
                                    {{ __('TH48') }}
                                    <button class="image-button">
                                        <a href="#contact">
                                            <img src="{{asset('assets/images/contact-orange.webp')}}" alt="Image Alt Text">
                                        </a>
                                    </button>
                                </p>

                                <ul class="ul" id="brandExperienceList"></ul>
                              </div>
                        </div>
                        <div class="col">
                            <ul id="otherList"></ul>
                        </div>
                    </div>
                </div>

        </div>
    <div class="brand-plus full-brand bp2">
        <h1>CONCEPT & INNOVATION<button class="add-button" onclick="toggleVisibility('bp2', 'bpp2')">+</button></h1>

    </div>
    <div class="brand-plus-plus bpp2">
        <div class="container">
            <div class="row">

                    <h1 >CONCEPT & INNOVATION <button class="add-button minus-button-full"  onclick="hideBrand('bp2', 'bpp2')" >-</button></h1>
                    <div class="col-md-6">
                        <p style="color:#302743">
                            Nous pensons que la nature n'est insignifiante jusqu'à ce qu'en celle-ci est <br>
                            vu le problème, ainsi nous composons des éléments de notre univers les <br>
                            concepts de demain. Nous récoltons en continu les données et les <br>
                            transformons en informations grâce à une série de comparaison <br>
                            appartenant à notre système JODHOOR. <br>
                            Nous reposant sur le zéro mépris, nous positionnons l'action à l'instant <br>
                            infinitisimal petit (ξ) là où la dualité transite, dès lors chaque produit que <br>
                            nous construisons est l'ouverture d'un marché ou l'action de ce dernier. <br>
                            <button class="image-button large-image-button" >
                                <a href="#contact">
                                    <img src="{{asset('assets/images/contact-orange.webp')}}" alt="Image Alt Text">
                                </a>
                            </button>
                        </p>
                </div>
                <div class="col-md-6">
                    <ul class="ul-full">
                        <li>->Product Conceptualisation</li>
                        <li>->Analyse et amélioration des performances</li>
                        <li>->Coordination des tâches multidisciplinaires</li>
                        <li>->Conception et modélisation de produits</li>
                        <li>->Recherche de problèmes et determination de la problématique mère</li>
                        <li>->Activation du co-branding et de la globalisation de l'action</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-plus right-brand bp3">
        <h1>DESIGN<button class="add-button" onclick="toggleVisibility('bp3', 'bpp3')">+</button></h1>

    </div>
    <div class="brand-plus-plus bpp3">
        <div class="container">
            <div class="row">

                    <h1 >Design <button class="add-button minus-button-full"  onclick="hideBrand('bp3', 'bpp3')" >-</button></h1>
                    <div class="col-md-6">
                        <p style="color:#302743">
                            De la pensée au stylet en passant par le crayon nous développons des <br>
                            designs personnalisés selon l'image propre à votre mieux et bien au delà <br>
                            du visuel c'est dans l'activation des sens que nous agissons en dotant <br>
                            l'entreprise de l'ambiance qui sied à son esprit et à ses principes. <br>
                            Notre accompagnement vise à équilibrer l'attitude de la marque et le <br>
                            marché dans lequel elle exerce en usant des différents outils de <br>
                            communication pour la meilleure experience de marque. <br>
                            <button class="image-button large-image-button" >
                                <a href="#contact">
                                    <img src="{{asset('assets/images/contact-orange.webp')}}" alt="Image Alt Text">
                                </a>
                            </button>
                        </p>
                </div>
                <div class="col-md-6">
                    <ul class="ul-full">
                        <li>->Brand Identity System (CI/VI)</li>
                        <li>->Reconstruction graphique</li>
                        <li>->Rebranding de marque</li>
                        <li>->Charte graphique/digitale</li>
                        <li>->Charte graphique globale</li>
                        <li>->Storyboard</li>
                        <li>->Campagne de marketing 360</li>
                        <li>->3D modeling</li>
                        <li>->Digital sculpting/painting</li>
                        <li>->UX/UI</li>
                        <li>->Composition de son propre à la marque</li>
                        <li>->Spot video</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-plus full-brand bp4">
        <h1>SUSTAINABLE MARKETING<button class="add-button" onclick="toggleVisibility('bp4', 'bpp4')">+</button></h1>

    </div>
    <div class="brand-plus-plus bpp4">
        <div class="container">
            <div class="row">

                    <h1 >SUSTAINABLE MARKETING<button class="add-button minus-button-full"  onclick="hideBrand('bp4', 'bpp4')" >-</button></h1>
                    <div class="col-md-6">
                        <p style="color:#302743">
                            C'est à notre image que nous créons nos entreprises dont les actions <br>
                            définissent nos priorités et la compétition réelle à laquelle nous <br>
                            choisissons de participer. Ce monde a préservé pour nous assez de ruines <br>
                            pour nous montrer la faille, il communique assez et par instinct il ne dit  <br>
                            que vrais. Si c'est de lui que nous puisons tout ce que nous produisons <br>
                            alors la création d'une suite n'est pas seulement indisponsable mais vitale <br>
                            tout autant pour nous que pour l'entité que nous gouvernons. <br>
                            <button class="image-button large-image-button" >
                                <a href="#contact">
                                    <img src="{{asset('assets/images/contact-orange.webp')}}" alt="Image Alt Text">
                                </a>
                            </button>
                        </p>
                </div>
                <div class="col-md-6">
                    <ul class="ul-full">
                        <li>->Gestion de crise et du changement</li>
                        <li>->Stratégie ISO</li>
                        <li>->Culture de l'entreprise centrée sur le marketing durable</li>
                        <li>->Intégration de l'ISO 26000 à l'action de la marque</li>
                        <li>->Recherche marketing et innovation</li>
                        <li>->immersion de la marque dans la société</li>
                        <li>->Définition du but de l'organisation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-plus bp5">
        <h1>PR<button class="add-button" onclick="toggleVisibility('bp5', 'bpp5')">+</button></h1>

    </div>
    <div class="brand-plus-plus bpp5">
        <div class="container">
            <div class="row">
                <h1 >PUBLIC RELATIONSHIP<button class="add-button minus-button-full"  onclick="hideBrand('bp5', 'bpp5')" >-</button></h1>
                <div class="col-md-6">


                        <p style="color:#302743">
                            Parmi les piliers de notre processus de communication stratégique fiable <br>
                            est la construction de liens robustes entre l'organisation et son public avec <br>
                            un effet escillatoire entre le marketing et le PR à des rythmes calculés pour <br>
                            augmenter des performences de la marque. <br>
                            <button class="image-button large-image-button" >
                                <a href="#contact">
                                    <img src="{{asset('assets/images/contact-orange.webp')}}" alt="Image Alt Text">
                                </a>
                            </button>
                        </p>
                </div>
                <div class="col-md-6">
                    <ul class="ul-full">
                        <li>->Evaluation des médias potentiels</li>
                        <li>->Rédaction des articles presse multilingues</li>
                        <li>->Définition de l'audience</li>
                        <li>->Reputation Management</li>
                        <li>->pre-and-post campaign research</li>
                        <li>->Relations gouvernementales</li>
                        <li>->Communication de crise</li>
                        <li>->PR & Marketing overlap/intertwine</li>
                        <li>->Internationalisation du message de l'organisation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-plus full-brand bp6">
        <h1>BUSINESS GLOBALISATION<button class="add-button" onclick="toggleVisibility('bp6', 'bpp6')">+</button></h1>

    </div>
    <div class="brand-plus-plus bpp6">
        <div class="container">
            <div class="row">

                    <h1 >BUSINESS GLOBALISATION<button class="add-button minus-button-full"  onclick="hideBrand('bp6', 'bpp6')" >-</button></h1>
                    <div class="col-md-6">
                        <p style="color:#302743">
                            Le facteur Place peut être un vecteur de transformation majeur de  <br>
                            l'organisation avec l'accumulation de plusieurs paramètres adjascents au <br>
                            sein de marchés fortement potentiels qui grâce à notre expérience en <br>
                            supplychain et en internationalisation des entreprises vous n'aurez plus à <br>
                            laisser passer. <br> <br>
                            Laissez votre marque profiter de la diversité et de l'immensité de l'univers <br>
                            tout en augmentant vos performences. <br>
                            <button class="image-button large-image-button" >
                                <a href="#contact">
                                    <img src="{{asset('assets/images/contact-orange.webp')}}" alt="Image Alt Text">
                                </a>
                            </button>
                        </p>
                </div>
                <div class="col-md-6">
                    <ul class="ul-full">
                        <li>->Supplychain management</li>
                        <li>->Logistique et optimisation du transport</li>
                        <li>->Campagne marketing universelle</li>
                        <li>->Standardisation de la communication</li>
                        <li>->Etude de marché internationale</li>
                        <li>->Négociations internationales</li>
                        <li>->Implantation d'entreprise</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="contact" id="contact">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('send.email') }}" method="post" class="contact-form" role="form" data-aos="fade-up">
                    @csrf
                    <div class="form-group">

                        <input type="text" class="form-control" name="name" id="name" placeholder="Nom / prénom" required>
                    </div>
                    <div class="form-group">

                        <input type="email" class="form-control" name="email" id="email" placeholder="email@example.com" required>

                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Numéro de téléphone" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" id="message" placeholder="écrire..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12780.595571605318!2d3.0133308112610435!3d36.79098035599249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fb3dda66f295d%3A0x8b6125accbab9cd8!2sJodhoor%20Solutions!5e0!3m2!1sfr!2sdz!4v1692891272544!5m2!1sfr!2sdz"  allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Email sent successfully.
            </div>
        </div>
    </div>
</div>
    <!-- JAVASCRIPT FILES -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/aos.js')}}"></script>
    <script src="{{asset('assets/js/scrollspy.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        @if(session('success'))
        <script>
            $(document).ready(function() {
                $('#successModal').modal('show');
            });
        </script>
    @endif
    <script>
     function toggleVisibility(brandPlusClass, brandPlusPlusClass) {
    //     var allBrandPlusPlus = document.querySelectorAll('.brand-plus-plus');
    //     var allBrandPlus = document.querySelectorAll('.brand-plus');

    // // Hide all brand-plus-plus elements
    // allBrandPlusPlus.forEach(function(element) {
    //     element.style.display = 'none';
    //     // You can also remove any animate.css classes if needed
    //     element.classList.remove('animated', 'fadeIn');
    //     element.classList.add('animated', 'fadeOut');
    // });
    // // Hide all brand-plus-plus elements
    // allBrandPlus.forEach(function(element) {
    //     element.style.display = 'flex';
    //     // You can also remove any animate.css classes if needed
    //     element.classList.remove('animated', 'fadeOut');
    //     element.classList.add('animated', 'fadeIn');
    // });
    var brandPlus = document.querySelector('.' + brandPlusClass);
    var brandplusplus = document.querySelector('.' + brandPlusPlusClass);

    if (brandPlus.style.display === 'none') {
        brandPlus.style.display = 'flex';
        brandplusplus.style.display = 'none';

        // Add animate.css classes for fade-in and fade-out
        brandPlus.classList.remove('animated', 'fadeOut');
        brandPlus.classList.add('animated', 'fadeIn');

        brandplusplus.classList.remove('animated', 'fadeIn');
        brandplusplus.classList.add('animated', 'fadeOut');
    } else {
        brandPlus.style.display = 'none';
        brandplusplus.style.display = 'flex';

        // Add animate.css classes for fade-in and fade-out
        brandPlus.classList.remove('animated', 'fadeIn');
        brandPlus.classList.add('animated', 'fadeOut');

        brandplusplus.classList.remove('animated', 'fadeOut');
        brandplusplus.classList.add('animated', 'fadeIn');
    }
}


function showDetail(sectionId,clickedButton) {
    var brandplusplus = document.querySelector('.brand-plus-plus');
    // Select all h1 elements inside .brand-plus-plus
    var brandPlusPlusH1Elements = document.querySelectorAll('.brand-plus-plus h1');
    // Cachez toutes les pages de détail
    var detailPages = document.querySelectorAll('.detail-page');
    detailPages.forEach(function (page) {
        page.hidden = true;
    });
    if (sectionId === 'brandCreation') {


                if (window.innerWidth <= 768) {

                var brandCreationList = document.getElementById('brandCreationList');
                var otherList = document.getElementById('otherList');
                otherList.innerHTML ="";
                brandCreationList.innerHTML = "<li>->{{ __('TH8') }}</li><li>->{{ __('TH9') }}</li><li>->{{ __('TH10') }}</li><li>->{{ __('TH11') }}</li><li>->{{ __('TH12') }}</li><li>->{{ __('TH13') }}</li><li>->{{ __('TH14') }}</li><li>->{{ __('TH15') }}</li>";
        } else {
            // Example: Add dynamic content to the brandCreationList
            var brandCreationList = document.getElementById('otherList');
                brandCreationList.innerHTML ="";
                brandCreationList.innerHTML = "<li>->{{ __('TH8') }}</li><li>->{{ __('TH9') }}</li><li>->{{ __('TH10') }}</li><li>->{{ __('TH11') }}</li><li>->{{ __('TH12') }}</li><li>->{{ __('TH13') }}</li><li>->{{ __('TH14') }}</li><li>->{{ __('TH15') }}</li>";
                brandCreationList.style.marginTop = '50px'; // Adjust as needed
        }
            }
            else if (sectionId === 'brandStrategy') {
                if (window.innerWidth <= 768) {

                var brandStrategyList = document.getElementById('brandStrategyList');
                var otherList = document.getElementById('otherList');
                otherList.innerHTML ="";
                brandStrategyList.innerHTML = "<li>->{{ __('TH22') }}</li><li>->{{ __('TH23') }}</li><li>->{{ __('TH24') }}</li><li>->{{ __('TH25') }}</li><li>->{{ __('TH26') }}</li><li>->{{ __('TH27') }}</li><li>->{{ __('TH28') }}</li>";
        } else {
                           // Example: Add dynamic content to the brandStrategyList
                var brandStrategyList = document.getElementById('otherList');
                brandStrategyList.innerHTML ="";
                brandStrategyList.innerHTML = "<li>->{{ __('TH22') }}</li><li>->{{ __('TH23') }}</li><li>->{{ __('TH24') }}</li><li>->{{ __('TH25') }}</li><li>->{{ __('TH26') }}</li><li>->{{ __('TH27') }}</li><li>->{{ __('TH28') }}</li>";
                // Dynamically adjust the margin-top for alignment
                brandStrategyList.style.marginTop = '150px'; // Adjust as needed
        }
            }else if (sectionId === 'brandActivation') {

                if (window.innerWidth <= 768) {
                var brandActivationList = document.getElementById('brandActivationList');
                var otherList = document.getElementById('otherList');
                otherList.innerHTML ="";
                brandActivationList.innerHTML = "<li>->{{ __('TH35') }}</li><li>->{{ __('TH36') }}</li><li>->{{ __('TH37') }}</li><li>->{{ __('TH38') }}</li><li>->{{ __('TH39') }}</li><li>->{{ __('TH40') }}</li><li>->{{ __('TH41') }}</li>";

        } else {
                           // Example: Add dynamic content to the brandStrategyList
                var brandActivationList = document.getElementById('otherList');
                brandActivationList.innerHTML ="";
                brandActivationList.innerHTML = "<li>->{{ __('TH35') }}</li><li>->{{ __('TH36') }}</li><li>->{{ __('TH37') }}</li><li>->{{ __('TH38') }}</li><li>->{{ __('TH39') }}</li><li>->{{ __('TH40') }}</li><li>->{{ __('TH41') }}</li>";
                // Dynamically adjust the margin-top for alignment
                brandActivationList.style.marginTop = '280px'; // Adjust as needed
        }

            }else if (sectionId === 'brandExperience') {
                if (window.innerWidth <= 768) {

                var brandExperienceList = document.getElementById('brandExperienceList');
                var otherList = document.getElementById('otherList');
                otherList.innerHTML ="";
                brandExperienceList.innerHTML = "<li>->{{ __('TH49') }}</li><li>->{{ __('TH50') }}</li><li>->{{ __('TH51') }}</li><li>->{{ __('TH52') }}</li><li>->{{ __('TH53') }}</li><li>->{{ __('TH54') }}</li><li>{{ __('TH55') }}</li>";

                brandExperienceList.innerHTML = "<li>->{{ __('TH49') }}</li><li>->{{ __('TH50') }}</li><li>->{{ __('TH51') }}</li><li>->{{ __('TH52') }}</li><li>->{{ __('TH53') }}</li><li>->{{ __('TH54') }}</li><li>{{ __('TH55') }}</li>";
        } else {
                           // Example: Add dynamic content to the brandStrategyList
                var brandExperienceList = document.getElementById('otherList');
                brandExperienceList.innerHTML ="";
                brandExperienceList.innerHTML = "<li>->{{ __('TH49') }}</li><li>->{{ __('TH50') }}</li><li>->{{ __('TH51') }}</li><li>->{{ __('TH52') }}</li><li>->{{ __('TH53') }}</li><li>->{{ __('TH54') }}</li><li>{{ __('TH55') }}</li>";
                // Dynamically adjust the margin-top for alignment
                brandExperienceList.style.marginTop = '410px'; // Adjust as needed
        }

            }
            // Show all other "+" buttons
    var allPlusButtons = document.querySelectorAll('.plus-button');
    allPlusButtons.forEach(function (button) {
        if (button !== clickedButton) {
            button.style.display = 'inline';
        }
    });
    var allMinusButtons = document.querySelectorAll('.minus-button');
    allMinusButtons.forEach(function (button) {
        if (button !== clickedButton) {
            button.style.display = 'none';
        }
    });
    // Hide the clicked button
    clickedButton.style.display = 'none';
    var sectionMinusButton = document.querySelector('.minus-button[data-section="' + sectionId + 'Minus"]');
    sectionMinusButton.style.display = 'inline';
    // Montrez la page de détail spécifique
     document.getElementById(sectionId).hidden = false;
    // brandplusplus.style.height = "fit-content";
    // Apply the font size to all h1 elements
    if (window.innerWidth > 768) {
    brandPlusPlusH1Elements.forEach(function (element) {
        element.style.fontSize = "50px";
    });
}

}
function hideDetail(clickedButton,sectionId) {
    // Cachez toutes les pages de détail
    var detailPages = document.querySelectorAll('.detail-page');
    detailPages.forEach(function (page) {
        page.hidden = true;
    });
    var otherList = document.getElementById('otherList');
    otherList.innerHTML ="";
    clickedButton.style.display = 'none';
    var sectionPLusButton = document.querySelector('.add-button[data-section="' + sectionId + 'Plus"]');
    sectionPLusButton.style.display = 'inline';


}

function hideBrand(brandPlusClass,brandPlusPlusClass) {

    var brandPlus = document.querySelector('.' + brandPlusClass);
    var brandplusplus = document.querySelector('.' + brandPlusPlusClass);
        brandPlus.style.display = 'flex';
        brandplusplus.style.display = 'none';
        // Add animate.css classes for fade-in and fade-out
        brandPlus.classList.remove('animated', 'fadeOut');
        brandPlus.classList.add('animated', 'fadeIn');

        brandplusplus.classList.remove('animated', 'fadeIn');
        brandplusplus.classList.add('animated', 'fadeOut');
}

    </script>

<script>
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const sidebar = document.getElementById('sidebar');
    const customNavbar = document.querySelector('.custom-navbar');
    hamburgerBtn.addEventListener('click', () => {
        sidebar.style.right = sidebar.style.right === '0px' ? '-300px' : '0px';
        customNavbar.style.display = 'none';
    });

    </script>
    <script>
        const closeSidebarBtn = document.getElementById('closeSidebarBtn');
        const sidebare = document.getElementById('sidebar');
        const customNavbare = document.querySelector('.custom-navbar');

        closeSidebarBtn.addEventListener('click', () => {
            sidebare.style.right = '-300px'; // Close the sidebar
            customNavbare.style.display = 'block'; // Show the custom navbar
        });
        </script>
</body>
</html>
