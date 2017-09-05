@extends('admin.layouts.index')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Categories</h3>
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
                            <h2><small>Plus Table Design</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <p class="text-muted font-13 m-b-30">
                                DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                            </p>
                            <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                                <thead>
                                <tr>
                                    <th>
                                    <th><input type="checkbox" id="check-all" class="flat"></th>
                                    </th>
                                    <th>Category</th>
                                    <th>Id</th>
                                    <th>Content</th>
                                    <th>Parent Category</th>
                                    <th></th>
                                    <th>Updated At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($category) > 0)
                                    @foreach($category as $item)
                                        <tr>
                                            <td>
                                            <th><input type="checkbox" id="check-all" class="flat"></th>
                                            </td>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->content}}</td>
                                            <td>{{$item->parent_category_id}}</td>
                                            <td>
                                                <form action="{{route('category.destroy', $item->id)}}"
                                                      method="post">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <input type="submit" value="Удалить">
                                                </form>
                                            </td>
                                            <td>{{$item->updated_at}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection