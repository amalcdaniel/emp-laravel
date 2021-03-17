<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Employee App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Add Employee</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/search">Search Employee</a>
        </li>
        
    
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
<div class="row">
<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<br>
<h2 style="margin-left:520px"> ADD EMPLOYEE</h2>
<br>
<br>
<table class="table" style="border-color:white; width:500px; margin-left:400px">
<tr>
    <td>Name:</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Emp Code:</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Designation:</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Salary:</td>
    <td><input type="tel" class="form-control"></td>
</tr>
<tr>
    <td>DOB:</td>
    <td><input type="date" class="form-control"></td>
</tr>
<tr>
    <td>Place:</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Pincode:</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Contact Number:</td>
    <td><input type="tel" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-dark">Submit</button></td>
</tr>
<tr>
    <td></td>
    <td></td>
</tr>
<tr>
    <td></td>
    <td></td>
</tr>

</table>

</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>