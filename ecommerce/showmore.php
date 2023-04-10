<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>

  <header class="section-header">
    <section class="header-main border-bottom py-2">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-2 col-4">
            <a href="#" class="brand-wrap">
              <img class="logo" src="image/logo.png" alt="logo">

            </a>

          </div>

          <div class="col-lg-10 col-sm-6 col-12">
            <div class="d-flex justify-content-end">
              <ul class="nav">
                <li class="nav-item me-3 pe-3">
                  <button type="button" class="btn btn-primary position-relative" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="fa-solid fa-cart-shopping"></i><span
                      class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary"></span>

                  </button>
                </li>
                <li class="nav-item me-2">
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <i class="fa-solid fa-user"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item">Change Password</li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a href="" class="dropdown-item">Long Out</a></li>
                    </ul>
                  </div>

                </li>

              </ul>
            </div>
          </div>


        </div>
      </div>



    </section>

  </header>


  <main class="mt-5">
    <div class="container">

      <div class="card mb-3 mx-auto" style="max-width: 850px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="" alt="..." class="mt-2" style="height: 300px;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-uppercase"><i class="fas fa-mobile-alt"></i>Display: <span
                    class="fw-bolder ps-2"></span></li>
                <li class="list-group-item text-uppercase"><i class="fa-solid fa-battery-full"></i>Battery <span
                    class="fw-bolder ps-2"></span></li>
                <li class="list-group-item text-uppercase"><i class="fa-solid fa-database"></i>RAM: <span
                    class="fw-bolder ps-2"></span></li>
                <li class="list-group-item text-uppercase"><i class="fa-solid fa-camera"></i>Camera: <span
                    class="fw-bolder ps-2"></span></li>
                <li class="list-group-item text-uppercase"><i class="fas fa-money-check-alt "></i> Price: <span
                    class="fw-bolder ps-2"> €
                  </span></li>

              </ul>
              <div class="container">
                <div class="row justify-content-md-center">
                  <div class="col-md-auto">
                    <form action="" method="POST">
                      <div class="">
                        <input type="number" name="quantity" class="form-control form-control-sm px-0 ms-5" value="1"
                          min="1" aria-describedby="button-addon2">
                        <input type="hidden" name="hidden_name">
                        <input type="hidden" name="hidden_price">
                        <input type="hidden" name="hidden_id">
                        <button class="btn btn-sm btn-primary px-5 me-5 me-5" name="add_to_cart" type="submit"
                          id="button-addon2"><i class="fa-solid fa-cart-plus"></i> Add To Card</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--modal for shoping card-->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="table-responsive">
                <div class="right">
                  <a class="btn btn-danger btn-sm mb-1" href="#"><b>Clear Cart <i class="fa-solid fa-trash"></i></b></a>
                </div>
                <table class="table table-bordered">
                  <tr>
                    <th width="40%">Item Name</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price</th>
                    <th width="15%">Total</th>
                    <th width="5%">Action</th>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <td></td>
                  <td></td>
                  <td></td>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>




  <!--JQUERY-->
  <script src="//code.jquery.com/jquery-3.6.4.min.js"></script>
  <!--BOOSTRAP-->
  <script src="https://kit.fontawesome.com/aa362aafc6.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</body>

</html>
