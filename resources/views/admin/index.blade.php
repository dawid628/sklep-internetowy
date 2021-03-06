@extends('app')
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
            <h4>
                {{ session()->get('message') }}
            </h4>
        </div>
    @endif
    <h1 style="text-align:center;font-size:100px;">Panel administratora</h1>
      <div class="list-group" style="text-align: center;">
        <a href="{{ route('createproduct') }}" class="list-group-item list-group-item-action">Dodaj produkt</a>
        <a href="{{ route('admin.products') }}" class="list-group-item list-group-item-action">Wyświetl produkty</a>
        <a href="{{ route('admin.users') }}" class="list-group-item list-group-item-action">Wyświetl użytkowników</a>
      </div>
@endsection