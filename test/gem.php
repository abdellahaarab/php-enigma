<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>PHP</title>
</head>
<body>
    <div class="container">
      <form method="post" action="jouer.php">
         <div class="input-group mb-3">
            <label>Nb joureus</label><br/>
            <input  type="number" max="4" min="1" value="4"  class="form-control" name="Nbjoureus"/><br/>
            <button type="submit" name="loncer" class="btn btn-primary">Loncer</button> 
         </div>
      </form>
    </div>
</body>
</html>