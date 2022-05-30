@extends('app')
@section('content')
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="images/{{$product->img}}"  width="450" height="200" alt="error" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><a class="show" href="{{ route('showproduct', $product->id) }}">{{ $product->name }}</a></h5>
                                    <!-- Product price-->
                                    Cena: {{$product->price}}PLN
                                </div>
                            </div>
                            <!-- Product actions-->
                            <form method="POST" action="{{ route('addcart', ['id' => $product->id]) }}">
                                @csrf
                                <input name="id" value="{{ $product->id }}" type="hidden"/>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-outline-dark mt-auto">Do koszyka</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
     @endsection