@extends('backend')

@section('title')Eigene Dokumentationen &ndash;
@parent
@endsection

@section('main')

@php
	$documentations = App\Documentation::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
@endphp

@foreach ($documentations as $documentation)
	<div class="documentation-item">
	<em>@php echo date("d.m.Y H:i:s", strtotime($documentation->created_at)) . ", ";
		$patient = App\Patient::where('id', $documentation->patient_id)->first();
		echo "<a href='/patient/$patient->id'>$patient->lastname, $patient->firstname</a>";
		@endphp</em><br>
		{{ $documentation->text }}
	</div>
@endforeach

@endsection
