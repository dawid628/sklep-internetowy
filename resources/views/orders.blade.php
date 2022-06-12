@extends('app')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Numer zamówienia</th>
      <th scope="col">Data</th>
      <th scope="col">Opcje</th>
    </tr>
  </thead>    
  @php ($i = 1)
@foreach ($orders as $order)
<tbody>
    <tr>
      <td>{{ $i }}</td>
      <td>{{$order->id}}</td>
      <td>{{$order->created_at}}</td>
      <td><a href="/order/{{$order->id}}">Zobacz</a></td>
      @php ($i++)
    </tr> 
  </tbody> 
@endforeach
</table>
@endsection