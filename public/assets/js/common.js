/*CAN ONLY INPUT NUMBER*/
function inputNumbers(evt) {
	var e = evt || window.event;

	if ((e.charCode >= 48 && e.charCode <= 57) || e.charCode == 0) {
		return;
	} else {
		e.preventDefault();
	}
}
/*END CAN ONLY INPUT NUMBER*/
/*-----------------------*/