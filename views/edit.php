<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Blog Post</title>
</head>

<body>

    <h1 class="heading" id="heading-top"> Edit Post</h1>
    <div>
       

        <form action="/edit" method="POST">

            <input type="text" name="id" class="id" value = "<?= $_REQUEST['id']?>"hidden><br>

            <div class="center_input">
                <input type="text" id="title" name="title" class="title" placeholder="Title" required><br>
            </div>

            <div class="center_text">
                <textarea id="content" name="content" class=content placeholder="Content" required></textarea>
            </div>

            <button type="submit" class="btn" name="submit">edit</button>
        </form>
    

    </div>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>