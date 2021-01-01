@extends('dashboard.layout.master')

<!-- TITLE -->
@section('title')
    Lists News
@endsection

<!-- START Main content -->

@section('content')
    <!-- Main content -->
    <section class="content">
        @include("dashboard.layout.message")
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">NEWS</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped project">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>News Title</th>
                      <th>News Image</th>
                      <th>Category</th>
                      <th class="text-center">News Views</th>
                      <th>Featured</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($newses as $news)
                    <tr>
                      <td>
                         {{$news->id}}
                      </td>
                      <td>
                          <h6>{{$news->title}}</h6>
                          <small><span style="color: green">Created at : </span>{{$news->created_at}}</small><br>
                          <small><span style="color: green">Updated at : </span>{{$news->updated_at}}</small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img width="100" alt="Avatar" class="table-avatar" src="{{asset("img/")}}/{{$news->image}}">
                              </li>
                          </ul>
                      </td>
                      <td>
                          <p style="text-transform: capitalize">
                              {{$news->category->category_name}}
                          </p>
                      </td>
                      <td class="project-state text-center">
                          <span class="badge badge-success">{{$news->views}}</span>
                      </td>
                        <td>
                          <small>
                              <span style="color: green">Featured : </span>
                              @if($news->featured == 1)
                                  <i  style="color: blue" class="fa fa-check" aria-hidden="true"></i>
                              @else
                                  <i style="color: red" class="fa fa-times" aria-hidden="true"></i>
                              @endif
                              <br>
                              <span style="color: green"> Most Recent : </span>
                              @if($news->most_recent == 1)
                                  <i style="color: blue" class="fa fa-check" aria-hidden="true"></i>
                              @else
                                  <i style="color: red" class="fa fa-times" aria-hidden="true"></i>
                              @endif
                               <br>

                              <span style="color: green"> Popular : </span>
                              @if($news->popular == 1)
                                  <i style="color: blue" class="fa fa-check" aria-hidden="true"></i>
                              @else
                                  <i style="color: red"  class="fa fa-times" aria-hidden="true"></i>
                              @endif
                              <br>
                              <span style="color: green"> Latest : </span>
                              @if($news->latest == 1)
                                  <i style="color: blue" class="fa fa-check" aria-hidden="true"></i>
                              @else
                                  <i style="color: red" class="fa fa-times" aria-hidden="true"></i>
                              @endif
                              <br>
                              <span style="color: green"> Most Read : </span>
                              @if($news->most_read == 1)
                                  <i style="color: blue" class="fa fa-check" aria-hidden="true"></i>
                              @else
                                  <i style="color: red" class="fa fa-times" aria-hidden="true"></i>
                              @endif



                          </small>
                      </td>
                      <td class="project-actions d-flex justify-content-between">
                          <a class="btn btn-info btn-sm" href="{{route("dashboard.news.edit",$news)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <form action="{{route("dashboard.news.destroy",$news)}}" method="post">
                              @method("DELETE")
                              @csrf
                              <button class="btn btn-danger btn-sm" type="submit">
                                  <i class="fas fa-trash"></i>Delete
                              </button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
          <!-- /.card-body -->
      </div>
      <!-- /.card -->
        {{$newses->links()}}
    </section>
@endsection

<!--END  Main content -->
