<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="icon" herf="%PUBLIC_URL%/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tambah Tempat Wisata</title>
  <link rel="stylesheet" href="../css/stylecss.css" />
  <style>
    *, html, body {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: Helvetica;
	scroll-behavior: smooth;
}


header {
	background: #752d28;
	color: #ffffff;
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
	gap: 10px;
}

.logo {
	margin-right: auto;
	display: flex;
	gap: 6px;
}

.logo-img {
	width: 35px;
	height: 35px;
	margin-left: 10px;
}

.logo-title {
	cursor: pointer;
	transition: all .5s ease 0s;
}

.logo:hover {
	color: #66aee9;
	transform: rotate(2deg);
}

.btn-cta {
	margin-right: 10px;
	border: none;
	font-size: 20px;
	padding: 6px 12px;
	background: #019622;
	color: #ffffff;
	border-radius: 8px;
	cursor: pointer;
}

nav ul{
	display: flex;
	padding: 20px;
}

li {
	list-style-type: none;
	padding: 10px;
}

li a {
	transition: all .5s ease 0s;
	display: inline-block;
}

li a:hover {
	color: #8bf1ff;
	transform: rotate(2deg);
}

a {
	color: #ffffff;
	text-decoration: none;
}

.container {
	max-width: 1200px;
	margin: 0 auto;
	padding: 70px 0;
}

.intro {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	gap: 10px;
	text-align: center;
}

.title {
	font-size: 24px;
	font-weight: bold;
}

.description {
	font-size: 28px;
	font-weight: bolder;
}

.img-foto {
	width: 500px;
	height: auto;
	padding: 10px;
	max-width: 500px;
}

.parallax {
	background-image: url('3.jpg');
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	height: 150vh;
	
}

.parallaxedit {
	background-image: url('2.jpg');
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	height: 150vh;
	
}

.parallaxmanage {
	background-image: url('4.jpg');
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	height: 150vh;
	
}

.parallaxdash {
	background-image: url('6.jpg');
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	height: 150vh;
	
}

.parallaxlogin {
	background-image: url('1.jpg');
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	height: 150vh;
	
}

.tentang {
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	background:#752d28;
	color: #ffffff ;
	padding: 40px;
}

.mt-10 {
	margin-top: 20px;
}

.card {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
	gap: 15px;
}

.card-item {
	text-align: center;
	width: 100%;
	min-height: 300x;
	max-height: 500px;
	background: #f7f7f7;
    opacity:0.9;
	color: #222;
	padding: 50px;
	box-shadow: 2px 5px 5px 1px rgba(0,0,0,0.5);
}

.card-title {
	font-size: 18px;
	font-weight: bolder;
}

.card-description {
	font-size: 14px;
	margin-top: 4px;
}

.icon {
	width: 75px;
	height: 75px;
	margin: 10px;
	padding: 4px;
}

.wisata {
	width: 200px;
	height: 200px;
	margin: 10px;
	padding: 4px;
}

footer {
	padding: 20px;
	text-align: center;
	background: #1A2238;
	color: #ffffff;
}



@media screen and (max-width: 1000px) {
	.card {
		flex-direction: column;
		gap: 0;
	}
	.card-item {
		width: 100%;
		opacity: 0.9;
	}
	
	.container {
		width: 100%;
		padding: 0;
	}
	
	.intro {
		margin-top: 20px;
	}
	
	.img-foto {
		padding: 0;
	}
	
	nav {
		position: fixed;
		bottom: 0;
		width: 100%;
		background: #1A2238;
		z-index: 9;
	}
	
	footer {
		margin-bottom: 70px;
		margin-top: 70px;
	}
}

/* styling untuk tombol buka modal */
.open-button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 20px;
    cursor: pointer;
  }
  
  /* styling untuk modal */
  .modal {
    display: none; /* jangan tampilkan modal secara default */
    position: fixed; /* posisikan modal secara absolut */
    z-index: 1; /* letakkan modal di atas konten lainnya */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto; /* aktifkan scrolling jika konten melebihi viewport */
    background-color: rgba(0,0,0,0.4); /* buat efek gelap pada background */
  }
  
  /* styling untuk konten modal */
  .modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* posisi konten modal di tengah layar */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* atur lebar konten modal */
  }
  
  /* styling untuk tombol close */
  .close-button {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
  }
  
  .close-button:hover,
  .close-button:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
  
  
</style>  

</head>


<body>
  <header>
    <div class="logo">
      <img src="../assets/1.jpg" alt="logo" class="logo-img" />
      <h1 class="logo-title">WONDERFUL INDONESIA</h1>
    </div>

    <nav>
      <ul>
        <li><a href="#INFORMATIKA">Tambah Tempat Wisata</a></li>
        <li><a href="mailto:yohanbachtiar2001@gmail.com">SEND EMAIL</a></li>
		<li><a href="/login">SIGN IN</a></li>
      </ul>
    </nav>
    <button class="btn-cta"> <a href="/logout">LOGOUT ACCOUNT</a></button>

  </header>



  <div class="container">
    <div class="intro">
      <p class="title">WONDERFUL INDONESIA, SURGANYA PARA TRAVELERS</p>

	  <video autoplay loop muted playsinline>
		<source src="../assets/wfvid.mp4" type="video/mp4" alt="yohan bachtiar" class="img-foto" />
	  </video>
    </div>
  </div>


  <div class="parallaxlogin">
    <div class="tentang">
	<div class="mt-10">
      <p class="description">Hallo, Pastikan Anda Menambah Data Tempat Wisata Dengan Benar!</p>
      
</div>
      
    </div>

	

	<div class="intro">
	<h1 class="title">TAMBAH TEMPAT WISATA</h1>
</div>

	
      <div class="tentang" id="INFORMATIKA">
	

    <?php if (session()->getFlashdata('message')) : ?>
        <div><?= session()->getFlashdata('message') ?></div>
    <?php endif; ?>

    <form action="/admin/places/create" method="post" enctype="multipart/form-data">
        <label for="name">Nama Tempat</label>
        <br>
        <input type="text" name="name" required>
        <br>
        <label for="description">Deskripsi Tempat</label>
        <br>
        <textarea name="description" required></textarea>
        <br>
        <label for="image">Gambar</label>
        <input type="file" name="image" required>
        <br>
        <br>
        <br>
        <button type="submit" class="btn-cta">Simpan</button>
        <button class="btn-cta"><a href="/admindashboard">Batal</a></button>
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
