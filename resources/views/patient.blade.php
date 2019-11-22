@extends('backend')

@if (isset($patient))
	@section('title')Patientendaten ändern &ndash;
@else
	@section('title')Neuer Patient anlegen &ndash;
@endif
	
@parent
@endsection

@section('main')
	<div style="text-align:left; margin-left:10px">
		<form method="post">
			@csrf
			<div class="form-group row">
				<div class="col-1"><label for="svnr">SVNr.</label></div>
				<div class="col-5"><input type="text" class="form-control" name="svnr" id="svnr" value="{{ isset($patient) ? $patient->svnr : ''}}"></div>
			</div>
			<div class="form-group row">
				<div class="col-1"><label for="firstname">Vorname</label></div>
				<div class="col-5"><input type="text" class="form-control" name="firstname" id="firstname" value="{{ isset($patient) ? $patient->firstname : ''}}"></div>
			</div>
			<div class="form-group row">
				<div class="col-1"><label for="lastname">Nachname</label></div>
				<div class="col-5"><input type="text" class="form-control" name="lastname" id="lastname" value="{{ isset($patient) ? $patient->lastname : ''}}"></div>
			</div>
			<div class="form-group row">
				<div class="col-1"><label for="email">E-Mail</label></div>
				<div class="col-5"><input type="email" class="form-control" name="email" id="email" value="{{ isset($patient) ? $patient->email : ''}}"></div>
			</div>
			<div class="form-group row">
				<div class="col-1"><label for="address">Adresse</label></div>
				<div class="col-5"><input type="text" class="form-control" name="address" id="address" value="{{ isset($patient) ? $patient->address : ''}}"></div>
			</div>
			<div class="form-group row">
				<div class="col-1"><label for="plz">PLZ</label></div>
				<div class="col-5"><input type="text" class="form-control" name="plz" id="plz" value="{{ isset($patient) ? $patient->plz : ''}}"></div>
			</div>
			<div class="form-group row">
				<div class="col-1"><label for="city">Stadt</label></div>
				<div class="col-5"><input type="text" class="form-control" name="city" id="city" value="{{ isset($patient) ? $patient->city : ''}}"></div>
			</div>
			<div class="form-group row">
				<div class="col-1"><label for="country">Land</label></div>
				<div class="col-5"><input type="text" class="form-control" name="country" id="country" value="{{ isset($patient) ? $patient->country : ''}}"></div>
			</div>
			<button type="submit" class="btn btn-primary">Absenden</button>
			<button type="button" class="btn btn-primary" onclick="window.history.back()">Zurück</button>
		</form>
	</div>

	@isset($patient)
	<hr>
	<h1>Dokumentation</h1>

	@php
		$documentations = App\Documentation::where('patient_id', $patient->id)->where('user_id', Auth::user()->id)->get();
	@endphp

	@foreach ($documentations as $documentation)
		<div class="documentation-item">
			<em>@php echo date("d.m.Y H:i:s", strtotime($documentation->created_at)) @endphp</em><br>
			{{ $documentation->text }}
		</div>
	@endforeach

	<hr>
	<h1>Neue Dokumentation anlegen</h1>
	<div style="margin:5px 10px; text-align: left">
		<form action="/documentation/new/{{ $patient->id }}" method="post">
			@csrf
			<textarea name="text" class="form-control" style="margin-bottom: 10px" rows="5"></textarea>
			<button type="submit" class="btn btn-primary">Absenden</button>
		</form>
	</div>
	@endisset

@endsection
