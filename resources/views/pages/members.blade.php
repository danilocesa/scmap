@extends('layouts.master')
@section('content')
@section('title', 'Members')
<div class="column row">
  <div class="ui segment column">
    <h1 class="ui dividing header">Members</h1>
      <?php echo nl2br($desc[0]->description); ?>
  </div>
</div>

@stop