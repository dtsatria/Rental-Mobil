@extends('admin.dashboard')
@section('judulPage')
Data Transaksi
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
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Nama Customer</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">ID Mobil</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Plat Nomor</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Tanggal Sewa</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Total Harga</th>
                                  </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Dika</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">2</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">D 1234 EF</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">20 januari 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">RP. 2.000.000</td>

                                  </tr>
                      
                                  
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
@endsection
