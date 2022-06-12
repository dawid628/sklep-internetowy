@extends('app')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nazwa produktu</th>
    </tr>
  </thead>    
  @php ($i = 1)
@foreach ($products as $product)
<tbody>
    <tr>
      <td>{{ $i }}</td>
      <td>{{\App\Models\Product::where('id', $product->product_id)->first()->name}}</td>
      @php ($i++)
    </tr> 
  </tbody> 
@endforeach
</table>
@endsection