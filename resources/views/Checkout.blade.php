<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Best Bussiness</title>

      <!-- Favicons -->
      <link rel="icon" href="/images/Asset1.png" />

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

      <!-- Fontawesome CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="/assets/plugins/fontawesome/css/all.min.css">

      <!-- Main CSS -->
      <link rel="stylesheet" href="/assets/css/style.css">


      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
      <![endif]-->
        </head>
    <body>


<div style="padding-top:80">

  <div class="content" style="min-height:600px">
    <div class="container" style="direction:rtl">

      <div class="row">




        <div class="col-md-7 col-lg-8">
          <div class="card">
            <div class="card-body">

              <!-- Checkout Form -->
              <form action="/checkout_response" method="post" onsubmit="return validateMyForm();">



                <div class="payment-widget" style="direction:rtl">
                  <h4 class="card-title text-right">الدفع</h4>

                  <!-- Credit Card Payment -->
                                        <div class="accordion" id="accordionExample">

                                        <div class="payment-list text-right">

                                            <div data-parent="#accordionExample" class="collapse" id="visa" >
                                            </div>




                                            <label data-toggle="collapse" href="#aman" role="button" aria-expanded="false" aria-controls="aman" class="payment-radio aman">
                                                <input id="aman" type="radio" name="radio" value="aman">
                                                <span class="checkmark"></span>
                                                <img src="https://www.sadad.com/_layouts/inc/SADAD.Internet.Portal/img/sadad_logo_ar.png" width="100">
                                                سداد
                                            </label>


                                            <div data-parent="#accordionExample" class="collapse" id="aman" >
                                                <div class="form-group form-focus">
                                                    <p class="text-center">
                                                        الدفع عبر بطاقات الائتمان
                                                    </p>
                                                </div>
                                            </div>

                                            <label data-toggle="collapse" href="#bank" role="button" aria-expanded="false" aria-controls="bank" class="payment-radio bank">
                                                <input type="radio" name="radio" id="bankn" value="bank" >
                                                <span class="checkmark"></span>
                                                 حواله بنكيه
                                            </label>




                                            <script type="text/javascript">

                                                function validateMyForm()
                                                {
                                                    var visa = document.getElementById("visa").checked;
                                                    var bank = document.getElementById("bank").checked;
                                                    var aman = document.getElementById("aman").checked;
                                                    var vodafone = document.getElementById("vodafone").checked;

                                                    if(vodafone)
                                                    {
                                                        var number = document.getElementById("vodafonen").value;
                                                        if(number == ""){
                                                            $('.toast').toast('show');
                                                            return false;
                                                        }

                                                        // var number = document.getElementById("vodafonenn").value;
                                                    }
                                                    else if(visa){

                                                    }
                                                    else if(bank){
                                                        var number = document.getElementById("bankn").value;
                                                        if(number == ""){
                                                            $('.toast').toast('show');
                                                            return false;
                                                        }
                                                    }
                                                    else if(aman){
                                                        // alert('aman');
                                                        // return false;
                                                    }

                                                    // alert("validations passed");
                                                    // return true;
                                                }
                                            </script>

                                            <div class="collapse" id="bank" data-parent="#accordionExample" >
                                                <div class="form-group form-focus">
                                                    <input name="bankAccount" type="text" class="form-control floating" >
                                                    <label class="focus-label text-right">رقم الحساب قمت ب التحويل منه</label>
                                                </div>
                                            </div>

                  </div>
                                            <p style="padding: 20px" class="text-center">يمكن التحويل الي حساب رقم </p>

                                        </div>
                  <!-- /Credit Card Payment -->

                  <!-- Paypal Payment -->

                  <!-- /Paypal Payment -->

                  <!-- Terms Accept -->

                  <!-- /Terms Accept -->
                  @csrf <!-- {{ csrf_field() }} -->

                  <!-- Submit Section -->
                  <div class="submit-section mt-4">
                    <button type="submit" id="myBtn" class="btn btn-primary submit-btn">ادفع</button>
                                            <div class="toast" data-autohide="false">
                                                <div class="toast-header">
                                                    <strong class=" text-right">خطا ب البيانات</strong>

                                                    <button style="position: absolute;left: 0;top: 5" type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>

                                                </div>
                                                <div class="toast-body text-right">
                                                    الرجاء كتابه البيانات كلها
                                                </div>
                                            </div>
                  </div>
                                        <script>

                                        </script>
                  <!-- /Submit Section -->

                </div>
              </form>
              <!-- /Checkout Form -->

            </div>
          </div>

        </div>

        <div class="col-md-5 col-lg-4 theiaStickySidebar">

          <!-- Booking Summary -->
          <div class="card booking-card">
            <div class="card-header">
              <h4 class="card-title text-right"> معلومات الدفع</h4>
            </div>
            <div class="card-body">

              <!-- Booking Doctor Info -->

              <!-- Booking Doctor Info -->

              <div class="booking-summary">
                <div class="booking-item-wrap">

                  <div class="booking-total">
                    <ul class="booking-total-list"  >
                      <li class="text-center">
                        <span class="text-right">اجمالي</span>


                      </li>
                      <li class="text-center">
                        <p class="total-cost text-center"> {{$user->total - $user->recieved}} ريال</p>

                      </li>

                    </ul>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- /Booking Summary -->

        </div>
      </div>

    </div>

  </div>
  <!-- /Page Content -->


</div>
<script src="/assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/classy-nav.min.js"></script>

<!-- Slick JS -->
<script src="/assets/js/slick.js"></script>

<!-- Custom JS -->
<script src="/assets/js/script.js"></script>
<script>
    $('input[type=radio]').change(function()
    {
        if (this.checked)
        {
            $(this).closest('.payment-radio')
                .find('input[type=radio]').not(this)
                .prop('checked', false);
        }
    });
</script>
    </body>
</html>
