<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Lamaran Kerja</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'pending': '#92400E',
                        'review': '#1E40AF',
                        'interview': '#4338CA',
                        'test': '#047857',
                        'accepted': '#065F46',
                        'rejected': '#991B1B',
                        'pending-bg': '#FEF3C7',
                        'review-bg': '#DBEAFE',
                        'interview-bg': '#E0E7FF',
                        'test-bg': '#ECFDF5',
                        'accepted-bg': '#D1FAE5',
                        'rejected-bg': '#FEE2E2',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.3s ease-in',
                    },
                    keyframes: {
                        fadeIn: {
                            'from': { opacity: '0' },
                            'to': { opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        
        <!-- Header -->
        <header class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-indigo-700 mb-2">Daftar Lamaran Kerja</h1>
            <p class="text-gray-600">Pantau status lamaran pekerjaan Anda</p>
        </header>

        <!-- Filter Section -->
        <div class="bg-white rounded-lg shadow-md p-4 mb-8 animate-fade-in">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex-1 min-w-[200px]">
                    <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Cari Posisi</label>
                    <div class="relative">
                        <input type="text" id="search" placeholder="Nama posisi atau perusahaan"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <i class="fas fa-search absolute right-3 top-3 text-gray-400"></i>
                    </div>
                </div>

                

                <div class="mt-6">
                    <button id="reset-btn"
                        class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
                        Reset Filter
                    </button>
                </div>
            </div>
        </div>

        <!-- Application Cards -->
        <div id="applications-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <!-- Dynamic content will be inserted here by JavaScript -->
        </div>

        <!-- Empty State -->
        <div id="empty-state" class="hidden bg-white rounded-lg shadow-md p-8 text-center">
            <i class="fas fa-folder-open text-gray-300 text-5xl mb-4"></i>
            <h3 class="text-xl font-medium text-gray-700 mb-2">Belum ada lamaran</h3>
            <p class="text-gray-500 mb-4">Anda belum mengajukan lamaran pekerjaan apapun.</p>
            <button class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                Cari Lowongan
            </button>
        </div>
        
    </div>

    <script>
        // Sample application data with more realistic entries
        let applications = [];

        function getLowongan(path) {
            fetch(path)
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Gagal mengambil data");
                    }
                    return response.json();
                })
                .then(data => {

                    applications = data.map(item => ({
                        ...item,
                        status: item.status?.toLowerCase() || 'pending'  // default jika status kosong
                    }));
                    console.log(applications);
                    renderApplications(); // render setelah data diambil

                })
                .catch(error => {
                    console.error('Error:', error);
                    console.log(error);

                    emptyState.classList.remove('hidden');
                    applicationsContainer.classList.add('hidden');
                    emptyState.innerHTML = `<p class="text-red-500">Gagal mengambil data lowongan.</p>`;
                });


        }

        getLowongan('/api/get_lowongan.php')
        // DOM Elements
        const applicationsContainer = document.getElementById('applications-container');
        const searchInput = document.getElementById('search');
        const statusSelect = document.getElementById('status');
        const resetBtn = document.getElementById('reset-btn');
        const emptyState = document.getElementById('empty-state');

        // Render applications
        function renderApplications(filteredApps = applications) {
            applicationsContainer.innerHTML = '';

            if (filteredApps.length === 0) {
                emptyState.classList.remove('hidden');
                applicationsContainer.classList.add('hidden');
                return;
            }

            emptyState.classList.add('hidden');
            applicationsContainer.classList.remove('hidden');

            filteredApps.forEach(app => {
                console.log(app.status);

                const statusColor = {
                    'open': { text: 'text-pending', bg: 'bg-pending-bg' },
                    'Open': { text: 'text-review', bg: 'bg-review-bg' },
                    'interview': { text: 'text-interview', bg: 'bg-interview-bg' },
                    'test': { text: 'text-test', bg: 'bg-test-bg' },
                    'accepted': { text: 'text-accepted', bg: 'bg-accepted-bg' },
                    'rejected': { text: 'text-rejected', bg: 'bg-rejected-bg' },
                }[app.status];

                const statusText = getStatusText(app.status);

                const card = document.createElement('div');
                card.className = 'bg-white rounded-lg shadow-md p-6 transition-all hover:-translate-y-1 hover:shadow-lg';
                card.innerHTML = `
                    <div class="flex items-start mb-4">
                        <img src="/assets/img/banner_lowongan/${app.logo}" alt="${app.company}" class="w-10 h-10 rounded-full mr-3 object-cover">
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800">${app.position}</h3>
                            <p class="text-gray-600">${app.company}</p>
                        </div>
                        <span class="ml-auto text-xs px-3 py-1 rounded-full ${statusColor?.bg} ${statusColor?.text} font-medium">${statusText}</span>
                    </div>
                    <div class="text-sm text-gray-500 mb-4">
                        <p><i class="far fa-calendar-alt mr-2"></i>Dikirim: ${app.date}</p>
                    </div>
                    <div class="bg-gray-50 border border-gray-100 rounded px-3 py-2 text-sm text-gray-700">
                        <i class="far fa-comment-dots mr-2"></i>${app.notes}
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between">
                        <button class="text-indigo-600 hover:text-indigo-700 text-sm font-medium" onclick="window.location.href='detail.html?id=${app.id}'">
                            <i class="far fa-eye mr-1"></i>Detail
                        </button>
                        <button class="text-gray-500 hover:text-gray-700 text-sm">
                            <i class="far fa-trash-alt mr-1"></i>Hapus
                        </button>
                    </div>
                `;

                // Add fallback for logo if it fails to load
                const img = card.querySelector('img');
                img.onerror = function () {
                    // this.src = 'https://via.placeholder.com/40';
                };

                applicationsContainer.appendChild(card);
            });
        }

        // Helper function to get status text
        function getStatusText(status) {
            const statusMap = {
                'pending': 'Pending',
                'review': 'Dalam Review',
                'interview': 'Wawancara',
                'test': 'Technical Test',
                'accepted': 'Diterima',
                'rejected': 'Ditolak'
            };
            return statusMap[status] || status;
        }

        // Filter applications
        function filterApplications() {
            const searchTerm = searchInput.value.toLowerCase();
            const statusValue = statusSelect.value;

            const filtered = applications.filter(app => {
                const matchesSearch =
                    app.position.toLowerCase().includes(searchTerm) ||
                    app.company.toLowerCase().includes(searchTerm);

                const matchesStatus =
                    statusValue === 'all' ||
                    app.status === statusValue;

                return matchesSearch && matchesStatus;
            });

            renderApplications(filtered);
        }

        // Reset filters
        function resetFilters() {
            searchInput.value = '';
            statusSelect.value = 'all';
            filterApplications();
        }

        // Event listeners
        searchInput.addEventListener('input', filterApplications);
        statusSelect.addEventListener('change', filterApplications);
        resetBtn.addEventListener('click', resetFilters);

        // Initial render
        renderApplications();
    </script>
</body>

</html>