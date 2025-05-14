<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Remos eCommerce Admin Dashboard HTML Template</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="google-site-verification" content="xMeFzk8AzhcEhA83Iy3aFYb7a1ZRfuwpZjCI25O9tNc" />

    <!-- Theme Style -->
    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('admin/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('admin/font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('admin/icon/style.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('admin/images/favicon.png') }}">


</head>

<body class="body">

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap">
                <!-- preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                <!-- /preload -->
                <!-- section-menu-left -->
             <div class="section-menu-left">
                    <div class="box-logo">
                        <a href="{{route('admin.dashboard')}}" id="site-logo-inner">
                            <img class="" alt="" src="" data-light="" data-dark="">
                        </a>
                        <div class="button-show-hide">
                            <i class="icon-menu-left"></i>
                        </div>
                    </div>
                    <div class="section-menu-left-wrap">
                        <div class="center">
                            <div class="center-item">
                                <div class="center-heading">الرئيسية </div>
                                <ul class="menu-list">
                                    <li class="menu-item has-children active">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-grid"></i></div>
                                            <div class="text">لوحة التحكم </div>
                                        </a>
                                        <ul class="sub-menu" style="display: block;">
                                            <li class="sub-menu-item">
                                                <a href="{{route('admin.dashboard')}}" class="active">
                                                    <div class="text">الرئيسية</div>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="center-item">
                                <div class="center-heading">التحكمات</div>
                                <ul class="menu-list">
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-shopping-cart"></i></div>
                                            <div class="text">المستخدمبن</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="{{route('admin.getusers')}}" class="">
                                                    <div class="text">قائمة المستخدمبن</div>
                                                </a>
                                            </li>
                                            {{-- <li class="sub-menu-item">
                                                <a href="" class="">
                                                    <div class="text">قائمة الصور</div>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </li>
                                 

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /section-menu-left -->
                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
                    <div class="header-dashboard">
                        <div class="wrap">
                            <div class="header-left">

                                <div class="button-show-hide">
                                    <i class="icon-menu-left"></i>
                                </div>
                                <form class="form-search flex-grow">


                                </form>
                            </div>
                            <div class="header-grid">
                                <div class="header-item button-dark-light">
                                    <i class="icon-moon"></i>
                                </div>
                                <div class="popup-wrap noti type-header">
                                    <div class="dropdown">

                                        </button>
                                    </div>
                                </div>
                                <div class="header-item button-zoom-maximize">
                                    <div class="">
                                        <i class="icon-maximize"></i>
                                    </div>
                                </div>
                                <div class="popup-wrap user type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-user wg-user">
                                                <span class="image">
                                                    <img src="images/avatar/user-1.png" alt="">
                                                </span>
                                                <span class="flex flex-column">
                                                    <span class="body-title mb-2">{{ auth()->user()->name }}</span>

                                                </span>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content"
                                            aria-labelledby="dropdownMenuButton3">
                                            <li>
                                                <form action="{{ route('admin.logout') }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="user-item">
                                                        <div class="icon">
                                                            <i class="icon-log-out"></i>
                                                        </div>
                                                        <div class="body-title-2">Log out</div>
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <div class="main-content-inner">
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>All Tours</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.html">
                                                <div class="text-tiny">Dashboard</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="text-tiny">Tours</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">All Tours</div>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Tour Listings -->
                                <div class="wg-box">
                                    <div class="flex items-center justify-between gap10 flex-wrap">
                                        <div class="wg-filter flex-grow">
                                            <form class="form-search">
                                                <fieldset class="name">
                                                    <input type="text" id="search" placeholder="Search here..."
                                                        name="name" aria-required="true" required="">
                                                </fieldset>
                                                <div class="button-submit">
                                                    <button type="submit"><i class="icon-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>

                                    <!-- Tours Table -->
                                    <div class="wg-table table-all-user">
                                        <ul class="table-title flex gap20 mb-14">
                                            <li>
                                                <div class="body-title">number</div>
                                            </li>
                                            <li>
                                                <div class="body-title">phone</div>
                                            </li>
                                            <li>
                                                <div class="body-title">email</div>
                                            </li>

                                        </ul>
                                        @php
                                            $i = 0;
                                            $i = $i + 1;
                                        @endphp
                                        <!-- Displaying Tours -->
                                        @foreach ($users as $user)
                                            <ul id="Table" class="flex flex-column">
                                                <li class="user-item gap14">
                                                    <div class="flex items-center justify-between gap20 flex-grow">
                                                        <div class="name">
                                                            <a href="#"
                                                                class="body-title-2">{{ $i }}</a>
                                                        </div>
                                                        <div class="text-tiny mt-3">{{ $user->phone }}</div>
                                                        <div class="body-text">
                                                            {{ $user->email }}
                                                        </div>
                                                        <div class="list-icon-function">
                                                            {{-- <form action="{{route('deletephoto' , $photo->id)}}" method="post">
                                              @csrf
                                              @method('DELETE')
                                                   
                                                            <button class="item ">
                                                                <i class="icon-trash-2"></i>
                                                            </button>
                                                                  </form> --}}
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        @endforeach
                                    </div>


                                    </ul>
                                </div>
                            </div>
                            <!-- /Tours Table -->
                        </div>
                    </div>
                </div>

                <!-- /main-content -->
            </div>
            <!-- /section-content-right -->
        </div>
        <!-- /layout-wrap -->
    </div>
    <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin/js/zoom.js') }}"></script>
    <!-- <script src="{{ asset('admin/js/switcher.js') }}"></script> -->
    <script src="{{ asset('admin/js/theme-settings.js') }}"></script>
    <script src="{{ asset('admin/js/main.js') }}"></script>


    <script>
        // search
        $(document).ready(function() {
            // حدث عند كتابة شيء في خانة البحث
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase(); // الحصول على النص المدخل وتحويله لحروف صغيرة
                $("#Table  li").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -
                        1); // تصفية الصفوف بناءً على النص
                });
            });
        });
    </script>

</body>

</html>
