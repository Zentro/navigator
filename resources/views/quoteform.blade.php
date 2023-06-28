<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Fuel Quote Form') }}
        </h2>
    </x-slot>

   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          
            
            @if(session('success'))
    <div class="p-6 text-green-500">{{ session('success') }}</div>
@endif



            </div>
        </div>
    </div>


    


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form name="fqform" method="POST" class="mt-4" action="{{ route('quoteform.submit') }}">
                    @csrf
                    <fieldset>
                        <label for="gallons" class="p-6 text-gray-900 dark:text-gray-100">Gallons:</label>
                        <input type="number" name="gallons" class="rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:cursor-not-allowed disabled:border-gray-200 disabled:bg-gray-50 disabled:text-gray-500 mb-4">
                        <br>
                        <label for="delivaddy" class="p-6 text-gray-900 dark:text-gray-100">Delivery Address:</label>
                        <input type="text" name="delivaddy" class="rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:cursor-not-allowed disabled:border-gray-200 disabled:bg-gray-50 disabled:text-gray-500 mb-4" placeholder="Pulled from profile" disabled>
                        <br>
                        <label for="delivdate" class="p-6 text-gray-900 dark:text-gray-100">Delivery Date:</label>
                        <input type="date" id="delivdate" class="rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:cursor-not-allowed disabled:border-gray-200 disabled:bg-gray-50 disabled:text-gray-500 mb-4" name="delivdate" required>
                        <br>
                        <label for="pricepergallon" class="p-6 text-gray-900 dark:text-gray-100">Price Per Gallon:</label>
                        <input type="number" name="pricepergallons" class="rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:cursor-not-allowed disabled:border-gray-200 disabled:bg-gray-50 disabled:text-gray-500 mb-4" placeholder="From Pricing Module" disabled>
                        <br>
                        <div class="flex justify-end">
                            <label for="totalamountdue" class="p-6 text-gray-900 dark:text-gray-100">Total Amount Due:</label>
                            <input type="number" name="totalamountdue" class="rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:cursor-not-allowed disabled:border-gray-200 disabled:bg-gray-50 disabled:text-gray-500 mb-4 mr-4" placeholder="From Pricing Module" disabled>
                        <br><br>
                        </div>
                    </fieldset>
                    
                    <div class="flex justify-end">
                        <input type="submit" class="px-6 py-2  text-white bg-gray-800 border border-gray-300 rounded-md mb-2 mr-4" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>


