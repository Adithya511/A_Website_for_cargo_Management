<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Track your orders">
  <meta name="description" content="">
  <title>View Orders</title>
  <link rel="stylesheet" href="Track-Orders.css" media="screen">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
  <meta name="theme-color" content="#3a6ac3">
  <meta property="og:title" content="Contact">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="en">

<?php 
  include 'nav_footer/navigationBar.php';
?>

  <section class="u-align-center u-clearfix u-image u-shading u-section-1" id="carousel_13f7" data-image-width="1600" data-image-height="1067">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-text u-text-default u-text-1">View and Track your orders</h1>
      <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <table class="u-table-entity u-table-entity-1">
          <colgroup>
            <col width="18.2%">
            <col width="20.8%">
            <col width="20.2%">
            <col width="20.800000000000004%">
            <col width="19.900000000000006%">
          </colgroup>
          <thead class="u-align-center u-palette-2-dark-1 u-table-header u-table-header-1">
            <tr style="height: 56px;">
              <th class="u-align-left u-border-2 u-border-palette-2-base u-table-cell u-table-cell-1">Order ID</th>
              <th class="u-border-2 u-border-palette-2-base u-table-cell"><b>Box Type</b>
              </th>
              <th class="u-border-2 u-border-palette-2-base u-table-cell"><b>Delivery Method</b>
              </th>
              <th class="u-border-2 u-border-palette-2-base u-table-cell"><b>Delivery Status</b>
                <br>
              </th>
              <th class="u-border-2 u-border-palette-2-base u-table-cell"></th>
            </tr>
          </thead>

          <div class='container3' id='ordersTable'>
            <tbody class="u-align-center u-table-body u-white u-table-body-1">


              <?php
              $mysqli = new mysqli('localhost', 'root', '', 'ecargoms') or die(mysqli_error($mysqli));
              $resultset = $mysqli->query("SELECT * FROM order_details INNER JOIN tracking ON order_details.order_id=tracking.order_id") or die($mysqli->error);

              $table = '';

              while ($record = mysqli_fetch_assoc($resultset)) {
                $table .= '<tr style="height: 59px;">';
                $table .= '<td class="u-align-left u-border-2 u-border-white u-first-column u-table-cell">' . $record['order_id'] . '</td>';
                $table .= '<td class="u-border-2 u-border-white u-table-cell">' . $record['box_TypeNo'] . '</td>';
                $table .= '<td class="u-border-2 u-border-white u-table-cell">' . $record['delivery_Method'] . '</td>';

                if ($record['delivery_status'] == 'Completed') {
                  $table .= '<td class="u-border-2 u-border-white u-table-cell u-text-custom-color-4 u-table-cell-24">' . $record['delivery_status'] . '</td>';
                } elseif ($record['delivery_status'] == 'Awaiting Payment') {
                  $table .= '<td class="u-border-2 u-border-white u-table-cell u-text-custom-color-5 u-table-cell-14">' . $record['delivery_status'] . '</td>';
                } elseif ($record['delivery_status'] == 'Refund Requested') {
                  $table .= '<td class="u-border-2 u-border-white u-table-cell u-text-custom-color-6 u-table-cell-29">' . $record['delivery_status'] . '</td>';
                } else {
                  $table .= '<td class="u-border-2 u-border-white u-table-cell">' . $record['delivery_status'] . '</td>';
                }

                $trackButtonID =  'trackButton' . (int)$record['order_id'];
                $trackButton = '<a data-toggle="modal" data-target="#trackOrderMap' . (int)$record['order_id'] . '" data-Coordinates=' . $record['current_coordinates'] . ' class="u-border-2 u-border-hover-palette-1-base u-border-palette-1-base u-btn u-btn-round u-button-style u-hover-palette-1-base u-none u-radius-50 u-btn-1">Track Order</a>';

                ($record['delivery_status'] == 'Shipment in Progress') ? $table .= '<td class="u-border-2 u-border-white u-table-cell">' . $trackButton . '</td>' : $table .= '<td class="u-border-2 u-border-white u-table-cell"></td>';

                $table .= '</tr>';

                $dynamicScript = '<div class="modal fade" id="trackOrderMap' . (int)$record['order_id'] . '" tabindex="-1" role="dialog" aria-labelledby="#trackOrderMapTitle' . (int)$record['order_id'] . '" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h4 style="color:blue;" class="modal-title" id="trackOrderMapTitle' . (int)$record['order_id'] . '">Your Order is Here and on the way.!</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       &times;
                      </button>
                    </div>
                    <div class="modal-body">
                      <iframe width="100%" height="500" src="https://maps.google.com/maps?q=' . $record['current_coordinates'] . '&output=embed"></iframe>
                    </div>
                  </div>
                </div>
                </div>';

                if ($record['delivery_status'] == 'Shipment in Progress') {
                  echo $dynamicScript;
                }
              }
              echo $table;
              ?>
            </tbody>
        </table>
      </div>
    </div>
  </section>

  <div class="card text-center">
    <div class="card-footer text-muted">
      <p>©️ 2022 Copyright:<a href="new devop.html">E-Cargo Service&nbsp;</a><img src="https://www.logotypes101.com/logos/660/4E5FCAC963A972ABFE3FE981905656AF/cargo.png" length="100" height="50" alt="logo"></p>
    </div>
  </div>


 <script src="http://code.jquery.com/jquery.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="application/ld+json">
    < script type = "application/ld+json" > {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": ""
    }
  </script>
</body>

</html>