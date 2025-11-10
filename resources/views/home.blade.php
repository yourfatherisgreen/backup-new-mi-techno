<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMPS MI - Politeknik Negeri Medan</title>
    
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
   
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              poppins: ['Poppins', 'sans-serif'],
            },
          },
        },
      };
    </script>
    
   
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
        opacity: 0; 
        animation: fadeIn 0.8s ease-out forwards;
      }

      .text-shadow {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      }
      .swiper-button-prev, .swiper-button-next {
        background-color: rgba(0, 0, 0, 0.3);
        border-radius: 50%;
        width: 44px;
        height: 44px;
        transition: background-color 0.3s ease;
      }
      .swiper-button-prev:hover, .swiper-button-next:hover {
        background-color: rgba(0, 0, 0, 0.6);
      }
      .swiper-button-prev::after, .swiper-button-next::after {
        font-size: 1.25rem !important;
        font-weight: 700;
        color: white;
      }
      .swiper-pagination-bullet-active {
        background-color: white !important;
      }
    </style>
</head>
<body class="font-poppins text-gray-800 bg-gray-50">

    <!-- 1. Navigasi / Header -->
  <header class="bg-gradient-to-r from-blue-700 to-fuchsia-700 shadow-md sticky top-0 z-50">
    <div class="container max-w-6xl mx-auto px-4 py-4 flex flex-wrap justify-between items-center">
        
        <div class="logo">
            <img src="{{ asset('asset/logo-hmps.png') }}" alt="Logo HMPS MI" class="h-12 rounded-full" >
        </div>
        
        <button id="menu-btn" class="md:hidden p-2 rounded-lg text-white hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-white/50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-8 6h8" />
            </svg>
        </button>
        
        <nav id="menu" class="hidden md:flex w-full md:w-auto mt-4 md:mt-0">
            <ul class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 w-full text-center md:text-left">
                <li><a href="#" class="font-medium text-white hover:text-blue-300 transition duration-300 block py-2 md:py-0">Beranda</a></li>
                <li><a href="#tentang" class="font-medium text-white hover:text-blue-300 transition duration-300 block py-2 md:py-0">Tentang Kami</a></li>
                <li><a href="#divisi" class="font-medium text-white hover:text-blue-300 transition duration-300 block py-2 md:py-0">Divisi</a></li>
                <li><a href="#berita" class="font-medium text-white hover:text-blue-300 transition duration-300 block py-2 md:py-0">Berits</a></li>
                <li><a href="#kontak" class="font-medium text-white hover:text-blue-300 transition duration-300 block py-2 md:py-0">Hubungi kami</a></li>
            </ul>
        </nav>
    </div>
</header>

    <main>
        <!-- 2. Hero Section -->

        <section class="h-[100vh] bg-gradient-to-br from-sky-400 to-blue-600 flex items-center justify-center text-center px-4 relative ">
           <video autoplay muted loop playsinline 
               class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="{{ asset('asset/heronew.webm') }}" type="video/webm">
        </video>
       <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 md:p-8 shadow-lg fade-in">


    <h1 class="text-4xl md:text-5xl font-bold text-white text-shadow">
        Selamat datang !
    </h1>
    <p class="text-lg md:text-xl text-white text-shadow mt-2">
        di Website<br>HMPS Manajemen Informatika Politeknik Negeri Medan
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
                <div class="bg-gradient-to-r from-blue-700 to-fuchsia-600 text-white shadow-lg rounded-xl overflow-hidden p-6 md:p-10 mb-8 flex flex-col md:flex-row items-center gap-6 fade-in" style="animation-delay: 0.2s;">
                    <!-- Konten Teks -->
                    <div class="card-content w-full md:w-2/3 text-left">
                        <h3 class="text-2xl font-semibold text-white mb-3">Apa Itu HMPS MI ?</h3>
                        <p class="text-blue-50">
                            Himpunan Mahasiswa Manajemen Informatika merupakan organisasi kemahasiswaan yang bersifat kekeluargaan dan
                            profesionalitas serta menjunjung tinggi kesetaraan. HMPS-MI POLMED didirikan pada hari
                            Sabtu, tanggal 10 Mei 2008 di Gedung UPT Komputer Lantai 3 kampus Politeknik Negeri Medan Jalan
                            Almamater No. 1 Medan
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
                <div class="bg-gradient-to-r from-blue-700 to-fuchsia-600 text-white shadow-lg rounded-xl overflow-hidden p-6 md:p-10 mb-8 flex flex-col md:flex-row items-center gap-6 fade-in" style="animation-delay: 0.4s;">
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
               
                <div class="bg-gradient-to-r from-blue-700 to-fuchsia-600 text-white shadow-lg rounded-xl overflow-hidden p-6 md:p-10 mb-8 flex flex-col md:flex-row items-center gap-6 fade-in" style="animation-delay: 0.6s;">
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
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-2 fade-in p-8">DIVISI HMPS MI</h2>
              

               <!-- Grid Divisi (3-2) -->
                <div class="flex flex-wrap justify-center gap-6 w-full">
    @foreach ($divisions as $division)
      <a href="{{ route('divisions.show', $division->slug) }}" 
                   class="w-full sm:w-60 flex flex-col items-center bg-white rounded-2xl border-4 border-blue-200 p-6 shadow-md transition duration-300 hover:shadow-xl hover:-translate-y-2 fade-in">
                    
                    <img src="{{ asset('storage/' . ($division->cover ?? 'default.png')) }}" 
                         alt="{{ $division->name }}" 
                         class="w-full max-w-[150px] object-contain">
                    
                    <p class="mt-3 font-semibold text-blue-800">{{ $division->name }}</p>

                </a> 
    @endforeach
</div>

                    </div>

                </div>
            </div>
        </section>
            <section id="berita" class="py-16 md:py-24 bg-gray-100"> <!-- Background diubah jadi abu-abu biar kontras -->
            <div class="container max-w-6xl mx-auto px-4">

                <!-- Judul Section -->
                <div class="mb-12 text-center fade-in">
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Berita Terbaru</h2>
                    <p class="text-lg text-gray-600 mt-2">Ikuti informasi dan kegiatan terbaru kami.</p>
                </div>

                <!-- STRUKTUR SLIDER -->
                <div class="swiper swiper-container relative w-full h-[450px] rounded-2xl shadow-xl overflow-hidden fade-in">
                    
                    <div class="swiper-wrapper">
                        
                        <!-- LOOPING BERITA DARI DATABASE ($latest_news) -->
                        @if(isset($latest_news) && $latest_news->count() > 0)
                            @foreach ($latest_news as $item)
                                <!-- Setiap slide adalah link ke halaman detail -->
                                <a href="{{ route('news.show', $item->slug) }}" class="swiper-slide relative flex items-end text-white">
                                    <!-- Gambar Background -->
                                    <img src="{{ asset('storage/' . ($item->thumbnail ?? 'default.png')) }}" alt="{{ $item->title }}" class="absolute inset-0 w-full h-full object-cover">
                                    
                                    <!-- Gradient Overlay (Biar Judul Kebaca) -->
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                                    
                                    <!-- Konten Judul (di kiri bawah) -->
                                    <div class="relative p-6 md:p-8">
                                        <h3 class="text-2xl md:text-3xl font-bold leading-tight">
                                            {{ $item->title }}
                                        </h3>
                                        <p class="text-gray-300 mt-1">
                                            {{ $item->created_at->translatedFormat('d F Y') }}
                                        </p>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <!-- Fallback jika tidak ada berita -->
                            <div class="swiper-slide flex items-center justify-center bg-gray-200">
                                <p class="text-gray-600">Belum ada berita terbaru.</p>
                            </div>
                        @endif
                        
                    </div> <!-- /swiper-wrapper -->
                    
                    <!-- Tombol Panah Kiri/Kanan -->
                    <div class="swiper-button-prev text-white"></div>
                    <div class="swiper-button-next text-white"></div>
                    
                    <!-- Paginasi (Titik-titik di bawah) -->
                    <div class="swiper-pagination"></div>

                </div> <!-- /swiper-container -->

            </div>
        </section>
    </main>

  <footer id="kontak" class="bg-gradient-to-r from-blue-700 to-fuchsia-700 text-gray-300">
        <div class="container max-w-6xl mx-auto px-4">

            <div class="py-16 grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="md:col-span-2 text-center md:text-left">
                    <!-- Alamat -->
                    <div class="mb-10">
                        <h3 class="text-lg font-semibold text-white mb-2">HMPS MANAJEMEN INFORMATIKA </h3>
                        <p class="text-sm leading-relaxed">
                            Jalan Almamater No. 1, Gedung N Lt.2, Politeknik Negeri Medan<br>
                            Kecamatan Medan Baru, Kota Medan, Sumatera Utara 20155
                        </p>
                    </div>
                    
                    <!-- Sosial Media -->
                    <div>
                        <h3 class="text-lg font-semibold text-white mb-4">Sosial Media</h3>
                        <div class="flex justify-center md:justify-start gap-3">
                            <!-- Ganti <a> ini dengan link & icon SVG kamu -->
                            <a href="https://www.instagram.com/mipolmed?igsh=MXVtaW0yNHU4eG92aA==" class="w-10 h-10 bg-black rounded-full flex items-center justify-center transition-colors hover:bg-white">
                            <img src= "{{asset ('asset/instagram.png')}}" alt="instagram" class="h-5">
                            </a>
                           <a href="https://www.youtube.com/@mipolmed" class="w-10 h-10 bg-black rounded-full flex items-center justify-center transition-colors hover:bg-white">
                                 <img src= "{{asset ('asset/youtube.png')}}" alt="youtube" class="h-5">
                            </a>
                            </a>
                           <a href="https://www.tiktok.com/@mipolmed?_r=1&_t=ZS-91GwjlX4teu" class="w-10 h-10 bg-black rounded-full flex items-center justify-center transition-colors hover:bg-white">
                                 <img src= "{{asset ('asset/tik-tok.png')}}" alt="tiktok" class="h-5">
                            </a>

                       
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan: Logo & Slogan (Lebih Sempit) -->
                <div class="md:col-span-1 flex flex-col items-center justify-center pt-8 md:pt-0">
                    <!-- Ganti 'src' dengan path logo kamu -->
                    <img src="{{asset ('asset/logo-kabinet.png')}}" alt="Logo Kabinet" class="h-50 w-50 object-contain bg-white rounded-2xl">
                   
                </div>

            </div>

            <!-- Bagian Bawah Footer (Copyright) -->
            <div class="border-t border-white/20 py-6">
                <p class="text-center text-sm text-gray-400">
                    © HMPS MANAJEMEN INFORMATIKA| Kabinet Revolutionaire. Made by Muhammad Azmi Rahman Nasution
                </p>
            </div>

        </div>
    </footer>
<script>
    const menuBtn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');

    menuBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 5000, // Geser otomatis tiap 5 detik
                disableOnInteraction: false,
            },
            
            // Paginasi (Titik-titik di bawah)
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Tombol Panah
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>