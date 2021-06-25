<?php
@session_start();
@include "init.php";
if (isset($_SESSION["usuario"])) {

    $uploaddir = '';
    $uploadfile = $uploaddir . basename($_FILES['archivoImg']['name']);

    echo "<p>";

    if (move_uploaded_file($_FILES['archivoImg']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n<br>";
        $file = fopen($uploadfile, "r");

        $i = 1;
        while (!feof($file)) {
            if ($i == 2) {
                $csv = fgetcsv($file);

                $res = Db::getInstance()->executeS('SELECT `id_product` FROM `' . _DB_PREFIX_ . 'product` WHERE reference="' . $csv[0] . '"');

                if ($res) {
                    foreach ($res as $row) {
                        $p = new Product($row['id_product']);
                        echo "Eliminando " . $row['id_product'] . "";
                        $p->delete();
                        echo " producto eliminado <br><br>";
                    }
                }
            } else if ($i == 1) {

                $i = 2;
            }
        }
        @unlink($uploadfile);
    } else {
        echo "Upload failed";
    }

?>


<?php


}
?>