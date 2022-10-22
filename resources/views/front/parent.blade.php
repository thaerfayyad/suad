<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WEBSITE</title>
    <meta content="نتميز عن غيرنا بسرعة إنجاز المعاملات وسرعة وصول العاملة إليكم  " name="description">
    <meta content="طباخ ,  سائق  ,ممرض,مربية اطفال , عامل نظافة,حارس امن  , عاملات منزلية" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('front/assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('front/assets/img/logo.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.cs') }}s" rel="stylesheet">

    <link href="{{ asset('front/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <link href="{{ asset('front/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">


    <link href="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <link href="{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('front/assets/css/bootstrap-rtl.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/assets/plugins/toastr/toastr.min.css') }}">

    <style>
        #contact .social-links a {
            display: inline-block;
            background: #FAFAFA;
            color: var(--miancolor);
            line-height: 1;
            margin-right: 4px;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            transition: 0.3s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        #contact .social-links a i {
            line-height: 0;
            font-size: 16px;
        }

        #contact .social-links a:hover {
            background: var(--miancolor);
            color: #fff;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top ">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                {{--  <img src="{{ asset('front/assets/img/logo.png') }}" class="mr-2" alt="">  --}}
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">الصفحة الرئيسية</a></li>
                    <li><a class="nav-link scrollto" href="#about">من نحن</a></li>
                    <li><a class="nav-link scrollto" href="#employment">الصور</a></li>
                      <li><a class="nav-link scrollto" href="{{ url('dashboard') }}">  new </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                    <li><a class="nav-link scrollto" href="#">   </a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            {{--  <div>
                @auth
                    @if (Auth::user()->type == 'super-admin')
                        <a href="{{ route('dashboard.home') }}" class="btn-get-started scrollto mt-0 register ">
                            <span>لوحة تحكم </span>
                        </a>
                    @else
                        <h6 class="btn-get-started scrollto mt-0 register ">
                            <span>{{ Auth::user()->name }} مرحبا!</span>
                        </h6>
                    @endif
                @endauth

                @guest
                    <a href="#" class="btn-get-started scrollto mt-0 login " data-toggle="modal" data-target="#user">
                        <span>تسجيل الدخول</span>
                    </a>
                @endguest

                @auth
                    <a href="{{ route('auth.logout') }}" class="btn-get-started scrollto mt-0 register ">
                        <span>خروج</span>
                    </a>
                @endauth
            </div>  --}}
            {{-- <div>
                <a href="{{ route('auth.login-show') }}" class="btn-get-started scrollto mt-0 login ">
                    <span>تسجيل الدخول</span>
                </a>

            </div> --}}
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <!--  <section id="hero" class="hero d-flex align-items-center ">

    <div class="container mt-5">
      <div class="row d-flex justify-content-center text-center">

        <div class="col-lg-8 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">خيارك الافضل </h2>
          <h1 data-aos="fade-up" data-aos-delay="400"> نتميز عن غيرنا بسرعة إنجاز المعاملات وسرعة وصول العاملة إليكم
          </h1>
        </div>
        <div class="col-lg-5 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('front/assets/img/shape (2).svg') }}" class="img-fluid animation01" alt="">
        </div>
      </div>
    </div>

  </section> -->

    <!-- End Hero -->



    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">ما يميزنا </h1>
                    <!--  <h1 data-aos="fade-up" data-aos-delay="400"> نتميز عن غيرنا بسرعة إنجاز المعاملات وسرعة وصول العاملة إليكم -->
                    <ul class="list-unstyled mt-2" data-aos="fade-up" data-aos-delay="150">
                        <li> <i class="bi bi-check "></i> التواصل الفعال</li>
                        <li> <i class="bi bi-check "></i> خدمة العملاء 24 ساعة</li>
                        <li> <i class="bi bi-check "></i> طاقم عمل مٌدرب</li>
                        <li> <i class="bi bi-check "></i> توفر مترجم </li>
                        <li> <i class="bi bi-check "></i> سير ذاتية بخيارات متعددة </li>
                        <li> <i class="bi bi-check "></i> حل المشكلات خلال مدة العقد (سنتين)</li>
                        <li> <i class="bi bi-check "></i> الوصول خلال فترة وجيزة </li>
                        <li> <i class="bi bi-check "></i> سرعه الانجاز والتواصل الفعال خلال مده العقد معك</li>
                    </ul>
                </div>
                <div class="col-md-6 hero-img aos-init aos-animate p-md-5" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('front/assets/img/people.svg') }}" class="img-fluid animation01" alt="">
                </div>
            </div>
        </div>

    </section>


    <main id="main">
        <!-- ======= About Section ======= -->


        <!-- ======= service Section ======= -->



        <!-- ======= why Section ======= -->
        <section id="employment" class="employment ">
            <div class="container pr-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-9">
                        <header class="section-header text-center">
                            <h2>  الصور   </h2>
                            <p>جميع الصور       </p>
                            <form action="{{ route('home') }}" method="get" class="mt-5">

                                <div class="row">

                                    <div class="col-md-6">
                                        <input type="text" name="search" class="form-control" placeholder="بحث" value="{{ request()->search }}">

                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="form-control btn btn-primary"><i class="fa fa-search"></i>بحث</button>
                                    </div>

                                </div>
                            </form><!-- end of form -->

                        </header>
                    </div>
                </div>

                <div class="row">

                    @foreach ($Services as $service)
                        <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <img src="{{ $service->image_path }}" class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4> {{ $service->key }} <h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
            </div>
        </section>

        <!--  <div class="feat" id="feat">
      <div class="container">
        <div class="row d-flex align-items-center">

          <div class="col-md-6 " data-aos="fade-up" data-aos-delay="200">
            <h2>ما يميزنا</h2>
            <ul class="list-unstyled">
              <li> <i class="bi bi-check "></i> توفر مترجم </li>
              <li> <i class="bi bi-check "></i> التواصل الفعال</li>
              <li> <i class="bi bi-check "></i> طاقم عمل مٌدرب</li>
              <li> <i class="bi bi-check "></i> خدمة العملاء 24 ساعة</li>
              <li> <i class="bi bi-check "></i> الوصول خلال فترة وجيزة </li>
              <li> <i class="bi bi-check "></i> سير ذاتية بخيارات متعددة </li>
              <li> <i class="bi bi-check "></i> حل المشكلات خلال مدة العقد (سنتين)</li>
              <li> <i class="bi bi-check "></i> سرعه الانجاز والتواصل الفعال خلال مده العقد معك</li>
            </ul>
          </div>
          <div class="col-lg-6 mt-lg-0 mt-3  p-5 d-flex flex-column justify-content-center" data-aos="zoom-in"
            data-aos-delay="200">
            <img src="{{ asset('front/assets/img/undraw_at_the_park_-2-e47.svg') }}" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </div> -->

        <!-- ======= Clients Section ======= -->



        <!-- End why Section -->





    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright">
                © جميع الحقوق محفوظة {{ date("Y") }}
            </div>
        </div>
        </div>
    </footer><!-- End Footer -->




    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center align-items-center">

                        <div class="card">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item text-center">
                                    <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill"
                                        href="#pills-home" role="tab" aria-controls="pills-home"
                                        aria-selected="true">تسجيل الدخول</a>
                                </li>
                                <li class="nav-item text-center">
                                    <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill"
                                        href="#pills-profile" role="tab" aria-controls="pills-profile"
                                        aria-selected="false">حساب جديد</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="form px-4 pt-5">
                                        <input type="email" id="email" class="form-control"
                                            placeholder="Email">
                                        <input type="password" id="password" class="form-control"
                                            placeholder="Password">
                                        <button type="button" onclick="login()"
                                            class="btn btn-success btn-block w-100">تسجيل الدخول</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">

                                    <div class="form px-4">

                                        <input type="text" id="name" class="form-control"
                                            placeholder="Name">

                                        <input type="email" id="email_adress" class="form-control"
                                            placeholder="Email">

                                        <input type="password" id="password" class="form-control"
                                            placeholder="Password">

                                        <button type="button" onclick="register()"
                                            class="btn btn-success btn-block w-100">انشاء حساب جديد</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('front/assets/js/main.js') }}"></script>
    <script src="{{ asset('/js/crud.js') }}"></script>
    <script src="{{ asset('/js/axios.js') }}"></script>
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/sweetalert.js') }}"></script>

    <script src="{{ asset('front/assets/plugins/toastr/toastr.min.js') }}"></script>


    <script>
        function login() {
            axios.post('/dashboard/login', {
                    email: document.getElementById('email').value,
                    password: document.getElementById('password').value,


                }).then(function(response) {
                    window.location.href = '/';
                })
                .catch(function(error) {
                    toastr.error(error.response.data.message)
                });
        }

        function register() {
            axios.post('/dashboard/register', {
                    name: document.getElementById('name').value,
                    email: document.getElementById('email_adress').value,
                    password: document.getElementById('password').value,


                }).then(function(response) {
                    window.location.href = '/';
                })
                .catch(function(error) {
                    toastr.error(error.response.data.message)
                });
        }
    </script>
</body>

</html>
