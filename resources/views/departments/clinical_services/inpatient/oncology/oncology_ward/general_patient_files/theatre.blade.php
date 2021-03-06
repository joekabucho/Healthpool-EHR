@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
       <div class="row">
		<div class="col-md-12">	
				<h3 class="offset-4">	
					THEATRE
				</h3>
				<form class="offset-6">
				  <div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Unit No.</label>
				    <div class="col-sm-8">
				      <input type="text"   class="form-control" id="staticEmail" value="">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Name</label>
				    <div class="col-sm-8">
				      <input type="text"   class="form-control" id="staticEmail" value="">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Age.</label>
				    <div class="col-sm-8">
				      <input type="text"   class="form-control" id="staticEmail" value="">
				    </div>
				  </div>
				  <div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">Sex.</label>
					    <div class="col-md-5">
					      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
						  <label class="form-check-label" for="exampleRadios1">
						    Male
						  </label>
					    </div>
					     <div class="col-md-5">
					      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
						  <label class="form-check-label" for="exampleRadios1">
						    female
						  </label>
					    </div>
					</div>
					<div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Date.</label>
				    <div class="col-sm-8">
				      <input type="Date"   class="form-control" id="staticEmail" value="">
				    </div>
				  </div>
				</form>
				<h3 class="offset-2">	
					THEATRE
				</h3>
				  
				  <form class=" col-md-6 ">
				  <div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Time</label>
				    <div class="col-sm-8">
				      <input type="time"   class="form-control" id="staticEmail" value="">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Date</label>
				    <div class="col-sm-8">
				      <input type="date"   class="form-control" id="staticEmail" value="">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Diagnosis</label>
				    <div class="col-sm-8">
				      <input type="text"   class="form-control" id="staticEmail" value="">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Operation</label>
				    <div class="col-sm-8">
				      <input type="text"   class="form-control" id="staticEmail" value="">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Anaesthesist</label>
				    <div class="col-sm-8">
				      <input type="text"   class="form-control" id="staticEmail" value="">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Anaesthetic Agent</label>
				    <div class="col-sm-8">
				      <input type="text"   class="form-control" id="staticEmail" value="">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Assistants</label>
				    <div class="col-sm-8">
				      <input type="text"   class="form-control" id="staticEmail" value="">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Scrub Nurse</label>
				    <div class="col-sm-8">
				      <input type="text"   class="form-control" id="staticEmail" value="">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Circulating Nurse</label>
				    <div class="col-sm-8">
				      <input type="text"   class="form-control" id="staticEmail" value="">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Insicion</label>
				    <div class="col-sm-8">
				      <input type="text"   class="form-control" id="staticEmail" value="">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Procedure And Findings</label>
				    <div class="col-sm-8">
				      <input type="text"   class="form-control" id="staticEmail" value="">
				    </div>
				  </div>
				</form>
		</div>
		<br>
		<br>
		<br>
		<br>
		<div class="col-md-10 offset-1">

			<table class="table table-bordered">
	
			  <thead>
			    <tr>
			      <th scope="col">Bed</th>
			      <th scope="col">Patient's Name</th>
			      <th scope="col">DOA</th>
			      <th scope="col">IP No </th>
				  <th scope="col">DOCTORS</th>
				  <th scope="col">nursing care</th>
				  <th scope="col">drugs</th>
				  <th scope="col">Lab </th>
				  <th scope="col">physio </th>
				  <th scope="col">X-ray </th>
				  <th scope="col">OT </th>
				  <th scope="col">Nutrition </th>
				  <th scope="col">Others Theatre </th>
				 </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			    </tr>
			    <tr>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			    </tr><tr>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			    </tr><tr>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			    </tr><tr>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			    </tr><tr>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			    </tr><tr>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			    </tr><tr>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			    </tr><tr>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			    </tr><tr>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			    </tr><tr>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			    </tr><tr>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			    </tr><tr>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			      <td><input type="text" name="" class="form-control" placeholder=""></td>
			    </tr>
			    
			  </tbody>
			</table>
		</div>
		<br>
		<br>
		<br>
		<div class="col-md-10 offset-1">
		<div class="row offset-3"> 
			<h3 >PREOPERATIVE CHECKLIST</h3>

		</div>
		<BR>
		<br>
			<div class="row"> 
				<div class="col-md-8"> 
					<div class="form-group row">
					    <label for="inputEmail3" class="col-sm-2 col-form-label">Patient's Name</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputEmail3" placeholder="Email">
					    </div>
					  </div>
				</div>
				<div class="col-md-4"> 
					<div class="form-group row">
					    <label for="inputEmail3" class="col-sm-2 col-form-label">IP NO</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputEmail3" placeholder="Email">
					    </div>
					  </div>
				</div>
			</div>
			<div class="row "> 
				<div class="col-md-3"> 
					<div class="form-group row">
					    <label for="inputEmail3" class="col-sm-2 col-form-label">Age</label>
					    <div class="col-sm-10">
					      <input type="number" class="form-control" id="inputEmail3" placeholder="Email">
					    </div>
					  </div>
				</div>
				<div class="col-md-3"> 
					<div class="form-group row">
					    <label for="inputEmail3" class="col-sm-2 col-form-label">Sex</label>
					    <div class="col-sm-10">
					      <div class="form-check form-check-inline col-form-label">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
							  <label class="form-check-label" for="inlineCheckbox1">Male</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
							  <label class="form-check-label" for="inlineCheckbox2">female</label>
							</div>
					    </div>
					  </div>
				</div>
			
				<div class="col-md-3"> 
					<div class="form-group row">
					    <label for="inputEmail3" class="col-sm-2 col-form-label">Ward</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputEmail3" placeholder="Email">
					    </div>
					  </div>
				</div> 
				
				<div class="col-md-3"> 
					
					<div class="form-group row">
					    <label for="inputEmail3" class="col-sm-2 col-form-label">Bed</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputEmail3" placeholder="Email">
					    </div>
					  </div>
				</div>
				</div>
			</div>
		</div>
		<br><br>
		<div class="col-md-10 offset-1"> 
			<table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">Ward Check(Nurse's)</th>
			      <th scope="col">Ward Check (Doctor's)</th>
			      <th scope="col">Theatre check(Anaestheric's)</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td scope="row"> 
			      	<div class="form-check">
					  <label class="form-check-label" for="defaultCheck1">
					    A) Gowns and socks
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    Wigs
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    Jewelery etc
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    Dentures
					  </label>
					</div><div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    Preparation
					  </label>
					</div>
					<div class="form-check">
					  <label class="form-check-label" for="defaultCheck1">
					    A) L.V Drips
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    urinalysis
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    sugar
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    albumin
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    Bladder check and urinary cathetar
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    urinalysis
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    gastric tube
					  </label>
					</div>
					<div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Xrays</label>
				    <div class="col-sm-8">
				      <input type="text"   class="form-control" id="staticEmail" value="">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Blood available</label>
				    <div class="col-sm-8">
				      <input type="text"   class="form-control" id="staticEmail" value="">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Consent Has been given?</label>
				</div>
				<div class="form-group">
					 <div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">No</label>
					</div>
				</div>
				<div class="form-group">
					
					<div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Premedication Given?</label>
					</div>
					 <div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">No</label>
					</div>
				</div>
			      </td>


			  	  
			  	  <td>
			  	  	<div class="form-group row">
				    <label for="staticEmail" class=" col-form-label">Hydration normal?</label>
					</div>
					<div class="form-group">
					 <div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">No</label>
					</div>
					<div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">HB (Gm%)</label>
					    <div class="col-sm-8">
					      <input type=" text"   class="form-control" id="staticEmail" value="">
					    </div>
				    </div>
				    <div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">PCV (%)</label>
					    <div class="col-sm-8">
					      <input type=" text"   class="form-control" id="staticEmail" value="">
					    </div>
				    </div>
				    <div class="form-group row">
				    <label for="staticEmail" class=" col-form-label">Eletrolyte normal?</label>
					</div>
					<div class="form-group">
					 <div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">No</label>
					</div>
					</div>
					 <div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">Temp (°C)</label>
					    <div class="col-sm-8">
					      <input type=" text"   class="form-control" id="staticEmail" value="">
					    </div>
				    </div>
					<div class="form-group row">
				    <label for="staticEmail" class=" col-form-label">Hydration normal?</label>
					</div>
					<div class="form-group">
					 <div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">No</label>
					</div>
					<div class="form-group row">
				    <label for="staticEmail" class="col-sm-4 col-form-label">Chest Normal normal?</label>
					</div>
					<div class="form-group">
					 <div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">No</label>
					</div>
					<div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">BP Systolic (mmHg)</label>
					    <div class="col-sm-8">
					      <input type=" text"   class="form-control" id="staticEmail" value="">
					    </div>
				    </div>
					<div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">Pulse /Min</label>
					    <div class="col-sm-8">
					      <input type=" text"   class="form-control" id="staticEmail" value="">
					    </div>
				    </div>
				    <div class="form-group row">
				    <label for="staticEmail" class=" col-form-label">relevant Medical Preoperation Completed??</label>
					</div>
					<div class="form-group">
					 <div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">No</label>
					</div>
					<div class="form-group row">
				    <label for="staticEmail" class=" col-form-label"><b>Is patient fit for operation?</b></label>
					</div>
					<div class="form-group">
						 <div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
						  <label class="form-check-label" for="inlineRadio1">Yes</label>
						</div>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">No</label>
					</div>
					<div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">Blood Available (Units)</label>
					    <div class="col-sm-8">
					      <input type="text"   class="form-control" id="staticEmail" value="">
					    </div>
				    </div>
				    <div class="form-group row">
				    <label for="staticEmail" class=" col-form-label"><b>Has consent been given?</b></label>
					</div>
					<div class="form-group">
					 <div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">No</label>
					</div>
					</div>
					</td>
					<td>  
						<div class="form-group row">
						    <label for="staticEmail" class="col-sm-4 col-form-label">Hb(%)</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="staticEmail" >
						    </div>
						  </div> 
						  <div class="form-group row">
						    <label for="staticEmail" class="col-sm-4 col-form-label">PCV (%)</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="staticEmail" >
						    </div>
						  </div> 
						   <div class="form-group row">
						    <label for="staticEmail" class=" col-form-label"><b>Electrolyte Normal?</b></label>
							</div>
							<div class="form-group">
							 <div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="Electrolyte" id="inlineRadio1" value="option1">
							  <label class="form-check-label" for="inlineRadio1">Yes</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="Electrolyte" id="inlineRadio2" value="option2">
							  <label class="form-check-label" for="inlineRadio2">No</label>
							</div>
							</div>
							<div class="form-group row">
						    <label for="staticEmail" class="col-sm-4 col-form-label">Temp (°C)</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="staticEmail" >
						    </div>
						  </div> 
						  <br>
						  <br>
						  <div class="form-group row">
						    <label for="staticEmail" class=" col-form-label">Urinalysis:</label>
							</div>
							<div class="form-group row">
						    	<label for="staticEmail" class=" col-form-label">Sugar </label>
								<div class="col-sm-8">
							      <input type="text" class="form-control" id="staticEmail" >
							    </div>
							</div>
						     <div class="form-group row">
						    <label for="staticEmail" class=" col-form-label">Blood Pressure:</label>
							</div>
							 <div class="form-group row">
						    <label for="staticEmail" class="col-sm-4 col-form-label">BP Systolic (mmHG)</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="staticEmail" >
							    </div>
						  	</div> 
							 <div class="form-group row">
						    	<label for="staticEmail" class="col-sm-4 col-form-label">Diastolic (mmHG)</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="staticEmail" >
							    </div>
						  	</div>
						  	 <div class="form-group row">
						  	 <label for="staticEmail" class="col-sm-4 col-form-label">Pulse (mmHG)</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="staticEmail" >
							    </div>
						  	</div>
						  	 <div class="form-group row">
							  	<label for="staticEmail" class="col-sm-4 col-form-label">Diastolic (mmHG)</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="staticEmail" >
								    </div>
							  	</div>
							  	<div class="form-group row">
							  	<label for="staticEmail" class="col-sm-4 col-form-label">Pulse (/Min)</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="staticEmail" >
								    </div>
							  	</div>
							  	<div class="form-group row">
							  	<label for="staticEmail" class="col-sm-4 col-form-label">Dentures </label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="staticEmail" >
								    </div>
							  	</div>
							  	<div class="form-group row">
								  	<label for="staticEmail" class=" col-form-label"><b> I patient fit for Operation? </b></label> 
								  </div>
							  	 <div class="form-group row">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
									  <label class="form-check-label" for="inlineRadio1">yes</label>
									</div>
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
									  <label class="form-check-label" for="inlineRadio2">no</label>
									</div>
							  	</div>
							  	<div class="form-group row">
								  	<label for="staticEmail" class=" col-form-label">Blood Available</label> 
								  </div>
							  	 <div class="form-group row">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
									  <label class="form-check-label" for="inlineRadio1">yes</label>
									</div>
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
									  <label class="form-check-label" for="inlineRadio2">no</label>
									</div>
							  	</div>
							  	<div class="form-group row">
								  	<label for="staticEmail" class=" col-form-label"><b> has consent been given? </b></label> </div>
							  	 <div class="form-group row">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
									  <label class="form-check-label" for="inlineRadio1">yes</label>
									</div>
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
									  <label class="form-check-label" for="inlineRadio2">no</label>
									</div>
							  	</div>
							  	 <div class="form-group row">
								  	<label for="staticEmail" class=" col-form-label">premedication given? </label> 
								  </div>
							  	 <div class="form-group row">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
									  <label class="form-check-label" for="inlineRadio1">yes</label>
									</div>
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
									  <label class="form-check-label" for="inlineRadio2">no</label>
									</div>
							  	</div>				    



					</td>
			  	  </tr>
			  	  <td>
			  	  	<div class="form-group row">
						<label for="staticEmail" class=" col-form-label offset-3">Created By: </label> 
					</div>
				  	  <div class="form-group">
					    <label for="exampleFormControlInput1">Ward nurse's signature</label>
					    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Date</label>
					    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Time</label>
					    <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="">
					  </div>
			  	  </td>
			  	  <td>
			  	  	<div class="form-group row ">
						<label for="staticEmail" class=" col-form-label offset-3">certified By: </label> 
					</div>
				  	  <div class="form-group">
					    <label for="exampleFormControlInput1">Ward Doctor's signature</label>
					    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Date</label>
					    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Time</label>
					    <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlInput1 offset-3">Patient Seen by Anaesthetist?</label>
					  </div>
					  <div class="form-group row offset-3">
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
							  <label class="form-check-label" for="inlineRadio1">yes</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
							  <label class="form-check-label" for="inlineRadio2">no</label>
							</div>
					  	</div>
			  	  </td>
			  	  <td>
					  <div class="form-group offset-2">
					    <label for="exampleFormControlInput1 offset-3">Certified by:</label>
					  </div> 
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Anaesthetist's signature</label>
					    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Date</label>
					    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Time</label>
					    <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="">
					  </div>
			  	  </td>

			  	  <tr>
			  	  	<td></td>
			  	  	<td>
			  	  		<div class="form-group">
					    <label for="exampleFormControlInput1 offset-3"> Siganture of Anaesthetist</label>
					  </div>
					  <div class="form-group">
					    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
					  </div>
			  	  		<div class="form-group">
					    <label for="exampleFormControlInput1">Date</label>
					    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Time</label>
					    <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="">
					  </div>

			  	  	</td>
			  	  	<td>
			  	  		cerified by
			  	  	</td>
			  	  </tr>
			  	  

			  </tbody>
			</table>
		</div>
		</div> 
    </div>
</div> 
@endsection