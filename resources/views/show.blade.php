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
        <a href="#" class="card-link">See more</a>
        <a href="#" class="card-link">Vote</a>
      </div>
  </div>

@endsection


