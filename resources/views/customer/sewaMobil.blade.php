@extends('customer.master')

@section('Sewa Mobil')
<h2 class="m-5 font-bold">Available Car</h2>
<table class="min-w-full divide-y divide-gray-200">
    
    <thead>
      <tr>
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
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$mobil->merk}}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$mobil->plat_nomor}}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$mobil->tipemobil->tipe}}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$mobil->tarif}}K</td>
                  <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                          <a href="/transaksi/{{$mobil->id}}/sewa" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800">
                              Sewa
                          </a>
                      
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
@endsection