<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Electro Piscine</title>

    <link rel="stylesheet" href="../assets/style.css">

  </head>
  <body>

  <header class="header">
  </header>

  <main>

  <?php foreach($products as $product) { ?>
    <?php if ($product["isPublished"] === true) { ?>

      <article>
        <h2><?php echo $product["title"]; ?></h2>
      </article>
      
    <?php } ?>  

	<?php } ?>



  </main>

</body>
</html>