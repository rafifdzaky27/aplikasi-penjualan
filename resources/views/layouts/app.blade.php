<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penjualan Barang</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#64748b',
                        success: '#10b981',
                        danger: '#ef4444',
                        warning: '#f59e0b',
                        info: '#3b82f6',
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .content-area {
                @apply pb-20;
            }
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Navbar -->
    <nav class="bg-gray-800 text-white shadow-lg mb-6">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a class="text-xl font-bold" href="{{ route('dashboard') }}">Aplikasi Penjualan Barang</a>
                <div class="block">
                    <button id="mobile-menu-button" class="md:hidden flex items-center px-3 py-2 border rounded text-gray-300 border-gray-400 hover:text-white hover:border-white">
                        <svg class="fill-current h-4 w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                </div>
                <div class="hidden md:block">
                    <div class="flex space-x-4">
                        <a class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 hover:text-white" href="{{ route('dashboard') }}"><i class="fas fa-home mr-1"></i> Dashboard</a>
                        <a class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 hover:text-white" href="{{ route('barang.index') }}"><i class="fas fa-box mr-1"></i> Barang</a>
                        <a class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 hover:text-white" href="{{ route('pelanggan.index') }}"><i class="fas fa-users mr-1"></i> Pelanggan</a>
                        <a class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 hover:text-white" href="{{ route('penjualan.index') }}"><i class="fas fa-shopping-cart mr-1"></i> Penjualan</a>
                    </div>
                </div>
            </div>
            <!-- Mobile menu, show/hide based on menu state. -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <a class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700 hover:text-white" href="{{ route('dashboard') }}"><i class="fas fa-home mr-1"></i> Dashboard</a>
                    <a class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700 hover:text-white" href="{{ route('barang.index') }}"><i class="fas fa-box mr-1"></i> Barang</a>
                    <a class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700 hover:text-white" href="{{ route('pelanggan.index') }}"><i class="fas fa-users mr-1"></i> Pelanggan</a>
                    <a class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700 hover:text-white" href="{{ route('penjualan.index') }}"><i class="fas fa-shopping-cart mr-1"></i> Penjualan</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mx-auto px-4 content-area">
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded" role="alert">
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-2"></i>
                    <span>{{ session('success') }}</span>
                    <button type="button" class="ml-auto" onclick="this.parentElement.parentElement.remove()">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4 rounded" role="alert">
                <div class="flex items-center">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    <span>{{ session('error') }}</span>
                    <button type="button" class="ml-auto" onclick="this.parentElement.parentElement.remove()">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        @endif

        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 fixed bottom-0 w-full">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; {{ date('Y') }} Aplikasi Penjualan Barang</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
            
            // Delete confirmation
            const deleteButtons = document.querySelectorAll('.delete-confirm');
            
            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const form = this.closest('form');
                    
                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Data yang dihapus tidak dapat dikembalikan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#ef4444',
                        cancelButtonColor: '#64748b',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>
