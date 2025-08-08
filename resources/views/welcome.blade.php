<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IKMKB Jakarta - Ikatan Keluarga Masyarakat Kabupaten Bengkalis Jakarta</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#1d914b',
                        'primary-dark': '#166a37',
                        'primary-light': '#22c55e'
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gradient-to-br from-green-50 to-green-100 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="IKMKB Logo" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <h1 class="text-xl font-bold text-gray-800">IKMKB Jakarta</h1>
                        <p class="text-sm text-gray-600">Ikatan Keluarga Masyarakat Kabupaten Bengkalis Jakarta</p>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <button onclick="showLogin()" class="px-4 py-2 text-primary hover:text-primary-dark">Masuk</button>
                    <button onclick="showRegister()" class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark">Daftar</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="heroSection" class="py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-5xl font-bold text-gray-800 mb-6">Selamat Datang di IKMKB Jakarta</h2>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                Ikatan Keluarga Masyarakat Kabupaten Bengkalis Jakarta adalah wadah silaturahmi dan kekeluargaan 
                bagi putra-putri Bengkalis yang berada di Jakarta dan sekitarnya.
            </p>
            <button onclick="showRegister()" class="px-8 py-4 bg-primary text-white text-lg rounded-lg hover:bg-primary-dark transform hover:scale-105 transition duration-300">
                Bergabung Sekarang
            </button>
        </div>
    </section>

    <!-- Features -->
    <section id="featuresSection" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h3 class="text-3xl font-bold text-center text-gray-800 mb-12">Keuntungan Menjadi Anggota</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-id-card text-primary text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Kartu Anggota Digital</h4>
                    <p class="text-gray-600">Dapatkan kartu anggota digital yang dapat digunakan untuk berbagai kegiatan</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-calendar-alt text-green-600 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Event & Kegiatan</h4>
                    <p class="text-gray-600">Ikuti berbagai event dan kegiatan yang diselenggarakan oleh IKMKB Jakarta</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-handshake text-green-600 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Networking</h4>
                    <p class="text-gray-600">Perluas jaringan dengan sesama putra-putri Bengkalis di Jakarta</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Login Form -->
    <section id="loginSection" class="py-16 bg-gray-50 hidden">
        <div class="max-w-md mx-auto px-4">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold">Masuk</h3>
                    <button onclick="showHome()" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" name="password" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                    </div>
                    <button type="submit" class="w-full bg-primary text-white py-2 rounded-lg hover:bg-primary-dark">Masuk</button>
                </form>
                <div class="mt-4 text-center">
                    <p class="text-gray-600">Belum punya akun? <button onclick="showRegister()" class="text-primary hover:text-primary-dark">Daftar di sini</button></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Register Form -->
    <section id="registerSection" class="py-16 bg-gray-50 hidden">
        <div class="max-w-6xl mx-auto px-4">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold">Daftar Anggota IKMKB Jakarta</h3>
                    <button onclick="showHome()" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Data Pribadi -->
                        <div class="space-y-4">
                            <h4 class="text-lg font-semibold text-gray-900 border-b pb-2">Data Pribadi</h4>
                            
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap *</label>
                                <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Email *</label>
                                <input type="email" name="email" value="{{ old('email') }}" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Password *</label>
                                <input type="password" name="password" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Konfirmasi Password *</label>
                                <input type="password" name="password_confirmation" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Tanggal Lahir *</label>
                                <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Tempat Lahir *</label>
                                <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Jenis Kelamin *</label>
                                <select name="jenis_kelamin" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                                    <option value="">Pilih</option>
                                    <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Golongan Darah *</label>
                                <select name="golongan_darah" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                                    <option value="">Pilih</option>
                                    <option value="A+" {{ old('golongan_darah') == 'A+' ? 'selected' : '' }}>A+</option>
                                    <option value="A-" {{ old('golongan_darah') == 'A-' ? 'selected' : '' }}>A-</option>
                                    <option value="B+" {{ old('golongan_darah') == 'B+' ? 'selected' : '' }}>B+</option>
                                    <option value="B-" {{ old('golongan_darah') == 'B-' ? 'selected' : '' }}>B-</option>
                                    <option value="AB+" {{ old('golongan_darah') == 'AB+' ? 'selected' : '' }}>AB+</option>
                                    <option value="AB-" {{ old('golongan_darah') == 'AB-' ? 'selected' : '' }}>AB-</option>
                                    <option value="O+" {{ old('golongan_darah') == 'O+' ? 'selected' : '' }}>O+</option>
                                    <option value="O-" {{ old('golongan_darah') == 'O-' ? 'selected' : '' }}>O-</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">NIK *</label>
                                <input type="text" name="nik" value="{{ old('nik') }}" maxlength="16" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Pekerjaan *</label>
                                <input type="text" name="pekerjaan" value="{{ old('pekerjaan') }}" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                            </div>
                        </div>

                        <!-- Data Domisili & Keluarga -->
                        <div class="space-y-4">
                            <h4 class="text-lg font-semibold text-gray-900 border-b pb-2">Data Domisili & Keluarga</h4>
                            
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Alamat Lengkap di Jakarta *</label>
                                <textarea name="alamat_jakarta" required rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">{{ old('alamat_jakarta') }}</textarea>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Kota Bagian *</label>
                                <select name="kota_bagian" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                                    <option value="">Pilih</option>
                                    <option value="Jakarta Utara" {{ old('kota_bagian') == 'Jakarta Utara' ? 'selected' : '' }}>Jakarta Utara</option>
                                    <option value="Jakarta Selatan" {{ old('kota_bagian') == 'Jakarta Selatan' ? 'selected' : '' }}>Jakarta Selatan</option>
                                    <option value="Jakarta Barat" {{ old('kota_bagian') == 'Jakarta Barat' ? 'selected' : '' }}>Jakarta Barat</option>
                                    <option value="Jakarta Timur" {{ old('kota_bagian') == 'Jakarta Timur' ? 'selected' : '' }}>Jakarta Timur</option>
                                    <option value="Jakarta Pusat" {{ old('kota_bagian') == 'Jakarta Pusat' ? 'selected' : '' }}>Jakarta Pusat</option>
                                    <option value="Kota Tangerang" {{ old('kota_bagian') == 'Kota Tangerang' ? 'selected' : '' }}>Kota Tangerang</option>
                                    <option value="Kabupaten Tangerang" {{ old('kota_bagian') == 'Kabupaten Tangerang' ? 'selected' : '' }}>Kabupaten Tangerang</option>
                                    <option value="Tangerang Selatan" {{ old('kota_bagian') == 'Tangerang Selatan' ? 'selected' : '' }}>Tangerang Selatan</option>
                                    <option value="Depok" {{ old('kota_bagian') == 'Depok' ? 'selected' : '' }}>Depok</option>
                                    <option value="Bekasi" {{ old('kota_bagian') == 'Bekasi' ? 'selected' : '' }}>Bekasi</option>
                                    <option value="Bogor" {{ old('kota_bagian') == 'Bogor' ? 'selected' : '' }}>Bogor</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Nomor HP *</label>
                                <input type="text" name="no_telepon" value="{{ old('no_telepon') }}" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Foto KTP * (Maks 5MB)</label>
                                <input type="file" name="foto_ktp" accept="image/*" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Nama Orang Tua (Ayah/Ibu yang lahir di Bengkalis) *</label>
                                <input type="text" name="nama_ortu" value="{{ old('nama_ortu') }}" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Tanggal Lahir Orang Tua *</label>
                                <input type="date" name="tanggal_lahir_ortu" value="{{ old('tanggal_lahir_ortu') }}" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Tempat Lahir Orang Tua *</label>
                                <input type="text" name="tempat_lahir_ortu" value="{{ old('tempat_lahir_ortu') }}" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Status Rumah *</label>
                                <select name="status_rumah" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary">
                                    <option value="">Pilih</option>
                                    <option value="Rumah Tetap" {{ old('status_rumah') == 'Rumah Tetap' ? 'selected' : '' }}>Rumah Tetap</option>
                                    <option value="Rumah Kontrak" {{ old('status_rumah') == 'Rumah Kontrak' ? 'selected' : '' }}>Rumah Kontrak</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="w-full mt-6 bg-primary text-white py-3 rounded-lg hover:bg-primary-dark">Daftar Sekarang</button>
                </form>
                <div class="mt-4 text-center">
                    <p class="text-gray-600">Sudah punya akun? <button onclick="showLogin()" class="text-primary hover:text-primary-dark">Masuk di sini</button></p>
                </div>
            </div>
        </div>
    </section>

    <script>
        function showHome() {
            document.getElementById('heroSection').classList.remove('hidden');
            document.getElementById('featuresSection').classList.remove('hidden');
            document.getElementById('loginSection').classList.add('hidden');
            document.getElementById('registerSection').classList.add('hidden');
        }

        function showLogin() {
            document.getElementById('heroSection').classList.add('hidden');
            document.getElementById('featuresSection').classList.add('hidden');
            document.getElementById('loginSection').classList.remove('hidden');
            document.getElementById('registerSection').classList.add('hidden');
        }

        function showRegister() {
            document.getElementById('heroSection').classList.add('hidden');
            document.getElementById('featuresSection').classList.add('hidden');
            document.getElementById('loginSection').classList.add('hidden');
            document.getElementById('registerSection').classList.remove('hidden');
        }

        @if($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Pendaftaran Gagal!',
                html: '<ul style="text-align: left;">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
                confirmButtonColor: '#1d914b'
            });
            showRegister();
        @endif

        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#1d914b'
            });
        @endif
    </script>
</body>
</html>