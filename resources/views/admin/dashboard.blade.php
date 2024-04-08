<x-app-layout>
    <x-slot name="header">
        <div class="flex">
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <x-nav-link :href="route('mobil.index')">
                {{ __('Mobil') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <x-nav-link :href="route('mobil.create')">
                {{ __('Customer') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <x-nav-link :href="route('mobil.index')">
                {{ __('Transaksi') }}
            </x-nav-link>
        </div>
    </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @yield('adminSection')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
