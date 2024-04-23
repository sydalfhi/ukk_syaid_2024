@extends('template.index')
<x-app-layout>



</x-app-layout>


@section('root')
    @if (Auth::user()->role == 'admin')
        <div class="w-[50%] mx-auto">
            @include('components.fragment.nav')
        </div>
        <div class="w-[50%] mx-auto">
            @include('components.fragment.table')
        </div>
    @endif
@endsection
