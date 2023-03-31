<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Santorini Holidays, ​You&amp;apos;re planning to visit Santorini during your next trip to Greece?, ​How Traveling Resets the Brain, ​Volcanic Santorini is home to unique beaches, ​Things to Do in Santorini, ​We are the best travel agency to improve your deals">
  <meta name="description" content="">
  <title>Create Order Request</title>
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <!-- <script class="u-script" type="text/javascript" src="Create-Order-RequestJS.js" defer=""></script> -->
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="./Create-Order-RequestCSS.css" media="screen">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": ""
    }
  </script>
  <meta name="theme-color" content="#3a6ac3">
  <meta property="og:title" content="Create Order Request">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="en">
  <?php require_once 'Create-Order-Request_Backend.php'; ?>
  <section id="messages">
    <?php
    if (isset($_SESSION['message'])) : ?>
      <div class="alert alert-success u-form-send-success">
        <?php
        echo  $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
      </div>
    <?php endif ?>

    <?php
    include 'nav_footer/navigationBar.php';
    ?>
  </section>
  <div class="modal fade" id="trackOrderMap" tabindex="-1" role="dialog" aria-labelledby="#trackOrderMapTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 style="color:blue;" class="modal-title" id="trackOrderMapTitle">Approximated Cost For Sending .!</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            &times;
          </button>
        </div>
        <div class="modal-body">
        </div>
      </div>
    </div>
  </div>
  <section class="u-align-center u-clearfix u-valign-middle u-section-1" id="selectBOX">
    <img class="u-expanded-width u-image u-image-1" src="images/vvv-min.jpg" data-image-width="1470" data-image-height="980">
    <h2 class="u-custom-font u-font-montserrat u-text u-text-custom-color-3 u-text-default-lg u-text-default-xl u-text-1">Please Select Your Box&nbsp;</h2>
    <div class="u-list u-list-1">
      <div class="u-repeater u-repeater-1">
        <div class="u-align-center u-container-style u-custom-item u-list-item u-radius-30 u-repeater-item u-shape-round u-white u-list-item-1">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
            <div class="u-align-center u-container-style u-custom-item u-expanded-width u-group u-shape-round u-top-left-radius-20 u-top-right-radius-20 u-group-1">
              <div class="u-container-layout u-valign-top u-container-layout-2">
                <h3 class="u-custom-font u-font-montserrat u-text u-text-2">Box 1</h3>
                <h4 class="u-custom-font u-font-montserrat u-text u-text-3">$100</h4>
                <p class="u-text u-text-4"> Per Shipments</p>
              </div>
            </div>
            <ul class="u-custom-list u-file-icon u-text u-text-5">
              <li>
                <div class="u-list-icon">
                  <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" style="font-size: 0.9em; margin: -0.9em;">●</div>
                </div>Max 5Kg
              </li>
              <li>
                <div class="u-list-icon">
                  <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" style="font-size: 0.9em; margin: -0.9em;">●</div>
                </div>&nbsp; &nbsp;Fragile Proof
              </li>
            </ul>
            <a id='box1SelectBtn' class="u-active-palette-3-light-1 u-border-none u-btn u-btn-round u-button-style u-custom-font u-custom-item u-font-montserrat u-hover-palette-3-light-1 u-palette-3-base u-radius-50 u-text-custom-color-3 u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Select<span class="u-file-icon u-icon u-icon-1"><img src="images/1293029.png" alt=""></span>
            </a>

          </div>
        </div>
        <div class="u-align-center u-black u-container-style u-custom-item u-list-item u-radius-30 u-repeater-item u-shape-round u-list-item-2">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
            <div class="u-align-center u-container-style u-custom-item u-expanded-width u-group u-palette-3-base u-shape-round u-top-left-radius-30 u-top-right-radius-30 u-group-2">
              <div class="u-container-layout u-valign-top u-container-layout-4">
                <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-6"> Box 2</h3>
                <h4 class="u-custom-font u-font-montserrat u-text u-text-default u-text-7">$200</h4>
                <h6 class="u-custom-font u-font-montserrat u-text u-text-default u-text-8"> Per Shipments</h6>
              </div>
            </div>
            <ul class="u-custom-list u-file-icon u-text u-text-9">
              <li>
                <div class="u-list-icon">
                  <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" style="font-size: 0.9em; margin: -0.9em;">●</div>
                </div>Max 10kg
              </li>
              <li>
                <div class="u-list-icon">
                  <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" style="font-size: 0.9em; margin: -0.9em;">●</div>
                </div>Free Insurance
              </li>
            </ul>
            <a id='box2SelectBtn' class="u-active-palette-3-light-1 u-border-none u-btn u-btn-round u-button-style u-custom-font u-custom-item u-font-montserrat u-hover-palette-3-light-1 u-palette-3-base u-radius-50 u-text-custom-color-3 u-btn-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Select<span class="u-file-icon u-icon u-icon-2"><img src="images/1293029.png" alt=""></span>
            </a>
          </div>
        </div>
        <div class="u-align-center u-container-style u-custom-item u-list-item u-radius-30 u-repeater-item u-shape-round u-white u-list-item-3">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
            <div class="u-align-center u-container-style u-custom-item u-expanded-width u-group u-shape-round u-top-left-radius-20 u-top-right-radius-20 u-group-3">
              <div class="u-container-layout u-valign-top u-container-layout-6">
                <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-10"> Box 3</h3>
                <h4 class="u-custom-font u-font-montserrat u-text u-text-default u-text-11">$300</h4>
                <h6 class="u-custom-font u-font-montserrat u-text u-text-default u-text-12"> Per Shipments</h6>
              </div>
            </div>
            <ul class="u-custom-list u-file-icon u-text u-text-13">
              <li>
                <div class="u-list-icon">
                  <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" style="font-size: 0.9em; margin: -0.9em;">●</div>
                </div>Max 30kg
              </li>
              <li>
                <div class="u-list-icon">
                  <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" style="font-size: 0.9em; margin: -0.9em;">●</div>
                </div>Free Insurance
              </li>
            </ul>
            <a id='box3SelectBtn' class="u-active-palette-3-light-1 u-border-none u-btn u-btn-round u-button-style u-custom-font u-custom-item u-font-montserrat u-hover-palette-3-light-1 u-palette-3-base u-radius-50 u-text-custom-color-3 u-btn-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Select<span class="u-file-icon u-icon u-icon-3"><img src="images/1293029.png" alt=""></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-image u-shading u-section-2" id="carousel_ac4d" data-image-width="720" data-image-height="1080">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-33 u-white u-layout-cell-1">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <h6 class="u-text u-text-default u-text-palette-2-base u-text-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">*Fill The Required Details</h6>
                <div class="u-expanded-width u-form u-form-1">
                  <form action="Create-Order-Request_Backend.php" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 0;" source="email" name="form">
                    <input type="hidden" id="selctedBoxId" name="selctedBoxId" value="1">
                    <div class="u-form-group u-form-select u-form-group-1">
                      <label for="collectLocationSelect" class="u-label">Collect Location</label>
                      <div class="u-form-select-wrapper">
                        <select id="collectLocationSelect" name="collectLocationSelect" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-input u-input-rectangle u-white LocationSelect" required="required" autofocus="autofocus">
                          <option value="Colombo">Colombo</option>
                          <option value="Melbourne">Melbourne</option>
                          <option value="Sydney">Sydney</option>
                          <option value="New York">New York</option>
                          <option value="Beijin">Beijin</option>
                          <option value="Tokyo">Tokyo</option>
                          <option value="Delhi">Delhi</option>
                          <option value="London">London</option>
                          <option value="Kurunegala">Kurunegala</option>
                          <option value="Galle">Galle</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                          <path fill="currentColor" d="M4 8L0 4h8z"></path>
                        </svg>
                      </div>
                    </div>
                    <div class="u-form-group u-form-select u-form-group-2">
                      <label for="deliveryLocationSelect" class="u-label">Delivery Location</label>
                      <div class="u-form-select-wrapper">
                        <select id="deliveryLocationSelect" name="deliveryLocationSelect" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-input u-input-rectangle u-white LocationSelect" required="required" autofocus="autofocus">
                          <option value="Manila">Manila</option>
                          <option value="Moscow">Moscow</option>
                          <option value="Mexico City">Mexico City</option>
                          <option value="Tokyo">Tokyo</option>
                          <option value="Bankok">Bankok</option>
                          <option value="Karachi">Karachi</option>
                          <option value="Katunayaka">Katunayaka</option>
                          <option value="Negombo">Negombo</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                          <path fill="currentColor" d="M4 8L0 4h8z"></path>
                        </svg>
                      </div>
                    </div>
                    <div class="u-form-group u-form-radiobutton u-form-group-3">
                      <div class="u-form-radio-button-wrapper">
                        <input type="radio" id="MethodSelectAir" name="DeliveryMethodSelect" value="Air" required="required" autofocus="autofocus">
                        <label class="u-label" for="radiobutton">Air</label>
                        <br>
                        <input type="radio" id="MethodSelectGround" name="DeliveryMethodSelect" value="Ground" required="required" autofocus="autofocus">
                        <label class="u-label" for="radiobutton">Ground</label>
                        <br>
                        <input type="radio" id="MethodSelectFleet" name="DeliveryMethodSelect" value="Fleet" required="required" autofocus="autofocus">
                        <label class="u-label" for="radiobutton">Fleet</label>
                        <br>
                      </div>
                    </div>
                    <div class="u-form-group u-form-textarea u-form-group-4">
                      <label id="messageOnBox" for="textarea-fb18" class="u-label">Message To Be Engraved on Container Box</label>
                      <input type="textbox" id="messageOnBox" name="messageOnBox" class="u-agree-checkbox" required="">
                    </div>
                    <div class="u-form-agree u-form-group u-form-group-5">
                      <input type="checkbox" id="agreeToTerms" name="agree" class="u-agree-checkbox" required="">
                      <label for="agree-f183" class="u-label">I accept the <a href="#">Terms of Service</a>
                      </label>
                    </div>
                    <div class="u-form-group u-form-submit">
                      <br />
                      <!-- <a href="#" class="u-active-palette-2-light-2 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-2-base u-radius-12 u-btn-1">Submit</a> -->
                      <input type="submit" value="Create Request" name="saveOrderRequest" class="u-active-palette-2-light-2 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-2-base u-radius-12 u-btn-1">
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Thank you! Your Order Request Has Been Created. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                  </form>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-style u-layout-cell u-shape-rectangle u-size-27 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <h6 class="u-text u-text-default u-text-palette-2-base u-text-2">call us</h6>
                <p class="u-text u-text-3">1 (234) 567-891<br>1 (234) 987-654
                </p>
                <h6 class="u-text u-text-default u-text-palette-2-base u-text-4" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">location</h6>
                <p class="u-text u-text-5">121 Rock Sreet, 21 Avenue,<br>New York, NY 92103-9000
                </p>
                <h6 class="u-text u-text-default u-text-palette-2-base u-text-6" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Our top services</h6>
                <p class="u-text u-text-7">Cargo delivery</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-section-3" id="sec-8a21">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-text u-text-default u-title u-text-1"> Freight Cost Calculator</h1>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-grey-80 u-section-4" id="carousel_db8f">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-container-style u-group u-radius-50 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <h6 class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">*Applicable for International Deliveries Only and gives only an idea of how th ecost will be. The exact costs can be varied with other variables</h6>
          <div class="u-form u-form-1">
            <form action="//publish.nicepage.com/Form/Process" method="POST" class="u-clearfix u-form-spacing-28 u-form-vertical u-inner-form" source="email" name="form" style="padding: 0px;">
              <div class="u-form-group u-form-partition-factor-2 u-form-select u-form-group-1">
                <label for="select-4359" class="u-label u-label-1">From</label>
                <div class="u-form-select-wrapper">
                  <select id="select-4359" name="select-3" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-6 u-white">
                    <option value="Colombo">Colombo</option>
                    <option value="Melbourne">Melbourne</option>
                    <option value="Sydney">Sydney</option>
                    <option value="New York">New York</option>
                    <option value="Beijin">Beijin</option>
                    <option value="Tokyo">Tokyo</option>
                    <option value="Delhi">Delhi</option>
                    <option value="London">London</option>
                  </select>
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                    <path fill="currentColor" d="M4 8L0 4h8z"></path>
                  </svg>
                </div>
              </div>
              <div class="u-form-group u-form-partition-factor-2 u-form-select u-form-group-2">
                <label for="select-519f" class="u-label u-label-2">To</label>
                <div class="u-form-select-wrapper">
                  <select id="select-519f" name="select-4" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-6 u-white">
                    <option value="Manila">Manila</option>
                    <option value="Moscow">Moscow</option>
                    <option value="Mexico City">Mexico City</option>
                    <option value="Tokyo">Tokyo</option>
                    <option value="Bankok">Bankok</option>
                    <option value="Karachi">Karachi</option>
                  </select>
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                    <path fill="currentColor" d="M4 8L0 4h8z"></path>
                  </svg>
                </div>
              </div>
              <div class="u-form-group u-form-select u-form-group-3">
                <label for="select-b012" class="u-label u-label-3">Cargo Category</label>
                <div class="u-form-select-wrapper">
                  <select id="select-b012" name="select" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-6 u-white">
                    <option value="Mobile">Mobile</option>
                    <option value="Shoewear">Shoewear</option>
                    <option value="Clothes">Clothes</option>
                    <option value="Laptops">Laptops</option>
                    <option value="Food">Food</option>
                    <option value="Electronic">Electronic</option>
                  </select>
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                    <path fill="currentColor" d="M4 8L0 4h8z"></path>
                  </svg>
                </div>
              </div>
              <div class="u-form-group u-form-select u-form-group-4">
                <label for="select-f0a5" class="u-label u-label-4">Shipping method</label>
                <div class="u-form-select-wrapper">
                  <select id="select-f0a5" name="select-1" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-6 u-white">
                    <option value="Air freight">Air freight</option>
                    <option value="Sea freight">Sea freight</option>
                  </select>
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                    <path fill="currentColor" d="M4 8L0 4h8z"></path>
                  </svg>
                </div>
              </div>
              <div class="u-form-group u-form-select u-form-group-5">
                <label for="select-38c6" class="u-label u-label-5">Weight (Kg)</label>
                <div class="u-form-select-wrapper">
                  <select id="weightSelect" name="weightSelect" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-6 u-white">
                    <option value="0-1">0-1</option>
                    <option value="1-4">1-4</option>
                    <option value="5-10">5-10</option>
                    <option value="10-50">10-50</option>
                    <option value="50-100">50-100</option>
                  </select>
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                    <path fill="currentColor" d="M4 8L0 4h8z"></path>
                  </svg>
                </div>
              </div>
              <div class="u-align-center u-form-group u-form-submit">
                <a data-toggle="modal" data-target="#trackOrderMap" id="showApproximation" class="u-border-none u-btn u-btn-submit u-button-style u-palette-4-base u-btn-1">Show Approximations.<br>
                </a>
                <input type="submit" value="submit" class="u-form-control-hidden">
              </div>
              <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
              <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
              <input type="hidden" value="" name="recaptchaResponse">
            </form>
          </div><span class="u-file-icon u-icon u-icon-1"><img src="images/870107.png" alt=""></span><span class="u-file-icon u-icon u-icon-2"><img src="images/3052651.png" alt=""></span><span class="u-file-icon u-icon u-icon-3"><img src="images/126165.png" alt=""></span><span class="u-file-icon u-icon u-icon-4"><img src="images/684908.png" alt=""></span><span class="u-file-icon u-icon u-icon-5"><img src="images/727606.png" alt=""></span>
          <img class="u-image u-image-default u-preserve-proportions u-image-1" src="images/image.png" alt="" data-image-width="1024" data-image-height="1024">
          <h6 class="u-text u-text-2">
            <span style="font-weight: 400;">Powered by</span>&nbsp;
          </h6>
        </div>
      </div>
    </div>
  </section>

  <div class="card text-center">
    <div class="card-footer text-muted">
      <p>©️ 2022 Copyright:<a href="new devop.html">E-Cargo Service&nbsp;</a><img src="https://www.logotypes101.com/logos/660/4E5FCAC963A972ABFE3FE981905656AF/cargo.png" length="100" height="50" alt="logo"></p>
    </div>
  </div>

</body>
<script>
  $("#box1SelectBtn").click(function() {
    $('#selctedBoxId').val(1);
    $('html, body').animate({
      scrollTop: $("#carousel_ac4d").offset().top
    }, 1000);
  });
  $("#box2SelectBtn").click(function() {
    $('#selctedBoxId').val(2);
    $('html, body').animate({
      scrollTop: $("#carousel_ac4d").offset().top
    }, 1000);
  });
  $("#box3SelectBtn").click(function() {
    $('#selctedBoxId').val(3);
    $('html, body').animate({
      scrollTop: $("#carousel_ac4d").offset().top
    }, 1000);
  });

  $(".LocationSelect").change(function() {
    var collectionLocaion = $('#collectLocationSelect').val();
    var deliveryLocaion = $('#deliveryLocationSelect').val();
    if (collectionLocaion == "Colombo" && deliveryLocaion == "Katunayaka" || collectionLocaion == "Colombo" && deliveryLocaion == "Negombo" || collectionLocaion == "Kurunegala" && deliveryLocaion == "Negombo" || collectionLocaion == "Galle" && deliveryLocaion == "Negombo" || collectionLocaion == "Kurunegala" && deliveryLocaion == "Katunayaka" || collectionLocaion == "Galle" && deliveryLocaion == "Katunayaka") {
      $("#MethodSelectAir").prop('disabled', true);
      $("#MethodSelectFleet").prop('disabled', true);
      $("#MethodSelectGround").prop('disabled', false);
    } else {
      $("#MethodSelectAir").prop('disabled', false);
      $("#MethodSelectFleet").prop('disabled', false);
      $("#MethodSelectGround").prop('disabled', true);
    }
    $('input[name="DeliveryMethodSelect"]').prop('checked', false);
  });
  $(document).ready(function() {
    var collectionLocaion = $('#collectLocationSelect').val();
    var deliveryLocaion = $('#deliveryLocationSelect').val();
    if (collectionLocaion == "Colombo" && deliveryLocaion == "Katunayaka" || collectionLocaion == "Colombo" && deliveryLocaion == "Negombo" || collectionLocaion == "Kurunegala" && deliveryLocaion == "Negombo" || collectionLocaion == "Galle" && deliveryLocaion == "Negombo" || collectionLocaion == "Kurunegala" && deliveryLocaion == "Katunayaka" || collectionLocaion == "Galle" && deliveryLocaion == "Katunayaka") {
      $("#MethodSelectAir").prop('disabled', true);
      $("#MethodSelectFleet").prop('disabled', true);
      $("#MethodSelectGround").prop('disabled', false);
    } else {
      $("#MethodSelectAir").prop('disabled', false);
      $("#MethodSelectFleet").prop('disabled', false);
      $("#MethodSelectGround").prop('disabled', true);
    }
    $('input[name="DeliveryMethodSelect"]').prop('checked', false);
  });

  $('#showApproximation').click(function() {
    var selectedWeight = $("#weightSelect").val();
    if(selectedWeight == '0-1'){
      $('#trackOrderMapTitle').html("Estimated Cost in $49");
    }
    else if(selectedWeight == '1-4')
    {
      $('#trackOrderMapTitle').html("Estimated Cost in $59");
    }
    else if(selectedWeight == '5-10'){
      $('#trackOrderMapTitle').html("Estimated Cost in $69");
    }
    else if(selectedWeight == '10-50'){
      $('#trackOrderMapTitle').html("Estimated Cost in $102");
    }
    else{
      $('#trackOrderMapTitle').html("Estimated Cost in $240");
    }
  });
</script>

</html>