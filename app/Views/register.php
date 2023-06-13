<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="icon" herf="%PUBLIC_URL%/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register</title>
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
        <li><a href="#INFORMATIKA">Register</a></li>
        <li><a href="mailto:yohanbachtiar2001@gmail.com">SEND EMAIL</a></li>
		<li><a href="/login">SIGN IN</a></li>
      </ul>
    </nav>
    <button class="btn-cta"> <a href="/register">REGISTER ACCOUNT</a></button>

  </header>



  <div class="container">
    <div class="intro">
      <p class="title">Mari bersama menjelajah Tanah Air Indonesia, dengan berjuta-juta keanekaragamannya</p>

	  <video autoplay loop muted playsinline>
		<source src="../assets/w1.mp4" type="video/mp4" alt="yohan bachtiar" class="img-foto" />
	  </video>
    </div>
  </div>


  <div class="parallaxlogin">
    <div class="tentang">
	<div class="mt-10">
      <p class="description">Hallo, Pastikan anda mengisi identitas dengan benar!</p>
      
</div>
      
    </div>

	

	<div class="intro">
    <br>
    <br>
	<h1 class="title">REGISTER ACCOUNT</h1>
</div>

	
      <div class="tentang" id="INFORMATIKA">
	<h2>Daftar Akun</h2>

    <form action="/register" method="post">
        <label for="name">Nama</label>
        <br>
        <input type="text" name="name" required>
        <br>
        <label for="email">Email</label>
        <br>
        <input type="email" name="email" required>
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" required>
        <br>
        <br>
        <br>
        <button type="submit" class="btn-cta">Daftar</button>
    </form>
</body>
</html>
