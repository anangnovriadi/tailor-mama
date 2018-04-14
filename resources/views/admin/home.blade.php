@extends('admin.layout.app')

@section('pageTitle', 'Home')

@section('content')

<section>
	<div class="content-wrapper">
		<div class="container-fluid">
		    <div class="page-header">
		        <h2>DASHBOARD</h2>
		    </div>
		    <div class="row clearfix">
		        <div class="col-lg-3">
		            <div class="widget bg-indigo">
		                <div class="col-xs-4 widget-icon">
		                    <div class="chart-bar">7,8,9,4,6,10,6,7,8,9,11</div>
		                </div>
		                <div class="col-xs-8 widget-body text-right">
		                    <span> Sale </span>
		                    <h2 class="num">350</h2>
		                </div>
		            </div>
		        </div>
		        <div class="col-lg-3">
		            <div class="widget bg-red">
		                <div class="col-xs-4 widget-icon">
		                    <div class="chart-pie">40, 20, 21, 19</div>
		                </div>
		                <div class="col-xs-8 widget-body text-right">
		                    <span> CPU Usages </span>
		                    <h2 class="num">60%</h2>
		                </div>
		            </div>
		        </div>
		        <div class="col-lg-3">
		            <div class="widget bg-cyan">
		                <div class="col-xs-4 widget-icon">
		                    <canvas id="partly_cloudy_day_2" width="50" height="50" class="m-t-15">
		                    </canvas>
		                </div>
		                <div class="col-xs-8 widget-body text-right">
		                    <span> Paris </span>
		                    <h2 class="num">25°C</h2>
		                </div>
		            </div>
		        </div>
		        <div class="col-lg-3">
		            <div class="widget bg-green">
		                <div class="col-xs-4 widget-icon">
		                    <canvas id="snow_2" width="50" height="50" class="m-t-15">
		                    </canvas>
		                </div>
		                <div class="col-xs-8 widget-body text-right">
		                    <span> Shimla </span>
		                    <h2 class="num">-5°C</h2>
		                </div>
		            </div>
		        </div>
		    </div>

		</div>
	</div>
</section>

@endsection