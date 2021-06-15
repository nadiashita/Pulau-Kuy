@extends('user.app')
@section('content')

<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="home">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Profile</strong></div>
    </div>
    </div>
</div>  
 <div class="card-body">
                    <div class="row mb-3">
                     
                      
                    </div>

<!-- <div class="site-section"> -->
    <div class="container">
   <div class="col-md-12">
  
<div class="border p-4 rounded mb-4">
	 <div class="row">
                      <h4 class="card-title">Profile</h4> <br><br><br>

                      <div class="col text-right">
                      <a href="#" class="btn btn-primary">edit</a>
                      </div></div>
         <div class="col">
                       	<div class= "text-black">
		<p> Nama 		: {{$user->name}} </p>
		<p> username 	: {{$user->email}} </p>
		<p> Jenis Kelamin :  {{$user->jenis_kelamin}} </p>
		<p> No Telepon :  {{$user->no_tlp}} </p>
	</div>
</div>
 </div>
</div>
</div>
</div>
</div>
 

 </div>

    </div>
</div>
@endsection