@extends('layout/layout')

@section('title')
    Calcule
@endsection

@section('content')

    <div class="text-center mt-4 w-50 mx-auto">
        <livewire:counter />
    </div>

    @livewireScripts
@endsection