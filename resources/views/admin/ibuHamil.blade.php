<x-admin-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ibu Hamil') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-0.5 lg:px-">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5 bg-white border-b border-gray-200">

                    <!-- tabel -->
                    <table class="border-collapse border border-blue-800 text-sm">
                        <thead>
                          <tr>
                            <th class="border border-blue-600 text-center w-30">#</th>
                            <th class="border border-blue-600 w-1/4">Nama</th>
                            <th class="border border-blue-600 w-1/5">TTL</th>
                            <th class="border border-blue-600 w-1/5">Alamat</th>
                            <th class="border border-blue-600 w-1/12">TB</th>
                            <th class="border border-blue-600 w-1/12">BB</th>
                            <th class="border border-blue-600 w-1/12">LK</th>
                            <th class="border border-blue-600 w-1/12">Nama Ayah</th>
                          </tr>

                        </thead>
                        <tbody>
                          <tr>
                            <td class="border border-blue-600 text-center">1</td>
                            <td class="border border-blue-600">Kadek Adi Merta</td>
                            <td class="border border-blue-600">Buleleng, 10 Juni 2021</td>
                            <td class="border border-blue-600">Indianapolis</td>
                            <td class="border border-blue-600 text-center">50 cm</td>
                            <td class="border border-blue-600 text-center">2 kg</td>
                            <td class="border border-blue-600 text-center">10 cm</td>
                            <td class="border border-blue-600">Ketut Sukarada</td>
                          </tr>
                          <tr>
                            <td class="border border-blue-600 text-center">2</td>
                            <td class="border border-blue-600">Komang Ayu Cantik</td>
                            <td class="border border-blue-600">Buleleng, 10 July 2021</td>
                            <td class="border border-blue-600">Indianapolis</td>
                            <td class="border border-blue-600 text-center">3 kg</td>
                            <td class="border border-blue-600 text-center">80 cm</td>
                            <td class="border border-blue-600 text-center">14 cm</td>
                            <td class="border border-blue-600">Komang Sukijem</td>
                          </tr>
                          <tr>
                            <td class="border border-blue-600 text-center">3</td>
                            <td class="border border-blue-600">Putu Gabler</td>
                            <td class="border border-blue-600">Buleleng, 7 Mei 2021</td>
                            <td class="border border-blue-600">Indianapolis</td>
                            <td class="border border-blue-600 text-center">3 kg</td>
                            <td class="border border-blue-600 text-center">80 cm</td>
                            <td class="border border-blue-600 text-center">14 cm</td>
                            <td class="border border-blue-600">Kadek Uus</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-dashboard>
