@extends('core::layouts.master')

@section('content-header')
<h1>
    Places
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
</ol>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <p>{{ trans('dashboard::dashboard.welcome-message') }}</p>
    </div>
</div>
@stop
