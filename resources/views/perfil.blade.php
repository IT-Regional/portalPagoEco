    @include('styles')
    <!-- ======== sidebar-nav start =========== -->
    @include('menu')
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        <!-- ========== header start ========== -->
        @include('header')
        <!-- ========== header end ========== -->

        <!-- ========== section start ========== -->
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row container d-flex justify-content-center">
                    <div class="col-xl-6 col-md-12" style="width: 85%;">
                        <div class="card user-card-full">
                            <div class="row m-l-0 m-r-0">
                                <div class="col-sm-4 bg-c-lite-green user-profile" style="background-color: black;">
                                    <div class="card-block text-center text-white">
                                        <div class="m-b-25">
                                            <img src="{{ asset('images/profile/profile-image.png')}}" class="img-radius"  alt="">
                                        </div>
                                        <h6 class="f-w-600 text-white">Nombre del Cliente</h6>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card-block">
                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Informacion Personal</h6>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Cliente</p>
                                                <h6 class="text-muted f-w-400">Inmer Vanegas</h6>
                                                <br>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Direccion</p>
                                                <h6 class="text-muted f-w-400">En mi casa</h6>
                                                <br>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Departamento</p>
                                                <h6 class="text-muted f-w-400">San Salvador</h6>
                                                <br>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Email</p>
                                                <h6 class="text-muted f-w-400">inmervanegas22@gmail.com</h6>
                                                <br>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Telefono</p>
                                                <h6 class="text-muted f-w-400">2298-8270</h6>
                                                <br>
                                            </div>
                                        </div>
                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Informacion del Servicio
                                        </h6>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Plan</p>
                                                <h6 class="text-muted f-w-400">INTERNET BUSINESS 1000 Mbps </h6>
                                                <br>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Precio</p>
                                                <h6 class="text-muted f-w-400">$4520.00 </h6>
                                                <br>
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
        <!-- ========== section end ========== -->

        <!-- ========== footer start =========== -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 order-last order-md-first">
                        <div class="copyright text-center text-md-start">
                            <p class="text-sm">
                                Designed and Developed by
                                Click Networks
                                </a>
                            </p>
                        </div>
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- ========== footer end =========== -->
    </main>