<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- indispensabile per far funzionare le media-queries -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password</title>

  <!-- font-family: 'Roboto', sans-serif; -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container border rounded-4 py-3 px-5">
    <legend class="fs-1 fw-1">Crea Password:</legend>
    <form>

      <div class="form-group row">
        <label for="password-length" class="col-5 col-form-label">Specifica da quanti caratteri deve essere formata la tua password</label>
        <div class="col-7 ">
          <input type="number" class="form-control" id="password-length">
        </div>
      </div>

      <!-- <fieldset class="form-group">
        <legend class="col-form-label col-sm-2 pt-0 fs-2 fw-2">Preferenze:</legend>

        <div class="row py-3 border-bottom">
          <legend class="col-form-label col-sm-2 pt-0 ">carattri ammessi:</legend>

          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="chars" id="alphabet-chars" value="true" checked>
              <label class="form-check-label" for="alphabet-chars">
                Lettere
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="chars" id="integer-chars" value="true">
              <label class="form-check-label" for="integer-chars">
                Numeri
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="chars" id="symbols-chars" value="true">
              <label class="form-check-label" for="symbols-chars">
                Simboli
              </label>
            </div>

          </div>
        </div>
      </fieldset>
      <div class="form-group row  py-3 border-bottom">
        <div class="col-sm-2">ripetizioni:</div>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" id="repeat-true" name="repeat" value="true">
            <label class="form-check-label" for="repeat-true">
              permesse
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" id="repeat-false" name="repeat" value="false">
            <label class="form-check-label" for="repeat-false">
              negate
            </label>
          </div>
        </div>
      </div> -->
      <div class="form-group row py-3">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>

<style>
  body {
    font-family: 'Roboto', sans-serif;
  }

  .container {
    margin-top: 100px;
  }
</style>