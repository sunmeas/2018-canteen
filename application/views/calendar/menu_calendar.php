<!--Note that FullCalendar needs MomentJS to work //-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/fullcalendar-3.8.2/fullcalendar.min.css">
<script src="<?php echo base_url();?>assets/js/moment-with-locales-2.19.3.min.js"></script>
<script src="<?php echo base_url();?>assets/fullcalendar-3.8.2/fullcalendar.min.js"></script>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-8"><hr>



<h1>List Menu Calendar</h1>
<p>Menu Calendar may be able to allow the connected user can add the menu celendar event.</p>

<div id='calendar'></div>
<!-- create modal of order item -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Please Leave your order information</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Start Date:</label>
                      <input type="text" class="form-control datepicker" id="recipient-name"  >
                    </div>
                    
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                      <label for="recipient-name" class="col-form-label">End date:</label>
                      <input type="text" class="form-control datepicker" id="recipient-name" >
                    </div> 
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                     <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Choose plate of food</label>
                     <select name="plate" class="form-control" id="recipient-name" >
                      <?php 
                        $plates  = array(0 ,1, 2, 3 , 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24 ,25);
                      foreach ($plates as  $value) {
                        echo "<option>".$value."</option>";
                        }
                      ?>
                     </select>  
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Choose price of food</label>
                      <select name="plate" class="form-control" id="recipient-name" >
                          <?php 
                            $price  = array( 0,1500, 2000, 2500,3000);
                                foreach ($price as  $value) {
                                    echo "<option>".$value."</option>";
                            }
                          ?>
                     </select>  
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Choose Plate of rice</label>
                      <select name="plate" class="form-control" id="recipient-name" >
                        <?php 
                          $plates  = array(0,1, 2, 3 , 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24 ,25);
                        foreach ($plates as  $value) {
                          echo "<option>".$value."</option>";
                          }
                        ?>
                     </select>  
                    </div>                  
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Choose price of rice</label>
                      <select name="plate" class="form-control" id="recipient-name" >
                          <?php 
                            $price  = array(0,1000, 1500, 2000);
                          foreach ($price as  $value) {
                            echo "<option>".$value."</option>";
                            }
                          ?>
                     </select>  
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                     <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Choose Meal Time</label>
                     <select name="foodTime" class="form-control" id="recipient-name" >
                      <?php 
                        $foodTimes  = array('---Select One---','Breakfast', 'Lunch ', 'Dinner');
                      foreach ($foodTimes as  $value) {
                        echo "<option>".$value."</option>";
                        }
                      ?>
                     </select>  
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-success" data-dismiss="modal">Create Even Now</button>
            </div>
          </div>
        </div>
      </div>
<!-- End of modal creation -->

<!-- Live example of usage //-->
<script type="text/javascript">
$(document).ready(function() {

  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,basicWeek,basicDay'
    },
    /*themeSystem: 'bootstrap3',*/
    defaultDate: '2017-11-12',
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    eventLimit: true, // allow "more" link when too many events
    events: [
      {
        title: 'Dinner party',
        start: '2017-11-01'
      },
      {
        title: 'Dinner party with staff',
        start: '2017-11-07',
        end: '2017-11-07'
      },
      {
        id: 999,
        title: 'Mixxed vegetables with leace',
        start: '2017-11-09T16:00:00'
      },
       {
        id: 999,
        title: 'Khmer cheese',
        start: '2017-11-09T16:00:00'
      },
       {
        id: 999,
        title: 'Fry ege',
        start: '2017-11-09T16:00:00'
      },
      {
        title: 'Click for Google',
        url: '',
        start: '2017-11-28'
      }
    ]
  });

});
</script>
</div>
</div>