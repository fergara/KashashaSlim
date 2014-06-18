<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>This the Image Uploader Test Page</title>
    </head>
    <body>
        <form method="post" action="/service/v1/kashasha/upload" enctype="multipart/form-data">
            <input type="file" name="imgupload" value="" />
            <input type="submit" name="submit" value="Upload!" />
        </form>
    </body>
</html>
