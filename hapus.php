<?php 
require 'functions.php';

$id = $_GET["id"];

if( hapus($id)>0){
   echo " 
   <script>
     alert('hapus berhasil dilakukan');
     document.location.href = 'index.php';
    </script>
    ";
} else{
  echo " 
   <script>
      alert('hapus gagal dilakukan');
      document.location.href = 'index.php';
    </script>
    ";
}
?>