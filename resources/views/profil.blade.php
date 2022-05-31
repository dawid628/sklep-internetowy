@extends('app')
@section('content')
        <!-- Section-->
        <section class="py-5">
        <form action="{{ route('updateprofile') }}" method="POST">
        {{ csrf_field() }}
  <div class="form-group">
    <label >Nazwa</label>
    <input name="name" class="form-control" id="exampleFormControlInput1" value="{{ $user->name }}">
  </div>
  <div class="form-group">
    <label >Email</label>
    <input name="email" class="form-control" id="exampleFormControlInput1" value="{{ $user->email }}">
  </div>
  <div class="form-group">
    <label>Data dołączenia do serwisu</label>
    <input class="form-control" id="exampleFormControlInput1" value="{{ $user->created_at }}" disabled>
  </div>
  <div class="form-group">
    <label >Ostatnia aktulizacja profilu</label>
    <input class="form-control" id="exampleFormControlInput1" value="{{ $user->updated_at }}" disabled>
  </div>
  <br>
  <button class="btn btn-outline-dark" type="submit">Zapisz</button>
</form>
        </section>
     @endsection