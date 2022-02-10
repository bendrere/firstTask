<?php

$uploaddir = './downloads';


$i = 0;
$cols = 3;
$k = 0;
$files = scandir($uploaddir);

$dirHandle = @opendir($uploaddir) or die("Ошибка при открытии папки");
echo "<table>";
while ($file = readdir($dirHandle)) {
    if ($file == "." || $file == "..") {
        continue;  //пропустить ссылки на другие папки
    }
    if ($k % $cols == 0) {
        echo "<tr>";
    }

    echo "<td>";

    echo '<div class = "blok_img" >
                <img src="' . $uploaddir . '/' . $file . '" class="pimg" width = "400" title="' . $file . '" />
                </div>';
    echo "</td>";
    if ((($k + 1) % $cols == 0) || (($i + 1) == count($files))) {
        echo "</tr>";
    }

    $i++;
    $k++;
}

echo "</table>";
closedir($dirHandle);  //закрыть папку

echo '<input type="button" onclick="history.back();" value="Назад"/>';