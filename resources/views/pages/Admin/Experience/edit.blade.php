@extends('layouts.adminpages')




@section('content')
<br/><br/>
<div class = "container">
<div class= "card">
    
        <div class = card-header>
            <h3 class ="text-info text-center"> EDIT YOUR PROFESSIONAL EXPERIENCE PROFILE</h3>
        </div>

      
            <div class ="card-body">
            <form method = "POST" action = "/experience/{{$experience->id}}">
            
             {{method_field('PATCH')}}
             {{ csrf_field() }}

             @include('includes.error')
                <div class ="form-group">
                <h4><label class="text-primary"> Position </label></h4>
                <input type="text" name = "position" class="form-control" value ="{{$experience->position}}">
                </div>

                <div class ="form-group">
                <h4><label class="text-primary"> Year </label></h4>
                <input type="text" name = "year" class="form-control"  value ="{{$experience->year}}">
                </div>

                 <div class ="form-group">
                <h4><label class="text-primary"> Company</label></h4>
                <input type="text" name = "company" class="form-control" value ="{{$experience->company}}">
                </div>

                 <div class ="form-group">
                 <h4> <label class="text-primary"> Responsiblities</label></h4>
                <textarea type="text" name = "responsibilities" class="form-control" >{{$experience->responsibilities}}</textarea>
                </div>

                
                 <div class ="form-group">
                    <button class ="btn btn-block btn-primary"> UPDATE PROFILE </button>
                </div>
            </form>
            
     
    </div>
</div>
</div>

@endsection