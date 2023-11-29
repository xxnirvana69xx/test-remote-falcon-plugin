<?php
function getBaseUrl() {
  $host = gethostname();
  if($host == "fpplocal") {
    return "http://host.docker.internal:8080/remotefalcon/api";
  }
  return "http://192.168.200.107/remotefalcon/api";
}
?>
