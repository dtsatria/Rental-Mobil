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
          
            
                  <!-- Tipe Mobil -->
                <div class="mt-4">
                    <x-input-label for="tipemobil_id" :value="__('Tipe')" />
                
                    <select id="tipemobil_id" class="block mt-1 w-full rounded-sm" name="tipemobil_id" :value="old('tipemobil_id')" required autocomplete="tipemobil_id">
                        <option value="" selected>Pilih Tipe</option>
                
                        
                        @forelse ($tipeMobil as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->tipe }}</option>
                        @empty
                            <option>Tipe Mobil Tidak Ada</option>               
                        @endforelse
                    </select>
                
                    <x-input-error :messages="$errors->get('tipemobil_id')" class="mt-2" />
                </div>
                


                  <!-- Plat Nomor -->
                  <div class="mt-4">
                      <x-input-label for="plat_nomor" :value="__('Plat Nomor')" />
                      <x-text-input id="plat_nomor" class="block mt-1 w-full" type="text" name="plat_nomor" :value="old('plat_nomor')" required autocomplete="plat_nomor" />
                      <x-input-error :messages="$errors->get('plat_nomor')" class="mt-2" />
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
