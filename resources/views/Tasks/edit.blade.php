<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-5">
        <form method="post">
            @csrf
            <div class="mb-3">
                
                <label for="exampleInputEmail1"  class="form-label">Task name</label>
                <input required name="taskN" value="{{$task->task_name}}" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <label for="exampleInputEmail1" class="form-label">Task description</label>
                <input required name="taskD" value="{{$task->task_description}}" type="text" class="form-control mt-2" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <button name="save" class="btn btn-success mt-2">save</button>
                <a href="/tasks/view"class="btn btn-secondary mt-2">back</a>
                

            </div>
        </form>
    </div>

</body>


</html>