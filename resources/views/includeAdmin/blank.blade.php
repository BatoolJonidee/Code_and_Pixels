@if (session()->has('user_id') != null && session('is_admin') == 2)
    @include('includeAdmin.header')

    @include('includeAdmin.sidebar')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                @yield('main')
            </div>
        </div>
    </div>
    @include('includeAdmin.end')
@else
    @include('error')
@endif
