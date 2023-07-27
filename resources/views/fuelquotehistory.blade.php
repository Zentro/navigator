<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Fuel Quote History') }}
        </h2>
    </x-slot>




    

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
                        <tr class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
                            <td class="px-8 py-4 border-b border-r border-gray-300">07/15/2023</td>
                            <td class="px-8 py-4 border-b border-r border-gray-300">15</td>
                            <td class="px-8 py-4 border-b border-r border-gray-300">1234 Main Street, Houston, TX 77004</td>
                            <td class="px-8 py-4 border-b border-r border-gray-300">07/20/2023</td>
                            <td class="px-8 py-4 border-b border-r border-gray-300">$3.83</td>
                            <td class="px-8 py-4 border-b border-r border-gray-300">$57.45</td>
                        </tr>
                        <tr class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
                        <td class="px-8 py-4 border-b border-r border-gray-300">08/24/2023</td>
                            <td class="px-8 py-4 border-b border-r border-gray-300">10</td>
                            <td class="px-8 py-4 border-b border-r border-gray-300">1234 Main Street, Houston, TX 77004</td>
                            <td class="px-8 py-4 border-b border-r border-gray-300">08/31/2023</td>
                            <td class="px-8 py-4 border-b border-r border-gray-300">$3.51</td>
                            <td class="px-8 py-4 border-b border-r border-gray-300">$35.10</td>
                        </tr>
                        <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>


