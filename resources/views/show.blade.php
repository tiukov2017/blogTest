@extends('bloq')


@section('content')

    <div class="col-sm-8 blog-main">


        <hr>

    @foreach($bloqs as $post)
        @if($post->id > 0 and $post->id < 9999999)
            <div class="blog-post">

                <h5 class="blog-post-title"> {{'title : '.$post->title }} </h5>


                <p class="blog-post-meta">{{$post->created_at}}</p>


                <h8 class="blog-post-title">{{ 'body : '.$post->body }}</h8>

            </div><!-- /.blog-post -->
            <hr> <br>
        @endif
        @endforeach
    </div>

@endsection

