@extends('template.index')
@section('root')
    @include('components.fragment.nav')
    <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
        <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Tambah Data Buku</h2>
        <form action="{{ route('buku.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-gray-700 " for="judul">judul</label>
                    <input name="judul" id="judul" type="text"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-gray-700 " for="penulis">penulis</label>
                    <input name="penulis" id="penulis" type="text"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>

                <div>
                    <label class="text-gray-700 " for="penerbit">penerbit</label>
                    <input name="penerbit" id="penerbit" type="text"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-gray-700 " for="tahunTerbit">tahunTerbit</label>
                    <input name="tahunTerbit" id="tahunTerbit" type="number"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>

            </div>

            <div class="flex justify-end mt-6">
                <button
                    class="inline-flex items-center px-4 py-3 text-sm font-semibold text-green-800 bg-green-200 border border-transparent rounded-lg gap-x-2 hover:bg-green-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-green-900 dark:text-green-500 dark:hover:text-green-400">
                    Tambahkan
                </button>
            </div>
        </form>
    </section>
@endsection
