<script>
    google.charts.load('current', {packages: ['corechart', 'line']});
</script>
<?php
$node = menu_get_object();
$pageID = (int) trim($node->nid);
$result = db_query("SELECT onet FROM onet_codes where node_id=$pageID;");
$record = $result->fetchCol();
if (!empty($record)){
$loopCount = 0;
foreach ($record as $onetID) {
$onet = $onetID;
if ($onet != ''){
if ($loopCount === 0){
?>
<div id="accordion">
  <?php
  }
  $jresult = file_get_contents('http://www.austincc.edu/sites/default/files/json/' . $onet . '.json');
  $json = json_decode($jresult, TRUE);
  if (isset($json['data'][0]['attributes']['title'])) {
    ?>
      <div class="jobName">
          <strong><?php echo $json['data'][0]['attributes']['title'] ?></strong>
      </div>
    <?php
    $yearRow = 0;
    foreach ($json['data'][0]['attributes']['employment'] as $year) {
      if ($json['data'][0]['attributes']['employment'][$yearRow]['year'] == date('Y')) {
        $employed = $json['data'][0]['attributes']['employment'][$yearRow]['number'];
      }
      if ($json['data'][0]['attributes']['employment'][$yearRow]['year'] == (date('Y', strtotime('+4 year')))) {
        $futureEmployed = $json['data'][0]['attributes']['employment'][$yearRow]['number'];
      }
      $yearRow++;
    }
    ?>
      <div id="limit<?php echo $loopCount ?>">
          <div id="jobInfo<?php echo $loopCount ?>">
              <div class="hourlyInfo">
                  <strong><?php echo $json['data'][0]['attributes']['hourly-earnings'][2]['earnings'] ?></strong>
                  Hourly Wage <strong><?php echo $employed ?></strong> Currently
                  Employed
              </div>
              <div class="jobDesc">
                <?php echo $json['data'][0]['attributes']['description'] ?>
              </div>
              <div id="chart_div<?php echo $loopCount ?>"></div>
            <?php
            if ($futureEmployed > $employed) {
              $updown = 'increase by';
            }
            elseif ($futureEmployed < $employed) {
              $updown = 'decrease by';
            }
            else {
              $updown = 'remain steady with job change around';
            }
            $changePer = abs(round((($futureEmployed - $employed) / $employed) * 100, 2));

            ?>
              <div class="grid-5 jobRise">
                  <div class="grid-3 JRText">
                      <strong><?php echo $employed ?></strong> <?php echo $json['data'][0]['attributes']['title'] ?>
                      are employed. This number is expected
                      to <?php echo $updown ?> <strong><?php echo $changePer ?>
                          %</strong> over the next four years.
                  </div>
                  <div class="grid-2 JRMap">
                      <img src="/sites/default/files/ACCMSA.png"
                           alt="Austin Community College MSA Map">
                  </div>
              </div>
          </div>
      </div>
    <?php
    $final_codes[] = $onet;
    $loopCount++;
  }
  }
  }
  } ?>
</div>
<p>Data analysis of traditional and real-time labor market information (LMI) provided in collaboration with Emsi (Economic Modeling Specialists International), a CareerBuilder company.</p>
<input type="hidden" id="myLoopValue" value="<?php echo $loopCount ?>"/>
<input type="hidden" id="myOnetCodes"
       value="<?php echo implode(",", $final_codes); ?>"/>
<script>
    window.onload = function () {
        google.charts.setOnLoadCallback(drawChart);
    }
</script>