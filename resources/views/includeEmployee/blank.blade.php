@if (session()->has('user_id') != null && session('is_admin') == 1)
    @include('includeEmployee.nav')

    @include('includeEmployee.side')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                @yield('main')
            </div>
        </div>
    </div>
    @include('includeEmployee.end')
@else
    @include('error')
@endif
