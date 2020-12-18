<x-main>
	<h1 class="text-center text-blue-500 text-3xl font-bold py-16">Contact Us</h1>

	<div class="container mx-auto flex flex-col lg:flex-row pb-24">
		<div class="w-full lg:w-1/2 px-8 my-6 lg:my-0">
			@if(session('message'))
				<p class="bg-green-400 p-1 rounded">{{ session('message') }}</p>
			@endif
			<form class="flex flex-col text-lg" method="POST" action="/contact">
				@csrf
				<label class="my-2" for="name">Your name <span class="text-red-600 font-bold">*</span></label>
				<input class="my-2 border-2 px-1 py-1 rounded @error('name') border-2 border-red-500 @enderror" type="text" name="name" id="name" value="{{ old('name') }}">
				@error('name')
					<p class="text-red-600 text-base font-semibold">{{ $message }}</p>
				@enderror

				<label class="my-2 " for="email">Your email address <span class="text-red-600 font-bold">*</span></label>
				<input class="my-2 border-2 px-1 py-1 rounded @error('email') border-2 border-red-500 @enderror" type="email" name="email" id="email" value="{{ old('email') }}">
				@error('email')
					<p class="text-red-600 text-base font-semibold">{{ $message }}</p>
				@enderror

				<label class="my-2" for="subject">Subject <span class="text-red-600 font-bold">*</span></label>
				<input class="my-2 border-2 px-1 py-1 rounded @error('subject') border-2 border-red-500 @enderror" type="text" name="subject" id="subject" value="{{ old('subject') }}">
				@error('subject')
					<p class="text-red-600 text-base font-semibold">{{ $message }}</p>
				@enderror

				<label class="my-2" for="body">Message <span class="text-red-600 font-bold">*</span></label>
				<input class="my-2 border-2 px-1 py-1 h-32 rounded @error('body') border-2 border-red-500 @enderror" type="text" name="body" id="body" value="{{ old('body') }}">
				@error('body')
					<p class="text-red-600 text-base font-semibold">{{ $message }}</p>
				@enderror

				<button class="my-2 w-32 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 hover:shadow-xl" type="submit">Send</button>
			</form>
		</div>
		<ul class="w-full lg:w-1/2 flex flex-col items-center lg:items-start px-8 text-lg my-6 lg:my-0">
			<li class="mb-6">
				<i class="fas fa-map-marker-alt text-blue-500 mr-2"></i> Krunska 77, Belgrade
			</li>
			<li class="my-6">
				<i class="fas fa-envelope text-blue-500 mr-2"></i> contact@example.com
			</li>
			<li class="my-6">
				<i class="fas fa-phone-alt text-blue-500 mr-2"></i> 011 4159211
			</li>
			<li class="my-6 w-full">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.8969374671847!2d20.470934251302243!3d44.80328897899612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7aa016c8cfff%3A0x230c4208d5a1139e!2sKrunska%2077%2C%20Beograd%2011000!5e0!3m2!1sen!2srs!4v1593796992279!5m2!1sen!2srs" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</li>
		</ul>
	</div>
</x-main>