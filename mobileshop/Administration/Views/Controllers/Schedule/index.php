<!-- BEGIN CONTENT BODY -->
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> Calendar
    <small>calendar page</small>
</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit bordered calendar">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green sbold uppercase">Calendar???</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <!-- BEGIN DRAGGABLE EVENTS PORTLET-->
                        <h3 class="event-form-title margin-bottom-20">Draggable Events</h3>
                        <div id="external-events">
                            <form class="inline-form">
                                <textarea class="form-control" placeholder="Event Title..." id="event_title"></textarea>
                                <label>Start:</label>
                                <div class='input-group date datetimepicker'>
                                    <input id="event-start" type='text' class="form-control"/>
                                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                                </div>
                                <label>Url:</label><input class="form-control" name="url" id="event-url" type="url"/>
                                <br/>
                                <a href="javascript:;" id="event_add" class="btn green"> Add Event </a>
                            </form>
                            <hr/>
                            <div id="event_box" class="margin-bottom-10"></div>
                            <label for="drop-remove">
                                <input type="checkbox" id="drop-remove"/>remove after drop </label>
                            <hr class="visible-xs"/>
                        </div>
                        <!-- END DRAGGABLE EVENTS PORTLET-->
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div id="calendar" class="has-toolbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END CONTENT BODY -->


<link href="dashboard/js/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
<script src="dashboard/js/moment.min.js" type="text/javascript"></script>
<script src="dashboard/js/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="dashboard/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="dashboard/js/calendar.js" type="text/javascript"></script>
<script>
$('.datetimepicker').datetimepicker({
        format:      'YYYY-MM-DD HH:mm',
    });
</script>