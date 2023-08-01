@extends('layout.master')
@section('title', 'Sign Up')
@section('content')
    <div class="mt-24">
        <div class="w-[80%] h-full m-auto my-4 border-2 p-4 rounded-md flex flex-row">
            <div class="w-[50%]">
                <form action="/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-200 focus:border-blue-200 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-200 dark:focus:border-blue-200 dark:shadow-sm-light"
                            requiblue>
                    </div>
                    @error('name')
                        {{ $message }}
                    @enderror
                    <div class="mb-3">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Email</label>
                        <input type="email" name="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-200 focus:border-blue-200 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-200 dark:focus:border-blue-200 dark:shadow-sm-light"
                            placeholder="name@flowbite.com" requiblue>
                    </div>
                    @error('email')
                        {{ $message }}
                    @enderror

                    <div class="mb-3">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-200 focus:border-blue-200 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-200 dark:focus:border-blue-200 dark:shadow-sm-light"
                            requiblue>
                    </div>
                    @error('password')
                        {{ $message }}
                    @enderror
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-400">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
