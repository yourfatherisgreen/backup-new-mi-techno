<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMPS MI - Politeknik Negeri Medan</title>
    
    <!-- Impor Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Impor Google Fonts (Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Konfigurasi Kustom Tailwind & Animasi -->
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              // Menjadikan 'Poppins' sebagai font default
              poppins: ['Poppins', 'sans-serif'],
            },
          },
        },
      };
    </script>
    
    <!-- CSS Kustom untuk Animasi Fade-in dan Text Shadow -->
    <style>
      @keyframes fadeIn {
        from {
          opacity: 0;
          transform: translateY(20px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
      
      /* Kelas utilitas untuk animasi */
      .fade-in {
        opacity: 0; /* Mulai dalam keadaan transparan */
        animation: fadeIn 0.8s ease-out forwards;
      }

      /* Kelas untuk text shadow di hero */
      .text-shadow {
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
      }
    </style>
</head>
<body class="font-poppins text-gray-800 bg-gray-50">

    <!-- 1. Navigasi / Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container max-w-6xl mx-auto px-4 py-4 flex flex-col md:flex-row justify-between items-center">
            
            <!-- Logo -->
            <div class="logo">
                <!-- Menggunakan logo HMPS MI yang kecil untuk navigasi, sesuai desain -->
                <img src="{{ asset('asset/logo-hmps.png') }}" alt="Logo HMPS MI" class="h-12 border-2 border-b-cyan-500 rounded-full" >
            </div>
            
            <!-- Link Navigasi -->
            <nav class="mt-4 md:mt-0">
                <ul class="flex space-x-4 md:space-x-6">
                    <li><a href="#" class="font-medium text-gray-700 hover:text-blue-600 transition duration-300">Beranda</a></li>
                    <li><a href="#tentang" class="font-medium text-gray-700 hover:text-blue-600 transition duration-300">Tentang Kami</a></li>
                    <li><a href="#divisi" class="font-medium text-gray-700 hover:text-blue-600 transition duration-300">Divisi</a></li>
                    <li><a href="#" class="font-medium text-gray-700 hover:text-blue-600 transition duration-300">Pengumuman</a></li>
                    <li><a href="#" class="font-medium text-gray-700 hover:text-blue-600 transition duration-300">Hubungi kami</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!-- 2. Hero Section -->
        <!-- Background gradien teal/biru sesuai desain -->
        <!-- DIUBAH: Gradien disesuaikan agar lebih mirip desain (biru langit ke biru) -->
        
        <section class="h-[100vh] bg-gradient-to-br from-sky-400 to-blue-600 flex items-center justify-center text-center px-4 relative ">
           <video autoplay muted loop playsinline 
               class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="{{ asset('asset/videohero (1).mp4') }}" type="video/mp4">
        </video>
        <div class="fade-in">
                <!-- Teks diubah jadi putih dan diberi shadow -->
                <h1 class="text-4xl md:text-5xl font-bold text-white text-shadow mt-3 ">Selamat datang !</h1>
                <p class="text-lg md:text-xl text-white text-shadow mt-5">
                    Selamat Datang di Website<br>HMPS Manajemen Informatika Politeknik Negeri Medan
                </p>
            </div>
        </section>

       
    <!-- 3. Tentang Kami Section -->
            <section   section id="tentang" class="py-16 md:py-24 bg-white relative shadow-xl">
             <div class="container max-w-6xl mx-auto px-4">
          <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12 fade-in">
            Tentang Kami
        </h2>

                <!-- Card: Apa Itu HMPS MI? -->
                <!-- Kartu diubah jadi biru (sesuai desain) dengan teks putih -->
                <!-- DIUBAH: Gradien digelapkan sedikit -->
                <div class="bg-gradient-to-r from-blue-700 to-blue-600 text-white shadow-lg rounded-xl overflow-hidden p-6 md:p-10 mb-8 flex flex-col md:flex-row items-center gap-6 fade-in" style="animation-delay: 0.2s;">
                    <!-- Konten Teks -->
                    <div class="card-content w-full md:w-2/3">
                        <h3 class="text-2xl font-semibold text-white mb-3">Apa Itu HMPS MI ?</h3>
                        <p class="text-blue-50">
                            Himpunan Mahasiswa Manajemen Informatika merupakan organisasi
                            mahasiswa/i yang menjalin rasa kekeluargaan antar mahasiswa/i serta
                            menjunjung tinggi kesetaraan. HMPS-MI POLMED didirikan pada hari
                            Senin, tanggal 10 Juli 2017 di Ruang RKB. Lantai 3, Sekretariat S Kampus
                            Politeknik Negeri Medan Jalan Almamater No. 1 Medan.
                        </p>
                    </div>
                    <!-- Gambar (dengan container putih) -->
                    <div class="card-image w-full md:w-1/3 flex justify-center p-4">
                        <div class="bg-white rounded-lg p-4 shadow-md">
                            <img src="{{ asset('asset/logo-hmps.png') }}"alt="Logo HMPS MI" class="max-h-40 object-contain">
                        </div>
                    </div>
                </div>

                <!-- Card: Visi HMPS MI -->
                <!-- DIUBAH: Gradien digelapkan sedikit -->
                <div class="bg-gradient-to-r from-blue-700 to-blue-600 text-white shadow-lg rounded-xl overflow-hidden p-6 md:p-10 mb-8 flex flex-col md:flex-row items-center gap-6 fade-in" style="animation-delay: 0.4s;">
                    <!-- Konten Teks -->
                    <div class="card-content w-full md:w-2/3">
                        <h3 class="text-2xl font-semibold text-white mb-3">VISI HMPS MI</h3>
                        <p class="text-blue-50">
                            Menjadikan HMPS MI sebagai organisasi yang berkomitmen untuk mengembangkan
                            potensi mahasiswa/i, mempererat solidaritas, serta mewujudkan kolaborasi
                            antar mahasiswa/i. Berintegritas cakupan eksternal melalui bidang non-informatika
                            serta bidang informatika demi menciptakan lingkungan yang inspiratif
                            untuk berkontribusi aktif dalam mencapai tujuan bersama dan prestasi yang
                            membanggakan.
                        </p>
                    </div>
                    <!-- Gambar (dengan container putih) -->
                
                </div>

                <!-- Card: Misi HMPS MI -->
                <!-- DIUBAH: Gradien digelapkan sedikit -->
                <div class="bg-gradient-to-r from-blue-700 to-blue-600 text-white shadow-lg rounded-xl overflow-hidden p-6 md:p-10 mb-8 flex flex-col md:flex-row items-center gap-6 fade-in" style="animation-delay: 0.6s;">
                    <!-- Konten Teks -->
                    <div class="card-content w-full md:w-2/3">
                        <h3 class="text-2xl font-semibold text-white mb-3">MISI HMPS MI</h3>
                        <ul class="list-disc list-inside text-blue-50 space-y-2">
                            <li>Membangun program-program pengembangan diri bagi mahasiswa/i dalam berbagai bidang, baik di dalam maupun di luar lingkup prodi, sehingga setiap mahasiswa/i memiliki kesempatan untuk memaksimalkan
k                               eterampilan, potensi, dan kontribusi mereka guna mencapai tujuan bersama
                            HMPS MI.</li>
                            <li>Meningkatkan kesadaran dan pemahaman seluruh mahasiswa/i mengenai pentingnya peran HMPS dalam mendukung prestasi akademik dan non-akademik melalui sosialisasi yang efektif.</li>
                            <li>Memanfaatkan platform komunikasi yang efektif bagi mahasiswa/i aktif Program Studi untuk berbagi masukan, ide, dan umpan balik terkait pengembangan HMPS. Platform ini akan memastikan keterlibatan aktif mahasiswa/i dalam menanggapi hal yang terjadi pada lingkungan sekitar pembelajaran mereka.</li>
                        </ul>
                    </div>
                    <!-- Gambar (dengan container putih) -->
                 
                </div>

            </div>
        </section>

        <!-- 4. Divisi Section -->
        <section id="divisi" class="py-16 md:py-24 bg-white">
            <div class="container max-w-6xl mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-2 fade-in">DIVISI HMPS MI</h2>
                <h4 class="text-xl text-center text-gray-600 mb-12 fade-in">2024/2025</h4>

               <!-- Grid Divisi (3-2) -->
                <div class="flex flex-wrap justify-center gap-6 w-full">
    @foreach ($divisions as $division)
        <div class="w-full sm:w-60 flex flex-col items-center bg-white rounded-2xl border-4 border-blue-200 p-6 shadow-md transition duration-300 hover:shadow-xl hover:-translate-y-2 fade-in">
            <img src="{{ asset('storage/' . ($division->cover ?? 'default.png')) }}" 
                 alt="{{ $division->name }}" 
                 class="w-full max-w-[150px] object-contain">
            <p class="mt-3 font-semibold text-blue-800">{{ $division->name }}</p>
        </div>
    @endforeach
</div>

                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- 5. Footer -->
    <footer class="text-center p-6 bg-gray-800 text-gray-300 text-sm">
        <div class="container max-w-6xl mx-auto px-4">
            <p>&copy; 2024 HMPS Manajemen Informatika</p>
        </div>
    </footer>

</body>
</html>