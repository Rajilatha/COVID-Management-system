<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>corona</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


</head>
<body>
<x-headergs/>
<section>
 <div class="container">
     <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
               <div class="card-header">
                  Post posts
               </div> 
               <div class="card-body">
               @if(Session::has('post_updated'))
                        <div class="alert alert-success" role="alert">
                       {{Session::get('post_updated')}}
</div>
                        @endif
                
              <form method="POST" action="{{route('post.updatevac')}}">
                  @csrf
                  <input type="hidden" name="id" value="{{$post->id}}"/>

                  <div class="form_group">
                      <lable for="date">DATE</lable>
                      <input type="date" id="date" name="date" value="{{$post->date}}">
                      
                      </div>
                  <div class="form-group">
                      <lable for="time">Time</lable>
                      <input type="" name="time" class="form-control" value="{{$post->time}}">
                      @if ($errors->has('time'))

<span class="text-danger">{{ $errors->first('time') }}</span>

@endif

                   </div>

                  
                  <div class="form-group">
                      <lable for="vaccine">Vaccine Type</lable>
                      <input type="text" name="vaccine" class="form-control" value="{{$post->vaccine}}">
                      @if ($errors->has('vaccine'))

<span class="text-danger">{{ $errors->first('vaccine') }}</span>

@endif

                  </div>
                  
                    
             
                      <input type="submit" class="btn btn-success" value="update" />
                 
              </form>
              </div>
            </div>
        </div>
     </div>
     <div>

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>
</html>