@extends('back.layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ __('setting.EditSetting') }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('setting.index') }}"> {{ __('setting.Back') }}</a>
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


    {!! Form::model($setting, ['method' => 'PATCH','route' => ['setting.update', $setting->id]]) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('setting.Name') }}:</strong>
                {!! Form::text('name', null, array('class' =>'form-control'))
                !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('setting.Keyword') }}:</strong>
                {!! Form::text('keyword', null, array('class' =>'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('setting.metatitle') }}:</strong>
                {!! Form::text('meta_title', null, array('class' => 'form-control'))
                !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('setting.metakeyword') }}:</strong>
                {!! Form::text('meta_keyword', null, array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('setting.metadescription') }}:</strong>
                {!! Form::text('meta_description', null, array('class' =>'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">{{ __('setting.Submit') }}</button>
            </>
        </div>
        {!! Form::close() !!}
    </div>
    @endsection
