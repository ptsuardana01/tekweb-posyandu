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
                            <label class="block text-sm text-gray-600" for="nama">Nama</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nama" name="nama" type="text" required="" placeholder="Nama Balita">
                            @error('kader_id_bumil')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="tmpt_lahir">Tempat Lahir</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tmpt_lahir" name="tmpt_lahir" type="text" required="" placeholder="Tempat Lahir Balita">
                            @error('kader_id_bumil')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="tgl_lahir">Tanggal Lahir</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tgl_lahir" name="tgl_lahir" type="date" required="" placeholder="">
                            @error('kader_id_bumil')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="alamat">Alamat</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="alamat" name="alamat" type="text" required="" placeholder="Masukkan Alamat Balita">
                            @error('kader_id_bumil')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>

                        <h2 class="text-lg font-semibold mt-5">Data Orang Tua</h2>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="nama_ayah">Nama Ayah</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nama_ayah" name="nama_ayah" type="text" required="" placeholder="Masukkan Nama Ayah">
                            @error('kader_id_bumil')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="nik_ayah">NIK Ayah</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nik_ayah" name="nik_ayah" type="text" required="" placeholder="Masukkan NIK Ayah">
                            @error('kader_id_bumil')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="nama_ibu">Nama Ibu</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nama_ibu" name="nama_ibu" type="text" required="" placeholder="Masukkan Nama Ibu">
                            @error('kader_id_bumil')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="nik_ibu">NIK Ibu</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nik_ibu" name="nik_ibu" type="text" required="" placeholder="Masukkan NIK Ibu">
                            @error('kader_id_bumil')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="email">Email</label>
                            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="text" required="" placeholder="Masukkan Email Aktif">
                            @error('kader_id_bumil')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="telp">Telp</label>
                            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="telp" name="telp" type="tel" required="" placeholder="Masukkan Nomor Telp Aktif">
                            @error('kader_id_bumil')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="">
                        <h2 class="text-lg font-semibold">Keterangan Balita</h2>
                        <div class="grid grid-cols-2 gap-x-10 gap-y-3">
                            <div class="">
                                <label class="block text-sm text-gray-600" for="umur">Umur</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="umur" name="umur" type="number" required="" placeholder="Umur Balita">
                                @error('kader_id_bumil')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="tb">Tinggi</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tb" name="tb" type="number" required="" placeholder="Tinggi Balita">
                                @error('kader_id_bumil')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="bb">Berat</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="bb" name="bb" type="number" required="" placeholder="Berat Balita">
                                @error('kader_id_bumil')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="lika">Lingkar Kepala</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="lika" name="lika" type="number" required="" placeholder="Lingkar Kepala Balita">
                                @error('kader_id_bumil')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
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
