/**
 * add calendar widget for cantho gap
 */
$(document).ready(function () {
          $("#jqxcalendar").jqxCalendar();
          $(".jqx-calendar-cell-today").addClass("jqx-calendar-cell-selected").addClass("jqx-fill-state-pressed");
          $('#jqxcalendar').bind('valuechanged', function (event) {
              var date = event.args.date;
              $("#log").text(date.toDateString());
          });
          //search theo trong ngay
});