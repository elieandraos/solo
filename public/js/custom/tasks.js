$(document).ready(function(){
	initChecklist();
});

function initChecklist()
{
	$("body").on('click', '#add-checklist', function(){
		insertChecklistItem();
	})

	$("body").on('blur', 'input.checklist-item', function(){
		handleBlurEvents($(this));
	})
    
	$("body").on('keypress', 'input.checklist-item', function(e){
		if(e.which == 13) {
	        insertChecklistItem();
	        $("#add-checklist").hide();
	    }
	})

	$("body").on('change', 'input.complete-checklist', function(){
		if($(this).is(":checked")) 
			changeTaskStatus($(this), 1);
		else
			changeTaskStatus($(this), 0);
	})

	$("body").on('click', '.remove-checklist', function(){
		deleteChecklistItem($(this));
	});

	var insertChecklistItem = function(){
		$("#add-checklist").hide();
		var _divInput = $("#checklist-skeleton").clone();
		$(_divInput).removeAttr('id');
		$(_divInput).appendTo($("#cheklist-items"));
		$(_divInput).find('input.checklist-item').focus();
	}

	var handleBlurEvents = function(_input){
		$("#add-checklist").show();
		if(!$(_input).val())
			$(_input).closest('.checklist-input').remove();
		else
			$(_input).closest('.checklist-input').addClass('has-value').removeClass('focus-checklist');
	}

	var changeTaskStatus = function(_input, _status){
		if(_status == 1)
			$(_input).closest('.checklist-input').find('input.checklist-item').addClass('completed');
		else
			$(_input).closest('.checklist-input').find('input.checklist-item').removeClass('completed');
	}

	var deleteChecklistItem = function(_button){
		$(_button).closest('.checklist-input').remove();
	}
}

function handleFocusEvents(_input)
{
	//weird $("body").on(...) didnt take effect, had to put inline (onfocus="")
	$(_input).closest('.checklist-input').addClass('focus-checklist');
}

function initCreateModal()
{
	$(".datepicker").each(function(){
		$(this).datepicker({
		    orientation: "bottom auto",
		    todayHighlight: true,
		    format: 'D, dd MM yyyy'
		});
	})

	$('#tag-picker').selectpicker({
		iconBase: 'icon wb-check check-mark',
		selectedTextFormat: 'count',
		noneSelectedText: 'Select tags'
	});
}