<!DOCTYPE html>
<html>

<head>
    <title>Laravel 5.7 Import Export Excel to database Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>

<body>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome Fantasia</th>
                    <th>Razão Social</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bairros as $bairro)
                <tr>
                    <td>{{ $bairro->id }}</td>
                    <td>{{ $bairro->razao_social }}</td>
                    <td>{{ $bairro->nome_fantasia }}</td>
                    <td>{{ $bairro->lat }}</td>
                    <td>{{ $bairro->long }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $bairros->links() }}
</body>

</html>