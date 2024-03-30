@include('users.head2')

    


<div class="container-fluid p-0">
    <div class="card b-0">
      <div class="row no-gutters" style="width: 133%">
        <div class="col-md-12 col-sm-12 light">
          <div class="card m-3 r-0 b-0 shadow">
            <div class="card-header white">
              <h4>Select Mode of Payment</h4>
            </div>
            <div class="card-body">
              <div class="col-sm-12">
                <div class="alert alert-warning mb-5">
                  <strong
                    >Note: To invest,Please copy and paste the selected
                    wallet address below to make your deposit and include
                    your username at the blockchain description while
                    sending your cryptocurrency for proper verification.
                    <br />
                    After sending your cryptocurrency to the address,click
                    on the button below and your deposit will be
                    automatically added to your account after three
                    confirmation from crypto network.
                  </strong>
                </div>

                <div class="row my-5 pb-3">
                  <!-- First column -->
                  <div class="col-md-6 mx-auto mb-4">
                    <div class="card-body pt-0">
                      <button
                        type="button"
                        class="btn btn-primary btn-lg btn-block"
                        data-toggle="modal"
                        data-target="#modal-support"
                      >
                        <i class="fas fa-plus left"></i> Payment Details
                      </button>

                      <div class="mt-2">
                        <ul class="striped list-unstyled">
                          <li>
                            <span class=""></span> Package Name<span
                              style="color: white; font-size: 20px"
                              class="badge bg-primary float-right"
                              >{{$lastDeposit->plan}}</span
                            >
                          </li>
                          <br />
                          <br />
                          <li>
                            <span class=""></span> Amount<span
                              style="color: white; font-size: 20px"
                              class="badge bg-primary float-right"
                              >£{{$lastDeposit->amount}}</span
                            >
                          </li>
                          <br />
                          <br />
                          <li>
                            <span class=""></span>Payment Method<span
                              style="color: white; font-size: 20px"
                              class="badge bg-primary float-right"
                              >{{$lastDeposit->method}}</span
                            >
                          </li>
                          <br />
                          <br />
                          <li>
                            <span class=""></span
                            ><a href="depositTable"
                              ><button
                                type="submit"
                                class="btn btn-info btn-lg"
                                data-toggle="modal"
                                style="width: 110px; padding: 5px"
                              >
                                Proceed
                              </button></a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- First column -->

                  <!-- Second column -->
                  <div class="col-md-6 mx-auto white z-depth-1">
                    <div class="row">
                      <div class="col-sm-6 col-md-9 py-4 px-3">
                        <h4 class="h4-responsive">Select Mode Payment</h4>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 pb-3">
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              @foreach($wallet as $wallets)
                              <tr>
                                <td>
                                  <label for=""> {{$wallets->name}}</label>
                                  <div class="md-form input-group">
                                    <input
                                      type="text"
                                      style="color: black"
                                      class="form-control"
                                      value="{{$wallets->wallet}}"
                                      id="myInput"
                                      readonly=""
                                      aria-label="Recipient&#39;s username with two button addons"
                                      aria-describedby="MaterialButton-addon4"
                                    />
                                    <div
                                      class="input-group-append"
                                      id="MaterialButton-addon4"
                                    >
                                      <button
                                        class="btn btn-warning"
                                        type="button"
                                        id="show"
                                        onclick="myFunction()"
                                      >
                                        Copy
                                      </button>
                                      <button
                                        class="btn btn-success"
                                        id="hide"
                                        type="button"
                                      >
                                        Copied
                                      </button>
                                    </div>
                                  </div>
                                </td>
                              </tr>

                              @endforeach

                            </tbody>
                          </table>
                        </div>
                        <!-- /Dropdown primary -->
                      </div>
                    </div>
                  </div>
                  <!-- Second column -->
                </div>
                <!-- First row -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Right Sidebar -->

  <!-- /.right-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->

  <script>
    function myFunction() {
      var copyText = document.getElementById("myInput");
      copyText.select();
      copyText.setSelectionRange(0, 99999);
      document.execCommand("copy");

      document.getElementById("show").style.display = "none";
      document.getElementById("hide").style.display = "block";
    }
  </script>

  <script>
    function myFunction2() {
      var copyText = document.getElementById("myInput2");
      copyText.select();
      copyText.setSelectionRange(0, 99999);
      document.execCommand("copy");

      document.getElementById("show2").style.display = "none";
      document.getElementById("hide2").style.display = "block";
    }
  </script>

  <script>
    function myFunction5() {
      var copyText = document.getElementById("myInput5");
      copyText.select();
      copyText.setSelectionRange(0, 99999);
      document.execCommand("copy");

      document.getElementById("show5").style.display = "none";
      document.getElementById("hide5").style.display = "block";
    }
  </script>

  <style>
    #hide {
      display: none;
    }

    #hide2 {
      display: none;
    }

    #hide5 {
      display: none;
    }
  </style>

  <!--/#app -->

  <!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
  <script>
    (function ($, d) {
      $.each(readyQ, function (i, f) {
        $(f);
      });
      $.each(bindReadyQ, function (i, f) {
        $(d).bind("ready", f);
      });
    })(jQuery, document);
  </script>

  <br /><br />


@include('users.footer')