@include('admin.head')
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
@include('sweetalert::alert')
<!-- / Navbar -->

      

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
        
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">
              Dashboard
           </h4>
            
            <div class="row mb-5">
              <div class="col-md-6 col-lg-4">
                <div class="card text-center mb-3">
                  <div class="card-body">
                    <h5 class="card-title"> {{$confirmedDepositsCount }}</h5>
                    <p class="card-text">Invested Users</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card text-center mb-3">
                  <div class="card-body">
                    <h5 class="card-title mx-auto">${{ number_format($totalBalance, 2) }}</h5>
                    <p class="card-text">Total Income</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card text-center mb-3">
                  <div class="card-body">
                    <h5 class="card-title">{{ $allUsersCount }}</h5>
                    <p class="card-text">All Users</p>
                  </div>
                </div>
              </div>
            </div>
            

              <div class="row">
                <div class="col-xl">
                  <div class="card p-2 jj">
                    <h5 class="card-header">Latest Members</h5>

                    <div class=" px-2 py-4 gap-3 ssg">
                      @foreach($userNames as $user)
                      <div class="bb">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">{{ $user->name }}</span>
                          <small class="text-muted"></small>
                        </div>
                      </div>
                      @endforeach

                    </div>
                    
                    <a href="allUser" class="btn btn-primary my-2">Show All Users</a>
                  </div>
                </div>
                
                <div class="col-xl">
                  <div class="card p-2">
                    <h5 class="card-header">Recent Withdrawals</h5>
                    <div class="card">
                      <div class="table-responsive text-nowrap">
                        <table class="table">
                          <thead class="table">
                            <tr>
                              <th>Username</th>
                              <th>Amount</th>
                              <th>Date</th>
                            </tr>
                          </thead>
                          @foreach($recentWithdrawals as $withdrawal)
                          <tbody class="table-border-bottom-0">
                            <tr>
                              <td>{{ $withdrawal->user->name }}</td>
                              <td>{{ $withdrawal->amount }}</td>
                              <td>{{ $withdrawal->created_at->format('Y-m-d H:i:s') }}</td>                            
                              {{-- <td>
                                <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                  </div>
                                </div>
                              </td> --}}
                            </tr>

                          </tbody>
                          @endforeach
                        </table>
                      </div>
                    </div>
                    <a href="allWithdrawl" class="btn btn-primary my-2">Show All Withdrawals</a>
                  </div>
                </div>
              </div>
              
            
              <div class="row mt-4">
                <div class="col-xl">
                  <div class="card p-2">
                    <h5 class="card-header">Recent Deposits</h5>
                    <div class="card">
                      <div class="table-responsive text-nowrap">
                        <table class="table">
                          <thead class="table">
                            <tr>
                              <th>Username</th>
                              <th>Amount</th>
                              <th>Date</th>
                              <th>View</th>
                            </tr>
                          </thead>
                          @foreach($recentDeposit as $deposit)
                          <tbody class="table-border-bottom-0">
                            <tr>
                              <td>{{ $deposit->user->name }}</td>
                              <td>{{ $deposit->amount}}</td>
                              <td>
                                {{ $deposit->created_at->format('Y-m-d H:i:s') }}
                              </td>
                              {{-- <td>
                                <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                  </div>
                                </div>
                              </td> --}}
                            </tr>
                            @endforeach

                          </tbody>
                        </table>
                      </div>
                    </div>
                    <a href="allDeposit" class="btn btn-primary my-2">Show All Deposits</a>
                  </div>
                </div>
                {{-- <div class="col-xl">
                  <div class="card p-2">
                    <h5 class="card-header">Recent Direct Messages</h5>
                    <div class="card">
                      <div class="table-responsive text-nowrap">
                        <table class="table">
                          <thead class="table">
                            <tr>
                              <th>Ticket ID</th>
                              <th>Name</th>
                              <th>Date</th>
                              <th>View</th>
                            </tr>
                          </thead>
                          <tbody class="table-border-bottom-0">
                            <tr>
                              <td>dfghjk</td>
                              <td>500</td>
                              <td>
                                Jan 13, 2023
                              </td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>asdfdh fs</td>
                              <td>200</td>
                              <td>
                                Jan 13, 2023
                              </td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>jvfgghh</td>
                              <td>130</td>
                              <td>
                                Jan 13, 2023
                              </td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>dhgjgffd</td>
                              <td>120</td>
                              <td>
                                Jan 13, 2023
                              </td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <a href="./messages.html" class="btn btn-primary my-2">Show All Direct Messages</a>
                  </div>
                </div> --}}
              </div>
              
            
          <!-- / Content -->

          
@include('admin.footer')