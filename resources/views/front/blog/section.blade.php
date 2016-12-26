@extends('front.template')

@section('main')


    <div class="row">

        @foreach($posts as $post)
            <div class="box">
                <div class="col-lg-12 text-center">
                    <h2>{{ $post->title }}
                    <br>
                    <small>{!! $post->user->username . ' ' . trans('front/blog.on') . ' ' . strstr($post->created_at, ' ', true) . ($post->created_at != $post->updated_at ? trans('front/blog.updated') . strstr($post->updated_at, ' ', true) : '') !!}</small>
                    </h2>
                </div>
                <div class="col-lg-12">
                    <p>{!! $post->summary !!}</p>
                </div>
                <div class="col-lg-12 text-center">
                    {!! link_to('blog/' . $post->slug, trans('front/blog.button'), ['class' => 'btn btn-default btn-lg']) !!}
                    <hr>
                </div>
            </div>
        @endforeach
     

    </div>

@endsection

