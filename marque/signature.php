<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Signature</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <style>
             body {
                  align-items: center;
                  background-color: #000;
                  display: flex;
                  justify-content: center;
                  height: 100vh;
                }

                .form {
                  background-color: #15172b;
                  border-radius: 20px;
                  box-sizing: border-box;
                  height: 300px;
                  padding: 20px;
                  width: 470px;
                }

                .submit {
                  background-color: #FF0000;
                  border-radius: 12px;
                  border: 0;
                  box-sizing: border-box;
                  color: #eee;
                  cursor: pointer;
                  font-size: 18px;
                  height: 50px;
                  margin-top: 38px;
                  outline: 0;
                  text-align: center;
                  width: 100%;
                }

                .submit:active {
                  background-color: #06b;
                }

  </style>

 
  <!-- Le reste du contenu -->

  <div class="form">
  <?php
        if(isset($_POST['nom'],$_POST['fonction'],$_POST['contact'],$_POST['tel'],$_POST['email'])){
          
            $nom = $_POST['nom'];
            $fonction = $_POST['fonction'];
            $contact = $_POST['contact'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $image = imagecreatefrompng('voodooCom.png');
            $red = imagecolorallocate($image, 255, 0, 0);
            $green = imagecolorallocate($image, 0, 102, 0);
            $black = imagecolorallocate($image, 0, 0, 0);
            $fontSize = 12; //250
            $angleRotation = 0;
            $x = 150;
            $y =25;
            $font = "arial.ttf";
            $fontName= "patriot-light.ttf";

            imagettftext($image,15,$angleRotation,$x,$y,$black,$fontName,$nom);
            imagettftext($image,$fontSize,$angleRotation,$x,45,$red,$font,$fonction);
            imagettftext($image,$fontSize,$angleRotation,$x,70,$black,$font,$contact);
            imagettftext($image,$fontSize,$angleRotation,$x,85,$black,$font,$tel);
            imagettftext($image,$fontSize,$angleRotation,$x,110,$black,$font,$email);
            //header('Content-type: image/png');
           // imagepng($image);
            imagepng($image,"signatureVoodooCom.png");
            imagedestroy($image);
            
        }
      ?>
      <img src='signatureVoodooCom.png'>
      <a href='http://127.0.0.1/marque/signatureVoodooCom.png' download="signature-<?=$nom?>"><button type="text" class="submit">Telechargez votre signature</button></a>
  </div>


</body>
</html> 
    
    
    
    
    