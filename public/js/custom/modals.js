$(document).ready(function(){
	initModalsEvents();
})

/*
 * Add all the events related to remote modals 
 */
function initModalsEvents()
{
	//load any url (GET request) inside a modal window
	$("body").on("click", "button[data-modal='remote']", function() {
		ajaxifyButtonLinks($(this));
		return false;
	});

	//submit form via ajax (POST request)
	$('body').on('submit', 'form[data-remote]', function(e){
		e.preventDefault();
		ajaxifyForm($(this));
		return false;
	});
}

/*
 * Load a remote url inside the modal via ajax
 */
function loadUrl(_url, _title, _callback)
{
	if(!_url)
 	{
 		console.log('data-url is required.');
 		return;
 	}

	$("#bootstrap-modal .modal-body").setLoaderImage();
 	$("#bootstrap-modal").modal({show:true});
 	$.ajax({
        method: 'GET',
        url: _url,
        success: function(data){
        	$("#bootstrap-modal .modal-title").text(_title);
        	$("#bootstrap-modal .modal-body").html("").html(data);
        	if(_callback)
				window[_callback](data);
        }
    });
}

/*
 * Submit a form via ajax
 * usage: just add data-remote to the form and it will process it via ajax.
 * optional: data-callback
 */
function ajaxifyForm(form)
{
	var method = form.find('input[name="_method"]').val() || "POST";
	var _url = form.attr('action');
	var _callback = form.data('callback');

	$.ajax({
		method: method,
		url: _url,
		data: form.serialize(),
		success: function(data){
			if(_callback)
				window[_callback](data, form);
		},
		error: function(data){
			renderErrors(data, form);
	    }
	})
}

/*
 *  Shortcut to loadUrl() from a button click.
 *  usage: <button data-toggle="remote-modal" data-url="/my-url" >
 *  optional: data-modal-title, data-callback
 */
function ajaxifyButtonLinks(_trigerer)
{
 	var _url = _trigerer.data('modal-url');
 	var _title = _trigerer.data('modal-title');
 	var _callback = _trigerer.data('modal-callback');
 	loadUrl(_url, _title, _callback);
}

/* 
 * Render the errors received from a Laravel validation request.
 * Rendering depends on my DOM structure, 
 * alternatively, i could add them at the top of the form and make it more generic.
 */
function renderErrors(data, form)
{
	// reset form html errors 
	$(form).find('.invalid-text').remove();
	// render the errors
    var _errors = data.responseJSON;
    for (var _key in _errors) 
    {
    	_input = form.find("input[name="+_key+"]");
    	_input.closest('.frm-row').append("<span class='invalid-text'>"+_errors[_key][0]+"</span");
    }
}


 /*
  * Set loader image before ajax request
  */
$.fn.setLoaderImage = function(){
	var _dom = "<div class='loader'><img src='/assets/images/ajax-loader.gif' /></div>";
	$(this).html(_dom);
}