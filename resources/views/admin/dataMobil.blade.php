@extends('admin.dashboard')
@section('judulPage')
Data Mobil
@endsection
                @section('adminSection')
                <div class="p-6 text-gray-900">
                    
                  <x-nav-link :href="route('mobil.create')">
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                      Add Mobil
                    </button>
                </x-nav-link>
                <x-nav-link :href="route('tipemobil.create')">
                  <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Add Tipe Mobil
                  </button>
              </x-nav-link>
                </div>

                <div class="p-3">
                  <div class="flex flex-col">
                      <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                          <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200">
                              <thead>
                                <tr>
                                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">ID</th>
                                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Merk</th>
                                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Plat Nomor</th>
                                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Tipe</th>
                                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Tarif/Hari</th>
                                  <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                </tr>
                              </thead>  
                              <tbody class="divide-y divide-gray-200">
                                @isset($Mobil)
                                    @forelse ($Mobil as $key => $mobil)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{$key + 1}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$mobil->merk}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$mobil->plat_nomor}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$mobil->tipemobil->tipe}}</td>
                                            <!-- Assuming 'tipe' is the field that contains the name of the 'Tipe Mobil' -->
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$mobil->tarif}}K</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                <form action="/mobil/{{$mobil->id}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="/mobil/{{$mobil->id}}/edit" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800">
                                                        Edit
                                                    </a>
                                                    <button type="submit" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">No data available</td>
                                        </tr>
                                    @endforelse
                                @else
                                    <tr>
                                        <td colspan="6" class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">No data available</td>
                                    </tr>
                                @endisset
                            </tbody>
                            
                            
                            
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
@endsection
