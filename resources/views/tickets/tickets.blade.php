@extends('Layouts/master')
@section('Title', 'All Tickets')

@section('Content')

<div class="container col-md-8">
		<div class="card">
				<div class="card-body">
					<h5 class="card-title">Tickets</h5>
					@include('Layouts/errors')
					@if ($Ticket->isEmpty())
						<div class="alert alert-warning">There are no Tickets</div>
						<a href="/create">Submit a Ticket</a>

					@else 
						<table class="table">
						
							<thead>
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<?php $Count = 1; ?>
								@foreach ($Ticket as $Tickets)
								<tr>
									<td>{{$Count++}}</td>
									<td><a href="/{{$Tickets->slug}}">{{ $Tickets->title }}</a></td>
									<td>{{ $Tickets->status ? 'Pending' : 'Answered' }}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					@endif
				</div>
				</div>
</div>



@endsection