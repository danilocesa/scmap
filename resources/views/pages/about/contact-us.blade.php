@extends('layouts.master')
@section('content')
@section('title', 'Contact Us')
<div class="column row">
  <div class="ui segment column">
    <h1 class="ui dividing header">Contact Us</h1>
    <p>If you have any inquiries or questions about SCMAP&#039;s events and activities, you can contact the SCMAP Secretariat. You can do so through the following:</p><p>Snail mail: 35 East Capitol Drive, Barangay Kapitolyo, Pasig City 1605 Philippines</p><p>Telephone: (632) 636.3128</p><p>Email: Use the form below!</p>
    <form class="ui form basic segment">
      <div class="fields">
        <div class="eight wide field">
          <label>Name:</label>
          <input type="text" placeholder="Full Name">
        </div>            
      </div>
      <div class="ui hidden divider"></div>
      <div class="fields">
        <div class="eight wide field">
          <label>Email:</label>
          <input type="text" placeholder="Email Address">
        </div>
      </div>
      <div class="ui hidden divider"></div>
       <div class="fields">
        <div class="eight wide field">
          <label>Subject:</label>
          <input type="text" placeholder="Subject">
        </div>
      </div>
      <div class="ui hidden divider"></div>
       <div class="fields">
        <div class="eight wide field">
          <label>Message:</label>
          <textarea></textarea>
        </div>
      </div>
      <div class="ui hidden divider"></div>
      <div class="ui submit button">Submit</div>
    </form>
  </div>
</div>
@stop