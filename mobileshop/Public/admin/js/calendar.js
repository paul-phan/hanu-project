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

            var addEvent = function (title, start, url) {

                title = title.length === 0 ? "Untitled Event" : title;
                start = new Date(start);
                var html = $('<div class="external-event label label-default" data-url="' + url + '" data-start="' + start + '">' + title + '</div>');
                jQuery('#event_box').append(html);
                initDrag(html);
            };

            $('#external-events div.external-event').each(function () {
                initDrag($(this));
            });

            $('#event_add').unbind('click').click(function () {
                var title = $('#event_title').val();
                var start = $('#event-start').val();
                var url = $('#event-url').val();
                addEvent(title, start, url);
            });

            //predefined events
            $('#event_box').html("");
        }

    };
}();

function updateEvents(data) {
    $('#calendar').fullCalendar('destroy'); // destroy the calendar
    $('#calendar').fullCalendar({
        header: h,
        defaultView: 'month', // change default view with available options from http://arshaw.com/fullcalendar/docs/views/Available_Views/
        slotMinutes: 15,
        droppable: true, // this allows things to be dropped onto the calendar !!!
        drop: function () { // this function is called when something is dropped

            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');
            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);

            console.log($(this).text());
            // assign it the date that was reported
            copiedEventObject.url = $(this).attr("data-url");
            copiedEventObject.title = $(this).text();
            copiedEventObject.allDay = true;
            copiedEventObject.start = ($(this).attr("data-start") == "Invalid Date") ? new Date(y, m, d) : $(this).attr("data-start");
            // render the event on the calendar
            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            $.ajax({
                type: "POST",
                url: "/restapi/calendar/add",
                dataType: "json",
                cache: false,
                data: copiedEventObject,
                success: function (data) {
                    console.log(data);
                    $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
                    if ($('#drop-remove').is(':checked')) {
                        // if so, remove the element from the "Draggable Events" list
                        $(this).remove();
                    }
                },
                error: function (err) {
                    console.log(err);
                }
            });
            // is the "remove after drop" checkbox checked?

        },
        events: data,
        editable: true,
        eventResize: function (event, delta, revertFunc) {

            alert(event.title + " end is now " + event.end.format());

            if (!confirm("is this okay?")) {
                revertFunc();
            }

        },
        eventDrop: function (event, delta, revertFunc) {

            alert(event.title + " was dropped on " + event.start.format());

            if (!confirm("Are you sure about this change?")) {
                revertFunc();
            }
        },
        eventRender: function (event, element, revertFunc) {
            element.append("<span class='closeon'>X</span>");
            element.find(".closeon").click(function (e) {
                e.preventDefault();
                if (!confirm("Are you sure to delete?")) {
                    revertFunc();
                }
                $('#calendar').fullCalendar('removeEvents', event._id);
            });

        },
        eventClick: function (calEvent, jsEvent, view) {
            console.log(calEvent);
            console.log('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
            console.log('View: ' + view.name);

            // change the border color just for fun
            $(this).css('border-color', 'red');
            return false;
        }
    })
}


function initCalendar() {
    $.ajax({
        type: "GET",
        url: '/restapi/calendar',
        dataType: 'json',
        cache: false,
        success: function (data) {
            var ro = [];
            $.each(data.data, function (i, v) {
                var event = {
                    id: v.id,
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