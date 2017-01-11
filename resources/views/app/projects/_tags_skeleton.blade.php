<table class="hidden">
    <tr id="tag-skeleton">
        <td>
            {!! Form::text('tag_name[]', null, ['placeholder' => 'Tag Name', 'class' => 'form-control form-control-sm line tag-name']) !!}
            {!! Form::hidden('tag_color[]', 'bg-orange-500', ['class' => 'tag-active-color']) !!}
            
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
</table>