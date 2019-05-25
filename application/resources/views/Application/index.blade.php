@extends('Layouts/master')

@section('header')
<link href="{{ asset('/css/modules/application/login.css') }}" rel="stylesheet">
@endsection

@section('title','Login')

@section('conteiner')

<div class="shadow"></div>

<login-larose></login-larose>

@endsection