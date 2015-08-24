@extends('admin.layouts.master')

@section('title') Login @stop

@section('login-content')
    <div class="ui hidden divider"></div>
    <div class="ui hidden divider"></div>
    <div class="ui middle aligned center aligned grid" id="login-form">
        <div class="column">
            <h2 class="ui blue image header">
                <div class="content">
                    Administrator
                </div>
            </h2>
            {!! Form::open(array('action'=>'Admin\AdminController@postIndex','class'=>'ui form','id'=>'loginForm')) !!}
                <div class="ui stacked segment">
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            {!! Form::text('email','',array('placeholder'=>'E-mail address')) !!}
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            {!! Form::password('password',array('placeholder'=>'Password')) !!}
                        </div>
                    </div>
                    {!! Form::submit('Login',array('class'=>'ui fluid large blue submit button')) !!}
                </div>
            @if (count($errors) > 0)
                <div class="ui negative message">
                    <ul class="list">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="ui error message"></div>
            {!! Form::close() !!}
        </div>
    </div>

@stop