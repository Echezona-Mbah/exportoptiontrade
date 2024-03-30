@include('users.head2')
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
@include('sweetalert::alert')
    
<div class="container-fluid p-0">
    <div class="card b-0">
        <div class="row no-gutters" style="width: 133%;">
         
         
            <div class="col-md-12 col-sm-12 light">

               <div class="card m-3 r-0 b-0 shadow">
                   <div class="card-header white"><h4>Amount Calculator</h4></div>
                   <div class="card-body">
                      
                               <div id="step-1y" class="card-body p-5">

                                <form action="{{ route('submitInvest') }}" method="post" id="LoginForm">
                                    @csrf
                            
                                    <input type="hidden" name="user_id" value="{{ $plan }}">

                                    <input type="hidden" name="plan" value="{{ $plan->plan}}">
                            
                                       <div class="form-row">
                                           <div class="form-group col-md-12 focused">
                                               <label for="inputEmail4" class="col-form-label">Email</label>
                                               <input style="color: black;" class="form-control form-control-lg" id="email" placeholder="Email" name="email" value="{{ $user }}" readonly required="" type="text">
                                           </div>
                                         
                                       </div>

                                       <div class="form-row">
                                        <div class="form-group col-md-12 focused">
                                            <label for="inputEmail4" class="col-form-label">Amount</label>
                                            <input class="form-control form-control-lg" 
                                                   id="amount" 
                                                   placeholder="Amount" 
                                                   name="amount" 
                                                   @if($plan->id == 1) 
                                                       min="{{$plan->min}}" max="{{$plan->max}}"
                                                   @elseif($plan->id == 2)
                                                        min="{{$plan->min}}" max="{{$plan->max}}"
                                                   @elseif($plan->id == 3)
                                                        min="{{$plan->min}}" max="{{$plan->max}}"
                                                   @elseif($plan->id == 4)
                                                        min="{{$plan->min}}" max="{{$plan->max}}"
                                                   @elseif($plan->id == 5)
                                                        min="{{$plan->min}}" 
                                                   @else 
                                                        min="{{$plan->min}}" max="{{$plan->max}}"
                                                   @endif 
                                                   required="" 
                                                   type="number">
                                        </div>
                                    </div>
                                    
                                       
                                       <div class="form-row">
                                           <div class="form-group col-md-12">
                                               <label for="inputEmail4" class="col-form-label">Payment Description</label>
                                               <input class="form-control form-control-lg" id="details" name="details" placeholder="Payment Description" required="" type="text">
                                           </div>
                                          
                                       </div>
                                       
                                       <div class="form-group">
                                           <label for="inputAddress" class="col-form-label">Payment Method</label>
                                          <select class="form-control" id="method" name="method">

                                    <option value="Bitcoin">Bitcoin</option>
                                    <option value="Ethereum">Ethereum</option>
                                    <option value="Usdt"> Usdt</option>                                 
                                </select>
                                       </div>


        
                                   
                                   <div id="result"></div>

                                        <button type="submit" class="btn btn-primary" name="master_plan" >Pay Now</button>
                                   </form>       
                                   
                               </div>
                             
                          
                           </div>
                       </div>

                   </div>
               </div>
            </div>
        </div>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
        $(document).ready(function (e) {
      $("#LoginForm").on("submit",(function(e) {
      document.getElementById("btn").disabled = true; 
    e.preventDefault();
    $.ajax({
      url: "invest_s.php?plan=1",
  type: "POST",
  data:  new FormData(this),
  contentType: false,
      cache: false,
  processData:false,
  success: function(data)
    {
    document.getElementById("btn").disabled = false;  
  $("#result").html(data);
    },
    error: function() 
    {
    }           
 });
}));
});
</script>


        

  <br /><br />


@include('users.footer')