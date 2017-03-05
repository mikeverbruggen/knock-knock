$(document).ready(function(){

  // Datum en tijd voor documenten
  // ====================================================================================

$('#select_entry_date').datetimepicker({
      timeFormat: 'hh:mm',
      dateFormat: 'yy-mm-dd',
      stepMinute: 1,
      timeOnlyTitle: 'Kies tijd',
      timeText: 'Tijd',
      hourText: 'Uren',
      minuteText: 'Minuten',
      currentText: 'Huidige tijd en datum',
      closeText: 'Klaar'
});

  // Datum en tijd voor agenda
  // ====================================================================================

  Date.prototype.addHours = function(h) {
      var copiedDate = new Date(this.getTime());
      copiedDate.setTime(copiedDate.getTime() + (h*60*60*1000));
      return copiedDate;
  };

  Date.prototype.formatDateTime = function() {
      var hours   = (this.getHours() < 10) ? '0' + this.getHours() : this.getHours();
      var minutes = (this.getMinutes() < 10) ? this.getMinutes() + '0' : this.getMinutes();
      return $.datepicker.formatDate("yy-mm-dd", this) + ' ' + hours + ':' + minutes;
  };

  var calendar_options = {
      timeFormat: 'hh:mm',
      dateFormat: 'yy-mm-dd',
      stepMinute: 15,
      minDate: new Date(new Date().setMinutes(0)),
      timeOnlyTitle: 'Kies tijd',
      timeText: 'Tijd',
      hourText: 'Uren',
      minuteText: 'Minuten',
      currentText: 'Huidige tijd en datum',
      closeText: 'Klaar'
  };

  if ($('#agenda_entry_date').length && $('#agenda_expiration_date').length) {
      $('#agenda_entry_date').datetimepicker($.extend({}, calendar_options, {
          onClose: function(dateText, inst) {
              var endDateTextBox = $('#agenda_expiration_date');
              if (endDateTextBox.val() != '') {
                  var testStartDate = new Date(dateText);
                  var testEndDate = new Date(endDateTextBox.val());
                  if (testStartDate.addHours(1) > testEndDate) {
                      var endDate = testStartDate.addHours(1);
                      endDateTextBox.datetimepicker('setDate', endDate);
                      endDateTextBox.val(endDate.formatDateTime());
                  }
              }
              else {
                  var endDate = new Date(dateText).addHours(1);
                  endDateTextBox.datetimepicker('setDate', endDate);
                  endDateTextBox.val(endDate.formatDateTime());
              }
          },
          onSelect: function (selectedDateTime){
              var start = $(this).datetimepicker('getDate');
              $('#agenda_expiration_date').datetimepicker('option', 'minDate', new Date(start.getTime()));
          }
      }));

      $('#agenda_expiration_date').datetimepicker($.extend({}, calendar_options, {
          onClose: function(dateText, inst) {
              var startDateTextBox = $('#agenda_entry_date');
              if (startDateTextBox.val() != '') {
                  var testStartDate = new Date(startDateTextBox.val());
                  var testEndDate = new Date(dateText);
                  if (testStartDate.addHours(1) > testEndDate) {
                      var startDate = testEndDate.addHours(-1);
                      startDateTextBox.datetimepicker('setDate', startDate);
                      startDateTextBox.val(startDate.formatDateTime());
                  }
              }
              else {
                  var startDate = new Date(dateText).addHours(-1);
                  startDateTextBox.datetimepicker('setDate', startDate);
                  startDateTextBox.val(startDate.formatDateTime());
              }
          },
          onSelect: function (selectedDateTime){
              var end = $(this).datetimepicker('getDate');
              $('#agenda_entry_date').datetimepicker('option', 'maxDate', new Date(end.getTime()) );
          }
      }));
  }

  // tooltip
  $('.container').tooltip({
    selector: "a[rel=tooltip]"
  })

  // popover
  $("a[rel=popover]").popover({
    placement: 'top'
  })

  // table sort example
  // ==================

  $("#sortTableExample").tablesorter( { sortList: [[ 0, 0 ]] } )


  // add on logic
  // ============

  $('.add-on :checkbox').click(function () {
    if ($(this).attr('checked')) {
      $(this).parents('.add-on').addClass('active')
    } else {
      $(this).parents('.add-on').removeClass('active')
    }
  })


  // Copy code blocks in docs
  $(".copy-code").focus(function () {
    var el = this;
    // push select to event loop for chrome :{o
    setTimeout(function () { $(el).select(); }, 0);
  });


  // POSITION STATIC TWIPSIES
  // ========================

  $(window).bind( 'load resize', function () {
    $(".twipsies a").each(function () {
       $(this)
        .twipsy({
          live: false
        , placement: $(this).attr('title')
        , trigger: 'manual'
        , offset: 2
        })
        .twipsy('show')
      })
  })
});