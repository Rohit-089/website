<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <style>
  .second{
      display :none;
  }
  
    body {
      background: #111827;
      /* background: #e8e8e8; */
    }

    /* #img1 {
      width: 30px;
    } */

    #img2 {
      width: 30px;
      float: right;
    }

    .image2 {
      margin-left: 50px;
    }

    .texto {
      color: white;
      margin-left: -5px;
      font-size: 32px;
    }

    #hii0{
      float: right;
      margin-top: 10px;
    }

    #hii1{
      margin-top: 10px;
      margin-left: -50px;
    }

    .hii2 {
      margin-top: 10px;
      margin-left: -50px;
    }

    .line {
      display: inline;
    }

    #nav-img-01{
      margin-right: -23px;
    }

    #nav-img-02{
      margin-right: -23px;
    }
    
    #btt {
  color: white;
}

.s-n {
  display: grid;
  font-size: 23px;
  margin: -21px 12px;
}

#hii {
  margin-right: 20px;
}

.nav-img-1 {
  height: 35px;
  width: 45px;
  margin-left: 22px;
}

.nav-img2 {
  height: 35px;
  width: 45px;
  margin: 0 10px;
  margin-right: 76px;
  margin-left: 30px;
}

.nav-img3 {
  height: 40px;
  width: 45px;
  margin-right: 75px;
}

#nav-img-2 {
  display: none;
}

.nav-item {
  margin-left: 55px;
  font-size: 18px;
}

.nav-item:hover {
  text-decoration: underline;
  color: aquamarine;
}

@media screen and (max-width: 415px) {
      #nav-img-02{
        display: none;
      }
      
      .second{
          display : block;
      }
      
      .first{
          display: none;
      }
    }
    
/*SIDE-NAVBAR KI CSS*/
@media screen and (max-width: 415px) {
  .sidebar {
    padding-top: 35px;
    line-height: 25px;
    width: 50vw;
    margin-top: -140px;
    margin-right: 2px;
  }

  .sidebar li {
    font-size: 8px;
    margin-left: -30px;
  }

  .sidebar li:hover {
    padding-left: 3px;
  }

  .navi-img img {
    height: 20px;
  }

  #navi2 {
    margin-top: -140px;
  }

  #sidebar-img {
    padding-left: 50px;
  }

  .sidebar ul li {
    padding-left: 30px;
    font-size: 20px;
    line-height: 50px;
  }

  .sidebar button {
    margin-left: 25px;
    padding: 10px
}
}

@media screen and (max-width: 361px) {
  #sidebar-img {
    padding-left: 45px;
  }
}
  </style>
</head>

<body>
    <!-- TOP NAVBAR -->
    <div class="first">
        <nav class="navbar navbar-expand-lg p-3 mb-2 bg-dark text-white abc">
            <div class="container-fluid">
                <a class="navbar-brand text-light bg-dark" href="./index.php">
                    <img src="./images/home.png" alt="" class="nav-img-1"></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light bg-dark" href="./pages/html0.php">HTML</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light bg-dark" href="./pages/css0.php">CSS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light bg-dark" href="./pages/js0.php">JS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light bg-dark" href="./pages/php0.php">PHP</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light bg-dark" href="./pages/c0.php">C</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light bg-dark" href="./pages/c++0.php">C++</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light bg-dark" href="#" class="s-n" onclick="myFunction1()">About Creater</a>
                        </li>
                    </ul>

                    <img src="./images/sun.png" alt="" class="nav-img3" id="nav-img-1" onclick="myFunction3()">
                    <img src="./images/moon.png" alt="" class="nav-img3" id="nav-img-2" onclick="myFunction4()">

                    <a href="./forms/log_in.php"><button class="btn btn-outline-danger" id="hii" type="submit">Login</button></a>
                    <a href="./forms/sign_up.php"><button class="btn btn-outline-success" id="hii" type="submit">SignUp</button></a>
                    

                </div>
            </div>
        </nav>
    </div>
    
    
<div class="second">
  <nav class="navbar bg-dark" data-bs-theme="dark">
    <div class="container-fluid">

    <a class="navbar-brand" href="./index.php">
      <img src="./images/home.png" alt="Bootstrap" width="30" height="30">
    </a>

      <span class="texto">ProCoding</span>

      <a class="navbar-brand">
      <!-- <img src="./images/sun.png" alt="Bootstrap" width="30" height="30" id="hehe"  onclick="myFunction3()">
      <img src="./images/moon.png" alt="Bootstrap" width="30" height="30" id="hehe"  onclick="myFunction4()"> -->

      <img src="./images/sun.png" alt="" id="nav-img-01" width="30" height="30" onclick="myFunction7()">
      <img src="./images/moon.png" alt="" id="nav-img-02" width="30" height="30" onclick="myFunction8()">
    </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active hii2" aria-current="page" class="s-n" onclick="myFunction1()">About Creater</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hii2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tutorial
            </a>
            <ul class="dropdown-menu hii2">
              <center>
                <li><a class="dropdown-item" href="./pages/html0.php">HTML</a></li>
                <li><a class="dropdown-item" href="./pages/css0.php">CSS</a></li>
                <li><a class="dropdown-item" href="./pages/js0.php">JS</a></li>
                <li><a class="dropdown-item" href="./pages/php0.php">PHP</a></li>
                <li><a class="dropdown-item" href="./pages/c0.php">C</a></li>
                <li><a class="dropdown-item" href="./pages/c++0.php">C++</a></li>
              </center>

            </ul>
          </li>
          <span class="line">
            <li class="nav-item">
              <a href="./forms/log_in.php"><button class="btn btn-outline-danger" id="hii0" type="submit">Login</button></a>
            </li>
            <li class="nav-item">
              <a href="./forms/sign_up.php"><button class="btn btn-outline-success" id="hii1" type="submit">SignUp</button></a>
            </li>
          </span>
        </ul>
      </div>
    </div>
  </nav>
  
</div>

  <script>

        function myFunction7() {
            document.querySelector('body').style.backgroundColor = "#ebeced";
            document.querySelector('.content1').style.color = "black";
            document.querySelector('.cards-head').style.color = "black";
            document.querySelector('#nav-img-01').style.display = "none";
            document.querySelector('#nav-img-02').style.display = "block";

            let x = document.querySelectorAll('.hoi')
            x[0].style.backgroundImage = "url('./images/win.png')";
            x[1].style.backgroundImage = "url('./images/win.png')";
            x[2].style.backgroundImage = "url('./images/win.png')";

            let y = document.querySelectorAll('.card-content p')
            y[0].style.color = "black";
            y[1].style.color = "black";
            y[2].style.color = "black";
        }

        function myFunction8() {
            document.querySelector('body').style.backgroundColor = "#111827";
            document.querySelector('.content1').style.color = "white";
            document.querySelector('.cards-head').style.color = "white";
            document.querySelector('#nav-img-02').style.display = "none";
            document.querySelector('#nav-img-01').style.display = "block";

            let x = document.querySelectorAll('.hoi')
            console.log(x);
            x[0].style.backgroundImage = "url('./images/10.jpg')";
            x[1].style.backgroundImage = "url('./images/10.jpg')";
            x[2].style.backgroundImage = "url('./images/10.jpg')";

            let y = document.querySelectorAll('.card-content p')
            y[0].style.color = "white";
            y[1].style.color = "white";
            y[2].style.color = "white";
        }

        </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>