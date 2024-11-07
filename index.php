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
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $json = file_get_contents('tasks.json');
                $tasks = json_decode($json, true)['tasks'];

                foreach ($tasks as $task) {
                    echo 
                    "<tr>
                            <td>{$task['id']}</td>
                            <td>{$task['name']}</td>
                            <td>{$task['description']}</td>
                            <td>{$task['gender']}</td>
                     </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
