@extends('layouts.app')

@section('content')


CREATE NEW POLL

<form action="{{ action('PollController@store')}}" method="post">
  @csrf
  <label>Name of the poll: </label><input type="text" name="name"><br>
  <label>Description:</label><textarea name="description" cols="30" rows="10"></textarea><br>
  
  <label>Option 1: </label><input type="text" class="options" name="option_1"><br>
  <label>Option 2: </label><input type="text" class="options" name="option_2"><br>
  <span id="option_space"> </span>
  <span id="new_option"><b>Add new option</b></span><br>
  <button type="submit">SUBMIT</button>
  
</form>
<script>
      let add_button = document.getElementById("new_option");
      add_button.addEventListener('click', () => {
        let num_of_options = document.getElementsByClassName('options').length;
        let space = document.getElementById('option_space');
        space.innerHTML += 
        '<label>Option '
          + (num_of_options + 1)
          + ': </label><input type="text" class="options" name="option_'
          + (num_of_options)
          +'"><br>'
        console.log("click!");

        });
</script>

@endsection

