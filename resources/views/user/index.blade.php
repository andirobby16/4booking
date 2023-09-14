@extends('layouts.app')

@section('content')

	<div>
		<livewire:booking-show>
	</div>

@endsection

@section('script')
	<script>
		window.addEventListener('close-modal', event => {
			$('#bookingModal').modal('hide');
			$('#updateProfileModal').modal('hide');
			$('#deleteBookingModal').modal('hide');

			var bookingid = $(this).attr("data-id");
		})
	</script>
@endsection