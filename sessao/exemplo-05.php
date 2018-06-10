<?php
require_once("config.php");
echo session_save_path();
echo "<br/>";
echo session_status();
echo "<br/>";
var_dump(session_status());
echo "<br/>";
switch (session_status()) {
  case PHP_SESSION_DISABLED:
    echo "as sessões estão desabilitadas.";
    break;
  case PHP_SESSION_NONE:
    echo "se as sessões estiverem habilitadas, mas nenhuma existir.";
    break;
  case PHP_SESSION_ACTIVE :
      echo "sessões estiverem habilitadas, e uma existir.";
      break;
}

?>
