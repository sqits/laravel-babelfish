<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/app.css" rel="stylesheet">

    <link href="{{ asset(mix('app.css', 'vendor/babelfish')) }}" rel="stylesheet">
</head>

<body>
    <div id="babelfish">
        <h1 class="text-3xl font-bold underline">
            Hello world!
        </h1>
    </div>

    <script src="{{asset(mix('app.js', 'vendor/babelfish'))}}"></script>
</body>
</html>
