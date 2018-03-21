@extends('layouts.login')

@section('content')

<section  class="newsletter_section">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 text-center col-xs-12 col-md-8" data-aos="fade-up">
                <h1 class="newsletter-title">Iniciar sesión</h1>
                <div class="newsletter_form">
                    <form>
                        <div class="input-group input-group-lg newsletter col-md-12 col-sm-12">
                            <input type="email" name="email" class="form-control" placeholder="Correo electronico">
                        </div>
                        <br>
                        <div class="input-group input-group-lg newsletter col-md-12 col-sm-12">
                            <input type="password" name="password" class="form-control" placeholder="Contraseña">
                        </div>

                        <div class="text-center">
                            <span class="input-group-btn text-center">
                                <button type="submit" name="subscribe" class="btn-newsletter-bg">Suscribete</button>
                            </span> 
                        </div>

                        <div id="mce-responses">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>
                    </form>
                </div>
            </div>END COL
        </div>END ROW
    </div>END CONTAINER
</section>

@endsection