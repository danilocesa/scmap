@extends('layouts.master')
@section('content')
@section('title', 'Events Vismin')
 <div class="column row">
  <div class="ui segment column">
    <h1 class="ui dividing header">Vismin</h1>
      <?php echo nl2br($desc[0]->description); ?>
  </div>
</div>
@stop