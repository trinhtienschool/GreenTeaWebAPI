<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="fixed-sn white-skin">

<!-- Main Navigation -->
<header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
        <ul class="custom-scrollbar">

            <!-- Logo -->
            <li class="logo-sn waves-effect py-3">
                <div class="text-center">
                    <a href="#" class="pl-0"><img src="https://upload.wikimedia.org/wikipedia/vi/8/8d/The_gioi_di_dong_logo.svg"></a>
                </div>
            </li>

            <!-- Search Form -->
            <li>
                <form class="search-form" role="search">
                    <div class="md-form mt-0 waves-light">
                        <input type="text" class="form-control py-2" placeholder="Search">
                    </div>
                </form>
            </li>

            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">

                    <!-- Simple link -->
                    <li>
                        <a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i class="w-fa far fa-bell"></i>Alerts</a>
                    </li>
                    <li>
                        <a href="../modals/modals.html" class="collapsible-header waves-effect"><i class="w-fa fas fa-bolt"></i>Modals</a>
                    </li>
                    <li>
                        <a href="../charts/charts.html" class="collapsible-header waves-effect"><i class="w-fa fas fa-chart-pie"></i>Charts</a>
                    </li>
                    <li>
                        <a href="../calendar/calendar.html" class="collapsible-header waves-effect"><i class="w-fa far fa-calendar-check"></i>Calendar</a>
                    </li>
                    <li>
                        <a href="../sections/sections.html" class="collapsible-header waves-effect"><i class="w-fa fas fa-th-large"></i>Sections</a>
                    </li>

                </ul>
            </li>
            <!-- Side navigation links -->

        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div>
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse" ><i class="fas fa-bars"></i></a>
        </div>

        <!-- Breadcrumb -->
        <div class="breadcrumb-dn mr-auto">
            <p>Tables extended</p>
        </div>

        <!-- Navbar links -->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">

            <!-- Dropdown -->
            <li class="nav-item dropdown notifications-nav">
                <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <span class="badge red">3</span> <i class="fas fa-bell"></i>
                    <span class="d-none d-md-inline-block">Notifications</span>
                </a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">
                        <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                        <span>New order received</span>
                        <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 13 min</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                        <span>New order received</span>
                        <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 33 min</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-chart-line mr-2" aria-hidden="true"></i>
                        <span>Your campaign is about to end</span>
                        <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 53 min</span>
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                    <a class="dropdown-item" href="http://trinhtienschool.com:8082/Crud_demo/public/logout">Log Out</a>
                    <a class="dropdown-item" href="#">My account</a>
                </div>
            </li>

        </ul>
        <!-- Navbar links -->

    </nav>
    <!-- Navbar -->

</header>
<!-- Main Navigation -->

<!-- Main layout -->
<main>
    <div class="container-fluid">

        <!-- Section: Basic examples -->
        <section>

            <h5 class="my-4 dark-grey-text font-weight-bold">Responsive table</h5>

            <!-- Top Table UI -->
            <div class="card p-2 mb-5">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-12">

                        <!-- Name -->
                        <select class="mdb-select colorful-select dropdown-primary mx-2 md-form mt-3 md-dropdown">
                            <option value="" disabled selected>Bulk actions</option>
                            <option value="1">Delate</option>
                            <option value="2">Export</option>
                            <option value="3">Change segment</option>
                        </select>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-6">

                        <!-- Blue select -->
                        <select class="mdb-select colorful-select dropdown-primary mx-2 md-form mt-3 md-dropdown">
                            <option value="" disabled selected>Show only</option>
                            <option value="1">All <span> (2000)</span></option>
                            <option value="2">Never opened <span> (200)</span></option>
                            <option value="3">Opened but unanswered <span> (1800)</span></option>
                            <option value="4">Answered <span> (200)</span></option>
                            <option value="5">Unsunscribed <span> (50)</span></option>
                        </select>
                        <!-- /Blue select -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-6">

                        <!-- Blue select -->
                        <select class="mdb-select colorful-select dropdown-primary mx-2 md-form mt-3 md-dropdown">
                            <option value="" disabled selected>Filter segments</option>
                            <option value="1">Contacts in no segments <span> (100)</span></option>
                            <option value="1">Segment 1 <span> (2000)</span></option>
                            <option value="2">Segment 2 <span> (1000)</span></option>
                            <option value="3">Segment 3 <span> (4000)</span></option>
                        </select>
                        <!-- /Blue select -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-6">

                        <form class="form-inline md-form mt-2 ml-2">
                            <input class="form-control mt-2" type="text" placeholder="Search" style="max-width: 150px;">
                            <button class="btn btn-sm btn-primary ml-2 px-1"><i class="fas fa-search"></i> </button>
                        </form>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Top Table UI -->

            <div class="card card-cascade narrower z-depth-1">

                <!-- Card image -->
                <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

                    <div>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-th-large mt-0"></i></button>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-columns mt-0"></i></button>
                    </div>

                    <a href="" class="white-text mx-3">Table name</a>

                    <div>
                        <button onclick="view()" type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-eye mt-0" data-toggle="modal" data-target="#viewExpand"></i></button>
                        <button onclick="edit()" type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal" data-target="#editExpand"><i class="fas fa-pencil-alt mt-0"></i></button>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal" data-target="#delExpand"><i class="fas fa-eraser mt-0"></i></button>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal" data-target="#addExpand"><i class="fas fa-plus-circle mt-0"></i></button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="addExpand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="modal-title" style="display: inline-block !important; width: 100px;color: black" id="exampleModalLabel">Nhập dữ liệu</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="form_send_input" method="post" action="{{route('product.store')}}">
                                        @csrf
                                        <div class="md-form">
                                            <input type="text" id="name_input" name="name" value="{{old('name')}}" class="form-control">
                                            <label for="name_input">Name</label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="avatar_input" name="avatar" value="{{old('avatar')}}" class="form-control">
                                            <label for="avatar_input">Avatar Url</label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="price_input" name="price" value="{{old('price')}}" class="form-control">
                                            <label for="price_input">Price</label>
                                        </div>
                                            <select  class="form-control" id="price_input" name="cate_id">
                                                <option value="" disabled selected>Chọn danh mục</option>
                                                @foreach($cates as $cate)
                                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                                @endforeach

                                            </select>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    <button form="form_send_input" type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="editExpand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="modal-title" style="display: inline-block !important; width: 100px;color: black" id="exampleModalLabel">Nhập dữ liệu</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="form_send_input" method="put" action="product/update?id=1">
                                        @csrf
                                        <div class="md-form">
                                            <input type="text" id="edit_name" name="name" value="{{old('name')}}" class="form-control">
                                            <label for="name_input">Name</label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="edit_avatar" name="avatar" value="{{old('avatar')}}" class="form-control">
                                            <label for="avatar_input">Avatar Url</label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="edit_price" name="price" value="{{old('price')}}" class="form-control">
                                            <label for="price_input">Price</label>
                                        </div>
                                        <select  class="form-control" id="edit_cate" name="cate_id">
                                            <option value="" disabled selected>Chọn danh mục</option>
                                            @foreach($cates as $cate)
                                                <option value="{{$cate->id}}">{{$cate->name}}</option>
                                            @endforeach

                                        </select>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    <button form="form_send_input" type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="delExpand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="modal-title" style="display: inline-block !important; width: 100px;color: black" id="exampleModalLabel">Cảnh báo</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                   <h1 class="danger-color">Xóa vĩnh viễn?</h1>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    <button onclick="del()" type="submit" class="btn btn-danger">Xóa</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="viewExpand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="modal-title" style="display: inline-block !important; width: 100px;color: black" id="exampleModalLabel">Xem dữ liệu</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped">

                                        <tbody>
                                        <tr>
                                            <th scope="row">Tên</th>
                                            <td id="view_name">name</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Avatar</th>

                                            <td><img style="margin-left: 100px;height: 100px" src="" alt="" id="view_avatar"></td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Giá</th>
                                            <td id="view_price">Larry</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Danh mục</th>
                                            <td id="view_cate">name</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Người tạo</th>

                                            <td id="view_owner">Người tạo</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Người sửa</th>
                                            <td id="view_updater">Larry</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
{{--                                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Card image -->

                <div class="px-4">

                    <div class="table-responsive">
                        <!-- Table -->
                        <table class="table table-hover mb-0">

                            <!-- Table head -->
                            <thead>
                            <tr>
                                <th>
                                    <input class="form-check-input" type="checkbox" id="checkbox">
                                    <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
                                </th>
                                <th class="th-lg"><a>Avatar<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Name<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Price<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Category<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Owner<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a href="">Updater<i class="fas fa-sort ml-1"></i></a></th>
                            </tr>
                            </thead>
                            <!-- Table head -->

                            <!-- Table body -->
                            <tbody>
                            {{$i=1}}
                            @foreach($products as $pro)
                            <tr>
                                <th scope="row">
                                    <input class="form-check-input" onchange="checkboxChecked(this)" value="{{$pro->id}}" type="checkbox" id="{{'checkbox'.($i)}}">
                                    <label class="form-check-label" for="{{'checkbox'.($i++)}}" class="label-table"></label>
                                </th>
                                <td><img style="width: 75px;height: 75px" src="{{$pro->avatar}}" alt=""></td>
                                <td>{{$pro->name}}</td>
                                <td>{{$pro->price}}</td>
                                <td>{{$pro->cate->name}}</td>

                                <td>{{$pro->_owner->name}}</td>
                                <td>{{$pro->_updater->name}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                            <!-- Table body -->
                        </table>
                        <!-- Table -->
                    </div>

                    <hr class="my-0">

                    <!-- Bottom Table UI -->
                    <div class="d-flex justify-content-between">

                        <!-- Name -->
                        <select class="mdb-select colorful-select dropdown-primary mt-2">
                            <option value="" disabled>Rows number</option>
                            <option value="1" selected>5 rows</option>
                            <option value="2">25 rows</option>
                            <option value="3">50 rows</option>
                            <option value="4">100 rows</option>
                        </select>

                        <!-- Pagination -->
                        <nav class="my-4">
                            <ul class="pagination pagination-circle pg-blue mb-0">

                                <!-- First -->
                                <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link">First</a></li>

                                <!-- Arrow left -->
                                <li class="page-item disabled">
                                    <a class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>

                                <!-- Numbers -->
                                <li class="page-item active"><a class="page-link">1</a></li>
                                <li class="page-item"><a class="page-link">2</a></li>
                                <li class="page-item clearfix d-none d-md-inline-block"><a class="page-link">3</a></li>
                                <li class="page-item clearfix d-none d-md-inline-block"><a class="page-link">4</a></li>
                                <li class="page-item clearfix d-none d-md-inline-block"><a class="page-link">5</a></li>

                                <!-- Arrow right -->
                                <li class="page-item">
                                    <a class="page-link" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>

                                <!-- First -->
                                <li class="page-item clearfix d-none d-md-block"><a class="page-link">Last</a></li>

                            </ul>
                        </nav>
                        <!-- /Pagination -->

                    </div>
                    <!-- Bottom Table UI -->

                </div>
            </div>

        </section>
        <!-- Section: Basic examples -->

    </div>


</main>
<!-- Main layout -->

<!-- Footer -->
<footer class="page-footer pt-0 mt-5">

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>

        </div>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->


<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script>
    let id_checked = 0;
    function checkboxChecked(checkbox){
        if(checkbox.checked ==true) {
            id_checked = checkbox.value;
        }else{
            id_checked = 0;
        }
        $('.form-check-input').each(function() {

            if(this.value == id_checked && id_checked !=0){
                $(this).prop('checked', true);
            }else{
                $(this).prop('checked',false);
            }
        });

        console.log(id_checked);
    }

    function view(){
        $.ajax({
            type:'Get',url:"{{route('product.show','')}}/"+id_checked
        }).done(function(data) {
            // alert(data)
            $('#view_name').text(data.name);
            $('#view_price').text(data.price);
            $('#view_avatar').attr('src',data.avatar);
            $('#view_cate').text(data.cate.name);
            $('#view_owner').text(data._owner.name);
            $('#view_updater').text(data._updater.name);

        }).fail(function(data){
            alert("Try again champ!");
        });
    }
    function del(){
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type:'Delete',url:"{{route('product.destroy','')}}/"+id_checked
        }).done(function(data) {
            // alert(data)
            if(data.success==true){
                location.reload();
            }


        }).fail(function(data){
            alert("Try again champ!");
        });
    }
    {{--function edit(){--}}
    {{--    $.ajax({--}}
    {{--       //Chuyển đến trang mới chứ không phải ở trang hiện tại--}}
    {{--        type:'Get',url:"{{route('product/')}}/"+id_checked+"/edit"--}}
    {{--    }).done(function(data) {--}}
    {{--        // alert(data)--}}
    {{--            $('#edit_name').text(data.name);--}}
    {{--            $('#edit_price').text(data.price);--}}
    {{--            $('#edit_avatar').attr('src',data.avatar);--}}
    {{--            $('#edit_cate').val(data.cate.name);--}}
    {{--            $('#editExpand').attr('action','product/update?id='+data.id);--}}
    {{--    }).fail(function(data){--}}
    {{--        alert("Try again champ!");--}}
    {{--    });--}}
    {{--}--}}
</script>

<!-- <script>


  function sideNav(){
  var container = document.querySelector('.custom-scrollbar');
  var ps = new PerfectScrollbar(container, {
    wheelSpeed: 2,
    wheelPropagation: true,
    minScrollbarLength: 20
  });
}
// $(".button-collapse").sideNav();

  // Material Select Initialization
  $(document).ready(function () {
    $('.mdb-select').material_select();
  });

</script> -->
</body>
</html>
