@extends('layouts.principal')

@section('head')
@stop

@section('content')
<div class="container" id="app">
    <div class="row">
        <div class="col-sm-6 offset-3">
            <div class="card">
                <div class="card-body">
                    @if(!empty($name) && !empty($correo))
                    <div class="alert alert-success" role="alert">
                        <p><strong>{{$name}},</strong> correo enviado a {{$correo}}</p>
                    </div>
                    @endif
                    <form action="{{url('/contact')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Escriba su nombre">
                            <small>Ingresa tu nombre completo</small>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" name="correo" id="correo" class="form-control" placeholder="Escriba su correo (micorreo@dominio.com)">
                        </div>
                        <div class="form-group">
                            <label for="tipo">Correo</label>
                            <select name="tipo" id="tipo" class="form-control">
                                <option v-for="item in items">@{{item.Descripcion}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="archivo">Archivo</label>
                            <input type="file" name="archivo" id="archivo" class="form-control">
                        </div>
                        <button type="submit" name="submit" class="btn btn-success">
                            Enviar
                            <i class="fas fa-arrow-alt-circle-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
@stop