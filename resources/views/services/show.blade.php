<x-main>
	<div class="container mx-auto flex flex-col py-16">
		<h1 class="text-center lg:text-left text-blue-500 text-3xl font-bold mb-8">{{ $service['name'] }}</h1>
		<div class="flex flex-col lg:flex-row lg:text-lg">
			<p class="w-full lg:w-1/2 px-4 text-center lg:text-left mb-4 lg:mb-0">{{ $service['body'] }}</p>
			<div class="w-full flex justify-center lg:w-1/2">
				<img class="px-8" src="{{ $service['img'] }}">
			</div>
		</div>
	</div>
</x-main>