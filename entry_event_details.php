<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

    <style>
        .row{
            width: 700 !important;
            margin-left:50 !important;
            margin-top: 15 !important;
        }
    </style>
    </head>
    <body>
        <div class="container" style="margin-top:10%">
<div id="msg"></div>
   <form id="event_form" method="post" action="submit_event_details.php">

        <div class="row">
            <div class="form-group">
                <div class="col-md-6">
                    <label class="col-md-5">Event Title: </label>
                    <input class="form-control col-md-7" type="text" id="title" name="title"/>
                </div>  
                
            </div>
        </div>

        <div class="row">
            <div class="form-group">
            <div class="col-md-6">
                    <label class="col-md-5">Event Start Date: </label>
                    <input class="form-control col-md-7" type="text" id="start_date" name="start_date" />
                </div>  
                <div class="col-md-6">
                    <label class="col-md-5">Event End Date: </label>
                    <input class="form-control col-md-7" type="text" id="end_date" name="end_date"/>
                </div>  
            </div>    
            </div>

            <div class="row">
            <div class="form-group">
            <label class="col-md-3">Recurrence:  </label>
                    <div class="col-md-3">
                    <input  type="radio" id="repeat" name="repeat" value="1"/>
                    <label>Repeat</label>
                     </div>
                     <div class="col-md-3">
                    <select id="repeat_every" name="repeat_every">
                        <option value="">Please Select</option>
                        <option value="every">Every</option>
                        <option value="every_other">Every Other</option>
                        <option value="every_third">Every Third</option>
                        <option value="every_fourth">Every Fourth</option>
                    </select> 
                    </div>

                    <div class="col-md-3">
                    <select id="repeat_d_w_m_y" name="repeat_d_w_m_y">
                        <option value="">Please Select</option>
                        <option value="day">Day</option>
                        <option value="week">Week</option>
                        <option value="month">Month</option>
                        <option value="year">Year</option>
                    </select> 
                    </div>
                </div>  
                
            </div>    
            </div>

            <div class="row">
            <div class="form-group" style="margin-left:150">

            <div class="col-md-4">
                    <input  type="radio" id="repeat_on" name="repeat_on" value="1"/>
                    <label for="repeat">Repeat on the</label>
            </div>
            <div class="col-md-8">
            <select id="repeat_time" class="col-md-2" name="repeat_time">
                        <option value="">Please Select</option>
                        <option value="First">First</option>
                        <option value="Second">Second</option>
                        <option value="Third">Third</option>
                        <option value="Fourth">Fourth</option>
                    </select> 
                    <select id="repeat_week_day" name="repeat_week_day" class="col-md-2">
                        <option value="">Please Select</option>
                        <option value="Sun">Sun</option>
                        <option value="Mon">Mon</option>
                        <option value="Tue">Tue</option>
                        <option value="Wed">Wed</option>
                        <option value="Thu">Thu</option>
                        <option value="Fri">Fri</option>
                        <option value="Sat">Sat</option>
                    </select> 
                    <select id="repeat_months" name="repeat_months" class="col-md-2">
                        <option value="">Please Select</option>
                        <option value="">Month</option>
                        <option value="3months">3 Months</option>
                        <option value="4months">4 Months</option>
                        <option value="6months">6 Months</option>
                    </select> 
            </div>
                
            </div>    
            </div>
            
    </form>

    <div class="row">
            <button class="btn btn-success btn-sm" style="float:right" onclick="validateSubmit()">Submit</button>
            </div>

        </div>
            
    </body>
</html>
<script>
    $(function () {
  $("#start_date").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  })

  $("#end_date").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  })
});

function validateSubmit()
{

    

    if($("#title").val()=='')
    {
        alert('Event Title must be enetred!');
        return false;
    }
    else if($("#start_date").val()=='')
    {
        alert('Start Date must be enetred!');
        return false;
    }
    else if($("#end_date").val()=='')
    {
        alert('End Date must be enetred!');
        return false;
    }
    else if($("#repeat").checked == false && $("#repeat_on").checked == false)
    {
        alert('Please check repeat details');
        return false;
    }
    else if ($("#repeat").checked == true && $("#repeat_every").val()=='')
       { alert('Please select Repeat Every')
    }
    else if ($("#repeat").checked == true && $("#repeat_d_w_m_y").val()==''){
        alert('Please select Repeat Day/Week/Month/year')
    }
    else if ($("#repeat_on").checked == true && $("#repeat_time").val()=='')
        {alert('Please select Repeat Time')
    }
    else if ($("#repeat_on").checked == true && $("#repeat_week_day").val()=='')
        {alert('Please select Repeat week day')
    }
    else if ($("#repeat_on").checked == true && $("#repeat_months").val()=='')
        {alert('Please select Repeat months')
    }
    else{
        $('form').submit();
    }
}

</script>