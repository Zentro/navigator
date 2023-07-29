<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Fuel Quote History') }}
        </h2>
    </x-slot>

    @if(session('success'))
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          
            
            
    <div class="p-6 text-green-500">{{ session('success') }}</div>




            </div>
        </div>
    </div>

    @endif

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="w-full overflow-hidden border border-gray-300 rounded-lg">
                    <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                        <tr class="bg-green-100 dark:bg-green-800">
                            <!--<th class="px-8 py-4 border-b border-r border-gray-300 text-gray-800 dark:text-gray-200">Username</th> unsure if needed-->
                            <th class="px-8 py-4 border-b border-r border-gray-300 text-black dark:text-gray-200">Date Purchased</th>
                            <th class="px-8 py-4 border-b border-r border-gray-300 text-black dark:text-gray-200">Gallons Requested</th>
                            <th class="px-8 py-4 border-b border-r border-gray-300 text-black dark:text-gray-200">Delivery Address</th>                           
                            <th class="px-8 py-4 border-b border-r border-gray-300 text-black dark:text-gray-200">Delivery Date</th>
                            <th class="px-8 py-4 border-b border-r border-gray-300 text-black dark:text-gray-200">Price Per Gallon</th>
                            <th class="px-8 py-4 border-b border-r border-gray-300 text-black dark:text-gray-200">Total Amount Due</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($quotes as $quote)
                                <tr class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
                                    <td class="px-8 py-4 border-b border-r border-gray-300">{{ $quote->purchase_datetime }}</td>
                                    <td class="px-8 py-4 border-b border-r border-gray-300">{{ $quote->gallons_requested }}</td>
                                    <td class="px-8 py-4 border-b border-r border-gray-300">{{ $quote->delivery_address }}</td>
                                    <td class="px-8 py-4 border-b border-r border-gray-300">{{ $quote->delivery_date }}</td>
                                    <td class="px-8 py-4 border-b border-r border-gray-300">${{ number_format($quote->price_per_gallon, 2) }}</td>
                                    <td class="px-8 py-4 border-b border-r border-gray-300">${{ number_format($quote->total_price, 2) }}</td>
                                </tr>
                            @endforeach
                        

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>


