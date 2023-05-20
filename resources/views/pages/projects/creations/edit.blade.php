<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editando um projeto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-@livewireStylesw-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p6 bg-white border-b border-gray-200">
                    @livewire('pages.projects.creations.edit')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>