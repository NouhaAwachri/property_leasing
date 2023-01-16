<x-guest-layout>

    <div class="relative z-10 pt-60 pb-80 bg-cover bg-center" style="background-image: url(/images_property/index.jpg)">
        <div class="absolute h-full w-full bg-black opacity-70 top-0 left-0 z-10">
           <div class="py-60 text-center">
              <div class="container"> 
              <h2  style= "position: relative;text-align: center;color: white;font-size:300%; font-family:verdana;">Discover a place you'll love to live in</h2>
       
                </div>
    
               </div>
                   </div>
                 </div>
       
         
                   </div> 


             <div class="py-20 text-center">
               <div class="container">
                  <p class="text-gray-500 text-2xl font-bold mb-10">WELCOME</p>
                </div>
            </div>  



     <div class="container text-center pt-14">
        <h2 class="section-heading">{{ __('More information about us') }}</h2>
        <div class="relative mt-10 mb-14 bg-cover rounded-xl py-0 bg-center">
             <!-- style="background-image: url(/images_property/logo_img.png)"> -->
             <!-- <div class="absolute w-full h-full rounded-xl opacity-20 bg-white left-0 top-0"></div> -->
                   <div class="relative z-20">
                  </div>
                  </div>

                  <div class="text-xl">
                      <p>Looking at a property listing 
                   website that will effectively help you sell your house? Wondering where to 
                    advertise rentals? Join our website, a free property listing site where in you 
                      can post free property ads online to list property for sale or post ad for rent. 
                     All you need to do is furnish a comprehensive property list with accurate 
                and relevant details of your property.
                With the limited number of homes on the current Tunisian market, 
                our web site will help you create the right 
                strategies and visions to achieve your home buying or selling process</p>

        </div>
    </div>


    <!-- Last Added Objects -->
    <div class="container py-14">
        <h2 class="section-heading">{{ __('Last added properties') }}</h2>
        <div class="flex flex-wrap -mx-2 mt-10">

            @foreach($latest_properties as $property)
                @include('components.single-property-card', ['property' => $property, 'width' => 'w-1/4'])
            @endforeach


        </div>
    </div>

</x-guest-layout>
