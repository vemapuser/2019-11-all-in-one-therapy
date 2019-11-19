@extends('backend')

@section('title')Patienten &ndash;
@parent
@endsection

@section('main')
	<table id="patienttable" class="table table-sm table-bordered table-striped dataTable no-footer">
		<thead>
		<tr>
			<th>SVNr</th>
			<th class="text-left">Name</th>
			<th>Adresse</th>
			<th>PLZ</th>
			<th>Ort</th>
			<th>Land</th>
		</tr>
		</thead>
		<tbody>
		@foreach($patients as $patient)
		<tr>
			<td>{{ $patient->svnr }}</td>
			<td class="text-left">{{ $patient->lastname }}, {{ $patient->firstname }}</td>
			<td>{{ $patient->address }}</td>
			<td>{{ $patient->plz }}</td>
			<td>{{ $patient->city }}</td>
			<td>{{ $patient->country }}</td>
		</tr>	
		@endforeach
		</tbody>
	</table>
	
	<script>
	$(document).ready(function () {
		$('#patienttable').DataTable({
			"lengthChange": false,
			"order": [1, "asc"],
			"language": {
				"lengthMenu": "_MENU_ Einträge pro Seite",
				"zeroRecords": "Keine Einträge gefunden",
				"info": "Seite _PAGE_ von _PAGES_",
				"infoEmpty": "Keine Einträge verfügbar",
				"infoFiltered": "(_TOTAL_ von _MAX_ Einträgen)",
				"search": "Suche",
				"paginate": {
					"previous": "Vorherige",
					"next": "Nächste"
				}
			}
		});
		$('.dataTables_length').addClass('bs-select');
	});
	</script>
@endsection
