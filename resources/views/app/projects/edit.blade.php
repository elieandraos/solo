@extends('app.app')

@section('content')
	<div class="panel">
		<div class="panel-heading">
        	<h3 class="panel-title">Edit project</h3>
        </div>

		<div class="panel-body">
            {!! Form::model($project, ['route' => ['projects.update', $project->id]]) !!}
                @include('app.projects._form')
            {!! Form::close() !!}

            @include('app.projects._tags_skeleton')
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