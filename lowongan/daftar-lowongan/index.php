<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lowongan Magang - Dashboard Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .sidebar-gradient {
            background: linear-gradient(180deg, #667eea 0%, #764ba2 100%);
        }
        .job-card {
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.3);
        }
        .featured-job {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }
        .search-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .filter-active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .company-logo {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }
        .tag {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }
        .progress-bar {
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 sidebar-gradient text-white">
            <!-- Header -->
            <div class="p-6 border-b border-white/20">
                <div class="flex items-center justify-between">
                    <button class="text-white/80 hover:text-white">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <div class="mt-4">
                    <h1 class="text-xl font-bold">Selamat Datang, Yopa Pitra Ramadhani</h1>
                    <p class="text-white/80 text-sm mt-1">Jadilah generasi genius selanjutnya.</p>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="mt-6">
                <ul class="space-y-2 px-4">
                    <li>
                        <a href="#" class="flex items-center px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors">
                            <i class="fas fa-home mr-3"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors">
                            <i class="fas fa-user mr-3"></i>
                            Profil
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-4 py-3 text-white bg-white/20 rounded-lg transition-colors">
                            <i class="fas fa-briefcase mr-3"></i>
                            Lowongan Magang
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors">
                            <i class="fas fa-file-alt mr-3"></i>
                            Laporan Magang
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors">
                            <i class="fas fa-calendar mr-3"></i>
                            Jadwal Bimbingan
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors">
                            <i class="fas fa-bell mr-3"></i>
                            Notifikasi
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Logout Button -->
            <div class="absolute bottom-6 left-4 right-4">
                <button class="flex items-center w-full px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Logout
                </button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Top Bar -->
            <div class="dark-card shadow-sm border-b border-gray-700 px-6 py-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <h2 class="text-2xl font-bold text-white">Lowongan Magang</h2>
                        <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full">45+ Lowongan</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="text-gray-300">Yopa Pitra Ramadhani</span>
                        <div class="w-10 h-10 bg-gray-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search and Filter Section -->
            <div class="search-gradient p-6 text-white">
                <div class="max-w-4xl mx-auto">
                    <h3 class="text-2xl font-bold mb-6">Temukan Magang Impian Anda</h3>
                    
                    <!-- Search Bar -->
                    <div class="flex space-x-4 mb-6">
                        <div class="flex-1 relative">
                            <input type="text" placeholder="Cari posisi, perusahaan, atau lokasi..." 
                                   class="w-full px-4 py-3 pl-12 bg-white/20 backdrop-blur-sm border border-white/30 rounded-lg text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50">
                            <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-white/70"></i>
                        </div>
                        <button class="bg-white/20 backdrop-blur-sm border border-white/30 px-6 py-3 rounded-lg hover:bg-white/30 transition-colors">
                            <i class="fas fa-search mr-2"></i>Cari
                        </button>
                    </div>

                    <!-- Quick Filters -->
                    <div class="flex flex-wrap gap-3">
                        <button class="tag px-4 py-2 rounded-full text-sm border border-white/30 hover:bg-white/30 transition-colors">
                            <i class="fas fa-code mr-2"></i>IT & Software
                        </button>
                        <button class="tag px-4 py-2 rounded-full text-sm border border-white/30 hover:bg-white/30 transition-colors">
                            <i class="fas fa-chart-line mr-2"></i>Marketing
                        </button>
                        <button class="tag px-4 py-2 rounded-full text-sm border border-white/30 hover:bg-white/30 transition-colors">
                            <i class="fas fa-palette mr-2"></i>Design
                        </button>
                        <button class="tag px-4 py-2 rounded-full text-sm border border-white/30 hover:bg-white/30 transition-colors">
                            <i class="fas fa-building mr-2"></i>Business
                        </button>
                        <button class="tag px-4 py-2 rounded-full text-sm border border-white/30 hover:bg-white/30 transition-colors">
                            <i class="fas fa-map-marker-alt mr-2"></i>Jakarta
                        </button>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="flex-1 p-6">
                <div class="flex space-x-6">
                    <!-- Filters Sidebar -->
                    <div class="w-80">
                        <div class="dark-card rounded-xl shadow-lg p-6 sticky top-6">
                            <h4 class="font-bold text-white mb-4">Filter Lowongan</h4>
                            
                            <!-- Location Filter -->
                            <div class="mb-6">
                                <h5 class="font-semibold text-gray-300 mb-3">Lokasi</h5>
                                <div class="space-y-2">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-3 accent-purple-500">
                                        <span class="text-gray-400">Jakarta (23)</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-3 accent-purple-500">
                                        <span class="text-gray-400">Bandung (12)</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-3 accent-purple-500">
                                        <span class="text-gray-400">Surabaya (8)</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-3 accent-purple-500">
                                        <span class="text-gray-400">Remote (15)</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Duration Filter -->
                            <div class="mb-6">
                                <h5 class="font-semibold text-gray-300 mb-3">Durasi</h5>
                                <div class="space-y-2">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-3 accent-purple-500">
                                        <span class="text-gray-400">3 Bulan (18)</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-3 accent-purple-500">
                                        <span class="text-gray-400">6 Bulan (25)</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-3 accent-purple-500">
                                        <span class="text-gray-400">12 Bulan (7)</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Compensation Filter -->
                            <div class="mb-6">
                                <h5 class="font-semibold text-gray-300 mb-3">Kompensasi</h5>
                                <div class="space-y-2">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-3 accent-purple-500">
                                        <span class="text-gray-400">Berbayar (30)</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-3 accent-purple-500">
                                        <span class="text-gray-400">Tidak Berbayar (15)</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Clear Filters -->
                            <button class="w-full bg-gray-600 hover:bg-gray-500 text-gray-200 py-2 rounded-lg transition-colors">
                                Reset Filter
                            </button>
                        </div>
                    </div>

                    <!-- Job Listings -->
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-6">
                            <p class="text-gray-400">Menampilkan 45 lowongan magang</p>
                            <select class="dark-card border-gray-600 rounded-lg px-4 py-2 text-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500">
                                <option>Terbaru</option>
                                <option>Paling Relevan</option>
                                <option>Gaji Tertinggi</option>
                                <option>Deadline Terdekat</option>
                            </select>
                        </div>

                        <!-- Featured Job -->
                        <div class="featured-job job-card text-white p-6 rounded-xl shadow-lg mb-6">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-start space-x-4">
                                    <div class="company-logo w-16 h-16 rounded-xl flex items-center justify-center">
                                        <i class="fas fa-rocket text-2xl text-white"></i>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <h3 class="text-xl font-bold">Frontend Developer Intern</h3>
                                            <span class="bg-yellow-400 text-yellow-900 text-xs px-2 py-1 rounded-full font-semibold">FEATURED</span>
                                        </div>
                                        <p class="text-white/90 text-lg mb-1">TechnoVerse Indonesia</p>
                                        <p class="text-white/70 text-sm"><i class="fas fa-map-marker-alt mr-1"></i>Jakarta Selatan • Remote Available</p>
                                    </div>
                                </div>
                                <button class="text-white/60 hover:text-white">
                                    <i class="fas fa-heart text-xl"></i>
                                </button>
                            </div>
                            
                            <p class="text-white/90 mb-4">Bergabunglah dengan tim development kami untuk mengembangkan aplikasi web modern menggunakan React, Vue.js, dan teknologi frontend terdepan.</p>
                            
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="tag px-3 py-1 text-xs rounded-full">React</span>
                                <span class="tag px-3 py-1 text-xs rounded-full">JavaScript</span>
                                <span class="tag px-3 py-1 text-xs rounded-full">Vue.js</span>
                                <span class="tag px-3 py-1 text-xs rounded-full">CSS</span>
                            </div>
                            
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4 text-sm text-white/80">
                                    <span><i class="fas fa-money-bill-wave mr-1"></i>Rp 3.000.000/bulan</span>
                                    <span><i class="fas fa-clock mr-1"></i>6 bulan</span>
                                    <span><i class="fas fa-calendar mr-1"></i>Deadline: 30 Juni</span>
                                </div>
                                <button class="bg-white/20 backdrop-blur-sm hover:bg-white/30 px-6 py-2 rounded-lg transition-colors">
                                    Lamar Sekarang
                                </button>
                            </div>
                        </div>

                        <!-- Regular Job Cards -->
                        <div class="space-y-4">
                            <!-- Job Card 1 -->
                            <div class="job-card text-white p-6 rounded-xl shadow-lg">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-start space-x-4">
                                        <div class="company-logo w-12 h-12 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-mobile-alt text-lg text-white"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-lg font-bold mb-1">Mobile App Development Intern</h3>
                                            <p class="text-white/90 mb-1">Digital Solutions Corp</p>
                                            <p class="text-white/70 text-sm"><i class="fas fa-map-marker-alt mr-1"></i>Bandung • Hybrid</p>
                                        </div>
                                    </div>
                                    <button class="text-white/60 hover:text-white">
                                        <i class="far fa-heart text-lg"></i>
                                    </button>
                                </div>
                                
                                <p class="text-white/90 text-sm mb-3">Kembangkan aplikasi mobile native dan cross-platform menggunakan Flutter dan React Native.</p>
                                
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="tag px-2 py-1 text-xs rounded-full">Flutter</span>
                                    <span class="tag px-2 py-1 text-xs rounded-full">React Native</span>
                                    <span class="tag px-2 py-1 text-xs rounded-full">Dart</span>
                                </div>
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-3 text-xs text-white/80">
                                        <span><i class="fas fa-money-bill-wave mr-1"></i>Rp 2.500.000/bulan</span>
                                        <span><i class="fas fa-clock mr-1"></i>3 bulan</span>
                                    </div>
                                    <button class="bg-white/20 backdrop-blur-sm hover:bg-white/30 px-4 py-2 text-sm rounded-lg transition-colors">
                                        Lihat Detail
                                    </button>
                                </div>
                            </div>

                            <!-- Job Card 2 -->
                            <div class="job-card text-white p-6 rounded-xl shadow-lg">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-start space-x-4">
                                        <div class="company-logo w-12 h-12 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-chart-bar text-lg text-white"></i>
                                        </div>
                                        <div>
                                            <div class="flex items-center space-x-2 mb-1">
                                                <h3 class="text-lg font-bold">Data Analytics Intern</h3>
                                                <span class="bg-green-400 text-green-900 text-xs px-2 py-1 rounded-full">URGENT</span>
                                            </div>
                                            <p class="text-white/90 mb-1">DataCorp Analytics</p>
                                            <p class="text-white/70 text-sm"><i class="fas fa-map-marker-alt mr-1"></i>Jakarta Pusat • On-site</p>
                                        </div>
                                    </div>
                                    <button class="text-white/60 hover:text-white">
                                        <i class="far fa-heart text-lg"></i>
                                    </button>
                                </div>
                                
                                <p class="text-white/90 text-sm mb-3">Analisis data bisnis menggunakan Python, SQL, dan tools visualization untuk menghasilkan insights yang actionable.</p>
                                
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="tag px-2 py-1 text-xs rounded-full">Python</span>
                                    <span class="tag px-2 py-1 text-xs rounded-full">SQL</span>
                                    <span class="tag px-2 py-1 text-xs rounded-full">Tableau</span>
                                    <span class="tag px-2 py-1 text-xs rounded-full">Excel</span>
                                </div>
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-3 text-xs text-white/80">
                                        <span><i class="fas fa-money-bill-wave mr-1"></i>Rp 2.800.000/bulan</span>
                                        <span><i class="fas fa-clock mr-1"></i>6 bulan</span>
                                    </div>
                                    <button class="bg-white/20 backdrop-blur-sm hover:bg-white/30 px-4 py-2 text-sm rounded-lg transition-colors">
                                        Lihat Detail
                                    </button>
                                </div>
                            </div>

                            <!-- Job Card 3 -->
                            <div class="job-card text-white p-6 rounded-xl shadow-lg">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-start space-x-4">
                                        <div class="company-logo w-12 h-12 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-palette text-lg text-white"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-lg font-bold mb-1">UI/UX Design Intern</h3>
                                            <p class="text-white/90 mb-1">Creative Studio ID</p>
                                            <p class="text-white/70 text-sm"><i class="fas fa-map-marker-alt mr-1"></i>Surabaya • Remote</p>
                                        </div>
                                    </div>
                                    <button class="text-red-400 hover:text-red-300">
                                        <i class="fas fa-heart text-lg"></i>
                                    </button>
                                </div>
                                
                                <p class="text-white/90 text-sm mb-3">Desain interface dan user experience untuk aplikasi mobile dan web dengan fokus pada user-centered design.</p>
                                
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="tag px-2 py-1 text-xs rounded-full">Figma</span>
                                    <span class="tag px-2 py-1 text-xs rounded-full">Adobe XD</span>
                                    <span class="tag px-2 py-1 text-xs rounded-full">Prototyping</span>
                                </div>
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-3 text-xs text-white/80">
                                        <span><i class="fas fa-money-bill-wave mr-1"></i>Rp 2.200.000/bulan</span>
                                        <span><i class="fas fa-clock mr-1"></i>4 bulan</span>
                                    </div>
                                    <button class="bg-white/20 backdrop-blur-sm hover:bg-white/30 px-4 py-2 text-sm rounded-lg transition-colors">
                                        Lihat Detail
                                    </button>
                                </div>
                            </div>

                            <!-- Job Card 4 -->
                            <div class="job-card text-white p-6 rounded-xl shadow-lg">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-start space-x-4">
                                        <div class="company-logo w-12 h-12 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-bullhorn text-lg text-white"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-lg font-bold mb-1">Digital Marketing Intern</h3>
                                            <p class="text-white/90 mb-1">MarketPro Agency</p>
                                            <p class="text-white/70 text-sm"><i class="fas fa-map-marker-alt mr-1"></i>Jakarta Barat • Hybrid</p>
                                        </div>
                                    </div>
                                    <button class="text-white/60 hover:text-white">
                                        <i class="far fa-heart text-lg"></i>
                                    </button>
                                </div>
                                
                                <p class="text-white/90 text-sm mb-3">Mengelola kampanye digital, social media marketing, dan content creation untuk berbagai klien.</p>
                                
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="tag px-2 py-1 text-xs rounded-full">Social Media</span>
                                    <span class="tag px-2 py-1 text-xs rounded-full">Google Ads</span>
                                    <span class="tag px-2 py-1 text-xs rounded-full">Content Writing</span>
                                </div>
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-3 text-xs text-white/80">
                                        <span><i class="fas fa-money-bill-wave mr-1"></i>Rp 2.000.000/bulan</span>
                                        <span><i class="fas fa-clock mr-1"></i>3 bulan</span>
                                    </div>
                                    <button class="bg-white/20 backdrop-blur-sm hover:bg-white/30 px-4 py-2 text-sm rounded-lg transition-colors">
                                        Lihat Detail
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="flex items-center justify-center space-x-2 mt-8">
                            <button class="px-3 py-2 text-gray-400 hover:text-gray-200">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="px-4 py-2 bg-purple-500 text-white rounded-lg">1</button>
                            <button class="px-4 py-2 text-gray-400 hover:bg-gray-700 rounded-lg">2</button>
                            <button class="px-4 py-2 text-gray-400 hover:bg-gray-700 rounded-lg">3</button>
                            <span class="px-2 text-gray-500">...</span>
                            <button class="px-4 py-2 text-gray-400 hover:bg-gray-700 rounded-lg">12</button>
                            <button class="px-3 py-2 text-gray-400 hover:text-gray-200">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Heart/Save functionality
        document.querySelectorAll('.fa-heart').forEach(heart => {
            heart.addEventListener('click', function(e) {
                e.stopPropagation();
                if (this.classList.contains('far')) {
                    this.classList.remove('far');
                    this.classList.add('fas', 'text-red-400');
                } else {
                    this.classList.remove('fas', 'text-red-400');
                    this.classList.add('far');
                }
            });
        });

        // Filter functionality
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                // Here you would implement the actual filtering logic
                console.log('Filter changed:', this.nextElementSibling.textContent);
            });
        });

        // Search functionality
        document.querySelector('input[type="text"]').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                console.log('Searching for:', this.value);
                // Implement search logic here
            }
        });

        // Quick filter tags
        document.querySelectorAll('.tag').forEach(tag => {
            tag.addEventListener('click', function() {
                this.classList.toggle('filter-active');
                console.log('Quick filter:', this.textContent);
            });
        });
    </script>
</body>
</html>