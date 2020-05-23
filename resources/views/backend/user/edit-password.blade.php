@extends('backend.layouts.master')
@section('content')


<!-- Main Body -->
<div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-12 main">



    <!-- The following session is added for showing flash messages ~~~~~~~~ -->
    <!-- The following session is added for showing flash messages ~~~~~~~~ -->

    <div class="row">
        <div class="page-header col-lg-12 ">
            <center>
                <h3> Password Change </h3>
            </center>
        </div>
    </div>
    <br><br>

    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 ">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="post" action="{{route('profile.password.update')}}" id="myForm">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="current_password">Current Password</label>
                                        <input type="password" name="current_password" id="current_password" class="form-control">
                                        <font style="color:red">{{($errors->has('password'))?($errors->first('password')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="new_password">New Password</label>
                                        <input type="password" name="new_password" id="new_password" class="form-control">
                                        <font style="color:red">{{($errors->has('password'))?($errors->first('password')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="again_new_password">Again New Password</label>
                                        <input type="password" name="again_new_password" class="form-control">
                                        <font style="color:red">{{($errors->has('password'))?($errors->first('password')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-4 ">

                                        <input type="submit" value="Update" class="btn btn-primary">
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
    <!-- /.content-wrapper -->

    <!-- The following session is added for showing flash messages ~~~~~~~~ -->
    <!-- The following session is added for showing flash messages ~~~~~~~~ -->





    <!-- The following session is added for showing flash messages ~~~~~~~~ -->
    <!-- The following session is added for showing flash messages ~~~~~~~~ -->




    @include('backend.include.footer')

</div><!-- .main -->
<!-- End Main Body -->

@endsection
