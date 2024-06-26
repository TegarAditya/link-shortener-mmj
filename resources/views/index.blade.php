<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Bupin Shortener</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=5fe79462834491b3bde4026987c3b88c">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
</head>

<body>
    <!-- Start: Navbar Centered Links -->
    <nav class="navbar navbar-expand-md fixed-top navbar-shrink py-3 navbar-light" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/">
                <span>Bupin Shortener</span>
            </a>
            <ul class="navbar-nav mx-auto"></ul><a class="btn btn-primary shadow" role="button"
                href="{{ url('/dashboard') }}">
                @auth
                    Dashboard
                @else
                    Login
                @endauth
            </a>
        </div>
    </nav><!-- End: Navbar Centered Links -->
    <header class="pt-5">
        <!-- Start: Hero Clean Reverse -->
        <div class="container pt-4 pt-xl-5">
            <div class="row pt-5">
                <div class="col-md-8 text-center text-md-start mx-auto">
                    <div class="d-flex justify-content-center display-4 w-25 mx-auto my-3">
                        <img src="/assets/img/illustrations/logo.png" alt="Logo" class="img-fluid">
                    </div>
                    <div class="text-center">
                        <h1 class="display-4 fw-bold mb-5" style="height: 9rem; overflow: hidden;">
                            <span class="my-auto" id="element"></span>
                        </h1>
                        <p class="fs-5 text-muted mb-5">Say goodbye to long, cumbersome URLs and hello to sleek,
                            memorable links tailored to your exact needs.</p>
                    </div>
                    <form class="d-flex justify-content-between flex-wrap" method="get" action="/" data-bs-theme="light">
                        <div class="shadow-lg mb-3 flex-fill">
                            <input class="form-control" type="url" name="link"placeholder="https://yourdomain.id/very-long-links" required readonly/>
                        </div>
                        <div class="shadow-lg mb-3">
                            <button class="btn btn-primary" type="submit">Shorten</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="text-center position-relative"><img class="img-fluid"
                            src="/assets/img/illustrations/teamwork.svg?h=c9d16670db4191bc86105dabde77d312"
                            style="width: 800px;"></div>
                </div>
            </div>
        </div><!-- End: Hero Clean Reverse -->
    </header>
    <section></section>
    <section></section>
    <section></section><!-- Start: Banner Heading Image -->
    <section class="py-4 py-xl-5">
        <!-- Start: 1 Row 2 Columns -->
        <div class="container">
            <div class="bg-primary border rounded border-0 border-primary overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div class="text-white p-4 p-md-5">
                            <h2 class="fw-bold mb-3">Unlimited customization at ease.</h2>
                            <p class="mb-4">Introducing our revolutionary link shortener service with unlimited
                                customization options!&nbsp;</p>
                            <div class="my-3">
                                <a class="btn btn-secondary me-2 mt-2" role="button" href="{{ url('/dashboard') }}">
                                    @auth
                                        Go To Dashboard
                                    @else
                                        Login
                                    @endauth
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-first order-md-last" style="min-height: 250px;"><img
                            class="w-100 h-100 fit-contain pt-5 pt-md-0"
                            src="/assets/img/illustrations/web-development.svg?h=b53e17a605148633758769f0842db9a4">
                    </div>
                </div>
            </div>
        </div><!-- End: 1 Row 2 Columns -->
    </section><!-- End: Banner Heading Image -->
    <!-- Start: FAQ -->
    <section class="py-4 py-xl-5 mb-5">
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="display-6 fw-bold mb-5"><span class="pb-3 underline">FAQ<br></span></h2>
                    <p class="text-muted mb-5">Do you have any questions? Maybe this section can help you find what
                        you're looking for</p>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-8 mx-auto">
                    <div class="accordion text-muted" role="tablist" id="accordion-1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1"
                                    aria-expanded="true" aria-controls="accordion-1 .item-1">How is it different from
                                    services like &nbsp;<span class="underline">bit.ly and s.id</span>?</button></h2>
                            <div class="accordion-collapse collapse item-1" role="tabpanel"
                                data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <p class="mb-0">It's not too different, as it was created for a similar purpose.
                                        But now you can
                                        edit anything from original links to shortened links. No subscription required.
                                        Enjoy!</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-2"
                                    aria-expanded="false" aria-controls="accordion-1 .item-2">Are these services
                                    publicly available?</button></h2>
                            <div class="accordion-collapse collapse item-2" role="tabpanel"
                                data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <p class="mb-0">For now, sorry not yet. But we'll see what the future holds.</p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-3"
                                    aria-expanded="false" aria-controls="accordion-1 .item-3">Iaculis accumsan id,
                                    facilisis proin ipsum velit neque?</button></h2>
                            <div class="accordion-collapse collapse item-3" role="tabpanel"
                                data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <p class="mb-0">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo
                                        odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                        gravida at eget metus.</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End: FAQ -->
    <!-- Start: Contact Us Banner -->
    <section class="py-4 py-xl-5">
        <div class="container">
            <div
                class="text-white bg-primary border rounded border-0 border-primary d-flex flex-column justify-content-between flex-lg-row p-4 p-md-5">
                <div class="pb-2 pb-lg-1">
                    <h2 class="fw-bold text-secondary mb-2">Not sure which plan suits you?</h2>
                    <p class="mb-0">Imperdiet consectetur dolor, tristique himenaeos ultrices tristique neque.</p>
                </div>
                <div class="my-2"><a class="btn btn-light fs-5 py-2 px-4" role="button"
                        href="contacts.html">Contact us</a></div>
            </div>
        </div>
    </section><!-- End: Contact Us Banner -->
    <!-- Start: Footer Multi Column -->
    <footer>
        <div class="container py-4 py-lg-5">
            <div class="row row-cols-md-4">
                <!-- Start: Social Icons -->
                <div class="col-12 col-md-6">
                    <div class="fw-bold d-flex align-items-center mb-2"><span>Powered by PT Margo Mitro Joyo</span>
                    </div>
                    <p class="text-muted">Jl. Watuburik No.10, Watuburik, Wonorejo, Kec. Gondangrejo, Kabupaten
                        Karanganyar, Jawa Tengah 57188<br>Indonesia</p>
                </div><!-- End: Social Icons -->
            </div>
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Copyright © 2024 PT Margo Mitro Joyo</p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                            height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951">
                            </path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                            height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15">
                            </path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                            height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334">
                            </path>
                        </svg></li>
                </ul>
            </div>
        </div>
    </footer><!-- End: Footer Multi Column -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="/assets/js/script.min.js?h=4b1f99f2e8ff6ac8a7c04891f6b7129c"></script>
    <script>
        var typed = new Typed('#element', {
            strings: ['Shorten your <br> <span class="font-monospace text-danger">drive.google.com/...</span>', 'As short as <br> <span class="font-monospace text-success">s.bupin.id/myLink*</span>'],
            typeSpeed: 50,
        });
    </script>
</body>

</html>
