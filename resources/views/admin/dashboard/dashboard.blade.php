@extends('admin.master', ['menu'=>'dashboard'])
@section('content')
    @include('admin.widget.page-title', ['title'=>__('Dashboard')])

    <div class="main-content-inner">
    <!-- sales report area start -->
    <div class="sales-report-area mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">

                        <div class="s-report-title d-flex justify-content-between">
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                        </div>
                    </div>
                    <canvas id="coin_sales1" height="100"></canvas>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="s-report-title d-flex justify-content-between">
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                        </div>
                    </div>
                    <canvas id="coin_sales2" height="100"></canvas>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-report">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="s-report-title d-flex justify-content-between">
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                        </div>
                    </div>
                    <canvas id="coin_sales3" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection