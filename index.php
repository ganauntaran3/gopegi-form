<?php

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Go Pegi</title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />
  <!-- Favicon -->
  <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="./css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="./css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="./css/argon.min9f1e.css?v=1.1.0" type="text/css">
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
  <!-- End Google Tag Manager -->
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="card-wrapper">
                 <!-- Default browser form validation -->
                    <div class="card">
                <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Browser defaults</h3>
                    </div>
                <!-- Card body -->
                    <div class="card-body">

                    <form method="POST" id="gopegi-form" action="register_process.php" enctype="multipart/form-data">

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="form-control-label mt-1 mb-3">File Type</label> <br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="passport" value="Passport" name="doc_type" class="custom-control-input">
                                <label class="custom-control-label" for="passport"> Passport </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="national_id" value="National ID" name="doc_type" class="custom-control-input" >
                                <label class="custom-control-label" for="national_id"> National ID </label>
                            </div>
                            <label id="error-doctype"></label>
                        </div>

                        <div class="form-group col-md-8">
                            <label class="form-control-label" for="doc_name">Upload your Passport/National ID</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="doc_name" lang="en" name="doc_name">
                                <label class="custom-file-label" for="doc_name">Select file</label>
                            </div>
                            <label id="error-docname"></label>
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label class="form-control-label mt-2 mb-3">Gender</label> <br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="male" name="gender" value="Male" class="custom-control-input">
                                <label class="custom-control-label" for="male"> Mr. </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="female" name="gender" value="Female" class="custom-control-input">
                                <label class="custom-control-label" for="female"> Mrs. </label>
                            </div> <br>
                            <label id="error-gender"></label>
                        </div>

                        <div class="col-md-8 mb-3">
                            <div class="form-group">
                                <label class="form-control-label" for="fullname">Fullname</label>
                                <input type="text" class="form-control" id="fullname" placeholder="Enter your fullname" name="fullname">
                            </div>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-control-label" for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" >
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-control-label" for="address">Full Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" >
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="form-control-label" for="countries">Country</label>
                            <select
                                id="countries"
                                class="form-control"
                                name="country"
                                >
                                <option value="">Choose...</option>
                            </select>
                            <label id="error-country"></label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-control-label" for="state">State</label>
                            <select class="form-control" name="state" id="states">
                                <option value="">Default select</option>
                            </select>
                            <label id="error-state"></label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-control-label" for="city_id">City</label>
                            <div class="state">
                              <select class="form-control" name="city" id="cities">
                                  <option value="">Default select</option>
                              </select>
                              <label id="error-city"></label>
                            </div>
                        </div>
                    </div>

                  <div class="form-row">
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <label class="form-control-label" for="bsc_address">BSC Address</label>
                        <input type="text" class="form-control" id="bsc_address" name="bsc_address" placeholder="Enter a BSC Address" >
                      </div>
                    </div>
                  </div>

                  <!-- <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3">
                      <input class="custom-control-input" id="invalidCheck2" type="checkbox" value="" >
                      <label class="custom-control-label" for="invalidCheck2">Agree to terms and conditions</label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                  </div> -->
                  <div id="cta" class="d-flex flex-row align-items-center justify-content-end">
                      <button class="btn btn-primary" type="submit">Submit</button>
                  </div>
                </form>
              </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</body>
<script src="./js/jquery.min.js"></script>
<script src="./js/jquery.validate.min.js"></script>
<script src="./js/jquery.validate-init.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="./js/argon.min9f1e.js?v=1.1.0"></script>
<script src="./js/demo.min.js"></script>
<script>
  ! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
      n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window,
    document, 'script', '../../../../connect.facebook.net/en_US/fbevents.js');

  try {
    fbq('init', '111649226022273');
    fbq('track', "PageView");

  } catch (err) {
    console.log('Facebook Track Error:', err);
  }
</script>
<script src="./js/script.js"></script>

<!-- <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script> -->

  <noscript>
    <img
        height="1"
        width="1"
        style="display:none"
        src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
</html>
