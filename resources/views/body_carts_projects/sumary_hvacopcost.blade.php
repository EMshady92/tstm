
<style>
    li{
        position: absolute;
        left: 0;
        top: 2px;
        font-size: 20px;
        color: rgb(81, 52, 45);
        line-height: 1;
    }
</style>
<div class="w-full mx-2">
    <div class="w-full my-2">
        <div class="mt-2 flex gap-x-3 w-full justify-center">
            <div class="text-white  font-bold text-xl font-roboto gap-x-2 flex place-items-center">  <img class="w-10 h-10" title="Laravel" src="{{asset('images/laravel.png')}}"><b>Laravel</b></div>
            <div class="text-white  font-bold text-xl font-roboto gap-x-2 flex place-items-center"><img class="w-10 h-10" title="HTML" src="{{asset('images/html.png')}}"><b>HTML</b></div>
            <div class="text-white  font-bold text-xl font-roboto gap-x-2 flex place-items-center"> <img class="w-10 h-10" title="CSS" src="{{asset('images/css.png')}}"><b>CSS</b></div>
            <div class="text-white  font-bold text-xl font-roboto gap-x-2 flex place-items-center"> <img class="w-10 h-10" title="Tailwind" src="{{asset('images/twin.png')}}"><b>Tailwind</b></div>
            <div class="text-white  font-bold text-xl font-roboto gap-x-2 flex place-items-center"> <img class="w-10 h-10" title="MySQL" src="{{asset('images/mysql.png')}}"><b>JavaScript</b></div>
            <div class="text-white  font-bold text-xl font-roboto gap-x-2 flex place-items-center"><img class="w-9 h-9" title="JavaScript" src="{{asset('images/JS.png')}}"><b>MySQL</b></div>
        </div>
    </div>
    <hr class="border-[#6b7280] w-[98.5%]">
    <div class="w-full">
        <h1 class="font-bold text-white text-2xl mx-2 my-2 indent-px">
            {{__('index.acerca_de')}} Desprosoft HVACopcost
        </h1>
        <hr class="border-[#6b7280] w-[98.5%]">
        <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
            {{__('index.hvacopcost_summary')}}
            <br>
            {{__('index.hvacopcost_summary2')}}
         </p>
    </div>

</div>
