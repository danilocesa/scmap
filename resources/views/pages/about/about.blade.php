@extends('layouts.master')
@section('content')
@section('title', 'About')
<div class="column row">
  <div class="ui segment column">
    <h1 class="ui dividing header">About SCMAP</h1>
      <?php echo nl2br($desc[0]->description); ?>
    <p></p>
  </div>
</div>
@stop