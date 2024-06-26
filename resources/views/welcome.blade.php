@extends('template.index')

@section('root')
    <section class="grid grid-cols-10 placeitems-center">
        <div class="col-span-2">
            @include('components.fragment.sidebar')
        </div>
        <div class="w-full h-screen col-span-8 ">

            <h1 class="px-10 text-3xl font-bold capitalize ">data orang</h1>
            <div class="px-10">
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="overflow-hidden">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                    <thead>
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                                                Name</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                                                Age</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                                                Address</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-end dark:text-neutral-500">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $data = [1];
                                        @endphp

                                        @forelse ($data as $value => $item)
                                            <tr
                                                class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
                                                <td
                                                    class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                    John Brown</td>
                                                <td
                                                    class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                    45</td>
                                                <td
                                                    class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                    New York No. 1 Lake Park</td>
                                                <td class="px-6 py-4 text-sm font-medium whitespace-nowrap text-end">




                                                    <button type="button"
                                                        class="inline-flex items-center text-sm font-semibold border rounded-lg yorder-transparent text-tellow-600 gap-x-2 hover:text-yellow-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Edit</button>
                                                    <button type="button"
                                                        class="inline-flex items-center text-sm font-semibold border border-transparent rounded-lg text-rose-600 gap-x-2 hover:text-rose-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</button>
                                                </td>
                                            </tr>
                                        @empty
                                            <td colspan="4">
                                                <h1 class="text-center">data kososong</h1>
                                            </td>
                                        @endforelse



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <!-- Timeline -->
                <div>
                    <!-- Heading -->
                    <div class="my-2 ps-2 first:mt-0">
                        <h3 class="text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">
                            1 Aug, 2023
                        </h3>
                    </div>
                    <!-- End Heading -->

                    <!-- Item -->
                    <div class="relative flex rounded-lg gap-x-3 group hover:bg-gray-100 dark:hover:bg-white/10">
                        <a class="absolute inset-0 z-[1]' href="#"></a>

                        <!-- Icon -->
                        <div
                            class="relative last:after:hidden after:absolute after:top-0 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700 dark:group-hover:after:bg-neutral-600">
                            <div class="relative z-10 flex items-center justify-center size-7">
                                <div
                                    class="bg-white border-2 border-gray-300 rounded-full size-2 group-hover:border-gray-600 dark:bg-neutral-800 dark:border-neutral-600 dark:group-hover:border-neutral-600">
                                </div>
                            </div>
                        </div>
                        <!-- End Icon -->

                        <!-- Right Content -->
                        <div class="p-2 pb-8 grow">
                            <h3 class="flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                                <svg class="flex-shrink-0 mt-1 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" x2="8" y1="13" y2="13"></line>
                                    <line x1="16" x2="8" y1="17" y2="17"></line>
                                    <line x1="10" x2="8" y1="9" y2="9"></line>
                                </svg>
                                Created "Preline in React" task
                            </h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                                Find more detailed insctructions here.
                            </p>
                            <button type="button"
                                class="relative z-10 inline-flex items-center p-1 mt-1 text-xs text-gray-500 border border-transparent rounded-lg -ms-1 gap-x-2 hover:bg-white hover:shadow-sm disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-800">
                                <img class="flex-shrink-0 rounded-full size-4"
                                    src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8auto=format&fit=facearea&facepad=3&w=320&h=320&q=80"
                                    alt="Image Description">
                                James Collins
                            </button>
                        </div>
                        <!-- End Right Content -->
                    </div>
                    <!-- End Item -->

                    <!-- Item -->
                    <div class="relative flex rounded-lg gap-x-3 group hover:bg-gray-100 dark:hover:bg-white/10">
                        <a class="absolute inset-0 z-[1]' href="#"></a>

                        <!-- Icon -->
                        <div
                            class="relative last:after:hidden after:absolute after:top-0 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700 dark:group-hover:after:bg-neutral-600">
                            <div class="relative z-10 flex items-center justify-center size-7">
                                <div
                                    class="bg-white border-2 border-gray-300 rounded-full size-2 group-hover:border-gray-600 dark:bg-neutral-800 dark:border-neutral-600 dark:group-hover:border-neutral-600">
                                </div>
                            </div>
                        </div>
                        <!-- End Icon -->

                        <!-- Right Content -->
                        <div class="p-2 pb-8 grow">
                            <h3 class="flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                                Release v5.2.0 quick bug fix 🐞
                            </h3>
                            <button type="button"
                                class="relative z-10 inline-flex items-center p-1 mt-1 text-xs text-gray-500 border border-transparent rounded-lg -ms-1 gap-x-2 hover:bg-white hover:shadow-sm disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-800">
                                <span
                                    class="flex flex-shrink-0 justify-center items-center size-4 bg-white border border-gray-200 text-[10px] font-semibold uppercase text-gray-600 rounded-full dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400">
                                    A
                                </span>
                                Alex Gregarov
                            </button>
                        </div>
                        <!-- End Right Content -->
                    </div>
                    <!-- End Item -->

                    <!-- Item -->
                    <div class="relative flex rounded-lg gap-x-3 group hover:bg-gray-100 dark:hover:bg-white/10">
                        <a class="absolute inset-0 z-[1]' href="#"></a>

                        <!-- Icon -->
                        <div
                            class="relative last:after:hidden after:absolute after:top-0 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700 dark:group-hover:after:bg-neutral-600">
                            <div class="relative z-10 flex items-center justify-center size-7">
                                <div
                                    class="bg-white border-2 border-gray-300 rounded-full size-2 group-hover:border-gray-600 dark:bg-neutral-800 dark:border-neutral-600 dark:group-hover:border-neutral-600">
                                </div>
                            </div>
                        </div>
                        <!-- End Icon -->

                        <!-- Right Content -->
                        <div class="p-2 pb-8 grow">
                            <h3 class="flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                                Marked "Install Charts" completed
                            </h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                                Finally! You can check it out here.
                            </p>
                            <button type="button"
                                class="relative z-10 inline-flex items-center p-1 mt-1 text-xs text-gray-500 border border-transparent rounded-lg -ms-1 gap-x-2 hover:bg-white hover:shadow-sm disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-800">
                                <img class="flex-shrink-0 rounded-full size-4"
                                    src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=3&w=320&h=320&q=80"
                                    alt="Image Description">
                                James Collins
                            </button>
                        </div>
                        <!-- End Right Content -->
                    </div>
                    <!-- End Item -->

                    <!-- Heading -->
                    <div class="my-2 ps-2 first:mt-0">
                        <h3 class="text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">
                            31 Jul, 2023
                        </h3>
                    </div>
                    <!-- End Heading -->

                    <!-- Item -->
                    <div class="relative flex rounded-lg gap-x-3 group hover:bg-gray-100 dark:hover:bg-white/10">
                        <a class="absolute inset-0 z-[1]' href="#"></a>

                        <!-- Icon -->
                        <div
                            class="relative last:after:hidden after:absolute after:top-0 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700 dark:group-hover:after:bg-neutral-600">
                            <div class="relative z-10 flex items-center justify-center size-7">
                                <div
                                    class="bg-white border-2 border-gray-300 rounded-full size-2 group-hover:border-gray-600 dark:bg-neutral-800 dark:border-neutral-600 dark:group-hover:border-neutral-600">
                                </div>
                            </div>
                        </div>
                        <!-- End Icon -->

                        <!-- Right Content -->
                        <div class="p-2 pb-8 grow">
                            <h3 class="flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                                Take a break ⛳️
                            </h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                                Just chill for now... 😉
                            </p>
                        </div>
                        <!-- End Right Content -->
                    </div>
                    <!-- End Item -->
                </div>
                <!-- End Timeline -->
            </div>
        </div>



    </section>
@endsection
