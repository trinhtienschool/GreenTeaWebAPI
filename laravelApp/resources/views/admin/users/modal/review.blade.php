
{{--    //modal view xem--}}
    <div class="modal fade"
         id="review{{$pro->id}}"
         data-mdb-backdrop="static"
         data-mdb-keyboard="false"
         tabindex="-1"
         aria-labelledby="staticBackdropLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">delete</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-mdb-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <table class="table align-middle  table-bordered">
                        <thead>

                        </thead>
                        <tbody>
                        <tr>
                            <th scope="col"class="font-weight-light text-danger lead">#id</th>
                            <th scope="col"class="font-weight-light text-primary"># {{$pro->id}}</th>

                        </tr>
                        <tr>
                            <th scope="col"class="font-weight-light text-danger lead">tên sản phẩm</th>
                            <th scope="col"class="font-weight-light text-primary">{{$pro->product_name}}</th>

                        </tr>
                        <tr>

                            <th scope="col"class="font-weight-light text-danger lead"> ảnh sản phẩm</th>
                            <th scope="col"class="font-weight-light text-danger lead">   <img src="{{url('storage/uploads')}}/{{$pro->image}}"  style="border-radius: 5px;height: 150px;width: 150px;object-fit: cover;" alt=""></th>

                        </tr>
                        <tr>
                            <th scope="col"class="font-weight-light text-danger lead">giá</th>
                            <th scope="col"class="font-weight-light text-primary">$ {{$pro->price}}</th>

                        </tr>
                        <tr>
                            <th scope="col"class="font-weight-light text-danger lead">mô tả</th>
                            <th scope="col"class="font-weight-light text-primary">{{$pro->description}}</th>

                        </tr>

                        <tr>
                            <th scope="col"class="font-weight-light text-danger lead">trạng thái</th>
                            <th scope="col"class="font-weight-light text-primary">{{($pro->status==0)?'chưa bán':'đang bán'}}</th>



                        </tr>

                        <tr>

                            <th scope="col"class="font-weight-light text-danger lead">loại</th>
                            @foreach($manager as $mana)
                            @if($pro->manager_id==$mana->id)

                            <th scope="col"class="font-weight-light text-primary">{{$mana->type}}</th>
                                    @break
                            @endif
                            @endforeach
                        </tr>

                        <tr>


                            <th scope="col"class="font-weight-light text-danger lead">owner</th>
                            @foreach($user as $us)
                            @if($pro->user_id==$us->id)

                                <th scope="col"class="font-weight-light text-primary">{{$us->email}}</th>
                                    @break
                            @endif
                            @endforeach

                        </tr>
                        <tr>
                            <th scope="col"class="font-weight-light text-danger lead">created_at</th>
                            <th scope="col"class="font-weight-light text-primary">{{$pro->created_at}}</th>

                        </tr>
                        <tr>
                            <th scope="col"class="font-weight-light text-danger lead">updated_at</th>
                            <th scope="col"class="font-weight-light text-primary">{{$pro->updated_at}}</th>

                        </tr>


                        </tbody>

                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                        đóng
                    </button>
                    <a href="{{route('product')}}">
                    <button type="submit" class="btn btn-primary" >đồng ý</button>
                    </a>
                </div>

            </div>
        </div>
    </div>

