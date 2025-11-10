<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMPS MI News</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
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
<body class="font-poppins text-gray-800 bg-gray-50">

    <header class="bg-gradient-to-r from-blue-700 to-fuchsia-700 shadow-md sticky top-0 z-50">
        <div class="container max-w-6xl mx-auto px-4 py-4 flex flex-wrap justify-between items-center">
            
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('asset/logo-hmps.png') }}" alt="Logo HMPS MI" class="h-12 rounded-full" >
                </a>
            </div>
            
            <button id="menu-btn" class="md:hidden p-2 rounded-lg text-white hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-white/50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-8 6h8" />
                </svg>
            </button>
            
            <nav id="menu" class="hidden md:flex w-full md:w-auto mt-4 md:mt-0">
                <ul class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 w-full text-center md:text-left">
                    <li><a href="/" class="font-medium text-white hover:text-blue-300 transition duration-300 block py-2 md:py-0">Beranda</a></li>
                    <li><a href="/#tentang" class="