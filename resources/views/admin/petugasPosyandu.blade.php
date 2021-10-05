<x-admin-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Petugas Posyandu') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-0.5 lg:px-1">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5 bg-white border-b border-gray-200">

                    <!-- tabel -->
                    <table class="border-collapse border border-blue-800 text-base">
                        <thead>
                          <tr>
                            <th class="border border-blue-600 text-center w-30">#</th>
                            <th class="border border-blue-600 w-1/2">Nama Petugas</th>
                            <th class="border border-blue-600 w-1/4">TTL Petugas</th>
                            <th class="border border-blue-600 w-1/4">Alamat Petugas</th>
                          </tr>

                        </thead>
                        <tbody>
                          <tr>
                            <td class="border border-blue-600 text-center">1</td>
                            <td class="border border-blue-600">Kadek Adi Merta</td>
                            <td class="border border-blue-600">Buleleng, 10 Juni 2021</td>
                            <td class="border border-blue-600">Indianapolis</td>
                          </tr>
                          <tr>
                            <td class="border border-blue-600 text-center">2</td>
                            <td class="border border-blue-600">Komang Ayu Cantik</td>
                            <td class="border border-blue-600">Buleleng, 10 July 2021</td>
                            <td class="border border-blue-600">Indianapolis</td>
                          </tr>
                          <tr>
                            <td class="border border-blue-600 text-center">3</td>
                            <td class="border border-blue-600">Putu Gabler</td>
                            <td class="border border-blue-600">Buleleng, 7 Mei 2021</td>
                            <td class="border border-blue-600">Indianapolis</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-dashboard>
