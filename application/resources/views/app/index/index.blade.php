@extends('layouts.master')

@section('title', 'Index')

@section('head')
@parent
<link type="text/css" rel="stylesheet" href="{{ asset('modules/app/index/css/index.css') }}" />
@endsection

@section('content')

<div class="bg-shadow"></div>
<div class="text-center">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">

        <header class="masthead mb-auto m-">
            <div class="inner">
                <h3 class="masthead-brand">LaRose</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="#">Inicial</a>
                </nav>
            </div>
        </header>

        <main role="main" class="inner cover mt-5">


            <div class="row">
                <div class="col-12">
                    <h1 class="cover-heading mb-4">Conheça nossos serviços.</h1>
                </div>
            </div>

            <div class="row">


                <div class="col">

                    <div class="card text-white mb-2 border-0" style="width: 18rem;">
                        <div class="card-title p-3 text-light" style="font-size:80pt;">  <i class="fas fa-5 fa-cut"></i> </div>
                        <div class="card-body">
                            <h5 class="card-title">Cabelo</h5>
                            <p class="card-text">Nós temos uma equipe completa de cabeleireiros.</p>
                        </div>
                    </div>

                </div>


                <div class="col">

                    <div class="card text-white border-0 mb-2" style="width: 18rem;">
                        <div class="card-title p-3 text-light" style="font-size:80pt;">  <i class="far fa-smile-wink"></i> </div>
                        <div class="card-body">
                            <h5 class="card-title">Maquiagem</h5>
                            <p class="card-text">Uma equipe te esperando para maquiar.</p>
                        </div>
                    </div>

                </div>



                <div class="col">

                    <div class="card text-white border-0 mb-2" style="width: 18rem;">
                        <div class="card-title p-3 text-light" style="font-size:80pt;"> <i class="fas fa-hands"></i> </div>
                        <div class="card-body">
                            <h5 class="card-title">Manicure</h5>
                            <p class="card-text">Uma equipe completa para mão e unhas.</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-6 mx-auto mt-3">
                    <a href="/login" class="btn horario btn-lg text-white">Agendar
                        Horário</a>
                </div>
            </div>





        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">

            </div>
        </footer>

    </div>
</div>


@endsection


@section('scripts')
@parent

@endsection