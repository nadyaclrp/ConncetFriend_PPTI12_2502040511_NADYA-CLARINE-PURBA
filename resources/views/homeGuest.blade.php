@extends('layout.master')
@section('title','Home')
@section('content')
<div class="text-center w-full p-4 mt-8">Hello Guest! Join us for interacting with others!</div>
<div class="w-[80%] h-full m-auto my-4 border-2 p-4 rounded-md flex flex-row">
    <div class="w-full">
        Choose your new partner!
        <button class="grid grid-cols-3 border-2">
            <img class="p-4" src="{{ asset('images/banner.png') }}" />
            <img class="p-4" src="{{ asset('images/banner.png') }}" />
            <img class="p-4" src="{{ asset('images/banner.png') }}" />
            <img class="p-4" src="{{ asset('images/banner.png') }}" />
            <img class="p-4" src="{{ asset('images/banner.png') }}" />
            <img class="p-4" src="{{ asset('images/banner.png') }}" />
        </button>
    </div>
</div>
@endsection
