@extends('layouts.app')

@section('content')


<h1>MANAGE YOUR POLLS</h1>

<a href="{{ action('PollController@create') }}">Create a new poll</a>

@foreach ($polls as $poll)

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $poll->name }}</h5>
      <h6 class="card-subtitle mb-2 text-muted"># {{ $poll->code }}</h6>
      <p class="card-text">Description: {{ $poll->description }}</p>
      
    <p class="card-text"><a href="{{action('PollController@edit', $poll->id)}}">Edit this poll</a>
      <p class="card-text"><a href="{{action('PollController@delete', $poll->id)}}">Delete this poll</a>

      <p class="card-text"></p>
    </div>
  </div>

@endforeach

@endsection

