@extends('layout.master')
@section('title', 'Sign Up')
@section('content')
    {{-- <form> --}}
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

                    <div class="mb-3">
                        <label for="dob" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of
                            Birth</label>
                        <input type="date" name="dob"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-200 focus:border-blue-200 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-200 dark:focus:border-blue-200 dark:shadow-sm-light"
                            requiblue>
                    </div>
                    @error('dob')
                        {{ $message }}
                    @enderror

                    <div class="mb-3">
                        <label for="usernameLinkedin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Username LinkedIn</label>
                        <input type="text" name="usernameLinkedin"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-200 focus:border-blue-200 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-200 dark:focus:border-blue-200 dark:shadow-sm-light"
                            placeholder="https://www.linkedin.com/in/<username>" requiblue>
                    </div>
                    @error('usernameLinkedin')
                        {{ $message }}
                    @enderror

                    <div class="mb-3">
                        <label for="mobileNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Mobile Number</label>
                        <input type="text" name="mobileNumb"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-200 focus:border-blue-200 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-200 dark:focus:border-blue-200 dark:shadow-sm-light"
                            placeholder="+6200000000000 (Max. 12 digits)" requiblue>
                    </div>
                    @error('mobileNumb')
                        {{ $message }}
                    @enderror

                    <div class="mb-3">
                        <label for="profession" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Profesi</label>
                        <input type="text" name="profession"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-200 focus:border-blue-200 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-200 dark:focus:border-blue-200 dark:shadow-sm-light"
                            placeholder="" requiblue>
                    </div>
                    @error('profession')
                        {{ $message }}
                    @enderror

                    {{-- <div class="mb-3">
                        <label for="interest" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                            your
                            interest</label>
                        <select name="interest_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-200 focus:border-blue-200 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-200 dark:focus:border-blue-200"> --}}
                            {{-- JANGAN LUPA GANTIIIIIIIIIIIIII --}}
                            {{-- <option value="1"></option>
                            <option>Canada</option>
                            <option>France</option>
                            <option>Germany</option>
                        </select>
                    </div>

                    @error('interest_id')
                        {{ $message }}
                    @enderror --}}

                    <div class="mb-3">
                        <label for="gender"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                        <div>
                            <input type="radio" name="gender" id="L" value="Male" requiblue>
                            <label for="L">Male</label>
                        </div>
                        <div>
                            <input type="radio" name="gender" id="P" value="Female" requiblue>
                            <label for="P">Female</label>
                        </div>
                    </div>

                    @error('gender')
                        {{ $message }}
                    @enderror

                    <div>Rp100.000,-</div>

                    {{-- <div class="flex items-start mb-3 mt-6">
                        <div class="flex items-center h-5">
                            <input name="terms" type="checkbox" value=""
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                requiblue>
                        </div>
                        <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with
                            the
                            <a href="#" class="text-blue-600 hover:underline dark:text-blue-200">terms and
                                conditions</a></label>
                    </div> --}}
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register
                        new account</button>
                </form>
            </div>
            <div class="w-[50%] h- m-4">
                <div class="p-4 bg-blue-200 h-full">
                    <img class="p-8" src="{{ asset('images/banner.png') }}"/>
                    <img class="p-8" src="{{ asset('images/banner.png') }}"/>
                </div>
            </div>
            </form>

        </div>
    </div>

@endsection
