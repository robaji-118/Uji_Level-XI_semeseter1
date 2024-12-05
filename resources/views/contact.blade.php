@extends('main.main')

@section('title', 'cart')

@section('content')

    <div class="ket-contact text-center">
        <h1>REQUEST SHOES</h1>
        <p>membuat sepatu dengan desain nya sendiri </p>
    </div>

    <form method="post" action="/cart/store" class="max-w-sm mt-16 mx-auto" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" id="email" name="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="name@gmail.com"  />
        </div>
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
            <input type="text" id="name" name="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                 />
        </div>
        <div class="mb-5">
            <label for="desain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your desain</label>
            <input type="file" id="desain" name="desain"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                 />
        </div>
        <div class="mb-5">
            <label for="size" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your size</label>
            <input type="number" id="size" name="size" placeholder="1 - 99"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                 />
        </div>

        <button type="submit"
            class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center slate:bg-blue-600 slate:hover:bg-blue-700 slate:focus:ring-blue-800">Pesan
            Sekarang</button>
    </form>


@endsection
