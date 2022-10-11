<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link href="./css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="./css/fontawesome/css/brands.css" rel="stylesheet">
    <link href="./css/fontawesome/css/solid.css" rel="stylesheet">

    <title>Tienda DeportesCandido</title>
</head>
<body>


<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <h3 class='text-secondary'>Tienda DeportesCandido</h3>
        </div>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <a href='carro.php'>
            <button type="button" class="btn btn-outline-light me-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
            </button>
          </a>
        </div>
      </div>
    </div>
  </header>

  <div class="container mb-5"></div>

  <div class="container">

    <section class="h-100 h-custom" style="background-color: #fff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card">
            <div class="card-body p-4">

              <div class="row">

                <div class="col-lg-7">
                  <h5 class="mb-3"><a href="./index.php" class="text-body"><i
                        class="fas fa-long-arrow-alt-left me-2"></i>Continuar comprando</a></h5>
                  <hr>

                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                      <p class="mb-1">Carrito</p>
                      <p class="mb-0">Tienes xx productos en el carro</p>
                    </div>
                    
                  </div>

                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                          <div>
                            <img
                              src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                              class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                          </div>
                          <div class="ms-3">
                            <h5>Iphone 11 pro</h5>
                            <p class="small mb-0">256GB, Navy Blue</p>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                          <div style="width: 80px;">
                            <i class="fa-solid fa-plus text-secondary"></i>
                            <span class='fs-5'>2</span>
                            <i class="fa-solid fa-minus text-secondary"></i>
                          </div>
                          <div style="width: 80px;">
                            <h5 class="mb-0">$900</h5>
                          </div>
                          <a href="#!" class='text-secondary'><i class="fas fa-trash-alt"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                          <div>
                            <img
                              src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img2.webp"
                              class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                          </div>
                          <div class="ms-3">
                            <h5>Samsung galaxy Note 10 </h5>
                            <p class="small mb-0">256GB, Navy Blue</p>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                        <div style="width: 80px;">
                            <i class="fa-solid fa-plus text-secondary"></i>
                            <span class='fs-5'>1</span>
                            <i class="fa-solid fa-minus text-secondary"></i>
                          </div>
                          <div style="width: 80px;">
                            <h5 class="mb-0">$900</h5>
                          </div>
                          <a href="#!"  class='text-secondary'><i class="fas fa-trash-alt"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                          <div>
                            <img
                              src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img3.webp"
                              class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                          </div>
                          <div class="ms-3">
                            <h5>Canon EOS M50</h5>
                            <p class="small mb-0">Onyx Black</p>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                          <div style="width: 80px;">
                            <i class="fa-solid fa-plus text-secondary"></i>
                            <span class='fs-5'>1</span>
                            <i class="fa-solid fa-minus text-secondary"></i>
                          </div>
                          <div style="width: 80px;">
                            <h5 class="mb-0">$1199</h5>
                          </div>
                          <a href="#!"  class='text-secondary'><i class="fas fa-trash-alt"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-3 mb-lg-0">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                          <div>
                            <img
                              src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img4.webp"
                              class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                          </div>
                          <div class="ms-3">
                            <h5>MacBook Pro</h5>
                            <p class="small mb-0">1TB, Graphite</p>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                          <div style="width: 80px;">
                            <i class="fa-solid fa-plus text-secondary"></i>
                            <span class='fs-5'>1</span>
                            <i class="fa-solid fa-minus text-secondary"></i>
                          </div>
                          <div style="width: 80px;">
                            <h5 class="mb-0">$1799</h5>
                          </div>
                          <a href="#!"  class='text-secondary'><i class="fas fa-trash-alt"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-lg-5">

                  <div class="card bg-secondary text-white rounded-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0">Card details</h5>
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                          class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                      </div>

                      <p class="small mb-2">Card type</p>
                      <a href="#!" type="submit" class="text-white"><i
                          class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i
                          class="fab fa-cc-visa fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i
                          class="fab fa-cc-amex fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                      <form class="mt-4">
                        <div class="form-outline form-white mb-4">
                          <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                            placeholder="Cardholder's Name" />
                          <label class="form-label" for="typeName">Cardholder's Name</label>
                        </div>

                        <div class="form-outline form-white mb-4">
                          <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                            placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                          <label class="form-label" for="typeText">Card Number</label>
                        </div>

                        <div class="row mb-4">
                          <div class="col-md-6">
                            <div class="form-outline form-white">
                              <input type="text" id="typeExp" class="form-control form-control-lg"
                                placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                              <label class="form-label" for="typeExp">Expiration</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-outline form-white">
                              <input type="password" id="typeText" class="form-control form-control-lg"
                                placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                              <label class="form-label" for="typeText">Cvv</label>
                            </div>
                          </div>
                        </div>

                      </form>

                      <hr class="my-4">

                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Subtotal</p>
                        <p class="mb-2">4798.00€</p>
                      </div>

                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Envío</p>
                        <p class="mb-2">20.00€</p>
                      </div>

                      <div class="d-flex justify-content-between mb-4">
                        <p class="mb-2">Total(Incluido IVA)</p>
                        <p class="mb-2">4818.00€</p>
                      </div>

                      <button type="button" class="btn btn-success btn-block btn-lg">
                        <div class="d-flex justify-content-between">
                          <span>4818.00€ &nbsp;</span>
                          <span>Comprar <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                        </div>
                      </button>

                    </div>
                  </div>

                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  </div>

</div>


</body>
</html>