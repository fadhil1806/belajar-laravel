<x-app-layout>
    @include('inc.form')
    <x-slot name="header">
        <h2 class="font-semibold text-l text-gray-800 leading-tight">
            {{ __('Database') }}
        </h2>
    </x-slot>
    <div class="py-12">
        @include('layouts.guru.menu')
    </div>
</x-app-layout>
