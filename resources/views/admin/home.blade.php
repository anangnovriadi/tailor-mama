@extends('admin.layout.app')

@section('pageTitle', 'Dashboard')

@section('content')

<section>
	<div class="content-wrapper">
		<div class="container-fluid">
		    <div class="page-header">
		        <h2>Dashboard</h2>
		    </div>
		    <div class="row clearfix">
		        <div class="col-lg-3">
		            <div class="widget bg-indigo">
		                <div class="col-xs-4 widget-icon">
							<i class="icon-display fa fa-tree"></i>
		                </div>
		                <div class="col-xs-8 widget-body text-right">
		                    <span> Jahitan </span>
		                    <h2 class="num">350</h2>
		                </div>
		            </div>
		        </div>
		        <div class="col-lg-3">
		            <div class="widget bg-red">
		                <div class="col-xs-4 widget-icon">
							<i class="icon-display fa fa-female"></i>		                    
		                </div>
		                <div class="col-xs-8 widget-body text-right">
		                    <span> Pakaian </span>
		                    <h2 class="num">40</h2>
		                </div>
		            </div>
		        </div>
		        <div class="col-lg-3">
		            <div class="widget bg-cyan">
		                <div class="col-xs-4 widget-icon">
							<i class="icon-display fa fa-user"></i>	
		                </div>
		                <div class="col-xs-8 widget-body text-right">
		                    <span> Pelanggan </span>
		                    <h2 class="num">250</h2>
		                </div>
		            </div>
		        </div>
		        <div class="col-lg-3">
		            <div class="widget bg-green">
		                <div class="col-xs-4 widget-icon">
							<i class="icon-display fa fa-dollar"></i>	
		                </div>
		                <div class="col-xs-8 widget-body text-right">
		                    <span> Transaksi </span>
		                    <h2 class="num">1000</h2>
		                </div>
		            </div>
		        </div>
		    </div>

		</div>
	</div>
</section>

@endsection