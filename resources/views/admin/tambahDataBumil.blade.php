<x-admin-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Tambah Data Ibu Hamil') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form class="p-10 bg-white rounded shadow-xl grid lg:grid-cols-2 gap-10">
                    <div class="">
                        <h2 class="text-lg font-semibold">Data Ibu Hamil</h2>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="name">Nama</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="" placeholder="Nama Ibu Hamil">
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="nik">NIK</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nik" name="nik" type="text" required="" placeholder="NIK ibu Hamil">
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="loclahir">Tempat Lahir</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="loclahir" name="loclahir" type="text" required="" placeholder="Tempat Lahir Ibu Hamil">
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="tgllahir">Tanggal Lahir</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tgllahir" name="tgllahir" type="date" required="" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="alamat">Alamat</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="alamat" name="alamat" type="text" required="" placeholder="Masukkan Alamat Ibu Hamil">
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="email">Email</label>
                            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="text" required="" placeholder="Masukkan Email Aktif">
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="telp">Telp</label>
                            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="telp" name="telp" type="tel" required="" placeholder="Masukkan Nomor Telp Aktif">
                        </div>
                    </div>

                    <div class="">
                        <h2 class="text-lg font-semibold">Keterangan Ibu Hamil</h2>
                        <div class="grid grid-cols-2 gap-x-10 gap-y-3">
                            <div class="">
                                <label class="block text-sm text-gray-600" for="age">Umur</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="age" name="age" type="number" required="" placeholder="Umur Bumil">
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="tinggi">Tinggi</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tinggi" name="tinggi" type="number" required="" placeholder="Tinggi Bumil">
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="berat">Berat</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="berat" name="berat" type="number" required="" placeholder="Berat Bumil">
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="lila">Lingkar Lengan</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="lila" name="lila" type="number" required="" placeholder="Lingkar Lengan Bumil">
                            </div>

                        </div>
                    </div>

                    <div class="mt-2">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 hover:bg-green-500 shadow rounded" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-dashboard>
