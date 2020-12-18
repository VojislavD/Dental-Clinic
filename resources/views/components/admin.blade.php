<x-master>
	<div class="min-h-screen flex flex-col lg:flex-row">
		<nav class="w-full lg:w-56 bg-blue-500 text-white flex lg:flex-col justify-around lg:justify-between">
			<div class="w-3/4 lg:w-full flex lg:flex-col items-center justify-around">
				<a class="font-bold flex items-center lg:my-8 hover:text-gray-400" href="/">
					<i class="fas fa-tooth fa-2x mr-2"></i>Dental Care
				</a>
				<ul class="my-4 flex lg:flex-col font-semibold">
					<li class="my-4 mx-2 lg:mx-0">
						<a class="flex items-center justify-center lg:justify-start hover:text-gray-400" href="/home" title="Home">
							<i class="fas fa-home mx-2"></i>
							<p class="hidden md:block">Home</p>
						</a>
					</li>
					<li class="my-4 mx-2 lg:mx-0">
						<a class="flex items-center justify-center lg:justify-start hover:text-gray-400" href="/users" title="Users">
							<i class="fas fa-users mx-2"></i>
							<p class="hidden md:block">Users</p>
						</a>
					</li>
					<li class="my-4 mx-2 lg:mx-0">
						<a class="flex items-center justify-center lg:justify-start hover:text-gray-400" href="/appointments" title="Appointments">
							<i class="fas fa-calendar-check mx-2"></i>
							<p class="hidden md:block">Appointments</p>
						</a>
					</li>
				</ul>
			</div>
			<div class="w-1/4 lg:w-full flex items-center justify-center my-8">
				<form method="POST" action="{{ route('logout') }}">
					@csrf
					<button class="flex items-center justify-center hover:text-gray-400 font-semibold" type="submit" title="Logout">
						<i class="fas fa-sign-out-alt mx-2"></i>
						<span class="hidden md:block">Logout</span>
					</button>
				</form>
			</div>
		</nav>
		<div class="w-full flex flex-col lg:flex-row">
			<div class="w-full">
				{{ $slot }}
			</div>
			<div class="w-full lg:w-1/3 xl:w-1/4 p-8 border-t-2 lg:border-t-0 lg:border-l-2 border-blue-500">
				<div class="w-full flex flex-col items-center pb-6">
			        <h3 class="text-center py-2 text-lg font-bold" id="monthAndYear"></h3>
			        <table class="w-full text-center" id="calendar">
			            <thead>
				            <tr>
				                <th class="py-2">Sun</th>
				                <th class="py-2">Mon</th>
				                <th class="py-2">Tue</th>
				                <th class="py-2">Wed</th>
				                <th class="py-2">Thu</th>
				                <th class="py-2">Fri</th>
				                <th class="py-2">Sat</th>
				            </tr>
			            </thead>

			            <tbody id="calendar-body">

			            </tbody>
			        </table>

			        <div class="mt-8 text-white">
			            <button class="bg-blue-500 w-24 py-1 mx-1 rounded hover:bg-blue-600 hover:shadow-xl" id="previous" onclick="previous()">Previous</button>
			            <button class="bg-blue-500 w-24 py-1 mx-1 rounded hover:bg-blue-600 hover:shadow-xl" onclick="next()">Next</button>
			        </div>
			        <br/>
			        <form class="">
			            <label class="" for="month">Jump To: </label>
			            <select class="w-16 border-2 border-blue-500" name="month" id="month" onchange="jump()">
			                <option value=0>Jan</option>
			                <option value=1>Feb</option>
			                <option value=2>Mar</option>
			                <option value=3>Apr</option>
			                <option value=4>May</option>
			                <option value=5>Jun</option>
			                <option value=6>Jul</option>
			                <option value=7>Aug</option>
			                <option value=8>Sep</option>
			                <option value=9>Oct</option>
			                <option value=10>Nov</option>
			                <option value=11>Dec</option>
			            </select>


			            <label for="year"></label>
			            <select class="w-16 border-2 border-blue-500" name="year" id="year" onchange="jump()">
				            <option value=2020>2020</option>
				            <option value=2021>2021</option>
				        </select>
			    	</form>
		    	</div>
			</div>
		</div>
	</div>

	<script src="/js/adminBooking.js"></script>
</x-master>