
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Custom Styling -->
  <link rel="stylesheet" href="./../View/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Article </title>
</head>


<$repo = new PostRepository();
    $post = $repo->getPostById($_GET['id']);
    require_once(dirname(__FILE__, 2) . '/View/Posts/EditForm.php');
