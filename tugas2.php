<?php 
$buah = [
  "Mangga" => "Manis, kadang kecut.",
  "Jeruk"  => "Kecut.",
  "Alpukat" => "Biasa aja."
];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta nama="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar buah-buahan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h1 class="text-center mt-3">Daftar buah-buahan</h1>
    <hr>

    <div class="container text-center">
      <div class="row justify-content-center">

        <?php foreach ($buah as $nama => $desc): ?>
          <?php
         
            $cardClass = "card bg-white text-dark";

            if ($nama == "Jeruk") {
              $cardClass = "card bg-warning text-dark";
            }
          ?>

     
          <div class="col-md-3 mb-3 <?php echo ($nama == "Jeruk") ? 'order-2' : 'order-1'; ?>">
            <div class="<?php echo $cardClass; ?>" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"><?php echo $nama; ?></h5>
                <p class="card-text"><?php echo $desc; ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
