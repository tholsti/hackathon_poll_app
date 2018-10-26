@extends('layouts.app')
@section('content')

  <h1>All the polls</h1>
  
  @foreach($polls as $poll)
  <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{ $poll->name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted"># {{ $poll->code }}</h6>
        <p class="card-text">Description: {{ $poll->description }}</p>
        
        {{-- @foreach($options as $option) --}}
          {{-- {{ $poll->option->text }}   --}}
        {{-- @endforeach --}}
        
        <p class="card-text">Updated at: {{ $poll->updated_at }}</p>
        <p class="card-text">Created at: {{ $poll->created_at }}</p>
        <p class="card-text"></p>
        
        {{-- LINK to show/{id} --}}
        <a href="show/{{ $poll->id }}" class="card-link">Vote</a>
      </div>
    </div>
  @endforeach
@endsection
