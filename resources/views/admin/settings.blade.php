@extends('admin.layouts.master')

@section('title') Settings @stop

@section('content')
    <div class="sixteen wide column">
    {!! Form::open(array('action'=>'Admin\AdminDashboard@postProfile','class'=>'ui form segment',
    'id'=>'profileSettings-form')) !!}
        <h2 class="ui header">
            <i class="user icon"></i>
            <div class="content">
                Profile Settings
            </div>
        </h2>
        <div class="ui divider"></div>
        @if(Session::has('flashSuccess'))
            <div class="ui positive message">
                <i class="close icon"></i>
                <div class="header">
                    {!! Session::get('flashSuccess') !!}
                </div>
            </div>
        @endif
        @if (count($errors) > 0)
            <div class="ui negative message">
                <ul class="list">
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="two fields">
            <div class="field">
                {!! Form::label('fullName','Full Name') !!}
                {!! Form::text('fullName',ucwords(auth()->user()->name),array('placeholder'=>'Full Name')) !!}
            </div>
            <div class="field">
                {!! Form::label('username','Username') !!}
                {!! Form::text('username',ucwords(auth()->user()->user_name),array('placeholder'=>'Sample')) !!}
            </div>
        </div>
        <div class="one field">
            <div class="field">
                {!! Form::label('email','Email') !!}
                {!! Form::text('email',Auth::user()->email,array('placeholder'=>'sample@email.com')) !!}
            </div>
        </div>
        <div class="two fields">
            <div class="field">
                {!! Form::label('password','Password') !!}
                {!! Form::password('password') !!}
            </div>
            <div class="field">
                {!! Form::label('password_confirmation','Confirm Password') !!}
                {!! Form::password('password_confirmation') !!}
            </div>
        </div>
        {!! Form::submit('Update',array('class'=>'ui blue submit button')) !!}
    {!! Form::close() !!}
    </div>
@stop