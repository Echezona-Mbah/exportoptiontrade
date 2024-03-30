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

                <form class="mt-4" method="post" action="{{ route('admin.updateWallet') }}">
                    @csrf
                    @method('put')
                    @foreach($wallets as $wallet)
                    <div class="mb-3">
                        <label for="wallet_{{ $wallet->id }}" class="form-label">{{ $wallet->name }}</label>
                        <input type="text" id="wallet_{{ $wallet->id }}" name="wallet[]" class="form-control" value="{{ $wallet->wallet }}" required>
                    </div>
                    {{-- <input type="text" value="{{ $wallet->id }}" hidden name='id' > --}}
                    @endforeach
                
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                
            </div>
        </div>
        
        
            

            

              
            

              
            
          <!-- / Content -->

          @if ($errors->any())
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
          <script>
              Swal.fire({
                  icon: 'error',
                  title: 'Validation Error',
                  html: `{!! implode('<br>', $errors->all()) !!}`,
                  confirmButtonText: 'OK',
              });
          </script>
      @endif
          
@include('admin.footer')