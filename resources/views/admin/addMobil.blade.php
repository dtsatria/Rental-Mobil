@extends('admin.dashboard')
@section('judulPage')
CRUD Mobil
@endsection

                @section('adminSection')
                <form method="POST" action="{{ route('mobil.store') }}">
                  @csrf
          
                  <!-- Merk -->
                  <div>
                      <x-input-label for="merk" :value="__('Merk')" />
                      <x-text-input id="merk" class="block mt-1 w-full" type="text" name="merk" :value="old('merk')" required autofocus autocomplete="merk" />
                      <x-input-error :messages="$errors->get('merk')" class="mt-2" />
                  </div>
          
            
                <div class="mt-4">
                    <x-input-label for="model" :value="__('Model')" />
                
                    <select id="model" class="block mt-1 w-full rounded-sm" name="model" :value="old('model')" required autocomplete="model">
                        <option value="" selected>Pilih Tipe</option>
                
                        <!-- Tambahkan pilihan lainnya sesuai kebutuhan -->
                        
                        @forelse ($tipeMobil as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->tipe }}</option>
                        @empty
                            <option>Tipe Mobil Tidak Ada</option>               
                        @endforelse
                    </select>
                
                    <x-input-error :messages="$errors->get('model')" class="mt-2" />
                </div>
                


                  <!-- Plat Nomor -->
                  <div class="mt-4">
                      <x-input-label for="platnomor" :value="__('Plat Nomor')" />
                      <x-text-input id="platnomor" class="block mt-1 w-full" type="text" name="platnomor" :value="old('platnomor')" required autocomplete="platnomor" />
                      <x-input-error :messages="$errors->get('platnomor')" class="mt-2" />
                  </div>
          
                  <!-- Tarif -->
                  <div class="mt-4">
                      <x-input-label for="tarif" :value="__('Tarif/Hari')" />
                      <x-text-input id="tarif" class="block mt-1 w-full" type="text" name="tarif" :value="old('tarif')" required autocomplete="tarif" />
                      <x-input-error :messages="$errors->get('tarif')" class="mt-2" />
                  </div>

                  <x-primary-button class="mt-4">
                    {{ __('Add') }}
                </x-primary-button>
    </form>
          
@endsection
