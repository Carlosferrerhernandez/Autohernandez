@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #222"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="text-center">
                        {{-- <h3 class="text-center">BIENVENIDO</h3> --}}
                        <img src="{{asset ('img/logo-negro.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
