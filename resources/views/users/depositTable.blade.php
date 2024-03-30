@include('users.head2')
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
@include('sweetalert::alert')

    
<div class="row" style="background-color: #298fa6">
    <div
      class="card"
      style="background-color: #298fa6; color: white; width: 103%"
    >
      <div class="card-header">
        <h5 class="font-weight-bold">
          <span style="float: left">Deposits List</span>
        </h5>
      </div>
      <div class="card-body">
        <div class="container_wizard wizard-bordered">
          <table
            id="example"
            class="table table-striped table-bordered"
            style="width: 100%"
          >
            <thead>
              <tr>
                <th>Email</th>
                <th>Amount</th>
                <th>Method</th>
                <th>Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
                @foreach($deposits as $deposit)
              <tr>
                <td>{{$deposit->email}}</td>
                <td>£{{$deposit->amount}}</td>
                <td>{{$deposit->method}}</td>
                <td>{{$deposit->created_at}}</td>
                <td>
                  <button
                    class="btn btn-warning btn-lg"
                    data-toggle="modal"
                    data-target="log.php"
                  >
                    <i class="fa fa-clock"></i> Pending
                  </button>
                </td>
              </tr>

              @endforeach


            </tbody>
            <!--tfoot>
      <tr>
          
      </tr>
  </tfoot-->
          </table>
        </div>
      </div>
    </div>
  </div>
  <br /><br />

  <script>
    $(document).ready(function () {
      $("#example").DataTable();
    });
  </script>




  <br /><br />


@include('users.footer')