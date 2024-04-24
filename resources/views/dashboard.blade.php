@extends('template.index')
{{-- <x-app-layout>



</x-app-layout> --}}


@section('root')
    {{-- @if (Auth::user()->role == 'admin') --}}
    <div class="w-full mx-auto">
        @include('components.fragment.nav')
    </div>
    <h1 class="text-2xl font-bold text-center">Dashboard</h1>
    <h1 class="font-semibold text-center">halo {{ Auth::user()->namaLengkap }}</h1>

    {{-- @endif --}}
@endsection
