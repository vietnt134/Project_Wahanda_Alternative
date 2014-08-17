$(document).ready(function() {
	
	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		defaultDate: '2014-08-12',
		editable: true,
		eventLimit: true, // allow "more" link when too many events
		events: {
			url: URL + 'Views/spaCMS/calendar/php/get-events.php',
			error: function() {
				$('#script-warning').show();
			}
		},
		loading: function(bool) {
			$('#loading').toggle(bool);
		}
	});
	
});