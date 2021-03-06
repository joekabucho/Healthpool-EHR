@extends('layouts.master')
@section('content')
	@include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
	<!-- Title & Breadcrumbs-->
	<div class="page-titles">
		<div class="col-md-12 align-self-center text-center">
			<h4 class="theme-cl">Morphine</h4>
		</div>
	</div>
	<div class="col-md-12">


		<div class="card">
			<div class="card-header">
				<h4> Records</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="datatable" class="table table-bordered">
						<thead>
						<tr>
							<th>Print Record</th>
							<th>PATIENT'S NAME</th>
							<th>I.P. NUMBER</th>
							<th>WARD</th>
							<th>AGE</th>
							<th>DATE MORPHINE</th>
							<th>PRIMARY DOCTOR</th>
							<th>PRESCRIBED BY</th>
							<th>FORM OF MORPHINE USED</th>
							<th>STRENGH OF FORMULATION:IN SOLUTION</th>
							<th>STRENGH OF FORMULATION:TABLET</th>
							<th>DATE</th>
							<th>DOSE</th>
							<th>TIME OF EXTRA DOSES</th>
							<th>GIVEN BY</th>

						</tr>
						</thead>
						<tbody>
						@if(isset($morphine_results))

							@php
								$i=0
							@endphp

							@foreach($morphine_results as $morphine_result)

								@php
									$i++;
								@endphp

								<tr>
									<td>
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">Print Record</button>
									</td>
									<td>{{ $morphine_result->patients_name}}</td>
									<td>{{ $morphine_result->ip_number}}</td>
									<td>{{ $morphine_result->ward}}</td>
									<td>{{ $morphine_result->age}}</td>
									<td>{{ $morphine_result->date_morphine}}</td>
									<td>{{ $morphine_result->primary_doctor}}</td>
									<td>{{ $morphine_result->prescribed_by}}</td>
									<td>{{ $morphine_result->form_of_morphine_used}}</td>
									<td>{{ $morphine_result->strength_of_formulation}}</td>
									<td>{{ $morphine_result->tablet}}</td>
									<td>{{ $morphine_result->frequency_of_administration}}</td>
									<td>{{ $morphine_result->date}}</td>
									<td>{{ $morphine_result->dose}}</td>
									<td>{{ $morphine_result->time_given}}</td>
									<td>{{ $morphine_result->time_of_extra_doses}}</td>
									<td>{{ $morphine_result->given_by}}</td>
									<!-- Triage Modal -->
									<div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Morphine</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div id="printableArea{{$i}}">
														<h2>PATIENT RECORD</h2>
														<p><b>Patient Name : </b> {{$patient->name}}</p>
														<p><b>Date : </b> {{ $morphine_result->date_morphine}}</p>
														<p><b>Primary Doctor : </b> {{ $morphine_result->primary_doctor}}</p>
														<p><b>Prescribed By : </b> {{ $morphine_result->prescribed_by}}</p>
														<p><b>Form of morphine used : </b> {{ $morphine_result->form_of_morphine_used}}</p>
														<p><b>Strength of Formulation : </b> {{ $morphine_result->strength_of_formulation}}</p>
														<p><b>Tablet : </b> {{ $morphine_result->tablet}}</p>
														<p><b>Frequency of Administration : </b> {{ $morphine_result->frequency_of_administration}}</p>
														<p><b>Date : </b> {{ $morphine_result->date}}</p>
														<p><b>Dose : </b> {{ $morphine_result->dose}}</p>
														<p><b>Time Given : </b> {{ $morphine_result->time_given}}</p>
														<p><b>Time of extra doses : </b> {{ $morphine_result->time_of_extra_doses}}</p>
														<p><b>Given by : </b> {{ $morphine_result->given_by}}</p>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<input type="button" class="btn btn-success" onclick="printDiv('printableArea{{$i}}')" value="print" />
												</div>
											</div>
										</div>
									</div>
								</tr>
							@endforeach
						@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-4">

			<div class="content">
				<button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Records</button>
				{{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
			</div>
		</div>
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog modal-lg">


				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Add Morphine Record</h4>
					</div>



					<div class="modal-body">


						<div class="col-md-12">
							<div class="card">

								<div class="col-m-3 offset-md-2">

									<form action="{{route('morphine_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
										<input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
										<input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
										<input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
										<div class="row ">
											<div class="col-md-6">
												<div class="form-group row ">
													<label for="staticEmail" class="col-form-label ">PATIENT'S NAME:</label>
													<div class="col-sm-8">
														<input type="text" name="patients_name" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group row ">
													<label for="staticEmail" class="col-form-label ">I.P.NUMBER:</label>
													<div class="col-sm-8">
														<input type="number" name="ip_number" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div>
										<div class="row ">
											<div class="col-md-4">
												<div class="form-group row ">
													<label for="staticEmail" class="col-form-label ">WARD:</label>
													<div class="col-sm-8">
														<input type="name" name="ward" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="form-group row ">
													<label for="staticEmail" class="col-form-label ">AGE:</label>
													<div class="col-sm-8">
														<input type="number" name="age" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="form-group row col-md-4">
												<label for="staticEmail" class="col-form-label ">DATE MORPHINE:</label>
												<div class="col-sm-8">
													<input type="date"  name="date_morphine"   class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row ">
											<div class="col-md-6">
												<div class="form-group row ">
													<label for="staticEmail" class="col-form-label ">PRIMARY DOCTOR:</label>
													<div class="col-sm-8">
														<input type="name" name="primary_doctor" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group row ">
													<label for="staticEmail" class="col-form-label ">PRESCRIBED BY:</label>
													<div class="col-sm-8">
														<input type="text" name="prescribed_by" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group row col-md-12">
												<label for="inputPassword" class=" col-form-label">FORM OF MORPHINE USED:</label>
												<div class="col-sm-8">
													<div class="form-group">
														<div class="form-check form-check-inline  col-form-label">
															<input class="form-check-input" type="radio" name="form_of_morphine_used" id="inlineRadio1" value="Oral solution">
															<label class="form-check-label" for="inlineRadio1">Oral solution</label>&emsp;
														</div>
														<div class="form-check form-check-inline  col-form-label">
															<input class="form-check-input" type="radio" name="form_of_morphine_used" id="inlineRadio2" value="Tablet">
															<label class="form-check-label" for="inlineRadio2">Tablet</label>&emsp;
														</div>
														<div class="form-check form-check-inline  col-form-label">
															<input class="form-check-input" type="radio" name="form_of_morphine_used" id="inlineRadio3" value="Injection">
															<label class="form-check-label" for="inlineRadio3">Injection</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row ">
													<label for="staticEmail" class="col-form-label ">STRENGTH OF FORMULATION: SOLUTION in (mg/ml):</label>
													<div class="col-sm-4">
														<input type="number" name="strength_of_formulation" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group row ">
													<label for="staticEmail" class="col-form-label ">TABLET in (mg):</label>
													<div class="col-sm-4">
														<input type="	number" name="tablet" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group row col-md-12">
												<label for="inputPassword" class=" col-form-label">FREQUENCY OF ADMINISTRATION (HOURLY):</label>
											</div>
										</div>
										<div>
											<div class="row">
												<div class="col-md-12" >
													<div class="form-group">
														<div class="form-check form-check-inline  col-form-label" class="col-md-2">
															<input class="form-check-input" type="radio" name="frequency_of_administration" id="inlineRadio1" value="4">
															<label class="form-check-label" for="inlineRadio1">4</label>&emsp;
														</div>
														<div class="form-check form-check-inline  col-form-label" class="col-md-2">
															<input class="form-check-input" type="radio" name="frequency_of_administration" id="inlineRadio2" value="6">
															<label class="form-check-label" for="inlineRadio2">6</label>&emsp;
														</div>
														<div class="form-check form-check-inline  col-form-label" class="col-md-2">
															<input class="form-check-input" type="radio" name="frequency_of_administration" id="inlineRadio3" value="8">
															<label class="form-check-label" for="inlineRadio3">8</label>&emsp;
														</div>
														<div class="form-check form-check-inline  col-form-label" class="col-md-2">
															<input class="form-check-input" type="radio" name="frequency_of_administration" id="inlineRadio3" value="12">
															<label class="form-check-label" for="inlineRadio3">12</label>&emsp;
														</div>
														<div class="form-check form-check-inline  col-form-label" class="col-md-2">
															<input class="form-check-input" type="radio" name="frequency_of_administration" id="inlineRadio3" value="24">
															<label class="form-check-label" for="inlineRadio3">24</label>
														</div>

													</div>
												</div>
											</div>
										</div>
										<table class="table table-bordered">
											<thead>
											<tr>
												<th scope="col">DATE</th>
												<th scope="col">DOSE</th>
												<th scope="col">TIME GIVEN</th>
												<th scope="col">TIME OF EXTRA DOSES</th>
												<th scope="col">GIVEN BY</th>
												<th scope="col">REMARKS</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td><input type="date" name="date" class="form-control" placeholder=""></td>
												<td><input type="number" name="dose" class="form-control" placeholder=""></td>
												<td><input type="time" name="time_given" class="form-control" placeholder=""></td>
												<td><input type="time" name="time_of_extra_doses" class="form-control" placeholder=""></td>
												<td><input type="name" name="given_by" class="form-control" placeholder=""></td>
												<td><input type="text" name="remarks" class="form-control" placeholder=""></td>
											</tr>
											</tbody>
										</table>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row ">
													<label for="staticEmail" class="col-form-label ">DEPARTMENT:</label>
													<div class="col-sm-4">
														<input type="text" name="departments" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary">Submit</button>
											</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection