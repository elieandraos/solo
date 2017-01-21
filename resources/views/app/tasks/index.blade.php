@extends('app.app')

@section('content')
	<div class="panel">
		<div class="panel-heading">
            <h3 class="panel-title">{!! $project->name !!} Tasks</h3>
        </div>

		<div class="panel-body">
            @include('app.tasks._columns')
            {{-- <button type="button" class="btn btn-floating btn-primary pull-xs-right" 
            		data-toggle="tooltip" data-original-title="Create Task" 
            		data-modal="remote" data-modal-url="{!! route('tasks.create', [$project->id]) !!}" 
                    data-modal-title="Task Details" data-modal-callback="initCreateModal">
                <i class="icon wb-plus" aria-hidden="true"></i>
            </button> --}}
		</div>
	</div>
@stop


@section('scripts')
    <script type="text/javascript" src="/js/vendor/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="/js/vendor/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="/js/custom/modals.js"></script>
    <script type="text/javascript" src="/js/custom/tasks.js"></script>
@endsection('scripts')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="/css/vendor/bootstrap-datepicker.css" />
    <link rel="stylesheet" type="text/css" href="/css/vendor/bootstrap-select.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/custom/tasks.css" />
@endsection('stylesheets')