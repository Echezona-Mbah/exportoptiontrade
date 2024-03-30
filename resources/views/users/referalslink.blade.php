@include('users.head2')
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
@include('sweetalert::alert')
<br><br>


<div
class="card"
style="
  background-color: #298fa6;
  width: 102%;
  margin-left: -13px;
  color: white;
"
>
<div class="card-header">
  <h5 class="font-weight-bold">
    <span style="float: left">Referral Link</span>
  </h5>
</div>
<div class="card-body">
  <div class="container_wizard wizard-bordered">
    <div class="table-responsive">
      Your Referral Link :
      https://www.expertoption-trade.com/signup?ref={{$userEmail}}
      <br /><br />

      <a
        href="https://www.expertoption-trade.com/signup?ref={{$userEmail}}"
        target="_blank"
      >
        <img
          src="images/banner125.gif"
          alt=""
          width="125"
          height="125"
        /><br />
      </a>

      <br /><br />
      <textarea class="form-control" cols="60" rows="4">
&lt;a href=https://www.expertoption-trade.com/signup?ref={{$userEmail}}&gt;
&lt;img src="https://millennium-investment.org/banners/banner125.gif" alt="" width="125" height="125" /&gt;&lt;br&gt;
&lt;/a&gt;
</textarea
      ><br /><br /><br />

      <a
        href="www.expertoption-trade.com/signup?ref=anondekizito7@gmail.com"
      >
        <img
          src="images/banner468.gif"
          alt=""
          width="468"
          height="60"
        /><br />
      </a>

      <br /><br />
      <textarea class="form-control" cols="60" rows="4">
&lt;a href=https://www.expertoption-trade.com/signup?ref={{$userEmail}}&gt;
&lt;img src="https://millennium-investment.org/banners/banner468.gif" alt="" width="468" height="60" /&gt;&lt;br&gt;
&lt;/a&gt;
</textarea
      ><br /><br /><br />

      <a
        href="www.expertoption-trade.com/signup?ref=anondekizito7@gmail.com"
      >
        <img
          src="images/banner728.gif"
          alt=""
          width="728"
          height="90" /><br
      /></a>
      <br /><br />
      <textarea class="form-control" cols="60" rows="4">
&lt;a href=https://www.expertoption-trade.com/signup?ref={{$userEmail}} &gt;
&lt;img src="https://millennium-investment.org/banners/banner728.gif" alt="" width="728" height="90" /&gt;&lt;br&gt;
&lt;/a&gt;
</textarea
      ><br /><br /><br />
    </div>
  </div>
</div>
</div>


<br /><br />

@include('users.footer')