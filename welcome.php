<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
     
	 <style>
      .img-container {
        text-align: center;
      }
    </style>
	
<link rel="stylesheet" type="text/css" href="css/Users.css">
<script>
  $(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
</head>
<body>
<?php include'header.php'; ?> 
<main>

      <div class="img-container"> <!-- Block parent element -->
      <img src="welcome.jpg" alt="welcome">
    </div>

</main>
</body>
</html>