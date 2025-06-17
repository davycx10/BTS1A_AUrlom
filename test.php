<?php
require_once("db_PPE.php");
session_start();


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BTS 1 A - Panier</title>
    <link href="css/design.css" rel="stylesheet" />
    

    

<script>

    // JavaScript
$(function(){
  $('.password-icon').click(function() {
    var input = $('#mdp');
    if(input.attr('type') === 'password') {
      input.attr('type', 'text');
      $(this).find('.feather-eye').hide();
      $(this).find('.feather-eye-off').show();
    } else {
      input.attr('type', 'password');
      $(this).find('.feather-eye').show();
      $(this).find('.feather-eye-off').hide();
    }
  });
});

</script>

    
</head>
<body>

<?php require_once("header.php"); ?>

<form>
  <input type="password" id="mdp">
  <span class="password-icon"><i class="feather-eye"></i><i class="feather-eye-off"></i></span>
</form>


    <?php
    require_once("footer.php");
    ?>

</body>
</html>