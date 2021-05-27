var datepicker = $.fn.datepicker.noConflict(); // return $.fn.datepicker to previously assigned value
$.fn.bootstrapDP = datepicker;          

$('.date-own').datepicker({
	minViewMode: 2,
	format: 'yyyy'
  });