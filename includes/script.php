	<script src="lib/js/jquery-1.11.0.min.js"></script>
	<script src="lib/js/bootstrap.min.js"></script>
	<script src="lib/js/jquery.parallax-scroll.js"></script>
	<script src="lib/js/jquery.easing.1.3.js"></script>
	<script src="lib/js/wow.js"></script>
	<script src="lib/js/jquery.colorbox.js"></script>

	<script src="lib/js/main.js"></script>
	<script src="lib/js/parsley.js"></script>
	
<script src="lib/js/filtrify/filtrify.js"></script>
<script src="lib/js/filtrify/filtrify.min.js"></script>
<script src="lib/js/filtrify/script.js"></script>
<script src="lib/js/filtrify/highlight.pack.js"></script>
	
	<script type="text/javascript">

$(function() {

	$.filtrify("artists", "placeHolder", {
		close : true
	});

});

</script>
	
	 <script>
	 
$(function() {

    $.filtrify("artists", "placeHolder");

});

	 wow = new WOW(
    {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       true,       // default
      live:         true        // default
    }
  )
  wow.init();
  
 
 
  $('#contactform').submit(function(e) 
		{
			
				if ( $(this).parsley('validate'))
				{
					
								var values = $(this).serialize();
								$.ajax({
								url: "includes/contact_handler.php",
								type: "post",
								data: values,
								success: function(msg){
								//window.location.href='thankyou.php';
								alert(msg);
								$('form').each(function(){
								   this.reset();
								});
								},
								error:function(){
								alert("Thank you. One of our representative will call you back!!");
								$('form').each(function(){
									this.reset();
								});
								}
								});	
					}		
			else{}
			e.preventDefault();
		});
		
		
		 
 
</script>
<script>
  function CheckNumeric()
{
   // Get ASCII value of key that user pressed
   var key = window.event.keyCode;
   var phone = document.getElementById('phone');
   // Was key that was pressed a numeric character (0-9)?
   if ( key > 47 && key < 58 && phone.value.length <12)
      return; // if so, do nothing
   else
      window.event.returnValue = null; // otherwise, 
	                               // discard character
}  
function CheckNumericage()
{
   // Get ASCII value of key that user pressed
   var key = window.event.keyCode;
   var phone = document.getElementById('age');
   // Was key that was pressed a numeric character (0-9)?
   if ( key > 47 && key < 58 && phone.value.length <2)
      return; // if so, do nothing
   else
      window.event.returnValue = null; // otherwise, 
	                               // discard character
}
	
function CheckNumeric1()
{
   // Get ASCII value of key that user pressed
   var key = window.event.keyCode;
  
   var namef = document.getElementById('name'); 
   // Was key that was pressed a numeric character (0-9)?
   if ( (key >= 97 && key <= 122) || (key >= 65 && key <= 90) )
      return; // if so, do nothing
   else
      window.event.returnValue = null; // otherwise, 
	                               // discard character
}

  </script> 
