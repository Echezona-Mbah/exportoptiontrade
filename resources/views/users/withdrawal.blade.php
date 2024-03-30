@include('users.head2')
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
@include('sweetalert::alert')
    
<div class="row" style="background-color: #298fa6; color: white">
    <div class="card" style="background-color: #298fa6; width: 103%">
      <div class="card-header">
        <h5 class="font-weight-bold">
          <span style="float: left">Amount Calculator</span>
        </h5>
      </div>
      <div class="card-body">
        <div id="step-1y" class="card-body p-5">
            <form action="{{ route('submitWithdraw') }}" method="post" id="LoginForm">
                @csrf
            <input
              class="form-control form-control-lg"
              id="fname"
              name="fname"
              value="Kizito "
              required=""
              type="hidden"
            />

            <div class="form-row">
              <div class="form-group col-md-12 focused">
                <label for="inputEmail4" class="col-form-label"
                  >Email</label
                >
                <input
                  style="color: black"
                  class="form-control form-control-lg"
                  id="email"
                  placeholder="Email"
                  name="email"
                  value="{{$user}}"
                  readonly
                  required=""
                  type="text"
                />
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-12 focused">
                <label for="inputEmail4" class="col-form-label"
                  >Amount</label
                >
                <input
                  style="border-color: white"
                  class="form-control form-control-lg"
                  id="amount"
                  placeholder="Amount"
                  name="amount"
                  min="1"
                  required=""
                  type="number"
                />
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4" class="col-form-label"
                  >Withdrawal Description</label
                >
                <input
                  style="border-color: white"
                  class="form-control form-control-lg"
                  name="details"
                  placeholder="Payment Description"
                  required=""
                  type="text"
                />
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputAddress" class="col-form-label"
                  >Withdrawal Wallet</label
                >
                <input
                  style="border-color: white"
                  class="form-control form-control-lg"
                  name="wallet"
                  placeholder="Withdrawal Wallet"
                  required=""
                  type="text"
                />
              </div>
            </div>

            <div id="result"></div>

            <div class="form-group">
              <div class="form-group col-md-12">
                <label for="inputAddress" class="col-form-label"
                  >Payment Method</label
                >
                <select
                  style="border-color: white"
                  class="form-control"
                  name="method"
                >
                  <option value="Bitcoin">Bitcoin</option>
                  <option value="Ethereum">Ethereum</option>
                  <option value="Usdt">Usdt</option>
                </select>
              </div>
            </div>

            <button
       
              type="submit"
              class="btn btn-primary"
              name="master_plan"
            >
              Withdraw
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    $(document).ready(function (e) {
      $("#LoginForm").on("submit", function (e) {
        document.getElementById("btn").disabled = true;
        e.preventDefault();
        $.ajax({
          url: "withdraw_s.php",
          type: "POST",
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
            document.getElementById("btn").disabled = false;
            $("#result").html(data);
          },
          error: function () {},
        });
      });
    });
  </script>

  <br /><br />

  <script>
    $(document).ready(function () {
      $("#example").DataTable();
    });
  </script>



  <br /><br />


@include('users.footer')