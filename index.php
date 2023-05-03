<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .container {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card py-5 px-3 text-center">
        <form action="data.php" method="post" >
            <label for="text">text:</label>
            <input type="text" name="text" id="text">
            <br>
            <label for="banword" class="my-3">ban word: </label>
            <input type="text" name="banword" id="banword">
            <br>
            <button type="submit">Send</button>
            <button type="reset">Cancel</button>
            </form>
        </div>
    </div>
</body>
</html>