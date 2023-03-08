<!doctype html>
<html lang="en">

<head>
  <title>Museum Indonesia </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css"> 
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="manifest" href="manifest.json" />
<!-- ios support -->
<link rel="apple-touch-icon" href="images/icons/icon-72x72.png" />
<link rel="apple-touch-icon" href="images/icons/icon-96x96.png" />
<link rel="apple-touch-icon" href="images/icons/icon-128x128.png" />
<link rel="apple-touch-icon" href="images/icons/icon-144x144.png" />
<link rel="apple-touch-icon" href="images/icons/icon-152x152.png" />
<link rel="apple-touch-icon" href="images/icons/icon-192x192.png" />
<link rel="apple-touch-icon" href="images/icons/icon-384x384.png" />
<link rel="apple-touch-icon" href="images/icons/icon-512x512.png" />
<meta name="apple-mobile-web-app-status-bar" content="#db4938" />
<meta name="theme-color" content="#db4938" />
  <script src="jquery.js"></script>
  <style>
    body {
      background-color: #dedede;
    }

    .cards {
      box-shadow: 0px 0px 17px -10px rgba(0, 0, 0, 0.75);
    }

    .cards:hover {
      cursor: pointer;
      box-shadow: 20px 20px 100px -50px #000;
      transition: 0.3s;
    }
    .navbar{
    background-color: darkslategray;
}
.badge{
    background-color: darkslategray;
    text-decoration-color: white;
}
.breadcrumb{
  background-color: #dedede;
  
}
  </style>
</head>


<body>

  <nav class="navbar navbar-expand-lg navbar-dark  "> 

    <div class="container">
      
          <a class="navbar-brand" href="Gallery.php">
            <img src="image/alunalun.e954dd09.png" width="30" height="30" alt="">
            Museum Indonesia</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">   
                <li class="nav-item mx-3">
                    <a class="nav-link active" aria-current="page" href="about.php">About</a>
                </li>            
            </ul>
          </div>
        </div>
    </div>
</nav>

<!-- breadcrumb -->
<div class="container mt-5 d-flex justify-content ">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumbitem">
          <a href="Gallery.php">Home </a>
        </li>
        <li class="breadcrumbitem">
          <a href="DaftarMuseum.php"> / Daftar Museum</a>
        </li>
        <li class="breadcrumbitem">
             / Museum
          </li>
      </ol>
    </nav>
    </div>

    <?php 
include 'koneksi.php';
?>

<?php $page= $_GET['koleksimuseum'];?>


<?php
                
                $sql = "select * from `detail_museum` where Nama='$page'";
                $result = mysqli_query($connection, $sql);
                
                    $row=mysqli_fetch_assoc($result) ;
                        $id = $row['ID'];
                        $nama= $row['Nama'];
                        $alamat = $row['Alamat'];
                        $peta = $row['Peta'];
                        $jenismuseum = $row['Jenis_Museum'];
                        $jumlahkoleksi = $row['Jumlah_koleksi'];
                        $koleksi = $row['Koleksi'];
                       
                        echo'
                        
    <div class="container p-5 mt-1 ">
    <div id="pertama">
        <h1 class="fw-bold">'.$nama.'</h1>
        <h5 class="fw-bold">'.$alamat.'</h5>
       <div class="embed-responsive embed-responsive-16by9">
        <iframe src="'.$peta.'" width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
    </div>
</div>

    
        <div class="row d-flex justify-content-center ">
          <div class="col-1"></div>
          <div class="col-5">
            <div id="kedua" style="background-color:darkslategray;padding: 25px; color: white;">
                <p>Jenis Museum     :
                  '.$jenismuseum.'
                  
                </p>
                <p>Jumlah Koleksi   : '.$jumlahkoleksi.' Koleksi</p> 
                <p>Koleksi          : 
                  '.$koleksi.'    
                </p> 
                </div>
          </div>
        </div>
                   
    ';
                    
                              
    ?>
        
    

  <div class="container p-3 mt-1 ">
    <div class="row d-flex justify-content-center ">
      <div class="col-1"></div>
      <div class="col-8">
        <div class="input-group  mt-2">
          <input type="text" placeholder="Search....." class="form-control" id="inp">
          <div class="input-group-append">
            <button type="button" class="btn btn-dark" id="search" style="z-index:0;">Search</button>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Judul -->
    <div class="text-center mt-2">
        <div class="badge container text-center " style="width: 20rem;">
            <p class="fs-3"> Daftar Koleksi</p>
           </div>
    </div>

    <div class="row p-5" id="panel">

    
    <?php
                
                $sql = "select * from `detail_museum` where nama='$page'";
                $result = mysqli_query($connection, $sql);
                if($result) {
                    while($row=mysqli_fetch_assoc($result)) {
                        $id = $row['ID'];
                        $nama= $row['Nama'];
                        $alamat = $row['Alamat'];
                        $peta = $row['Peta'];
                        $jenismuseum = $row['Jenis_Museum'];
                        $jumlahkoleksi = $row['Jumlah_koleksi'];
                        $koleksi = $row['Koleksi'];
                        $fotokoleksi = $row['foto_koleksi'];
                        $namakoleksi = $row['namakoleksi'];
                        echo'

                        <div class="col-md-6 col-lg-3 mt-2">
        <div class="cards p-2">
          <img class="card-img-top" style="height: 150px; " src="'.$fotokoleksi.'" alt="" >
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <h5 class="card-title">'.$namakoleksi.'</h5>
            </div>
            
            <div class="d-flex justify-content-between">
              <a href="Detailkoleksi.php?detailkoleksi='.$namakoleksi.'" class="bg-dark text-white text-center pl-2 pr-2 cart_btn">Detail</a>
            </div>
          </div>
        </div>
      </div>
                        ';
                    }
                  }
                    
?>

    </div>
  </div>


<script>
  
//jquery coding

$(document).ready(function(){

$('#search').click(function(){

  var checker = 0;
  for (var i = 0; i < 12; i++) {
    var card = $("div").filter(".col-md-6")[i];
    var title = $("h5").filter(".card-title")[i].innerText.toUpperCase();

    if (title.indexOf($("#inp").val().toUpperCase()) > -1) {
      card.style.display = 'block';
      checker++;
    }
    else{
      card.style.display = 'none';
    }
  }

if (checker > 0) {
$("#not_find_any_thing").text("");

}
else {
$("#not_find_any_thing").text("No Result Found").fadeIn();
}

});
});


if ("serviceWorker" in navigator) {
  window.addEventListener("load", function() {
    navigator.serviceWorker
      .register("/serviceWorker.js")
      .then(res => console.log("service worker registered"))
      .catch(err => console.log("service worker not registered", err))
  })
}

</script>


</body>

</html>