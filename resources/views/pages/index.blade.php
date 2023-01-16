<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="shadow-md border-2 border-gray-300 py-2 bg-white mt-28">
        <div class="container mx-auto">
            <ul class="flex items-center">
                <li><a class="text-base text-red-800" href="{{route('home')}}">Property</a></li>
                <li class="mx-3"><i class="fa fa-angle-right"></i></li>
                <li>{{ __($page->name) }}</li>
                
            </ul>
         
        </div>
    </div>
    <div class="py-20 text-center">
               <div class="container">
                  <p class="text-gray-500 text-2xl font-bold mb-10">Phone number : 71 567 435</p>
                  <p class="text-gray-500 text-2xl font-bold mb-10">E-mail : ContactUs@RentandSell.com</p>
                  <p class="text-gray-500 text-2xl font-bold mb-10">Social Media : @RentandSell</p>

                  

</div>
                </div>
            </div>  
</x-guest-layout>
