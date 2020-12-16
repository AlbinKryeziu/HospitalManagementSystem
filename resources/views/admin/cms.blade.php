<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
  
        <link href="{{asset('cms-css/cms.css')}}" rel="stylesheet" />
        <link href="{{asset('homepages/assets/css/style.css')}}" rel="stylesheet" />
        <title>CMS</title>
    </head>
    <body>
        <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center"><i class="icofont-clock-time"></i> E Hene - e Shtune 8:00 deri 22:00</div>
                <div class="d-flex align-items-center"><i class="icofont-phone"></i> Thirr tani ne 045-111-111</div>
            </div>
        </div>
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">
                <a href="index.html" class="logo mr-auto"><img src="{{asset('homepages/assets/img/logo3.1.jpg')}}" alt="" /></a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> {{ Auth::user()->name }} <span class="caret"></span> </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a
                                class="dropdown-item"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                            >
                                {{ __('Logout') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('Administrator.welcome')}}">Home</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                logaut @csrf
                            </form>
                        </div>
                    </header>
                        <section id="team" class="pb-5">
                            <div class="container">
                                <h5 class="section-title h1"></h5>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-4 mycard" >
                                        <div class="image-flip">
                                            <div class="mainflip flip-0">
                                                <div class="frontside">
                                                    <div class="card" onclick="window.location='{{route('Administrator.index')}}'">
                                                        <div class="card-body text-center">
                                                            <p><img class="img-fluid" src="{{ asset('image/icc1.png') }}" alt="card image" /></p>
                                                            <h4 class="card-title">Moduli i Pages</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                            <div class="mainflip">
                                                <div class="frontside">
                                                    <div class="card" onclick="window.location='{{route('Spitali.spitali')}}'">
                                                        <div class="card-body text-center">
                                                            <p><img class="img-fluid" src="{{ asset('image/hp1.png') }}" alt="card image" /></p>
                                                            <h4 class="card-title">Moduli i Spitalit</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                            <div class="mainflip">
                                                <div class="frontside">
                                                    <div class="card">
                                                        <div class="card-body text-center">
                                                            <p><img class="img-fluid" src="{{ asset('image/fm1.png') }}" alt="card image" /></p>
                                                            <h4 class="card-title">Moduli i Farmacis</h4>
                                                            <p class="card-text"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </li>
                </ul>
            </div>
    </body>
</html>
