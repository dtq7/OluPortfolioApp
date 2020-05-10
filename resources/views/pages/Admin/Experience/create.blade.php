@extends('layouts.adminpages')



@section('content')
<br/><br/>
<div class = "container">
<div class= "card">
    
        <div class = card-header>
            <h3 class ="text-info text-center"> CREATE YOUR PROFESSIONAL EXPERIENCE PROFILE</h3>
        </div>

      
            <div class ="card-body">
            <form method = "POST" action = "/experience">
            
             {{ csrf_field() }}

             @include('includes.error')
                <div class ="form-group">
                <h4><label class="text-primary"> Position </label></h4>
                <input type="text" name = "position" class="form-control" value ="" placeholder="Enter The Position Held Here">
                </div>

                <div class ="form-group">
                <h4><label class="text-primary"> Year </label></h4>
                <input type="text" name = "year" class="form-control"  value ="" placeholder="Enter The Start Year To End Year Here">
                </div>

                 <div class ="form-group">
                <h4><label class="text-primary"> Company</label></h4>
                <input type="text" name = "company" class="form-control" value ="" placeholder="Enter The Company Name Here">
                </div>

                 <div class ="form-group">
                 <h4> <label class="text-primary"> Responsiblities</label></h4>
                <textarea type="text" name = "responsibilities" class="form-control" value ="" rows = "8" placeholder="Briefly Explain Your Responsiblities Here. Note:Not More Than 255 Words"></textarea>
                </div>

                
                 <div class ="form-group">
                    <button class ="btn btn-block btn-primary"> CREATE PROFILE </button>
                </div>
            </form>
            
     
    </div>
</div>
</div>

@endsection