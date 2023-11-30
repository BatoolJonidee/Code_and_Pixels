@extends('includeAdmin.top')

@section('title', 'Admin Dashboard')

@extends('includeAdmin.blank')
@section('main')


    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card influencer-profile-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="text-center">
                                <img src="{{ asset('storage/' . $admin->photo) }}" alt="Admin Avatar" class="rounded-circle user-avatar-xxl">
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                            <div class="user-avatar-info">
                                <div class="m-b-20">
                                    <div class="user-avatar-name">
                                        <h2 class="mb-1">{{$admin->fname . " " . $admin->lname}}</h2>
                                        <span class="d-xl-inline-block d-block mb-2">
                                            <i class="fa fa-map-marker-alt mr-2 text-primary "></i>{{$admin->city . ', ' . $admin->address }}
                                        </span><br/>
                                        <span class="d-xl-inline-block d-block mb-2">
                                            <i class="fas fa-fw fa-phone mr-2 text-primary "></i>{{ 0 . $admin->phone }}
                                        </span><br/>
                                    </div>
                                    <div class="user-avatar-name">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-inline-block">
                        <h5 class="text-muted">New Users</h5>
                        <h2 class="mb-0">{{ $newUsers }}</h2>
                    </div>
                    <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                        <i class="fas fa-users fa-fw fa-sm text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-inline-block">
                        <h5 class="text-muted">New Appointments</h5>
                        <h2 class="mb-0">{{ $reservation }}</h2>
                    </div>
                    <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                        <i class="fas fa-book fa-fw fa-sm text-secondary"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-inline-block">
                        <h5 class="text-muted">Total Photographers</h5>
                        <h2 class="mb-0">{{ $photographers }}</h2>
                    </div>
                    <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                        <i class="fas fa-camera-retro fa-fw fa-sm text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-inline-block">
                        <h5 class="text-muted">Total Users</h5>
                        <h2 class="mb-0">{{ $users }}</h2>
                    </div>
                    <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                        <i class="fas fa-users fa-fw fa-sm text-secondary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
