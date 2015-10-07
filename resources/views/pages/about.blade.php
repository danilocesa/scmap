@extends('layouts.master')
@section('content')
@section('title', 'About')
<div class="column row">
  <div class="ui segment column">
    <h1 class="ui dividing header">About SCMAP</h1>
    <p>{{ $users[0]->description }}</p>
  </div>
</div>
@stop