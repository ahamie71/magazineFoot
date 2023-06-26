<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom Styling -->
    <link rel="stylesheet" href="./../src/View/css/style.css">

    <!-- Admin Styling -->


    <title> Add Post</title>
</head>

<body>
   

    <!-- Admin Page Wrapper -->
    <div class="admin-container">


        <!-- // Left Sidebar -->


        <!-- Admin Content -->


        <div class="container">

            <h2 class="page-title"> Gestions des articles</h2>


            <form action="index.php?action=" method="POST" enctype="multipart/form-data">
                <h2 class="text-center"><strong>Create</strong> a post </h2>
                <label>Title</label>
                <div class="form-group"><input class="form-control" type="text" required="required" name="title"
                        placeholder="enter a title"></div>
                <div class="form-group">
                    <label>Content</label>
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="form4Example3" rows="4" name="content"></textarea>
                        <label class="form-label" for="form4Example3"></label>
                    </div>

            
                    <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>


                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="register">Ajouter
                    </button></div>



              

        </div>

    </div>
    </form>
    <!-- // Admin Content -->

    </div>
    <!-- // Page Wrapper -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>