@extends('admin.layouts.index')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit Category</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                            <div class="clearfix"></div>
                            @include('admin.layouts.error')
                            <div class="x_content">
                                <br/>
                                <form method="post" action="{{route('aliexpress.update', $aliexpress->id)}}" id="demo-form2"
                                      data-parsley-validate class="form-horizontal form-label-left">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keyword">Keyword
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input readonly type="text" name="title" id="keyword" required="required"
                                                   class="form-control col-md-7 col-xs-12" value="{{$aliexpress->keyword}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <a id="get-products" class="btn btn-info">Get products from AliExpress</a>
                                        </div>
                                    </div><br>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            {{--<button type="submit" class="btn btn-success">Submit</button>--}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection

@push('scripts')
<script src="../../../../js/admin.js"></script>
@endpush

{{--@push('meta-csrf')--}}
{{--<meta name="csrf-token" content="{{ csrf_token() }}" />--}}
{{--@endpush--}}