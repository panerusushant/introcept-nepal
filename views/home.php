<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="views/style.css">
    <title>Blog Post</title>
</head>

<body>

    <h1 class="heading" id="heading-top"> Create Post</h1>
    <div>
        <form action="/create" method="POST">

            <div class="center_input">
                <input type="text" id="title" name="title" class="title" placeholder="Title " required><br>
            </div>

            <div class="center_text">
                <textarea id="content" name="content" class=content placeholder="Content" required></textarea>
            </div>
            <button type="submit" class="btn" name="submit">Submit</button>
        </form>

    </div>




    <div class="row">
        <?php foreach ($datas as $data) { ?>

            <div class="col-12 col-lg-4 d-flex justify-content-center">

                <div class="card text-white bg-dark mt-5">

                    <div class="card-body" style="width: 18rem;">

                        <h5 class="card-title" id="title"><?php echo $data['title']; ?></h5>
                        <p class="card-text"><?php echo $data['content']; ?>.</p>

                        <div class='d-flex mt-2 justify-content-center align-items-center'>

                            <a href="views/edit.php?id=<?= $data['id'] ?>" class="  btn-light btn-sm">edit</a>


                            <form action="/delete" method='POST'>

                                <input type="text" name=id value="<?= $data['id'] ?>" hidden>
                                <button class='btn-danger btn-sm ml-2'> Delete</button>

                            </form>
                        </div>

                        

                    </div>

                    <form action='/comments' method="POST">

                        <div class="forgroup">

                            <h5>comments</h5>
                            <input name='data_id' id='data_id' value='<?= $data['id'] ?>' hidden>
                            <input type="text" class="form-control" id="comments" placeholder="Enter comment" name="comments">
                            <button type="submit" class="btn-light" name="submit">Post</button>

                        </div>
                    </form>

                    <div class='comments'>
                            <?php foreach($comments as $comment) :?>
                                <p class= 'comment-card'><?= $comment['comments'];?></p>
                                <?php endforeach;?>

                    </div>

                </div>
            </div>
        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>