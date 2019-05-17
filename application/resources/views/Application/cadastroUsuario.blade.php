@extends('Layouts/master')

@section('header')
<link href="{{ asset('/css/modules/application/cadastro.css') }}" rel="stylesheet">
@endsection

@section('title','Cadastro de Usuário')

@section('conteiner')

<div class="shadow"></div>
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
        <div class="card-body p-0 col-lg-12">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Cadastro de usuário</h1>
                        </div>
                        <form method="post" action="{{ route('make_cadastro') }}" class="user">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input required type="text" class="form-control form-control" name="nome"
                                        placeholder="Nome completo" value="{{ isset($nome) ? $nome : ''}}" >
                                </div>

                            </div>
                            <div class="form-group">
                                <input type="email" required class="form-control form-control" name="email"
                                    placeholder="E-mail" value="{{ isset($email) ? $email : '' }}">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" required minlength="6" class="form-control form-control" name="senha"
                                        placeholder="Senha">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" required minlength="6" class="form-control form-control"
                                        name="confirma_senha" placeholder="Confirme a senha">
                                </div>
                            </div>

                            @if($errors->any())

                            <div class="alert alert-warning text-center" role="alert">

                                @foreach($errors->all() as $error)
                                <li class="text-center">{{ $error }}</li>
                                @endforeach

                            </div>

                            @endif

                            @if(isset($sucesso))

                            @if($sucesso === true)
                            <div class="alert alert-success" role="alert">
                                <h6> Usuário cadastrado com sucesso </h6>
                            </div>
                            @else

                                @if(count($errors->all()) == 0)

                                <div class="alert alert-danger" role="alert">
                                <h6> Ocorreu um erro ao cadastrar, recarregue a página e tente novamente. Se o problema persistir entre em contato com o suporte técnico </h6>
                                </div>

                                @endif


                            @endif
                            @endif

                            <button type="subimit" class="btn btn-dark btn-block">
                                Cadastrar
                            </button>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">Login</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection