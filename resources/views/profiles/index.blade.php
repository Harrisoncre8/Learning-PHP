@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://www.pngkey.com/png/full/15-150980_book-svg-logo-png-book-icon-wikimedia.png" 
                style="height: 150px;" class="rounded-circle" />
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline"> 
                <h1>{{ $user->username }}</h1> 
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"> <strong>{{ $user->posts->count() }}</strong> Posts </div>
                <div class="pr-5"> <strong>23k</strong> Followers </div>
                <div class="pr-5"> <strong>212</strong> Following </div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div> <a href="http://">{{ $user->profile->url ?? 'Link is currently not working' }}</a> </div>
        </div>
    </div>
    <div class="row pt-5">
        
        @foreach($user->posts as $post)
            <div class="col-4">
                <img src="/storage/{{ $post->image }}" class="w-100 h-100"/>
            </div>
        @endforeach
    </div>
</div>
@endsection
