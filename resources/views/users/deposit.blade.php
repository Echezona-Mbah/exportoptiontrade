@include('users.head2')
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
@include('sweetalert::alert')
<br><br>


<div class="row" style="background-color: #298fa6">
    <div
      class="card m-3 r-0 b-0 shadow"
      style="background-color: #298fa6"
    >
      <div class="card-header white"><h4>Plan</h4></div>
      <div class="card-body">
        <div id="step-1y" class="card-body p-5">
          <div
            class="container mb-5 mt-5"
            style="background-color: #298fa6">
            <div class="pricing card-deck flex-column flex-md-row mb-3">
                @foreach($plans as $plan)
              <div class="card card-pricing text-center px-3 mb-4">
                <span
                  class="h6 w-60 mx-auto px-4 py-1 rounded-bottom text-white shadow-sm"
                  style="background-color: #fbb915; color: white"
                  >{{ $plan->plan }}</span
                >
                <div class="bg-transparent card-header pt-4 border-0">
                  <h1
                    class="h1 font-weight-normal text-center mb-0"
                    data-pricing-value="15"
                    style="color: #fbb915">
                    {{ $plan->percent }}<span class="price" style="color: #fbb915">%</span>
                  </h1>
                </div>
                <div class="card-body pt-0">
                  <ul class="list-unstyled mb-4">
                    <li>
                      <span class="fa-li"></span>Minimum: <br />
                      £{{ $plan->min }}
                    </li>
                    <li>
                      <span class="fa-li"></span>Maximum: <br />
                      {{ $plan->curency }}{{ $plan->max }}
                    </li>
                  </ul>
                  <br />
                  <br />
                  <a href="invest/{{ $plan->id }}"
                    ><button
                      class="btn btn-outline-secondary mb-3"
                      style="background-color: #fbb915; color: white"
                    >
                      Invest Now
                    </button></a
                  >
                </div>
              </div>

              @endforeach



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br /><br />


@include('users.footer')