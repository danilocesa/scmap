<?php 
$segment1 = Request::segment(1);
$urlAbout = array('about','about-history','contact-us'); 
$urlMember = array('members','member-requirements'); 
$urlEvents = array('events','events-conference','events-lic','events-vismin','events-gmm','events-fellowship'); 

?>
<div class="ui vertical basic segment page grid menu-header">
<ul class="ui text eight item menu menu-header-item">
  <li class="<?php echo ($segment1 === NULL) ? 'active' : ''; ?> item"><a href="{{  URL::to('/') }}">Home</a></li>
  <li class="<?php echo (in_array($segment1,$urlAbout)) ? 'active' : ''; ?> item">
    <a href="about">About</a>
    <ul class="sub-menu">
      <li><a href="about-history">History</a></li>
      <li><a href="#">Board</a></li>
      <li><a href="contact-us">Contact Us</a></li>
    </ul>
  </li>
  <li class="item"><a href="#">News</a></li>
  <li class="<?php echo (in_array($segment1,$urlMember)) ? 'active' : ''; ?> item">
    <a href="members">Members</a>
    <ul class="sub-menu">
      <li><a href="#">Benefits</a></li>
      <li><a href="member-requirements">Requirements</a></li>
      <li><a href="#">Download</a></li>
      <li><a href="#">List</a></li>
    </ul>
  </li>
  <li class="<?php echo (in_array($segment1,$urlEvents)) ? 'active' : ''; ?> item">
    <a href="events">Events</a>
     <ul class="sub-menu">
      <li><a href="events-conference">Conference</a></li>
      <li><a href="events-lic">Lic</a></li>
      <li><a href="events-vismin">Vismin</a></li>
      <li><a href="#">Ssce</a></li>
      <li><a href="#">Ceoforum</a></li>
      <li><a href="events-gmm">Gmm</a></li>
      <li><a href="events-fellowship">Fellowship</a></li>
    </ul>
  </li>
  <li class="item"><a href="#">Advocacies</a></li>
  <li class="item"><a href="#">Academe</a></li>
  <li class="item"><a href="#">Research</a></li>
</ul>
</div>