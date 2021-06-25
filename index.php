<?php
include "header.php";



if (isset($_POST["usuario"]) && isset($_POST["password"])) {
    if ($_POST["usuario"] === "usuario" && $_POST["password"] === "usuario123") {
        $_SESSION["usuario"] = $_POST["usuario"];
    } 
} else if(isset($_SESSION["usuario"])){
    include "subir.php";
} else {
?>
    <form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

        <div class="mb-3 row">
            <label for="usuario" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="usuario" name="usuario" value="">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>

<?php
}
include "footer.php";
?>