var step=1;
function flash_title()  
	{  
		step++;
		if (step==3) {step=1}  
		if (step==1) {document.title='**NEW** C.O.R.E @UMUNC'}  
		if (step==2) {document.title='******* C.O.R.E @UMUNC'}  
		setTimeout("flash_title()",380);  
	}  
	
$(document).ready(function(){
	var flag=1;
	
	$.ajax({url:"ajax.php", cache:false, success:function(result){
			flag=result;
	}});
	
	window.setInterval(function(){
		$.ajax({url:"ajax.php", cache:false, success:function(result){
			if (flag!=result) {
				flash_title();
			}
		}});
	}, 10000);
});