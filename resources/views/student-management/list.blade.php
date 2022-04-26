<x-backend-layout>
    <x-slot name="pagetitle"> Student List </x-slot>

    <x-navigation />

    @if (Session::has('message'))
        <div class="alert alert-block alert-success">
            <i class=" fa fa-check cool-green "></i>
            {{ session('message') }}
        </div>
    @endif

    @livewire('list-all-students')

</x-backend-layout>
