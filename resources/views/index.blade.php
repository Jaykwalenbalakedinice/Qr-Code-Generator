<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate Qr Code</title>
</head>
<body>
    <h1>Please input any URL you want to generate</h1>
    <form action="{{route('Qrcode')}}" method="POST">
        @csrf
        @method('POST')
        <input type="text" name="url" placeholder="Enter URL">
        <button type="submit">Generate</button>
    </form>
</body>
</html>
