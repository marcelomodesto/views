<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Olá</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>
    <div class="container">

    <?php  $nome = "Jose"; ?>

      @for ($i=0; $i < 10; $i++)
          <h2>Boa noite {{ $nome }}</h2>
      @endfor
    </div>
    <script type="text/javascript" src="/js/app.js">
  </body>
</html>
