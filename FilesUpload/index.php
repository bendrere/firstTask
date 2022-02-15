<?php


$uploadDir = './downloads/';

$allowedTypes = ["image/png", "image/jpeg", "image/jpg", "image/gif"];

if (isset($_FILES) && isset($_FILES['fileToUpload'])) {
    $fileData = $_FILES['fileToUpload'];
    $fileExt = $_FILES['fileToUpload']['type'];
    if ($_FILES['fileToUpload']['size'] < 4 * 1024 ** 2 && in_array($fileExt, $allowedTypes)) {
        if ($fileData['error'] === UPLOAD_ERR_OK) {
            $fileName = $fileData['name'];
            $tmpName = $fileData['tmp_name'];
            $destinationPath = $uploadDir . $fileName;
            if (move_uploaded_file($tmpName, $destinationPath)) {
                header("Location: http://php-magento-lab.loc/FilesUpload/ShowDirectory.php");
            } else {
                echo 'cant upload file';
                die;
            }
        }
    } else {
        header("Location: http://php-magento-lab.loc/FilesUpload/showimages.html");
    }
}


include_once 'index.html';
