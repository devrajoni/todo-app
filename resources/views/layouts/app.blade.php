<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <x-ui.meta />
    <title>{{ config('app.name') }} | {{__('Organize your work and life, finally.')}}</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico" ') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/backend-plugin.min.css?v=1.0.0') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/backend.css?v=1.0.0') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/fonts/remixicon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/@icon/dripicons/dripicons.css') }}" />
</head>

<body class="noteplus-layout">
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <div class="right-sidebar-mini right-sidebar">
        <div class="right-sidebar-panel p-0">
            <div class="right-sidebar-toggle bg-primary mt-3" data-extra-toggle="right-sidebar-dissmiss">
                <i class="ri-arrow-left-line side-left-icon"></i>
                <i class="ri-close-fill side-right-icon"></i>
            </div>
            <div class="card shadow-none tag-details mb-0">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title mb-0">Tag List</h4>
                    </div>
                    <div>
                        <a href="#" data-toggle="modal" data-target="#create-note"><i
                                class="ri-add-line font-size-20"></i></a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="list-inline p-3 m-0 pb-0">
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-success">A</div>
                                    <h5>Afternoon</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton1"
                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none"
                                        aria-labelledby="tag-dropdownMenuButton1" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                            href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                            href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-danger">B</div>
                                    <h5>Book</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton2"
                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none"
                                        aria-labelledby="tag-dropdownMenuButton2" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                            href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                            href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-purple">C</div>
                                    <h5>Cupcake</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton3"
                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none"
                                        aria-labelledby="tag-dropdownMenuButton3" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                            href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                            href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-info">D</div>
                                    <h5>Dinner</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton4"
                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none"
                                        aria-labelledby="tag-dropdownMenuButton4" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                            href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                            href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-warning">E</div>
                                    <h5>Evening Snacks</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton5"
                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none"
                                        aria-labelledby="tag-dropdownMenuButton5" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                            href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                            href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-success">F</div>
                                    <h5>Fast Track</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton6"
                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none"
                                        aria-labelledby="tag-dropdownMenuButton6" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                            href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                            href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-danger">G</div>
                                    <h5>Good Morning</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton7"
                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none"
                                        aria-labelledby="tag-dropdownMenuButton7" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                            href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                            href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-info">H</div>
                                    <h5>Health</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton8"
                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none"
                                        aria-labelledby="tag-dropdownMenuButton8" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                            href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                            href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-warning">I</div>
                                    <h5>Ice Cream</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton9"
                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none"
                                        aria-labelledby="tag-dropdownMenuButton9" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                            href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                            href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-success">J</div>
                                    <h5>Juice</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton10"
                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none"
                                        aria-labelledby="tag-dropdownMenuButton10" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                            href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                            href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-danger">K</div>
                                    <h5>Kangaroo</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton11"
                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none"
                                        aria-labelledby="tag-dropdownMenuButton11" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                            href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                            href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-purple">L</div>
                                    <h5>Leaves</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton12"
                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none"
                                        aria-labelledby="tag-dropdownMenuButton12" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                            href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                            href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-info">M</div>
                                    <h5>Machine</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton13"
                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none"
                                        aria-labelledby="tag-dropdownMenuButton13" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                            href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                            href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="px-2">
                            <div class="item d-flex align-items-center justify-content-between">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-warning">N</div>
                                    <h5>Nail Polish</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton14"
                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none"
                                        aria-labelledby="tag-dropdownMenuButton14" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                            href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                            href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        @yield('content')
    </div>

    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <span class="text-secondary mr-1">
                        {{ date('Y') }}©
                    </span> <a href="{{ route('dashboard') }}" class="">{{config('app.name')}}</a>.
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/backend-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/flex-tree.min.js') }}"></script>
    <script src="{{ asset('assets/js/tree.js') }}"></script>
    <script src="{{ asset('assets/js/table-treeview.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    <script src="{{ asset('assets/js/chart-custom.js') }}"></script>
    <script src="{{ asset('assets/js/slider.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
    <x-flashify::scripts />

    @yield('js')
    @stack('js')
</body>

</html>