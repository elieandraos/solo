$(document).ready(function(){
	initTagManager();
	initDatePickers();
})

function initTagManager()
{
	// add tag click event
	$("#add-tag").click(function(){
		var skeleton = $("#tag-skeleton").clone();
		skeleton.attr('id', '');
		$("#project-tags").append(skeleton);
		updateTagCounter();
	})

	// tag colors events
	$("body").on('mouseover', '#project-tags tbody td', function(){
		$(this).find('.tag-color').show();
	})
	$("body").on('mouseout', '#project-tags tbody td' , function(){
		$(this).find('.tag-color').hide();
	})
	$("body").on('mouseover', '.tag-color .tag-pill', function(){
		$(this).addClass('hover-tag');
	})
	$("body").on('click', '.tag-color .tag-pill', function(){
		var currentTagRow = $(this).closest('td');
		$(currentTagRow).find(".tag-pill").removeClass('active-tag');
		$(currentTagRow).find(".tag-active-color").val( $(this).data('color'));
		$(this).addClass('active-tag');
	})
	$("body").on('mouseout', '.tag-color .tag-pill', function(){
		$(this).removeClass('hover-tag');
	})

	//tag remove event
	$("body").on('click', '.remove-tag', function(){
		$(this).closest('tr').remove();
		updateTagCounter();
	})

	var updateTagCounter = function()
	{
		$("span#tag-count").text( $("#project-tags tbody").children().length);
	}

	var loadActiveTags = function()
	{
		$("#project-tags tbody tr td").each(function(){
			var activeColor = $(this).find('input.tag-active-color').val();
			$(this).find(".tag-pill[data-color='" + activeColor + "']").addClass('active-tag');
		})
		updateTagCounter();
	}

	loadActiveTags();
}


function initDatePickers()
{
	$(".datepicker").each(function(){
		$(this).datepicker({
		    orientation: "bottom auto",
		    todayHighlight: true,
		    format: 'D, dd MM yyyy'
		});
	})
}