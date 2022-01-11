

    <div class="modal fade"
         id="delete{{$pro->id}}"
         data-mdb-backdrop="static"
         data-mdb-keyboard="false"
         tabindex="-1"
         aria-labelledby="staticBackdropLabel"
         aria-hidden="true">
        <div class="modal-dialog">
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
                <form action="{{route('delete',['id'=>$pro ->id])}}" method="get">
                <div class="modal-body">
                        bạn chắc chắn muốn sản phẩm {{$pro->product_name}} này không ?!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">yes</button>
                </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>

