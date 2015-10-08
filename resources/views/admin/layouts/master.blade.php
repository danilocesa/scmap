<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title') | Administrator</title>
    <link href="{{ asset('../admin/assets/css/all.css') }}" rel="stylesheet">
</head>
<body>
<div class="ui active dimmer" id="page-loading">
    <div class="ui text loader">Loading</div>
</div>
@if(Request::is('admin'))
    <div class='main-content'>
    @yield('login-content')
    </div>
@else
<!-- Top Navigation -->
<div class="ui blue fixed inverted menu grid" id="admin-top-nav">
    <div class="ui container">
        <a href="{{ url('/') }}" class="header item">
           SCMAP
        </a>
        <div class="right menu" id="admin-profile">
            <div class="ui dropdown item">
                {{ ucwords(auth()->user()->user_name) }} <i class="dropdown icon"></i>
                <div class="menu">
                    <a href="{{ url('/admin/profile-settings') }}" class="item"> <i class="setting icon"></i>
                        Settings</a>
                    <a href="{{ url('/adminLogout') }}" class="item"> <i class="sign out icon"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Top Navigation -->
<div class="ui hidden divider"></div>
<!-- Sidebar -->
<div class="ui left fixed vertical inverted  menu " id="admin-sidebar">
    <a href="{{ url('/admin/dashboard') }}" class="item">
        <i class="dashboard icon"></i>
        Dashboard
    </a>
    <div class="ui left pointing dropdown link item">
        <i class="dropdown icon"></i>
        Page Management
        <div class="menu">
            <a  href="{{ url('/admin/pages') }}"  class="item">
                List of Pages
            </a>
            <div class="divider"></div>
            <a  href="{{ url('/admin/about') }}"  class="item">
                About
            </a>
            <a  href="{{ url('/admin/pages/news') }}"  class="item">
                News
            </a>
            <a  href="{{ url('/admin/pages/members') }}"  class="item">
                Members
            </a>
            <a  href="{{ url('/admin/pages/events') }}"  class="item">
                Events
            </a>
            <a  href="{{ url('/admin/pages/advocacies') }}"  class="item">
                Advocacies
            </a>
            <a  href="{{ url('/admin/pages/academe') }}"  class="item">
                Academe
            </a>
            <a  href="{{ url('/admin/pages/research') }}"  class="item">
                Research
            </a>
        </div>
    </div>
    <a class="item"> <i class="newspaper icon"></i> News</a>
    <a class="item"> <i class="users icon"></i> Members</a>
    <a class="item"> <i class="announcement icon"></i> Events</a>
    <a class="item"> <i class="settings icon"></i> Site Settings</a>
</div>
<!-- End Sidebar -->
<div class='ui page grid' id="admin-mainContent">
    <div class="ui hidden divider"></div>
    @yield('content')
</div>

@endif
<script src='{{ asset('../admin/assets/js/vanilla.js') }}'></script>
<script>
    function hideLoading() {
        document.getElementById("page-loading").className = "ui dimmer";
    }
    window.onload = hideLoading;
</script>

<script src='{{ asset('../admin/assets/js/app.js') }}'></script>
</body>
</html>