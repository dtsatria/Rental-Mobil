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
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Merk</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Tipe</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Plat Nomor</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Tarif/Hari</th>
                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                  </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Honda HRV</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Mini Bus</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">D 1234 EF</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">100.000</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Edit</button>
                                        <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                    </td>
                                  </tr>
                      
                                  
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
@endsection
