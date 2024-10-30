@extends('layouts.master')
@section('tittle','Dashboard')
@section('content')
<div class="container-fluid py-4">
  <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
              <div class="card-body p-3">
                  <div class="row">
                      <div class="col-8">
                          <div class="numbers">
                              <p class="text-sm mb-0 text-uppercase font-weight-bold">Menu</p>
                              <h5 class="font-weight-bolder">
                                  $53,000
                              </h5>
                              <p class="mb-0">
                                  <span class="text-success text-sm font-weight-bolder">+55%</span>
                                  since yesterday
                              </p>
                          </div>
                      </div>
                      <div class="col-4 text-end">
                          <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                              <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
              <div class="card-body p-3">
                  <div class="row">
                      <div class="col-8">
                          <div class="numbers">
                              <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Penjualan</p>
                              <h5 class="font-weight-bolder">
                                  2,300
                              </h5>
                              <p class="mb-0">
                                  <span class="text-success text-sm font-weight-bolder">+3%</span>
                                  since last week
                              </p>
                          </div>
                      </div>
                      <div class="col-4 text-end">
                          <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                              <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="row mt-4">

      <div class="col-lg-5">
          <div class="card card-carousel overflow-hidden h-100 p-0">
              <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                  <div class="carousel-inner border-radius-lg h-100">
                      <div class="carousel-item h-100 active" style="background-image: url('./assets/img/carousel-1.jpg');
background-size: cover;">
                          <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                              <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                  <i class="ni ni-camera-compact text-dark opacity-10"></i>
                              </div>
                              <h5 class="text-white mb-1">Get started with Argon</h5>
                              <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.</p>
                          </div>
                      </div>
                      <div class="carousel-item h-100" style="background-image: url('./assets/img/carousel-2.jpg');
background-size: cover;">
                          <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                              <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                  <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                              </div>
                              <h5 class="text-white mb-1">Faster way to create web pages</h5>
                              <p>That’s my skill. I’m not really specifically talented at anything except for the ability to learn.</p>
                          </div>
                      </div>
                      <div class="carousel-item h-100" style="background-image: url('./assets/img/carousel-3.jpg');
background-size: cover;">
                          <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                              <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                  <i class="ni ni-trophy text-dark opacity-10"></i>
                              </div>
                              <h5 class="text-white mb-1">Share with us your design tips!</h5>
                              <p>Don’t be afraid to be wrong because you can’t learn anything from a compliment.</p>
                          </div>
                      </div>
                  </div>
                  <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                  </button>
              </div>
          </div>
      </div>
  </div>
  <div class="row mt-4">
      <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card ">
              <div class="card-header pb-0 p-3">
                  <div class="d-flex justify-content-between">
                      <h6 class="mb-2">Data stok penjualan </h6>
                  </div>
              </div>
              <div class="table-responsive">
                  <table class="table align-items-center ">
                      <thead>
                          <tr>
                              <th>id</th>
                              <th>menu</th>
                              <th>stok</th>
                              <th>status</th>

                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="w-30">
                                  <div class="d-flex px-2 py-1 align-items-center">
                                      <div>
                                         
                                      </div>
                                      <div class="ms-4">
                                          <p class="text-xs font-weight-bold mb-0">0</p>
                                          <h6 class="text-sm mb-0"></h6>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div>
                                      <p class="text-xs font-weight-bold mb-0">americano</p>
                                      <h6 class="text-sm mb-0"></h6>
                                  </div>
                              </td>
                              <td>
                                  <div>
                                      <p class="text-xs font-weight-bold mb-0">5</p>
                                      <h6 class="text-sm mb-0"></h6>
                                      <td><a class="btn btn-warning" href="/">Kurang</a>
                                  </div>
                              </td>

                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>

      <footer class="footer pt-3  ">
          <div class="container-fluid">
              <div class="row align-items-center justify-content-lg-between">
                  <div class="col-lg-6 mb-lg-0 mb-4">
                      <div class="copyright text-center text-sm text-muted text-lg-start">
                          © <script>
                              document.write(new Date().getFullYear())
                          </script>,
                          made with <i class="fa fa-heart"></i> by
                          <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Winda aulia</a>
                          for a better web.
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                          <li class="nav-item">
                              <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                          </li>
                          <li class="nav-item">
                              <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                          </li>
                          <li class="nav-item">
                              <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                          </li>
                          <li class="nav-item">
                              <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </footer>
  </div>

@endsection