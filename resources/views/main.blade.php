<div class="w-full grid h-full ">
    <div class="h-screen w-dvh  border-b-2 boder-[#67788a] flex">
        @include('sections.portada')
    </div>



    <div style="height:120vh;" class="w-dvh  border-b-2 boder-[#67788a] flex ">
        @include('sections.my_projects')
    </div>

{{--     <div class="h-[1/4] flex items-center justify-center mb-[15rem] bg-fixed bg-center bg-cover custom-img">

    </div> --}}
    <div class="h-full w-dvh flex">
        @include('sections.tecnics')
    </div>
</div>

<script>

function mostrar_modal(id){
    $("#"+id).removeClass("hidden");
}

function ocultar_modal(id){
    $("#"+id).addClass("hidden");
}



</script>
