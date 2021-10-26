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
                            <label class="block text-sm text-gray-600" for="nama">Nama</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nama" name="nama" type="text" placeholder="Nama Ibu Hamil">
                            @error('nama')
                            <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="nik">NIK</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nik" name="nik" type="text" placeholder="NIK ibu Hamil">
                            @error('nik')
                            <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="tmpt_lahir">Tempat Lahir</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tmpt_lahir" name="tmpt_lahir" type="text" placeholder="Tempat Lahir Ibu Hamil">
                            @error('tmpt_lahir')
                            <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="tgl_lahir">Tanggal Lahir</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tgl_lahir" name="tgl_lahir" type="date" placeholder="">
                            @error('tgl_lahir')
                            <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                             @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="alamat">Alamat</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="alamat" name="alamat" type="text" placeholder="Masukkan Alamat Ibu Hamil">
                            @error('alamat')
                            <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="email">Email</label>
                            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="text" placeholder="Masukkan Email Aktif">
                            @error('email')
                            <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="telp">Telp</label>
                            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="telp" name="telp" type="tel" placeholder="Masukkan Nomor Telp Aktif">
                            @error('telp')
                            <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="">
                        <h2 class="text-lg font-semibold">Keterangan Ibu Hamil</h2>
                        <div class="grid grid-cols-2 gap-x-10 gap-y-3">
                            <div class="">
                                <label class="block text-sm text-gray-600" for="umur">Umur</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="umur" name="umur" type="number" placeholder="Umur Bumil">
                                @error('umur')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="tb">Tinggi</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tb" name="tb" type="number" placeholder="Tinggi Bumil">
                                @error('tb')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="bb">Berat</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="bb" name="bb" type="number" placeholder="Berat Bumil">
                                @error('bb')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="lila">Lingkar Lengan</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="lila" name="lila" type="number" placeholder="Lingkar Lengan Bumil">
                                @error('lila')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="kader_id_bumil">Petugas Posyandu</label>
                                <select class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="kader_id_bumil" name="kader_id_bumil" type="text" placeholder="Petugas">
                                    <option value="">-- Pilih Kader --</option>
                                    <option name="" id="">kader</option>
                                    <option name="" id="">kader</option>
                                    <option name="" id="">kader</option>
                                </select>
                                @error('kader_id_bumil')
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
