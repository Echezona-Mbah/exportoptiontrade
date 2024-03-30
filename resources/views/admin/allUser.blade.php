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
              ALL User
           </h4>

           <div class="card">
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th><strong>Name</strong></th>
                    <th><strong>LastName</strong></th>
                    <th><strong>Email</strong></th>
                    <th><strong>referals</strong></th>
                    <th><strong>Bitcoin</strong></th>
                    <th><strong>Balance</strong></th>
                    <th><strong>refBalance</strong></th>
                    <th><strong>Date</strong></th>
                    <th><strong>Status</strong></th>
                    <th><strong>Action</strong></th>
                  </tr>
                </thead>
        
                <tbody class="table-border-bottom-0">
                  @foreach($userNames as $user)
                  <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> {{$user->name}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->ref}}</td>
                    <td>{{$user->wallet}}</td>
                    <td>{{$user->balance}}</td>
                    <td>{{$user->refamount}}</td>
                    <td>{{$user->created_at}}</td>
                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                    <td>
                      <a href="{{ route('admin.editUser', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                      <form action="{{ route('admin.deleteUser', $user->id) }}" method="POST" style="display:inline">
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