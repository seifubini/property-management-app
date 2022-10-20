"use strict";

var KTCalendarListView = function() {

    return {
        //main function to initiate the module
        init: function() {
            var todayDate = moment().startOf('day');
            var YM = todayDate.format('YYYY-MM');
            var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
            var TODAY = todayDate.format('YYYY-MM-DD');
            var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

            var get_inspections = "{{ route('get_inspections') }}";

            var calendarEl = document.getElementById('kt_calendar');

            $.ajax({
                url: "get_inspections",
                type: 'GET',
                success: function(inspections_data) {
                    var inspections = $.parseJSON(inspections_data);

                    var calendar = new FullCalendar.Calendar(calendarEl, {
                    plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],

                    isRTL: KTUtil.isRTL(),
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                    },

                    height: 800,
                    contentHeight: 750,
                    aspectRatio: 3,  // see: https://fullcalendar.io/docs/aspectRatio

                    views: {
                        dayGridMonth: { buttonText: 'month' },
                        timeGridWeek: { buttonText: 'week' },
                        timeGridDay: { buttonText: 'day' },
                        listDay: { buttonText: 'list' },
                        listWeek: { buttonText: 'list' }
                    },

                    defaultView: 'dayGridMonth',
                    defaultDate: TODAY,

                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    navLinks: true,
                    events: inspections,

                    //on click show modal
                    dateClick: function(info) {
                        var clicked_date = info.dateStr;

                        $("#inspection_date").val(clicked_date);

                        $("#InspectionModal").modal('show');
                    },
                    //on click edit inspection info
                    eventClick: function(info) {
                        var inspection_id = info.event.id;

                        window.open('edit_inspection'+'/'+inspection_id, '_self');
                    },
                    eventRender: function(info) {
                        var element = $(info.el);

                        if (info.event.extendedProps && info.event.extendedProps.description) {
                            if (element.hasClass('fc-day-grid-event')) {
                                element.data('content', info.event.extendedProps.description);
                                element.data('placement', 'top');
                                KTApp.initPopover(element);
                            } else if (element.hasClass('fc-time-grid-event')) {
                                element.find('.fc-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                            } else if (element.find('.fc-list-item-title').lenght !== 0) {
                                element.find('.fc-list-item-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                            }
                        }
                    }
                });

                calendar.render();
                }
            });

        }
    };
}();

jQuery(document).ready(function() {
    KTCalendarListView.init();
});
