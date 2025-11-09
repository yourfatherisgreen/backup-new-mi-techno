<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>Detail Divisi - HMPS MI</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              poppins: ['Poppins', 'sans-serif'],
            },
            opacity: {
              '95': '.95',
            }
          },
        },
      };
    </script>
    
    <style>
      @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
      }
      .fade-in {
        opacity: 0;
        animation: fadeIn 0.8s ease-out forwards;
      }
      .text-shadow {
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
      }
    </style>
</head>
<body class="font-poppins text-gray-800 bg-blue-900">

    <div class="w-full min-h-screen" style="background-image: url('/asset/bgdivisi.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">

        <section id="detail-divisi" class="py-16 md:py-24 min-h-screen flex items-center">
            <div class="container max-w-6xl mx-auto px-4 fade-in">
                
                <div class="flex flex-col items-center text-center">
                    
                    <img src="{{ asset('storage/' . ($division->cover ?? 'default.png')) }}" 
                         alt="{{ $division->name }}"
                         class="w-full max-w-[150px] object-contain mb-4"/> <h2 class="text-4xl font-bold text-white text-shadow mb-12">{{ $division->name }}</h2>

                    <div class="w-full max-w-3xl bg-white/95 rounded-2xl shadow-2xl p-8 md:p-10 text-gray-800 text-left">
                        <p class="text-lg text-gray-700 mb-6 text-center">
                            "{{$division->description}}" </p>
                        <h3 class="text-2xl font-semibold mb-4 text-blue-800 text-center">Program kerja :</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-md mx-auto">
                            
                            @foreach ($division->programs as $program)
                            <li>{{ $program->name }}</li>
                            <p>{{ $program->description }}</p>
                             @endforeach
                            
                        </ul>
                    </div>
                
                </div>

            </div>
        </section>

        <section id="struktur-divisi" class="py-16 md:py-24 min-h-screen flex items-center">
    <div class="container max-w-6xl mx-auto px-4 fade-in">
    
        <h2 class="text-4xl font-bold text-white text-shadow text-center mb-12"> Struktur {{ $division->name }}</h2>
        
        <div class="flex flex-wrap justify-center gap-6 md:gap-8">
            
            @foreach ($division->members as $member)
                
                <div class="bg-white/95 rounded-2xl shadow-lg p-4 w-48 text-center text-gray-800 transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('storage/' . ($member->photo ?? 'default.png')) }}" alt="{{$member->name}}" class="w-full h-auto rounded-lg mx-auto object-cover mb-3 shadow-md">
                    <h4 class="font-semibold text-base text-blue-900">{{$member->name}}</h4>
                    <p class="text-gray-600 text-sm">{{$member->position}}</p>
                </div> 
                @endforeach
            
        </div> </div>
</section>

        <section id="galeri" class="py-16 md:py-24 min-h-screen flex items-center">
            <div class="container max-w-4xl mx-auto px-4 fade-in">
                <h2 class="text-4xl font-bold text-white text-shadow text-center mb-12">OUR GALLERY</h2>
               
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4">
                     @foreach ($division->galleries as $gallery)
                    <div class="bg-white/95 rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                        <img src="{{ asset('storage/' . ($gallery->image_path ?? 'default.png'))}}" alt="foto" class="w-full h-auto object-cover aspect-square">
                    </div>
                    @endforeach
                </div>
                
            </div>
        </section>

    </div> 

</body>
</html>