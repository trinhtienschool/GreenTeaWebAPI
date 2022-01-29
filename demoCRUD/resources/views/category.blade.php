<?php use \App\Http\Controllers\CategoryController;?>
<?php use \App\Http\Controllers\ProductController;?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>jqGrid - Ace Admin</title>
    <meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {background-color: #f2f2f2;}
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
        }

        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }

        .button2 {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
        }

        .button2:hover {
            background-color: #008CBA;
            color: white;
        }

        .button3 {
            background-color: white;
            color: black;
            border: 2px solid #f44336;
        }

        .button3:hover {
            background-color: #f44336;
            color: white;
        }

        .inline{
            margin: 5px;
            display: inline-block;
        }

        .shadow {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1) !important;
        }
        .file-upload > input {
            display: none !important;
        }
        img{
            width: 50px;
            height: 50px;
            border-radius: 50px;
        }
        #supportRequest{
            display: none;
        }

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="no-skin">
<button type="button" class="button button1" data-toggle="modal" data-target="#myModalAdd">ADD</button>
<table id="mytable">
    <tr style="font-size: 2rem;" align="center">
        <th>Product ID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Created Date</th>
        <th>Updated Date</th>
        <th>Function</th>
    </tr>
    @foreach(\App\Http\Controllers\CategoryController::getListCategories() As $key => $value)
        <tr id="{{$value->id}}">
            <td class="cellid">{{$value->id}}</td>
            <td class="cellname">{{$value->name}}</td>
            <td class="cellquantity">{{$value->quantity}}</td>
            <td class="cellcreatedAt">{{$value->created_at}}</td>
            <td class="cellupdatedAt">{{$value->updated_at}}</td>
            <td>
                <button class="button button2" type="button" data-toggle="modal" data-target="#myModalEdit" onclick="btnEventEdit({{$value->id}})">EDIT</button>
                <form method="POST" action="{{ url('/category' . '/' . $value->id) }}" accept-charset="UTF-8">
                    {{ method_field('DELETE') }}
                    @csrf
                    <button type="submit" class="button button3">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach

</table>
<!-- Modal ADD-->
<div class="modal fade" id="myModalAdd" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Category</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('category')}}" >
                    @csrf
                    <div class="col-lg-8 form-group">
                        <div class="inline">
                            <label for="prname">Category Name</label>
                            <input type="text" id="prname" name="prname" placeholder="Enter category name" class="form-control">
                        </div >
                        <div class="inline">
                            <label for="prquantity">Price</label>
                            <input type="text" id="prquantity" name="prquantity" placeholder="Enter quantity" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer inline">
                        <input type="submit" class="btn btn-default form-control" name="prupdate" id="prupdate" value="Update"/>
                        <input type="button" class="btn btn-default form-control" data-dismiss="modal" name="prclose" id="prclose" value="Close"/>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>

<!-- Modal EDIT-->
<div class="modal fade" id="myModalEdit" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Category</h4>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="formedit">
                    @csrf
                    @method("PUT")
                    <div class="col-lg-8">
                        <div class="inline">
                            <label for="prnameedit">Category Name</label>
                            <input type="text" id="prnameedit" name="prnameedit" placeholder="Enter category name" value="">
                        </div >
                        <div class="inline">
                            <label for="prquantityedit">Quantity</label>
                            <input type="text" id="prquantityedit" name="prquantityedit" placeholder="Enter quantity"  value="">
                        </div>
                    </div>
                    <div class="modal-footer inline">
                        <input type="submit" class="btn btn-default"  name="prupdateedit" id="prupdateedit" value="Update"/>
                        <button type="button" class="btn btn-default" data-dismiss="modal" name="prcloseedit" id="prcloseedit">Close</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<script>
    function btnEventEdit(id){
        $('#formedit').attr('action',"{{ url('category/') }}/"+id);
        document.getElementById("prnameedit").value = ($('#'+id+' .cellname').text());
        document.getElementById("prquantityeditedit").value =($('#'+id+' .cellquantity').text());
    }
</script>
</body>
</html>
