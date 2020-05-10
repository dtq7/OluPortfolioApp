@extends('layouts.adminpages')




@section('content')
<br/><br/>
<div class = "container">
<div class= "card">
    
        <div class = card-header>
            <h3 class ="text-info text-center"> CREATE YOUR PORTFOLIO PROFILE</h3>
        </div>

      
            <div class ="card-body">
            <form method = "POST" action = "/portfolio" enctype = "multipart/form-data">
            
             {{ csrf_field() }}

             @include('includes.error')
                <div class ="form-group">
                <h4><label class="text-primary"> PORTFOLIO IMAGES </label></h4>
                <input type="file" name = "portfolio_images" class="form-control" value ="" required>
                </div>

                
                 <div class ="form-group" style = "text-align:center;">
                    <button class ="btn btn-primary btn-lg"> UPLOAD PORTFOLIO IMAGES </button>
                </div>
            </form>
            
     
    </div>
</div>
</div>

@endsection