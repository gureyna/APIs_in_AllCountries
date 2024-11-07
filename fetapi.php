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
                   
                    <th>id</th>
                    <th>title</th>
                    <th>body</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $json = file_get_contents('https://jsonplaceholder.typicode.com/posts');
                $tasks = json_decode($json, true);

                foreach ($tasks as $task) {
                    echo 
                    "<tr>
                            <td>{$task['id']}</td>
                            <td>{$task['title']}</td>
                            <td>{$task['body']}</td>                        
                     </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
