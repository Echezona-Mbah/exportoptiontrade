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
              ALL Withdrawal
           </h4>

           <div class="card">
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th><strong>Name</strong></th>
                    <th><strong>Email</strong></th>
                    <th><strong>Amount</strong></th>
                    <th><strong>Discription</strong></th>
                    <th><strong>Method</strong></th>
                    <th><strong>wallet</strong></th>
                    <th><strong>Date</strong></th>
                    <th><strong>Status</strong></th>
                    <th><strong>Action</strong></th>
                  </tr>
                </thead>
        
                <tbody class="table-border-bottom-0">
                  @foreach($withdrawals as $withdrawal)
                  <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> {{$withdrawal->user->name}}</td>
                    <td>{{$withdrawal->email}}</td>
                    <td>{{$withdrawal->amount}}</td>
                    <td>{{$withdrawal->description}}</td>
                    <td>{{$withdrawal->method}}</td>
                    <td>{{$withdrawal->wallet}}</td>
                    <td>{{$withdrawal->created_at}}</td>
                    <td><span class="badge bg-label-primary me-1">{{$withdrawal->status}}</span></td>
                    <td>
                        @if ($withdrawal->status === 'pending')
                        <form action="{{ route('allWithdraw.confirm', $withdrawal->id) }}" method="post" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Confirm Deposit</button>
                        </form>
                        @endif
                    
                        {{-- <a href="{{ route('admin.editDeposit', $deposit->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                    
                        <form action="{{ route('admin.deleteWithdrawal', $withdrawal->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                    
                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
            

            

              
            

              
            
          <!-- / Content -->

          
@include('admin.footer')