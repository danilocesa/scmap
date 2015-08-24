@extends('layouts.master')
@section('content')
@section('title', 'Homepage')
	<div class="two column row">
    <!-- Accordion -->
    <div class="ten wide column">
      <div class="accordian">
        <ul>
          <li>
            <div class="image_title">
              <a href="#">About SCMAP</a>
            </div>
            <div class="ui secondary segment accordian-content">
              <h3>2015 SCMAP Suppy Chain Conference</h3>
              <h1>Go World Class</h1>
              <h2>Paying the road to tomorrow is supply chain</h2>
              <p>17-18 September 2015 EDSA Shagri-la Manila</p>
              <button>Be a Delegate</button>
            </div>  
            <img src="images/sem5.png"/>
          </li>
          <li>
            <div class="image_title">
              <a href="#">Research</a>
            </div>
               <div class="ui secondary segment accordian-content">
                <h3>2015 SCMAP Suppy Chain Conference</h3>
                <h1>Go World Class</h1>
                <h2>Paying the road to tomorrow is supply chain</h2>
                <p>17-18 September 2015 EDSA Shagri-la Manila</p>
                <button>Be a Delegate</button>
              </div>  
              <img src="images/sem4.jpg"/>
          </li>
          <li>
            <div class="image_title">
              <a href="#">Advocacies</a>
            </div>
               <div class="ui secondary segment accordian-content">
                <h3>2015 SCMAP Suppy Chain Conference</h3>
                <h1>Go World Class</h1>
                <h2>Paying the road to tomorrow is supply chain</h2>
                <p>17-18 September 2015 EDSA Shagri-la Manila</p>
                <button>Be a Delegate</button>
              </div>  
              <img src="images/sem3.jpg"/>
          </li>
          <li>
            <div class="image_title">
              <a href="#">Member Portal</a>
            </div>
               <div class="ui secondary segment accordian-content">
                  <h3>2015 SCMAP Suppy Chain Conference</h3>
                  <h1>Go World Class</h1>
                  <h2>Paying the road to tomorrow is supply chain</h2>
                  <p>17-18 September 2015 EDSA Shagri-la Manila</p>
                  <button>Be a Member</button>
                </div>  
              <img src="images/sem2.jpg"/>
          </li>
          <li>
            <div class="image_title">
              <a href="#">2015 Conference</a>
            </div>
               <div class="ui secondary segment accordian-content">
                  <h3>2015 SCMAP Suppy Chain Conference</h3>
                  <h1>Go World Class</h1>
                  <h2>Paying the road to tomorrow is supply chain</h2>
                  <p>17-18 September 2015 EDSA Shagri-la Manila</p>
                  <button>Be a Delegate</button>
                </div>  
              <img src="images/sem1.jpg"/>
          </li>
        </ul>
      </div>
    </div><!-- End Accordion -->

    <!--News/Events-->
    <div class="ui segment six wide column news-events">
      <h2 class="ui dividing header">Latest News</h2>
       <div class="ui bulleted list">
          <div class="item">
            <a href="#">2015 SCMAP Supply Chain Conference theme announced</a>
            <p class="nes-date">(16 May 2015)</p>
          </div>
           <div class="item">
            <a href="#">SCMAP,Fountainhead sign website aggrement.</a>
            <p class="nes-date">(16 May 2015)</p>
          </div>
        </div>
        <a href="#" id="more-news"><p>more news>></p></a>
      <h2 class="ui dividing header">Upcoming Events</h2>
       <div class="ui bulleted list">
          <div class="item">
            <a href="#">Supply Chain Mornings: Revisting Supply Chain Management As A Competitive Business Strategy</a>
            <p class="nes-date">(19 June 2015)</p>
          </div>
           <div class="item">
            <a href="#">General Membership Meeting.</a>
            <p class="nes-date">(19 June 2015)</p>
          </div>
        </div>
        <a href="#" id="more-events"><p>more events>></p></a>  
    </div><!--End News/Events -->

  </div> 
@stop