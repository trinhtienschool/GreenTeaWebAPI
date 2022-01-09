@extends('layouts.master_template');
@section('title','Sản phẩm');
@section('content')
<main>
    <div class="container-fluid">

        <!-- Section: Basic examples -->
        <section>

{{--            <h5 class="my-4 dark-grey-text font-weight-bold">Responsive table</h5>--}}

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

                    <a href="" class="white-text mx-3">Bảng sản phẩm</a>

                    <div>
                        <button onclick="view()" type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-eye mt-0" ></i></button>
                        <button onclick="edit()" type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-pencil-alt mt-0"></i></button>
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
                                    <form id="form_send_input" method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="md-form">
                                            <input type="text" id="name_input" name="name" value="{{old('name')}}" class="form-control">
                                            <label for="name_input">Name</label>
                                        </div>
                                        <div class="md-form">
                                            <input type="file" id="avatar_input" name="avatar" value="{{old('avatar')}}" class="form-control">
{{--                                            <label for="avatar_input">Avatar</label>--}}
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
                    @if(Session::has('product_edit'))
                        @php
                        $product_edit=Session::get('product_edit')
                        @endphp
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
                                    <form id="form_send_edit" method="post" action="{{route('product.update',$product_edit->id)}}" enctype="multipart/form-data">
                                        {!! method_field('patch') !!}
                                        @csrf
                                        <div class="md-form">
                                            <input type="text" id="edit_name" name="name" value="{{old('name',$product_edit->name)}}" class="form-control">
                                            <label for="name_input">Name</label>
                                        </div>
                                        <div class="md-form">
                                            <img style="height: 75px;width: 75px" src="{{old('avatar',asset('images')."/".$product_edit->avatar)}}" alt="">
                                            {{--                                    <label for="avatar_input">Avatar cũ</label>--}}
                                        </div>
                                        <div class="md-form">
                                            <input type="file" id="edit_avatar" name="avatar" class="form-control">
                                            {{--                                    <label for="avatar_input">Avatar mới</label>--}}
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="edit_price" name="price" value="{{old('price',$product_edit->price)}}" class="form-control">
                                            <label for="price_input">Price</label>
                                        </div>
                                        <select  class="form-control" id="edit_cate" name="cate_id">
                                            <option value="" disabled>Chọn danh mục</option>

                                            @foreach(Session::get('sscategory') as $cate)
                                                @if($product_edit->cate->id == $cate->id)
                                                    <option selected value="{{$cate->id}}">{{$cate->name}}</option>
                                                @endif
                                                @if($product_edit->cate->id != $cate->id)
                                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                                @endif
                                            @endforeach

                                        </select>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    <button form="form_send_edit" type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

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
                            @php
                                $i=1
                            @endphp
                            @foreach($products as $pro)
                            <tr>
                                <th scope="row">
                                    <input class="form-check-input" onchange="checkboxChecked(this)" value="{{$pro->id}}" type="checkbox" id="{{'checkbox'.($i)}}">
                                    <label class="form-check-label" for="{{'checkbox'.($i++)}}" class="label-table"></label>
                                </th>
                                <td><img style="width:75px;height: 75px" src="{{asset('images')."/".$pro->avatar}}" alt=""></td>
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
        if(!isChecked()) return;
        $.ajax({
            type:'Get',url:"{{route('product.show','')}}/"+id_checked
        }).done(function(data) {
            // alert(data)
            $('#view_name').text(data.name);
            $('#view_price').text(data.price);
            $('#view_avatar').attr('src',"images/"+data.avatar);
            $('#view_cate').text(data.cate.name);
            $('#view_owner').text(data._owner.name);
            $('#view_updater').text(data._updater.name);
            $('#viewExpand').modal('show');
        }).fail(function(data){
            alert("Try again champ!");
        });
    }
    function isChecked(){
        if(id_checked!=0) return true;
        else alert("Phải chọn 1 item");
        return false;
    }
    function del(){
        if(!isChecked()) return;
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
    function edit(){
        if(!isChecked()) return;
        window.location.href = 'product/'+id_checked+"/edit";
    }
    $(window).on('load', function() {
        if ( $( "#editExpand" ).length ) {
            $('#editExpand').modal('show');
        }

    })

</script>
@endsection
