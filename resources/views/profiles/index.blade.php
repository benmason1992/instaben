@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://i.pinimg.com/originals/da/26/73/da26735ac703498f3fc8893f2e7751f5.jpg" style="height: 10rem;" class="rounded-circle">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add new post</a>
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }} </strong> posts</div>
                <div class="pr-5"><strong>1k</strong> followers</div>
                <div class="pr-5"><strong>10</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div class="pt-3">{{ $user->profile->description }}</div>
            <div><a href="https://www.parliament.uk/bigben">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach


    </div>
</div>
@endsection