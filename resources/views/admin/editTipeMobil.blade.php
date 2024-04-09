@extends('admin.dashboard')
@section('judulPage')
CRUD Tipe Mobil
@endsection

                @section('adminSection')
                <form method="POST" action="/tipemobil/{{$tipeMobil->id}}">
                    @csrf
                
                    @method('PUT')
                    <div>
                        <x-input-label for="tipe" :value="__('Tipe')" />
                        <x-text-input id="tipe" class="block mt-1 w-full" type="text" name="tipe" value="{{$tipeMobil->tipe}}" required autofocus autocomplete="tipe" />
                        <x-input-error :messages="$errors->get('tipe')" class="mt-2" />
                    </div>
                
                    <x-primary-button class="mt-4">
                {{ __('Save') }}
                       
                    </x-primary-button>
                </form>
                


          
@endsection
