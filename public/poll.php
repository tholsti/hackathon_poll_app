<form action="{{ action('PollController@store')}}" method="post">
  @csrf
  <label>Name of the poll: </label><input type="text" name="name"><br>
  <label>Description:</label><textarea name="description" cols="30" rows="10"></textarea><br>
  
  <label>Option 1: </label><input type="text" name="1"><br>
  <label>Option 2: </label><input type="text" name="2"><br>

  <button type="button" id="new_option">Add new option</button><br>
  <button type="submit">SUBMIT</button>

</form>

<script>
  let add_button = document.getElementById('new_option');
  
  add_button.addEventListener('click', () => {
    console.log('click!');
    }
  );
  console.log(add_button);
</script>