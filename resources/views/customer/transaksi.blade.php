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
                        Transaksi
                        </button>
                       
                      </nav>
                      
                      <div class="mt-3">
                        <div id="pills-on-gray-color-1" role="tabpanel" aria-labelledby="pills-on-gray-color-item-1">
                        

                            <form method="POST" action="/mobil/{{$Mobil->id}}">
                                @csrf
                                  
                                @method('PUT')
              
                                <!-- Merk -->
                                <div>
                                    <x-input-label for="merk" :value="__('Merk')" />  
                                    <x-text-input id="merk" class="block mt-1 w-full" readonly="" type="text" name="merk" value="{{$Mobil->merk}}" required autofocus autocomplete="merk" />
                                    <x-input-error :messages="$errors->get('merk')" class="mt-2" />
                                </div>
                        
                             
                                <!-- Tipe Mobil -->
                              <div class="mt-4">
                                <div>
                                    <x-input-label for="tipemobil_id" :value="__('Tipe')" />
                                    <x-text-input id="tipemobil_id" class="block mt-1 w-full" readonly="" type="text" name="tipemobil_id" value="{{ $Mobil->tipemobil->tipe }}" required autofocus autocomplete="tipemobil_id" />
                                    <x-input-error :messages="$errors->get('tipemobil_id')" class="mt-2" />
                                </div>
                                
                              </div>
                              
              
              
                                <!-- Plat Nomor -->
                                <div class="mt-4">
                                    <x-input-label for="plat_nomor" :value="__('Plat Nomor')" />
                                    <x-text-input id="plat_nomor" class="block mt-1 w-full" readonly="" type="text" name="plat_nomor" value="{{$Mobil->plat_nomor}}" required autocomplete="plat_nomor" />
                                    <x-input-error :messages="$errors->get('plat_nomor')" class="mt-2" />
                                </div>
                        
                                <!-- Tarif -->
                                <div class="mt-4">
                                    <x-input-label for="tarif" :value="__('Tarif/Hari')" />
                                    <x-text-input id="tarif" class="block mt-1 w-full" readonly="" type="text" name="tarif" value="{{$Mobil->tarif}}" required autocomplete="tarif" />
                                    <x-input-error :messages="$errors->get('tarif')" class="mt-2" />
                                </div>
              
                                <!-- Start Date Sewa -->
                                <div class="mt-4 flex">
                                    <div class="grid gap-7 grid-cols-2">
                                        <div>
                                        <x-input-label for="start_date" :value="__('Start Date')" class="mr-2" />
                                        <input id="start_date" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="date" name="start_date" :value="old('start_date')" required autofocus autocomplete="start_date" />
                                        <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                                        </div>
                                        <div>
                                        <x-input-label for="end_date" :value="__('End Date')" class="mr-2" />
                                        <input id="end_date" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="date" name="end_date" :value="old('end_date')" required autofocus autocomplete="end_date" />
                                        <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                                        </div>
                                    </div> 
                                </div>

                                <div class="mt-4">
                                    <p class="block font-medium text-sm text-gray-700"><em>*Data akan dikirimkan kepada admin, Lihat status sewa mobil anda ditabel <strong>Invoice.</strong></em></p>
                                </div>
                                


                                
                                <x-primary-button class="mt-4">
                                  {{ __('Booking') }}
                              </x-primary-button>
                  </form>


                        </div>
                       
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
