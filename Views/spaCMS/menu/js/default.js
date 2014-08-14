$(document).ready(function() {
	// After checked Check box on Edit group name modal form, show/hidden settings correspondence
    $("input#jit-checkbox").change(function(){
        if(this.checked) {
            $("li.jit .settings").removeClass('hidden');
        } else {
            $("li.jit .settings").addClass('hidden');
        }
    });

    $("input#off-peak-checkbox").change(function(){
        if(this.checked) {
            $("li.off-peak .settings").removeClass('hidden');
        } else {
            $("li.off-peak .settings").addClass('hidden');
        }
    });


    
});