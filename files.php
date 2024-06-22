<?php


print_r($_FILES);

print_r($_FILES["fileUpload"]);

if($_FILES["fileUpload"]["error"] > 0){
    echo "Error: " . $_FILES["fileUpload"]["error"] . "<br>";
}

echo "13"

?>