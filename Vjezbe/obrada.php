<?php

$uploadDir = '/var/www/html/App/uploads';
$uploadFile = $uploadDir . '/' . $_FILES['userfile']['name'];

if (move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadFile)){
    echo "File was successfully uploaded!\n";
} else { 
    echo "Failed to upload file! \n";
}
echo"</br>";
$f_type = $_FILES['userfile']['type'];
if($f_type== "image/gif" OR $f_type== "image/png" OR $f_type== "image/jpeg" OR $f_type== "image/JPEG" OR $f_type== "image/PNG" OR $f_type== "image/GIF") {
    echo "Uploaded file is an image.\n";
}
else {
    echo "Uploaded file is not an image.\n";
}