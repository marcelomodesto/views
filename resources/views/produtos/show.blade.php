<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Produto</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>
    <div class="container">
    <h1>Produto</h1>

    <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $produto['nome'] }}</td>
            <td>{{ $produto['descricao'] }}</td>
            <td>R$ {{ $produto['preco'] }}</td>
          </tr>
        </tbody>

    </table>
    </div>
</html>
