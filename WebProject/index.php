<?php include (server.php) ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Web Project</title>
  <script>
  function validateForm(event) {
    event.preventDefault();
    var EmailAddress = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (EmailAddress === "")
    {
      alert("Please enter a username.");
      return;
    }

    if (password === "") {
      alert("Please enter a password.");
      return;
    }
    document.getElementById("loginForm").submit();
  }
  document.getElementById("loginForm").addEventListener("submit", validateForm);
</script>

</head>
<body>
  <!--navbar section-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Fahad Malik</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="Contact.html">Contact</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Topics
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
        <div class="mx-2">
          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="LoginModalLabel">Login To RedStore / Web Project</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form id="loginForm">
        <div class="modal-body" >
          <div class="form-floating mb-3">
            <input type="text" id="username" name="username" required class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput" >EmailAddress</label>
          </div>

          <div class="form-floating">
            <input type="password" id="password" name="password" required class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="col-auto my-4">
            <button type="submit" value="login"class="btn btn-primary mb-3">Login</button>
          </div>
        </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- SignUPModal -->
  <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="signupModalLabel">Get Your RedStore Account Here</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Phone Number</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating my-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Confirm Password</label>
          </div>

          <div class="col-auto my-4">
            <button type="submit" class="btn btn-primary mb-3">Create Account</button>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!--carousel section-->
  <div id="carouselExampleCaptions" class="carousel slide  carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/1400x300/?clothing,clothes" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">


          <!-- <h5>Web Project/ E Store</h5>
        <p>Looks Good</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1400x300/?clothing,clothing" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>Web Project/ E Store</h5>
        <p>Looks Good</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1400x300/?clothing,brand" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>Web Project/ E Store</h5>
        <p>Looks Good</p> -->
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--Add To Cart section-->
  <div class="container my-4 mr-10">
    <div class="order-lg-2 nav-btns">
      <button type="button" class="btn position-relative">
        <i class="fa fa-shopping-cart"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
      </button>
      <button type="button" class="btn position-relative">
        <i class="fa fa-heart"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">2</span>
      </button>
      <button type="button" class="btn position-relative">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>

  <!-- collection -->
  <section id="collection" class="py-5">
    <div class="container">
      <div class="title text-center">
        <h2 class="position-relative d-inline-block">New Collection</h2>
      </div>

      <div class="row g-0">
        <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
          <button type="button" class="btn m-2 text-dark active-filter-btn" data-filter="*">All</button>
          <button type="button" class="btn m-2 text-dark" data-filter=".best">Best Sellers</button>
          <button type="button" class="btn m-2 text-dark" data-filter=".feat">Featured</button>
          <button type="button" class="btn m-2 text-dark" data-filter=".new">New Arrival</button>
        </div>

        <div class="collection-list mt-4 row gx-0 gy-3">
          <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
            <div class="collection-img position-relative">
              <img src="C:\WebProject\images\buy-1.jpg" class="w-100">
              <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center"></span>
            </div>
            <div class="text-center">
              <div class="rating mt-3">
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
              </div>
              <p class="text-capitalize my-1">Puma T-Shirt</p>
              <span class="fw-bold">$ 45.50</span>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
            <div class="collection-img position-relative">
              <img src="C:\WebProject\images\buy-2.jpg" class="w-100">
              <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center"></span>
            </div>
            <div class="text-center">
              <div class="rating mt-3">
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
              </div>
              <p class="text-capitalize my-1">Nike Shoes</p>
              <span class="fw-bold">$ 65.50</span>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
            <div class="collection-img position-relative">
              <img src="C:\WebProject\images\buy-3.jpg" class="w-100">
              <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center"></span>
            </div>
            <div class="text-center">
              <div class="rating mt-3">
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
              </div>
              <p class="text-capitalize my-1">Nike Trouser</p>
              <span class="fw-bold">$ 55.50</span>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
            <div class="collection-img position-relative">
              <img src="C:\WebProject\images\category-1.jpg" height="264" class="w-100">
              <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center"></span>
            </div>
            <div class="text-center">
              <div class="rating mt-3">
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
              </div>
              <p class="text-capitalize my-1">Brown Shoes</p>
              <span class="fw-bold">$ 76.50</span>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
            <div class="collection-img position-relative">
              <img src="C:\WebProject\images\category-3.jpg" class="w-100">
              <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center"></span>
            </div>
            <div class="text-center">
              <div class="rating mt-3">
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
              </div>
              <p class="text-capitalize my-1">White Hoody</p>
              <span class="fw-bold">$ 45.00</span>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
            <div class="collection-img position-relative">
              <img src="C:\WebProject\images\redHoody.jpg " height=290 class="w-100">
              <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center"></span>
            </div>
            <div class="text-center">
              <div class="rating mt-3">
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
              </div>
              <p class="text-capitalize my-1">Red Nike Hoody</p>
              <span class="fw-bold">$ 70.50</span>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
            <div class="collection-img position-relative">
              <img src="C:\WebProject\images\blackhoddy.jpg" height="290" class="w-100">
              <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center"></span>
            </div>
            <div class="text-center">
              <div class="rating mt-3">
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
              </div>
              <p class="text-capitalize my-1">Black Hoddy</p>
              <span class="fw-bold">$ 45.50</span>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
            <div class="collection-img position-relative">
              <img src="C:\WebProject\images\nike.jpg" height="290" class="w-100">
              <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center"></span>
            </div>
            <div class="text-center">
              <div class="rating mt-3">
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
              </div>
              <p class="text-capitalize my-1">Red Nike</p>
              <span class="fw-bold">$ 200.50</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--BLOG section-->
  <div class="container my-2">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Populor Product</strong>
            <h3 class="mb-0">50% Sale</h3>
            <!-- <div class="mb-1 text-muted">Nov 12</div> -->
            <p class="card-text mb-auto">Get ready to enjoy huge savings on our website's sale - your wallet will thank you!</p>
            <!-- <a href="#" class="stretched-link">Continue reading</a> -->
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="C:\WebProject\images\buy-2.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Populor Product</strong>
            <h3 class="mb-0">50% Sale</h3>
            <!-- <div class="mb-1 text-muted">Nov 11</div> -->
            <p class="mb-auto">Hurry up and visit our website's sale before it's too late - these deals won't last forever!</p>
            <!-- <a href="#" class="stretched-link">Continue reading</a> -->
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="C:\WebProject\images\product-8.jpg" height="200" alt="">
          </div>
        </div>
      </div>
    </div>

    <!-- Populor Section -->
    <section id="popular" class="pl-1">
      <div class="container ">
        <div class="title text-center pt-3 pb-5">
          <h2 class="position-relative d-inline-block ms-4">Popular Of This Year</h2>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 row g-3">
            <h3 class="fs-5">Top Rated</h3>
            <div class="d-flex align-items-start justify-content-start">
              <img src="C:\WebProject\images\product-4.jpg" alt="" class="img-fluid pe-3 w-25">
              <div>
                <p class="mb-0">Blue Shirt</p>
                <span>$ 20.00</span>
              </div>
            </div>
            <div class="d-flex align-items-start justify-content-start">
              <img src="C:\WebProject\images\product-5.jpg" alt="" class="img-fluid pe-3 w-25">
              <div>
                <p class="mb-0">Shoes</p>
                <span>$ 15.00</span>
              </div>
            </div>
            <div class="d-flex align-items-start justify-content-start">
              <img src="C:\WebProject\images\product-7.jpg" alt="" class="img-fluid pe-3 w-25">
              <div>
                <p class="mb-0">Socks</p>
                <span>$ 45.00</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 row g-3">
            <h3 class="fs-5">Best Selling</h3>
            <div class="d-flex align-items-start justify-content-start">
              <img src="C:\WebProject\images\product-9.jpg" alt="" class="img-fluid pe-3 w-25">
              <div>
                <p class="mb-0">Watch</p>
                <span>$ 42.00</span>
              </div>
            </div>
            <div class="d-flex align-items-start justify-content-start">
              <img src="C:\WebProject\images\exclusive.png" alt="" class="img-fluid pe-3 w-25">
              <div>
                <p class="mb-0">Smart Watch</p>
                <span>$ 32.00</span>
              </div>
            </div>
            <div class="d-flex align-items-start justify-content-start">
              <img src="C:\WebProject\images\category-2.jpg" alt="" class="img-fluid pe-3 w-25">
              <div>
                <p class="mb-0">White Nike Shoes</p>
                <span>$ 23.00</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 row g-3">
            <h3 class="fs-5">On Sale</h3>
            <div class="d-flex align-items-start justify-content-start">
              <img src="C:\WebProject\images\product-2.jpg" alt="" class="img-fluid pe-3 w-25">
              <div>
                <p class="mb-0">Black Shoes</p>
                <span>$ 45.00</span>
              </div>
            </div>
            <div class="d-flex align-items-start justify-content-start">
              <img src="C:\WebProject\images\product-8.jpg" alt="" class="img-fluid pe-3 w-25">
              <div>
                <p class="mb-0">Watch</p>
                <span>$ 40.00</span>
              </div>
            </div>
            <div class="d-flex align-items-start justify-content-start">
              <img src="C:\WebProject\images\gallery-4.jpg" alt="" class="img-fluid pe-3 w-25">
              <div>
                <p class="mb-0">Outfit</p>
                <span>$ 30.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- special products -->
    <section id="special" class="py-5">
      <div class="container">
        <div class="title text-center py-5">
          <h2 class="position-relative d-inline-block">Special Selection</h2>
        </div>

        <div class="special-list row g-0">
          <div class="col-md-6 col-lg-4 col-xl-3 p-2">
            <div class="special-img position-relative overflow-hidden">
              <img src="C:\WebProject\images\brand1.jpg" class="w-100">
              <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                <i class="fas fa-heart"></i>
              </span>
            </div>
            <div class="text-center">
              <p class="text-capitalize mt-3 mb-1">Bonanza</p>
              <span class="fw-bold d-block">$ 450.50</span>
              <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2">
            <div class="special-img position-relative overflow-hidden">
              <img src="C:\WebProject\images\brand2.jpg" class="w-100">
              <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                <i class="fas fa-heart"></i>
              </span>
            </div>
            <div class="text-center">
              <p class="text-capitalize mt-3 mb-1">Sana Safinaz</p>
              <span class="fw-bold d-block">$ 350.00</span>
              <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2">
            <div class="special-img position-relative overflow-hidden">
              <img src="C:\WebProject\images\brand3.jpg" class="w-100">
              <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                <i class="fas fa-heart"></i>
              </span>
            </div>
            <div class="text-center">
              <p class="text-capitalize mt-3 mb-1">Khaadi</p>
              <span class="fw-bold d-block">$ 450.50</span>
              <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2">
            <div class="special-img position-relative overflow-hidden">
              <img src="C:\WebProject\images\brand4.jpg" class="w-100">
              <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                <i class="fas fa-heart"></i>
              </span>
            </div>
            <div class="text-center">
              <p class="text-capitalize mt-3 mb-1">Lime Light</p>
              <span class="fw-bold d-block">$ 200.50</span>
              <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- newsletter -->
    <section id="newsletter" class="py-5">
      <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center">
          <div class="title text-center pt-3 pb-5">
            <h2 class="position-relative d-inline-block ms-4">Subscription</h2>
          </div>

          <p class="text-center text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus rem officia accusantium maiores quisquam dolorum?</p>
          <div class="input-group mb-3 mt-3">
            <input type="text" class="form-control" placeholder="Enter Your Email ...">
            <button class="btn btn-primary" type="submit">Subscribe</button>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="bg-dark py-5">
      <div class="container">
        <div class="row text-white g-4">
          <div class="col-md-6 col-lg-3">
            <a class="text-uppercase text-decoration-none brand text-white" href="index.html">Web Project Red Store</a>
            <p class="text-white text-muted mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum mollitia quisquam veniam odit cupiditate, ullam aut voluptas velit dolor ipsam?</p>
          </div>

          <div class="col-md-6 col-lg-3">
            <h5 class="fw-light">Links</h5>
            <ul class="list-unstyled">
              <li class="my-3">
                <a href="#" class="text-white text-decoration-none text-muted">
                  <i class="fas fa-chevron-right me-1"></i> Home
                </a>
              </li>
              <li class="my-3">
                <a href="#" class="text-white text-decoration-none text-muted">
                  <i class="fas fa-chevron-right me-1"></i> Collection
                </a>
                <li class="my-3">
                    <a href="blog.html" class="text-white text-decoration-none text-muted">
                      <i class="fas fa-chevron-right me-1"></i> blog us
                    </a>
                  </li>
              <li class="my-3">
                <a href="about.html" class="text-white text-decoration-none text-muted">
                  <i class="fas fa-chevron-right me-1"></i> About Us
                </a>
              </li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <h5 class="fw-light mb-3">Contact Us</h5>
            <div class="d-flex justify-content-start align-items-start my-2 text-muted">
              <span class="me-3">
                <i class="fas fa-map-marked-alt"></i>
              </span>
              <span class="fw-light">
                University of Management and Technology Johar Town Lahore
              </span>
            </div>
            <div class="d-flex justify-content-start align-items-start my-2 text-muted">
              <span class="me-3">
                <i class="fas fa-envelope"></i>
              </span><br>
              <span class="fw-light">
                f2019105042@umt.edu.pk
                f2019105008@umt.edu.pk
              </span>

            </div>
            <div class="d-flex justify-content-start align-items-start my-2 text-muted">
              <span class="me-3">
                <i class="fas fa-phone-alt"></i>
              </span>
              <span class="fw-light">
                +92 304-6666779
              </span>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <h5 class="fw-light mb-3">Follow Us</h5>
            <div>
              <ul class="list-unstyled d-flex">
                <li>
                  <a href="https://www.instagram.com/malikfahad043/" class="text-white text-decoration-none text-muted fs-4 me-4">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/malikfahad043/" class="text-white text-decoration-none text-muted fs-4 me-4">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/malikfahad043/" class="text-white text-decoration-none text-muted fs-4 me-4">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="https://github.com" class="text-white text-decoration-none text-muted fs-4 me-4">
                    <i class="fab fa-github"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>



</html>
