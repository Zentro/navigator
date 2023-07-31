<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
                <div class="p-6 text-gray-900 dark:text-gray-100 font-bold text-2xl">
                    {{ __("Welcome to EnergyRate Navigator!") }}
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 mt-4 flex justify-center space-x-10">
                <a href="/quoteform" class="px-10 py-8 bg-blue-500 text-white rounded hover:bg-blue-800 transition duration-300 text-xl font-bold">
                    Create A New Fuel Quote
                </a>
                <a href="/quotehistory" class="px-10 py-8 bg-green-500 text-white rounded hover:bg-green-800 transition duration-300 text-xl font-bold">
                    Check A Prior Fuel Quote
                </a>
            </div>

        </div>
    </div>
</x-app-layout>