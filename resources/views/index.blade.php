<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
  </head>
  <body>
    <div class="container">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Positif</th>
            <th scope="col">Sembuh</th>
            <th scope="col">Meninggal</th>
          </tr>
        </thead>

        <tbody>
          @php
            $no = 0;
          @endphp
          <tr>

          @foreach ($data as $d)
            <th scope="row">{{$no++}}</th>
            <td>{{ $d['attributes']['Provinsi'] }}</td>
            <td>{{ $d['attributes']['Kasus_Posi']}}</td>
            <td>{{ $d['attributes']['Kasus_Semb']}}</td>
            <td>{{ $d['attributes']['Kasus_Meni']}}</td>
          </tr>
          @endforeach
        </tbody>

      </table>
    </div>
  </body>
</html>
