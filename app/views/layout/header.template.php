<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.2/dist/css/uikit.min.css"/>
    <link rel="stylesheet" href="/app/resources/styles/main.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <title><?= title() ?></title>
</head>
<body>

    <header style="position: sticky !important;" class="uk-background-primary uk-position-z-index-high uk-position-top">
        <?= view('layout->nav.template') ?>
    </header>