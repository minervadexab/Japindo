<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>PT. Japindo Boga Karya</title>
  <meta name="title" content="Grilli - Amazing & Delicious Food">
  <meta name="description" content="This is a Restaurant html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./images/hero-slider-3.jpg">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Japindo</p>
  </div>





  <!-- 
    - #TOP BAR
  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
        Sukaresmi, Cikarang Sel., Kabupaten Bekasi, Jawa Barat
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Daily : 8.00 am to 17:00 pm</span>
      </div>

      <a href="tel:+11234567890" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">+6283-8755-44969</span>
      </a>

      <div class="separator"></div>

      <a href="mailto:booking@restaurant.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">japindobk17@gmail.com</span>
      </a>

    </div>
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./images/partner5.png" width="60" height="50" alt="Japindo - Home">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./images/partner5.png" width="60" height="50" alt="Japindo - Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link hover-underline active">
              <div class="separator"></div>

              <span class="span">Home</span>
            </a>
          </li>

          <li class="navbar-item dropdown">
      <a href="#" class="navbar-link hover-underline">
             <div class="separator"></div>
             <span class="span">Menu</span>
      </a>
      <div class="dropdown-content">
            <a href="menuminori.php">Menu Minori</a>
            <a href="menu.php">Menu Japindo</a>
      </div>
          </li>
          <li class="navbar-item">
            <a href="#about" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">About Us</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#structures" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Structures</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#contact" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Contact</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Visit Us</p>

          <address class="body-4">
            PT Japindo Boga Karya <br>
            Ruko ctc, Ciksel
          </address>

          <p class="body-4 navbar-text">Open: 09:00 am - 17:00pm</p>

          <a href="mailto:booking@grilli.com" class="body-4 sidebar-link">japindobk17@gmail.com</a>

          <div class="separator"></div>

          <p class="contact-label">Booking Request</p>

          <a href="tel:6283875544969" class="body-1 contact-number hover-underline">
            +6283875544969
          </a>
        </div>

      </nav>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./images/hero-slider-1.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Japindo Boga Karya</p>

            <h1 class="display-1 hero-title slider-reveal">
              untuk yang cinta<br>
              makanan enak
            </h1>

            <p class="body-2 hero-text slider-reveal">
              suka lah dengan cita rasa ini
            </p>

            <a href="#menuutama" class="btn btn-primary slider-reveal">
              <span class="text text-1">lihat menu kita</span>

              <span class="text text-2" aria-hidden="true">lihat menu kita</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./images/hero-slider-2.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">cita rasa</p>

            <h1 class="display-1 hero-title slider-reveal">
              menginspirasi makanan pada<br>
              musim ini
            </h1>

            <p class="body-2 hero-text slider-reveal">
              datang dengan keluarga dan enjoy dengan makanan nya
            </p>

            <a href="#menuutama" class="btn btn-primary slider-reveal">
              <span class="text text-1">Lihat Menu Kita</span>

              <span class="text text-2" aria-hidden="true">Lihat Menu Kita</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./images/hero-slider-3.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Keajaiban dan Kelezatan</p>

            <h1 class="display-1 hero-title slider-reveal">
              dimana setiap rasa <br>
              menceritakan segala nya
            </h1>

            <p class="body-2 hero-text slider-reveal">
            datang dengan keluarga dan enjoy dengan makanan nya
            </p>

            <a href="#menuutama" class="btn btn-primary slider-reveal">
              <span class="text text-1">Lihat Menu Kita</span>

              <span class="text text-2" aria-hidden="true">Lihat Menu Kita</span>
            </a>

          </li>

        </ul>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service bg-black-10 text-center" aria-label="service">
        <div class="container">

          <p class="section-subtitle label-2">rasa adalah harta</p>

          <h2 class="headline-1 section-title">Kategori</h2>

          <p class="section-text">
            Makanan di Japindo memiliki 3 kategori yang sangat lezat,
            seperti berikut
          </p>

          <ul class="grid-list" id="menuutama">

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./images/service-1.jpg" width="285" height="336" loading="lazy" alt="Breakfast"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#menu">Makanan Pembuka</a>
                  </h3>

                  <a href="#menu" class="btn-text hover-underline label-2">Lihat Menu</a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./images/service-2.jpg" width="285" height="336" loading="lazy" alt="Appetizers"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#menu2">Makanan Berat</a>
                  </h3>

                  <a href="#menu2" class="btn-text hover-underline label-2">Lihat Menu</a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./images/service-3.jpg" width="285" height="336" loading="lazy" alt="Drinks"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#menu3">Sayur Sayuran</a>
                  </h3>

                  <a href="#menu3" class="btn-text hover-underline label-2">Lihat Menu</a>

                </div>

              </div>
            </li>

          </ul>

          <img src="./images/shape-1.png" width="246" height="412" loading="lazy" alt="shape"
            class="shape shape-1 move-anim">
          <img src="./images/shape-2.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">Tentang Kami</p>

            <h2 class="headline-1 section-title">Setiap rasa menceritakan Banyak Kenangan</h2>

            <p class="section-text">
            Salah satu perusahaan jasa katering terbaik dan terkemuka
            Dibangun atas fondasi kepercayaan serta kepuasan konsumen sejak tahun 1015.
            Katering untuk setiap jenis acara
            Mulai dari katering untuk korporasi dan institusi, pernikahan, acara ulang tahun, serta acara elaborasi lainnya.
            Staf dan koki profesional kami siap melayani Anda
            Kami senantiasa memberikan produk berkualitas dengan penyajian yang inovatif.
            </p>

            <div class="contact-label">contact di bawah ini</div>

            <a href="tel:+6283875544969" class="body-1 contact-number hover-underline">+6283 8755 44969</a>

            <a href="#" class="btn btn-primary">
              <span class="text text-1">Read More</span>

              <span class="text text-2" aria-hidden="true">Read More</span>
            </a>

          </div>

          <figure class="about-banner">

            <img src="./images/about-banner.jpg" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1">

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="./images/about-abs-image.jpg" width="285" height="285" loading="lazy" alt=""
                class="w-100">
            </div>

            <div class="abs-img abs-img-2 has-before">
              <img src="./images/partner5.png" width="133" height="50" loading="lazy" alt="">
            </div>

          </figure>

          <img src="./images/shape-3.png" width="197" height="194" loading="lazy" alt="" class="shape">

        </div>
      </section>

      <!-- 
        - #TESTIMONIALS
      -->

      <section class="section testi text-center has-bg-image"
        style="background-image: url('./assets/images/testimonial-bg.jpg')" aria-label="testimonials">
        <div class="container">

          <div class="quote">”</div>

          <p class="headline-2 testi-text">
            Memilih japindo menjadi makanan chatering di lingkungan minori merupakan
            ide yang bagus dan baik.
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <div class="profile">
            <img src="./images/testi-avatar.jpg" width="100" height="100" loading="lazy" alt="fadil"
              class="img">

            <p class="label-2 profile-name">Fadil aka calon ketua hima</p>
          </div>

        </div>
      </section>
      <!-- 
        - #FEATURES
      -->

      <section class="section features text-center" aria-label="features">
        <div class="container">

          <p class="section-subtitle label-2">Kenapa memilih kami</p>

          <h2 class="headline-1 section-title">Layanan kami</h2>

          <ul class="grid-list">

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./images/features-icon-1.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Hygienic Food</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./images/features-icon-2.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Fresh Environment</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./images/features-icon-3.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Skilled Chefs</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./images/features-icon-4.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Event & Party</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

          </ul>

          <img src="./images/shape-7.png" width="208" height="178" loading="lazy" alt="shape"
            class="shape shape-1">

          <img src="./images/shape-8.png" width="120" height="115" loading="lazy" alt="shape"
            class="shape shape-2">

        </div>
      </section>





      <!-- 
        - #EVENT
      -->

      <section class="section event bg-black-10" aria-label="event" id="structures">
        <div class="container">

          <p class="section-subtitle label-2 text-center">Structures</p>

          <h2 class="section-title headline-1 text-center">Our Teams</h2>

          <ul class="grid-list">

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./images/event-1.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Pa Deddy</p>

                  <h3 class="card-title title-2 text-center">
                    Direktur Utama Japindo
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./images/event-2.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Pa Ahmad</p>

                  <h3 class="card-title title-2 text-center">
                   Wakil Direktur Japindo
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./images/event-3.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Rayhan</p>

                  <h3 class="card-title title-2 text-center">
                    Mahasiswa Takumi
                  </h3>
                </div>

              </div>
            </li>

          </ul>

          <ul class="grid-list">

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./images/event-1.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">fadil</p>

                  <h3 class="card-title title-2 text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./images/event-2.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">sareh</p>

                  <h3 class="card-title title-2 text-center">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./images/event-3.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">anam</p>

                  <h3 class="card-title title-2 text-center">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  </h3>
                </div>

              </div>
            </li>

          </ul>

          <ul class="grid-list">

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./images/event-1.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Ibrahim</p>

                  <h3 class="card-title title-2 text-center">
                    Flavour so good you’ll try to eat with your eyes.
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./images/event-2.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Vanisya</p>

                  <h3 class="card-title title-2 text-center">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./images/event-3.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Angga</p>

                  <h3 class="card-title title-2 text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </h3>
                </div>

              </div>
            </li>

          </ul>
          <a href="#" class="btn btn-primary">
            <span class="text text-1">View Our Blog</span>

            <span class="text text-2" aria-hidden="true">View Our Blog</span>
          </a>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer section has-bg-image text-center"
    style="background-image: url('./images/footer-bg.jpg')">
    <div class="container">

      <div class="footer-top grid-list">

        <div class="footer-brand has-before has-after">

          <a href="#" class="logo">
            <img src="./images/partner5.png" width="160" height="50" loading="lazy" alt="grilli home">
          </a>

          <address class="body-4">
            Japindo,  Sukaresmi, Cikarang Sel., Kabupaten Bekasi, Jawa Barat.
          </address>

          <a href="mailto:booking@grilli.com" class="body-4 contact-link">japindobk17@gmail.com</a>

          <a href="tel:+88123123456" class="body-4 contact-link">Booking Request : +88-123-123456</a>

          <p class="body-4">
            Open : 09:00 am - 17:00 pm
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <p class="title-1">Get News & Offers</p>

          <p class="label-1">
            Subscribe us & Get <span class="span">25% Off.</span>
          </p>

          <form action="" class="input-wrapper">
            <div class="icon-wrapper">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <input type="email" name="email_address" placeholder="Your email" autocomplete="off" class="input-field">
            </div>

            <button type="submit" class="btn btn-secondary">
              <span class="text text-1">Subscribe</span>

              <span class="text text-2" aria-hidden="true">Subscribe</span>
            </button>
          </form>

        </div>

        <ul class="footer-list">

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Home</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Menus</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">About Us</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Our Chefs</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Contact</a>
          </li>

        </ul>

        <ul class="footer-list">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.581113026773!2d107.13405351020884!3d-6.318623193644382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699aeff7e01833%3A0x66ac78ad384aa57!2sPt.%20Japindo%20Boga%20Karya!5e0!3m2!1sid!2sid!4v1706063047681!5m2!1sid!2sid" width="350" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>

      <div class="footer-bottom">

        <p class="copyright">
          &copy; JapindoBogaKarya. All Rights Reserved | Crafted by <a href="https://www.instagram.com/rayhanramdhaniii/  "
            target="_blank" class="link">rayhan</a>
        </p>

      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>