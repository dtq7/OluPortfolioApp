@extends('layouts.master1')

@section('content')


    
<br/><br/><br/>
    <div class = "container">
    <a href = "/"><button class = "btn btn-info"> Go Back to the Main Site </button></a>
    </div>


<br/><br/>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">

                        
                    <form method = "POST" action = "/admin">
                    
                    {{ csrf_field() }}

                    @include('includes.error')
                        <div class ="form-group">
                        <h4><label class="text-primary"> Email</label></h4>
                        <input type="text" name = "email" class="form-control" value ="" placeholder="Enter Your Email Here" required>
                        </div>

                        <div class ="form-group">
                        <h4><label class="text-primary"> Password </label></h4>
                        <input type="password" name = "password" class="form-control"  value ="" placeholder="Enter Your Password Here" required>
                        </div>

                        <div class ="form-group">
                            <button class="btn btn-primary"> Login</button>
                        </div>
                    </div>
            </div> 
        </div>    
    </div> 
</div>                         
                   
@endsection
