@extends('admin.dashboard')
@section('judulPage')
Data Customer
@endsection

                @section('adminSection')
               
                <div class="p-3">
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                          <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="overflow-hidden">
                              <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                  <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Nama</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Alamat</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">No Telepon</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">No SIM</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Email</th>
                                  </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Dika</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Padalarang</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">08996904668</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">292392389283</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">admin@gmail.com</td>

                                  </tr>
                      
                                  
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
@endsection
