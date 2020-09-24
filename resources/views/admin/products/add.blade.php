@extends('admin_layout');
@section('admin_content')

    <form action="{{\Illuminate\Support\Facades\URL::to('/admin/save-product')}}" method="post" enctype="multipart/form-data" class="mx-5" >
        {{csrf_field()}}
<<<<<<< HEAD
        <h2>Thêm sản phẩm</h2>
=======

        <h3>Thêm sản phẩm</h3>
>>>>>>> 7f8aed56f1cb2eb03d8445e4a37f5369a39e120f
        <div class="row">
            <div class="col-md-12">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="modelName">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="product_name" placeholder="Product Name">
                        @if ($errors->has('product_name'))
                            <p style="color: red">{{ $errors->first('product_name') }}</p>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label  for="category" >danh mục sản phẩm </label>
                        <select name="product_cate" class="form-control">
                            @foreach($cate_product as $key => $cate)
<<<<<<< HEAD
                                <option></option>
                                <option value="{{$cate->id}}">{{$cate->category_name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('product_cate'))
                            <p style="color: red">{{ $errors->first('product_cate') }}</p>
                        @endif
=======
                                <option value="{{$cate->id}}">{{$cate->category_name}}</option>
                            @endforeach
                        </select>
>>>>>>> 7f8aed56f1cb2eb03d8445e4a37f5369a39e120f
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="modelName">mã sản phẩm</label>
<<<<<<< HEAD
                        <input type="text" class="form-control" name="product_code" placeholder="Product Code">
=======
                        <input type="text" class="form-control" name="product_name" placeholder="Product Name">
>>>>>>> 7f8aed56f1cb2eb03d8445e4a37f5369a39e120f
                        @if ($errors->has('product_code'))
                            <p style="color: red">{{ $errors->first('product_code') }}</p>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label  for="brand" >Thương hiệu sản phẩm</label>
                        <select name="product_brand" class="form-control">
                            @foreach($brand_product as $key => $cate)
<<<<<<< HEAD
                                <option></option>
                                <option value="{{$cate->id}}">{{$cate->brand_name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('product_brand'))
                            <p style="color: red">{{ $errors->first('product_brand') }}</p>
                        @endif
=======
                                <option value="{{$cate->id}}">{{$cate->brand_name}}</option>
                            @endforeach
                        </select>
>>>>>>> 7f8aed56f1cb2eb03d8445e4a37f5369a39e120f
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="price">Giá sản phẩm</label>
<<<<<<< HEAD
                        <input type="number" class="form-control" min="1000" name="product_price" placeholder="Price">
=======
                        <input type="number" class="form-control" name="product_price" placeholder="Price">
>>>>>>> 7f8aed56f1cb2eb03d8445e4a37f5369a39e120f
                        @if ($errors->has('product_name'))
                            <p style="color: red">{{ $errors->first('product_price') }}</p>
                        @endif
                    </div>
                    <div class="form-group col-md">
                        <label for="price">Giá khuyến mãi sản phẩm</label>
<<<<<<< HEAD
                        <input type="number" min="1000" class="form-control" name="product_price_sale" placeholder="Price sale">
=======
                        <input type="number" class="form-control" name="product_price_sale" placeholder="Price">
>>>>>>> 7f8aed56f1cb2eb03d8445e4a37f5369a39e120f
                        @if ($errors->has('product_price_sale'))
                            <p style="color: red">{{ $errors->first('product_price_sale') }}</p>
                        @endif
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="modelName">Chi tiết sản phẩm</label>
                        <input type="text" class="form-control" name="product_content" placeholder="Content">
                        @if ($errors->has('product_content'))
                            <p style="color: red">{{ $errors->first('product_name') }}</p>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="salePrice">Ghi chú</label>
                        <input type="text" class="form-control" name="product_desc" placeholder="desc">
                        @if ($errors->has('product_desc'))
                            <p style="color: red">{{ $errors->first('product_desc') }}</p>
                        @endif
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="quantity">Trạng thái</label>
                        <select class="custom-select" id="inputGroupSelect01" name="product_status">
<<<<<<< HEAD
                            <option></option>
                            <option value="0">Ẩn </option>
                            <option value="1">Hiển thị</option>
                        </select>
                        @if ($errors->has('product_status'))
                            <p style="color: red">{{ $errors->first('product_status') }}</p>
                        @endif
                    </div>

=======
                            <option value="0">Ẩn </option>
                            <option value="1">Hiển thị</option>
                        </select>
                    </div>
>>>>>>> 7f8aed56f1cb2eb03d8445e4a37f5369a39e120f
                    <div class="form-group col-md-3">
                        <label for="exampleFormControlFile1">Ảnh sản phẩm</label>
                        <br>
                        <input type="file" class="form-control-file" name="product_image" >
                                                @if ($errors->has('product_image'))
                                                    <p style="color: red">{{ $errors->first('product_image') }}</p>
                                                @endif
                    </div>
                    <div class="form-group col-md-6">
                       <br>
                        <button type="submit" class="btn btn-primary">Submit</button>


                    </div>

                </div>

            </div>
            <div class="col-md-4">
                <img class="img-fluid img-thumbnail" id="imgPreview" src="">
            </div>
        </div>
    </form>
<!--    --><?php
//    $message = Session::get('message');
//    if ($message){
//        echo'<span class="text-alert">',$message,'</span>' ;
//        Session::put('message',null);
//    }
//
//    ?>




@endsection
