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
              ALL Deposit
           </h4>

           <div class="card">
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th><strong>Name</strong></th>
                    <th><strong>Plan</strong></th>
                    <th><strong>Email</strong></th>
                    <th><strong>Amount</strong></th>
                    <th><strong>Discription</strong></th>
                    <th><strong>Method</strong></th>
                    <th><strong>ref Name</strong></th>
                    <th><strong>Date</strong></th>
                    <th><strong>Status</strong></th>
                    <th><strong>Action</strong></th>
                  </tr>
                </thead>
        
                <tbody class="table-border-bottom-0">
                  @foreach($deposits as $deposit)
                  <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> {{$deposit->user->name}}</td>
                    <td>{{$deposit->plan}}</td>
                    <td>{{$deposit->email}}</td>
                    <td>{{$deposit->amount}}</td>
                    <td>{{$deposit->description}}</td>
                    <td>{{$deposit->method}}</td>
                    <td>{{$deposit->ref}}</td>
                    <td>{{$deposit->created_at}}</td>
                    <td><span class="badge bg-label-primary me-1">{{$deposit->status}}</span></td>
                    <td>
                        @if ($deposit->status === 'pending')
                        <form action="{{ route('deposits.confirm', $deposit->id) }}" method="post" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Confirm Deposit</button>
                        </form>
                        @endif
                    
                        <a href="{{ route('admin.editDeposit', $deposit->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    
                        <form action="{{ route('admin.deleteDeposit', $deposit->id) }}" method="POST" class="d-inline">
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