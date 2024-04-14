<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hai, ') }} {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <nav class="flex space-x-1" aria-label="Tabs" role="tablist">
                        <button type="button" class="hs-tab-active:bg-gray-200 hs-tab-active:text-gray-800 hs-tab-active:hover:text-gray-800 py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm font-medium text-center text-gray-500 rounded-lg hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none active" id="pills-on-gray-color-item-1" data-hs-tab="#pills-on-gray-color-1" aria-controls="pills-on-gray-color-1" role="tab">
                          Sewa Mobil
                        </button>
                        <button type="button" class="hs-tab-active:bg-gray-200 hs-tab-active:text-gray-800 hs-tab-active:hover:text-gray-800 py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm font-medium text-center text-gray-500 rounded-lg hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="pills-on-gray-color-item-2" data-hs-tab="#pills-on-gray-color-2" aria-controls="pills-on-gray-color-2" role="tab">
                          Invoice
                        </button>
                      </nav>
                      
                      <div class="mt-3">
                        <div id="pills-on-gray-color-1" role="tabpanel" aria-labelledby="pills-on-gray-color-item-1">
                          @yield('Sewa Mobil')
                        </div>
                        <div id="pills-on-gray-color-2" class="hidden" role="tabpanel" aria-labelledby="pills-on-gray-color-item-2">
                            @yield('Invoice')
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
