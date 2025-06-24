<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Lamaran Kerja</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <header class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-indigo-700 mb-2">Detail Lamaran Kerja</h1>
        </header>

        <div id="application-detail" class="bg-white rounded-lg shadow-md p-6">
            <!-- Detail content will be inserted here by JavaScript -->
        </div>

        <div class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Apply for this Position</h2>
            <form id="apply-form" method="POST">
                <div class="mb-4">
                    <label class="block text-gray-700">Unggah Dokumen:</label>
                    <div id="dokumen-upload-container" class="mt-2 space-y-3"></div>
                </div>


                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                    Kirim Lamaran
                </button>
            </form>
        </div>

        <div class="mt-4 text-center">
            <button id="back-btn" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                Kembali
            </button>
        </div>
    </div>

    <script>
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
                    applications = data
                    renderApplicationDetail(data);
                    Dokumen(data.dokumen)
                })
                .catch(error => {
                    console.error('Error:', error);
                    console.log(error);

                    emptyState.classList.remove('hidden');
                    applicationsContainer.classList.add('hidden');
                    emptyState.innerHTML = `<p class="text-red-500">Gagal mengambil data lowongan.</p>`;
                });


        }

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            echo "getLowongan('/api/get_lowongan_by_id.php?id=$id')";
        }
        ?>

        function Dokumen(dokumenList) {
            const container = document.getElementById('dokumen-upload-container');

            dokumenList.forEach((doc, index) => {
                const inputGroup = document.createElement('div');
                inputGroup.className = "dokumen-input";

                inputGroup.innerHTML = `
      <label class="block text-gray-600">${doc.nama_dokumen}: ${doc.type}</label>
      <input type="file"
             name="documents[${index}][file]"
             data-nama="${doc.nama_dokumen}"
             class="mt-1 block w-full border border-gray-300 rounded-md p-2"
             accept=".pdf,.doc,.docx, png, jpeg, jpg" required>
      <input type="hidden" name="documents[${index}][nama_dokumen]" value="${doc.nama_dokumen}">
    `;

                container.appendChild(inputGroup);
            });
        }
        // {
        //     "id_lowongan": "iqVb8I94",
        //     "id_perusahaan": "WV1kRgqb",
        //     "banner": "54_game kalkulus (2).png",
        //     "judul": "test",
        //     "deskripsi": "test",
        //     "posisi": "test",
        //     "kuota": "44",
        //     "lokasi": "test",
        //     "jenis_kelamin": "Laki-laki",
        //     "rentang_usia": "44",
        //     "mulai_magang": "2025-07-04",
        //     "selesai_magang": "2025-07-03",
        //     "deadline_apply": "2025-07-11",
        //     "uang_saku": "10000",
        //     "created_at": "2025-06-24 00:30:10",
        //     "updated_at": "2025-06-24 00:30:10",
        //     "nama_perusahaan": "koucnge@couchneg.corp"
        // }
        // Render application details
        function renderApplicationDetail(app) {
            const detailContainer = document.getElementById('application-detail');
            detailContainer.innerHTML = `
                <div class="flex items-start mb-4">
                    <img src="/assets/img/banner_lowongan/${app.banner}" alt="${app.nama_perusahaan}" class="w-10 h-10 rounded-full mr-3 object-cover">
                    <div>
                        <h3 class="font-semibold text-lg text-gray-800">${app.judul} ${app.posisi}</h3>
                        <p class="text-gray-600">${app.nama_perusahaan}</p>
                        <p class="text-sm text-gray-500">Kouta: ${app.kuota}</p>
                        <p class="text-sm text-gray-500">Lokasi: ${app.lokasi}</p>
                        <p class="text-sm text-gray-500">Gender: ${app.jenis_kelamin}</p>
                        <p class="text-sm text-gray-500">Rentan usia: ${app.rentang_usia}</p>
                        <p class="text-sm text-gray-500">Dikirim: ${app.created_at}</p>
                        <p class="text-sm text-gray-500">Mulai Magang: ${app.mulai_magang}</p>
                        <p class="text-sm text-gray-500">Selesai Magang: ${app.selesai_magang}</p>
                        <p class="text-sm text-gray-500">Terakhir Daftar: ${app.deadline_apply}</p>
                        <p class="text-sm text-gray-500">Uang Saku: ${app.uang_saku}</p>
                    </div>
                </div>
                <div class="bg-gray-50 border border-gray-100 rounded px-3 py-2 text-sm text-gray-700">
                    <i class="far fa-comment-dots mr-2"></i>${app.deskripsi}
                </div>
            `;
        }



        // Back button functionality
        document.getElementById('back-btn').addEventListener('click', () => {
            window.history.back();
        });

        // Handle form submission
        document.getElementById('apply-form').addEventListener('submit', (event) => {
            event.preventDefault();
            const resumes = document.querySelectorAll('input[type="file"][name="documents"]');
            const uploadedFiles = [];

            resumes.forEach((resume) => {
                if (resume.files.length > 0) {
                    uploadedFiles.push(resume.files[0].name);
                }
            });

            if (uploadedFiles.length > 0) {
                // Here you can handle the form submission, e.g., send data to a server
                alert(`Lamaran Anda telah dikirim!\nNama: ${name}\nEmail: ${email}\nPesan: ${message}\nDokumen: ${uploadedFiles.join(', ')}`);
            } else {
                alert('Silakan unggah dokumen sebelum mengirim lamaran.');
            }
            document.getElementById('apply-form').reset(); // Reset the form
        });
    </script>
</body>

</html>