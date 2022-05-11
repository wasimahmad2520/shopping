<?php
	
	error_reporting(0);
	$newData = htmlspecialchars($_POST["new"]);
	$changeData = htmlspecialchars($_GET["change"]);
	$deletData = htmlspecialchars($_GET["delet"]);

	require_once 'classes/todo.class.php';

	$todo = new ToDo('data.txt');

	if (isset($newData)) {
		$todo->setToDo($newData);
	}

	if (isset($changeData)) {
		$todo->changeToDo($changeData);
	}

	if (isset($deletData)) {
		$todo->delToDo($deletData);
	}
?>

<!doctype html>

<html lang="de">
<head>
  <meta charset="utf-8">
  <title>ToDo List</title>

  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/bootstrap-to-do-list.min.css" />




</head>
<body style="background-image: url('./images.jpg') ">
	



  <!-- Start your project here-->
  <section class="vh-100" style="background-color: #e2d5de;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
  
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
  
              <h6 class="mb-3">Awesome Shoping List</h6>
  
              <form class="d-flex justify-content-center align-items-center mb-4"   action="" method="post">
                <div class="form-outline flex-fill">
                  <input type="text" id="form3" class="form-control form-control-lg"  value="" name="new" />
                  <label class="form-label" for="form3">What do you need   today?</label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg ms-2"  value="Submit" name="submitbutton">Add</button>
              </form>
  
              <ul class="list-group mb-0">

			  <?php
 		         $todo->getToDoMaterial();
 	         ?>

                <!-- <li class="list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
                  <div class="d-flex align-items-center">
                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                    Cras justo odio
                  </div>
                  <a href="#!" data-mdb-toggle="tooltip" title="Remove item">
                    <i class="fas fa-times text-primary"></i>
                  </a>
                </li> -->
              
              
               
                
                
              </ul>
  
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </section>










  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>


</body>
</html>