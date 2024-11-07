<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Tasks Table</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Tasks</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Flag</th>
                    <th>Population</th>
                    <th>Capital</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $json = file_get_contents('https://restcountries.com/v3.1/all');
                $countries = json_decode($json, true);
                foreach ($countries as $country) {
                    $name = $country['name']['common'];
                    $flag = $country['flags']['png'];
                    $population = $country['population'];
                    $capital = is_array($country['capital']) ? implode(", ", $country['capital']) : $country['capital'];

                    echo
                    "<tr>
                            <td>{$name}</td>
                            <td><img src='{$flag}' alt='Flag of {$name}' width='50'></td>
                            <td>{$population}</td>
                            <td>{$capital}</td>
                     </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
