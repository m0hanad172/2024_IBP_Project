@extends('admin.layout.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">component Registration</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"style="color:#adb5bd">Home</a></li>
                            <li class="breadcrumb-item active">component Registration</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Left col -->
                    <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Register component</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{url('admin/register-component')}}" method="post">
            @csrf
            <div class="card-body">
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter component title" name="title">
                    <span class="text-danger">@error('title'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="MadeIn">MadeIn</label>
                    <input type="text" class="form-control" id="MadeIn" placeholder="Enter MadeIn Name" name="MadeIn">
                    <span class="text-danger">@error('MadeIn'){{$message}}@enderror</span>
                </div>
                    <div class="form-group">
                        <label for="publication_date">Publication Date</label>
                        <input type="date" class="form-control" id="publication_date" name="publication_date">
                        <span class="text-danger">@error('publication_date'){{$message}}@enderror</span>
                    </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="5" id="description" placeholder="Enter the component description" name="description"></textarea>
                    <span class="text-danger">@error('description'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" step="0.11" class="form-control" id="price" placeholder="Price" name="price">
                    <span class="text-danger">@error('price'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="image">Cover Image</label>
                    <input type="text" class="form-control" id="image" placeholder="Enter the link..." name="image">
                    <span class="text-danger">@error('image'){{$message}}@enderror</span>
                </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
