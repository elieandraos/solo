<div class="form-group row">
  	<div class="col-md-12 col-xs-12">
        {!! Form::text('name', null, ['placeholder' => 'Project Name', 'class' => 'form-control form-control-sm']) !!}
    	<br/>  
        <div class="row">  
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon"> <i class="icon wb-calendar" aria-hidden="true"></i></span>
                    {!! Form::text('start_date', null, ['placeholder' => 'Start date', 'class' => 'form-control datepicker']) !!}
                </div>
            </div>

            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon"> <i class="icon wb-calendar" aria-hidden="true"></i></span>
                    {!! Form::text('due_date', null, ['placeholder' => 'Due date', 'class' => 'form-control datepicker']) !!}
                </div>
            </div>

            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon"> <i class="icon wb-payment" aria-hidden="true"></i></span>
                    {!! Form::text('amount', null, ['placeholder' => 'Amount', 'class' => 'form-control']) !!}
                </div>
            </div>
        </div>
  	</div>
</div>

<div class="form-group row">
    <div class="col-md-6">
        @include('app.projects._tags')
    </div>
</div>

<div class="form-buttons">
    <button type="submit" class="btn btn-primary btn-animate btn-animate-side">
    	<span><i class="icon wb-download" aria-hidden="true"></i> Save</span>
    </button>

    <a href="{!! route('projects.index') !!}">
        <button type="button" class="btn bg-orange-600 btn-animate btn-animate-side white">
            <span><i class="icon wb-arrow-left" aria-hidden="true"></i> Back</span>
        </button>
    </a>
</div>