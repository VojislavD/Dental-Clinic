<x-admin>
	<h1 class="text-2xl font-bold text-blue-500 p-8 text-center">Create New User</h1>

	<form class="w-full md:w-3/4 xl:w-1/2 px-4 xl:px-0 mb-16 xl:mb-0 mx-auto" method="POST" action="/users/create">
		@csrf

		<div class="flex items-center mt-4">
			<label class="w-1/4 font-semibold" for="first_name">First Name</label>
			<input class="w-3/4 border-2 p-1 @error('first_name') border-red-600 @enderror" type="text" name="first_name" id="first_name" value="{{ old('first_name') }}">
		</div>
		@error('first_name')
			<div class="flex items-center">
				<label class="w-1/4"></label>
				<p class="text-red-600 font-semibold">{{ $message }}</p>
			</div>
		@enderror

		<div class="flex items-center mt-4">
			<label class="w-1/4 font-semibold" for="last_name">Last Name</label>
			<input class="w-3/4 border-2 p-1 @error('last_name') border-red-600 @enderror" type="text" name="last_name" id="last_name" value="{{ old('last_name') }}">
		</div>
		@error('last_name')
			<div class="flex items-center">
				<label class="w-1/4"></label>
				<p class="text-red-600 font-semibold">{{ $message }}</p>
			</div>
		@enderror

		<div class="flex items-center mt-4">
			<label class="w-1/4 font-semibold" for="job_title">Job Title</label>
			<input class="w-3/4 border-2 p-1 @error('job_title') border-red-600 @enderror" type="text" name="job_title" id="job_title" value="{{ old('job_title') }}">
		</div>
		@error('job_title')
			<div class="flex items-center">
				<label class="w-1/4"></label>
				<p class="text-red-600 font-semibold">{{ $message }}</p>
			</div>
		@enderror

		<div class="flex items-center mt-4">
			<label class="w-1/4 font-semibold" for="employee_code">Employee Code</label>
			<input class="w-3/4 border-2 p-1 @error('employee_code') border-red-600 @enderror" type="text" name="employee_code" id="employee_code" value="{{ old('employee_code') }}">
		</div>
		@error('employee_code')
			<div class="flex items-center">
				<label class="w-1/4"></label>
				<p class="text-red-600 font-semibold">{{ $message }}</p>
			</div>
		@enderror

		<div class="flex items-center mt-4">
			<label class="w-1/4 font-semibold" for="email">Email</label>
			<input class="w-3/4 border-2 p-1 @error('email') border-red-600 @enderror" type="email" name="email" id="email" value="{{ old('email') }}">
		</div>
		@error('email')
			<div class="flex items-center">
				<label class="w-1/4"></label>
				<p class="text-red-600 font-semibold">{{ $message }}</p>
			</div>
		@enderror

		<div class="flex items-center mt-4">
			<label class="w-1/4 font-semibold" for="password">Password</label>
			<input class="w-3/4 border-2 p-1 @error('password') border-red-600 @enderror" type="password" name="password" id="password" value="{{ old('password') }}">
		</div>

		<div class="flex items-center mt-4">
			<label class="w-1/4 font-semibold" for="password_confirmation">Confirm Password</label>
			<input class="w-3/4 border-2 p-1 @error('password_confirmation') border-red-600 @enderror" type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password') }}">
		</div>
		@error('password')
			<div class="flex items-center">
				<label class="w-1/4"></label>
				<p class="text-red-600 font-semibold">{{ $message }}</p>
			</div>
		@enderror

		<div class="flex items-center mt-4">
			<label class="w-1/4"></label>
			<button class="bg-blue-500 px-8 py-1 text-white rounded hover:bg-blue-600 hover:shadow-xl">Save</button>
		</div>
		</div>
	</form>
</x-admin>