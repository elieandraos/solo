<table class="table" id="project-tags">
    <thead>
        <tr>
        	<th>
                <span id="tag-count">0</span> tag(s)
                <button type="button" class="btn btn-icon btn-dark btn-pure btn-xs pull-xs-right" id="add-tag">
                    <i class="icon wb-plus" aria-hidden="true"></i> 
                </button>
            </th>
        <tr>
    </thead>
    <tbody>
        @if(isset($project))
            @foreach($project->tags as $tag)
                <tr>
                    <td>
                        {!! Form::text('tag_name[]', $tag->name, ['placeholder' => 'Tag Name', 'class' => 'form-control form-control-sm line tag-name']) !!}
                        {!! Form::hidden('tag_color[]', $tag->color, ['class' => 'tag-active-color']) !!}
                        
                        <div class="pull-xs-right tag-color">
                            @foreach($tag_colors as $tag_color)
                                <span class="tag tag-pill {!! $tag_color !!}" data-color="{!! $tag_color !!}" >&nbsp;</span>
                            @endforeach
                            <button type="button" class="btn btn-icon btn-grey-500 btn-pure btn-xs remove-tag">
                                <i class="icon wb-close"></i> 
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

