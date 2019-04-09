@extends('layouts.master')

@section('title', 'Index')

@section('head')
@parent
<link type="text/css" rel="stylesheet" href="{{ asset('modules/app/login/css/login.css') }}" />
@endsection

@section('content')

<div class="bg-shadow"></div>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9 mt-5">

        <div class="card o-hidden bg-light border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
        
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-dark mb-4">LaRose</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="email" class="form-control form-control" id="nome_usuario" placeholder="Nome de Usuário ou Email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control" id="senha_usuario" placeholder="Senha">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="lembrar_usuario">
                        <label class="custom-control-label" for="customCheck">Continuar conectado</label>
                      </div>
                    </div>
                    <a href="index.html" class="btn btn-primary btn-block">
                      Login
                    </a>
                    
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Esqueceu a senha ?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Criar uma conta</a>
                  </div>

                  <div class="text-center">
                    <a class="small" href="/">Voltar ao site</a>
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


@section('scripts')
@parent

@endsection