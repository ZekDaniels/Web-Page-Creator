
<?php

$path    = './projects';//Dosya yolu alma
$files = scandir($path);

$files = array_diff(scandir($path), array('.', '..'));// dizinin fazla elmanları değerini boş bırakma
$files = array_values($files);// boş indeksleri silerek en küçük indexten itibaren listeleme
?>

<div class="container">
    <a href="index.php" id="logo">CMS </a>
    <ol>
      <?php
      for($i = 0, $size = count($files); $i < $size; $i++)
      {
        echo "<li><a href='$path/$files[$i]/' class='summary'>". $files[$i]."</a></li>";
      }
      ?>
    </ol>
</div>

 <?php
 //dosyalar listelendi
?>
