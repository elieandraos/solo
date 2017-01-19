<div class="sidebar-group">

    <label><span class="icon wb-tag" aria-hidden="true"></span> Tags</label>

    <select class="show-tick form-control" id="tag-picker" multiple data-width="100%">
    	@foreach($tags as $tag)
	   		<option data-content='<i class="tag {!! $tag->color !!}">{!! $tag->name !!}</i>'></option>
	   @endforeach
  </select>
</div>