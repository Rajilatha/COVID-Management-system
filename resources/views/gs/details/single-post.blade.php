<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>corona</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


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
                
              <form>
              <div class="form-group">
                      <lable for="nic_no">NIC Number</lable>
                      <input type="" name="nic_no" class="form-control"  value="{{$post->nic_no}}"placeholder="Enter the NIC number"/>
                   </div>
              <div class="form-group">
                      <lable for="fname">First Name</lable>
                      <input type="text" name="fname" class="form-control" value="{{$post->fname}}" placeholder="Enter the first name"/>
                  </div>
                  <div class="form-group">
                      <lable for="lname">Last Name</lable>
                      <input type="text" name="lname" class="form-control" value="{{$post->lname}}" placeholder="Enter the last name"/>
                   </div>
                   <div class="form-group">
                      <lable for="email">email</lable>
                      <input type="" name="email" class="form-control"  value="{{$post->email}}"placeholder="Enter the email"/>
                   </div>
                   <div class="form_group">
                      <lable for="adress">Address</lable>
                      <textarea class="form.control" name="address" rows="3">{{$post->address}}</textarea>
                    </div>
                   

                    <div class="form_group">
                      <lable for="age">Age</lable>
                      <input type="" name="age" class="form-control" value="{{$post->age}}">
                    </div>

                    <div class="form_group">
                    <lable for="gender">Gender</lable>
                    <select id="gender" name="gender" >
                    <option selected>{{$post->gender}}</option>
  <option value="Female">Female</option>
  <option value="Male">Male</option>
  <option value="other">Other</option>
</select>
     
                    </div>

                       <br>
                    <br>
                    
                    <div class="form_group">
                    <lable for="v1">First Vaccination</lable>
                    <select id="v1" name="v1" value="{{$post->v1}}">
                    <option selected>{{$post->v1}}</option>
        <option value="Not vaccinated">Not vaccinated </option>
        <option value="Vaccinated">vaccinated </option>
        
      </select>
     

                    </div>
                    <br>
                    <br>
                    
                    <div class="form_group">
                    <lable for="v2">First Vaccination</lable>
                    <select id="v2" name="v2" value="{{$post->v2}}">
                    <option selected>{{$post->v2}}</option>
        <option value="Not vaccinated">Not vaccinated </option>
        <option value="Vaccinated">vaccinated </option>
        
      </select>
     

                    </div>
                    
                    <br>
                    <br>

                    
                    <br>
                    <br>
             
                    
                 
              </form>
              </div>
            </div>
        </div>
     </div>
     <div>

     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>