<?php
session_start();


if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $namaDia = $_SESSION['nama'] = $nama;
  // echo $nama;
  // echo $namaDia;
} else{
  $namaDia = "Session Berakhir";
}

if (isset($_POST['kirimPesan'])) {
  $nama2 = $_POST['nama02'];
  $pesan2 = $_POST['pesan02'];
  // kita ambil nilai dari variabel nama, kemudian menjadikannya sebagai sebuah $_session, yang kemudian kita masukkan ke dalam sebuah variabel baru dengan nama $namaDia
  $namaDia = $_SESSION['nama02'] = $nama2 .' '."<p style='color:red'>pesan anda sudah terkirim</p>";

  $koneksi = mysqli_connect('localhost','root','','ucapan');
  $sql = "INSERT into tbucapan (nama,pesan) VALUES ('$nama2','$pesan2')";
  $kuery = mysqli_query($koneksi,$sql);
  if ($kuery) {
    echo "<script type='text/javascript'>alert('Pesan berhasil dikirim')</script>";
    // header('Location:index.php');
  }else{
    echo "Tidak Berhasil";
  }
}

 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kartu Ucapan | Selamat Tahun Baru.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <!-- Create video -->
        <section id="video">
            <div class="overlay"></div>
                <!-- Ubah link dalam "src" sesuai video yang diinginkan -->
            <video src="img/anime.mp4" loop   autoplay></video>     
        </section>

 
    <div class="container shadow">
      <h4>Hai <b><?php echo $namaDia; ?></b>.</h4>
      <a onClick="audioPlay()">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" id="modalMp3">Klik Saya</button>
      </a>

      <!-- aduio -->
      <audio hidden controls autoplay loop id="audioMp3">
        <!-- <source src="img/estetik.mp3" type="audio/mp3"> -->
      </audio>
    </div>

    <!-- bagian Modal 1 -->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Hai</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Selamat Tahun Baru <b><?php echo $namaDia; ?></b>.
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Lanjut</button>
        </div>
      </div>
    </div>
  </div>

  <!-- modal 2 -->
  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">QOUTE Untuk Kamu</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           Selamat tahun baru, <b><?php echo $namaDia; ?></b>. <br>
           Jangan lupakan masa lalu, belajarlah darinya dan jadilah kuat untuk impian dan masa depanmu. <br>
           Doa terbaikku bersamamu. <br>
           <img src="https://i.pinimg.com/originals/df/a0/ce/dfa0ced5c6430c6ff5bbe4a7d2d9d1de.gif" style="width:100%; height: 100%;">
           <br>
           <b><i>by. Bryan Tipawael.</i></b>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">Lanjut</button>
        </div>
      </div>
    </div>
  </div>

    <!-- modal 3 -->
  <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel3">QOUTE Untuk Kamu</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           Tetap semangat <b><?php echo $namaDia ?></b>, jadilah versi dirimu yang lebih baik di tahun yang baru ini.
           <img src="https://i.gifer.com/origin/cb/cba2e88b9187d3dfefe497008d317147.gif" style="width:100%; height: 100%;">
           <br>
           <b><i>by. Bryan Tipawael.</i></b>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal">Lanjut</button>
        </div>
      </div>
    </div>
  </div>

    <!-- modal 4 -->
  <div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel4">Kamu ada pesan untuk ku?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- pesandia -->
          <form method="POST" action="">
            <div class="mb-3">
              <label class="form-label" >Nama Anda:</label>
              <input type="text" class="form-control" name="nama02" value="<?php echo$namaDia ;?>">
            </div>
            <div class="mb-3">
              <label class="form-label" >Pesan Anda:</label>
              <textarea name="pesan02" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="kirimPesan">Kirim</button>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
        </div>
      </div>
    </div>
  </div>
  <!-- <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a> -->












    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    
    // var audio = document.getElementById('audioMp3');
    // var startBtn = document.getElementById('modalMp3');

    // var count = 0;

    // function playPause(){
    //   if (count == 0) {
    //     count = 1;
    //     audio.play();
    //     modal.innerHTML = "Pause";
    //   } else{
    //     count = 0;
    //     audio.pause();
    //     modal.innerHTML = "Play";
    //   }
    // }
  </script>



    <!-- script untuk mainkan Audio -->
    <script type="text/javascript">
    var myAudio = document.getElementById("audioMp3");
    // nilai variabel sedangDiputar bernilai false ('0')
    var sedangDiputar = false;

    function audioPlay() {
      // jika nilai sedangDiputar bernilai 0, maka musi berjala.
      if (sedangDiputar) {
        myAudio.play();
      }
    };
    myAudio.onplaying = function() {
      sedangDiputar = true;
    };
    myAudio.onpause = function() {
      sedangDiputar = false;
    };
    </script>

    <script>
    // Get the video
    // var video = document.getElementById("yuriVideo");

    // Get the button
    // var btn = document.getElementById("yuriBtn");

    // Pause and play the video, and change the button text
    // function myFunction() {
    //   if (video.paused) {
    //     video.play();
    //     btn.innerHTML = "Pause";
    //   } else {
    //     video.pause();
    //     btn.innerHTML = "Play";
    //   }
    // }
</script>
  </body>
</html>