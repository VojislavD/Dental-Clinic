<x-admin>
	<h1 class="text-2xl font-bold text-blue-500 p-8 text-center">Users</h1>

	@if (session('userCreated'))
		<p class="text-center bg-green-500 w-3/4 rounded-lg text-white mx-auto py-1">
			{{ session('userCreated') }}
		</p>
    @endif
    @if (session('userDeleted'))
		<p class="text-center bg-green-500 w-3/4 rounded-lg text-white mx-auto py-1">
			{{ session('userDeleted') }}
		</p>
    @endif

	<table class="w-11/12 mx-auto text-center">
		<thead class="border-b-2 border-blue-500">
			<th class="py-2">First Name</th>
			<th class="py-2">Last Name</th>
			<th class="py-2">Email</th>
			<th class="hidden md:table-cell py-2">Job Title</th>
			<th class="py-2">Employee Code</th>
			<th class="py-2"></th>
		</thead>
		<tbody>
			@forelse($users as $user)
				<tr class="border-b-2 text-sm md:text-base">
					<td class="py-3">{{ $user->first_name }}</td>
					<td class="py-3">{{ $user->last_name }}</td>
					<td class="py-3">{{ $user->email }}</td>
					<td class="hidden md:table-cell py-3">{{ $user->job_title }}</td>
					<td class="py-3">{{ $user->employee_code }}</td>
					<td class="py-3">
						@if(auth()->user()->email == 'Admin')
							<a class="bg-yellow-500 px-2 md:px-4 py-1 text-sm rounded hover:bg-yellow-600 hover:shadow-xl" href="/users/{{ $user->id }}/edit">
								<i class="fas fa-edit"></i>
								<span class="hidden xl:inline-block">Edit</span>
							</a>
						@endif
					</td>
				</tr>
			@empty
				<tr>
					<td class="font-semibold" colspan="6">There is no users.</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	@if(auth()->user()->isAdmin())
		<div class="w-11/12 mx-auto flex justify-end py-8">
			<a class="bg-blue-500 px-4 py-1 text-white rounded text-sm hover:bg-blue-600 hover:shadow-xl" href="/users/create">Create New User</a>
		</div>
	@endif
</x-admin>