<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Fuel Quote Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form name="fqform" method="POST" class="mt-4" action="{{ route('quoteform.submit') }}">
                    @csrf
                    <fieldset>
                        
                        <label for="gallons" class="p-6 text-gray-900 dark:text-gray-100">Gallons:</label>
                        <input type="number" name="gallons" class="rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:cursor-not-allowed disabled:border-gray-200 disabled:bg-gray-50 disabled:text-gray-500 " value="1" min="1" max="1000000">
                        
                        <div class="flex items-center">
                            <label for="delivaddy" class="p-6 text-gray-900 dark:text-gray-100">Delivery Address:</label>
                            <div class="text-gray-900 dark:text-gray-100">{{ $address }}</div>
                            
                        </div>
                        <label for="delivdate" class="p-6 text-gray-900 dark:text-gray-100">Delivery Date:</label>
                        <input type="date" id="delivdate" class="rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:cursor-not-allowed disabled:border-gray-200 disabled:bg-gray-50 disabled:text-gray-500 mb-4" name="delivdate" required>
                        <br>
                        <label for="pricepergallon" class="p-6 text-gray-900 dark:text-gray-100">Price Per Gallon:</label>
                        <input type="number" name="pricepergallons" class="rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:cursor-not-allowed disabled:border-gray-200 disabled:bg-gray-50 disabled:text-gray-500 mb-4" placeholder="{{$suggestedPPG}}" readonly>
                        <br>
                        <div class="flex justify-end">
                            <label for="totalamountdue" class="p-6 text-gray-900 dark:text-gray-100">Total Amount Due:</label>
                            <input type="number" name="totalamountdue" class="rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:cursor-not-allowed disabled:border-gray-200 disabled:bg-gray-50 disabled:text-gray-500 mb-4 mr-4" placeholder="0.00" readonly>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Function to calculate and update the suggested price and total amount due
        function updatePrices() {
            var currentPPG = 1.50;
            var locationFactor = "{{ $locationFactor }}";
            var historyFactor = "{{ $historyFactor }}";
            var gallonsMoreThan1000 = 0.02; 
            var gallonsLessThan1000 = 0.03; 
            var profitFactor = 0.10;

            var gallons = parseFloat($("input[name='gallons']").val());
            if (gallons == 0) {
                // If gallons is invalid or zero, display N/A for both suggested price and total amount due
                $("input[name='pricepergallons']").val("N/A");
                $("input[name='totalamountdue']").val("N/A");
            } else {
                // Calculate the suggested price
                var gallonsFactor = gallons > 1000 ? gallonsMoreThan1000 : gallonsLessThan1000;
                var margin = currentPPG * (locationFactor - historyFactor + gallonsFactor + profitFactor);
                var suggestedPPG = currentPPG + margin;

                // Round the suggested price to two decimal places
                suggestedPPG = suggestedPPG.toFixed(2);

                // Update the suggested price display
                $("input[name='pricepergallons']").val(suggestedPPG);

                // Calculate the total amount due
                var totalAmountDue = (gallons * suggestedPPG).toFixed(2);

                // Update the total amount due display
                $("input[name='totalamountdue']").val(totalAmountDue);
            }
        }

        // Listen for changes in the gallons input and call the updatePrices function
        $("input[name='gallons']").on("input", updatePrices);

        // Call the updatePrices function on page load to display the initial suggested price and total amount due
        updatePrices();

        // Submit form
        $("form[name='fqform']").on("submit", function() {
            var suggestedPPG = $("input[name='pricepergallons']").val();
            $("input[name='pricepergallons']").attr("value", suggestedPPG);

            var totalAmountDue = $("input[name='totalamountdue']").val();
            $("input[name='totalamountdue']").attr("value", totalAmountDue);
        });
    });
</script>

</x-app-layout>


