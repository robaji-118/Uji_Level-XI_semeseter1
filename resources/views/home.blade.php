@extends('main.main')

@section('title', 'home')

@section('content')

    <section
        class="bg-center  bg-cover bg-no-repeat bg-[url('{{ asset('img/home-wp.jpg') }}')] bg-gray-700 bg-blend-multiply bagan-home container mx-auto px-4 max-w-[1400px] ">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">We invest
                in the world’s potential</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on
                markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>

        </div>
    </section>

    {{-- end home --}}




    {{-- start about --}}

    <div id="about" class="grid grid-cols-2 gap-4 about-page container mx-auto px-4 max-w-[1200px] ">
        <div class="ket-home item-center">
            <h1>SHOP ALL TYPE OF SHOES</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis praesentium cum maiores asperiores alias
                temporibus facilis nihil quos quasi possimus non voluptates unde quidem dolorem modi ipsum voluptate,
                reprehenderit fugiat?</p>
        </div>
        <div class="img-about">
            <img class="items-left" src="{{ asset('img/about.png') }}" alt="">
        </div>
    </div>



    <div class="ket-about text-center">
        <h1>IS THIS FOR TEAMS</h1>
        <p>Lorem ipsum dolor sit amet </p>
    </div>


    <div class="grid grid-cols-2 md:grid-cols-4 gap-5 img-teams container mx-auto px-4 max-w-[1100px]">
        <div class="grid gap-4">
            <div>
                <img class="h-auto w-auto  rounded-lg" src="{{ asset('img/model (2).jpg') }}" alt="">
            </div>
            <div>
                <img class="h-auto w-auto rounded-lg" src="{{ asset('img/produk (4).png') }}" alt="">
            </div>
            <div>
                <img class="h-auto w-auto rounded-lg" src="{{ asset('img/model (6).jpg') }}" alt="">
            </div>
        </div>
        <div class="grid gap-1">
            <div>
                <img class="h-auto w-auto rounded-lg" src="{{ asset('img/model (7).jpg') }}" alt="">
            </div>
            <div>
                <img class="h-auto w-auto rounded-lg" src="{{ asset('img/produk (1).jpg') }}" alt="">
            </div>
            <div>
                <img class="h-auto w-auto rounded-lg" src="{{ asset('img/home-wp1.png') }}" alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto w-auto rounded-lg" src="{{ asset('img/produk (3).jpg') }}" alt="">
            </div>
            <div>
                <img class="h-auto w-auto rounded-lg" src="{{ asset('img/model (10).jpg') }}" alt="">
            </div>
            <div>
                <img class="h-auto w-auto rounded-lg" src="{{ asset('img/model (8).jpg') }}" alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto w-auto rounded-lg" src="{{ asset('img/model (3).jpg') }}" alt="">
            </div>
            <div>
                <img class="h-auto w-auto rounded-lg" src="{{ asset('img/logo-brand1.png') }}" alt="">
            </div>
            <div>
                <img class="h-auto w-auto rounded-lg" src="{{ asset('img/model (4).jpg') }}" alt="">
            </div>
        </div>
    </div>





@endsection
