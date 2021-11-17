@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center ">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Blog Posts
            </h1>
        </div>
    </div>
    @if(auth()->check())
        <div class="pt-15 w-4/5 m-auto ">
            <a href="{{route('blog.create')}}"
               class="bg-blue-500 bg-transparent text-gray-100 font-extrabold py-3 px-5 rounded-3xl"> Create Post</a>
        </div>
    @endif
    @foreach($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 ">
        <div>
            <img src="/images/1.jpeg" alt="" class="rounded-xl shadow-xl h-auto w-auto">
        </div>
        <div>
            <h2 class="text-5xl text-gray-700 font-bold pb-4">
{{$post->title}}            </h2>

            <span class="py-8 text-gray-500 text-sm">By <span class="font-bold italic text-gray-800"> {{$post->user->name}}</span> Created on {{date('jS M Y', strtotime($post->created_at))}}</span>

            <p class="pt-8 text-gray-700 text-xl pb-10 leading-8 font-light">{{$post->description}}</p>

            <a href="" class="font-extrabold py-4 px-8 rounded-3xl text-lg text-gray-100 bg-blue-500">Keep Reading</a>
        </div>
    </div>
    @endforeach

@endsection
