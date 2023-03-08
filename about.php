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

<?php 
include 'koneksi.php';
?>



    <!-- Judul -->
    <div class="text-center mt-3">
        <div class="badge container text-center " style="width: 10rem;">
            <p class="fs-3">Web Info</p>
           </div>
    </div>

    <!-- Judul -->
  
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            Sumber Data
          </h6>
    <?php
            $sql = "select * from `about`";
                $result = mysqli_query($connection, $sql);
                if($result) {
                    while($row=mysqli_fetch_assoc($result)) {
                        $id = $row['ID'];
                        $link= $row['link'];
                        
                        echo '
            <p>'.$link.'</p>
            
            ';
        }
    }
?>
           </div>
           <div class="col-md-2 col-lg-5 col-xl-2 mx-auto mb-1">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold ">
            Kontak
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
                  

</div>
    

<script>
  
//jquery coding

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