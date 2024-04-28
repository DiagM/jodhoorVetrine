<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{asset('assets/css/contact.css')}}" rel="stylesheet">
    <title>Contact</title>
</head>
<body>
    <div class="contact" id="contact" >
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('send.email') }}" method="post" class="contact-form" role="form" data-aos="fade-up">
                        @csrf
                        <div class="form-group">

                            <input type="text" class="form-control" name="name" id="name" placeholder="{{ __('TH136') }}" required>
                        </div>
                        <div class="form-group">

                            <input type="email" class="form-control" name="email" id="email" placeholder="email@example.com" required>

                        </div>
                        <div class="form-group">

                            <input type="text" class="form-control" name="phone" id="phone" placeholder="{{ __('TH137') }}" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" placeholder="..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('TH138') }}</button>
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
    @if(session('success'))
    <script>
        $(document).ready(function() {
            $('#successModal').modal('show');
        });
    </script>
@endif
</body>
</html>
