<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu Sekolah</title>
  </head>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: rgb(241, 249, 242);
    }

    header {
      background-color: rgb(188, 205, 252);
      color: black;
      text-align: center;
      padding: 10px;
    }

    nav {
      background-color: rgb(227, 238, 227);
      color: rgb(202, 202, 202);
      padding: 10px;
      text-align: center;
    }

    section {
      max-width: 2000px;
      margin: 20px auto;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .dashboard-item {
      padding: 10px;
      background-color: rgb(247, 195, 208);
      text-align: center;
    }

    li {
      text-align: left;
    }

    body {
      text-align: center;
    }

    table {
      margin: auto;
      border-collapse: collapse;
      width: 90%; /* Lebar tabel */
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
    }

    body {
      position: relative;
    }

    body {
      margin: 0; /* Menghapus margin bawaan browser */
      padding: 0; /* Menghapus padding bawaan browser */
      position: relative;
    }

    .logo {
  position: absolute;
  top: 40px; /* Mengatur jarak dari atas menjadi 300px */
  left: 100px; /* Tetapkan jarak dari kiri */
  width: 100px; /* Sesuaikan lebar logo */
  height: auto; /* Sesuaikan tinggi logo */
}


     /* Gaya CSS untuk animasi tulisan bergerak */
    @keyframes marquee {
      from {
        transform: translateX(100%);
      }
      to {
        transform: translateX(-100%);
      }
    }

    .moving-text {
      display: inline-block;
      white-space: nowrap;
      overflow: hidden;
      animation: marquee 5s linear infinite;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
    }

    main {
      flex: 1;
    }

    footer {
      background-color: rgb(247, 195, 208);
      color: #fff;
      text-align: center;
      padding : 10px;
      margin: 250px;
      
    }

    /* Gaya CSS untuk tampilan */
    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 10px;
    }
  </style>
  <body>
    <header>
      <img src="logo.png" alt="Logo" class="logo">
      <h2>SMK NEGERI 5 KOTA BEKASI</h2>
      <h1>REKAYASA PERANGKAT LUNAK</h1>
      <img src="logo.png" alt="Logo" class="logo">
      <nav>
        <a href="#" id="home-link">Home</a> |
        <a href="#" id="courses-link">Mata Pelajaran</a> |
        <a href="#" id="events-link">Events</a> |
        <a href="#" id="gurus-link">Data Guru</a> |
        <a href="#" id="siswas-link">Data Siswa</a> |
        <a href="#" id="jadwals-link">Jadwal Pelajaran</a> |
      </nav>
      <section id="home" class="dashboard-item">
        <marquee behavior="scroll" direction="left">
          <h2>Selamat Datang di Dashboard Jurusan RPL SMK Negeri 5 Kota Bekasi</h2>
        </marquee>
        <p>
          Ini adalah tampilan utama dari dashboard jurusan Rekayasa Perangkat
          Lunak (RPL).
        </p>
        <img src="" alt="Foto Jurusan RPL" style="width: 100%; max-width: 500px;">
      </section>
      <section id="courses" class="dashboard-item" style="display: none">
        <h2>Mata Pelajaran RPL</h2>
        <ul>
          <li>Pemograman Dasar (PD)</li>
          <li>Basis Data (BD)</li>
          <li>Dasar Desain Grafis (DDG)</li>
          <li>Informatika</li>
          <li>Internet Of Thinks (IOT)</li>
          <li>Pemrograman Berbasis Object (PBO)</li>
          <li>Produk Kreatif dan Kewirausahaan (PKK)</li>
          <li>Pemrograman Web dan Perangkat Bergerak (PWEB)</li>
        </ul>
      </section>
      <section id="events" class="dashboard-item" style="display: block; text-align: center;">
        <h2>Event Jurusan RPL</h2>
        <div style="display: flex; justify-content: space-around;">
            <div style="flex: 1; margin-right: 10px;">
                <img src="pensi.jpg" alt="Foto Event" style="width: 80%; max-width: 100%;">
                <p>Pentas Seni Jurusan Rekayasa Perangkat Lunak (RPL).</p>
            </div>
            <div style="flex: 1; margin-left: 10px;">
                <img src="Kegiatan Ketarunaan KKI SAMSUNG.jpg" alt="Foto Event" style="width: 95%; max-width: 100%;">
                <p>Kegiatan Ketarunaan KKI SAMSUNG</p>
            </div>
        </div>
    </section>
    
     
        <section id="gurus" class="dashboard-item" style="display: none">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Biodata Guru</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f0f0f0;
                    padding: 20px;
                }
                .container {
                    max-width: 900px;
                    margin: 0 auto;
                    background-color: rgb(227, 238, 227);
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0 0 100px rgba(0, 0, 0, 0.1);
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(800px, 4fr)); /* Menyesuaikan lebar kolom */
                    grid-gap: 40px; /* Jarak antar elemen */
                }
                .profile-container {
                    display: flex;
                    align-items: center;
                    justify-content: flex-start; /* Menata konten ke sisi kiri */
                    flex-direction: row; /* Menata konten secara horizontal */
                }
                .profile-pic {
                    width: 100px; /* Ubah lebar gambar */
                    height: 100px; /* Ubah tinggi gambar */
                    border-radius: 50%;
                    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
                    object-fit: cover; /* Pastikan gambar mencakup seluruh lingkaran */
                }
                .bio-info {
                    margin-left: 50px; /* Jarak antara gambar dan teks */
                    text-align: left; /* Posisi teks ke kiri */
                }
                .bio-info p {
                    margin: 10px 0;
                }
                .search-container {
                    text-align: center;
                    margin-bottom: 20px;
                }
                input[type="text"] {
                    padding: 8px;
                    width: 200px;
                    border-radius: 5px;
                    border: 1px solid #ccc;
                }
                input[type="submit"] {
                    padding: 8px 20px;
                    border-radius: 5px;
                    border: none;
                    background-color: #daf7db;
                    color: white;
                    cursor: pointer;
                }
            </style>
        </head>
        <body>
            <div class="search-container">
                <input type="text" placeholder="Cari nama guru..." id="searchInput">
                <button onclick="search()">Cari</button>
            </div>
            <div class="container" id="bioContainer">
                <div class="profile-container">
                    <img src="pakyuli.jpg" alt="Teacher Profile Picture" class="profile-pic">
                    <div class="bio-info">
                        <p><strong>Nama:</strong> Yuli Supriyanto, S.Kom., M.PD</p>
                        <p><strong>Jabatan:</strong> Kepala Jurusan </p>
                        <p><strong> Guru Mapel:</strong> Basis Data Dan Pemograman WEB </p>
                    </div>
                </div>
                <div class="profile-container">
                    <img src="pakrizqy.jpg" alt="Teacher Profile Picture" class="profile-pic">
                    <div class="bio-info">
                        <p><strong>Nama:</strong> Rizqy Sopiyan, S.T</p>
                        <p><strong>Jabatan:</strong> Bendahara </p>
                        <p><strong> Guru Mapel:</strong> PKK </p>
                    </div>
                </div>
                <div class="profile-container">
                    <img src="pakgustav.jpg" alt="Teacher Profile Picture" class="profile-pic">
                    <div class="bio-info">
                        <p><strong>Nama:</strong> Gustavianto Nusantoro, M.KOM</p>
                        <p><strong>Jabatan:</strong> Kepala Jurusan </p>
                        <p><strong> Guru Mapel:</strong> Pemograman WEB </p>
                    </div>
            </div>
            <div class="profile-container">
                <img src="pakgusdar.jpg" alt="Teacher Profile Picture" class="profile-pic">
                <div class="bio-info">
                    <p><strong>Nama:</strong> Agus Darsono. S.KOM.</p>
                    <p><strong>Jabatan:</strong> Kepala Bengkel </p>
                    <p><strong> Guru Mapel:</strong> PBO </p>
                </div>
        </div>
        <div class="profile-container">
            <img src="pakmuchlis.jpg" alt="Teacher Profile Picture" class="profile-pic">
            <div class="bio-info">
                <p><strong>Nama:</strong> Ahmad Muchlis Fathurrahman, S.KOM.</p>
                <p><strong>Jabatan:</strong> </p>
                <p><strong> Guru Mapel:</strong> Pemograman WEB </p>
            </div>
    </div>
    <div class="profile-container">
        <img src="buratna.jpg" alt="Teacher Profile Picture" class="profile-pic">
        <div class="bio-info">
            <p><strong>Nama:</strong> Ratnawati, S.T., M.PD</p>
            <p><strong>Jabatan:</strong> Waka Hubin</p>
            <p><strong> Guru Mapel:</strong> Basis Data Dan Pemograman WEB </p>
        </div>
    </div>
            <script>
      function search() {
    var input, filter, container, profileContainers, i, txtValue;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
    container = document.getElementById("bioContainer");
    profileContainers = container.getElementsByClassName('profile-container');
    
    for (i = 0; i < profileContainers.length; i++) {
        var bioInfo = profileContainers[i].getElementsByClassName('bio-info')[0];
        var profilePic = profileContainers[i].getElementsByClassName('profile-pic')[0];
        txtValue = bioInfo.textContent || bioInfo.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            profileContainers[i].style.display = "";
        } else {
            profileContainers[i].style.display = "none";
        }
    }
}

// Menangani perubahan pada input pencarian
document.getElementById('searchInput').addEventListener('input', search);

        </script>
      </section>

      
        <section id="siswas" class="dashboard-item" style="display: none">
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Data Siswa</title>
            <body>
                <!-- Formulir penambahan data siswa -->
                <form id="addStudentForm">
                    <input type="text" id="name" placeholder="Nama Siswa">
                    <input type="text" id="class" placeholder="Kelas">
                    <input type="text" id="address" placeholder="Alamat">
                    <button type="button" onclick="addStudent()">Tambah Siswa</button>
                </form>
            
                <!-- Tabel untuk menampilkan data siswa -->
                <table id="studentTable" border="1">
                    <thead>
                        <tr>
                            <th>Indah Dwi</th>
                            <th>12 RPL 1</th>
                            <th>Perum. Bekasi Green City</th>
                        </tr>
                        <tr>
                            <th>Nurdalilah Selan</th>
                            <th>12 RPL 1</th>
                            <th>Wisma Asri 2</th>
                        </tr>
                    </thead>
                    <tbody id="studentList">
                        <!-- Daftar siswa akan ditampilkan di sini -->
                    </tbody>
                </table>
            
                <script>
                    // Array untuk menyimpan data siswa
                    let students = [];
            
                    // Fungsi untuk menambahkan siswa ke dalam array dan menampilkan di tabel
                    function addStudent() {
                        // Mengambil nilai dari input
                        let name = document.getElementById('name').value;
                        let className = document.getElementById('class').value;
                        let address = document.getElementById('address').value;
            
                        // Membuat objek siswa baru
                        let student = {
                            name: name,
                            class: className,
                            address: address
                        };
            
                        // Menambahkan siswa ke dalam array
                        students.push(student);
            
                        // Memperbarui tabel dengan menampilkan data siswa terbaru
                        displayStudents();
            
                        // Mengosongkan input setelah penambahan siswa
                        document.getElementById('name').value = '';
                        document.getElementById('class').value = '';
                        document.getElementById('address').value = '';
                    }
            
                    // Fungsi untuk menampilkan data siswa di tabel
                    function displayStudents() {
                        let tableBody = document.getElementById('studentList');
                        tableBody.innerHTML = ''; // Mengosongkan isi tabel
            
                        // Meloopi setiap siswa dan menambahkannya ke dalam tabel
                        students.forEach(student => {
                            let row = `<tr>
                                            <td>${student.name}</td>
                                            <td>${student.class}</td>
                                            <td>${student.address}</td>
                                       </tr>`;
                            tableBody.innerHTML += row;
                        });
                    }
                </script>
            </body>            
      <section id="jadwals" class="dashboard-item" style="display: none">
        <h2>JADWAL MATA PELAJARAN</h2>
        <h1>XII RPL SAMSUNG</h1>
        <body>
          <table border="1">
            <thead>
              <tr>
                <th>HARI</th>
                <th>MATA PELAJARAN</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>SENIN</td>
                <td>Pemograman Web & Matematika</td>
              </tr>
              <tr>
                <td>SELASA</td>
                <td>PEMOGRAMAN BERBASIS OBJEK & BAHASA INDONESIA</td>
              </tr>
              <tr>
                <td>RABU</td>
                <td>PENDIDIKAN KEWARGANEGARAAN & PRODUK KREATIF KEWIRAUSAHAAN</td>
              </tr>
              <tr>
                <td>KAMIS</td>
                <td>PEMOGRAMAN WEB & BAHASA INGGRIS & BASIS DATA</td>
              </tr>
              <tr>
                <td>JUM'AT</td>
                <td>BAHASA INGGRIS & PEMOGRAMAN WEB & PABP & HHPS</td>
              </tr>
            </tbody>
          </table>
        </body>
      </section>

      <script>
        const homeLink = document.getElementById("home-link");
        const coursesLink = document.getElementById("courses-link");
        const eventsLink = document.getElementById("events-link");
        const gurusLink = document.getElementById("gurus-link");
        const siswasLink = document.getElementById("siswas-link");
        const jadwalsLink = document.getElementById("jadwals-link");

        const homeSection = document.getElementById("home");
        const coursesSection = document.getElementById("courses");
        const eventsSection = document.getElementById("events");
        const gurusSection = document.getElementById("gurus");
        const siswasSection = document.getElementById("siswas");
        const jadwalsSection = document.getElementById("jadwals");

        homeLink.addEventListener("click", function () {
          homeSection.style.display = "block";
          coursesSection.style.display = "none";
          eventsSection.style.display = "none";
          gurusSection.style.display = "none";
          siswasSection.style.display = "none";
          jadwalsSection.style.display = "none";
        });

        coursesLink.addEventListener("click", function () {
          homeSection.style.display = "none";
          tentangsSection.style.display = "none";
          coursesSection.style.display = "block";
          eventsSection.style.display = "none";
          gurusSection.style.display = "none";
          siswasSection.style.display = "none";
          jadwalsSection.style.display = "none";
        });

        eventsLink.addEventListener("click", function () {
          homeSection.style.display = "none";
          coursesSection.style.display = "none";
          eventsSection.style.display = "block";
          gurusSection.style.display = "none";
          siswasSection.style.display = "none";
          jadwalsSection.style.display = "none";
        });

        eventsLink.addEventListener("click", function () {
          homeSection.style.display = "none";
          coursesSection.style.display = "none";
          eventsSection.style.display = "block";
          gurusSection.style.display = "none";
          siswasSection.style.display = "none";
          jadwalsSection.style.display = "none";
        });

        gurusLink.addEventListener("click", function () {
          homeSection.style.display = "none";
          coursesSection.style.display = "none";
          eventsSection.style.display = "none";
          gurusSection.style.display = "block";
          siswasSection.style.display = "none";
          jadwalsSection.style.display = "none";
        });

        siswasLink.addEventListener("click", function () {
          homeSection.style.display = "none";
          coursesSection.style.display = "none";
          eventsSection.style.display = "none";
          gurusSection.style.display = "none";
          siswasSection.style.display = "block";
          jadwalsSection.style.display = "none";
        });

        jadwalsLink.addEventListener("click", function () {
          homeSection.style.display = "none";
          coursesSection.style.display = "none";
          eventsSection.style.display = "none";
          gurusSection.style.display = "none";
          siswasSection.style.display = "none";
          jadwalsSection.style.display = "block";
        });

        const XRPL1Link = document.getElementById("XRPL1");
        const XRPL2Link = document.getElementById("XRPL2");
        const XRPL3Link = document.getElementById("XRPL3");
        const XIRPL1Link = document.getElementById("XIRPL1");
        const XIRPL2Link = document.getElementById("XIRPL2");
        const XIRPL3Link = document.getElementById("XIRPL3");
        const XIIRPL1Link = document.getElementById("XIIRPL1");
        const XIIRPL2Link = document.getElementById("XIIRPL2");
        const XIIRPL3Link = document.getElementById("XIIRPL3");

        const XRPL1Section = document.getElementById("XRPL1");
        const XRPL2Section = document.getElementById("XRPL2");
        const XRPL3Section = document.getElementById("XRPL3");
        const XIRPL1Section = document.getElementById("XIRPL1");
        const XIRPL2Section = document.getElementById("XIRPL2");
        const XIRPL3Section = document.getElementById("XIRPL3");
        const XIIRPL1Section = document.getElementById("XIIRPL1");
        const XIIRPL2Section = document.getElementById("XIIRPL2");
        const XIIRPL3Section = document.getElementById("XIIRPL3");

        XRPL1Link.addEventListener("click", function () {
          XRPL1Section.style.display = "block";
          XRPL2Section.style.display = "none";
          XRPL3Section.style.display = "none";
          XIRPL1Section.style.display = "none";
          XIRPL2Section.style.display = "none";
          XIRPL3Section.style.display = "none";
          XIIRPL1Section.style.display = "none";
          XIIRPL2Section.style.display = "none";
          XIIRPL3Section.style.display = "none";
        });

        XRPL2Link.addEventListener("click", function () {
          XRPL1Section.style.display = "none";
          XRPL2Section.style.display = "block";
          XRPL3Section.style.display = "none";
          XIRPL1Section.style.display = "none";
          XIRPL2Section.style.display = "none";
          XIRPL3Section.style.display = "none";
          XIIRPL1Section.style.display = "none";
          XIIRPL2Section.style.display = "none";
          XIIRPL3Section.style.display = "none";
        });

        XRPL3Link.addEventListener("click", function () {
          XRPL1Section.style.display = "none";
          XRPL2Section.style.display = "none";
          XRPL3Section.style.display = "block";
          XIRPL1Section.style.display = "none";
          XIRPL2Section.style.display = "none";
          XIRPL3Section.style.display = "none";
          XIIRPL1Section.style.display = "none";
          XIIRPL2Section.style.display = "none";
          XIIRPL3Section.style.display = "none";
        });

        XIRPL1Link.addEventListener("click", function () {
          XRPL1Section.style.display = "none";
          XRPL2Section.style.display = "none";
          XRPL3Section.style.display = "none";
          XIRPL1Section.style.display = "block";
          XIRPL2Section.style.display = "none";
          XIRPL3Section.style.display = "none";
          XIIRPL1Section.style.display = "none";
          XIIRPL2Section.style.display = "none";
          XIIRPL3Section.style.display = "none";
        });

        XIRPL2Link.addEventListener("click", function () {
          XRPL1Section.style.display = "none";
          XRPL2Section.style.display = "none";
          XRPL3Section.style.display = "none";
          XIRPL1Section.style.display = "none";
          XIRPL2Section.style.display = "block";
          XIRPL3Section.style.display = "none";
          XIIRPL1Section.style.display = "none";
          XIIRPL2Section.style.display = "none";
          XIIRPL3Section.style.display = "none";
        });

        XIRPL3Link.addEventListener("click", function () {
          XRPL1Section.style.display = "none";
          XRPL2Section.style.display = "none";
          XRPL3Section.style.display = "none";
          XIRPL1Section.style.display = "none";
          XIRPL2Section.style.display = "none";
          XIRPL3Section.style.display = "block";
          XIIRPL1Section.style.display = "none";
          XIIRPL2Section.style.display = "none";
          XIIRPL3Section.style.display = "none";
        });

        XIIRPL1Link.addEventListener("click", function () {
          XRPL1Section.style.display = "none";
          XRPL2Section.style.display = "none";
          XRPL3Section.style.display = "none";
          XIRPL1Section.style.display = "none";
          XIRPL2Section.style.display = "none";
          XIRPL3Section.style.display = "none";
          XIIRPL1Section.style.display = "block";
          XIIRPL2Section.style.display = "none";
          XIIRPL3Section.style.display = "none";
        });

        XIIRPL2Link.addEventListener("click", function () {
          XRPL1Section.style.display = "none";
          XRPL2Section.style.display = "none";
          XRPL3Section.style.display = "none";
          XIRPL1Section.style.display = "none";
          XIRPL2Section.style.display = "none";
          XIRPL3Section.style.display = "none";
          XIIRPL1Section.style.display = "none";
          XIIRPL2Section.style.display = "block";
          XIIRPL3Section.style.display = "none";
        });

        XIIRPL3Link.addEventListener("click", function () {
          XRPL1Section.style.display = "none";
          XRPL2Section.style.display = "none";
          XRPL3Section.style.display = "none";
          XIRPL1Section.style.display = "none";
          XIRPL2Section.style.display = "none";
          XIRPL3Section.style.display = "none";
          XIIRPL1Section.style.display = "none";
          XIIRPL2Section.style.display = "none";
          XIIRPL3Section.style.display = "block";
        });
      </script>
    </header>
    <section class="content">
      <!-- Konten utama sekolah ditambahkan disini -->
    </section>

    <footer>
      <p>&copy 2024 Rekayasa Perangkat Lunak. All rights reserved.</p>
    </footer>
  </body>
</html>