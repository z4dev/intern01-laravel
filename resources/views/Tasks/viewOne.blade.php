
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <a href="createTask.php" class="btn btn-secondary mt-2 ml-2">add task</a>
    <div class="container mt-5">
        <h2>Tasks</h2>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->task_name }}</td>
                    <td>{{ $task->task_description }}</td>
                    <td>
                        <a href="/tasks/delete/{{$task->id}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                        <a href="/tasks/edit/{{$task->id }}" class="btn btn-success">Update</a>
                        <a href="/tasks/view" class="btn btn-secondary">back</a>
                    </td>
                </tr>

            </tbody>
    </div>
</body>

</html>