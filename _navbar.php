<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedro Lorenzo!</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <img src="https://icon-library.com/images/png-house-icon/png-house-icon-11.jpg" alt="" width="30" height="24">

      <a class="navbar-brand" href="#">Rosario's Condo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Home.php">DashBoard</a>
          </li>

         

          <li class="nav-item">
            <a class="nav-link" href="Complaints.php">Complaints</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="allTenants.php" tabindex="-1" aria-disabled="true">All Tenants</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Expenses.php">Expenses</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="TotalIncome.php">Total Monthly Income</a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="TotalIncome.php">Update Condo Info</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="CondoInfo.php">Add Condo Info</a>
          </li> -->

          <!-- make a drop down menu here -->


          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Condo Info
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="AddCondoInfo.php">Add Condo Info</a></li>
            <li><a class="dropdown-item" href="#">Edit Condo Info</a></li>
          </ul>
        </li>


        
        
          
        </ul>
        <form class="d-flex" action="index.php">
          <button class="btn btn-outline-danger" type="submit">LogOut</button>
        </form>
      </div>
    </div>
  </nav>


<style>
  body{
    margin: 0;
    padding: 0;
  }
</style>
</html>