<!DOCTYPE html>
<html>
<head>
	<title>Sending User ID</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<x-header/>
<div class="container">
		<div class="row">
			<div class="col-sm-4 offset-sm-4 mt-2">
				<form action="{{ route('sendMyMail3') }}" method="post">
                @csrf
				<div class="card">
				  <div class="card-header">
                  Sending UserId
				  </div>
				  <div class="card-body">
                        <div class="form-group">
				 			<label>Name</label>
				 			<input type="text" name="name"  class="form-control" value="{{$post->fname}} {{$post->lname}}">
				 		</div>
				 		<div class="form-group">
				 			<label>Email</label>
				 			<input type="email" id="email" name="email" class="form-control" value="{{$post->email}}">
				 		</div>
				 		<div class="form-group">
				 			<label>Subject</label>
				 			<input type="text" name="subject" class="form-control" value="Your user id">
				 		</div>
                         <div class="form-group">
				 			<label>Message</label>
				 			<textarea name="message" class="form-control" placeholder="Enter Message">Hi {{$post->fname}} {{$post->lname}}! your userid= {{$post->id}}. Get your vaccination appointments using this  id.
							 </textarea>
				 		</div>
                        

				  </div>
                  <div class="card-body">
                     <button type="submit" class="btn btn-primary">Send</button>
                  </dib>
				</div>
		      </form>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>