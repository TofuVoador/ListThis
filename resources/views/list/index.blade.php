@extends('layout')

@section('titulo')
    Todas as Listas
@endsection

@section('main')
    <br>
    <a class="btn btn-primary" href="/lists/add">Adicionar</a>
    <br>
    <br>
    @foreach ($listas as $item)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                <a class="btn btn-primary" href="/lists/{{$item->id}}">Abrir</a>
            </div>
        </div>
    @endforeach
@endsection