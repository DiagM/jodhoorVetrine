<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metamed</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-libre_franklin), sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-arimo), sans-serif;
            color: #fff; /* Set text color to white */
        }

        .min-h-screen {
            min-height: 100vh;
        }

        .flex {
            display: flex;
        }

        .flex-col {
            flex-direction: column;
        }

        .bg-cover {
            background-size: cover;
        }

        .bg-center {
            background-position: center;
        }

        .h-screen {
            height: 100vh;
        }

        .items-center {
            align-items: center;
        }

        .ml-20 {
            margin-left: 5rem; /* You can adjust this value */
        }

        .w-1/2 {
            width: 50%;
        }

        .text-4xl {
            font-size: 5rem; /* Increased font size to 3rem */
        }
        .text-3xl {
            font-size: 3rem; /* Increased font size to 3rem */
        }

        .font-bold {
            font-weight: bold;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .text-lg {
            font-size: 1.125rem;
            font-weight: lighter;
        }

        .mb-8 {
            margin-bottom: 2rem;
        }

        /* Set text color to white */
        .text-white {
            color: #fff;
        }

        /* Add margin to the top of the paragraph */
        .lower-text {
            margin-top: 30rem; /* Adjust as needed */
        }


        /* Add border to the left side of the containing div */
        .line-container {
            border-left: 5px solid rgb(255, 119, 0); /* Adjust the width and color of the line */
            padding-left: 20px; /* Add space for the vertical line */
        }
        .logomini img {
            max-width: 60px;
            height: auto;
        }
        .text-top{
            margin-bottom: auto;
        }
        .text-center-top{
            margin-bottom: auto;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="min-h-screen flex flex-col">
        <div class="bg-cover bg-center h-screen" style="background-image: url('{{ asset('assets/images/metamedBG/image-01.svg') }}');"></div>
        <div class="bg-cover bg-center h-screen flex items-center" style="background-image: url('{{ asset('assets/images/metamedBG/image-02.svg') }}');">
            <div class="w-1/2 ml-20">
                <h2 class="text-4xl font-bold mb-4 text-white">Situation Actuelle De <br> La Santé Mondiale</h2>
            </div>
            <div class="w-1/2 bg-cover bg-center h-full"></div>
        </div>
        <div class="bg-cover bg-center h-screen flex items-center" style="background-image: url('{{ asset('assets/images/metamedBG/image-03.svg') }}');">
            <div class="w-1/2 ml-20">
                <p class="text-lg mb-8 text-white">
                    Un Univers Social Ouvrant Libre Droit A La Recherche mMédicale En Reliant Les Cas Et Accélérant L'étude De <br>
                    Corrélation Entre Les Symptômes Particulièrement Pour Les Maladies Rares Qui Comme Nous Pouvons Le <br>
                    Remarquer Atteint Un seuil Alarmant Avec Une Défaillance D'organes Vitaux Critique. <br> <br>


                    Par Les Branches De Metamed Nous Visons L'équité Et Le Droit à La Prise En Charge Sanitaire, Qui Donnera <br>
                    Naissance à De Nouvelles Questions Scientifiques Qui Par La Diversité Trouveront De Nouvelles Solutions <br>
                    Thérapeutiques.
                </p>
                <div class="logomini">
                <img src="{{asset('assets/logos/Jodhoor-White.svg')}}" alt="Judhoor white Logo">
            </div>
        </div>
            <div class="w-1/2 bg-cover bg-center h-full"></div>
        </div>
        <div class="bg-cover bg-center h-screen flex items-center" style="background-image: url('{{ asset('assets/images/metamedBG/image-04.svg') }}');">
            <div class="w-1/2 ml-20 lower-text line-container"> <!-- Add line-container class -->
                <p class="text-lg mb-8 text-white">
                    Chacun a droit à un compte unique propre à son ID par lequel il a accès à des recherches des <br>
                    discussions universelles, lecture de recherches, accès direct à son dossier medical, appel <br>
                    d'urgence centralisé
                </p>
            </div>
            <div class="w-1/2 bg-cover bg-center h-full"></div>
        </div>
        <div class="bg-cover bg-center h-screen flex items-center" style="background-image: url('{{ asset('assets/images/metamedBG/image-05.svg') }}');">
            <div class="w-1/2 ml-20">
                <h3 class="text-3xl font-bold mb-4 text-white">Par statut professionnel les <br> accès seront personnalisés:</h3>
                <p class="text-lg mb-8 text-white">
                    <strong>Medical:</strong> A son propre compte Individu, accès aux dossiers médicaux et au contact des <br>
                    centres hospitaliers, il peut publier des études et contacter les urgences.<br> <br>


                    <strong>Urgence:</strong> Approprié aux unités d’urgences et de sûreté publique avec un raccourcis de <br>
                    contact avec les hôpitaux. Il est dédié à la gestion de crise uniquement. <br> <br>


                    <strong>Individu:</strong> Il concerne les personnes hors domaine médical, ce compte n’a accès qu’à son <br>
                    propre dossier médical, il peut faire une recherche de maladies à travers les symptômes, <br>
                    publier dans la toile forum, rechercher des médecins ou des centres hospitaliers selon <br>
                    des keywords et passer des appels d'urgences.
                </p>
            </div>
            <div class="w-1/2 bg-cover bg-center h-full"></div>
        </div>
        <div class="bg-cover bg-center h-screen flex items-center" style="background-image: url('{{ asset('assets/images/metamedBG/image-06.svg') }}');">

        </div>
        <div class="bg-cover bg-center h-screen flex items-center" style="background-image: url('{{ asset('assets/images/metamedBG/image-07.svg') }}');">
            <div class="w-1/2 ml-20 text-top">
                <div class="w-1/2 ml-20 line-container"> <!-- Add line-container class -->
                    <h3 class=".font-bold text-white">
                        Le CRM Metamed relie tous les centres hospitaliers et médicaux pour un <br>
                        échange rapide et efficace de l'information scientifique et une optimisation <br>
                        maximale de la gestion de crise ouvrant droit à une meilleure vision sur les <br>
                        statistiques médicales.
                    </h3>
                </div>
            </div>
            <div class="w-1/2 bg-cover bg-center h-full"></div>
        </div>
        <div class="bg-cover bg-center h-screen flex items-center" style="background-image: url('{{ asset('assets/images/metamedBG/image-08.svg') }}');">
            <div class="w-1/2 ml-20  line-container"> <!-- Add line-container class -->
                <p class="text-lg mb-8 text-white">
                    Une gestion efficace des dossiers médicaux sans risque de répétition ou de <br>
                    perte avec une vision directe sur tout l'historique médical du patient et un <br>
                    raccourci vers la discussion du cas.
                </p>
            </div>
            <div class="w-1/2 bg-cover bg-center h-full"></div>
        </div>
        <div class="bg-cover bg-center h-screen flex items-center" style="background-image: url('{{ asset('assets/images/metamedBG/image-09.svg') }}');">

        </div>
        <div class="bg-cover bg-center h-screen flex items-center" style="background-image: url('{{ asset('assets/images/metamedBG/image-10.svg') }}');">
            <h2 class="text-4xl font-bold text-center-top text-white">Objectifs Metamed +10ans</h2>

        </div>
    </div>
</body>
</html>
