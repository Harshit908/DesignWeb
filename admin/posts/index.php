<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" , initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Section - Manage Posts</title>


  <!-- Custom Styling -->
  <link rel="stylesheet" href="../../assets/css/style.css">

  <!-- Admin Styling -->
  <link rel="stylesheet" href="../../assets/css/admin.css">



  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- ck editor -->
  <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
  <!-- // ck editor -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>

<body>

  <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>



  <!--Admin Page Wrapper -->
  <div class="admin-wrapper">

  <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>



<!-- Admin Content -->
<div class="admin-content">
  <div class="button-group">
    <a href="create.php" class="btn btn-big">Add Post</a>
    <a href="index.php" class="btn btn-big">Manage Post</a>
  </div>


  <div class="content">

    <h2 class="page-title">Manage Posts</h2>

    <?php include(ROOT_PATH . "/app/includes/messages.php") ?>


    <table>
      <thead>
        <th>SN</th>
        <th>Title</th>
        <th>Author</th>
        <th colspan="3">Action</th>
        </thead>
        <tbody>

            <?php foreach ($posts as $key => $post): ?>

                  <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo $post['title'] ?></td>
                    <td>Harshit</td>
                    <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
                    <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>

                    <?php if ($post['published']): ?>
                      <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">unpublish</a></td>
                    <?php else: ?>
                      <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">publish</a></td>
                    <?php endif; ?>

                  </tr>
                <?php endforeach; ?>




          </tbody>
        </table>


        </div>


        </div>
<!-- //Admin Content -->






  </div>
  <!--  // Page Wrapper -->


















  <script>
    $(document).ready(function() {
      $('.menu-toggle').on('click', function() {
        $('.nav').toggleClass("showing");
        $('.nav ul').toggleClass("showing");
      });

    });


    ClassicEditor
    .create( document.querySelector( "#body" ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );
  </script>



</body>

</html>
