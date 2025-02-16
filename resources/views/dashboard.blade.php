<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            
            <!-- Tanda Tangan Digital QR Code -->
            <div class="mt-6 text-center">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Tanda Tangan Digital</h2>
                <div class="mt-4 bg-white dark:bg-gray-700 p-4 rounded-lg shadow-lg inline-block">
                    {!! QrCode::size(150)->generate("Tanda Tangan Digital: NOVAL TAMPAN | " . now() . " | Valid") !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
