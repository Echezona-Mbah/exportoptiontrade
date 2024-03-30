@include('users.head2')
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
@include('sweetalert::alert')



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
    <span style="float: left">Personal Profile Info </span>
  </h5>
</div>
<div class="card-body">
  <div class="container_wizard wizard-bordered">
    <div class="table-responsive">
        <form action="{{ route('updateProfile') }}" method="post" id="LoginForm">
            @csrf
        <table
          cellspacing="0"
          cellpadding="2"
          border="0"
          class="table table-striped table-bordered"
        >
          <tbody>
            <tr>
              <td>Account Name:</td>
              <td>{{$users->name}} {{$users->lastname}}</td>
            </tr>
            <tr>
              <td>Registration date:</td>
              <td>{{$users->created_at}}</td>
            </tr>
            <tr>
              <td>Your First Name:</td>
              <td>
                <input
                  style="border-color: white"
                  type="text"
                  name="name"
                  value="{{$users->name}}"
                  placeholder="Kizito "
                  class="form-control"
                  size="30"
                />
              </td>
            </tr>

            <div id="result"></div>

            <tr>
              <td>Your Last Name:</td>
              <td>
                <input
                  style="border-color: white"
                  type="text"
                  name="lastname"
                  value="{{$users->lastname}}"
                  class="form-control"
                  size="30"
                />
              </td>
            </tr>

            <tr>
              <td>New Password:</td>
              <td>
                <input
                  style="border-color: white"
                  type="password"
                  name="password"
                  class="form-control"
                  size="30"
                />
              </td>
            </tr>
            <tr>
              <td>Retype Password:</td>
              <td>
                <input
                  style="border-color: white"
                  type="password"
                  name="repassword"
                  class="form-control"
                  size="30"
                />
              </td>
            </tr>
            <tr>
              <td>Your BITCOIN WALLET ADDRESS:</td>
              <td>
                <input
                  style="border-color: white"
                  type="text"
                  class="form-control"
                  size="30"
                  name="wallet"
                  value="{{$users->wallet}}"
                />
              </td>
            </tr>
            <tr>
              <td>Your E-mail address: <b>(UNEDITABLE)</b></td>
              <td>
                <input
                  style="border-color: white; color: black"
                  type="text"
                  style="color: black"
                  name="email"
                  value="{{$users->email}}"
                  readonly
                  class="form-control"
                  size="30"
                />
              </td>
            </tr>

            <tr>
              <td>&nbsp;</td>
              <td>
                <input
                  style="border-color: white"
                  type="submit"
                  value="Update"
               
                  class="btn btn-primary"
                />
              </td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
  </div>
</div>
</div>
<br /><br />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function (e) {
  $("#LoginForm").on("submit", function (e) {
    document.getElementById("btn").disabled = true;
    e.preventDefault();
    $.ajax({
      url: "profile_s",
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





@include('users.footer')