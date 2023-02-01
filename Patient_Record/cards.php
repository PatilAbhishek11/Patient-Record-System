<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/morph/bootstrap.min.css" integrity="sha512-P74ekVMF6EUCnLTSVOkPjp3DWmXYmTHmr+Q3dMnVqH8e1O2z2vYtSEHEprV2Xsc7fT3wrLp7bUoI6nR/fwU7Gg==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <title>Patients_Registered</title>
</head>

<body>

  <div class="container mt-4">

    <section>
      <h2 class='text-center my-3 py-3'>Patient's Details</h2>
      <div class="container mb-3">

        <div class="row row-cols-1 row-cols-md-3">
          <?php

          $db = mysqli_connect("localhost", "root", "", "patient11");
          $query = "SELECT * FROM patient11form";

          $result = mysqli_query($db, $query) or die(mysqli_error());

            while($row = $result->fetch_array()){
            echo '
            <div class="col mb-4">
              <div class="card">

                <div class="card-body">
                  <h5 class="card-title">'.$row['firstName'].' '.$row['lastName'].'</h5>
                  <p class="card-text">Phone '.$row["phone"].'</p>
                  <p class="card-text">Treatment '.$row["Treatment"].'</p>
                  <p class="card-text">doctor '.$row['doctor'].'</p>
                  <a class="btn btn-info" href="update_form.php"> Edit</a>
                  <a class="btn btn-info" href="delete.php"> Delete</a>
                </div>
              </div>
            </div>

            ';
          }

          ?>
        </div>
      </div>
    </section>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
