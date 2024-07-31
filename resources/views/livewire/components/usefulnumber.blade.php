<div class="p-4 bg-white w-full">
    <h3 class="text-xl text-left font-bold mb-4"> Useful numbers</h3>
    <div class="flex justify-center">


        <div class="grid grid-cols-3 sm:grid-cols-2 gap-6">
            @foreach ($usefulNumbers as $usefulNumber)
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-10"
                    style="width: 100px; height: 100px; margin: 5px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                    <div class="mb-2 flex justify-center">
                        {!! $usefulNumber['icon'] !!}
                    </div>
                    <a href="#" class="flex flex-col items-center">
                        <h5 class="text-gray-900 dark:text-white font-semibold tracking-tight" style="font-size: 12px;">
                            {{ $usefulNumber['title'] }}</h5>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
