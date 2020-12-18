<x-main>
	<h1 class="text-center text-blue-500 text-2xl md:text-3xl font-bold mx-4 pt-16">Booking for: {{ str_replace("&", " ", $date) }}</h1>

	@if (session('eventExists'))
		<p class="w-2/3 mx-auto text-white text-center mt-4 py-2 rounded-lg bg-red-600">
			{{ session('eventExists') }}
		</p>
    @endif

	<div class="container mx-auto flex flex-col items-center justify-center py-8">
		<div class="text-lg font-semibold text-center mb-6">
			<p>Please fill form below with your informations.</p>
		</div>

		<form class="w-3/4 md:w-2/3 xl:w-1/3 flex flex-col items-end text-lg" method="POST" action="/booking/{{ $date }}">
			@csrf
			<div class="w-full my-2">
				<div class="flex items-center">
					<label class="w-1/3 text-center" for="first_name">First Name:</label>
					<input class="w-2/3 border-2 p-1 rounded @error('first_name') border-red-500 @enderror" type="text" name="first_name" id="first_name" value="{{ old('first_name') }}">
				</div>
				@error('first_name')
					<div class="flex items-center">
						<p class="w-1/3"></p>
						<p class="w-2/3 text-red-500 text-base font-semibold">{{ $message }}</p>
					</div>
				@enderror
			</div>

			<div class="w-full my-2">
				<div class="flex items-center">
					<label class="w-1/3 text-center" for="last_name">Last Name:</label>
					<input class="w-2/3 border-2 p-1 rounded @error('last_name') border-red-500 @enderror" type="text" name="last_name" id="last_name" value="{{ old('last_name') }}">
				</div>
				@error('last_name')
					<div class="flex items-center">
						<p class="w-1/3"></p>
						<p class="w-2/3 text-red-500 text-base font-semibold">{{ $message }}</p>
					</div>
				@enderror
			</div>

			<div class="w-full my-2">
				<div class="flex items-center">
					<label class="w-1/3 text-center" for="email">Email Address:</label>
					<input class="w-2/3 border-2 p-1 rounded @error('email') border-red-500 @enderror" type="email" name="email" id="email" value="{{ old('email') }}">
				</div>
				@error('email')
					<div class="flex items-center">
						<p class="w-1/3"></p>
						<p class="w-2/3 text-red-500 text-base font-semibold">{{ $message }}</p>
					</div>
				@enderror
			</div>

			<button class="w-32 text-white bg-blue-500 py-1 rounded my-6 hover:bg-blue-600 hover:shadow-xl" type="submit">Book</button>
		</form>
    </div>
	
	<script src="/js/booking.js"></script>
</x-main>