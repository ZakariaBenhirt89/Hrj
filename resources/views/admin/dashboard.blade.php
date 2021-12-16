<x-app-layout>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <!-- This example requires Tailwind CSS v2.0+ -->
   <div class="app-content content">
       <div class="component1">
           <h1> This the main place</h1>
           <email-btn route="{{ route('admin.mail.send') }}" id="xr1"></email-btn>
           <a class="btn btn-primary" href="{{ route('admin.user.detail' , ['id' => 12]) }}"> go to </a>
       </div>
   </div>

</x-app-layout>
