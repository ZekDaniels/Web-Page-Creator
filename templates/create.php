
<?php

if(isset($_FILES['logo']['name'],$_POST['pname'],$_POST['content'])){

  include_once INCLUDE_PATH."class.upload.php";

  $logo = new Upload( $_FILES[ 'logo' ] );
  $logo->file_new_name_body = 'logo';
  $pname =$_POST['pname'];
  $content =$_POST['content'];
  $filename = "index.php";
  $path=PROJECT_PATH.$pname."/".$filename;
  include_once INCLUDE_PATH."creator.php";
 
CreateFolder(PROJECT_PATH.$pname);
CopyLogo(PROJECT_PATH.$pname,$logo);
WritePage($path, $page);


header('Location: index.php?&action=pages&pname='.$pname);

//ReadPage($path);
}else {

?>
  <body>
      <div class="container">
          <a href="index.php" id="logo">CMS </a>

      <br/>
      <h4> Create Contact  </h4>
      <form action="./?action=create" method="post" autocomplete="off" enctype='multipart/form-data' >
      Logo:  <input type="file" id="logo" name="logo" accept="image/png, image/jpeg"><br/>  <br/>
      Project Name:   <input type="text" name="pname" placeholder="Project Name" value="proje4"><br/> Content:  <br/>
      <textarea type="text" name="content" placeholder= "content" value="Lorem, ipsum" cols="30" rows="10"></textarea> <br/>  <br/>
        <input type="submit"  value="Add">
      </form>

      </div>
  </body>

<?php
}
?>
