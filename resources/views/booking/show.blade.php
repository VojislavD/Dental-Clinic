<x-main>
	<h1 class="text-center text-blue-500 text-3xl font-bold pt-16">Booking for day: {{ $event }}</h1>

	<div class="container mx-auto flex flex-col items-center justify-center py-8">
		<div class="text-lg text-center mb-6">
			<p>Please choose time when you want to book appointment.</p>
		</div>
		
		<ul class="text-lg flex flex-col items-center w-3/4 md:w-2/4 lg:w-1/4 py-2 border-2 border-blue-500">
			<li class="w-full flex items-center text-center border-b-2 py-2">
				@if($appointments->contains('09:00'))
					<p class="w-1/2 text-red-600">09:00</p>
					<p class="w-1/2 text-red-600">Booked</p>
				@else
					<p class="w-1/2">09:00</p>
					<a class="mx-auto bg-blue-500 px-4 py-1 rounded text-white hover:bg-blue-600 hover:shadow-xl" href="/booking/create/{{ $event }}&09:00">Book</a>
				@endif
			</li>
			<li class="w-full flex items-center text-center border-b-2 py-2">
				@if($appointments->contains('09:30'))
					<p class="w-1/2 text-red-600">09:30</p>
					<p class="w-1/2 text-red-600">Booked</p>
				@else
					<p class="w-1/2">09:30</p>
					<a class="mx-auto bg-blue-500 px-4 py-1 rounded text-white hover:bg-blue-600 hover:shadow-xl" href="/booking/create/{{ $event }}&09:30">Book</a>
				@endif
			</li>
			<li class="w-full flex items-center text-center border-b-2 py-2">
				@if($appointments->contains('10:00'))
					<p class="w-1/2 text-red-600">10:00</p>
					<p class="w-1/2 text-red-600">Booked</p>
				@else
					<p class="w-1/2">10:00</p>
					<a class="mx-auto bg-blue-500 px-4 py-1 rounded text-white hover:bg-blue-600 hover:shadow-xl" href="/booking/create/{{ $event }}&10:00">Book</a>
				@endif
			</li>
			<li class="w-full flex items-center text-center border-b-2 py-2">
				@if($appointments->contains('10:30'))
					<p class="w-1/2 text-red-600">10:30</p>
					<p class="w-1/2 text-red-600">Booked</p>
				@else
					<p class="w-1/2">10:30</p>
					<a class="mx-auto bg-blue-500 px-4 py-1 rounded text-white hover:bg-blue-600 hover:shadow-xl" href="/booking/create/{{ $event }}&10:30">Book</a>
				@endif
			</li>
			<li class="w-full flex items-center text-center border-b-2 py-2">
				@if($appointments->contains('11:00'))
					<p class="w-1/2 text-red-600">11:00</p>
					<p class="w-1/2 text-red-600">Booked</p>
				@else
					<p class="w-1/2">11:00</p>
					<a class="mx-auto bg-blue-500 px-4 py-1 rounded text-white hover:bg-blue-600 hover:shadow-xl" href="/booking/create/{{ $event }}&11:00">Book</a>
				@endif
			</li>
			<li class="w-full flex items-center text-center border-b-2 py-2">
				@if($appointments->contains('11:30'))
					<p class="w-1/2 text-red-600">11:30</p>
					<p class="w-1/2 text-red-600">Booked</p>
				@else
					<p class="w-1/2">11:30</p>
					<a class="mx-auto bg-blue-500 px-4 py-1 rounded text-white hover:bg-blue-600 hover:shadow-xl" href="/booking/create/{{ $event }}&11:30">Book</a>
				@endif
			</li>
			<li class="w-full flex items-center text-center border-b-2 py-2">
				@if($appointments->contains('12:00'))
					<p class="w-1/2 text-red-600">12:00</p>
					<p class="w-1/2 text-red-600">Booked</p>
				@else
					<p class="w-1/2">12:00</p>
					<a class="mx-auto bg-blue-500 px-4 py-1 rounded text-white hover:bg-blue-600 hover:shadow-xl" href="/booking/create/{{ $event }}&12:00">Book</a>
				@endif
			</li>
			<li class="w-full flex items-center text-center border-b-2 py-2">
				@if($appointments->contains('12:30'))
					<p class="w-1/2 text-red-600">12:30</p>
					<p class="w-1/2 text-red-600">Booked</p>
				@else
					<p class="w-1/2">12:30</p>
					<a class="mx-auto bg-blue-500 px-4 py-1 rounded text-white hover:bg-blue-600 hover:shadow-xl" href="/booking/create/{{ $event }}&12:30">Book</a>
				@endif
			</li>
			<li class="w-full flex items-center text-center border-b-2 py-2">
				@if($appointments->contains('13:00'))
					<p class="w-1/2 text-red-600">13:00</p>
					<p class="w-1/2 text-red-600">Booked</p>
				@else
					<p class="w-1/2">13:00</p>
					<a class="mx-auto bg-blue-500 px-4 py-1 rounded text-white hover:bg-blue-600 hover:shadow-xl" href="/booking/create/{{ $event }}&13:00">Book</a>
				@endif
			</li>
			<li class="w-full flex items-center text-center border-b-2 py-2">
				@if($appointments->contains('13:30'))
					<p class="w-1/2 text-red-600">13:30</p>
					<p class="w-1/2 text-red-600">Booked</p>
				@else
					<p class="w-1/2">13:30</p>
					<a class="mx-auto bg-blue-500 px-4 py-1 rounded text-white hover:bg-blue-600 hover:shadow-xl" href="/booking/create/{{ $event }}&13:30">Book</a>
				@endif
			</li>
			<li class="w-full flex items-center text-center border-b-2 py-2">
				@if($appointments->contains('14:00'))
					<p class="w-1/2 text-red-600">14:00</p>
					<p class="w-1/2 text-red-600">Booked</p>
				@else
					<p class="w-1/2">14:00</p>
					<a class="mx-auto bg-blue-500 px-4 py-1 rounded text-white hover:bg-blue-600 hover:shadow-xl" href="/booking/create/{{ $event }}&14:00">Book</a>
				@endif
			</li>
			<li class="w-full flex items-center text-center border-b-2 py-2">
				@if($appointments->contains('14:30'))
					<p class="w-1/2 text-red-600">14:30</p>
					<p class="w-1/2 text-red-600">Booked</p>
				@else
					<p class="w-1/2">14:30</p>
					<a class="mx-auto bg-blue-500 px-4 py-1 rounded text-white hover:bg-blue-600 hover:shadow-xl" href="/booking/create/{{ $event }}&14:30">Book</a>
				@endif
			</li>
			<li class="w-full flex items-center text-center border-b-2 py-2">
				@if($appointments->contains('15:00'))
					<p class="w-1/2 text-red-600">15:00</p>
					<p class="w-1/2 text-red-600">Booked</p>
				@else
					<p class="w-1/2">15:00</p>
					<a class="mx-auto bg-blue-500 px-4 py-1 rounded text-white hover:bg-blue-600 hover:shadow-xl" href="/booking/create/{{ $event }}&15:00">Book</a>
				@endif
			</li>
			<li class="w-full flex items-center text-center border-b-2 py-2">
				@if($appointments->contains('15:30'))
					<p class="w-1/2 text-red-600">15:30</p>
					<p class="w-1/2 text-red-600">Booked</p>
				@else
					<p class="w-1/2">15:30</p>
					<a class="mx-auto bg-blue-500 px-4 py-1 rounded text-white hover:bg-blue-600 hover:shadow-xl" href="/booking/create/{{ $event }}&15:30">Book</a>
				@endif
			</li>
			<li class="w-full flex items-center text-center border-b-2 py-2">
				@if($appointments->contains('16:00'))
					<p class="w-1/2 text-red-600">16:00</p>
					<p class="w-1/2 text-red-600">Booked</p>
				@else
					<p class="w-1/2">16:00</p>
					<a class="mx-auto bg-blue-500 px-4 py-1 rounded text-white hover:bg-blue-600 hover:shadow-xl" href="/booking/create/{{ $event }}&16:00">Book</a>
				@endif
			</li>
			<li class="w-full flex items-center text-center py-2">
				@if($appointments->contains('16:30'))
					<p class="w-1/2 text-red-600">16:30</p>
					<p class="w-1/2 text-red-600">Booked</p>
				@else
					<p class="w-1/2">16:30</p>
					<a class="mx-auto bg-blue-500 px-4 py-1 rounded text-white hover:bg-blue-600 hover:shadow-xl" href="/booking/create/{{ $event }}&16:30">Book</a>
				@endif
			</li>
		</ul>
    </div>
	
	<script src="/js/booking.js"></script>
</x-main>