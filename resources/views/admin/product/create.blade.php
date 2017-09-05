@extends('admin.layouts.index')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Create Product</h3>
                </div>
                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Product create</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                {{--</li>--}}
                                {{--<li><a class="close-link"><i class="fa fa-close"></i></a>--}}
                                {{--</li>--}}
                            </ul>
                            <div class="clearfix"></div>
                            @include('admin.layouts.error')
                            <div class="x_content">
                                <br/>
                                <form method="post" action="{{route('product.store')}}" id="demo-form2"
                                      data-parsley-validate class="form-horizontal form-label-left">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product
                                            Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="title" id="first-name" required="required"
                                                   class="form-control col-md-7 col-xs-12"
                                                   value="{{old('title')}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="old_price">Old Price</label>
                                        <input type="text" class="form-control" id="old_price" name="old_price" value="{{old('old_price')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="currency">Currency</label>
                                        <input type="text" class="form-control" id="currency" name="currency" value="RUB">
                                    </div>
                                    <div class="form-group">
                                        <label for="available">Available</label><br>
                                        <input type="checkbox" name="available" value="1" checked> Yes<br>
                                        <input type="checkbox" name="available" value="0"> No<br>
                                    </div>
                                    <div class="form-group">
                                        <label for="original_url">Original Url</label>
                                        <input type="text" class="form-control" id="original_url" name="original_url" value="{{old('original_url')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="ali_id">Aliexpress ID</label>
                                        <input type="text" class="form-control" id="ali_id" name="ali_id" value="{{old('ali_id')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">Product Description</label>
                                        <textarea class="form-control" name="description" rows="5">{{old('description')}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="button">Cancel</button>
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection