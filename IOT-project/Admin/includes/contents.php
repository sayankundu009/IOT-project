<!-- DASHBOARD PART -->
<?php  if ($_GET['nav'] == "dash") {?>

<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">overview</h2>
        </div>
    </div>
</div>
<div class="row m-t-25">
    <div class="col-sm-8 col-lg-12">
        <div class="overview-item overview-item--c1" id="temp">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="fas fa-thermometer-half" id="temp-icon"></i>
                    </div>
                    <div class="text">
                        <h2 id="Temperature">....</h2>
                        <span>Current Temperature</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart1"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<?php  }?>
<!-- DASHBOARD PART -->



<!-- DEVICES PART -->
<?php  if ($_GET['nav'] == "devices") {?>

  <div class="panel panel-default">
    <div class="panel-body">Room Light 1</div>
  </div>

  <div class="panel panel-default">
    <div class="panel-body">Room Light 2</div>
  </div>

  <div class="panel panel-default">
    <div class="panel-body">Room Light 3</div>
  </div>
  <div class="panel panel-default">
    <div class="panel-body">Room Light 4</div>
  </div>

<?php  }?>
<!-- DEVICES PART -->
