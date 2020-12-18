<x-main>
	<h1 class="text-center text-blue-500 text-3xl font-bold pt-16">Booking</h1>

	<div class="container mx-auto flex flex-col items-center justify-center pb-24">
		<div class="text-lg text-center mb-6">
			<p>Our opening hours are: <span class="font-bold">Mon-Fri | 9am - 5pm</span></p>
			<p>Please choose date when you want to book appointment.</p>
		</div>
		
		@if (session('successBooked'))
			<p class="w-2/3 mx-auto text-white text-center mb-4 py-2 rounded-lg bg-green-600">
				{{ session('successBooked') }}
			</p>
	    @endif
		<div class="w-3/4 flex flex-col items-center border-2 border-blue-500 rounded pb-6">
	        <h3 class="text-center py-2 text-lg font-bold" id="monthAndYear"></h3>
	        <table class="w-full text-center" id="calendar">
	            <thead class="border-b-2 border-t-2 border-blue-500">
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
	            <button class="bg-blue-500 w-32 py-1 mx-4 rounded hover:bg-blue-600 hover:shadow-xl" id="previous" onclick="previous()">Previous</button>
	            <button class="bg-blue-500 w-32 py-1 mx-4 rounded hover:bg-blue-600 hover:shadow-xl" onclick="next()">Next</button>
	        </div>
	        <br/>
	        <form class="">
	            <label class="" for="month">Jump To: </label>
	            <select class="w-16 ml-4 border-2 border-blue-500" name="month" id="month" onchange="jump()">
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
	            <select class="w-16 ml-4 border-2 border-blue-500" name="year" id="year" onchange="jump()">
		            <option value=2020>2020</option>
		            <option value=2021>2021</option>
		        </select>
	    	</form>
    	</div>
    </div>
	
	<script src="/js/booking.js"></script>
</x-main>