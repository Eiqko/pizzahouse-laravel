@extends('layouts.app')

@section('content')
    <div class="wrapper pizza-details">
       <h1>Order for {{$vegedet->name}}</h1>
       <p class="type">Type - {{$vegedet->type}}</p>
       <p class="type">Base - {{$vegedet->base}}</p>
       <p class="bonus">Extra Toppings: </p>
        <ul>
          @foreach($vegedet->bonus as $topping)
           <li>{{$topping}}</li>
           @endforeach
        </ul>
        <form action="{{ route('vege.destroy', vegedet->id)}}" method="POST">
         @csrf
         @method('DELETE')
           <button>Complete Order</button>
        </form>
    </div>
    <a href="/vege" class="back"><- Back to all Vegetables</a>
@endsection   