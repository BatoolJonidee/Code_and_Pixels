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
