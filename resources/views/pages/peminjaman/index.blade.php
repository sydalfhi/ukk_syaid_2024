@extends('template.index')
@section('root')
    <section>
        <div>
            @include('components.fragment.nav')
        </div>

        <div class="grid place-items-center">
            <div class="w-2/3 ">
                <h1 class="font-semibold ">Data Peminjaman</h1>
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="overflow-hidden">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                    <thead>
                                        <tr>
                                            {{-- <th scope="col"
                                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                                                bukuId</th> --}}
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                                                buku</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                                                peminjam</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                                                tanggal dipinjam</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                                                tanggal dikemalikan</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-end dark:text-neutral-500">
                                                status</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-end dark:text-neutral-500">
                                                Action</th>
                                        </tr>
                                    </thead>


                                    @foreach ($data as $item)
                                        <tr>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                {{ $item->userId }}</td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                {{ $item->bukuId }}</td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                {{ $item->TanggalPeminjaman }}</td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                {{ $item->TanggalPengembalian }}</td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                {{ $item->StatusPeminjaman }}</td>
                                            <td
                                                class="flex justify-end px-6 py-4 space-x-2 text-sm font-medium whitespace-nowrap ">
                                                <a href="{{ route('buku.edit', $item->id) }}">
                                                    <button type="button"
                                                        class="inline-flex items-center px-4 py-3 text-sm font-semibold text-yellow-800 bg-yellow-100 border border-transparent rounded-lg gap-x-2 hover:bg-yellow-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-yellow-900 dark:text-yellow-500 dark:hover:text-yellow-400">
                                                        edit
                                                    </button>
                                                </a>





                                                @if (Auth::user()->role == 'admin')
                                                    <form action="{{ route('peminjaman.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="inline-flex items-center px-4 py-3 text-sm font-semibold text-red-800 bg-red-100 border border-transparent rounded-lg gap-x-2 hover:bg-red-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-red-900 dark:text-red-500 dark:hover:text-red-400">
                                                            Delete
                                                        </button>
                                                    </form>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection
