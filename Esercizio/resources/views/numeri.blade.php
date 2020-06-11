<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Primi passi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js" charset="utf-8"></script>

    <body>

      <div class="header">
        <div class="row">

          <p>HEADER</p>

        </div>
      </div>

      <div class="content">
        <div class="row">

          @foreach ($numbers as $value)

            <div class="number">

              <p> {{ $value }} </p>

            </div>


          @endforeach


        </div>
        <a href="/">PAGINA INIZIALE</a>
      </div>

      <div class="footer">
        <div class="row">

          <p>FOOTER</p>

        </div>
      </div>

    </body>
</html>
