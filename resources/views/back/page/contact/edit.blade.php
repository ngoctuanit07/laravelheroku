@extends('back.layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ __('contact.View') }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contacts.index') }}"> {{ __('contact.Back') }}</a>
            </div>
        </div>
    </div>


    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    {!! Form::model($contact, ['method' => 'PATCH','route' => ['contacts.update', $contact->id]]) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('contact.Names') }}:</strong>
                {!! Form::text('name', null, array('class' =>'form-control'))
                !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('contact.Title') }}:</strong>
                {!! Form::text('title', null, array('class' =>'form-control'))
                !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('contact.Content') }}:</strong>
                <textarea name="content" id="kt-ckeditor-1">
                    {!! $contact->content !!}
                </textarea>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    @endsection
