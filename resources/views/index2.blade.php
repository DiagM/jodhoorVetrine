<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Jodhoor</title>

        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

        <link href="{{asset('assets/css/aos.css')}}" rel="stylesheet">

        <link href="{{asset('assets/css/templatemo-nomad-force.css')}}" rel="stylesheet">

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
                    <a href="{{route('index')}}">
                        <img src="{{asset('assets/logos/Jodhoor Orange.png')}}" alt="Jodhoor Logo">
                    </a>
                </div>
                <div class="hamburger">
                    <a href="{{ route('project') }}">
                        <button class="project-button">Project</button>
                      </a>

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
                            <a class="nav-link" href="#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Our Studio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#news">News & Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-footer">
                    <a href="#" class="social-icon"><i class="bi bi-facebook" style="color: #ED6C4E;"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-linkedin" style="color: #ED6C4E;"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-instagram" style="color: #ED6C4E;"></i></a>
                </div>
            </div>




            <section class="hero" id="hero" style="position: relative; z-index: 1;">
                <div class="heroVideo">

                        <input type="range" class="slider-input" id="speed" min="0.13" max="2" step="0.05" value="1">

                </div>

                <div class="videoWrapper">
                    <video id="myVideo" class="custom-video" autoplay="" loop="" muted="" poster="{{asset('assets/videos/1.jpg')}}" >
                        <source src="{{asset('assets/videos/Waves.mp4')}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="overlay"></div>
            </section>







            <section class="section" id="about">
                <div class="container-fluid">
                    <div class="row" >
                        <div class="col-lg-6 col-12 custom-col"  >
                            <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                                <h2 class="mb-3" data-aos="fade-up">Excellence<br>Integrity<br>Customer-Centricity</h2>

                                <p class="me-4" data-aos="fade-up" data-aos-delay="300">
                                    Diverse team with experience<br> in various technology fields.
                                    <br>
                                    <button class="btn btn-primary mt-3 custom-button">Our Company</button>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 "style="background-image: url({{asset('assets/images/home/plan-map-target-line-art-code-fruit-labirinth-snak-upscaled.png')}}) ;background-size: cover;" alt="Your Image" class="img-fluid " data-aos="fade-up" data-aos-delay="300" >
                        </div>

                    </div>
                </div>
                <div class="container-fluid " style="background-image: url({{asset('assets/images/home/daq9.jpg')}}) ;background-size: cover;">
                    <div class="row" >
                        <div class="col-lg-6 col-12 custom-col " >
                            <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                                <h2 class="mb-3" data-aos="fade-up">Excellence<br>Integrity<br>Customer-Centricity</h2>

                            </div>
                        </div>

                    </div>
                </div>

            </section>


            <section class=" contact section-padding" id="contact">
                    <div class="container-fluid">
                    <div class="row">

            <!-- Contact Form (Left Column) -->
            <div class="col-lg-7 col-12 mx-auto">
                <h2 style=" padding-top: 4rem;" class="mb-4 " data-aos="fade-up">Don't be shy, write to us</h2>

                <form action="{{ route('send.email') }}" method="post" class="contact-form" role="form" data-aos="fade-up">
                    @csrf
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
                        </div>
                        <div class="col-lg-5 col-12">
                            <label for="email" class="form-label">Email <sup class="text-danger">*</sup></label>
                            <input type="email" name="email" id="email" pattern="[^@]*@[^@]*" class="form-control" placeholder="Email address" required>
                        </div>
                        <div class="col-12 my-4">
                            <label for="message" class="form-label">How can we help?</label>
                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Tell us about the project" required></textarea>
                        </div>
                        <div style=" padding-bottom: 3rem;" class="col-lg-5 col-12 mx-auto mt-4">
                            <button  type="submit" class="form-control">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Google Map (Right Column) -->
            <div class="col-lg-3 col-12 custom-col" >

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12780.595571605318!2d3.0133308112610435!3d36.79098035599249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fb3dda66f295d%3A0x8b6125accbab9cd8!2sJodhoor%20Solutions!5e0!3m2!1sfr!2sdz!4v1692891272544!5m2!1sfr!2sdz" class="map-iframe"   allowfullscreen="" loading="lazy"></iframe>

            </div>

        </div>
    </div>
            </section>


        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h5 class="text-white">
                            <i class="bi-geo-alt-fill me-2"></i>
                            Jodhoor, Bouzareah,alger,Algérie
                        </h5>

                        <a href="mailto:info@company.com" class="custom-link mt-3 mb-5">
                            info@company.com
                        </a>
                    </div>

                    <div class="col-6">
                        <p class="copyright-text mb-0">Copyright © Jodhoor


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
        </footer>
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
        <style>


    /* Define a different height for col-12 */

            /* Style for the modal header */
            .modal-header {
                background-color: #f8f9fa;
                border-bottom: none;
            }

            /* Style for the modal content */
            .modal-content {
                border-radius: 10px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            /* Style for the modal body */
            .modal-body {
                padding: 20px;
                text-align: center;
            }

            /* Style for the modal title */
            .modal-title {
                font-size: 24px;
                color: #333;
            }

            /* Style for the close button */
            .btn-close {
                color: #aaa;

            }

            /* Style for the success message */
            .success-message {
                font-size: 18px;
                color: #333;
            }



            input[type="range"] {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width:auto;
    background-color: transparent;

    &:focus {
      outline-color: #f8b195;
    }
  }


  input[type="range"]::-webkit-slider-runnable-track {
    -webkit-appearance: none;
    appearance: none;
    height: 3px;
    background: rgb(246, 114, 128);
    background: -webkit-linear-gradient(
      left,
      rgba(246, 114, 128, 1) 0%,
      rgba(192, 108, 132, 1) 50%,
      rgba(53, 92, 125, 1) 100%
    );
    background: linear-gradient(
      to right,
      rgba(246, 114, 128, 1) 0%,
      rgba(192, 108, 132, 1) 50%,
      rgba(53, 92, 125, 1) 100%
    );
    filter: progid:DXImageTransform.Microsoft.gradient(
      startColorstr="#f67280",
      endColorstr="#355c7d",
      GradientType=1
    );
  }

  input[type="range"]::-moz-range-track {
    -moz-appearance: none;
    appearance: none;
    height: 3px;
    background: rgb(246, 114, 128);
    background: -moz-linear-gradient(
      left,
      rgba(246, 114, 128, 1) 0%,
      rgba(192, 108, 132, 1) 50%,
      rgba(53, 92, 125, 1) 100%
    );
    background: linear-gradient(
      to right,
      rgba(246, 114, 128, 1) 0%,
      rgba(192, 108, 132, 1) 50%,
      rgba(53, 92, 125, 1) 100%
    );
    filter: progid:DXImageTransform.Microsoft.gradient(
      startColorstr="#f67280",
      endColorstr="#355c7d",
      GradientType=1
    );
  }

  input[type="range"]::-ms-track {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    height: 3px;
    background: rgb(246, 114, 128);
    background: -moz-linear-gradient(
      left,
      rgba(246, 114, 128, 1) 0%,
      rgba(192, 108, 132, 1) 50%,
      rgba(53, 92, 125, 1) 100%
    );
    background: -webkit-linear-gradient(
      left,
      rgba(246, 114, 128, 1) 0%,
      rgba(192, 108, 132, 1) 50%,
      rgba(53, 92, 125, 1) 100%
    );
    background: linear-gradient(
      to right,
      rgba(246, 114, 128, 1) 0%,
      rgba(192, 108, 132, 1) 50%,
      rgba(53, 92, 125, 1) 100%
    );
    filter: progid:DXImageTransform.Microsoft.gradient(
      startColorstr="#f67280",
      endColorstr="#355c7d",
      GradientType=1
    );
  }

  input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  border: 2px solid #f8b195;
  border-radius: 50%;
  height: 20px;
  width: 20px;
  position: relative;
  bottom: 8px;
  background: #222
    url("http://codemenatalie.com/wp-content/uploads/2019/09/slider-thumb.png")
    center no-repeat;
  background-size: 50%;
  box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.4);
  cursor: grab;

    &:active {
      cursor: grabbing;
    }
}


  input[type="range"]::-moz-range-thumb {
    -moz-appearance: none;
    appearance: none;
    border: 2px solid #f8b195;
    border-radius: 50%;
    height: 20px;
    width: 20px;
    position: relative;
    bottom: 8px;
    background: #222
      url("http://codemenatalie.com/wp-content/uploads/2019/09/slider-thumb.png")
      center no-repeat;
    background-size: 50%;
    box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.4);
    cursor: grab;

    &:active {
      cursor: grabbing;
    }
  }


  input[type="range"]::-ms-thumb {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border: 2px solid #f8b195;
    border-radius: 50%;
    height: 20px;
    width: 20px;
    position: relative;
    bottom: 8px;
    background: #222
      url("http://codemenatalie.com/wp-content/uploads/2019/09/slider-thumb.png")
      center no-repeat;
    background-size: 50%;
    box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.4);
    cursor: grab;

    &:active {
      cursor: grabbing;
    }
  }
        </style>

        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/aos.js')}}"></script>
        {{-- <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>

        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/magnific-popup-options.js')}}"></script> --}}
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
    const video = document.getElementById('myVideo');

    const speedValue = document.getElementById('speedValue');

    const slider = document.getElementById("speed");
    let lastValue = slider.value;

    slider.addEventListener("input", function(event) {
        // Mettre à jour la valeur enregistrée à chaque modification du slider
        lastValue = event.target.value;
        video.playbackRate = lastValue;
    });

    slider.addEventListener("change", function(event) {
        // La valeur enregistrée sera mise à jour uniquement lorsque le slider est relâché

        updateDatabase(lastValue);
    });

    function updateDatabase(speed) {
        var formData = new FormData();
            formData.append('speed', speed);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "/video/submit",
                data: formData,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {

                    console.log(`Updating database with speed: ${response.speed}`);

                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });

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
        customNavbare.style.display = 'flex'; // Show the custom navbar
    });
    </script>


    </body>
</html>
