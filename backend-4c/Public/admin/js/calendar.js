var date = new Date();
var d = date.getDate();
var m = date.getMonth();
var y = date.getFullYear();
var h = {};
var AppCalendar = function () {

    return {
        //main function to initiate the module
        init: function () {
            this.initCalendar();
        },

        initCalendar: function () {

            if (!jQuery().fullCalendar) {
                return;
            }


            if (App.isRTL()) {
                if ($('#calendar').parents(".portlet").width() <= 720) {
                    $('#calendar').addClass("mobile");
                    h = {
                        right: 'title, prev, next',
                        center: '',
                        left: 'agendaDay, agendaWeek, month, today'
                    };
                } else {
                    $('#calendar').removeClass("mobile");
                    h = {
                        right: 'title',
                        center: '',
                        left: 'agendaDay, agendaWeek, month, today, prev,next'
                    };
                }
            } else {
                if ($('#calendar').parents(".portlet").width() <= 720) {
                    $('#calendar').addClass("mobile");
                    h = {
                        left: 'title, prev, next',
                        center: '',
                        right: 'today,month,agendaWeek,agendaDay'
                    };
                } else {
                    $('#calendar').removeClass("mobile");
                    h = {
                        left: 'title',
                        center: '',
                        right: 'prev,next,today,month,agendaWeek,agendaDay'
                    };
                }
            }

            var initDrag = function (el) {
                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim(el.text()) // use the element's text as the event title
                };
                // store the Event Object in the DOM element so we can get to it later
                el.data('eventObject', eventObject);
                // make the event draggable using jQuery UI
                el.draggable({
                    zIndex: 999,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0 //  original position after the drag
                });
            };

            var addEvent = function (title) {
                title = title.length === 0 ? "Untitled Event" : title;
                var html = $('<div class="external-event label label-default">' + title + '</div>');
                jQuery('#event_box').append(html);
                initDrag(html);
            };

            $('#external-events div.external-event').each(function () {
                initDrag($(this));
            });

            $('#event_add').unbind('click').click(function () {
                var title = $('#event_title').val();
                addEvent(title);
            });

            //predefined events
            $('#event_box').html("");
            addEvent("My Event 1");
            addEvent("My Event 2");
            addEvent("My Event 3");
            addEvent("My Event 4");
            addEvent("My Event 5");
            addEvent("My Event 6");
        }

    };
}();
function updateEvents(data) {
    $('#calendar').fullCalendar('destroy'); // destroy the calendar
    $('#calendar').fullCalendar({
        header: h,
        defaultView: 'month', // change default view with available options from http://arshaw.com/fullcalendar/docs/views/Available_Views/
        slotMinutes: 15,
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar !!!
        drop: function (date, allDay) { // this function is called when something is dropped

            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');
            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);
            console.log(copiedEventObject);

            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;
            copiedEventObject.className = $(this).attr("data-class");
            console.log(copiedEventObject);
            // render the event on the calendar
            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove();
            }
        },
        events: data
    })
}

function initCalendar() {
    $.ajax({
        type: "GET",
        url: '/restapi/calendar',
        dataType: 'json',
        cache: false,
        success: function (data) {
            console.log(data.data);
            var ro = [];
            $.each(data.data, function (i, v) {
                var event = {
                    title: v.title,
                    start: new Date(v.start),
                    end: new Date(v.end),
                    allDay: (v.allDay == 1),
                    backgroundColor: App.getBrandColor(v.backgroundColor),
                    url: v.url
                };
                ro.push(event)
            });
            updateEvents(ro);
        },
        error: function (err) {
            console.error(err);
            updateEvents([])
        }
    })
}

jQuery(document).ready(function () {
    AppCalendar.init();
    initCalendar();
});