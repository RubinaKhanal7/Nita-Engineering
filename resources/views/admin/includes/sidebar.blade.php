<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" aria-label="Toggle Navigation" data-bs-original-title="Toggle Navigation"><span
                    class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        </div><a class="navbar-brand" href="{{ route('admin.index') }}">
            <div class="d-flex align-items-center py-3"><img class="me-2"
                    src="{{ asset('adminassets/assets/img/icons/spot-illustrations/falcon.png') }}" alt=""
                    width="40"><span class="font-sans-serif">Admin</span></div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard" role="button"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-chart-pie fa-w-17" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="chart-pie" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 544 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M527.79 288H290.5l158.03 158.03c6.04 6.04 15.98 6.53 22.19.68 38.7-36.46 65.32-85.61 73.13-140.86 1.34-9.46-6.51-17.85-16.06-17.85zm-15.83-64.8C503.72 103.74 408.26 8.28 288.8.04 279.68-.59 272 7.1 272 16.24V240h223.77c9.14 0 16.82-7.68 16.19-16.8zM224 288V50.71c0-9.55-8.39-17.4-17.84-16.06C86.99 51.49-4.1 155.6.14 280.37 4.5 408.51 114.83 513.59 243.03 511.98c50.4-.63 96.97-16.87 135.26-44.03 7.9-5.6 8.42-17.23 1.57-24.08L224 288z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-chart-pie"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Dashboard</span></div>
                    </a>
                    <ul class="nav collapse show" id="dashboard">
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.sitesetting.index') }}">
                            <div class="d-flex align-items-center"><span
                                    class="nav-link-text ps-1">SiteSetting</span></div>
                        </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.coverimage.index') }}">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cover
                                    Image</span></div>
                        </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Background
                                    Image</span></div>
                        </a><!-- more inner pages-->
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.about.index') }}">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">About Us</span>
                            </div>
                        </a><!-- more inner pages-->
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.mvc.index') }}">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Mission Vision
                                    & Values</span></div>
                        </a><!-- more inner pages-->
                    </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Site</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider">
                        </div>
                    </div><!-- parent pages-->


                    {{-- <a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="email">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-wrench fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="wrench" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M507.73 109.1c-2.24-9.03-13.54-12.09-20.12-5.51l-74.36 74.36-67.88-11.31-11.31-67.88 74.36-74.36c6.62-6.62 3.43-17.9-5.66-20.16-47.38-11.74-99.55.91-136.58 37.93-39.64 39.64-50.55 97.1-34.05 147.2L18.74 402.76c-24.99 24.99-24.99 65.51 0 90.5 24.99 24.99 65.51 24.99 90.5 0l213.21-213.21c50.12 16.71 107.47 5.68 147.37-34.22 37.07-37.07 49.7-89.32 37.91-136.73zM64 472c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z">
                                    </path>
                                </svg>
                         
                            </span><span
                                class="nav-link-text ps-1">SiteSetting</span></div>
                    </a>
                    <ul class="nav collapse" id="email">
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.sitesetting.index') }}">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">SiteSetting</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.coverimage.index') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cover
                                        Image</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Background
                                        Image</span></div>
                            </a><!-- more inner pages-->
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.about.index') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">About Us</span>
                                </div>
                            </a><!-- more inner pages-->
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.mvc.index') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Mission Vision
                                        & Values</span></div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul> --}}
                    <!-- parent pages-->

                    <!-- parent pages--><a class="nav-link" href="{{ route('admin.pricing.index') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-calendar-alt fa-w-14" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="calendar-alt" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-calendar-alt"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Pricing</span></div>
                    </a><!-- parent pages--><a class="nav-link" href="{{ route('admin.categories.index') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-thumbtack fa-w-12" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="thumbtack" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M298.028 214.267L285.793 96H328c13.255 0 24-10.745 24-24V24c0-13.255-10.745-24-24-24H56C42.745 0 32 10.745 32 24v48c0 13.255 10.745 24 24 24h42.207L85.972 214.267C37.465 236.82 0 277.261 0 328c0 13.255 10.745 24 24 24h136v104.007c0 1.242.289 2.467.845 3.578l24 48c2.941 5.882 11.364 5.893 14.311 0l24-48a8.008 8.008 0 0 0 .845-3.578V352h136c13.255 0 24-10.745 24-24-.001-51.183-37.983-91.42-85.973-113.733z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-comments"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Category</span></div>
                    </a>
                    <a class="nav-link" href="{{ route('admin.posts.index') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-file-alt fa-w-12" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="file-alt" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-calendar-alt"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Post</span></div>
                    </a>
                    <a class="nav-link" href="{{ route('admin.vacancies.index') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-file-alt fa-w-12" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="file-alt" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-calendar-alt"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Vacancy</span></div>
                    </a>
                    <a class="nav-link" href="{{ route('admin.applications.index') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-file-alt fa-w-12" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="file-alt" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-calendar-alt"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Application</span></div>
                    </a>
                    <a class="nav-link" href="{{ route('admin.faq.index') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-comments fa-w-18" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="comments" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-comments"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">FAQ</span></div>
                    </a>
                    <a class="nav-link" href="{{ route('admin.service.index') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-rocket fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="rocket" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M505.12019,19.09375c-1.18945-5.53125-6.65819-11-12.207-12.1875C460.716,0,435.507,0,410.40747,0,307.17523,0,245.26909,55.20312,199.05238,128H94.83772c-16.34763.01562-35.55658,11.875-42.88664,26.48438L2.51562,253.29688A28.4,28.4,0,0,0,0,264a24.00867,24.00867,0,0,0,24.00582,24H127.81618l-22.47457,22.46875c-11.36521,11.36133-12.99607,32.25781,0,45.25L156.24582,406.625c11.15623,11.1875,32.15619,13.15625,45.27726,0l22.47457-22.46875V488a24.00867,24.00867,0,0,0,24.00581,24,28.55934,28.55934,0,0,0,10.707-2.51562l98.72834-49.39063c14.62888-7.29687,26.50776-26.5,26.50776-42.85937V312.79688c72.59753-46.3125,128.03493-108.40626,128.03493-211.09376C512.07526,76.5,512.07526,51.29688,505.12019,19.09375ZM384.04033,168A40,40,0,1,1,424.05,128,40.02322,40.02322,0,0,1,384.04033,168Z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-calendar-alt"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Services</span></div>
                    </a>
                    <a class="nav-link" href="{{ route('admin.team.index') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-user fa-w-14" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="user" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-comments"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Team</span></div>
                    </a>
                    <a class="nav-link" href="{{ route('admin.news.index') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-ticket-alt fa-w-18" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="ticket-alt" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M128 160h320v192H128V160zm400 96c0 26.51 21.49 48 48 48v96c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48v-96c26.51 0 48-21.49 48-48s-21.49-48-48-48v-96c0-26.51 21.49-48 48-48h480c26.51 0 48 21.49 48 48v96c-26.51 0-48 21.49-48 48zm-48-104c0-13.255-10.745-24-24-24H120c-13.255 0-24 10.745-24 24v208c0 13.255 10.745 24 24 24h336c13.255 0 24-10.745 24-24V152z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-calendar-alt"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">News</span></div>
                    </a>
                    <a class="nav-link" href="{{ route('admin.legaldocument.index') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-layer-group fa-w-16" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="layer-group" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M12.41 148.02l232.94 105.67c6.8 3.09 14.49 3.09 21.29 0l232.94-105.67c16.55-7.51 16.55-32.52 0-40.03L266.65 2.31a25.607 25.607 0 0 0-21.29 0L12.41 107.98c-16.55 7.51-16.55 32.53 0 40.04zm487.18 88.28l-58.09-26.33-161.64 73.27c-7.56 3.43-15.59 5.17-23.86 5.17s-16.29-1.74-23.86-5.17L70.51 209.97l-58.1 26.33c-16.55 7.5-16.55 32.5 0 40l232.94 105.59c6.8 3.08 14.49 3.08 21.29 0L499.59 276.3c16.55-7.5 16.55-32.5 0-40zm0 127.8l-57.87-26.23-161.86 73.37c-7.56 3.43-15.59 5.17-23.86 5.17s-16.29-1.74-23.86-5.17L70.29 337.87 12.41 364.1c-16.55 7.5-16.55 32.5 0 40l232.94 105.59c6.8 3.08 14.49 3.08 21.29 0L499.59 404.1c16.55-7.5 16.55-32.5 0-40z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-comments"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Legal Documents</span></div>
                    </a>
                    <a class="nav-link" href="{{ route('admin.client.index') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-graduation-cap fa-w-20" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="graduation-cap" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M622.34 153.2L343.4 67.5c-15.2-4.67-31.6-4.67-46.79 0L17.66 153.2c-23.54 7.23-23.54 38.36 0 45.59l48.63 14.94c-10.67 13.19-17.23 29.28-17.88 46.9C38.78 266.15 32 276.11 32 288c0 10.78 5.68 19.85 13.86 25.65L20.33 428.53C18.11 438.52 25.71 448 35.94 448h56.11c10.24 0 17.84-9.48 15.62-19.47L82.14 313.65C90.32 307.85 96 298.78 96 288c0-11.57-6.47-21.25-15.66-26.87.76-15.02 8.44-28.3 20.69-36.72L296.6 284.5c9.06 2.78 26.44 6.25 46.79 0l278.95-85.7c23.55-7.24 23.55-38.36 0-45.6zM352.79 315.09c-28.53 8.76-52.84 3.92-65.59 0l-145.02-44.55L128 384c0 35.35 85.96 64 192 64s192-28.65 192-64l-14.18-113.47-145.03 44.56z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-comments"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Client</span></div>
                    </a>


                    <a class="nav-link dropdown-indicator" href="#events" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="events">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-palette fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="palette" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M204.3 5C104.9 24.4 24.8 104.3 5.2 203.4c-37 187 131.7 326.4 258.8 306.7 41.2-6.4 61.4-54.6 42.5-91.7-23.1-45.4 9.9-98.4 60.9-98.4h79.7c35.8 0 64.8-29.6 64.9-65.3C511.5 97.1 368.1-26.9 204.3 5zM96 320c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm32-128c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128-64c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 64c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-calendar-day"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Gallery</span></div>
                    </a>
                    <ul class="nav collapse" id="events">
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.gallery.index') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Images</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.video.index') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Videos</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>



                    <!-- parent pages-->
                    <a class="nav-link" href="{{ route('admin.project.index') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-code-branch fa-w-12" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="code-branch" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M384 144c0-44.2-35.8-80-80-80s-80 35.8-80 80c0 36.4 24.3 67.1 57.5 76.8-.6 16.1-4.2 28.5-11 36.9-15.4 19.2-49.3 22.4-85.2 25.7-28.2 2.6-57.4 5.4-81.3 16.9v-144c32.5-10.2 56-40.5 56-76.3 0-44.2-35.8-80-80-80S0 35.8 0 80c0 35.8 23.5 66.1 56 76.3v199.3C23.5 365.9 0 396.2 0 432c0 44.2 35.8 80 80 80s80-35.8 80-80c0-34-21.2-63.1-51.2-74.6 3.1-5.2 7.8-9.8 14.9-13.4 16.2-8.2 40.4-10.4 66.1-12.8 42.2-3.9 90-8.4 118.2-43.4 14-17.4 21.1-39.8 21.6-67.9 31.6-10.8 54.4-40.7 54.4-75.9zM80 64c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16 7.2-16 16-16zm0 384c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zm224-320c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16 7.2-16 16-16z">
                                    </path>
                                </svg>
                                <!-- <span class="fab fa-trello"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Projects</span></div>
                    </a>
                    <a class="nav-link" href="{{ route('admin.testimonial.index') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-fire fa-w-12" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="fire" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M216 23.86c0-23.8-30.65-32.77-44.15-13.04C48 191.85 224 200 224 288c0 35.63-29.11 64.46-64.85 63.99-35.17-.45-63.15-29.77-63.15-64.94v-85.51c0-21.7-26.47-32.23-41.43-16.5C27.8 213.16 0 261.33 0 320c0 105.87 86.13 192 192 192s192-86.13 192-192c0-170.29-168-193-168-296.14z">
                                    </path>
                                </svg>
                                <!-- <span class="fab fa-trello"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Testimonials</span></div>
                    </a>
                    <a class="nav-link" href="{{ route('admin.contact.index') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-shopping-cart fa-w-18" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="shopping-cart" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z">
                                    </path>
                                </svg>
                                <!-- <span class="fab fa-trello"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Contact Request</span></div>
                    </a>
                </li>

                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Pages</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider">
                        </div>
                    </div><!-- parent pages--><a class="nav-link" href="pages/starter.html" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-flag fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="flag" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M349.565 98.783C295.978 98.783 251.721 64 184.348 64c-24.955 0-47.309 4.384-68.045 12.013a55.947 55.947 0 0 0 3.586-23.562C118.117 24.015 94.806 1.206 66.338.048 34.345-1.254 8 24.296 8 56c0 19.026 9.497 35.825 24 45.945V488c0 13.255 10.745 24 24 24h16c13.255 0 24-10.745 24-24v-94.4c28.311-12.064 63.582-22.122 114.435-22.122 53.588 0 97.844 34.783 165.217 34.783 48.169 0 86.667-16.294 122.505-40.858C506.84 359.452 512 349.571 512 339.045v-243.1c0-23.393-24.269-38.87-45.485-29.016-34.338 15.948-76.454 31.854-116.95 31.854z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-flag"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Starter</span></div>
                    </a>
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#authentication" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-lock fa-w-14" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="lock" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-lock"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Authentication</span></div>
                    </a>
                    <ul class="nav collapse" id="authentication">
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#simple"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Simple</span>
                                </div>
                            </a><!-- more inner pages-->
                            <ul class="nav collapse" id="simple">
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/simple/login.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Login</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/simple/logout.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Logout</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/simple/reset-password.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset
                                                password</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/simple/lock-screen.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock
                                                screen</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#card"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Card</span>
                                </div>
                            </a><!-- more inner pages-->
                            <ul class="nav collapse" id="card">
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/card/login.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Login</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/logout.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Logout</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/register.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Register</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/forgot-password.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot
                                                password</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/confirm-mail.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Confirm mail</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/reset-password.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset
                                                password</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/lock-screen.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock
                                                screen</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#split"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Split</span>
                                </div>
                            </a><!-- more inner pages-->
                            <ul class="nav collapse" id="split">
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/split/login.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Login</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/split/logout.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Logout</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/split/register.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Register</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/split/forgot-password.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot
                                                password</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/split/confirm-mail.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Confirm mail</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/split/reset-password.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset
                                                password</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/split/lock-screen.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock
                                                screen</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/wizard.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#authentication-modal"
                                data-bs-toggle="modal">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modal</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages-->

                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Modules</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider">
                        </div>
                    </div>

                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#tables" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="tables">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-table fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="table" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-table"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-1">Tables</span></div>
                    </a>
                    <ul class="nav collapse" id="tables">
                        <li class="nav-item"><a class="nav-link" href="modules/tables/basic-tables.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Basic
                                        tables</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/tables/advance-tables.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance
                                        tables</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/tables/bulk-select.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bulk
                                        select</span></div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>
                </li>

        </div>
    </div>
</nav>
