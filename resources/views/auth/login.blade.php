@extends('layouts.login')

@section('content')

<section  class="newsletter_section">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <div class="newsletter_form">
                <img class="img-responsive center-block" src="img/gallery/inicio/logo_auto.png" alt="">
                <form class="col-xs-12 col-md-6 col-md-offset-3">
                    <div class="form-label-group newsletter col-md-12 col-sm-12">
                         <input type="email" name="email" class="form-control" placeholder="Correo electronico">
                    </div>
                    <div class="form-label-group newsletter col-md-12 col-sm-12">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña">
                    </div>
                    <div class="text-center">
                        <span class="input-group-btn">
                            <button type="submit" name="" class="btn-newsletter-bg">INGRESAR</button>
                        </span> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection