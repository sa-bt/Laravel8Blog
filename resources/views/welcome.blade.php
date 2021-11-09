@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center ">
                <h1 class="sm:text-white text-5xl font-bold text-shadow-md pb-14"> Do you want to become a
                    developer?</h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl "> Read More</a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 ">
        <div>
            <img src="/images/1.jpeg" alt="" width="700" class="rounded-xl shadow-xl">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block ">
            <h2 class="text-4xl text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </h2>

            <p class="py-8 text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus
                assumenda autem cum fugit quidem quo,</p>

            <p class="py-8 text-gray-600 text-lg pb-9">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab
                accusamus assumenda autem cum fugit quidem quo, dolor sit amet, consectetur adipisicing elit. Ab
                accusamus assumenda autem cum fugit quidem quo,</p>

            <a href="/blog" class="bg-blue-500 text-gray-100 text-s py-3 px-8 rounded-3xl">Find Out More</a>
        </div>
    </div>


    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-6 text-lg">
I'm an expert in ...
        </h2>
        <span class="block font-extrabold text-4xl py-1">Ux Design</span>
        <span class="block font-extrabold text-4xl py-1">Project Management </span>
        <span class="block font-extrabold text-4xl py-1">Digital Strategy</span>
        <span class="block font-extrabold text-4xl py-1">Backend Development</span>
    </div>



    <div class="text-center py-15">
        <span class="text-sm text-gray-400">Blog</span>
        <h2 class="text-4xl font-bold py-10">Recent Posts</h2>
        <p class="m-auto w-4/5 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea excepturi hic nemo officia placeat quas recusandae ullam voluptas voluptatum? Blanditiis suscipit, vitae! Aliquam consequatur cumque laudantium libero possimus quod unde.</p>
    </div>



    <div class="sm-grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 mt-10 rounded-xl">
            <div class="m-auto pt-4 pl-4 pb-16 sm:m-auto w-4/5 block">
                <span class="text-xs">
                    PHP
                </span>
                <h3 class="text-xl font-bold py-10">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam distinctio dolore dolores est id ipsam modi natus nisi nobis, obcaecati odit praesentium quaerat quidem quis rem repellat saepe ullam?
                </h3>
                <a href="" class="bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl ">Find Out More</a>
            </div>
            <div>
                <img src="/images/1.jpeg" alt="" class="rounded-xl shadow-xl h-auto w-auto" >
            </div>
        </div>

    </div>
@endsection
