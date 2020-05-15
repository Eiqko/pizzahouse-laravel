@extends('layouts.app')

@section('content')
       <div class="wrapper create-pizza">
          <h1>Create a New Vegan list</h1>
          <form action="/vege" method="POST">
            @csrf
             <label for="name">Your name:</label>
             <input type="text" id="name" name="name">
             <label for="type">Choose Vegetable type:</label>
             <select name="type" id="type">
              <option value="steamed vegetable">Steamed Vegetable</option>
              <option value="ramp potatoes">Ramp Potatoes</option>
              <option value="greenie pizza">Greenie Pizza</option>
              <option value="roasted salad">Roasted Salad</option>
             </select>
             <label for="base">Choose Vegetable base:</label>
             <select name="base" id="base">
              <option value="borneo green">Borneo Green</option>
              <option value="indian river">Indian River</option>
              <option value="japanese island">Japanese Island</option>
              <option value="italiano breed">Italiano Breed</option>
             </select>
             <fieldset>
                <label>Add Extra Topping: </label>
                 <input type="checkbox" name="bonus[]" value="mushrooms">Mushrooms<br/>
                 <input type="checkbox" name="bonus[]" value="light sallad">Light Sallad<br/>
                 <input type="checkbox" name="bonus[]" value="spicy">Spicy<br/>
                 <input type="checkbox" name="bonus[]" value="Mayonaise">Mayonaise<br/>
             </fieldset>
             <input type="submit" value="Order Vegan">
          </form>
       </div>
@endsection   