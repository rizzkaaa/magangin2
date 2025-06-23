<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="Copyright" content="Inazuma" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Ranyeh" />
  <meta name="rating" content="general" />
  <meta name="language" content="English" />
  <meta name="application-name" content="Inazuma" />
  <meta name="description" content="Tailwind CSS Company Landing Page Template by Ranyeh." />
  <meta name="keywords" content="company" />
  <meta name="twitter:title" content="Inazuma | Tailwind CSS Company Landing Page" />
  <meta name="twitter:description" content="Tailwind CSS Company Landing Page Template by Ranyeh." />
  <meta name="twitter:image" content="./assets/img/inazuma-cover.png" />
  <meta content="Inazuma | Tailwind CSS Company Landing Page" property="og:title" />
  <meta content="Inazuma" property="og:site_name" />
  <meta content="Tailwind CSS Company Landing Page Template by Ranyeh." property="og:description" />
  <meta content="./assets/img/inazuma-cover.png" property="og:image" />
  <meta content="https://ranyeh24.github.io/inazuma-tailwind" property="og:url" />
  <meta content="website" property="og:type" />

  <meta name="msapplication-TileColor" content="#3d63dd" />
  <meta name="msapplication-TileImage" content="./assets/favicon/mstile-144x144.png" />
  <meta name="theme-color" content="#3d63dd" />

  <!-- Page title -->
  <title>Magangin | Magang tanpa ribet, MAGANGIN aja</title>

  <!-- Canonical -->
  <link rel="canonical" href="https://ranyeh24.github.io/inazuma-tailwind" />

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="194x194" style="border-radius: 50%;" href="./assets/img/about-img.png" />

  <link rel="mask-icon" href="./assets/img/logo.png" color="#3d63dd" />

  <!-- CSS Plugins -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />

  <link rel="stylesheet" href="./assets/css/main.css" />
</head>

<body>
  <!-- Page loading -->


  <!-- Navbar -->
  <header class="ic-navbar absolute left-0 top-0 z-40 flex w-full items-center bg-transparent" role="banner"
    aria-label="Navigation bar">
    <div class="container">
      <div class="ic-navbar-container relative -mx-5 flex items-center justify-between">
        <div class="w-60 lg:w-56 max-w-full px-5">
          <a href="." class="ic-navbar-logo block w-full py-5 text-primary-color">
            <img src="./assets/img/logo.png" alt="">
          </a>
        </div>
        <div class="flex w-full items-center justify-between px-5">
          <div>
            <button type="button"
              class="ic-navbar-toggler absolute right-4 top-1/2 block -translate-y-1/2 rounded-md px-3 py-[6px] text-[22px]/none text-primary-color ring-primary focus:ring-2 lg:hidden"
              data-web-toggle="navbar-collapse" data-web-target="navbarMenu" aria-expanded="false"
              aria-label="Toggle navigation menu">
              <i class="lni lni-menu"></i>
            </button>

            <nav id="navbarMenu"
              class="ic-navbar-collapse absolute right-4 top-[80px] w-full max-w-[250px] rounded-lg hidden bg-primary-light-1 py-5 shadow-lg dark:bg-primary-dark-1 lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:shadow-none dark:lg:bg-transparent xl:px-6">
              <ul class="block lg:flex" role="menu" aria-label="Navigation menu">
                <li class="group relative">
                  <a href="#beranda"
                    class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mx-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70 active"
                    role="menuitem">Beranda</a>
                </li>

                <li class="group relative">
                  <a href="#lowongan"
                    class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                    role="menuitem">Lowongan</a>
                </li>

                <li class="group relative">
                  <a href="#perusahaan"
                    class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                    role="menuitem">Perusahaan</a>
                </li>

                <li class="group relative">
                  <a href="#tentang"
                    class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                    role="menuitem">Tentang Kami</a>
                </li>

                <li class="group relative">
                  <a href="#kontak"
                    class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                    role="menuitem">Hubungi Kami</a>
                </li>

                <li class="group relative">
                  <a href="#faq"
                    class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                    role="menuitem">FAQ</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="flex items-center justify-end pr-[52px] lg:pr-0">
            <button type="button" class="inline-flex items-center text-primary-color text-[24px]/none"
              aria-label="Switch theme" data-web-trigger="web-theme"></button>
            <div class="hidden sm:flex">
              <a href="./masuk/"
                class="btn-navbar ml-5 px-6 py-3 rounded-md bg-primary-color bg-opacity-20 text-base font-medium text-primary-color hover:bg-opacity-100 hover:text-primary"
                role="button">Masuk</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="main relative">
    <!-- Hero section -->
    <section id="beranda"
      class="relative overflow-hidden bg-primary text-primary-color pt-[120px] md:pt-[130px] lg:pt-[160px]">
      <div class="container">
        <div class="-mx-5 flex flex-wrap items-center">
          <div class="w-full px-5">
            <div class="scroll-revealed mx-auto max-w-[780px] text-center">
              <h1
                class="mb-6 text-3xl font-bold leading-snug text-primary-color sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-tight flex justify-center items-center flex-wrap">
                Magang Tanpa Ribet,
                <img src="./assets/img/logo.png" alt="">
                Aja
              </h1>

              <p class="mx-auto mb-9 max-w-[600px] text-base text-primary-color sm:text-lg sm:leading-normal">
                Magangin siap bantu kamu mulai perjalanan karirmu. Temukan peluang magang yang cocok dengan minat dan
                skill kamu. Daftar sekarang, dan wujudkan karir impianmu bareng Magangin. Masa depan cerah dimulai dari
                sini.
              </p>

              <ul class="mb-10 flex flex-wrap items-center justify-center gap-4 md:gap-5">
                <li>
                  <a href="./masuk/"
                    class="inline-flex items-center justify-center rounded-md bg-primary-color text-primary px-5 py-3 text-center text-base font-medium shadow-md hover:bg-primary-light-5 md:px-7 md:py-[14px]"
                    role="button">Masuk</a>
                </li>

                <li>
                  <a href="/lowongan/"
                    class="flex items-center gap-4 rounded-md bg-primary-color/[0.15] px-5 py-3 text-base font-medium text-primary-color hover:bg-primary-color hover:text-primary md:px-7 md:py-[14px]"
                    role="button"><i class="lni lni-search text-lg/none"></i> Cari Lowongan</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Kategori section -->
    <section id="kategori" class="section-area">
      <div class="container">
        <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
          <h6 class="mb-2 block text-lg font-semibold text-primary">
            Kategori
          </h6>
          <h2 class="mb-6">Kategori Bidang Magang Terpopuler</h2>
          <p>
            Temukan berbagai bidang magang yang sesuai dengan minat dan keahlianmu. </p>
        </div>

        <div class="row">
          <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
            <div class="group hover:-translate-y-1">
              <div
                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                <i class="lni lni-capsule"></i>
              </div>
              <div class="w-full">
                <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                  Pengembangan Software
                </h4>
                <p>
                  Untuk mahasiswa yang tertarik dalam pembuatan aplikasi, sistem, atau website.
                </p>
              </div>
            </div>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
            <div class="group hover:-translate-y-1">
              <div
                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                <i class="lni lni-tailwindcss"></i>
              </div>
              <div class="w-full">
                <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                  Desain Kreatif
                </h4>
                <p>
                  Cocok untuk kamu yang memiliki minat dalam seni visual, grafis, atau multimedia.
                </p>
              </div>
            </div>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
            <div class="group hover:-translate-y-1">
              <div
                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                <i class="lni lni-gift"></i>
              </div>
              <div class="w-full">
                <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                  Pemasaran Digital
                </h4>
                <p>
                  Fokus pada strategi promosi, kampanye media sosial, serta analisis pasar.
                </p>
              </div>
            </div>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
            <div class="group hover:-translate-y-1">
              <div
                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                <i class="lni lni-layout"></i>
              </div>
              <div class="w-full">
                <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                  Manajemen Keuangan
                </h4>
                <p>
                  Untuk yang ingin memahami laporan keuangan, budgeting, serta perpajakan.
                </p>
              </div>
            </div>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
            <div class="group hover:-translate-y-1">
              <div
                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                <i class="lni lni-layers"></i>
              </div>
              <div class="w-full">
                <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                  Administrasi Bisnis
                </h4>
                <p>
                  Menangani dokumen, data operasional, serta mendukung kegiatan kantor.
                </p>
              </div>
            </div>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
            <div class="group hover:-translate-y-1">
              <div
                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                <i class="lni lni-grid-alt"></i>
              </div>
              <div class="w-full">
                <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                  Lain-lain
                </h4>
                <p>
                  Serta kategori lain di berbagai bidang magang seperti pendidikan, hukum, kesehatan, dan lainnya.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Lowongan section -->
    <section id="lowongan" class="section-area">
      <div class="container">
        <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
          <h6 class="mb-2 block text-lg font-semibold text-primary">
            Lowongan
          </h6>
          <h2 class="mb-6">Lowongan Magang Terbaru</h2>
          <p>
            There are many variations of passages of Lorem Ipsum available but
            the majority have suffered alteration in some form.
          </p>
        </div>

        <nav class="scroll-revealed portfolio-menu mb-[3.750rem] text-center" aria-label="Portfolio filter">
          <button type="button"
            class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color active"
            data-filter="all">
            All Work
          </button>
          <button type="button"
            class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
            data-filter="branding">
            Branding
          </button>
          <button type="button"
            class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
            data-filter="marketing">
            Marketing
          </button>
          <button type="button"
            class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
            data-filter="planning">
            Planning
          </button>
          <button type="button"
            class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
            data-filter="research">
            Research
          </button>
        </nav>

        <div class="scroll-revealed portfolio-grid row" id="lowongan-container">
          <div class="portfolio col-12 sm:col-6 lg:col-4">
            <article class="group" data-filter="branding">
              <div class="relative overflow-hidden w-full aspect-[4/3] rounded-xl">
                <img src="./assets/img/portfolio/portfolio-1.jpg" alt="Graphics Design"
                  class="w-full h-full object-cover" />
                <div
                  class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible">
                  <div class="flex flex-wrap gap-2 p-4">
                    <div class="inline-block relative">
                      <a href="./assets/img/portfolio/portfolio-1.jpg"
                        class="portfolio-box text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color">
                        <i class="lni lni-zoom-in"></i>
                      </a>
                    </div>
                    <div class="portfolio-icon">
                      <a href="javascript:void(0)"
                        class="text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color">
                        <i class="lni lni-link"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pt-4">
                <h4 class="mb-2">
                  <a href="javascript:void(0)" class="text-[1.5rem] leading-tight text-inherit">Graphics Design</a>
                </h4>
                <p>
                  Short description for the ones who look for something new.
                  Awesome!
                </p>
              </div>
            </article>
          </div>


        </div>

        <script>
          const container = document.getElementById('lowongan-container');

          function fetchLowongan() {
            fetch('/api/get_lowongan.php')
              .then(response => {
                if (!response.ok) throw new Error('Gagal mengambil data');
                return response.json();
              })
              .then(data => {
                renderLowongan(data.slice(0, 6));
              })
              .catch(error => {
                console.error('Error:', error);
                container.innerHTML = `<p class="text-red-500">Gagal memuat data lowongan.</p>`;
              });
          }

          function renderLowongan(items) {
            container.innerHTML = ''; // Kosongkan dulu

            items.forEach(item => {
              const imageUrl = item.logo ?
                `/assets/img/banner_lowongan/${item.logo}` // Ubah path ini sesuai folder gambar kamu
                :
                '/assets/img/about-img.png';

              const html = `
        <div class="portfolio col-12 sm:col-6 lg:col-4">
          <article class="group" data-filter="branding">
            <div class="relative overflow-hidden w-full aspect-[4/3] rounded-xl">
              <img src="${imageUrl}" alt="${item.position}" class="w-full h-full object-cover" />
              <div class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible">
                <div class="flex flex-wrap gap-2 p-4">
                  <div class="inline-block relative">
                    <a href="${imageUrl}" class="portfolio-box text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10">
                      <i class="lni lni-zoom-in"></i>
                    </a>
                  </div>
                  <div class="portfolio-icon">
                    <a href="javascript:void(0)" class="text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10">
                      <i class="lni lni-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="pt-4">
              <h4 class="mb-2">
                <a href="javascript:void(0)" class="text-[1.5rem] leading-tight text-inherit">${item.position}</a>
              </h4>
              <p>${item.company} - ${item.status}</p>
              <p class="text-sm text-gray-500">Deadline: ${item.date}</p>
            </div>
          </article>
        </div>
      `;

              container.insertAdjacentHTML('beforeend', html);
            });
          }

          // Panggil saat halaman load
          fetchLowongan();
        </script>

      </div>
    </section>

    <!-- Perusahaan section -->
    <section id="perusahaan" class="section-area">
      <div class="container">
        <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
          <h6 class="mb-2 block text-lg font-semibold text-primary">Perusahaan</h6>
          <h2 class="mb-6">Bersama Kami</h2>
          <p>
            Kami bekerja sama dengan berbagai perusahaan terkemuka dari berbagai sektor industri untuk menyediakan
            pengalaman magang yang berkualitas dan relevan bagi mahasiswa.
          </p>
        </div>

        <div class="row">
          <div class="scroll-revealed col-12 sm:col-6 md:col-4 lg:col-3">
            <figure
              class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
              <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                <img src="./assets/img/perusahaan/MayoraIndah.png" alt="Team picture"
                  class="h-full w-full object-cover" />
                <span
                  class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
                <span
                  class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
              </div>
              <figcaption class="text-center block">
                <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">
                  Mayora Indah
                </h4>
              </figcaption>
            </figure>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 md:col-4 lg:col-3">
            <figure
              class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
              <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                <img src="./assets/img/perusahaan/CIMBNiaga.png" alt="Team picture"
                  class="h-full w-full object-cover" />
                <span
                  class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
                <span
                  class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
              </div>
              <figcaption class="text-center block">
                <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">
                  CIMB Niaga
                </h4>
              </figcaption>
            </figure>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 md:col-4 lg:col-3">
            <figure
              class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
              <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                <img src="./assets/img/perusahaan/ZyrexindoMandiriBuana.png" alt="Team picture"
                  class="h-full w-full object-cover" />
                <span
                  class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
                <span
                  class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
              </div>
              <figcaption class="text-center block">
                <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">
                  Zyrexindo Mandiri Buana
                </h4>
              </figcaption>
            </figure>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 md:col-4 lg:col-3">
            <figure
              class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
              <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                <img src="./assets/img/perusahaan/MegaInsurance.png" alt="Team picture"
                  class="h-full w-full object-cover" />
                <span
                  class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
                <span
                  class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
              </div>
              <figcaption class="text-center block">
                <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">
                  Mega Insurance
                </h4>
              </figcaption>
            </figure>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 md:col-4 lg:col-3">
            <figure
              class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
              <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                <img src="./assets/img/perusahaan/AbadiTambahMuliaInternational.png" alt="Team picture"
                  class="h-full w-full object-cover" />
                <span
                  class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
                <span
                  class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
              </div>
              <figcaption class="text-center block">
                <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">
                  Abadi Tambah Mulia
                </h4>
              </figcaption>
            </figure>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 md:col-4 lg:col-3">
            <figure
              class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
              <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                <img src="./assets/img/perusahaan/Lotte.png" alt="Team picture" class="h-full w-full object-cover" />
                <span
                  class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
                <span
                  class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
              </div>
              <figcaption class="text-center block">
                <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">
                  Lotte
                </h4>
              </figcaption>
            </figure>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 md:col-4 lg:col-3">
            <figure
              class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
              <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                <img src="./assets/img/perusahaan/FWDInsuranceIndonesia.png" alt="Team picture"
                  class="h-full w-full object-cover" />
                <span
                  class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
                <span
                  class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
              </div>
              <figcaption class="text-center block">
                <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">
                  FWD Insurance Indonesia
                </h4>
              </figcaption>
            </figure>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 md:col-4 lg:col-3">
            <figure
              class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
              <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                <img src="./assets/img/perusahaan/OrangTuaGroup.png" alt="Team picture"
                  class="h-full w-full object-cover" />
                <span
                  class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
                <span
                  class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
              </div>
              <figcaption class="text-center block">
                <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">
                  Orang Tua Group
                </h4>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>

    <!-- Call action section -->
    <section id="call-action" class="section-area !bg-primary !text-primary-color">
      <div class="container">
        <div class="scroll-revealed text-center max-w-[550px] mx-auto">
          <h2 class="mb-8 text-inherit">
            We love to make perfect solutions for your business
          </h2>
          <p>
            Why I say old chap that is, spiffing off his nut cor blimey
            guvnords geeza bloke knees up bobby, sloshed arse William cack
            Richard. Bloke fanny around chesed of bum bag old lost the pilot
            say there spiffing off his nut.
          </p>
          <a href="javascript:void(0)"
            class="inline-block px-5 py-3 rounded-md mt-11 bg-green-400 text-white hover:bg-green-500 hover:text-white focus:bg-green-500 focus:text-white"
            role="button">Get Started Now</a>
        </div>
      </div>
    </section>

    <!-- Tentang section -->
    <section id="tentang" class="section-area">
      <div class="container">
        <div class="grid grid-cols-1 gap-14 lg:grid-cols-2">
          <div class="w-full">
            <figure class="scroll-revealed max-w-[480px] mx-auto">
              <img src="./assets/img/about-img.png" alt="About image" class="rounded-xl" />
            </figure>
          </div>

          <div class="w-full">
            <div class="scroll-revealed">
              <h6 class="mb-2 block text-lg font-semibold text-primary">
                Tentang Kami
              </h6>
              <h2 class="mb-6">
                Temukan tempat magang impian mu hanya dengan sentuhan jari.
              </h2>
            </div>

            <div class="tabs scroll-revealed">
              <nav class="tabs-nav flex flex-wrap gap-4 my-8" role="tablist" aria-label="About us tabs">
                <button type="button"
                  class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 text-inherit font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                  data-web-toggle="tabs" data-web-target="tabs-panel-profile" id="tabs-list-profile" role="tab"
                  aria-controls="tabs-panel-profile">
                  Profil
                </button>

                <button type="button"
                  class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 text-inherit font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                  data-web-toggle="tabs" data-web-target="tabs-panel-vision" id="tabs-list-vision" role="tab"
                  aria-controls="tabs-panel-vision">
                  Visi
                </button>

                <button type="button"
                  class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 text-inherit font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                  data-web-toggle="tabs" data-web-target="tabs-panel-history" id="tabs-list-history" role="tab"
                  aria-controls="tabs-panel-history">
                  Misi
                </button>
              </nav>

              <div class="tabs-content mt-4" id="tabs-panel-profile" tabindex="-1" role="tabpanel"
                aria-labelledby="tabs-list-profile">
                <p>
                  Magangin adalah platform digital yang menghubungkan mahasiswa dengan perusahaan untuk menemukan tempat
                  magang impian mereka secara mudah, cepat, dan terpercaya.
                </p>
                <p>
                  Kami hadir untuk menjembatani dunia pendidikan dan dunia industri agar generasi muda dapat berkembang
                  secara optimal.
                </p>
              </div>

              <div class="tabs-content mt-4" id="tabs-panel-vision" tabindex="-1" role="tabpanel"
                aria-labelledby="tabs-list-vision">
                <p>
                  Menjadi platform terdepan dalam menyediakan layanan magang yang inovatif, inklusif, dan berdampak
                  positif bagi kemajuan karier generasi muda Indonesia
                </p>
                <p>
                  Platform ini berkomitmen untuk membangun ekosistem magang yang terintegrasi, kolaboratif, dan
                  berorientasi pada pengembangan potensi serta kesiapan kerja mahasiswa di berbagai bidang.
                </p>
              </div>

              <div class="tabs-content mt-4" id="tabs-panel-history" tabindex="-1" role="tabpanel"
                aria-labelledby="tabs-list-history">
                <p>
                  Platform ini bertujuan untuk meningkatkan akses mahasiswa terhadap peluang magang yang relevan dan
                  berkualitas dengan menyediakan sistem yang efisien dan ramah pengguna dalam proses pencarian serta
                  seleksi magang.
                </p>
                <p>
                  Selain itu, platform ini juga menjalin kerja sama strategis dengan berbagai perusahaan dari beragam
                  sektor industri serta mendorong pengembangan soft skill dan hard skill mahasiswa melalui fitur
                  pelatihan dan evaluasi yang terintegrasi.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Kontak section -->
    <section id="kontak" class="section-area">
      <div class="container">
        <div class="row">
          <div class="col-12 xl:col-4">
            <div class="row">
              <div class="col-12 md:col-6 xl:col-12">
                <div
                  class="scroll-revealed py-5 px-6 rounded-xl shadow-card-1 bg-body-light-1 dark:bg-primary-dark-2 flex gap-6 hover:shadow-lg">
                  <div>
                    <i
                      class="lni lni-phone w-[50px] h-[50px] inline-flex items-center justify-center rounded-lg text-[1.25rem] bg-primary text-primary-color"></i>
                  </div>
                  <div>
                    <h4 class="text-[1.25rem] text-primary mb-3">Memilih</h4>
                    <p class="m-0">Calon peserta memilih dan mendaftar pada lowongan magang yang dibuka.</p>
                  </div>
                </div>
              </div>

              <div class="col-12 md:col-6 xl:col-12">
                <div
                  class="scroll-revealed py-5 px-6 rounded-xl shadow-card-1 bg-body-light-1 dark:bg-primary-dark-2 flex gap-6 hover:shadow-lg">
                  <div>
                    <i
                      class="lni lni-map-marker w-[50px] h-[50px] inline-flex items-center justify-center rounded-lg text-[1.25rem] bg-primary text-primary-color"></i>
                  </div>
                  <div>
                    <h4 class="text-[1.25rem] text-primary mb-3">Seleksi</h4>
                    <p class="m-0">Proses seleksi calon peserta magang oleh perusahaan penyelenggara program magang.</p>
                  </div>
                </div>
              </div>

              <div class="col-12 md:col-6 xl:col-12">
                <div
                  class="scroll-revealed py-5 px-6 rounded-xl shadow-card-1 bg-body-light-1 dark:bg-primary-dark-2 flex gap-6 hover:shadow-lg">
                  <div>
                    <i
                      class="lni lni-alarm-clock w-[50px] h-[50px] inline-flex items-center justify-center rounded-lg text-[1.25rem] bg-primary text-primary-color"></i>
                  </div>
                  <div>
                    <h4 class="text-[1.25rem] text-primary mb-3">Magang</h4>
                    <p class="m-0">Proses penyelenggaraan magang di perusahaan.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 xl:col-8">
            <div
              class="scroll-revealed bg-body-light-1 dark:bg-primary-dark-2 rounded-xl py-8 sm:py-12 px-6 sm:px-10 z-10 relative shadow-card-1 hover:shadow-lg">
              <div class="text-center max-w-[550px] mx-auto mb-12">
                <h6 class="mb-2 block text-lg font-semibold text-primary">
                  Hubungi Kami
                </h6>
                <h2 class="mb-3">Melayani 24 Jam</h2>
                <p>
                  Kami siap membantu Anda! Untuk pertanyaan, kerja sama, atau informasi lebih lanjut mengenai layanan
                  magang kami, silakan isi formulir kontak di halaman ini, dan tim kami akan segera menghubungi Anda.
                  Terima kasih telah mempercayai kami sebagai mitra dalam pengembangan karier generasi muda Indonesia.
                </p>
              </div>

              <form action="#" method="POST" class="flex flex-col gap-6">
                <div class="row">
                  <div class="col-12 md:col-6">
                    <input type="text" name="name"
                      class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                      placeholder="Nama" required />
                  </div>

                  <div class="col-12 md:col-6">
                    <input type="email" name="email"
                      class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                      placeholder="Email" required />
                  </div>

                  <div class="col-12 md:col-6">
                    <input type="text" name="phone"
                      class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                      placeholder="Telepon" required />
                  </div>

                  <div class="col-12 md:col-6">
                    <input type="text" name="subject"
                      class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                      placeholder="Subjek" required />
                  </div>

                  <div class="col-12">
                    <textarea name="message" rows="5"
                      class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                      placeholder="Tulis pesanmu" required></textarea>
                  </div>

                  <div class="col-12">
                    <div class="w-full text-center">
                      <button type="submit"
                        class="inline-block px-5 py-3 rounded-md text-base bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10">
                        Kirim Pesan
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ section -->
    <section id="faq" class="section-area relative">
      <div class="container">
        <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
          <h6 class="mb-2 block text-lg font-semibold text-primary">FAQ</h6>
          <h2 class="mb-6">Punya Pertanyaan? Temukan Jawabannya di Sini</h2>
          <p>
            Kami mengumpulkan berbagai pertanyaan yang sering diajukan untuk membantu Anda memahami cara kerja platform
            Magangin.</p>
        </div>

        <div class="grid gap-x-8 gap-y-12 grid-cols-1 lg:grid-cols-2">
          <div class="scroll-revealed flex">
            <div
              class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]">
              <i class="lni lni-question-circle"></i>
            </div>
            <div class="w-full">
              <h3
                class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl">
                Bagaimana cara mendaftar akun di Magangin?
              </h3>
              <p class="text-body-light-11 dark:text-body-dark-11">
                Untuk mendaftar, cukup klik tombol <b>Masuk</b> di pojok kanan atas, lalu pilih <b>Daftar</b> dan
                lengkapi formulir yang tersedia.
              </p>
            </div>
          </div>

          <div class="scroll-revealed flex">
            <div
              class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]">
              <i class="lni lni-question-circle"></i>
            </div>
            <div class="w-full">
              <h3
                class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl">
                Bisakah saya melamar lebih dari satu lowongan sekaligus?
              </h3>
              <p class="text-body-light-11 dark:text-body-dark-11">
                Ya, mahasiswa dapat melamar ke beberapa lowongan secara bersamaan selama memenuhi syarat yang ditentukan
                perusahaan.
              </p>
            </div>
          </div>

          <div class="scroll-revealed flex">
            <div
              class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]">
              <i class="lni lni-question-circle"></i>
            </div>
            <div class="w-full">
              <h3
                class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl">
                Apakah saya bisa melamar magang di luar jurusan saya?
              </h3>
              <p class="text-body-light-11 dark:text-body-dark-11">
                Bisa, selama Anda memenuhi kriteria yang ditetapkan oleh perusahaan terkait. Beberapa perusahaan membuka
                peluang lintas jurusan.
              </p>
            </div>
          </div>

          <div class="scroll-revealed flex">
            <div
              class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]">
              <i class="lni lni-question-circle"></i>
            </div>
            <div class="w-full">
              <h3
                class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl">
                Apakah tersedia sertifikat setelah menyelesaikan magang?
              </h3>
              <p class="text-body-light-11 dark:text-body-dark-11">
                Ya, peserta magang akan menerima sertifikat digital dari perusahaan mitra atau dari Magangin (jika
                bekerja sama).
              </p>
            </div>
          </div>
        </div>
      </div>

      <div>
        <span class="absolute left-5 top-5 -z-[1]">
          <svg class="w-20 h-auto fill-teal-500" version="1.0" xmlns="http://www.w3.org/2000/svg" width="1280.000000pt"
            height="1280.000000pt" viewBox="0 0 1280.000000 1280.000000" preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" stroke="none">
              <path d="M550 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 12465 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
-255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
16z" />
              <path d="M3110 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M4390 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M5670 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M12070 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M550 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 11185 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
-255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
16z" />
              <path d="M3110 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M4390 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M5670 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M12070 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M550 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M3110 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M4390 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M5670 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M12070 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M550 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M3110 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M4390 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M5670 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M12070 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M550 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M3110 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M4390 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M5670 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M12070 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M550 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M3110 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M4390 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M5670 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M12070 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M550 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M3110 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M4390 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M5670 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M12070 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M550 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M3110 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M4390 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M5670 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M12070 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M550 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M3110 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M4390 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M5670 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M12070 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M550 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M3110 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M4390 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M5670 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M12070 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
            </g>
          </svg>
        </span>
        <span class="absolute right-5 bottom-5 -z-[1]">
          <svg class="w-20 h-auto fill-indigo-500" version="1.0" xmlns="http://www.w3.org/2000/svg"
            width="1280.000000pt" height="1280.000000pt" viewBox="0 0 1280.000000 1280.000000"
            preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" stroke="none">
              <path d="M550 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 12465 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
-255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
16z" />
              <path d="M3110 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M4390 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M5670 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M12070 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M550 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 11185 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
-255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
16z" />
              <path d="M3110 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M4390 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M5670 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M12070 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M550 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M3110 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M4390 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M5670 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M12070 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M550 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M3110 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M4390 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M5670 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M12070 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M550 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M3110 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M4390 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M5670 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M12070 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M550 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M3110 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M4390 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M5670 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M12070 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M550 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M3110 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M4390 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M5670 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M12070 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M550 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M3110 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M4390 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M5670 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M12070 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M550 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M3110 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M4390 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
              <path d="M5670 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M12070 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M550 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M1830 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M3110 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M4390 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M5670 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M6950 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M8230 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M9510 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M10790 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
              <path d="M12070 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
            </g>
          </svg>
        </span>
      </div>
    </section>

  </main>

  <footer>
    <div class="side">
      <i data-aos="animation-icon" class="fa-brands fa-facebook-f"></i><i data-aos="animation-icon"
        class="fa-brands fa-instagram"></i><i data-aos="animation-icon" class="fa-brands fa-whatsapp"></i><i
        data-aos="animation-icon" class="fa-brands fa-x-twitter"></i><i data-aos="animation-icon"
        class="fa-brands fa-youtube"></i>
    </div>
    <div class="side">
      <div>
        <div class="logo">
          <a href="#"><img src="./assets/img/logo.png" alt="Magangin Aja"></a>
          <div class="judul">Magangin Aja</div>
        </div>
        <p>Magangin adalah platform digital yang menghubungkan mahasiswa dengan perusahaan untuk menemukan tempat magang impian mereka secara mudah, cepat, dan terpercaya.</p>

        <h4 class="text-white">Alamat:</h4>
        <p>Jl. Jalan Raya, Kec. Sungailiat, Kabupaten Bangka, Kepulauan Bangka Belitung 11233</p>
      </div>
      <div>
        <h4 class="text-white">Tautan Cepat</h4>
        <ul>
          <li><a href="#">Beranda</a></li>
          <li><a href="./#tentang">Tentang Kami</a></li>
          <li><a href="./#lowongan">Lowongan</a></li>
          <li><a href="./#perusahaan">Perusahaan</a></li>
          <li><a href="./#kontak">Hubungi Kamu</a></li>
          <li><a href="./#faq">FAQ</a></li>
        </ul>
      </div>
      <div>
        <h4 class="text-white">Masuk Ke Magangin</h4>
        <ul>
          <li><a href="/masuk/">Masuk Sebagai Mahasiswa</a></li>
          <li><a href="/masuk/">Masuk Sebagai Dosen</a></li>
          <li><a href="/masuk/">Masuk Sebagai Perusahaan</a></li>
        </ul>
      </div>
      <div>
        <h4 class="text-white">Hubungi Kami</h4>
        <ul>
          <li>+628 1234-5678</li>
          <li>info@magangin.com</li>
          <li>Kru Kami</li>
        </ul>
      </div>
    </div>
    <div class="side">
      © Copyright 2025 Rizka Layla Ramadhani. All Rights Reserved.
    </div>
  </footer>

  <button type="button"
    class="inline-flex w-12 h-12 rounded-md items-center justify-center text-lg/none bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10 fixed bottom-[117px] right-[20px] hover:-translate-y-1 opacity-100 visible z-50 is-hided"
    data-web-trigger="scroll-top" aria-label="Scroll to top">
    <i class="lni lni-chevron-up"></i>
  </button>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

  <script src="./assets/js/main.js"></script>
  <script>
    // Scroll Reveal
    const sr = ScrollReveal({
      origin: "bottom",
      distance: "16px",
      duration: 1000,
      reset: false,
    });

    sr.reveal(`.scroll-revealed`, {
      cleanup: true,
    });

    // GLightBox
    GLightbox({
      selector: ".video-popup",
      href: "https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM",
      type: "video",
      source: "youtube",
      width: 900,
      autoplayVideos: true,
    });

    const myGallery3 = GLightbox({
      selector: ".portfolio-box",
      type: "image",
      width: 900,
    });

    // Testimonial
    const testimonialSwiper = new Swiper(".testimonial-carousel", {
      slidesPerView: 1,
      spaceBetween: 30,

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        1280: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
    });
  </script>
</body>

</html>