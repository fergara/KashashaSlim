require 'vendor/autoload.php';

$app = new Slim();

$app->get('/', function () use ($app) {
    echo <<<__HTML
<!DOCTYPE html>
<html>
<head>
    <title>Multiple Upload</title>
</head>
<body>
    <p>Please upload some images.</p>
    <form action="/" enctype="multipart/form-data" method="post">
        <input type="file" name="uploads[]" multiple="multiple"/><br/>
        <input type="submit" value="Upload Now"/>
    </form>
</body>
</html>
__HTML;
});

$app->post('/', function () {
    if (!isset($_FILES['uploads'])) {
        echo "No files uploaded!!";
        return;
    }

    $imgs = array();

    $files = $_FILES['uploads'];

    $cnt = count($files['name']);
    for($i = 0 ; $i < $cnt ; $i++) {
        if ($files['error'][$i] === 0) {
            $name = uniqid('img-'.date('Ymd').'-');
            if (move_uploaded_file($files['tmp_name'][$i], 'uploads/' . $name) === true) {
                $imgs[] = array('url' => '/uploads/' . $name, 'name' => $files['name'][$i]);
            }

        }
    }

    $imageCount = count($imgs);
    if ($imageCount == 0) {
        echo 'No files uploaded!!  <p><a href="/">Try again</a>';
        return;
    }

    $plural = ($imageCount == 1) ? '' : 's';

    echo <<<__HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Multiple Upload</title>
</head>
<body>
    <h1>Thanks for uploading $imageCount file{$plural}.</h1>
    <h2>File List</h2>
__HTML;

    foreach($imgs as $img) {
        printf('%s <img src="%s" width="50" height="50" /><br/>', $img['name'], $img['url']);
    }

    echo <<<__HTML
    <p><a href="/">Upload more</a>
</body>
</html>
__HTML;

});

$app->run();