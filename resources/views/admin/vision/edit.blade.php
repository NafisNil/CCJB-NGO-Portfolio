@extends('admin.layout.master')
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>Vision Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vision Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row offset-3">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header ">
                <h3 class="card-title">Vision</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('vision.update',[$edit])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              @include('admin.vision.form')
                      </form>
            </div>
            <!-- /.card -->

    

          </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <script>
      CKEDITOR.replace( 'description' );
</script>
@endsection