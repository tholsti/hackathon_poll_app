@extends('layouts.app');
@section('content')

  <h2>Poll ID: {{ $poll->id }}</h2>

  <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{ $poll->name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted"># {{ $poll->code }}</h6>
        <p class="card-text">Description: {{ $poll->description }}</p>
        <p class="card-text">Updated at: {{ $poll->updated_at }}</p>
        <p class="card-text">Created at: {{ $poll->created_at }}</p>
        <p class="card-text"></p>
        
        <div class="options">
          @foreach ($options as $option)
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">

              <label class="custom-control-label" for="customCheck1"> 
                {{ $option->text }}
              </label>
            </div>
          @endforeach
        </div>
        
        <a href="/" class="card-link">Go back</a>
        <a href="#" class="card-link">Submit</a>
      </div>
  </div>

@endsection


