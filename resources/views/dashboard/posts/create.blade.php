@extends('dashboard.layout.master')

<!-- TITLE -->
@section('title')
    Add News
@endsection

<!-- START Main content -->

@section('content')
    <!-- Main content -->
    <section class="content">
         @include("dashboard.layout.message")
        <form method="post" action="{{route("dashboard.news.store")}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">General</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="inputName">News Title</label>
                        <input type="text" name="title" id="inputName" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="inputDescription">News Content</label>
                        <textarea id="inputDescription" name="body" class="form-control" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="inputStatus">Category</label>
                        <select id="inputStatus" name="category_id" class="form-control custom-select">
                          <option selected disabled>Select one</option>
                            @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach

                        </select>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image_news">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>

                    </div>
                      <!-- /.card-body -->
                  </div>
                    <!-- /.card -->
                </div>
                </div>

      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new News" class="btn btn-success float-right">
        </div>
      </div>

            </form>
    </section>

@endsection

<!--END  Main content -->
