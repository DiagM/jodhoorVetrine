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


        <link href="{{asset('assets/css/project.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!--

TemplateMo 567 Nomad Force

https://templatemo.com/tm-567-nomad-force

-->

   <!-- Add your custom CSS for the sidebar here -->

    </head>

    <body>


        <main>


            <nav class="custom-navbar">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{asset('assets/logos/Jodhoor Orange.png')}}" alt="Jodhoor Logo">
                    </a>
                </div>
                <div class="hamburger">

                    <a href="{{ route('index') }}" class="project-button">Home</a>


                    <span class="separator"></span>
                    <button class="hamburger-icon" id="hamburgerBtn">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </nav>

            <div class="sidebar" id="sidebar">
                <div class="sidebar-header">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset('assets/logos/Jodhoor Orange.png')}}" alt="Jodhoor Logo">
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
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Our Studio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">News & Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-footer">
                    <a href="#" class="social-icon"><i class="bi bi-facebook" style="color: #ED6C4E;"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-linkedin" style="color: #ED6C4E;"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-instagram" style="color: #ED6C4E;"></i></a>
                </div>
            </div>

            <!-- <div class="container">
                <div class="box">
                  <div class="imgBx">

                    <img src="https://images.unsplash.com/photo-1618202133208-2907bebba9e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80">

                </div>
                  <div class="content">
                    <div>
                        <a href="exemple1.html" class="project-link">
                            <h2 class="project-heading">Project 1</h2>
                          </a>

                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi accusamus molestias quidem iusto.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="box">
                  <div class="imgBx">
                    <img src="https://images.unsplash.com/photo-1610194352361-4c81a6a8967e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1674&q=80">
                  </div>
                  <div class="content">
                    <div>
                      <h2>Image Title</h2>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi accusamus molestias quidem iusto.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="box">
                  <div class="imgBx">
                    <img src="https://images.unsplash.com/photo-1495805442109-bf1cf975750b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80">
                  </div>
                  <div class="content">
                    <div>
                      <h2>Image Title</h2>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi accusamus molestias quidem iusto.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="box">
                  <div class="imgBx">
                    <img src="https://images.unsplash.com/photo-1613346945084-35cccc812dd5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1759&q=80">
                  </div>
                  <div class="content">
                    <div>
                      <h2>Image Title</h2>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi accusamus molestias quidem iusto.
                      </p>
                    </div>
                  </div>
                </div>
              </div> -->


              <div id="image-track" data-mouse-down-at="0" data-prev-percentage="0">
                <div class="image-container">
                  <img class="image" src="https://images.unsplash.com/photo-1524781289445-ddf8f5695861?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" draggable="false" />
                  <a href="{{ route('project1') }}">Project 1</a>
              </div>
              <div class="image-container">
                <img class="image" src="https://images.unsplash.com/photo-1610194352361-4c81a6a8967e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1674&q=80" draggable="false" />
                <a href="{{ route('project1') }}">Project 1</a>
            </div>
              <div class="image-container">
                <img class="image" src="https://images.unsplash.com/photo-1618202133208-2907bebba9e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" draggable="false" />
                <a href="{{ route('project1') }}">Project 1</a>
            </div>
                <img class="image" src="https://images.unsplash.com/photo-1495805442109-bf1cf975750b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" draggable="false" />
                <img class="image" src="https://images.unsplash.com/photo-1548021682-1720ed403a5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" draggable="false" />
                <img class="image" src="https://images.unsplash.com/photo-1496753480864-3e588e0269b3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2134&q=80" draggable="false" />
                <img class="image" src="https://images.unsplash.com/photo-1613346945084-35cccc812dd5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1759&q=80" draggable="false" />
                <img class="image" src="https://images.unsplash.com/photo-1516681100942-77d8e7f9dd97?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" draggable="false" />
              </div>




        </main>



        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('assets/js/aos.js')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/magnific-popup-options.js')}}"></script>
        <script src="{{asset('assets/js/scrollspy.min.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>
        <script src="{{asset('assets/js/project.js')}}"></script>

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
                    customNavbare.style.display = 'flex'; // Show the custom navbar
                });
                </script>




    </body>
</html>
