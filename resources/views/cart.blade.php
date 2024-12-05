@extends('main.main')

@section('title', 'cart')

@section('content')



    <div class="relative overflow-x-auto shadow-lg  mt-20 container mx-auto px-4 max-w-[1200px]">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        desain
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Size
                    </th>
                    <th colspan="2" scope="col" class="px-6 py-3 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($komentar as $item)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->email }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->nama }}
                        </td>
                        <td class="px-6 py-4">
                            <img src="{{ asset('contact/' . $item->desain) }}" alt="" width="100px;">
                        </td>

                        <td class="px-6 py-4">
                            {{ $item->size }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="/cart/edit/{{ $item->id }}"><button type="button"
                                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center green:bg-blue-600 green:hover:bg-blue-700 green:focus:ring-blue-800">Ubah</button></a>
                        </td>
                        <td class="text-left px-6 py-4">
                            <a href="/cart/delete/{{ $item->id }}">
                                <button type="button"
                                    class="text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center red:bg-blue-600 red:hover:bg-blue-700 red:focus:ring-blue-800">Batal</button></a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
