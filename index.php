

<?php
//includes
include "config.php";

// I'm use GET to take a action
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

switch ( $action ) {//Routing
  case 'create':
    router("create");
    break;
  case 'viewprojects':
    router("viewprojects");
    break;
  case 'pages':
      router("pages");
      break;
  case 'create-contact':
    router("create-contact");
    break;
  case 'viewprojects':
    router("viewprojects");
    break;
  default:
    router("main");
}

function router($pagename)//Router and includer function
{
  include INCLUDE_PATH."header.php";
  include TEMPLATE_PATH.$pagename.".php";
  include INCLUDE_PATH."footer.php";
}

?>
