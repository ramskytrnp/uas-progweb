<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>webpeminjamanalatolahragasekolah</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: Arial, sans-serif;
      background: url('assets/background.jpg') no-repeat center center fixed;
      background-size: cover;
      color: black;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      background-color: rgba(255, 255, 255, 0.8);
    }

    .logo img {
      width: 60px;
      height: auto;
    }

    nav a {
      margin-left: 20px;
      text-decoration: none;
      color: white;
      font-weight: bold;
      font-size: 16px;
      padding: 10px 25px;
      border-radius: 40px;
      background: #2ecc71;
      transition: 0.3s;
    }

    nav a:hover {
      background: #27ae60;
    }

    main {
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 48px;
      font-weight: bold;
      text-align: center;
      color: #ffff;
      height: 100vh;
      padding: 20px;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.9);
    }

    #aboutus {
      min-height: 100vh;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      gap: 40px;
      padding: 60px;
      background-color: rgba(255,255,255,0.95);
      flex-wrap: wrap;
    }

    #aboutus img {
      max-width: 40%;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.2);
    }

    #aboutus .about-text {
      max-width: 50%;
      font-size: 18px;
      line-height: 1.6;
    }

    footer {
      padding: 20px 40px;
      font-size: 16px;
      background-color: rgba(255, 255, 255, 0.9);
      text-align: left;
      border-top: 1px solid #ccc;
      display: flex;
      flex-direction: column;
      gap: 5px;
    }

    @media (max-width: 768px) {
      #aboutus {
        flex-direction: column;
      }
      #aboutus img, #aboutus .about-text {
        max-width: 100%;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">
      <img src="assets/logo.png" alt="Logo">
    </div>
    <nav>
      <a href="#aboutus">ABOUT US</a>
      <a href="login.php">LOGIN</a>
    </nav>
  </header>

  <main>
    SELAMAT DATANG DI <br> WEB PEMINJAMAN ALAT OLAHRAGA <br> SMA SWASTA GKPS 1 P. RAYA
  </main>

  <section id="aboutus">
    <img src="assets/aboutus.png" alt="Foto Sekolah">
    <div class="about-text">
    <h2>Tentang Kami</h2>
    <p>SMA Swasta GKPS 1 Pamatang Raya merupakan sekolah menengah atas yang berlokasi di Jl. Guru Jason Saragih No. 03, Sondi Raya, Kecamatan Raya, Kabupaten Simalungun, Sumatera Utara. Bernaung di bawah Yayasan GKPS, sekolah ini telah menjadi bagian penting dalam dunia pendidikan sejak tahun 1960.
        Awalnya berdiri di lokasi yang kini menjadi SMP Swasta GKPS 1 Pamatang Raya, sekolah ini kemudian berpindah ke daerah Sondi Raya pada tahun 1964. Perpindahan ini menjadi sejarah penting karena tanah seluas kurang lebih 100.000 m² dihibahkan oleh masyarakat setempat sebagai bentuk dukungan nyata terhadap dunia pendidikan.
        Dengan semangat kebersamaan dan kontribusi masyarakat, SMA Swasta GKPS 1 Pamatang Raya terus berkembang menjadi sekolah yang tidak hanya unggul dalam akademik, tetapi juga aktif dalam kegiatan non-akademik, seperti olahraga. Melalui sistem peminjaman alat olahraga ini, kami berkomitmen mendukung semangat sportivitas, kedisiplinan, dan gaya hidup sehat bagi seluruh siswa.
    </p>
    </div>
  </section>

  <footer>
    <div>Alamat  : JL. GURU JASON SARAGIH NO.03, Sondi Raya, Kec. Raya, Kab. Simalungun Prov. Sumatera Utara</div>
    <div>Facebook: SMA SWASTA GKPS 1 P RAYA/ Smasta Gkps Pamatang Raya</div>
  </footer>

</body>
</html>
