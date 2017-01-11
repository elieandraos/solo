@extends('app.app')

@section('content')
	<div class="panel">
		<div class="panel-heading">
            <h3 class="panel-title">Projects List</h3>
        </div>

		<div class="panel-body">
            @foreach($projects as $project)
            	<div class="row">
            		@include('app.projects._card')
            	</div>
            @endforeach

            <a href="{!! route('projects.create') !!}">
                <button type="button" class="btn btn-floating btn-primary pull-xs-right" data-toggle="tooltip" data-original-title="Add Project">
                    <i class="icon wb-plus" aria-hidden="true"></i>
                </button>
            </a>
		</div>
	</div>
@stop

@section('scripts')
    <script type="text/javascript" src="/js/custom/projects.js"></script>
    <script type="text/javascript" src="/js/vendor/bootstrap-datepicker.js"></script>
@endsection('scripts')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="/css/custom/projects.css" />
    <link rel="stylesheet" type="text/css" href="/css/vendor/bootstrap-datepicker.css" />
@endsection('stylesheets')