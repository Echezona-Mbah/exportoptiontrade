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
              Edit Deposit
           </h4>
           <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Deposit</h5>
                
                <form id="editUserForm" class="mt-4" method="post" action="{{ route('admin.updateDeposit', $deposit->id) }}">
                    @csrf
                    @method('put')
        
                    <div class="mb-3">
                        <label for="Name" class="form-label">plan</label>
                        <input type="text" id="Name" name="plan" class="form-control" value="{{ $deposit->plan }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="Email" class="form-label">Your Email</label>
                        <input type="email" id="Email" name="email" class="form-control" value="{{ $deposit->email }}" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="LastName" class="form-label">Amount</label>
                        <input type="text" id="LastName" name="amount" class="form-control" value="{{ $deposit->amount }}" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="Email" class="form-label">Your Description</label>
                        <input type="text" id="Email" name="description" class="form-control" value="{{ $deposit->description}}" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="Bitcoin" class="form-label">Method</label>
                        <input type="text" id="Bitcoin" name="method" class="form-control" value="{{ $deposit->method}}" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="Balance" class="form-label">ref</label>
                        <input type="text" id="Balance" name="ref" class="form-control" value="{{ $deposit->ref }}" required>
                    </div>
        

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        
        
            

            

              
            

              
            
          <!-- / Content -->

          
@include('admin.footer')