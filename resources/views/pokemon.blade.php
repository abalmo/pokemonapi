<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pokemon</title>
  </head>
  <body>
      <div class="container">
    <table class="table table-striped ">
        <thead>
            <tr>
                <th scope="col">Pokemon</th>
                <th scope="col">Abilidades</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td scope="row"><img src="{{ $arrayapi['sprites']['other']['home']['front_default'] }}" class="img-thumbnail" width="200" height="200"></td>
                    <td>{{ $arrayapi['abilities'][0]['ability']['name'] }} <br> {{ $arrayapi['abilities'][1]['ability']['name'] }}</td>
                    <td>{{ $arrayapi['types'][0]['type']['name'] }}</td>
                </tr>
        </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>