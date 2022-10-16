@extends('layout')

@section('titulo')
    Adicionar
@endsection

@section('main')
    <br>
    <div class="container">
        <form method="post">
            @csrf
            <input type="number" class="form-controll" name="id" value="<?= $id ?>" disabled>
            <input type="text" class="form-controll" name="name">   
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>
    </div>
@endsection