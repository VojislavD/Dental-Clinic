<x-admin>
	<h1 class="text-2xl font-bold text-blue-500 p-8 text-center">Appointments for next 5 days</h1>

	<table class="w-11/12 mx-auto text-center mb-16">
		<caption class="font-bold text-xl underline">{{ Carbon\Carbon::now()->toDateString() }}</caption>
		<thead class="border-b-2 border-blue-500">
			<th class="w-1/6 py-2">Time</th>
			<th class="w-1/6 py-2">First Name</th>
			<th class="w-1/6 py-2">Last Name</th>
			<th class="w-1/6 py-2">Email</th>
			<th class="w-1/6 py-2"></th>
		</thead>
		<tbody>
			@forelse($first as $event)
				<tr class="border-b-2 text-sm md:text-base">
					<td class="w-1/6 font-semibold py-3">{{ substr($event->datetime,11,5) }}</td>
					<td class="w-1/6 py-3">{{ $event->first_name }}</td>
					<td class="w-1/6 py-3">{{ $event->last_name }}</td>
					<td class="w-1/6 py-3">{{ $event->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ substr(str_replace(" ", "&", $event->datetime),0,16) }}">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td class="font-semibold py-8" colspan="5">There is no appointments for this day.</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<table class="w-11/12 mx-auto text-center mb-16">
		<caption class="font-bold text-xl underline">{{ Carbon\Carbon::now()->addDays(1)->toDateString() }}</caption>
		<thead class="border-b-2 border-blue-500">
			<th class="w-1/6 py-2">Time</th>
			<th class="w-1/6 py-2">First Name</th>
			<th class="w-1/6 py-2">Last Name</th>
			<th class="w-1/6 py-2">Email</th>
			<th class="w-1/6 py-2"></th>
		</thead>
		<tbody>
			@forelse($second as $event)
				<tr class="border-b-2 text-sm md:text-base">
					<td class="w-1/6 font-semibold py-3">{{ substr($event->datetime,11,5) }}</td>
					<td class="w-1/6 py-3">{{ $event->first_name }}</td>
					<td class="w-1/6 py-3">{{ $event->last_name }}</td>
					<td class="w-1/6 py-3">{{ $event->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ substr(str_replace(" ", "&", $event->datetime),0,16) }}">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td class="font-semibold py-8" colspan="5">There is no appointments for this day.</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<table class="w-11/12 mx-auto text-center mb-16">
		<caption class="font-bold text-xl underline">{{ Carbon\Carbon::now()->addDays(2)->toDateString() }}</caption>
		<thead class="border-b-2 border-blue-500">
			<th class="w-1/6 py-2">Time</th>
			<th class="w-1/6 py-2">First Name</th>
			<th class="w-1/6 py-2">Last Name</th>
			<th class="w-1/6 py-2">Email</th>
			<th class="w-1/6 py-2"></th>
		</thead>
		<tbody>
			@forelse($third as $event)
				<tr class="border-b-2 text-sm md:text-base">
					<td class="w-1/6 font-semibold py-3">{{ substr($event->datetime,11,5) }}</td>
					<td class="w-1/6 py-3">{{ $event->first_name }}</td>
					<td class="w-1/6 py-3">{{ $event->last_name }}</td>
					<td class="w-1/6 py-3">{{ $event->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ substr(str_replace(" ", "&", $event->datetime),0,16) }}">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td class="font-semibold py-8" colspan="5">There is no appointments for this day.</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<table class="w-11/12 mx-auto text-center mb-16">
		<caption class="font-bold text-xl underline">{{ Carbon\Carbon::now()->addDays(3)->toDateString() }}</caption>
		<thead class="border-b-2 border-blue-500">
			<th class="w-1/6 py-2">Time</th>
			<th class="w-1/6 py-2">First Name</th>
			<th class="w-1/6 py-2">Last Name</th>
			<th class="w-1/6 py-2">Email</th>
			<th class="w-1/6 py-2"></th>
		</thead>
		<tbody>
			@forelse($fourth as $event)
				<tr class="border-b-2 text-sm md:text-base">
					<td class="w-1/6 font-semibold py-3">{{ substr($event->datetime,11,5) }}</td>
					<td class="w-1/6 py-3">{{ $event->first_name }}</td>
					<td class="w-1/6 py-3">{{ $event->last_name }}</td>
					<td class="w-1/6 py-3">{{ $event->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ substr(str_replace(" ", "&", $event->datetime),0,16) }}">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td class="font-semibold py-8" colspan="5">There is no appointments for this day.</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<table class="w-11/12 mx-auto text-center mb-16">
		<caption class="font-bold text-xl underline">{{ Carbon\Carbon::now()->addDays(4)->toDateString() }}</caption>
		<thead class="border-b-2 border-blue-500">
			<th class="w-1/6 py-2">Time</th>
			<th class="w-1/6 py-2">First Name</th>
			<th class="w-1/6 py-2">Last Name</th>
			<th class="w-1/6 py-2">Email</th>
			<th class="w-1/6 py-2"></th>
		</thead>
		<tbody>
			@forelse($fifth as $event)
				<tr class="border-b-2 text-sm md:text-base">
					<td class="w-1/6 font-semibold py-3">{{ substr($event->datetime,11,5) }}</td>
					<td class="w-1/6 py-3">{{ $event->first_name }}</td>
					<td class="w-1/6 py-3">{{ $event->last_name }}</td>
					<td class="w-1/6 py-3">{{ $event->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ substr(str_replace(" ", "&", $event->datetime),0,16) }}">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td class="font-semibold py-8" colspan="5">There is no appointments for this day.</td>
				</tr>
			@endforelse
		</tbody>
	</table>
</x-admin>