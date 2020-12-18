<x-admin>
	<h1 class="text-2xl font-bold text-blue-500 p-8 text-center">Appointments for: {{ $event }}</h1>

	@if (session('appointmentUpdated'))
		<p class="text-center bg-green-500 w-3/4 rounded-lg text-white mx-auto py-3">
			{{ session('appointmentUpdated') }}
		</p>
    @endif
    @if (session('appointmentCreated'))
		<p class="text-center bg-green-500 w-3/4 rounded-lg text-white mx-auto py-3">
			{{ session('appointmentCreated') }}
		</p>
    @endif
    @if (session('appointmentDelete'))
		<p class="text-center bg-green-500 w-3/4 rounded-lg text-white mx-auto py-3">
			{{ session('appointmentDelete') }}
		</p>
    @endif
    
	<table class="w-11/12 mx-auto text-center mb-16">
		<thead class="border-b-2 border-blue-500">
			<th class="w-1/6 py-2">Time</th>
			<th class="w-1/6 py-2">First Name</th>
			<th class="w-1/6 py-2">Last Name</th>
			<th class="w-1/6 py-2">Email</th>
			<th class="w-1/6 py-2"></th>
		</thead>
		<tbody>
			<tr class="border-b-2 text-sm md:text-base">
				@if($times->contains('09:00'))
					@php $appointment = $events->where('datetime',$event.' 09:00:00')->first() @endphp
					<td class="w-1/6 font-semibold py-3">09:00</td>
					<td class="w-1/6 py-3">{{ $appointment->first_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->last_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ $event }}&09:00">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				@else
					<td class="w-1/6 text-white font-semibold bg-green-500 py-3">09:00</td>
					<td class="font-semibold" colspan="3">Available</td>
					<td>
						<a class="bg-blue-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-blue-600 hover:shadow-xl text-white" href="/appointments/create/{{ $event }}&09:00">
							<i class="fas fa-calendar-check"></i>
							<span class="hidden xl:inline-block">Book now</span>
						</a>
					</td>
				@endif
			</tr>

			<tr class="border-b-2 text-sm md:text-base">
				@if($times->contains('09:30'))
					@php $appointment = $events->where('datetime',$event.' 09:30:00')->first() @endphp
					<td class="w-1/6 font-semibold py-3">09:30</td>
					<td class="w-1/6 py-3">{{ $appointment->first_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->last_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ $event }}&09:30">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				@else
					<td class="w-1/6 text-white font-semibold bg-green-500 py-3">09:30</td>
					<td class="font-semibold" colspan="3">Available</td>
					<td>
						<a class="bg-blue-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-blue-600 hover:shadow-xl text-white" href="/appointments/create/{{ $event }}&09:30">
							<i class="fas fa-calendar-check"></i>
							<span class="hidden xl:inline-block">Book now</span>
						</a>
					</td>
				@endif
			</tr>

			<tr class="border-b-2 text-sm md:text-base">
				@if($times->contains('10:00'))
					@php $appointment = $events->where('datetime',$event.' 10:00:00')->first() @endphp
					<td class="w-1/6 font-semibold py-3">10:00</td>
					<td class="w-1/6 py-3">{{ $appointment->first_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->last_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ $event }}&10:00">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				@else
					<td class="w-1/6 text-white font-semibold bg-green-500 py-3">10:00</td>
					<td class="font-semibold" colspan="3">Available</td>
					<td>
						<a class="bg-blue-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-blue-600 hover:shadow-xl text-white" href="/appointments/create/{{ $event }}&10:00">
							<i class="fas fa-calendar-check"></i>
							<span class="hidden xl:inline-block">Book now</span>
						</a>
					</td>
				@endif
			</tr>

			<tr class="border-b-2 text-sm md:text-base">
				@if($times->contains('10:30'))
					@php $appointment = $events->where('datetime',$event.' 10:30:00')->first() @endphp
					<td class="w-1/6 font-semibold py-3">10:30</td>
					<td class="w-1/6 py-3">{{ $appointment->first_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->last_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ $event }}&10:30">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				@else
					<td class="w-1/6 text-white font-semibold bg-green-500 py-3">10:30</td>
					<td class="font-semibold" colspan="3">Available</td>
					<td>
						<a class="bg-blue-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-blue-600 hover:shadow-xl text-white" href="/appointments/create/{{ $event }}&10:30">
							<i class="fas fa-calendar-check"></i>
							<span class="hidden xl:inline-block">Book now</span>
						</a>
					</td>
				@endif
			</tr>

			<tr class="border-b-2 text-sm md:text-base">
				@if($times->contains('11:00'))
					@php $appointment = $events->where('datetime',$event.' 11:00:00')->first() @endphp
					<td class="w-1/6 font-semibold py-3">11:00</td>
					<td class="w-1/6 py-3">{{ $appointment->first_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->last_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ $event }}&11:00">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				@else
					<td class="w-1/6 text-white font-semibold bg-green-500 py-3">11:00</td>
					<td class="font-semibold" colspan="3">Available</td>
					<td>
						<a class="bg-blue-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-blue-600 hover:shadow-xl text-white" href="/appointments/create/{{ $event }}&11:00">
							<i class="fas fa-calendar-check"></i>
							<span class="hidden xl:inline-block">Book now</span>
						</a>
					</td>
				@endif
			</tr>

			<tr class="border-b-2 text-sm md:text-base">
				@if($times->contains('11:30'))
					@php $appointment = $events->where('datetime',$event.' 11:30:00')->first() @endphp
					<td class="w-1/6 font-semibold py-3">11:30</td>
					<td class="w-1/6 py-3">{{ $appointment->first_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->last_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ $event }}&11:30">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				@else
					<td class="w-1/6 text-white font-semibold bg-green-500 py-3">11:30</td>
					<td class="font-semibold" colspan="3">Available</td>
					<td>
						<a class="bg-blue-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-blue-600 hover:shadow-xl text-white" href="/appointments/create/{{ $event }}&11:30">
							<i class="fas fa-calendar-check"></i>
							<span class="hidden xl:inline-block">Book now</span>
						</a>
					</td>
				@endif
			</tr>

			<tr class="border-b-2 text-sm md:text-base">
				@if($times->contains('12:00'))
					@php $appointment = $events->where('datetime',$event.' 12:00:00')->first() @endphp
					<td class="w-1/6 font-semibold py-3">12:00</td>
					<td class="w-1/6 py-3">{{ $appointment->first_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->last_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ $event }}&12:00">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				@else
					<td class="w-1/6 text-white font-semibold bg-green-500 py-3">12:00</td>
					<td class="font-semibold" colspan="3">Available</td>
					<td>
						<a class="bg-blue-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-blue-600 hover:shadow-xl text-white" href="/appointments/create/{{ $event }}&12:00">
							<i class="fas fa-calendar-check"></i>
							<span class="hidden xl:inline-block">Book now</span>
						</a>
					</td>
				@endif
			</tr>

			<tr class="border-b-2 text-sm md:text-base">
				@if($times->contains('12:30'))
					@php $appointment = $events->where('datetime',$event.' 12:30:00')->first() @endphp
					<td class="w-1/6 font-semibold py-3">12:30</td>
					<td class="w-1/6 py-3">{{ $appointment->first_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->last_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ $event }}&12:30">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				@else
					<td class="w-1/6 text-white font-semibold bg-green-500 py-3">12:30</td>
					<td class="font-semibold" colspan="3">Available</td>
					<td>
						<a class="bg-blue-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-blue-600 hover:shadow-xl text-white" href="/appointments/create/{{ $event }}&12:30">
							<i class="fas fa-calendar-check"></i>
							<span class="hidden xl:inline-block">Book now</span>
						</a>
					</td>
				@endif
			</tr>

			<tr class="border-b-2 text-sm md:text-base">
				@if($times->contains('13:00'))
					@php $appointment = $events->where('datetime',$event.' 13:00:00')->first() @endphp
					<td class="w-1/6 font-semibold py-3">13:00</td>
					<td class="w-1/6 py-3">{{ $appointment->first_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->last_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ $event }}&13:00">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				@else
					<td class="w-1/6 text-white font-semibold bg-green-500 py-3">13:00</td>
					<td class="font-semibold" colspan="3">Available</td>
					<td>
						<a class="bg-blue-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-blue-600 hover:shadow-xl text-white" href="/appointments/create/{{ $event }}&13:00">
							<i class="fas fa-calendar-check"></i>
							<span class="hidden xl:inline-block">Book now</span>
						</a>
					</td>
				@endif
			</tr>

			<tr class="border-b-2 text-sm md:text-base">
				@if($times->contains('13:30'))
					@php $appointment = $events->where('datetime',$event.' 13:30:00')->first() @endphp
					<td class="w-1/6 font-semibold py-3">13:30</td>
					<td class="w-1/6 py-3">{{ $appointment->first_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->last_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ $event }}&13:30">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				@else
					<td class="w-1/6 text-white font-semibold bg-green-500 py-3">13:30</td>
					<td class="font-semibold" colspan="3">Available</td>
					<td>
						<a class="bg-blue-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-blue-600 hover:shadow-xl text-white" href="/appointments/create/{{ $event }}&13:30">
							<i class="fas fa-calendar-check"></i>
							<span class="hidden xl:inline-block">Book now</span>
						</a>
					</td>
				@endif
			</tr>

			<tr class="border-b-2 text-sm md:text-base">
				@if($times->contains('14:00'))
					@php $appointment = $events->where('datetime',$event.' 14:00:00')->first() @endphp
					<td class="w-1/6 font-semibold py-3">14:00</td>
					<td class="w-1/6 py-3">{{ $appointment->first_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->last_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ $event }}&14:00">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				@else
					<td class="w-1/6 text-white font-semibold bg-green-500 py-3">14:00</td>
					<td class="font-semibold" colspan="3">Available</td>
					<td>
						<a class="bg-blue-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-blue-600 hover:shadow-xl text-white" href="/appointments/create/{{ $event }}&14:00">
							<i class="fas fa-calendar-check"></i>
							<span class="hidden xl:inline-block">Book now</span>
						</a>
					</td>
				@endif
			</tr>

			<tr class="border-b-2 text-sm md:text-base">
				@if($times->contains('14:30'))
					@php $appointment = $events->where('datetime',$event.' 14:30:00')->first() @endphp
					<td class="w-1/6 font-semibold py-3">14:30</td>
					<td class="w-1/6 py-3">{{ $appointment->first_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->last_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ $event }}&14:30">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				@else
					<td class="w-1/6 text-white font-semibold bg-green-500 py-3">14:30</td>
					<td class="font-semibold" colspan="3">Available</td>
					<td>
						<a class="bg-blue-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-blue-600 hover:shadow-xl text-white" href="/appointments/create/{{ $event }}&14:30">
							<i class="fas fa-calendar-check"></i>
							<span class="hidden xl:inline-block">Book now</span>
						</a>
					</td>
				@endif
			</tr>

			<tr class="border-b-2 text-sm md:text-base">
				@if($times->contains('15:00'))
					@php $appointment = $events->where('datetime',$event.' 15:00:00')->first() @endphp
					<td class="w-1/6 font-semibold py-3">15:00</td>
					<td class="w-1/6 py-3">{{ $appointment->first_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->last_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ $event }}&15:00">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				@else
					<td class="w-1/6 text-white font-semibold bg-green-500 py-3">15:00</td>
					<td class="font-semibold" colspan="3">Available</td>
					<td>
						<a class="bg-blue-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-blue-600 hover:shadow-xl text-white" href="/appointments/create/{{ $event }}&15:00">
							<i class="fas fa-calendar-check"></i>
							<span class="hidden xl:inline-block">Book now</span>
						</a>
					</td>
				@endif
			</tr>

			<tr class="border-b-2 text-sm md:text-base">
				@if($times->contains('15:30'))
					@php $appointment = $events->where('datetime',$event.' 15:30:00')->first() @endphp
					<td class="w-1/6 font-semibold py-3">15:30</td>
					<td class="w-1/6 py-3">{{ $appointment->first_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->last_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ $event }}&15:30">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				@else
					<td class="w-1/6 text-white font-semibold bg-green-500 py-3">15:30</td>
					<td class="font-semibold" colspan="3">Available</td>
					<td>
						<a class="bg-blue-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-blue-600 hover:shadow-xl text-white" href="/appointments/create/{{ $event }}&15:30">
							<i class="fas fa-calendar-check"></i>
							<span class="hidden xl:inline-block">Book now</span>
						</a>
					</td>
				@endif
			</tr>

			<tr class="border-b-2 text-sm md:text-base">
				@if($times->contains('16:00'))
					@php $appointment = $events->where('datetime',$event.' 16:00:00')->first() @endphp
					<td class="w-1/6 font-semibold py-3">16:00</td>
					<td class="w-1/6 py-3">{{ $appointment->first_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->last_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ $event }}&16:00">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				@else
					<td class="w-1/6 text-white font-semibold bg-green-500 py-3">16:00</td>
					<td class="font-semibold" colspan="3">Available</td>
					<td>
						<a class="bg-blue-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-blue-600 hover:shadow-xl text-white" href="/appointments/create/{{ $event }}&16:00">
							<i class="fas fa-calendar-check"></i>
							<span class="hidden xl:inline-block">Book now</span>
						</a>
					</td>
				@endif
			</tr>

			<tr class="border-b-2 text-sm md:text-base">
				@if($times->contains('16:30'))
					@php $appointment = $events->where('datetime',$event.' 16:30:00')->first() @endphp
					<td class="w-1/6 font-semibold py-3">16:30</td>
					<td class="w-1/6 py-3">{{ $appointment->first_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->last_name }}</td>
					<td class="w-1/6 py-3">{{ $appointment->email }}</td>
					<td class="w-1/6 py-3">
						<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/appointments/edit/{{ $event }}&16:30">
							<i class="fas fa-edit"></i>
							<span class="hidden xl:inline-block">Edit</span>
						</a>
					</td>
				@else
					<td class="w-1/6 text-white font-semibold bg-green-500 py-3">16:30</td>
					<td class="font-semibold" colspan="3">Available</td>
					<td>
						<a class="bg-blue-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-blue-600 hover:shadow-xl text-white" href="/appointments/create/{{ $event }}&16:30">
							<i class="fas fa-calendar-check"></i>
							<span class="hidden xl:inline-block">Book now</span>
						</a>
					</td>
				@endif
			</tr>
		</tbody>
	</table>
</x-admin>