<x-admin>
	<h1 class="text-2xl font-bold text-blue-500 p-8 text-center">Today's Appointments | {{ $today }}</h1>

	<table class="w-11/12 mx-auto text-center mb-16">
		<thead class="border-b-2 border-blue-500">
			<th class="w-1/6 py-2">Time</th>
			<th class="w-1/6 py-2">First Name</th>
			<th class="w-1/6 py-2">Last Name</th>
			<th class="w-1/6 py-2">Email</th>
			<th class="w-1/6 py-2"></th>
		</thead>
		<tbody>
			@forelse($events as $event)
				<tr class="border-b-2 text-sm md:text-base">
					<td class="w-1/6 font-semibold py-3">{{ substr($event->datetime,11,5) }}</td>
					<td class="w-1/6 py-3">{{ $event->first_name }}</td>
					<td class="w-1/6 py-3">{{ $event->last_name }}</td>
					<td class="w-1/6 py-3">{{ $event->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ str_replace(" ", "&", substr($event->datetime,0,16)) }}">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td class="font-semibold py-8" colspan="5">There is no appointments today.</td>
				</tr>
			@endforelse
		</tbody>
	</table>
</x-admin>