@extends('back.template')

@section('head')

    {!! HTML::style('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') !!}

@endsection

@section('main')

    @include('back.partials.entete', ['title' => trans('back/blog.dashboard'), 'icon' => 'pencil', 'fil' => link_to('blog', trans('back/blog.posts')) . ' / ' . trans('back/blog.creation')])

    <div class="col-sm-12">
        @yield('form')

            <div class="form-group checkbox pull-right">
                <label>
                    {!! Form::checkbox('active') !!}
                    {{ trans('back/blog.published') }}
                </label>
            </div>
            <div class="form-group">
                {!! Form::label('Image') !!}
                {!! Form::file('image', null) !!}
            </div>
            {!! Form::controlBootstrap('text', 0, 'title', $errors, trans('back/blog.title')) !!}
<!--             {!! Form::controlBootstrap('text', 0, 'section', $errors, trans('back/blog.section')) !!}
            {{ Form::select('section id', $sections, null, ['class' => 'form-control']) }} -->
            <div class="form-group">
                {!! Form::label('Section(multiple)') !!}
                <select class="selectpicker" multiple>
                @foreach ($sections as $sect)
                  <option value="{{ $sect->id }}">{{ $sect->name }}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group {!! $errors->has('slug') ? 'has-error' : '' !!}">
                {!! Form::label('slug', trans('back/blog.permalink'), ['class' => 'control-label']) !!}
                {!! url('/') . '/blog/' . Form::text('slug', null, ['id' => 'permalink']) !!}
                <small class="text-danger">{!! $errors->first('slug') !!}</small>
            </div>

            {!! Form::controlBootstrap('textarea', 0, 'summary', $errors, trans('back/blog.summary')) !!}
            {!! Form::controlBootstrap('textarea', 0, 'content', $errors, trans('back/blog.content')) !!}
            {!! Form::controlBootstrap('text', 0, 'tags', $errors, trans('back/blog.tags'), isset($tags)? implode(',', $tags) : '') !!}

            {!! Form::submitBootstrap(trans('front/form.send')) !!}

        {!! Form::close() !!}
    </div>

@endsection

