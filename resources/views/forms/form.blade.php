<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="proses" method="post">
        @csrf
        <label for="">Nama</label>
        <input type="text" name="nama" id="">
        <label for="">Umur</label>
        <input type="number" name="umur" id="">
        <input type="submit" name="Submit" id="">
    </form>
</body>
</html>
