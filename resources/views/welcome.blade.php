<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Booking System</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    .bg-overlay {
      background-color: rgba(255, 255, 255, 0.4);
      position: absolute;
      inset: 0;
      z-index: 0;
      backdrop-filter: blur(6px);
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in-up {
      animation: fadeInUp 0.8s ease-out forwards;
    }
  </style>
</head>
<body class="relative min-h-screen bg-rose-50 font-sans text-gray-900">

  <!-- Hero Section -->
  <section class="relative min-h-screen flex items-center justify-center px-6"
           style="background-image: url('https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=1470&q=80'); background-size: cover; background-position: center;">
    
    <div class="bg-overlay"></div>

    <div class="relative z-10 max-w-6xl w-full bg-white/30 backdrop-blur-lg rounded-3xl shadow-2xl p-16 fade-in-up grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

      <!-- Left Column -->
      <div class="space-y-6">
        <h1 class="text-5xl font-extrabold text-rose-600 leading-tight">
          Welcome to <br><span class="text-rose-500">My Booking System</span>
        </h1>
        <p class="text-lg text-gray-800">
          Effortless appointment scheduling tailored for your needs. Book, manage, and track appointments in just a few clicks.
        </p>
        <div class="flex flex-wrap gap-4 mt-6">
          <a href="{{ route('register') }}"
             class="px-6 py-3 bg-rose-500 text-white font-medium rounded-xl shadow hover:bg-rose-600 hover:scale-105 transition transform">
            Get Started
          </a>
          <a href="{{ route('login') }}"
             class="px-6 py-3 border border-rose-400 text-rose-500 font-medium rounded-xl hover:bg-rose-100 hover:scale-105 transition transform">
            Login
          </a>
        </div>
      </div>

      <!-- Right Column -->
      <div class="hidden md:block">
        <img src="https://cdn-icons-png.flaticon.com/512/3208/3208707.png" alt="Booking Illustration"
             class="w-full max-w-sm mx-auto drop-shadow-2xl" />
      </div>

    </div>
  </section>

</body>
</html>
