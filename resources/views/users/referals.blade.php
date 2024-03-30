@include('users.head2')
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
@include('sweetalert::alert')
<br><br>

<div class="card-header">
    <h5 class="font-weight-bold">
      <span style="float: left">Your Referrals</span>
    </h5>
  </div>
  <div class="card-body">
    <div class="container_wizard wizard-bordered">
      <div class="table-responsive">
        <br />
        <table
          class="table table-striped table-bordered"
          cellspacing="1"
          cellpadding="1"
        >
          <tbody>
            <tr>
              <td class="item">Referrals:</td>
              <td class="item">{{$referralsCount}}</td>
            </tr>
            <tr>
              <td class="item">Active referrals:</td>
              <td class="item">0.00</td>
            </tr>
            <tr>
              <td class="item">Total referral commission:</td>
              <td class="item"><!--$-->£{{$refamount}}</td>
            </tr>
          </tbody>
        </table>
        <br />
      </div>
    </div>
  </div>
</div>

<br /><br />

@include('users.footer')