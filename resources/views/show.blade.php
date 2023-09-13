<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>show blade template</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <h1>{{ $task -> title }}</h1>
        <p>{{ $task->description }}</p>

        @if ($task->long_description)
            <p>{{ $task->long_description }}</p>
        @endif

        <p>{{ $task->created_at }}</p>
        <p>{{ $task->updated_at }}</p>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
