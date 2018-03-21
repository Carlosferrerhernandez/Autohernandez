@extends('layouts.login')

@section('content')

<section  class="newsletter_section">
    <div class="container">
        <div class="row">
            <div class="text-center col-xs-12 col-md-6 col-md-offset-3" data-aos="fade-up">
                <div class="text-center">
                    <img src="#" alt="" width="72" height="72">
                </div>
                <h1 class="newsletter-title">AUTOHERNANDEZ DE LA COSTA</h1>
                <div class="newsletter_form text-center">
                    <form>
                        <div class="form-label-group newsletter col-md-12 col-sm-12">
                            <input type="email" name="email" class="form-control" placeholder="Correo electronico">
                        </div>
                        <div class="form-label-group newsletter col-md-12 col-sm-12">
                            <input type="password" name="password" class="form-control" placeholder="Contraseña">
                        </div>
                        <div class="text-center">
                            <span class="input-group-btn">
                                <button type="submit" name="subscribe" class="btn-newsletter-bg">INGRESAR</button>
                            </span> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection