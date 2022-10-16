@extends('layout')

@section('titulo')
    Lista de <?= $list['title'] ?>
@endsection

@section('main')
    <br>
    <a class="btn btn-primary" href="/lists/<?= $list['id'] ?>/add">Adicionar</a>
    <br>
    <br>
    @foreach ($allItems as $item)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$item->name}}</h5>
            </div>
        </div>
    @endforeach
@endsection