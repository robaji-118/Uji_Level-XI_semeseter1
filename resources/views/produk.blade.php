@extends('main.main')

@section('title', 'produk')

@section('content')


    {{-- product --}}

    <div class="ket-produk text-center">
        <h1>IS THIS FOR MY PRODUCT</h1>
        <p>Lorem ipsum dolor sit amet </p>
    </div>



    <!-- Swiper -->
    <div id="card" class="swiper container pt-10 mx-auto px-4 max-w-[1400px] drop-shadow-xl ">
        <div class="swiper-wrapper text-center space-x-10">
            @foreach ($product as $data)
                <div class="swiper-slide ">
                    <div class="max-w-sm bg-white shadow-lg card-produk dark:bg-dark-900" data-modal-target="crud-modal"
                        data-modal-toggle="crud-modal" data-nama-produk="{{ $data->title }}" data-price="{{ $data->price }}"
                        data-deskripsi="{{ $data->body }}">

                        <img class="card-img rounded-t-lg m-auto text-center" src="{{asset('img/' . $data->img) }}"
                            alt="" />

                        <div class="p-5 ">

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-start text-gray-900 dark:text-white">
                                {{ $data->title }}</h5>

                            <a data-modal-target="crud-modal" data-modal-toggle="#crud-modal" href="">
                                <div class="grid grid-cols-2 ">
                                    <p class="text-start">Rp {{ $data->price }} </p>

                                    <div class="mr-0 m-auto p-auto">
                                        <a href="#crud-modal">
                                            {{-- <a href="#crud-modal" data-modal-target="crud-modal" data-modal-toggle="crud-modal"> --}}
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
                                            </svg>
                                            {{-- </a> --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    {{-- modal --}}

    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Pemesanan Barang
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" method="POST" action="/cart">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="title" id="produk-name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Type product name" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="price"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                            <input type="text" name="body" id="price"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="37-46" required="">
                        </div>
                        {{-- <div class="col-span-2 sm:col-span-1">
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size</label>
                            <select id="size" name="size"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="">45</option>
                                <option value="44">44</option>
                                <option value="43">43</option>
                                <option value="42">42</option>
                                <option value="41">41</option>
                                <option value="40">40</option>
                            </select>
                        </div> --}}
                        <div class="col-span-2 sm:col-span-1">
                            <label for="size"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size</label>
                            <input type="text" name="size" id="size"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="37 sampai 46" required="">
                        </div>
                        <div class="col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                Description</label>
                            <textarea id="deskripsi" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder=""></textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Add new product
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        var swiper = new Swiper('.swiper', {
            slidesPerView: 5,
            direction: getDirection(),
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            on: {
                resize: function() {
                    swiper.changeDirection(getDirection());
                },
            },
        });

        function getDirection() {
            var windowWidth = window.innerWidth;
            var direction = window.innerWidth <= 720 ? 'vertical' : 'horizontal';

            return direction;
        }

        $(".card-produk").click(function() {
            let nama_produk = $(this).data('nama-produk');
            let price = $(this).data('price');
            let deskripsi = $(this).data('body');
            $("#produk-name").val(nama_produk);
            $("#price").val(price);
            $("#deskripsi").val(deskripsi);

        });



        // JavaScript to change modal image
        // document.querySelectorAll('.card-img').forEach(image => {
        //     image.addEventListener('click', function() {
        //         const crud-modal = document.getElementById('crud-modal');
        //         crud-modal.src = this.src; // Set modal image src same as card image src
        //     });
        // });
    </script>

@endsection
