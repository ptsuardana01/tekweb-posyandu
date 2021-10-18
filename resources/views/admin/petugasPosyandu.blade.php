<x-admin-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Petugas Posyandu') }}
        </h2>
    </x-slot>

    <div class="py-14 relative">
        <a href="{{route("tambahDataKader")}}" class="p-2 bg-green-500 absolute right-1 top-0 text-white rounded-full shadow hover:bg-green-700" type="submit"><i class="fas fa-plus-circle"></i> Tambah data Petugas Posyandu</a>
        <div class="max-w-7xl mx-auto sm:px-0.5 lg:px-1">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5 bg-white border-b border-gray-200">

                    <!-- tabel -->
                    <table class="min-w-full bg-white">
                        <thead class="bg-yellow-700 text-white">
                            <tr>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nama petugas</th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">TTL</th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Alamat</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</td>
                                <th class="py-3 px-4 uppercase font-semibold text-sm">Aksi</td>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">1</td>
                                <td class="w-1/3 text-left py-3 px-4">Smith</td>
                                <td class="text-left py-3 px-4 text-sm"><a class="">Singaraja, 20 Juni 1990</a></td>
                                <td class="text-left py-3 px-4 text-sm"><a class="">Singaraja</a></td>
                                <td class="text-left py-3 px-4 text-sm"><a class="">081805555888</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                <td class="text-left py-3 px-4">
                                    <div class="flex w-full">
                                        <a class="mr-2 p-2 bg-yellow-300 text-sm rounded-md hover:bg-yellow-500 hover:text-white cursor-pointer">Update</a>
                                        <a class="p-2 bg-red-300 text-sm rounded-md hover:bg-red-500 hover:text-white cursor-pointer">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="w-1/3 text-left py-3 px-4">2</td>
                                <td class="w-1/3 text-left py-3 px-4">Johnson</td>
                                <td class="text-left py-3 px-4 text-sm"><a class="">Singaraja, 20 Juni 1990</a></td>
                                <td class="text-left py-3 px-4 text-sm"><a class="">Singaraja</a></td>
                                <td class="text-left py-3 px-4 text-sm"><a class="">081805555888</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                <td class="text-left py-3 px-4">
                                    <div class="flex w-full">
                                        <a class="mr-2 p-2 bg-yellow-300 text-sm rounded-md hover:bg-yellow-500 hover:text-white cursor-pointer">Update</a>
                                        <a class="p-2 bg-red-300 text-sm rounded-md hover:bg-red-500 hover:text-white cursor-pointer">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">3</td>
                                <td class="w-1/3 text-left py-3 px-4">Williams</td>
                                <td class="text-left py-3 px-4 text-sm"><a class="">Singaraja, 20 Juni 1990</a></td>
                                <td class="text-left py-3 px-4 text-sm"><a class="">Singaraja</a></td>
                                <td class="text-left py-3 px-4 text-sm"><a class="">081805555888</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                <td class="text-left py-3 px-4">
                                    <div class="flex w-full">
                                        <a class="mr-2 p-2 bg-yellow-300 text-sm rounded-md hover:bg-yellow-500 hover:text-white cursor-pointer">Update</a>
                                        <a class="p-2 bg-red-300 text-sm rounded-md hover:bg-red-500 hover:text-white cursor-pointer">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-dashboard>
