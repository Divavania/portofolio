<?php
$projects = [
    [
        'number' => '01',
        'category' => 'FINAL PROJECT · WEB DEVELOPMENT',
        'title' => 'Sistem Pakar Diagnosis & Estimasi Biaya Perbaikan Body Mobil',
        'short_title' => 'Sistem Pakar Diagnosis & Estimasi Biaya Perbaikan Body Mobil',
        'description' => 'Website sistem pakar untuk membantu proses diagnosis kerusakan body mobil dan estimasi biaya perbaikan berdasarkan hasil inference menggunakan Forward Chaining.',
        'stack' => ['Laravel', 'PHP', 'MySQL', 'Bootstrap', 'Forward Chaining'],
        'role' => 'System Development · Backend · Database · Testing',
        'image' => 'assets/projects/project-1/cover.png',
        'gallery' => [
            [
                'image' => 'assets/projects/project-1/01.png',
                'title' => 'Halaman Konsultasi',
                'description' => 'Halaman konsultasi untuk membantu pengguna memilih gejala kerusakan.'
            ],
            [
                'image' => 'assets/projects/project-1/02.png',
                'title' => 'Proses Diagnosis',
                'description' => 'Sistem memproses jawaban pengguna menggunakan metode Forward Chaining.'
            ],
            [
                'image' => 'assets/projects/project-1/03.png',
                'title' => 'Hasil Diagnosis',
                'description' => 'Hasil diagnosis menampilkan jenis kerusakan dan tingkat keparahannya.'
            ],
            [
                'image' => 'assets/projects/project-1/04.png',
                'title' => 'Estimasi Biaya',
                'description' => 'Sistem memberikan estimasi biaya berdasarkan jasa dan material perbaikan.'
            ]
        ],
        'details' => [
            'System Development' => 'Merancang alur sistem konsultasi dan diagnosis, mengimplementasikan Forward Chaining, serta mengembangkan fitur konsultasi dan halaman hasil diagnosis.',
            'Backend Development' => 'Mengembangkan aplikasi menggunakan Laravel dan mengimplementasikan logic aplikasi serta proses diagnosis.',
            'Database' => 'Merancang dan mengelola struktur database MySQL untuk data gejala, kerusakan, aturan, material, dan jasa.',
            'Testing & Debugging' => 'Melakukan pengujian fitur, testing alur konsultasi, debugging, serta memastikan sistem berjalan sesuai rancangan.'
        ]
    ],
    [
        'number' => '02',
        'category' => 'TEAM PROJECT · WEB DEVELOPMENT',
        'title' => 'Website Company Profile PT Tigatra Adikara',
        'short_title' => 'Website Company Profile PT Tigatra Adikara',
        'description' => 'Website Company Profile yang dikembangkan untuk menyajikan informasi perusahaan dan layanan melalui platform web yang terstruktur, responsif, dan mudah diakses.',
        'stack' => ['Laravel', 'PHP', 'MySQL', 'Bootstrap'],
        'role' => 'Frontend · Backend · Database · Testing',
        'image' => 'assets/projects/project-2/cover.png',
        'gallery' => [
            [
                'image' => 'assets/projects/project-2/01.png',
                'title' => 'Homepage',
                'description' => 'Halaman utama website Company Profile.'
            ],
            [
                'image' => 'assets/projects/project-2/02.png',
                'title' => 'Company Profile',
                'description' => 'Halaman yang menyajikan informasi mengenai perusahaan.'
            ],
            [
                'image' => 'assets/projects/project-2/03.png',
                'title' => 'Services',
                'description' => 'Halaman layanan perusahaan.'
            ],
            [
                'image' => 'assets/projects/project-2/04.png',
                'title' => 'Contact',
                'description' => 'Halaman kontak dan informasi perusahaan.'
            ]
        ],
        'details' => [
            'Web Development' => 'Mengembangkan website menggunakan Laravel, mengimplementasikan tampilan, serta mengembangkan fitur frontend dan backend.',
            'Database' => 'Mengelola database MySQL dan menyesuaikan struktur data dengan kebutuhan website.',
            'Implementation' => 'Mengimplementasikan halaman Company Profile, informasi perusahaan, layanan, dan menyesuaikan tampilan agar responsive.',
            'Testing & Debugging' => 'Melakukan testing terhadap fitur, menemukan error, melakukan debugging, dan memastikan halaman berjalan sesuai kebutuhan.'
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Diva Vania Candrawati — Web Development · Content & SEO</title>

    <meta name="description"
          content="Portfolio of Diva Vania Candrawati, fresh graduate in Information Technology with experience in Web Development, Content Writing and SEO.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Manrope:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- =========================================
     NAVIGATION
========================================= -->

<header class="navbar">
    <div class="container nav-inner">

        <a href="#home" class="brand">
            DVC<span>.</span>
        </a>

        <nav class="nav-menu">
            <a href="#about">About</a>
            <a href="#experience">Experience</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#certification">Certification</a>
            <a href="#writing">Writing</a>
        </nav>

        <a href="#contact" class="nav-contact">
            Contact
        </a>

        <button class="menu-toggle" id="menuToggle" aria-label="Open menu">
            <span></span>
            <span></span>
        </button>

    </div>
</header>


<main>

<!-- =========================================
     HERO
========================================= -->

<section class="hero" id="home">

    <div class="container hero-grid">

        <div class="hero-content">

            <div class="eyebrow">
                <span></span>
                WEB DEVELOPMENT · CONTENT & SEO
            </div>

            <h1>
                Diva Vania
                <em>Candrawati.</em>
            </h1>

            <p class="hero-role">
                Web Development · Content & SEO
            </p>

            <p class="hero-description">
                Fresh graduate Teknologi Informasi dengan pengalaman dalam
                Web Development serta Content & SEO. Saya memiliki pengalaman
                mengembangkan website menggunakan Laravel dan mengelola
                konten digital melalui research, SEO writing, optimization,
                dan publishing.
            </p>

            <div class="hero-actions">

                <a href="#projects" class="btn btn-primary">
                    View Projects
                    <span>↗</span>
                </a>

                <a href="#writing" class="btn btn-outline">
                    View Writing
                    <span>↗</span>
                </a>

                <!-- <a href="assets/cv/Diva-Vania-Candrawati-CV.pdf"
                   class="btn btn-outline"
                   target="_blank">
                    Download CV
                    <span>↓</span>
                </a> -->

            </div>

        </div>


        <div class="hero-visual">

            <div class="portrait-frame">

                <div class="portrait">
                    <img
                        src="assets/images/foto-diva.png"
                        alt="Diva Vania Candrawati"
                    >
                </div>

                <div class="portrait-caption">
                    <span>01</span>
                    <span>WEB · CONTENT · SEO</span>
                </div>

            </div>

            <div class="hero-note">

                <span>Currently focused on</span>

                <strong>
                    Web Development & Content
                </strong>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     ABOUT
========================================= -->

<section class="section about-section" id="about">

    <div class="container">

        <div class="section-heading">

            <span class="section-number">01</span>

            <div>

                <p class="section-label">
                    ABOUT ME
                </p>

                <h2>
                    Building digital work
                    <span>with both structure & content.</span>
                </h2>

            </div>

        </div>


        <div class="about-grid">

            <div class="about-main">

                <p class="large-text">
                    Saya fresh graduate Teknologi Informasi di
                    <strong>Politeknik Negeri Madiun</strong> dengan
                    pengalaman di bidang <strong>Web Development</strong>
                    serta <strong>Content & SEO</strong>.
                </p>

                <p>
                    Dalam Web Development, saya memiliki pengalaman
                    mengembangkan website menggunakan Laravel, PHP,
                    MySQL, HTML, CSS, dan Bootstrap melalui tugas akhir
                    serta project berbasis web.
                </p>

                <p>
                    Di sisi lain, saya memiliki pengalaman sebagai
                    <strong>SEO Content Writer</strong> di Jawa Pos Radar
                    Madiun, mulai dari content research, keyword research,
                    penulisan artikel, content optimization, hingga
                    publishing melalui CMS.
                </p>

            </div>


            <div class="about-facts">

                <div class="fact">

                    <span>01</span>

                    <div>
                        <small>WEB DEVELOPMENT</small>
                        <strong>Laravel · PHP · MySQL</strong>
                    </div>

                </div>


                <div class="fact">

                    <span>02</span>

                    <div>
                        <small>CONTENT & SEO</small>
                        <strong>Writing · Research · Optimization</strong>
                    </div>

                </div>


                <div class="fact">

                    <span>03</span>

                    <div>
                        <small>BACKGROUND</small>
                        <strong>Fresh Graduate · D3 Teknologi Informasi</strong>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     EXPERIENCE
========================================= -->

<section class="section experience-section" id="experience">

    <div class="container">

        <div class="section-heading">

            <span class="section-number">02</span>

            <div>

                <p class="section-label">
                    EXPERIENCE
                </p>

                <h2>
                    Experience in
                    <span>content & digital publishing.</span>
                </h2>

            </div>

        </div>


        <div class="experience-item">

            <div class="experience-meta">
                <span>2025</span>
                <span>01</span>
            </div>


            <div class="experience-content">

                <p class="experience-company">
                    Jawa Pos Radar Madiun
                </p>

                <h3>
                    SEO Content Writer Intern
                </h3>

                <p>
                    Berpengalaman membuat content untuk kebutuhan
                    digital publishing dengan memperhatikan research,
                    keyword, struktur artikel, relevansi topik, dan
                    prinsip SEO.
                </p>


                <div class="experience-tags">

                    <span>Content Research</span>
                    <span>Keyword Research</span>
                    <span>SEO Writing</span>
                    <span>Content Optimization</span>
                    <span>CMS Publishing</span>

                </div>


                <button
                    class="text-button"
                    data-expand="experienceDetails"
                >
                    View responsibilities
                    <span>↓</span>
                </button>


                <div
                    class="expand-content"
                    id="experienceDetails"
                >

                    <ul>

                        <li>
                            Menulis artikel untuk kebutuhan
                            digital publishing
                        </li>

                        <li>
                            Melakukan content research
                        </li>

                        <li>
                            Melakukan keyword research
                        </li>

                        <li>
                            Membuat artikel dengan pendekatan SEO
                        </li>

                        <li>
                            Mengoptimalkan struktur dan isi content
                        </li>

                        <li>
                            Menyesuaikan content dengan kebutuhan
                            online audience
                        </li>

                        <li>
                            Melakukan publishing melalui
                            web-based content platform
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     SKILLS
========================================= -->

<section class="section skills-section" id="skills">

    <div class="container">

        <div class="section-heading">

            <span class="section-number">03</span>

            <div>

                <p class="section-label">
                    SKILLS
                </p>

                <h2>
                    Skills I use to
                    <span>build & create.</span>
                </h2>

            </div>

        </div>


        <div class="skills-list">


            <!-- WEB DEVELOPMENT -->

            <div class="skill-row">

                <div class="skill-category">
                    01
                    <span>WEB DEVELOPMENT</span>
                </div>

                <div class="skill-items">

                    <span>Laravel</span>
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>Bootstrap</span>
                    <span>Blade</span>

                </div>

            </div>


            <!-- CONTENT & SEO -->

            <div class="skill-row">

                <div class="skill-category">
                    02
                    <span>CONTENT & SEO</span>
                </div>

                <div class="skill-items">

                    <span>SEO Content Writing</span>
                    <span>Keyword Research</span>
                    <span>Content Research</span>
                    <span>Content Optimization</span>
                    <span>Article Writing</span>
                    <span>Digital Publishing</span>
                    <span>CMS</span>

                </div>

            </div>


            <!-- TOOLS -->

            <div class="skill-row">

                <div class="skill-category">
                    03
                    <span>TOOLS</span>
                </div>

                <div class="skill-items">

                    <span>Git</span>
                    <span>GitHub</span>
                    <span>Canva</span>
                    <span>Microsoft Office</span>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- =========================================
     PROJECTS
========================================= -->

<section class="section projects-section" id="projects">

    <div class="container">

        <div class="section-heading project-heading">

            <div>

                <p class="section-label">
                    SELECTED PROJECTS
                </p>

                <h2>
                    Web projects that turn
                    <span>ideas into systems.</span>
                </h2>

            </div>


            <p class="section-intro">
                Dua project utama yang merepresentasikan pengalaman
                saya dalam Web Development, mulai dari pengembangan
                sistem, implementasi fitur, pengelolaan database,
                hingga testing.
            </p>

        </div>


        <div class="projects-list">

            <?php foreach ($projects as $index => $project): ?>

                <article class="project-item">

                    <div class="project-number">
                        <?= htmlspecialchars($project['number']) ?>
                    </div>


                    <div class="project-main">

                        <div class="project-info">

                            <p class="project-category">
                                <?= htmlspecialchars($project['category']) ?>
                            </p>


                            <h3>
                                <?= htmlspecialchars($project['title']) ?>
                            </h3>


                            <p class="project-description">
                                <?= htmlspecialchars($project['description']) ?>
                            </p>


                            <div class="project-stack">

                                <?php foreach ($project['stack'] as $tech): ?>

                                    <span>
                                        <?= htmlspecialchars($tech) ?>
                                    </span>

                                <?php endforeach; ?>

                            </div>


                            <div class="project-role">

                                <small>
                                    MY ROLE
                                </small>

                                <strong>
                                    <?= htmlspecialchars($project['role']) ?>
                                </strong>

                            </div>


                            <button
                                class="project-button"
                                data-project="<?= $index ?>"
                            >
                                Explore Project
                                <span>↗</span>
                            </button>

                        </div>


                        <div class="project-cover">

                            <div class="project-image-wrapper">

                                <img
                                    src="<?= htmlspecialchars($project['image']) ?>"
                                    alt="<?= htmlspecialchars($project['short_title']) ?>"
                                    onerror="this.style.display='none'; this.parentElement.classList.add('image-placeholder');"
                                >

                                <div class="cover-placeholder">

                                    <span>
                                        <?= $project['number'] ?>
                                    </span>

                                    <strong>
                                        PROJECT<br>PREVIEW
                                    </strong>

                                </div>

                            </div>

                        </div>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =========================================
     CERTIFICATION
========================================= -->

<section class="section certification-section" id="certification">

    <div class="container">

        <div class="section-heading">

            <span class="section-number">05</span>

            <div>

                <p class="section-label">
                    CERTIFICATION
                </p>

                <h2>
                    Professional competency,
                    <span>formally recognized.</span>
                </h2>

            </div>

        </div>


        <div class="certificate-slider">

            <button
                class="certificate-arrow certificate-prev"
                id="certificatePrev"
                aria-label="Previous certificate"
            >
                ←
            </button>


            <div class="certificate-track-wrapper">

                <div
                    class="certificate-track"
                    id="certificateTrack"
                >

                    <article class="certificate-slide">

                        <div class="certificate-number">
                            01 / 01
                        </div>


                        <div class="certificate-image-wrap">

                            <button
                                class="certificate-image-button"
                                data-pdf="assets/certificates/bnsp-junior-web-developer.pdf"
                                data-title="BNSP Junior Web Developer"
                            >

                                <img
                                    src="assets/certificates/bnsp-preview.jpeg"
                                    alt="Sertifikat BNSP Junior Web Developer"
                                >

                                <span class="certificate-image-overlay">
                                    Click to view full certificate ↗
                                </span>

                            </button>

                        </div>


                        <div class="certificate-content">

                            <p class="certificate-issuer">
                                BNSP · BPSDMP Surabaya · 2024
                            </p>

                            <h3>
                                Junior Web Developer
                            </h3>

                            <p>
                                Sertifikasi kompetensi yang mendukung
                                kemampuan saya dalam bidang Web Development.
                            </p>

                        </div>

                    </article>

                </div>

            </div>


            <button
                class="certificate-arrow certificate-next"
                id="certificateNext"
                aria-label="Next certificate"
            >
                →
            </button>

        </div>


        <div class="certificate-slider-footer">

            <div
                class="certificate-dots"
                id="certificateDots"
            ></div>

            <span class="certificate-hint">
                Drag or use arrows to explore
            </span>

        </div>

    </div>

</section>


<!-- =========================================
     WRITING
========================================= -->

<section class="section writing-section" id="writing">

    <div class="container">

        <!-- SECTION HEADING -->
        <div class="section-heading">

            <span class="section-number">06</span>

            <div>
                <p class="section-label">
                    WRITING
                </p>

                <h2>
                    Content built around
                    <span>research & SEO.</span>
                </h2>
            </div>

        </div>


        <!-- WRITING INTRO -->
        <div class="writing-intro">

            <p>
                Selain Web Development, saya memiliki pengalaman
                menulis artikel berbasis SEO dan mengelola konten
                melalui CMS. Pengalaman ini mencakup research,
                penyusunan struktur artikel, penulisan, optimization,
                dan digital publishing.
            </p>

        </div>


        <!-- WRITING LIST -->
        <div class="writing-list" id="writingList">


            <!-- ARTICLE 01 -->
            <article class="writing-item">

                <div class="writing-number">01</div>

                <div class="writing-content">

                    <p class="writing-category">
                        SEO CONTENT · LIFESTYLE
                    </p>

                    <h3>
                        Nasi Padang Bungkus
                    </h3>

                    <p class="writing-description">
                        Artikel lifestyle yang ditulis dengan pendekatan
                        SEO-friendly, mulai dari penyusunan topik,
                        struktur artikel, hingga pengelolaan konten
                        melalui CMS.
                    </p>

                    <div class="writing-meta">
                        <span>Jawa Pos Radar Madiun</span>
                        <span>·</span>
                        <span>2025</span>
                    </div>

                    <a
                        href="https://radarmadiun.jawapos.com/gaya-hidup/2508160019/kenapa-nasi-padang-selalu-lebih-banyak-saat-dibungkus-ini-rahasianya"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="writing-link"
                    >
                        Read Article
                        <span>↗</span>
                    </a>

                </div>

                <div class="writing-arrow">↗</div>

            </article>


            <!-- ARTICLE 02 -->
            <article class="writing-item">

                <div class="writing-number">02</div>

                <div class="writing-content">

                    <p class="writing-category">
                        SEO CONTENT · TECHNOLOGY
                    </p>

                    <h3>
                        Google Gemini untuk Editing Foto
                    </h3>

                    <p class="writing-description">
                        Artikel informatif mengenai penggunaan Google
                        Gemini untuk membantu proses editing foto,
                        ditulis dengan struktur yang disesuaikan
                        untuk kebutuhan konten digital.
                    </p>

                    <div class="writing-meta">
                        <span>Jawa Pos Radar Madiun</span>
                        <span>·</span>
                        <span>2025</span>
                    </div>

                    <a
                        href="https://radarmadiun.jawapos.com/gaya-hidup/2509170039/cara-edit-foto-elegan-dengan-google-gemini-bikin-potret-biasa-jadi-visual-ai-estetik-ala-pemotretan-profesional"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="writing-link"
                    >
                        Read Article
                        <span>↗</span>
                    </a>

                </div>

                <div class="writing-arrow">↗</div>

            </article>


            <!-- ARTICLE 03 -->
            <article class="writing-item writing-extra" id="thirdArticle">

                <div class="writing-number">03</div>

                <div class="writing-content">

                    <p class="writing-category">
                        SEO CONTENT · NATIONAL
                    </p>

                    <h3>
                        Pink dan Hijau dalam 17+8 Tuntutan Rakyat
                    </h3>

                    <p class="writing-description">
                        Artikel yang mengulas makna warna pink dan hijau
                        dalam 17+8 Tuntutan Rakyat, serta pesan mengenai
                        transparansi, reformasi, dan empati.
                    </p>

                    <div class="writing-meta">
                        <span>Jawa Pos Radar Madiun</span>
                        <span>·</span>
                        <span>2025</span>
                    </div>

                    <a
                        href="https://radarmadiun.jawapos.com/nasional/2509020041/pink-dan-hijau-dalam-178-tuntutan-rakyat-pesan-transparansi-reformasi-dan-empati"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="writing-link"
                    >
                        Read Article
                        <span>↗</span>
                    </a>

                </div>

                <div class="writing-arrow">↗</div>

            </article>

            <!-- Artikel 4 -->
            <article class="writing-item writing-extra" id="fourthArticle">

                <div class="writing-number">04</div>

                <div class="writing-content">

                    <p class="writing-category">
                        SEO CONTENT · LIFESTYLE
                    </p>

                    <h3>
                        Capek Sama Tugas Kuliah? Ini 7 Cara Ampuh Cegah Depresi Akademik Biar Tetap Waras dan Produktif
                    </h3>

                    <p class="writing-description">
                        Artikel lifestyle tentang cara mencegah depresi akademik
                        agar tetap menjaga kesehatan mental dan produktivitas selama kuliah.
                    </p>

                    <div class="writing-meta">
                        <span>Jawa Pos Radar Madiun</span>
                        <span>·</span>
                        <span>2025</span>
                    </div>

                    <a
                        href="https://radarmadiun.jawapos.com/gaya-hidup/2510140034/capek-sama-tugas-kuliah-ini-7-cara-ampuh-cegah-depresi-akademik-biar-tetap-waras-dan-produktif"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="writing-link"
                    >
                        Read Article
                        <span>↗</span>
                    </a>

                </div>

                <div class="writing-arrow">↗</div>

            </article>

            <!-- Artikel 5 -->
            <article class="writing-item writing-extra" id="fifthArticle">

                <div class="writing-number">05</div>

                <div class="writing-content">

                    <p class="writing-category">
                        SEO CONTENT · LIFESTYLE
                    </p>

                    <h3>
                        Waktu Terbatas? Biarkan ChatGPT yang Rangkum Video YouTube Kamu Secara Cepat, Lengkap, dan Akurat
                    </h3>

                    <p class="writing-description">
                        Artikel yang membahas pemanfaatan ChatGPT untuk merangkum
                        video YouTube secara lebih praktis dan efisien.
                    </p>

                    <div class="writing-meta">
                        <span>Jawa Pos Radar Madiun</span>
                        <span>·</span>
                        <span>2025</span>
                    </div>

                    <a
                        href="https://radarmadiun.jawapos.com/gaya-hidup/2511050090/waktu-terbatas-biarkan-chatgpt-yang-rangkum-video-youtube-kamu-secara-cepat-lengkap-dan-akurat"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="writing-link"
                    >
                        Read Article
                        <span>↗</span>
                    </a>

                </div>

                <div class="writing-arrow">↗</div>

            </article>

            
            <!-- Artikel 6 -->
            <article class="writing-item writing-extra" id="sixthArticle">

                <div class="writing-number">06</div>

                <div class="writing-content">

                    <p class="writing-category">
                        SEO CONTENT · NASIONAL
                    </p>

                    <h3>
                        Tolak Kredit Fiktif Rp1,3 Miliar, Kacab Bank BRI Cempaka Putih Diculik dan Dibunuh Pengusaha Muda
                    </h3>

                    <p class="writing-description">
                        Artikel berita yang mengulas kasus penculikan dan pembunuhan
                        kepala cabang bank terkait penolakan kredit fiktif.
                    </p>

                    <div class="writing-meta">
                        <span>Jawa Pos Radar Madiun</span>
                        <span>·</span>
                        <span>2025</span>
                    </div>

                    <a
                        href="https://radarmadiun.jawapos.com/nasional/2508280032/tolak-kredit-fiktif-rp13-miliar-kacab-bank-bri-cempaka-putih-diculik-dan-dibunuh-pengusaha-muda"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="writing-link"
                    >
                        Read Article
                        <span>↗</span>
                    </a>

                </div>

                <div class="writing-arrow">↗</div>

            </article>


            <!-- Artikel 7 -->
            <article class="writing-item writing-extra" id="seventhArticle">

                <div class="writing-number">07</div>

                <div class="writing-content">

                    <p class="writing-category">
                        SEO CONTENT · HIBURAN
                    </p>

                    <h3>
                        Drakor Tempest Tayang 10 September 2025 di Disney+ Hotstar, Jun Ji Hyun Comeback dan Kang Dong Won Debut Series Jadi Sorotan
                    </h3>

                    <p class="writing-description">
                        Artikel hiburan yang membahas penayangan drama Korea Tempest,
                        termasuk kembalinya Jun Ji Hyun dan debut serial Kang Dong Won.
                    </p>

                    <div class="writing-meta">
                        <span>Jawa Pos Radar Madiun</span>
                        <span>·</span>
                        <span>2025</span>
                    </div>

                    <a
                        href="https://radarmadiun.jawapos.com/entertainment/2509110049/drakor-tempest-tayang-10-september-2025-di-disney-hotstar-jun-ji-hyun-comeback-dan-kang-dong-won-debut-series-jadi-sorotan"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="writing-link"
                    >
                        Read Article
                        <span>↗</span>
                    </a>

                </div>

                <div class="writing-arrow">↗</div>

            </article>
        </div>


        <!-- SHOW MORE BUTTON -->
        <div class="writing-more-wrapper">
            <button
                id="writingMore"
                class="writing-more"
                type="button"
                aria-expanded="false"
            >
                <span class="button-text">Show More Articles</span>
                <span class="button-icon">↓</span>
            </button>
        </div>

    </div>

</section>


<!-- =========================================
     CONTACT
========================================= -->

<section class="contact-section" id="contact">

    <div class="container">

        <p class="section-label">
            LET'S CONNECT
        </p>


        <h2>
            Let's create something
            <em>meaningful.</em>
        </h2>


        <p class="contact-description">
            Terbuka untuk kesempatan kerja, collaboration,
            dan project yang berkaitan dengan Web Development,
            Content Writing, maupun SEO.
        </p>


        <a
            href="mailto:divavaniacandrawati@gmail.com"
            class="contact-email"
        >
            divavaniacandrawati@gmail.com
            <span>↗</span>
        </a>


        <div class="contact-links">

            <a href="#" target="_blank">
                LinkedIn
            </a>

            <a href="#" target="_blank">
                GitHub
            </a>

            <a
                href="assets/cv/Diva-Vania-Candrawati-CV.pdf"
                target="_blank"
            >
                CV
            </a>

        </div>

    </div>

</section>

</main>


<!-- =========================================
     FOOTER
========================================= -->

<footer class="footer">

    <div class="container footer-inner">

        <div>

            <strong>
                DVC<span>.</span>
            </strong>

            <small>
                Web Development · Content & SEO
            </small>

        </div>


        <p>
            © 2026 Diva Vania Candrawati
        </p>


        <a href="#home">
            Back to top ↑
        </a>

    </div>

</footer>


<!-- =========================================
     PROJECT MODAL
========================================= -->

<div class="project-modal" id="projectModal">

    <div
        class="modal-overlay"
        id="modalOverlay"
    ></div>


    <div class="modal-container">

        <button
            class="modal-close"
            id="modalClose"
        >
            ×
        </button>


        <div class="modal-top">

            <div>

                <span
                    class="modal-number"
                    id="modalNumber"
                >
                    01
                </span>

                <p id="modalCategory">
                    FINAL PROJECT
                </p>

            </div>


            <div class="modal-counter">

                <span id="currentImage">
                    01
                </span>

                /

                <span id="totalImages">
                    04
                </span>

            </div>

        </div>


        <div class="modal-gallery">

            <button
                class="gallery-arrow gallery-prev"
                id="galleryPrev"
            >
                ←
            </button>


            <div class="gallery-image-container">

                <img
                    id="galleryImage"
                    src=""
                    alt=""
                >


                <div
                    class="gallery-placeholder"
                    id="galleryPlaceholder"
                >
                    <span>
                        PROJECT SCREENSHOT
                    </span>
                </div>

            </div>


            <button
                class="gallery-arrow gallery-next"
                id="galleryNext"
            >
                →
            </button>

        </div>


        <div class="modal-details">

            <div>

                <p class="modal-label">
                    SCREEN
                </p>

                <h3 id="galleryTitle">
                    Project Screen
                </h3>

                <p id="galleryDescription">
                    Project description.
                </p>

            </div>


            <div
                class="modal-thumbnails"
                id="modalThumbnails"
            >
                <!-- Generated by JavaScript -->
            </div>

        </div>


        <div class="project-detail-section">

            <p class="modal-label">
                PROJECT DETAILS
            </p>

            <div id="projectDetails">
                <!-- Generated by JavaScript -->
            </div>

        </div>

    </div>

</div>


<script>
    const projectData =
        <?= json_encode(
            $projects,
            JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
        ); ?>;
</script>

<script src="js/script.js"></script>

</body>
</html>