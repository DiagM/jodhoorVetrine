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
            height: 120vh;
        }
        .h-screen-contact {
            height: 90vh;
        }
        .h-screen-quizz {
            height: 220vh;
        }

        .items-center {
            align-items: center;
        }

        .ml-20-right {
            margin-right: 5rem; /* You can adjust this value */
        }
        .ml-20 {
            margin-left: 5rem; /* You can adjust this value */
        }

        .w-1/2 {
            width: 50%;
        }

        .text-4xl {
            font-size: 3rem; /* Increased font size to 3rem */
        }
        .text-4xl-quizz {
            font-size: 3rem; /* Increased font size to 3rem */
            margin-top: 1000px
        }
        .text-3xl {
            font-size: 1.2rem; /* Increased font size to 3rem */
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
        .text-lg-small {
            font-size: 0.8rem;
            font-weight: lighter;
        }

        .mb-8 {
            margin-bottom: 1rem;
        }

        /* Set text color to white */
        .text-white {
            color: #fff;
        }

        /* Add margin to the top of the paragraph */
        .lower-text {
            margin-top: 32rem; /* Adjust as needed */
        }


        /* Add border to the left side of the containing div */
        .line-container {
            border-left: 2px solid #fff; /* Adjust the width and color of the line */
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
        .text-center-bottom{
            margin-bottom: auto;
            margin-left: auto;
            margin-right: auto;
        }
        .invest-button {

        text-align: center; /* Centre le bouton horizontalement */
        }

    .invest-button .button {
        font-weight: bold; /* Met le texte en gras */
        padding: 10px 20px; /* Ajuste les marges intérieures pour une apparence agréable */
        background-color: transparent; /* Change la couleur de fond du bouton */
        color: #fff; /* Change la couleur du texte du bouton */
        border: none; /* Supprime la bordure */
        border-radius: 5px; /* Arrondi les coins */
        text-decoration: none; /* Supprime la soulignement du lien */
    }

.invest-button .button:hover {
    background-color: #0056b3; /* Change la couleur de fond du bouton au survol */
}
.align-right {
            justify-content: flex-end;
        }

        @media only screen and (max-width:600px) {
    .h-screen {
        height: 40vh; /* Set height to 30% of viewport height */

    }
    .h-screen-quizz {
            height: 100vh;
        }
    .text-4xl {
            font-size: 0.8rem; /* Increased font size to 3rem */
        }
        .text-4xl-quizz {
            font-size: 0.8rem; /* Increased font size to 3rem */
            margin-top: 500px
        }
        .text-3xl {
            font-size: 0.5rem; /* Increased font size to 3rem */
        }
        .text-lg {
            font-size: 0.45rem;
            font-weight: bold;

        }
        .text-lg-small {
            font-size: 0.4rem;
        }
        .lower-text {
            margin-top: 10rem; /* Adjust as needed */
        }
        .line-container {

            padding-left: 3px; /* Add space for the vertical line */
        }
        .ml-20 {
            margin-left: 1rem; /* You can adjust this value */
        }
        .text-crm{
            font-size: 0.6rem;
        }
        .invest-button .button {

        padding: 5px 5px; /* Ajuste les marges intérieures pour une apparence agréable */

    }
        .invest-button {
        font-size: 0.4rem;

        }
        .mb-8 {
            margin-bottom: 0rem;
        }
        .ml-20-right {
            margin-right: 1rem; /* You can adjust this value */
        }
        .h-screen-contact {
            height: 100vh;
        }
}

@media only screen and (min-width:600px) and (max-width:900px) {
    .h-screen {
        height: 40vh; /* Set height to 30% of viewport height */

    }
    .h-screen-quizz {
            height: 100vh;
        }
    .text-4xl {
            font-size: 0.8rem; /* Increased font size to 3rem */
        }
        .text-4xl-quizz {
            font-size: 0.8rem; /* Increased font size to 3rem */
            margin-top: 500px
        }
        .text-3xl {
            font-size: 0.5rem; /* Increased font size to 3rem */
        }
        .text-lg {
            font-size: 0.45rem;
            font-weight: bold;

        }
        .text-lg-small {
            font-size: 0.4rem;
        }
        .lower-text {
            margin-top: 10rem; /* Adjust as needed */
        }
        .line-container {

            padding-left: 3px; /* Add space for the vertical line */
        }
        .ml-20 {
            margin-left: 1rem; /* You can adjust this value */
        }
        .text-crm{
            font-size: 0.6rem;
        }
        .invest-button .button {

        padding: 5px 5px; /* Ajuste les marges intérieures pour une apparence agréable */

    }
        .invest-button {
        font-size: 0.4rem;

        }
        .mb-8 {
            margin-bottom: 0rem;
        }
        .ml-20-right {
            margin-right: 1rem; /* You can adjust this value */
        }
        .h-screen-contact {
            height: 100vh;
        }
}

    </style>
</head>
<body>
    @include('partials/navbar_sidebar')

    <div class="min-h-screen flex flex-col">
        <div class="bg-cover bg-center h-screen flex items-center align-right" style="background-image: url('{{ asset('assets/images/xi/image 01.webp') }}');">
            <div class="w-1/2 ml-20-right">
                <h2 class="text-4xl font-bold mb-4 text-white">Xi FOR STATISTICS</h2>
                <div style="border-bottom: 2px solid white; width: 150px; margin-bottom: 20px;"></div> <!-- Adjust width here -->

                <h3 class="text-3xl font-bold mb-4 text-white">
                    get closer to the truth by taking your studies to a new <br>
                    level</h3>

                <p class="text-lg mb-8 text-white">
                    No longer have to change the nature of the subject to simplify the <br>
                    process and let your brand experience all the splendor of human <br>
                    complexity.
                </p>
                <div class="invest-button">
                    <a href="#contact" class="button">Invest on this project</a>
                </div>
            </div>

        </div>
        <div class="bg-cover bg-center h-screen flex items-center" style="background-image: url('{{ asset('assets/images/xi/image 2.webp') }}');">
            <div class="w-1/2 ml-20">
                <div style="border-bottom: 2px solid white; width: 150px; margin-bottom: 20px;"></div> <!-- Adjust width here -->

                <h3 class="text-3xl font-bold mb-4 text-white">
                    Live the numbers like you never did through a <br>
                    dynamic fluid design
                </h3>

                <p class="text-lg mb-8 text-white">
                    Why have to let doubt take part in decision-making when we have a <br>
                    wide choice of studies with clear, direct and simplified answers?
                </p>
                <div class="invest-button">
                    <a href="#contact" class="button">Invest on this project</a>
                </div>
            </div>

        </div>
        <div class="bg-cover bg-center h-screen flex items-center align-right" style="background-image: url('{{ asset('assets/images/xi/image 3.webp') }}');">
            <div class="w-1/2 ml-20-right line-container"> <!-- Add line-container class -->


                <h3 class="text-3xl font-bold mb-4 text-white">
                    Mathematics have never been easier to understand.
                </h3>

                <p class="text-lg mb-8 text-white">
                    Tell us your thoughts and we will help you pose the appropriate and <br>
                    effective issues and variables for a clear vision of current events and <br>
                    highly flexible forecasts.
                </p>
                <div class="invest-button">
                    <a href="#contact" class="button">Invest on this project</a>
                </div>
            </div>
            <div class="w-1/2 bg-cover bg-center h-full"></div>
        </div>
        <div class="bg-cover bg-center h-screen flex items-center" style="background-image: url('{{ asset('assets/images/xi/image 4.webp') }}');">
            <div class="w-1/2 ml-20">
                <h2 class="text-4xl font-bold mb-4 text-white">STATISTICS</h2>
                <div style="border-bottom: 2px solid white; width: 150px; margin-bottom: 20px;"></div> <!-- Adjust width here -->



                <p class="text-lg mb-8 text-white">
                    Based on the true nature of humans as every detail <br>
                    counts to understand and to strength the <br>
                    relationship between your brand and its universe.
                </p>
                <div class="invest-button">
                    <a href="#contact" class="button">Invest on this project</a>
                </div>
            </div>
        </div>
        <div class="bg-cover bg-center h-screen-quizz flex flex-col justify-between items-center" style="background-image: url('{{ asset('assets/images/xi/image 5.webp') }}');">
            <h2 class="text-4xl font-bold text-white">QUIZZ</h2>
            <div style="border-bottom: 2px solid white; width: 150px; margin-top: 20px;"></div>
            <h2 class="text-4xl-quizz font-bold text-white" >QUIZZ</h2>
            <p class=" text-lg mb-8 text-white">
                If humans are considered as a product, no fission can exist between <br>
                matter and psychology, so the disdain of one will necessarily lead to a <br>
                fault within the brand with an irreversible effect beyond the limit
            </p>
            <p class="text-lg-small mb-8 text-white">
                Can we then speak of a limit when fission is in itself the rupture of life going as far as <br>
                dehumanization? Which of our identities do we choose to inherit our organizations? Which <br>
                expression do we prioritize?
            </p>
            <div style="border-bottom: 2px solid white; width: 150px; margin-top: 20px;"></div>

        </div>


        <div class="bg-cover bg-center h-screen flex items-center align-right" style="background-image: url('{{ asset('assets/images/xi/image 6.webp') }}');">
            <div class="w-1/2 ml-20-right ">
                <h2 class="text-4xl font-bold mb-4 text-white">Builder</h2>


                <h3 class="text-3xl font-bold mb-4 text-white line-container">
                    Feel free to create your own questionnaire and experience <br>
                    the meta interview through the introduction of dialogue with <br>
                    your receivers.
                </h3>

                <p class="text-lg-small mb-8 text-white">
                    We support you every step of the way through live chat with the option to switch to full <br>
                    support at any time
                </p>
                <div class="invest-button">
                    <a href="#contact" class="button">Invest on this project</a>
                </div>
            </div>
        </div>
        <div class="bg-cover bg-center h-screen flex items-center" style="background-image: url('{{ asset('assets/images/xi/image 7.webp') }}');">
            <div class="w-1/2 ml-20">
                <h2 class="text-4xl font-bold mb-4 text-white">Personaliser</h2>

                <h3 class="text-3xl font-bold mb-4 text-white ">
                    Total customization is possible with tools that are easy and <br>
                    quick to adopt,
                </h3>
                <p class="text-lg-small mb-8 text-white line-container">
                    Minimalist design with simplified shortcuts. <br> <br>
                    Direct chat with experts depending on the brand sector or the objective of the study. <br><br>
                    Illustration of the questionnaire expanding the possibilities of sampling and giving people <br>
                    with disabilities the right to participate freely in sharing their opinions.
                </p>
                <div class="invest-button">
                    <a href="#contact" class="button">Invest on this project</a>
                </div>
            </div>
        </div>
        <div class="bg-cover bg-center h-screen flex items-center" style="background-image: url('{{ asset('assets/images/xi/image 8.webp') }}');">
            <div class="w-1/2 ml-20">
                <h2 class="text-4xl font-bold mb-4 text-white">Get Your Link And <br> Share It With Others</h2>

                <h3 class="text-3xl font-bold mb-4 text-white ">
                    Enjoy designing and answering a questionnaire like a child's <br>
                    game that is easy to share.. <br>
                    On your own or through the Jodhoor database opening  <br>
                    bridges across the globe
                </h3>
                <div class="invest-button">
                    <a href="#contact" class="button">Invest on this project</a>
                </div>
            </div>
        </div>
        <div class="bg-cover bg-center h-screen-contact " style="background-image: url('{{ asset('assets/images/xi/image 01.webp') }}');">
            @include('partials/contact')

        </div>
    </div>

</body>
</html>
