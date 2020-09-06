    <script type="text/javascript">
	function showAjaxModal(url,type,params)
	{
		type = type || '';
		params = params || '';
		// SHOWING AJAX PRELOADER IMAGE
		jQuery('#modal_ajax .modal-body').html('<div style="text-align:center;margin-top:200px;">Loading...</div>');

		// LOADING THE AJAX MODAL
		jQuery('#modal_ajax').modal('show', {backdrop: 'true'});

		if(type == 'post')
		{
			$.ajax({
			url: url,
			data:params,
			success: function(response)
			{
				jQuery('#modal_ajax .modal-body').html(response);
			}
		});
			}
		else{
		// SHOW AJAX RESPONSE ON REQUEST SUCCESS
		$.ajax({
			url: url,
			success: function(response)
			{
				jQuery('#modal_ajax .modal-body').html(response);
			}
		});
		}
	}
	</script>

    <!-- (Ajax Modal)-->
    <div class="modal fade" id="modal_ajax">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">&nbsp;</h4>
                </div>

                <div class="modal-body" style="height:500px; overflow:auto;">



                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>