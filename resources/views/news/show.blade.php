<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>{{ $news->title }} - HMPS MI</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
    
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
      /* Style standar dari web kamu */
      @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
      }
      .fade-in {
        opacity: 0;
        animation: fadeIn 0.8s ease-out forwards;
      }
    </style>
</head>
<body class="font-poppins text-gray-800 bg-gray-50">

    <header class="bg-gradient-to-r from-blue-700 to-fuchsia-700 shadow-md sticky top-0 z-50">
        <div class="container max-w-6xl mx-auto px-4 py-4 flex flex-wrap justify-between items-center">
            
            <div class="logo">
                <a href="/"><img src="{{ asset('asset/logo-hmps.png') }}" alt="Logo HMPS MI" class="h-12 rounded-full" ></a>
            </div>
            
            <button id="menu-btn" class="md:hidden p-2 rounded-lg text-white hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-white/50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-8 6h8" />
                </svg>
            </button>
            
            <nav id="menu" class="hidden md:flex w-full md:w-auto mt-4 md:mt-0">
                <ul class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 w-full text-center md:text-left">
                    <li><a href="/" class="font-medium text-white hover:text-blue-300 transition duration-300 block py-2 md:py-0">Beranda</a></li>
                    <li><a href="/#tentang" class="font-medium text-white hover:text-blue-300 transition duration-300 block py-2 md:py-0">Tentang Kami</a></li>
                    <li><a href="/#divisi" class="font-medium text-white hover:text-blue-300 transition duration-300 block py-2 md:py-0">Divisi</a></li>
                    <li><a href="{{ route('news.index') }}" class="font-medium text-white hover:text-blue-300 transition duration-300 block py-2 md:py-0">Pengumuman</a></li>
                    <li><a href="#kontak" class="font-medium text-white hover:text-blue-300 transition duration-300 block py-2 md:py-0">Hubungi kami</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="py-16 md:py-24 bg-white">
        <div class="container max-w-6xl mx-auto px-4 flex flex-col md:flex-row gap-12">
            
            <div class="w-full md:w-2/3 fade-in">
                
                <h1 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">
                    {{ $news->title }}
                </h1>
                
                <div class="flex items-center text-sm text-gray-600 mb-6">
                    <span>Oleh Admin</span>
                    <span class="mx-2">&bull;</span>
                    <span>{{ $news->created_at->translatedFormat('d F Y') }}</span>
                </div>
                
                <div class="w-full h-auto md:h-[400px] rounded-xl overflow-hidden shadow-lg mb-8">
                    <img src="{{ asset('storage/' . ($news->thumbnail ?? 'default.png')) }}" alt="{{ $news->title }}" class="w-full h-full object-cover">
                </div>
                
                <article class="prose prose-lg max-w-none prose-blue">
                    {!! $news->content !!}
                </article>

            </div>
            
            <aside class="w-full md:w-1/3 fade-in" style="animation-delay: 200ms;">
                <div class="sticky top-28 p-6 bg-gray-50 rounded-xl shadow-sm">
                    <h3 class="text-2xl font-semibold text-blue-900 mb-6">Berita Terbaru</h3>
                    
                    <div class="space-y-6">
                        
                        @foreach($recent_posts as $recent)
                            <a href="{{ route('news.show', $recent->slug) }}" class="flex items-center gap-4 group">
                                <div class="w-24 h-20 rounded-lg overflow-hidden flex-shrink-0">
                                    <img src="{{ asset('storage/' . ($recent->thumbnail ?? 'default.png')) }}" alt="{{ $recent->title }}" class="w-full h-full object-cover transition duration-300 group-hover:scale-110">
                                </div>
                                <div>
                                    <h4 class="text-base font-semibold text-gray-800 leading-tight group-hover:text-blue-600 transition duration-300">
                                        {{ $recent->title }}
                                    </h4>
                                    <p class="text-sm text-gray-500 mt-1">
                                        {{ $recent->created_at->translatedFormat('d F Y') }}
                                    </p>
                                </div>
                            </a>
                        @endforeach
                        
                    </div>
                </div>
            </aside>

        </div>
    </main>

    <footer id="kontak" class="text-center p-6 bg-gray-800 text-gray-300 text-sm">
        <div class="container max-w-6xl mx-auto px-4">
            <p>&copy; 2024 HMPS Manajemen Informatika.</p>
        </div>
    </footer>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');
        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>

</body>
</html>