@extends('admin.dashboard')
@section('judulPage')
CRUD Tipe Mobil
@endsection

                @section('adminSection')
                <form method="POST" action="{{ route('tipemobil.store') }}">
                  @csrf
          
                  <!-- Merk -->
                  <div>
                      <x-input-label for="tipe" :value="__('Tipe')" />
                      <x-text-input id="tipe" class="block mt-1 w-full" type="text" name="tipe" :value="old('tipe')" required autofocus autocomplete="tipe" />
                      <x-input-error :messages="$errors->get('tipe')" class="mt-2" />
                  </div>

                  @error('tipe')
                  
                  @enderror
                  <x-primary-button class="mt-4">
                    {{ __('Add Tipe mobil') }}
                </x-primary-button>
    </form>


    <div class="p-3">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
              <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                      <tr>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Tipe</th>
                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                      </tr>
                    </thead>  
                    <tbody class="divide-y divide-gray-200">
                      @forelse ($tipeMobil as $key => $value)
                      <tr>
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{$key + 1}}</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$value->tipe}}</td>
                          <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                              <form action="/tipemobil/{{$value->id}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <a href="/tipemobil/{{$value->id}}/edit" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                                      Edit
                                  </a>
                                  <button type="submit" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                              </form>
                          </td>
                      </tr>
                      @empty
                      <tr>
                          <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">No data available</td>
                      </tr>
                      @endforelse
                  </tbody>
                  
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
          
@endsection
