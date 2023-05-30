<?php

  if(isset($_POST['onay'])){

    $nereye = "luxelberke@gmail.com";
    $nereden = $_POST['email'];
    $isim = $_POST['isim'];
    $baslik = $_POST['baslik'];
    $mesaj = $_POST['mesaj'];

    $header = "Form: " . $form;

    mail($nereye,$nereden,$isim,$baslik,$mesaj);
    echo "Mesajınız gönderildi!";
    



  }








?>