<x-admin-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Petugas Posyandu
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-0.5 lg:px-1">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5 bg-white border-b border-gray-200">

                    <!-- tabel -->
                    <table class="min-w-full bg-white">
                        <thead class="bg-green-800 text-white">
                            <tr>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nama petugas</th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">TTL</th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Alamat</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</td>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Aksi</td>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">Lian</td>
                                <td class="w-1/3 text-left py-3 px-4">Smith</td>
                                <td class="text-left py-3 px-4"><a class="">Singaraja, 20 Juni 1990</a></td>
                                <td class="text-left py-3 px-4"><a class="">Singaraja</a></td>
                                <td class="text-left py-3 px-4"><a class="">081805555888</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                <td class="text-left py-3 px-4">
                                    <div class="">
                                        <a class="hover:text-blue-500 cursor-pointer">Update</a>
                                        <a class="hover:text-blue-500 cursor-pointer">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="w-1/3 text-left py-3 px-4">Emma</td>
                                <td class="w-1/3 text-left py-3 px-4">Johnson</td>
                                <td class="text-left py-3 px-4"><a class="">Singaraja, 20 Juni 1990</a></td>
                                <td class="text-left py-3 px-4"><a class="">Singaraja</a></td>
                                <td class="text-left py-3 px-4"><a class="">081805555888</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                <td class="text-left py-3 px-4">
                                    <div class="">
                                        <a class="hover:text-blue-500 cursor-pointer">Update</a>
                                        <a class="hover:text-blue-500 cursor-pointer">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">Oliver</td>
                                <td class="w-1/3 text-left py-3 px-4">Williams</td>
                                <td class="text-left py-3 px-4"><a class="">Singaraja, 20 Juni 1990</a></td>
                                <td class="text-left py-3 px-4"><a class="">Singaraja</a></td>
                                <td class="text-left py-3 px-4"><a class="">081805555888</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                <td class="text-left py-3 px-4">
                                    <div class="">
                                        <a class="hover:text-blue-500 cursor-pointer">Update</a>
                                        <a class="hover:text-blue-500 cursor-pointer">Delete</a>
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
