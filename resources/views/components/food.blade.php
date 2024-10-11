<div class="modal" id="food-modal" style="display:none">
    @if(auth()->user()->foods()->count() > 0)
        <h2>Your preference food</h2>
        @foreach(auth()->user()->foods as $index => $food)
            <p>{{$index+1}}. {{$food->name}}</p>
        @endforeach
    @endif
    <form action='{{route('add-food')}}' method="POST">
        @csrf
        <div>
            <label for="food_name">Enter food name: </label>
            <input type="text" id="food_name" name="food_name">   
        </div>
        <button type="submit">Add</button>
    </form>
</div>