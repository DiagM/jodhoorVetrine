<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials/css')
    @include('partials/js')
    <title>Sidebar</title>
</head>
<body>
    <nav class="custom-navbar">
        <div class="logo">
            <a href="{{ route('index') }}">
                <img src="{{asset('assets/logos/logo-orange.webp')}}" alt="Jodhoor Logo">
            </a>
        </div>
        <div class="hamburger">
            <a href="{{ route('index') }}" style="color:transparent">
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

</body>
</html>
