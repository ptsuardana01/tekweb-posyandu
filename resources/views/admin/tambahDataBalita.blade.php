<x-admin-dashboard>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 leading-tight text-center">
            {{ __('Tambah Data Balita') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form class="p-10 bg-white rounded shadow-xl grid lg:grid-cols-2 gap-10">
                    <div class="">
                        <h2 class="text-lg font-semibold">Data Balita</h2>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="name">Name</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="" placeholder="Nama Balita">
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="loclahir">Tempat Lahir</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="loclahir" name="loclahir" type="text" required="" placeholder="Tempat Lahir Balita">
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="tgllahir">Tanggal Lahir</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tgllahir" name="tgllahir" type="date" required="" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="alamat">Alamat</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="alamat" name="alamat" type="text" required="" placeholder="Masukkan Alamat Balita">
                        </div>

                        <h2 class="text-lg font-semibold mt-5">Data Orang Tua</h2>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="nameDad">Nama Ayah</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nameDad" name="nameDad" type="text" required="" placeholder="Masukkan Nama Ayah">
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="nikDad">NIK Ayah</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nikDad" name="nikDad" type="text" required="" placeholder="Masukkan NIK Ayah">
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="nameMom">Nama Ibu</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nameMom" name="nameMom" type="text" required="" placeholder="Masukkan Nama Ibu">
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="nikMom">NIK Ibu</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nikMom" name="nikMom" type="text" required="" placeholder="Masukkan NIK Ibu">
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
                        <h2 class="text-lg font-semibold">Keterangan Balita</h2>
                        <div class="grid grid-cols-2 gap-x-10 gap-y-3">
                            <div class="">
                                <label class="block text-sm text-gray-600" for="age">Umur</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="age" name="age" type="number" required="" placeholder="Umur Balita">
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="tinggi">Tinggi</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tinggi" name="tinggi" type="number" required="" placeholder="Tinggi Balita">
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="berat">Berat</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="berat" name="berat" type="number" required="" placeholder="Berat Balita">
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="lika">Lingkar Kepala</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="lika" name="lika" type="number" required="" placeholder="Lingkar Kepala Balita">
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="kader_id_balita">Petugas Posyandu</label>
                                <select class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="kader_id_balita" name="kader_id_balita" type="text" placeholder="Petugas">
                                    <option value="">-- Pilih Kader --</option>
                                    <option name="" id="">kader</option>
                                    <option name="" id="">kader</option>
                                    <option name="" id="">kader</option>
                                </select>
                                @error('kader_id_balita')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
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
