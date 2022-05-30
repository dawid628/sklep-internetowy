@extends('app')
@section('content')
    @foreach ($cart as $item)
    <form method="" action="{{ route('destroycart', ['id' => $item->id]) }}">
        {{ $item['product'] }}
        <button class="btn btn-outline-dark">X</button>
    </form> 
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nazwa produktu</th>
      <th scope="col">Cena</th>
      <th scope="col">Opcje</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="#">Usuń</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td><a href="#">Usuń</a></td>
    </tr>
    <!-- {{ route('destroyproduct', $product->id) }} -->
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td><a href="#">Usuń</a></td>
    </tr>
  </tbody>
</table>
    @endforeach
@endsection