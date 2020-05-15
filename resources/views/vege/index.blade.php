 @extends('layouts.app')

 @section('content')
        <!-- <div class="flex-center position-ref full-height">    
            <div class="content">
                <div class="title m-b-md">
                    Vegan Food List Order
                </div> -->
            {{-- <p>{{ $name }}</p>
            <p>{{ $age }}</p> --}}

              {{-- @for($i = 0; $i < count($pizzas); $i++)
               <p> {{ $pizzas[$i]['type'] }}</p>
              @endfor --}}
      <div class="wrapper pizza-index">
        <h1>Vegan Food Order</h1>

              @foreach($pizzas as $pizzass)
                <div class="pizza-item">
                  <img src="/img/vegan.png" alt="vegan food">
                  <h4><a href="/vege/{{ $pizzass ->id}}">{{ $pizzass->name}} </a></h4>
                </div>
              @endforeach

        </div>     
            <!-- </div>
        </div> -->
@endsection   

