<?php
if(isset($pname,$content)){
$page = array( //Page Array
    "header" => "<html>
    <head>  
    <div class='topnav' id='myTopnav'>
    <a  href='index.php'><img src='assets/img/logo.png' width='250' height='38' alt=''></a>
  <a href='index.php' class='active'>Home</a>
  <a href='contact.php'>Contact</a>
  <a href='javascript:void(0);' class='icon' onclick='myFunction()'>
  
  </a>
</div>
      <meta charset='utf-8'>
      <title> </title>
      <link rel='stylesheet' href='assets/style1.css' />
    </head> ",

    "body"     =>
    "  <body>
        <div class='container'>
          <p> $pname </p>	     
		      <p class='section-text'>Content: $content</p>
  		    
        </div>
      </body>",

    "footer"     => "<script language ='php'>
    </script>
    <form>
    </form>
    </html>
"
);}
if(isset($ctitle,$phone,$mail)){
$pageContact = array( //Page Array
  "header" => "<html>
      <head>
      <div class='topnav' id='myTopnav'>
      <a  href='index.php'><img src='assets/img/logo.png' width='250' height='38' alt=''></a>
    <a href='index.php' >Home</a>
    <a href='contact.php class='active''>Contact</a>
    <a href='javascript:void(0);' class='icon' onclick='myFunction()'>
    
    </a>
    </div>
        <meta charset='utf-8'>
        <title> </title>
        <link rel='stylesheet' href='assets/style1.css' />
      </head>",

  "body"     =>
  "  <body>
      <div class='container'>
        <h4> $ctitle        
        </h4>
        <p>Phone: $phone</p>
        <p>Mail: $mail</p>
      </div>
    </body>",

    "footer"     => "<script language ='php'>
    </script>
    <form>
    </form>
    </html>
"
);}


function CreateFolder($pname)
{
  if( is_dir($pname) === false )//CreateFolder
  {
    mkdir($pname);
  }

  if( is_dir($pname."/assets") === false )
  {
    mkdir($pname."/assets");
  }

  if (!copy("CSSstore/style.css",$pname."/assets/style1.css"))//Copy and Paste CSS(copy/paste)
  {
    echo " CSS kopyalanamadı...\n";
  }

  if( is_dir($pname."/assets/img") === false )
  {
    mkdir($pname."/assets/img");
  }
  
}

function CopyLogo($pname,$logo)
{
  
  if(file_exists($pname."/assets/img/logo.png") === false )
  {
    $logo->Process($pname."/assets/img/");

  }
}

function WritePage( $path, $page ) {// Create page
    $fh = fopen($path, "w");
    if (!is_resource($fh)) {
        return false;
    }
    foreach ($page as $key => $value) {
        fwrite($fh, sprintf("%s \n",  $value));
    }
    fclose($fh);

    return true;
}

function ReadPage( $path ) {// Read and return page
  $file = fopen($path,'r');
while(!feof($file)){
      $satir = fgets($file);
      echo "$satir <br />";
}
fclose($file);
}



?>
