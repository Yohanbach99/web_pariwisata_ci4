<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="icon" herf="%PUBLIC_URL%/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>
  <link rel="stylesheet" href="../css/stylecss.css" />
</head>
<body>
<header>
    <div class="logo">
      <img src="../assets/1.jpg" alt="logo" class="logo-img" />
      <h1 class="logo-title">WONDERFUL INDONESIA</h1>
    </div>

    <nav>
      <ul>
        <li><a href="#INFORMATIKA">Login</a></li>
        <li><a href="mailto:yohanbachtiar2001@gmail.com">SEND EMAIL</a></li>
		<li><a href="/login">SIGN IN</a></li>
      </ul>
    </nav>
    <button class="btn-cta"> <a href="/register">REGISTER ACCOUNT</a></button>

  </header>



  <div class="container">
    <div class="intro">
      <p class="title">Selamat datang, Para Travelers!</p>
      <p class="description">WONDERFUL INDONESIA, SURGANYA PARA TRAVELERS</p>
	  <video autoplay loop muted playsinline>
		<source src="../assets/w2.mp4" type="video/mp4" alt="yohan bachtiar" class="img-foto" />
	  </video>
    </div>
  </div>

  
    <div class="parallax">
      <div class="tentang">
        <p class="title">MY TRIP IS MY ADVENTURE</p>
        <p class="description">Hai Traveler, Di website ini menampilkan beberapa refrensi wisata yang wajib banget kamu kunjungi</p>
        <div class="mt-10">
          <button class="btn-cta"> <a href="https://kemenparekraf.go.id/direktori/Dinas-Pariwisata">Dinas Terkait</a></button>
        </div>
      </div>
      <div class="intro">
    <br>
    <br>
	<h1 class="title">LOGIN AKUN</h1></div>

	
      <div class="tentang" id="INFORMATIKA">
      <?php if (session()->getFlashdata('message')) : ?>
        <div><?= session()->getFlashdata('message') ?></div>
    <?php endif; ?>
      <form action="/login" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required>
        
        <label for="password">Password</label>
        <input type="password" name="password" required>
        
        <button type="submit" class="open-button">Login</button>
    </form>
    
    </div>
    </div>



   <footer>
    <p class="title">&copy; Yohan Bachtiar 2021</p>
    <p id="DisplayClock" class="clock" onload="showTime()"></p>
  </footer>

  <script>
    function redirInstagram() {
      window.location.href = "https://instagram.com/yohan_bachtiarr"
    }


    function showTime() {
      var date = new Date();
      var h = date.getHours();
      var m = date.getMinutes();
      var s = date.getSeconds();
      var session = "AM";

      if (h == 0) {
        h = 12;
      }
      if (h > 12) {
        h = h - 12;
        session = "PM";
      }

      h = (h < 10) ? "0" + h : h;
      m = (m < 10) ? "0" + m : m;
      s = (s < 10) ? "0" + s : s;

      var time = h + ":" + m + ":" + s + " " + session;

      document.getElementById("DisplayClock").innerText = time;
      document.getElementById("DisplayClock").textContent = time;

      setTimeout(showTime, 1000);
    }

    showTime();




    
  function openModal(id_wisata) {
    var modal = document.getElementById("myModal");
    var modalContent = modal.querySelector(".modal-content");
    modalContent.innerHTML = "<span class='close-button' onclick='closeModal()'>&times;</span><p>LOADING</p>";
    modal.style.display = "block";

    // Mengambil data deskripsi wisata menggunakan AJAX
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        modalContent.innerHTML = "<span class='close-button' onclick='closeModal()'>&times;</span>" + this.responseText;
      }
    };
    xmlhttp.open("GET", "view.php?id=" + id_wisata, true);
    xmlhttp.send();
  }

  function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
  }





  </script>
</body>

</html>

