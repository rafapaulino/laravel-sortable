<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />

                <div class="container mx-auto px-4 py-8">
                    <x-laravel-blade-sortable::sortable>
                        <x-laravel-blade-sortable::sortable-item sort-key="jason" class="p-5 my-2 text-center bg-gray-50 border-gray-700 cursor-pointer">
                            Jason
                        </x-laravel-blade-sortable::sortable-item>
                        <x-laravel-blade-sortable::sortable-item sort-key="andres" class="p-5 my-2 text-center bg-gray-50 border-gray-700 cursor-pointer">
                            Andres
                        </x-laravel-blade-sortable::sortable-item>
                        <x-laravel-blade-sortable::sortable-item sort-key="matt" class="p-5 my-2 text-center bg-gray-50 border-gray-700 cursor-pointer">
                            Matt
                        </x-laravel-blade-sortable::sortable-item>
                        <x-laravel-blade-sortable::sortable-item sort-key="james" class="p-5 my-2 text-center bg-gray-50 border-gray-700 cursor-pointer">
                            James
                        </x-laravel-blade-sortable::sortable-item>
                    </x-laravel-blade-sortable::sortable>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
