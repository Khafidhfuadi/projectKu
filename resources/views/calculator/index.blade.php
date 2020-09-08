<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
    <html>
   <head>
   <body>
       <div class="container col-11 mt-5">
        <h3>Calculator in Laravel</h3>
        <div class="container mt-5">
            <form action="/operasi" method="post">
                @csrf
        <div class="row">
            <div class="form-group">
          <label for="angka1">Angka Pertama</label>
          <input type="number" name="angka1" id="">
            </div>
          <div class="col-2">
            <select  class="custom-select custom-select-sm" name="hitung" id="">
              <option selected>Operasi</option>
              <option value="tambah">Tambah</option>
              <option value="kurang">Kurang</option>
              <option value="kali">Kali</option>
              <option value="bagi">Bagi</option>
            </select>
          </div>
          <div class="form-group">
          <label class="ml-3" for="angka2">Angka Kedua</label>
          <input type="number" name="angka2" id="">
          </div>
          <div class="ml-3">
          <button class="btn btn-info" type="submit">Hasil</button>
        </div>
        </form>
        </div>
        <div class="col-md-6">
            @if(session('info'))
            <div class="alert alert-info">
            {{session('info')}}
            </div>
            @endif
        </div>
    </div>
   </body>
   </head>
</html>
</body>
</html>
