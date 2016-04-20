<?php
define('GALLERY_FOLDER', __DIR__ . '\photo\\');
define('GALLERY_START_PAGE', __DIR__ . '\gallery.php');

$max_image_size	= 50 * 1024 * 1024;
$allowedTypes = array('image/png', 'image/jpeg');
$sortByName = $_POST['sortByName'];
$sortBySize = $_POST['sortBySize'];


/* uploading new image */
if (isset($_FILES['image'])) {
    if (in_array($_FILES['image']['type'], $allowedTypes)) {
        if ($_FILES['image']['size'] < $max_image_size) {
            move_uploaded_file ($_FILES['image']["tmp_name"], GALLERY_FOLDER . $_FILES['image']['name']);
            echo "File successful uploaded.<br>";
        } else {
            echo "File is large.<br>";
        }
    } else {
        echo "Format is not supported<br>";
    }
} else {
    echo '
        <form method="post" enctype="multipart/form-data">
                <input type="file" name="image">
                <input type="submit" value="Send File">
        </form>';
}

/* greate an array (size => value) */
$filesList = scandir(GALLERY_FOLDER);
foreach ($filesList as $value) {
    if ($value == '.' || $value == '..') continue;
    $size = filesize(__DIR__ . '\photo\\'.$value);
    $arr_size[] = $size;
    $arr_value []= $value;
}
$array = array_combine($arr_size, $arr_value);

/* sort and getting existing fotos */
switch ($array) {
    case $sortByName == true:
        natsort($array);
        foreach ($array as $key => $itemName) {
            echo "<div class='imageWrapper'><a class='imagescreen' href='http://localhost/localhost/lessons/04/photo/{$itemName}'><img class='imagescreen' src='http://localhost/localhost/lessons/04/photo/{$itemName}' width='100' height='100'><span>Size:$key<br>Name:$itemName<br>Date:".date("d F Y H:i", filectime(__DIR__ . '\photo\\'.$itemName))." </span></a><form method='post'><input type='hidden'>Delete:<input id='deleteFoto' type='submit' name='deleteFoto' value='$itemName'></form></div>";
        }
        break;
    case $sortBySize == true:
        ksort($array);
        foreach ($array as $key => $itemSize) {
            echo "<div class='imageWrapper'><a class='imagescreen' href='http://localhost/localhost/lessons/04/photo/{$itemSize}'><img class='imagescreen' src='http://localhost/localhost/lessons/04/photo/{$itemSize}' width='100' height='100'><span>Size:$key<br>Name:$itemSize<br>Date:".date("d F Y H:i", filectime(__DIR__ . '\photo\\'.$itemSize))." </span></a><form method='post'><input type='hidden'>Delete:<input id='deleteFoto' type='submit' name='deleteFoto' value='$itemSize'></form></div>";
        }
        break;
    default:
        foreach ($array as $key => $itemNull) {
            echo "<div class='imageWrapper'><a class='imagescreen' href='http://localhost/localhost/lessons/04/photo/{$itemNull}'><img class='imagescreen' src='http://localhost/localhost/lessons/04/photo/{$itemNull}' width='100' height='100'><span>Size:$key<br>Name:$itemNull<br>Date:" . date("d F Y H:i.", filectime(__DIR__ . '\photo\\'.$itemNull)). " </span></a><form method='post'><input type='hidden'>Delete:<input id='deleteFoto' type='submit' name='deleteFoto' value='$itemNull'></form></div>";
        }
        break;
}

/* delete fotos */
if (isset ($_POST['deleteFoto']) ) {
    unlink(__DIR__ . '\photo\\' .$_POST['deleteFoto']);
    echo '<meta http-equiv="refresh" content="0; url="GALLERY_START_PAGE>';
}

?>

<style>
    .imageWrapper {
        width: 200px;
        height: 200px;
        float: left;
    }

    .imageWrapper img {
        max-height: 100px;
        max-width: 100px;
    }
    .imageWrapper1 {
        clear: both;
    }


    .imagescreen{
        position: relative;
    }
    .imagescreen:hover{
        background-color: transparent;
        z-index: 0;
    }
    .imagescreen span{
        position: absolute;
        background-color: #3d3d3d;
        padding: 20px;
        left: 0px;
        visibility: hidden;
        color: Yellow;
        text-decoration: none;
    }
    .imagescreen:hover span{
        visibility: visible;
    }

</style>

<div class="imageWrapper1"></div>
<form method="post" enctype="multipart/form-data">
    <input id="sortByName" type="submit" name="sortByName" value="Sort by name">
    <input id="sortBySize" type="submit" name="sortBySize" value="Sort by size">
</form>