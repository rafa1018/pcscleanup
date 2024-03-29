<!-- ////// Flash Success ///////-->
@if ( Session::has('flash_success') )
     <script>
            $(  function round_success_noti(){
			Lobibox.notify('success', {
		    pauseDelayOnHover: true,
		     size: 'mini',
		    rounded: true,
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		    icon: 'fa fa-check-circle',
		    msg: '{{ Session::get('flash_success') }}'
		    });
		  }	);
      </script>

 <!-- ////// Flash Warning ///////-->
 @elseif( Session::has('flash_warning') )
  <script>
            $(  function round_warning_noti(){
			Lobibox.notify('warning', {
		    pauseDelayOnHover: true,
		     size: 'mini',
		    rounded: true,
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		    icon: 'fa fa-exclamation-circle',
		    msg: '{{ Session::get('flash_warning') }}'
		    });
		  }	);
  </script>
 <!-- ////// Flash Error ///////-->
@elseif( Session::has('flash_error') )
<script>
          $(  function round_error_noti(){
			Lobibox.notify('error', {
		    pauseDelayOnHover: true,
		     size: 'mini',
		    rounded: true,
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		     icon: 'fa fa-exclamation-circle',
		    msg: '{{ Session::get('flash_error') }}'
		    });
		  }	);
</script>


 @elseif( Session::has('flash_info') )

    <div class="alert {{ Session::get('flash_type') }}">
             <script>
            $(  function round_info_noti(){
			Lobibox.notify('info', {
		    pauseDelayOnHover: true,
		     size: 'mini',
		    rounded: true,
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		     icon: 'fa fa-info-circle',
		    msg: '{{ Session::get('flash_info') }}'
		    });
		  }	);
      </script>
 </div>

  @elseif( Session::has('flash_default') )

    <div class="alert {{ Session::get('flash_type') }}">
             <script>
            $(  function round_default_noti(){
			Lobibox.notify('default', {
		    pauseDelayOnHover: true,
		     size: 'mini',
		    rounded: true,
            continueDelayOnInactiveTab: false,
		    position: 'top right',
		    icon: 'fa fa-exclamation-circle',
		    msg: '{{ Session::get('flash_default') }}'
		    });
		  }	);
      </script>
 </div>
@elseif(Session::has('flash_warning_zoomOut'))
 <script>
$(  function anim3_noti(){
			Lobibox.notify('warning', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
            icon: 'fa fa-exclamation-circle',
		    position: 'center top',
		    showClass: 'zoomIn',
            hideClass: 'zoomOut',
            width: 600,
		    msg: '{{ Session::get('flash_warning_zoomOut') }}'
		    });
		  });
		</script>

@elseif(Session::has('flash_success_fadeOutDown'))
 <script>
        $(  function anim3_noti(){
				Lobibox.notify('success', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
		    position: 'center top',
		    showClass: 'fadeInDown',
            hideClass: 'fadeOutDown',
             icon: 'fa fa-check-circle',
            width: 600,
		    msg: '{{ Session::get('flash_success_fadeOutDown') }}'
		    });
		  });
		</script>

@elseif(Session::has('flash_error_fadeOutDown'))
 <script>
        $(  function anim3_noti(){
				Lobibox.notify('error', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
		    position: 'center top',
		    showClass: 'fadeInDown',
            hideClass: 'fadeOutDown',
               icon: 'fa fa-times-circle',
            width: 600,
		    msg: '{{ Session::get('flash_error_fadeOutDown') }}'
		    });
		  });
		</script>


@elseif(Session::has('flash_warning_fadeOutDown'))
 <script>
        $(  function anim3_noti(){
				Lobibox.notify('warning', {
		    pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
		    position: 'center top',
		    showClass: 'fadeInDown',
            hideClass: 'fadeOutDown',
               icon: 'fa fa-exclamation-circle',
            width: 600,
		    msg: '{{ Session::get('flash_warning_fadeOutDown') }}'
		    });
		  });
		</script>



		@elseif(Session::has('flash_warning_bottom_right'))
 <script>
        $(  function pos5_success_noti(){
				Lobibox.notify('warning', {
		  pauseDelayOnHover: true,
		    size: 'mini',
		       icon: 'fa fa-exclamation-circle',
            continueDelayOnInactiveTab: false,
		    position: 'bottom right',
		    msg: '{{ Session::get('flash_warning_bottom_right') }}'
		    });
		  });
		</script>

@endif




