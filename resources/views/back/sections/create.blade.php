@extends('back.template')

@section('head')

    <style type="text/css">
        .table { margin-bottom: 0; }
        .panel-heading { padding: 0 15px; }
        .border-red {
            border-style: solid;
            border-width: 5px;
            border-color: red !important;
        }
    </style>

@endsection

@section('main')
    <div class="col-sm-12">
        {!! Form::open(['url' => 'section', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}   
        {!! Form::controlBootstrap('name', 0, 'name', $errors, trans('back/sections.name')) !!}
        {!! Form::submitBootstrap(trans('front/form.send')) !!}
        {!! Form::close() !!}
    </div>

@endsection