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
        <a href="view" class="btn btn-secondary mb-5">see added tasks</a>
        <form method="post">
            @csrf 
            <div class="mb-3">
                
                <label for="exampleInputEmail1" class="form-label">Task name</label>
                <input required name="taskName" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <label for="exampleInputEmail1" class="form-label">Task description</label>
                <input required name="taskDescription" type="text" class="form-control mt-2" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <button name="add" class="btn btn-success mt-2">add</button>

                @if(isset($success))
                <div id="successMessage" class="alert alert-success mt-2" role="alert">
                    {{ $success }}
                </div>
                
                <script>
                    // Hide the success message after 3 seconds
                    setTimeout(function() {
                        document.getElementById('successMessage').style.display = 'none';
                    }, 1000); // 3000 milliseconds = 3 seconds
                </script>
              @endif

            

            </div>
        </form>
    </div>

</body>


</html>