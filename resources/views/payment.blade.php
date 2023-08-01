@extends('layout.master')
@section('title','Register Payment')
@section('content')
<div class="text-center w-full h-fit justify-center p-4 mt-16 text-xl">Come and Join Us.
    <br > Lets Pay ur First Payment!
    <h1 class="font-bold text-6xl">RP100.000</h1>
    <h1>Top up your money till enough register price!</h1>
    <div class="w-[80%] h-full m-auto my-4 border-2 p-4 rounded-md flex flex-row">
        <div class="w-full">
            <form action="/payment" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="wallet"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Input Your Money</label>
                    <input type="number" name="wallet"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-200 focus:border-blue-200 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-200 dark:focus:border-blue-200 dark:shadow-sm-light"
                        requiblue>
                </div>
                @error('wallet')
                    {{ $message }}
                @enderror
                <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-400">Pay</button>
            </form>
        </div>
    </div>
</div>
@endsection
