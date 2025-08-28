{{-- resources/views/layouts/admin.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ trans('panel.site_title') }}</title>

    <!-- Fontawesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Tailwind + AlpineJS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            200: '#ddd6fe',
                            300: '#c4b5fd',
                            400: '#a78bfa',
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6d28d9',
                            800: '#5b21b6',
                            900: '#4c1d95',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .sidebar-item { position: relative; }
        .sidebar-item.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            height: 60%;
            width: 4px;
            background: linear-gradient(to bottom, #8b5cf6, #6d28d9);
            border-radius: 0 4px 4px 0;
        }
    </style>
    @yield('styles')
</head>

<body class="bg-gray-50 min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-72 bg-gradient-to-b from-white to-primary-50 shadow-xl border-r border-gray-100 min-h-screen hidden md:block">
        <div class="p-5 border-b border-gray-200 flex items-center">
            <div class="bg-primary-600 p-2 rounded-lg mr-3">
                <i class="fas fa-rocket text-white text-sm"></i>
            </div>
            <h1 class="text-xl font-bold text-primary-800">{{ trans('panel.site_title') }}</h1>
        </div>

        <nav class="p-4 space-y-1 mt-2">
            <!-- Example Dashboard -->
            <a href="{{ route('admin.home') }}"
               class="sidebar-item flex items-center px-4 py-3 rounded-xl transition-all duration-200 hover:bg-primary-100 hover:shadow-sm hover:pl-5
                {{ request()->is('admin') ? 'bg-primary-100 text-primary-700 font-medium' : 'text-gray-700' }}">
                <div class="bg-primary-100 p-2 rounded-lg">
                    <i class="fas fa-tachometer-alt text-primary-600 w-5"></i>
                </div>
                <span class="ml-3">{{ trans('global.dashboard') }}</span>
                <i class="fas fa-chevron-right text-primary-400 text-xs ml-auto"></i>
            </a>

            {{-- 🔽 Yahan pe apna pura sidebar menu (user management, stock, reports, etc.) Tailwind version daalna hai --}}
            @include('partials.menu')

        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Navbar -->
        <header class="flex items-center justify-between bg-white shadow px-6 py-3">
            <div>
                <button class="md:hidden text-gray-600"><i class="fas fa-bars"></i></button>
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-gray-600">{{ auth()->user()->name ?? 'User' }}</span>
                <form id="logoutform" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-red-600 hover:text-red-800">
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                </form>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 p-6">
            @if(session('message'))
                <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
                    {{ session('message') }}
                </div>
            @endif
            @if($errors->count() > 0)
                <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-lg">
                    <ul class="list-disc pl-5">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t text-center py-3 text-gray-500 text-sm">
            <strong>{{ trans('panel.site_title') }}</strong> &copy; {{ trans('global.allRightsReserved') }}
        </footer>
    </div>

    @yield('scripts')
</body>
</html>
