
<?php

if(isset($_GET['pname'],$_POST['ctitle'],$_POST['phone'],$_POST['mail'])){

  $pname =$_GET['pname'];
  $ctitle =$_POST['ctitle'];
  $phone =$_POST['phone'];
  $mail =$_POST['mail'];
  $filename = "contact.php";
  $path=PROJECT_PATH.$pname."/".$filename;
  include_once INCLUDE_PATH."creator.php";
 
WritePage($path, $pageContact);
header('Location: index.php?action=viewprojects');
//ReadPage($path);
}else {
  $pname= $_GET['pname'];
  
?>
  <body>
      <div class="container">
          <a href="index.php" id="logo">CMS </a>

      <br/>
      <h4> Create Contact  </h4>
      <form action="./?&action=create-contact&pname=<?php echo $pname; ?>" method="post" autocomplete="off"  >       
      Title:  <input type="text" name="ctitle" placeholder="Title" value="zek"><br/>  <br/>
      Phone Number:  <input type="number" name="phone" placeholder="Phone Number" value="1231231230"><br/>  <br/>
      Email:    <input type="email" name="mail" placeholder="Mail" value="zek@mail.com"><br/>  <br/>
        <input type="submit" value="Add">
      </form>

      </div>
  </body>

<?php
}
?>
