@extends('layouts.adminpages')



@section('content')

<br/><br/>
<div class = "container">
<div class= "card">
    
        <div class = card-header>
            <h3 class ="text-info text-center"> UPDATE YOUR ABOUT PROFILE</h3>
        </div>

      
            <div class ="card-body">
            <form method = "POST" action = "/about/{{$about->id}}">
            {{method_field('PATCH')}}
             {{ csrf_field() }}

             @include('includes.error')
                <div class ="form-group">
                <h4><label class="text-primary"> Site</label></h4>
                <input type="text" name = "site" class="form-control" value ="{{$about->site}}" placeholder="Enter Your Site Name Here">
                </div>

                <div class ="form-group">
                <h4><label class="text-primary"> Phone Number</label></h4>
                <input type="text" name = "phone" class="form-control"  value ="{{$about->phone}}" placeholder="Enter Your Phone Number Here">
                </div>

                 <div class ="form-group">
                <h4><label class="text-primary"> State</label></h4>
                <input type="text" name = "state" class="form-control" value ="{{$about->state}}" placeholder="Enter Your State Here">
                </div>

                 <div class ="form-group">
                 <h4> <label class="text-primary"> Degree</label></h4>
                <input type="text" name = "degree" class="form-control" value ="{{$about->degree}}" placeholder="Enter Your Degree Here">
                </div>

                 <div class ="form-group">
                 <h4> <label class="text-primary"> Email</label></h4>
                <input type="text" name = "email" class="form-control" value ="{{$about->email}}" placeholder="Enter Your Email Here">
                </div>

                
                 <div class ="form-group">
                    <button class ="btn btn-block btn-primary"> UPDATE </button>
                </div>
            </form>
            
     
    </div>
</div>
</div>

@endsection
