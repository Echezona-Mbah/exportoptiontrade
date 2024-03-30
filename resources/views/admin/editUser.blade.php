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
              Edit User
           </h4>
           <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit User</h5>
                
                <form id="editUserForm" class="mt-4" method="post" action="{{ route('admin.updateUser', $user->id) }}">
                    @csrf
                    @method('put')
        
                    <div class="mb-3">
                        <label for="Name" class="form-label">Your Name</label>
                        <input type="text" id="Name" name="name" class="form-control" value="{{ $user->name }}" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="LastName" class="form-label">Your Lastname</label>
                        <input type="text" id="LastName" name="lastname" class="form-control" value="{{ $user->lastname }}" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="Email" class="form-label">Your Email</label>
                        <input type="email" id="Email" name="email" class="form-control" value="{{ $user->email }}" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="Bitcoin" class="form-label">BITCOIN</label>
                        <input type="text" id="Bitcoin" name="wallet" class="form-control" value="{{ $user->wallet }}" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="Balance" class="form-label">BALANCE</label>
                        <input type="text" id="Balance" name="balance" class="form-control" value="{{ $user->balance }}" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="RefBalance" class="form-label">REFBALANCE</label>
                        <input type="text" id="RefBalance" name="refamount" class="form-control" value="{{ $user->refamount }}" required>
                    </div>
        
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        
        
            

            

              
            

              
            
          <!-- / Content -->

          
@include('admin.footer')