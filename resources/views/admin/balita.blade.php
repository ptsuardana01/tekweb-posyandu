<x-admin-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Balita') }}
        </h2>
    </x-slot>

    <div class="py-14 w-auto relative z-0 overflow-x-auto">
        <a href="{{route("tambahDataBalita")}}" class="p-2 px-4 bg-green-500 absolute top-2 text-white rounded-full shadow-sm hover:bg-green-700" type="submit"><i class="mr-1 fas fa-plus-circle"></i> Tambah data Balita</a>
        <div class="w-auto mx-auto sm:px-0.5 lg:px-1 overflow-visible">
            <div class="bg-white shadow sm:rounded-lg">
                {{-- <div class="p-5 bg-white border-b border-gray-200"> --}}
                    <!-- tabel -->
                    <table class="min-w-full bg-white">
                        <thead class="bg-blue-700 text-white">
                            <tr>
                                <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                                <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Nama Balita</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">TTL</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Alamat</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Orang tua</td>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">NIK</td>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Telp</td>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</td>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Umur</td>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">TB</td>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">BB</td>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">LK</td>
                                <th class="py-3 px-4 uppercase font-semibold text-sm">Aksi</td>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr>
                                <td class=" text-left py-3 px-4">1</td>
                                <td class="w-1/5 text-left py-3 px-4">Lian</td>
                                <td class=" text-left py-3 px-4 text-sm">Singaraja, 10-10-2020</td>
                                <td class="text-left py-3 px-4 text-sm">Singaraja</td>
                                <td class="text-left py-3 px-4 text-sm">
                                    <b>Ayah </b> : Ketut Garing <br>
                                    <b>Ibu </b> : Lasmini
                                </td>
                                <td class="text-left py-3 px-4 text-sm">
                                    <b>Ayah </b> : 2015101008 <br>
                                    <b>Ibu </b> : 2015101008
                                </td>
                                <td class="text-left py-3 px-4 text-sm">081805225271</td>
                                <td class="text-left py-3 px-4 text-sm"><a href="">ptsuardana01@gmail.com</a></td>
                                <td class="text-left py-3 px-4">1 th</td>
                                <td class="text-left py-3 px-4">20 cm</td>
                                <td class="text-left py-3 px-4">2 kg</td>
                                <td class="text-left py-3 px-4">10 cm</td>
                                <td class="text-left py-3 px-4">
                                    <div class="flex w-full">
                                        <a class="mr-2 p-2 bg-yellow-300 text-sm rounded-md hover:bg-yellow-500 hover:text-white cursor-pointer">Update</a>
                                        <a class="p-2 bg-red-300 text-sm rounded-md hover:bg-red-500 hover:text-white cursor-pointer">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class=" text-left py-3 px-4">2</td>
                                <td class="w-1/5 text-left py-3 px-4">Emma</td>
                                <td class=" text-left py-3 px-4 text-sm">Singaraja, 10-10-2020</td>
                                <td class="text-left py-3 px-4 text-sm">Singaraja</td>
                                <td class="text-left py-3 px-4 text-sm">
                                    <b>Ayah </b> : Ketut Garing <br>
                                    <b>Ibu </b> : Lasmini
                                </td>
                                <td class="text-left py-3 px-4 text-sm">
                                    <b>Ayah </b> : 2015101008 <br>
                                    <b>Ibu </b> : 2015101008
                                </td>
                                <td class="text-left py-3 px-4 text-sm">081805225271</td>
                                <td class="text-left py-3 px-4 text-sm"><a href="">ptsuardana01@gmail.com</a></td>
                                <td class="text-left py-3 px-4">1 th</td>
                                <td class="text-left py-3 px-4">20 cm</td>
                                <td class="text-left py-3 px-4">2 kg</td>
                                <td class="text-left py-3 px-4">10 cm</td>
                                <td class="text-left py-3 px-4">
                                    <div class="flex w-full">
                                        <a class="mr-2 p-2 bg-yellow-300 text-sm rounded-md hover:bg-yellow-500 hover:text-white cursor-pointer">Update</a>
                                        <a class="p-2 bg-red-300 text-sm rounded-md hover:bg-red-500 hover:text-white cursor-pointer">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class=" text-left py-3 px-4">3</td>
                                <td class="w-1/5 text-left py-3 px-4">Oliver</td>
                                <td class=" text-left py-3 px-4 text-sm">Singaraja, 10-10-2020</td>
                                <td class="text-left py-3 px-4 text-sm">Singaraja</td>
                                <td class="text-left py-3 px-4 text-sm">
                                    <b>Ayah </b> : Ketut Garing <br>
                                    <b>Ibu </b> : Lasmini
                                </td>
                                <td class="text-left py-3 px-4 text-sm">
                                    <b>Ayah </b> : 2015101008 <br>
                                    <b>Ibu </b> : 2015101008
                                </td>
                                <td class="text-left py-3 px-4 text-sm">081805225271</td>
                                <td class="text-left py-3 px-4 text-sm"><a href="">ptsuardana01@gmail.com</a></td>
                                <td class="text-left py-3 px-4">1 th</td>
                                <td class="text-left py-3 px-4">20 cm</td>
                                <td class="text-left py-3 px-4">2 kg</td>
                                <td class="text-left py-3 px-4">10 cm</td>
                                <td class="text-left py-3 px-4">
                                    <div class="flex w-full">
                                        <a class="mr-2 p-2 bg-yellow-300 text-sm rounded-md hover:bg-yellow-500 hover:text-white cursor-pointer">Update</a>
                                        <a class="p-2 bg-red-300 text-sm rounded-md hover:bg-red-500 hover:text-white cursor-pointer">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                {{-- </div> --}}
            </div>
        </div>
    </div>
</x-admin-dashboard>
