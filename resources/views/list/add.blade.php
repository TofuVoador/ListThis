@extends('layout')

@section('titulo')
    Adicionar
@endsection

@section('main')
    <br>
    <div class="container">
        <form method="post">
            @csrf
            <input type="text" class="form-controll" name="title">   
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>
    </div>
@endsection