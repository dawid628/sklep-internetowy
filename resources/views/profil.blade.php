@extends('app')
@section('content')
        <!-- Section-->
        <section class="py-5">
        {{ $user->name }}
        {{ $user->email }}
        <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="wpisz nowa nazwe">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="wpisz nowy email">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
        </section>
     @endsection