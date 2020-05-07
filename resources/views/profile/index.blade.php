@extends('layouts.front')
@section('title', 'プロフィール')

@section('content')
    <div class="container">
        <hr color="#009900">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="title p-2">
                                    <strong>{{ str_limit($headline->name, 70) }}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ str_limit($headline->gender, 50) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ str_limit($headline->hobby, 650) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ str_limit($headline->introduction, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#009900">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y/m/d') }}
                                </div>
                                <div class="title">
                                    <strong>{{ str_limit($post->name, 50) }}</strong>
                                </div>
                                <div class="body mt-3">
                                    {{ str_limit($post->gender, 50) }}
                                </div>
                                <div class="title">
                                    {{ str_limit($post->hobby, 150) }}
                                </div>
                                <div class="title">
                                    {{ str_limit($post->introduction, 150) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#009900">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
              