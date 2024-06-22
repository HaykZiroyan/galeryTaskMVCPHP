<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery</title>
    <link rel="stylesheet" href="<?=ASSETS?>newsss.css">
</head>
<body>
    <nav class="row sides <?= CURRENT === 'login' || CURRENT === 'signup' ? "hide" : "" ?>" >
        <div class="galleryTxt">
        <a href="">gallery</a>

        </div>
        <div class="right">
            <a href="">my photos</a>
            <a href="">wishlist</a>
            <a href="">
                <button class="login">
                login
                </button>
            </a>
        </div>
    </nav>
