@extends('admin.layouts.index')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Posts</h3>
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
                            <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                                <thead>
                                <tr>
                                    <th>
                                    <th><input type="checkbox" id="check-all" class="flat"></th>
                                    </th>
                                    <th>Article</th>
                                    <th>Id</th>
                                    <th>Content</th>
                                    <th>Parent Category</th>
                                    <th></th>
                                    <th>Updated At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($posts) > 0)
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>
                                            <th><input type="checkbox" id="check-all" class="flat"></th>
                                            </td>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->text}}</td>
                                            <td></td>
                                            <td>
                                                <form action="{{route('post.destroy', $post->id)}}"
                                                      method="post">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <input type="submit" value="Удалить">
                                                </form>
                                            </td>
                                            <td>{{$post->updated_at}}</td>
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