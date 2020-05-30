@extends('backend.layouts.master')
@section('content')


<!-- Main Body -->
<div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-12 main">



    <!-- The following session is added for showing flash messages ~~~~~~~~ -->
    <!-- The following session is added for showing flash messages ~~~~~~~~ -->


    <!-- ============================================================= -->
    <!-- S C R I P T    S T A R T S     H E R E  -->
    <!-- ============================================================= -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1 class="text-center">User Profile</h1>

        </section>
        <!--section ends-->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">

                    <div class="tab-content mar-top">

                        <div class="row">
                            <div class="col-lg-10 ">
                                <div class="panel ">
                                    <div class="panel-heading">
                                        <h3 class="panel-title text-center">
                                            User Profile Details
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-4">
                                            <div class="text-center ">
                                                <div style=" margin-top:10px; ">
                                                    <div class=" thumbnail img-file " style="width: 200px; height: 300px; ">

                                                        <img src="{{(!empty($user->image))?url('public/upload/user_images/'.$user->image):url('public/upload/no_imgae .png')}}" alt="User profile picture" width="200" class="img-responsive" height="150" alt="riot">
                                                        <h4 style="margin-top: 100px">User Photo</h4>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped" id="users">
                                                        <tr>
                                                            <td>User Name</td>
                                                            <td>
                                                            <td>{{$user->name}}</td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>E-mail</td>
                                                            <td>
                                                            <td>{{$user->email}}</td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Phone Number</td>
                                                            <td>
                                                            <td>{{$user->mobile}}</td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Address</td>
                                                            <td>
                                                            <td>{{$user->address}}</td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Status</td>
                                                            <td>
                                                            <td>{{$user->status}}</td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gender</td>
                                                            <td>
                                                            <td>{{$user->gender}}</td>
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </div>
                                                <a href="{{route('profile.edit')}}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- content -->
    </aside>
    <!-- /.content-wrapper -->

    <!-- The following session is added for showing flash messages ~~~~~~~~ -->
    <!-- The following session is added for showing flash messages ~~~~~~~~ -->





    <!-- The following session is added for showing flash messages ~~~~~~~~ -->
    <!-- The following session is added for showing flash messages ~~~~~~~~ -->




    @include('backend.layouts.footer')

</div><!-- .main -->
<!-- End Main Body -->

@endsection
