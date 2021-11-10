@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center ">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Blog Posts
            </h1>
        </div>
    </div>


    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 ">
        <div>
            <img src="/images/1.jpeg" alt="" class="rounded-xl shadow-xl h-auto w-auto" >
        </div>
        <div>
            <h2 class="text-5xl text-gray-700 font-bold pb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </h2>

            <span class="py-8 text-gray-500 text-sm">By <span class="font-bold italic text-gray-800"> SABT</span> 1 day ago</span>

            <p class="pt-8 text-gray-700 text-xl pb-10 leading-8 font-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab
                accusamus assumenda autem cum fugit quidem quo, dolor sit amet, consectetur adipisicing elit. Ab
                accusamus assumenda autem cum fugit quidem quo,</p>

            <a href="" class="font-extrabold py-4 px-8 rounded-3xl text-lg text-gray-100 bg-blue-500">Keep Reading</a>
        </div>
    </div>

@endsection
