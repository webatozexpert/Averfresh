@extends('backend.layouts.master')
@section('content')


<!-- Main Body -->
<div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-12 main">



    <!-- The following session is added for showing flash messages ~~~~~~~~ -->
    <!-- The following session is added for showing flash messages ~~~~~~~~ -->


    <!-- ============================================================= -->
    <!-- S C R I P T    S T A R T S     H E R E  -->
    <!-- ============================================================= -->


    <div class="row">
        <div class="page-header col-lg-12 ">
            <center>
                <h3>Create New User</h3>
            </center>
        </div>
    </div>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-12 ">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">
                                <h3>
                                    <a class="btn btn-success float-right " href="{{route('users.view')}}"><i class="fa fa-list">User List</i></a>
                                </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form method="post" action="{{route('users.update',$editData->id)}}" id="myForm">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="usertype">User Role</label>
                                            <select name="usertype" id="usertype" class="form-control">
                                                <option value="">Select Role</option>
                                                <option value="Super Admin" {{($editData->usertype=="Super Admin")?"selected":""}}> Super Admin</option>
                                                <option value="Admin" {{($editData->usertype=="Admin")?"selected":""}}>Admin</option>
                                                <option value="User" {{($editData->usertype=="User")?"selected":""}}>User</option>

                                            </select>
                                            <font style="color:red">{{($errors->has('usertype'))?($errors->first('usertype')):''}}</font>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" value="{{$editData->name}}" class="form-control ">
                                            <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" value="{{$editData->email}}" class="form-control">
                                            <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                                        </div>

                                        <div class="form-group col-md-4 ">

                                            <input type="submit" value="update" class="btn btn-primary">
                                        </div>

                                    </div>
                                </form>
                            </div><!-- /.card-body -->
                        </div>
                    </section>


                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    @include('backend.include.footer')

</div><!-- .main -->
<!-- End Main Body -->

@endsection
