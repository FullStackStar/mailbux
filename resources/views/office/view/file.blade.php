@extends('office.layout')
@section('content')

    <div class="card mb-3">
        <div class="card-body">

            <h4 class="mb-4">{{$media_file->title}}</h4>


            @if($media_file->extension)

                @switch($media_file->extension)

                    @case('jpg')
                    @case('jpeg')
                    @case('png')
                    @case('gif')
                        <img alt="{{$media_file->title}}" src="{{config('app.url')}}/uploads/{{$media_file->path}}" class="img-fluid">
                        @break

                    @case('mp4')
                    @case('webm')
                    @case('ogg')

                        <video class="img-fluid rounded-3" controls>
                            <source src="{{config('app.url')}}/uploads/{{$media_file->path}}" type="video/{{$media_file->extension}}">
                        </video>

                        @break

                    @default

                        <div class="text-center">
                            <a class="btn btn-lg btn-primary" href="{{$base_url}}/office/download-media-file/{{$media_file->uuid}}">{{__('Download')}}</a>
                        </div>

                        @break



                @endswitch


            @endif



        </div>
    </div>


@endsection
