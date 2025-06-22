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
                  <a href="javascript:boid(0)"
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

        <div class="scroll-revealed portfolio-grid row">
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

          <div class="portfolio col-12 sm:col-6 lg:col-4">
            <article class="group" data-filter="research">
              <div class="relative overflow-hidden w-full aspect-[4/3] rounded-xl">
                <img src="./assets/img/portfolio/portfolio-2.jpg" alt="Web Development"
                  class="w-full h-full object-cover" />
                <div
                  class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible">
                  <div class="flex flex-wrap gap-2 p-4">
                    <div class="inline-block relative">
                      <a href="./assets/img/portfolio/portfolio-2.jpg"
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
                  <a href="javascript:void(0)" class="text-[1.5rem] leading-tight text-inherit">Web Development</a>
                </h4>
                <p>
                  Short description for the ones who look for something new.
                  Awesome!
                </p>
              </div>
            </article>
          </div>

          <div class="portfolio col-12 sm:col-6 lg:col-4">
            <article class="group" data-filter="marketing">
              <div class="relative overflow-hidden w-full aspect-[4/3] rounded-xl">
                <img src="./assets/img/portfolio/portfolio-3.jpg" alt="App Development"
                  class="w-full h-full object-cover" />
                <div
                  class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible">
                  <div class="flex flex-wrap gap-2 p-4">
                    <div class="inline-block relative">
                      <a href="./assets/img/portfolio/portfolio-3.jpg"
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
                  <a href="javascript:void(0)" class="text-[1.5rem] leading-tight text-inherit">App Development</a>
                </h4>
                <p>
                  Short description for the ones who look for something new.
                  Awesome!
                </p>
              </div>
            </article>
          </div>

          <div class="portfolio col-12 sm:col-6 lg:col-4">
            <article class="group" data-filter="planning">
              <div class="relative overflow-hidden w-full aspect-[4/3] rounded-xl">
                <img src="./assets/img/portfolio/portfolio-4.jpg" alt="Digital Marketing"
                  class="w-full h-full object-cover" />
                <div
                  class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible">
                  <div class="flex flex-wrap gap-2 p-4">
                    <div class="inline-block relative">
                      <a href="./assets/img/portfolio/portfolio-4.jpg"
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
                  <a href="javascript:void(0)" class="text-[1.5rem] leading-tight text-inherit">Digital Marketing</a>
                </h4>
                <p>
                  Short description for the ones who look for something new.
                  Awesome!
                </p>
              </div>
            </article>
          </div>

          <div class="portfolio col-12 sm:col-6 lg:col-4">
            <article class="group" data-filter="branding">
              <div class="relative overflow-hidden w-full aspect-[4/3] rounded-xl">
                <img src="./assets/img/portfolio/portfolio-5.jpg" alt="SEO Services"
                  class="w-full h-full object-cover" />
                <div
                  class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible">
                  <div class="flex flex-wrap gap-2 p-4">
                    <div class="inline-block relative">
                      <a href="./assets/img/portfolio/portfolio-5.jpg"
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
                  <a href="javascript:void(0)" class="text-[1.5rem] leading-tight text-inherit">SEO Services</a>
                </h4>
                <p>
                  Short description for the ones who look for something new.
                  Awesome!
                </p>
              </div>
            </article>
          </div>

          <div class="portfolio col-12 sm:col-6 lg:col-4">
            <article class="group" data-filter="marketing">
              <div class="relative overflow-hidden w-full aspect-[4/3] rounded-xl">
                <img src="./assets/img/portfolio/portfolio-6.jpg" alt="Product Design"
                  class="w-full h-full object-cover" />
                <div
                  class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible">
                  <div class="flex flex-wrap gap-2 p-4">
                    <div class="inline-block relative">
                      <a href="./assets/img/portfolio/portfolio-6.jpg"
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
                  <a href="javascript:void(0)" class="text-[1.5rem] leading-tight text-inherit">Product Design</a>
                </h4>
                <p>
                  Short description for the ones who look for something new.
                  Awesome!
                </p>
              </div>
            </article>
          </div>
        </div>
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

  <!-- Footer -->
  <footer class="bg-primary-dark-2 text-white">
    <div class="container py-20 lg:py-[100px]">
      <div class="row">
        <div class="col-12 order-first lg:col-4">
          <div class="w-full">
            <a href="." class="inline-block mb-5">
              <svg id="FooterBrand" class="h-[40px]" data-name="FooterBrand" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 500 118.11">
                <path
                  d="M272.26,29.77h14.86V58q0,8.24,1.13,11.44a10,10,0,0,0,3.64,5,10.44,10.44,0,0,0,6.18,1.77,10.75,10.75,0,0,0,6.23-1.75,10.26,10.26,0,0,0,3.81-5.14q.92-2.52.91-10.82V29.77h14.7V54.59q0,15.33-2.42,21a23,23,0,0,1-8.72,10.58q-5.76,3.68-14.64,3.68-9.65,0-15.59-4.3a22.79,22.79,0,0,1-8.37-12q-1.73-5.32-1.72-19.37Z"
                  style="fill: #eeeef0" />
                <path
                  d="M338.36,29.77h14.69V36.5a25.29,25.29,0,0,1,8.38-6.19,24.53,24.53,0,0,1,10.05-2A18.63,18.63,0,0,1,381.39,31a19.46,19.46,0,0,1,7.11,7.86A23.64,23.64,0,0,1,397.09,31a23.34,23.34,0,0,1,11.12-2.69,20.65,20.65,0,0,1,11,2.9A16.79,16.79,0,0,1,426,38.76q2.08,4.68,2.08,15.24V88.34h-14.8V58.62q0-9.94-2.48-13.48t-7.43-3.52a11.22,11.22,0,0,0-6.75,2.15,12.66,12.66,0,0,0-4.44,5.95q-1.45,3.8-1.46,12.19V88.34h-14.8V60q0-7.86-1.16-11.38a10.27,10.27,0,0,0-3.48-5.25,9.15,9.15,0,0,0-5.61-1.72A11,11,0,0,0,359,43.8a13,13,0,0,0-4.48,6.1q-1.49,3.93-1.49,12.38V88.34H338.36Z"
                  style="fill: #eeeef0" />
                <path
                  d="M485.31,29.77H500V88.34H485.31V82.15A29,29,0,0,1,476.68,88a24.24,24.24,0,0,1-9.39,1.8q-11.34,0-19.62-8.8t-8.28-21.88q0-13.56,8-22.23a25.55,25.55,0,0,1,19.47-8.66,24.72,24.72,0,0,1,9.89,2,27.17,27.17,0,0,1,8.55,6ZM469.86,41.83a14.85,14.85,0,0,0-11.32,4.82A17.33,17.33,0,0,0,454,59a17.55,17.55,0,0,0,4.59,12.49,14.85,14.85,0,0,0,11.29,4.9,15.15,15.15,0,0,0,11.48-4.82Q486,66.76,486,59q0-7.65-4.56-12.38A15.31,15.31,0,0,0,469.86,41.83Z"
                  style="fill: #eeeef0" />
                <path
                  d="M28,29.77h14.7v6a35.37,35.37,0,0,1,9-5.87,22.09,22.09,0,0,1,8.31-1.64,20.09,20.09,0,0,1,14.78,6.08Q80,39.51,80,49.64v38.7H65.45V62.69q0-10.48-.94-13.92a9.57,9.57,0,0,0-3.27-5.25,9.18,9.18,0,0,0-5.78-1.8,10.82,10.82,0,0,0-7.65,3A16,16,0,0,0,43.38,53q-.65,2.74-.64,11.88v23.5H28Z"
                  style="fill: #eeeef0" />
                <path
                  d="M137.42,29.77h14.69V88.34H137.42V82.15A29,29,0,0,1,128.79,88a24.19,24.19,0,0,1-9.38,1.8q-11.34,0-19.63-8.8T91.5,59.16q0-13.56,8-22.23A25.53,25.53,0,0,1,119,28.27a24.69,24.69,0,0,1,9.89,2,27.17,27.17,0,0,1,8.55,6ZM122,41.83a14.87,14.87,0,0,0-11.32,4.82A17.37,17.37,0,0,0,106.15,59a17.54,17.54,0,0,0,4.58,12.49A14.85,14.85,0,0,0,122,76.39a15.12,15.12,0,0,0,11.48-4.82q4.56-4.81,4.56-12.62,0-7.65-4.56-12.38A15.3,15.3,0,0,0,122,41.83Z"
                  style="fill: #eeeef0" />
                <rect y="29.77" width="14.69" height="58.56" style="fill: #eeeef0" />
                <polygon
                  points="226.39 62.27 232.8 68.67 282.23 118.11 163.48 89.2 196.84 55.84 190.43 49.44 140.99 0 259.75 28.91 226.39 62.27"
                  style="fill: #3d63dd" />
              </svg>
            </a>

            <p class="mb-8 text-body-dark-11">
              We create digital experiences for brands and companies by using
              technology.
            </p>

            <div class="-mx-3 flex items-center">
              <a href="javascript:void(0)" class="px-3 text-body-dark-11 hover:text-primary text-[22px] leading-none">
                <i class="lni lni-facebook-fill"></i>
              </a>

              <a href="javascript:void(0)" class="px-3 text-body-dark-11 hover:text-primary text-[22px] leading-none">
                <i class="lni lni-twitter-original"></i>
              </a>

              <a href="javascript:void(0)" class="px-3 text-body-dark-11 hover:text-primary text-[22px] leading-none">
                <i class="lni lni-instagram-original"></i>
              </a>

              <a href="javascript:void(0)" class="px-3 text-body-dark-11 hover:text-primary text-[22px] leading-none">
                <i class="lni lni-linkedin-original"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-6 lg:col-2">
          <div class="w-full">
            <h4 class="mb-9 text-lg font-semibold text-inherit">Solutions</h4>
            <ul>
              <li>
                <a href="javascript:void(0)"
                  class="mb-3 inline-block text-body-dark-11 hover:text-primary">Marketing</a>
              </li>
              <li>
                <a href="javascript:void(0)"
                  class="mb-3 inline-block text-body-dark-11 hover:text-primary">Analytics</a>
              </li>
              <li>
                <a href="javascript:void(0)" class="mb-3 inline-block text-body-dark-11 hover:text-primary">Commerce</a>
              </li>
              <li>
                <a href="javascript:void(0)" class="mb-3 inline-block text-body-dark-11 hover:text-primary">Insights</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-6 lg:col-2">
          <div class="w-full">
            <h4 class="mb-9 text-lg font-semibold text-inherit">Support</h4>
            <ul>
              <li>
                <a href="javascript:void(0)" class="mb-3 inline-block text-body-dark-11 hover:text-primary">Pricing</a>
              </li>
              <li>
                <a href="javascript:void(0)"
                  class="mb-3 inline-block text-body-dark-11 hover:text-primary">Documentation</a>
              </li>
              <li>
                <a href="javascript:void(0)" class="mb-3 inline-block text-body-dark-11 hover:text-primary">Guides</a>
              </li>
              <li>
                <a href="javascript:void(0)" class="mb-3 inline-block text-body-dark-11 hover:text-primary">API
                  Status</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 -order-3 lg:col-4 lg:order-1">
          <div class="w-full">
            <h4 class="mb-9 text-lg font-semibold text-inherit">Subscribe</h4>

            <p class="text-body-dark-11">
              Subscribe to our newsletter for the latest updates
            </p>

            <form action="#" method="POST" target="_blank" class="mt-8 flex">
              <input type="email" name="email"
                class="inline-block flex-grow px-5 py-3 rounded-md rounded-e-none border border-solid border-alpha-dark text-inherit text-base focus:border-primary"
                placeholder="Email address" required />

              <button type="submit"
                class="inline-block py-3 w-[50px] rounded-md rounded-s-none text-center text-lg/none bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10">
                <i class="lni lni-envelope"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full border-t border-solid border-alpha-dark"></div>
    <div class="container py-8">
      <div class="flex flex-wrap">
        <div class="w-full md:w-1/2">
          <div class="my-1">
            <div class="flex flex-wrap justify-center gap-x-3 md:justify-start">
              <a href="javascript:void(0)" class="text-body-dark-11 hover:text-body-dark-12">Privacy Policy</a>
              <a href="javascript:void(0)" class="text-body-dark-11 hover:text-body-dark-12">Legal Notice</a>
              <a href="javascript:void(0)" class="text-body-dark-11 hover:text-body-dark-12">Terms of Service</a>
            </div>
          </div>
        </div>

        <div class="w-full md:w-1/2">
          <div class="my-1 flex justify-center md:justify-end">
            <p class="text-body-dark-11">
              &#169; 2024 Inazuma Inc. All rights reserved.
            </p>
          </div>
        </div>
      </div>
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