
@extends('layouts.layout', ['site_name' => 'Main'])

@section('content')
  @if(isset($_GET['search']))
    @if(count($posts)>0)
        <h2>Результаты по запросу <?=$_GET['search']?></h2>
        <p class="lead">Всего найдено {{ count($posts) }} данных</p>
    @else
        <h2>По запросу <?=$_GET['search']?> Ничего не найдено</h2>
        <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Отоброзить всё</a>
    @endif
  @endif

    <section>
        <div class="container-xxl">

                <div class="img-fluid">
                    <img src="img/main2.png" class="img-fluid" alt="main">
                </div>

        </div>

    </section>
    <section>
        <div class="container-xxl" align="center">
            <h2>Our clients</h2>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row justify-content-between">
                        <div class="col">
                            <div class="card w-100">
                                <img src="img/italian-restaurant1.png" class="card-img-top" alt="client1">
                                <div class="card-body">
                                  <h5 class="card-title">Italian restaurant</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="card w-100">
                                <img src="img/china.png" class="card-img-top" alt="client1">
                                <div class="card-body">
                                  <h5 class="card-title">China restaurant</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="card w-100">
                                <img src="img/sushi.png" class="card-img-top" alt="client1">
                                <div class="card-body">
                                  <h5 class="card-title">Sushi Bar</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="card w-100">
                                <img src="img/fastfood1.png" class="card-img-top" alt="client1">
                                <div class="card-body">
                                  <h5 class="card-title">Fast food</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                        </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row justify-content-between" >
                        <div class="col">
                            <div class="card w-100">
                                <img src="img/images.jpg" class="card-img-top" alt="client1">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="card w-100">
                                <img src="img/images.jpg" class="card-img-top" alt="client1">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="card w-100">
                                <img src="img/images.jpg" class="card-img-top" alt="client1">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="card w-100">
                                <img src="img/images.jpg" class="card-img-top" alt="client1">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                        </div>

                      </div>
                  </div>

                  </div>
                  <div class="carousel-item">
                    <div class="row justify-content-between">
                        <div class="col">
                            <div class="card w-100">
                                <img src="img/images.jpg" class="card-img-top" alt="client1">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="card w-100">
                                <img src="img/images.jpg" class="card-img-top" alt="client1">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="card w-100">
                                <img src="img/images.jpg" class="card-img-top" alt="client1">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="card w-100">
                                <img src="img/images.jpg" class="card-img-top" alt="client1">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                        </div>
                      </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                  </div>

                </div>

              </div>

        </div>

    </section>
    <section>
         <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">

             {{-- <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> --}}
            {{-- </div> --}}


            <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
              <div class="my-3 p-3">
                <h2 class="display-5">Easy settings</h2>
                <p class="lead">And an even wittier subheading.</p>
              </div>
              {{-- <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> --}}
            </div  >

        <div class="container-xxl">
                <div class="row">

                    <div class="col-4">

      <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>

                        <a class="btn btn-outline-secondary" href="#">Get start</a>
                    </div>
                    <div class="col-8">
                        <img class="w-100" src="img/settings.png" class="img-fluid" alt="settings">
                    </div>
                </div>
               </div>

        </div>
    </section>
    <section>
        {{-- <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
              <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> --}}
            {{-- </div> --}}
            <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
              <div class="my-3 p-3">
                <h2 class="display-5">Free domains and hosting</h2>
                <p class="lead">And an even wittier subheading.</p>
              </div>
              {{-- <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> --}}
            </div>

        <div class="container-xxl">

            <div>
                <p class="lh-lg">Food.com сайт который сделал для вас сайт, если вы владелец ресторана, кафе или кафе быстрого питание и вы хотите создать сайт для заказов онлайн то вы просто регистрируетесь называете как вы хотите назвать свой сайт, получаете домен 3го уровня food.example.com. Далее вам отправляется на почту логин и пароль на ваш сайт. Настройки сайта под себя для вас не займет большой проблемы. Все гайды по настройке вы можете посмотреть здесь.   </p>
            </div>
        </div>
    </section>
    <footer class="container py-5">
        <div class="row">
          <div class="col-12 col-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
            <small class="d-block mb-3 text-muted">&copy; 2020-2020</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>

          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>

          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>

          </div>
          <div class="col-6 col-md">
            <h5>About</h5>

          </div>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
@endsection
