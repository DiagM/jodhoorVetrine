<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Judhoor</title>


        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

        <link href="{{asset('assets/css/aos.css')}}" rel="stylesheet">

        <link href="{{asset('assets/css/templatemo-nomad-force.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/exemple1.css')}}" rel="stylesheet">
        {{-- <link href="{{asset('assets/css/sidebar.css')}}" rel="stylesheet"> --}}

    </head>

    <body style="background-image: url('{{ asset('assets/images/project/projet-bg.webp') }}');background-size: cover;">

        <main>

            {{-- <section class="hero" id="hero">

                <div id="imageContent" style="display: none">
                </div>
                <div id="originalContent">
                <div class="heroText">
                    <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                       PROJECT 1
                    </h1>

                    <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                        first display of <strong class="custom-underline">Project</strong>
                    </p>
                </div>

                <div class="videoWrapper">
                    <img src="{{asset('assets/images/pexels-tima-miroshnichenko-5846175.jpg')}}" alt="Image description" class="custom-video">
                </div>



        </div>

            </section> --}}


            <nav class="custom-navbar">
                <div class="logo">
                    <a href="{{ route('index') }}">
                        <img src="{{asset('assets/logos/logo-orange.webp')}}" alt="Jodhoor Logo">
                    </a>
                </div>
                <div class="hamburger">
                    <a href="{{ route('index') }}">
                        <button class="project-button">Accueil</button>
                      </a>

                    <span class="separator"></span>
                    <button class="hamburger-icon" id="hamburgerBtn">
                        <i class="bi bi-list"></i>
                    </button>
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
                            <a class="nav-link" href="{{ route('project1') }}">Projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('comingsoon') }}">Réalisations</a>
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

            <section class="section bg-black"  id="about">
            <div class="container cont_img">
                <a href="{{ route('metamed') }}" class="box">
                    {{-- <img src="{{asset('assets/images/pexels-daria-obymaha-1684151.jpg')}}" alt="Your Image" class="img-fluid equal-size-image" data-aos="fade-up" data-aos-delay="300" style="max-height: 80vh;" onclick="replaceContent(this.src);"> --}}
                    <img src="{{asset('assets/images/project/metamed-display.webp')}}" alt="metamed-display" class="img-fluid equal-size-image" data-aos="fade-up" data-aos-delay="300" style="max-height: 70vh;">
                    <span>Metamed</span>
                </a>
                <a href="{{ route('xi') }}" class="box">
                    <img src="{{asset('assets/images/project/display-xi.webp')}}" alt="Xi display" class="img-fluid equal-size-image" data-aos="fade-up" data-aos-delay="300" style="max-height: 70vh;" >
                    <span>Xi</span>
                </div>
                {{-- <div class="box">
                    <img src="{{asset('assets/images/12.jpg')}}" alt="Your Image" class="img-fluid equal-size-image" data-aos="fade-up" data-aos-delay="300" style="max-height: 70vh;" >
                    <span>Hover</span>
                </div>
                <div class="box">
                    <img src="{{asset('assets/images/pexels-quentin-ecrepont-2188882.jpg')}}" alt="Your Image" class="img-fluid equal-size-image" data-aos="fade-up" data-aos-delay="300" style="max-height: 70vh;" onclick="replaceContent(this.src);">
                    <span>Effect</span>
                </div> --}}
              </div>

            </section>

        </main>

        {{-- <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h5 class="text-white">
                            <i class="bi-geo-alt-fill me-2"></i>
                            State of Rio de Janeiro, Brazil
                        </h5>

                        <a href="mailto:info@company.com" class="custom-link mt-3 mb-5">
                            info@company.com
                        </a>
                    </div>

                    <div class="col-6">
                        <p class="copyright-text mb-0">Copyright © Nomad Force 2021

                        <br><br>Design: <a href="https://templatemo.com/page/1" target="_parent">TemplateMo</a></p>

                    </div>

                    <div class="col-lg-3 col-5 ms-auto">
                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>

                </div>
            </section>
        </footer> --}}

        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('assets/js/aos.js')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/magnific-popup-options.js')}}"></script>
        <script src="{{asset('assets/js/scrollspy.min.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>
        {{-- <script src="{{asset('assets/js/exemple1.js')}}"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
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
                    customNavbare.style.display = ''; // Show the custom navbar
                });
                </script>
    </body>
</html>
