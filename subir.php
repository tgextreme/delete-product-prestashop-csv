<?php
@session_start();
if(isset($_SESSION["usuario"])){
    


?>
<form name="form" method="post" action="resultado.php" enctype="multipart/form-data">
<div>
  <label for="archivoImg" class="form-label">Large file input example</label>
  <input class="form-control form-control-lg" id="archivoImg" name="archivoImg" type="file">
</div>

<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </div>
</form>
<?php


}
?>