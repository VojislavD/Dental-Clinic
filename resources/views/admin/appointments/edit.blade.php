<x-admin>
	<h1 class="text-2xl font-bold text-blue-500 p-8 text-center">Edit Appointment for: {{ substr($date,0,16) }}</h1>

	<div>
		<form class="w-full md:w-3/4 xl:w-1/2 px-4 xl:px-0 mb-16 xl:mb-0 mx-auto" method="POST" action="/appointments/edit/{{ str_replace(" ", "&", $date)}}">
			@csrf
			@method('PUT')

			<div class="flex items-center mt-4">
				<label class="w-1/4 font-semibold" for="first_name">First Name</label>
				<input class="w-3/4 border-2 p-1 @error('first_name') border-red-600 @enderror" type="text" name="first_name" id="first_name" value="{{ old('first_name') ?? $event['first_name'] }}">
			</div>
			@error('first_name')
				<div class="flex items-center">
					<label class="w-1/4"></label>
					<p class="w-3/4 text-red-600 font-semibold">{{ $message }}</p>
				</div>
			@enderror

			<div class="flex items-center mt-4">
				<label class="w-1/4 font-semibold" for="last_name">Last Name</label>
				<input class="w-3/4 border-2 p-1 @error('last_name') border-red-600 @enderror" type="text" name="last_name" id="last_name" value="{{ old('last_name') ?? $event['last_name'] }}">
			</div>
			@error('last_name')
				<div class="flex items-center">
					<label class="w-1/4"></label>
					<p class="w-3/4 text-red-600 font-semibold">{{ $message }}</p>
				</div>
			@enderror

			<div class="flex items-center mt-4">
				<label class="w-1/4 font-semibold" for="email">Email</label>
				<input class="w-3/4 border-2 p-1 @error('email') border-red-600 @enderror" type="email" name="email" id="email" value="{{ old('email') ?? $event['email'] }}">
			</div>
			@error('email')
				<div class="flex items-center">
					<label class="w-1/4"></label>
					<p class="w-3/4 text-red-600 font-semibold">{{ $message }}</p>
				</div>
			@enderror

			<div class="flex items-center mt-4">
				<label class="w-1/4 font-semibold" for="date">Date</label>
				<input class="w-3/4 border-2 p-1 @if(session('dateReserved')) border-red-600 @endif" type="date" name="date" id="date" value="{{ old('date') ?? substr($date, 0,10) }}">
			</div>

			<div class="flex items-center mt-4">
				<label class="w-1/4 font-semibold" for="time">Time</label>
				<select class="w-3/4 border-2 p-1 @if(session('dateReserved')) border-red-600 @endif" name="time" id="time">
					<option @if(substr($event['datetime'], 11,5) == '09:00') selected @endif>09:00</option>
					<option @if(substr($event['datetime'], 11,5) == '09:30') selected @endif>09:30</option>
					<option @if(substr($event['datetime'], 11,5) == '10:00') selected @endif>10:00</option>
					<option @if(substr($event['datetime'], 11,5) == '10:30') selected @endif>10:30</option>
					<option @if(substr($event['datetime'], 11,5) == '11:00') selected @endif>11:00</option>
					<option @if(substr($event['datetime'], 11,5) == '11:30') selected @endif>11:30</option>
					<option @if(substr($event['datetime'], 11,5) == '12:00') selected @endif>12:00</option>
					<option @if(substr($event['datetime'], 11,5) == '12:30') selected @endif>12:30</option>
					<option @if(substr($event['datetime'], 11,5) == '13:00') selected @endif>13:00</option>
					<option @if(substr($event['datetime'], 11,5) == '13:30') selected @endif>13:30</option>
					<option @if(substr($event['datetime'], 11,5) == '14:00') selected @endif>14:00</option>
					<option @if(substr($event['datetime'], 11,5) == '14:30') selected @endif>14:30</option>
					<option @if(substr($event['datetime'], 11,5) == '15:00') selected @endif>15:00</option>
					<option @if(substr($event['datetime'], 11,5) == '15:30') selected @endif>15:30</option>
					<option @if(substr($event['datetime'], 11,5) == '16:00') selected @endif>16:00</option>
					<option @if(substr($event['datetime'], 11,5) == '16:30') selected @endif>16:30</option>
				</select>
			</div>
			@if(session('dateReserved'))
				<div class="flex items-center">
					<label class="w-1/4"></label>
					<p class="w-3/4 text-red-600 font-semibold">{{ session('dateReserved') }}</p>
				</div>
			@endif

			<div class="flex items-center mt-4">
				<label class="w-1/4"></label>
				<button class="bg-blue-500 px-8 py-1 text-white rounded hover:bg-blue-600 hover:shadow-xl" type="submit">Save</button>
			</div>
			</div>
		</form>
		<form class="flex justify-end mr-6 mb-8" method="POST" action="/appointments/delete/{{ substr(url()->current(),38) }}">
			@csrf
			<button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 hover:shadow-xl" type="submit">Delete Appointment</button>
		</form>
	</div>
</x-admin>