<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lakme</title>
</head>
<body>

  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <span class="navbar-text">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-sm-2 col-lg-2 col-md-2 col-xl-2 col-xxl-2">
                    <img height="10px" src=https://i.pinimg.com/474x/89/93/4d/89934dc966896fb1372d7f14d32eeb02.jpg class="img-thumbnail" alt="...">
                </div>
                <div class="col col-12 col-sm-10 col-lg-10 col-md-10 col-xl-10 col-xxl-10">
                    <h1 style="color: rgb(221, 100, 9); font: size 150px;;"><center>LakmE </center> </h1>
                  
                </div>
            </div>
        </div>
      </span>
    </div>
  </nav>



  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Photogalary">Photo Gallery</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              QuickLinks
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/Signin">Sign In</a></li>
              <li><a class="dropdown-item" href="/registration">Registration</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/feedback">Feedback</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          Phone No: +91 8547029350<br>
          &emsp;&emsp;&emsp;&emsp;&emsp;: +91 8547029350
          
        </form>
      </div>
    </div>
  </nav>




  @yield("content")


  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>