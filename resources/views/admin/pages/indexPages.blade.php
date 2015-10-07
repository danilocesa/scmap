@extends('admin.layouts.master')

@section('title') Pages List @stop

@section('content')
    <div class="ui segment fifteen wide column" >
        <h2 class="ui header">
            <i class="file outline icon"></i>
            <div class="content">
                Pages
            </div>
        </h2>
        <div class="ui divider"></div>
        <table class="ui striped blue six column padded selectable table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Update by</th>
                    <th>Update</th>
                    <th>Status</th>
                    <th>Go to page</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($adminPages as $adminPage)
                <tr>
                    <td>{{ $adminPage->title }}</td>
                    <td>{{ $adminPage->update_by }}</td>
                    <td>{{ $adminPage->updated_at > date('yyyy-MM-dd HH:mm:ss') ? $adminPage->updated_at : '' }}</td>
                    <td class="{{ $adminPage->state === 1 ? 'positive' : 'warning' }}">
                        @if($adminPage->state === 1)
                            Published
                        @else
                            Unpublished
                        @endif

                    </td>
                    <td>
                        <a href="{{ url($adminPage->link) }}" target="_blank" >Link</a>
                    </td>
                    <td>
                        <div class="ui relaxed horizontal list">
                            <div class="inline icon item openModal" data-content="Edit Description"
                                 data-variation="inverted mini" data-modal="edit-desc" data-id="{{ $adminPage->id }}">
                                <i class="ui large edit icon"></i>
                            </div>
                            <div class="inline icon item" data-content="Status"
                                 data-variation="inverted mini">
                                <i class="ui large unhide icon"></i>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="ui hidden divider"></div>

    {{--Page description modal--}}
    <div class="ui modal grid" id="edit-desc">
        <i class="close icon"></i>
        <h3 class="ui block header">
            Page Description
        </h3>
        <div class="ui hidden divider"></div>
        {!! Form::open(array('route'=>array('admin.pages.update',''),'class'=>'ui form',
        'id'=>'pageDescForm','method'=>'put')) !!}

        {!! Form::hidden('dataID', '',array('id'=>'pageDescID')) !!}
        {{--{!! Form::hidden('_method', 'PUT',array('id'=>'_method')) !!}--}}
        <div class="ui form sixteen wide column">
            <div class="field">
                {!! Form::textarea('pageDesc','',array('id'=>'page-desc')) !!}
                {{--<textarea id="page-desc" name="pageDesc"></textarea>--}}
            </div>
        </div>
        <div class="ui error message"></div>
        <div class="ui hidden divider"></div>
        <div class="ui hidden positive message" id="prompt-messages">
            <p>Successfully Update.</p>
        </div>
        <div class="ui">
            <div class="ui grey deny basic button">
                Cancel
            </div>
            {!! Form::submit('Update',array('class'=>'ui positive right button','id'=>'updatePageDesc')) !!}
            {{--<button class="ui positive right labeled icon button">--}}
                {{--Update--}}
                {{--<i class="checkmark icon"></i>--}}
            {{--</button>--}}
        </div>
        {!! Form::close() !!}
        <div class="ui hidden divider"></div>
    </div>

@stop
