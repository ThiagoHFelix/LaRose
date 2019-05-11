@extends('Layouts/master')

@section('header')
<link href="{{ asset('/css/modules/application/login.css') }}" rel="stylesheet">
@endsection

@section('title','Login')

@section('conteiner')

<div class="shadow"></div>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-5 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">LaRose</h1>
                                </div>
                                <form method="post" action="makeLogin" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control" id="usuario" name='usuario'
                                            placeholder="Nome de usuário ou e-mail" value="{{  isset($usuario) ? $usuario : '' }}" required autocomplete="on">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control" required id="senha" name="senha"
                                            placeholder="Senha">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input"
                                                id="continuar_conectado">
                                            <label class="custom-control-label" for="continuar_conectado">Continuar
                                                Conectado</label>
                                        </div>
                                    </div>
                                  
                                    @if($errors->any())

                                    <div class="alert alert-primary text-center" role="alert">

                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach

                                    </div>

                                    @endif

                                    <button type="submit" class="btn btn-dark btn-block">
                                        Login
                                    </button>
                                    <hr>
                                    <a class="btn btn-danger btn-block text-white ">
                                        <span class="fab fa-google"></span> Logar com Google
                                    </a>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('recuperar_senha') }}">Recuperar senha</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href=" {{ route('cadastro_usuario') }}">Criar conta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection