@extends('layouts.app')

@section('content')


<h1>EDIT YOUR POLL</h1>

<form action="{{ action('PollController@update', [$poll->id]) }}" method="post">
  @csrf
<label>Name of the poll: </label><input type="text" name="name" value="{{$poll->name}}"><br>
<label>Description:</label><br><textarea name="description" cols="30" rows="10">{{$poll->description}}</textarea><br>

@foreach ($options as $key => $option)
<label>Option {{($key+1)}}: </label><input type="text" class="options" name="option[{{$key}}]" value="{{$option->text}}"><br>
  
@endforeach
  
  <span id="option_space"> </span>
  <span id="new_option"><b>Add new option</b></span><br>
  <button type="submit">UPDATE</button>
  
</form>
<script>
      let add_button = document.getElementById("new_option");
      add_button.addEventListener('click', () => {
        let num_of_options = document.getElementsByClassName('options').length;
        let space = document.getElementById('option_space');
        space.innerHTML += 
        '<label>Option '
          + (num_of_options + 1)
          + ': </label><input type="text" class="options" name="option['
          + (num_of_options)
          +']"><br>'
        console.log("click!");

        });
</script>

@endsection

