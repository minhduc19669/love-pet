@extends('admin_layout')
@section('admin_content')
    @foreach($news as $key => $edit)
    <form action="{{route('news.update',$edit->news_id)}}" method="post" enctype="multipart/form-data" class="mx-5" >
        {{csrf_field()}}
        <h2>Cập nhật tin tức</h2>
        <br>
        <div class="row">
            <div class="col-md-8">
                <div class="form">
                    <div class="form-group col-md-8">
                        <label for="modelName">Tiêu đề</label>
                        <input value="{{$edit->news_title}}"  type="text" class="form-control" name="news_title" placeholder="Tiêu đề">
                        @if ($errors->has('news_title'))
                            <p style="color: red">{{ $errors->first('news_title') }}</p>
                        @endif
                    </div>
                    <div class="form-group col-md-8">
                        <label  for="category" >Danh mục tin tức</label>
                        <select name="news_cate" class="form-control">
                            @foreach($news_cate as $key => $cate)
                                @if($edit->category_id == $cate->cate_news_id)
                                    <option selected value="{{$cate->cate_news_id}}">{{$cate->category_news_name}}</option>
                                @else
                                    <option value="{{$cate->cate_news_id}}">{{$cate->category_news_name}}</option>

                                @endif
                            @endforeach
                        </select>
                        @if ($errors->has('news_cate'))
                            <p style="color: red">{{ $errors->first('news_cate') }}</p>
                        @endif
                    </div>
                    <div class="form-row col-md-12">
                        <div class="form-group col-md-4">
                            <label  for="modelName">Lượt xem</label>
                            <input value="{{$edit->news_view}}"  min="0" type="number" class="form-control" name="news_view" placeholder="Lượt xem">
                            @if ($errors->has('news_view'))
                                <p style="color: red">{{ $errors->first('news_view') }}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label   for="price">Ngày đăng </label>
                            <input value="{{$edit->news_date}}" type="date" class="form-control" min="1000" name="news_date" placeholder="Ngày đăng">

                            @if ($errors->has('news_date'))
                                <p style="color: red">{{ $errors->first('news_date') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form">
                        <div class="form-row col-md-12">
                            <div class="form-group col-md-8">
                                <label for="modelName">Nội dung</label>
                                <textarea id="editor1" type="text" class="form-control" name="news_content" placeholder="Content">{{$edit->news_content}}</textarea>
                                @if ($errors->has('news_content'))
                                    <p style="color: red">{{ $errors->first('news_content') }}</p>
                                @endif
                            </div>
                            <div class="form-group col-md-8">
                                <label for="salePrice">Ghi chú</label>

                                <textarea id="editor2" type="text" class="form-control" name="news_desc" placeholder="desc">{{$edit->news_desc}}</textarea>
                                @if ($errors->has('news_desc'))
                                    <p style="color: red">{{ $errors->first('news_desc') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form">
                            <div class="form-group col-md">
                                <label for="exampleFormControlFile1">Ảnh sản phẩm</label>
                                <br>
                                <input type="file" class="form-control-file" name="news_image" >
                                @if ($errors->has('news_image'))
                                    <p style="color: red">{{ $errors->first('news_image') }}</p>
                                @endif
                            </div>
                            <div class="form-group col-md-3">
                                <label for="quantity">Trạng thái</label>
                                <select class="custom-select" id="inputGroupSelect01" name="news_status">
                                    @if($edit->news_status == 0)
                                        <option selected value="0">Ẩn </option>
                                        <option value="1">Hiển thị</option>
                                    @else
                                        <option value="0">Ẩn </option>
                                        <option selected value="1">Hiển thị</option>

                                    @endif
                                </select>
                                @if ($errors->has('news_status'))
                                    <p style="color: red">{{ $errors->first('news_status') }}</p>
                                @endif
                            </div>
                            <div class="form-group col-md">
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md">
                <img class="img-fluid img-thumbnail" id="imgPreview" src="\news\{{$edit->news_image}}">
            </div>
        </div>
        </div>
    </form>
    @endforeach





@endsection

