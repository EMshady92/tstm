
<style>
    #modalOverlay {
  position: fixed;
  top:0;
  left:0;
  right:0;
  bottom:0;
  background-color: rgba(0,0,0,0.8);
  z-index:9999;
}

#modal {
  position:fixed;
  width:60%;
  top:55%;
  left:50%;
  padding:15px;
  text-align:center;
  background-color:#fafafa;
  box-sizing:border-box;
  opacity:0;
  transform: translate(-50%,-50%);
  transition:all 150ms ease-in-out;
}

#modalOverlay.modal-open #modal {
  opacity:1;
  top:50%;
}

.title_porject{
    text-shadow: 2px 0 #67788a, -2px 0 #67788a, 0 2px #67788a, 0 -2px #67788a,
               1px 1px #67788a, -1px -1px #67788a, 1px -1px #67788a, -1px 1px #67788a;
               -webkit-text-stroke: 2px #67788a;
}
</style>
{{-- <div class="h-[1/4] flex items-center justify-center mb-12 bg-fixed bg-center bg-cover custom-img">

</div> --}}
<div class="grid w-full h-[100%] bg-fixed bg-center bg-cover custom-img">
    <div class="grid w-full justify-items-center place-content-center">
        <h1 class="text-5xl text-[#ec1c24] font-roboto font-bold text-border">{{__('index.my_proyects')}}</h1>
    </div>
    <div class="grid grid-cols-4 gap-y-5 gap-x-3 w-full mx-3  mb-4">
        @include('sections.modal_petc')
        <div id="open" onclick="mostrar_modal('modal_petc');"   class="bg-[#172c3d] max-w-sm rounded overflow-hidden  border-[3px] border-[#67788a] cursor-pointer hover:border-[#ec1c24]">
            <img class="w-full h-1/3 zoom" src="{{asset('images/petc_imgs/portada_petc.png')}}" alt="Sunset in the mountains">
            <div class="px-6 py-4 h-1/3">
              <div class="font-bold text-xl mb-2 text-white">PETC </div>
              <p class="text-[#67788a] font-roboto">
                {{__('index.pect_port_summary')}}
              </p>
            </div>
            <div class="px-6 pt-4 pb-2 grid grid-cols-7 gap-4 h-1/3">
                <div>
                    <img class="w-10 h-10" title="Laravel" src="{{asset('images/laravel.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="HTML" src="{{asset('images/html.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="CSS" src="{{asset('images/css.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="MySQL" src="{{asset('images/mysql.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="JavaScript" src="{{asset('images/JS.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="Ajax" src="{{asset('images/ajax.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="Github" src="{{asset('images/gitlogo.png')}}">
                </div>
            </div>
          </div>
          @include('sections.modal_sitzac')
          <div onclick="mostrar_modal('modal_sitzac');" class="bg-[#172c3d] max-w-sm rounded overflow-hidden  border-[3px] border-[#67788a] cursor-pointer hover:border-[#ec1c24]">
            <img class="w-full h-1/3" src="{{asset('images/sitzac_imgs/portada_sitzac.png')}}" alt="Sunset in the mountains">
            <div class="px-6 py-4 h-1/3">
              <div class="font-bold text-xl mb-2 text-white">SIT-ZAC</div>
              <p class="text-[#67788a] font-roboto">
                {{__('index.sitzac_port_summary')}}
              </p>
            </div>
            <div class="px-6 pt-4 pb-2 grid grid-cols-7 gap-4 h-1/3">
                <div>
                    <img class="w-10 h-10" title="Laravel" src="{{asset('images/laravel.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="HTML" src="{{asset('images/html.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="CSS" src="{{asset('images/css.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="MySQL" src="{{asset('images/mysql.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="JavaScript" src="{{asset('images/JS.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="Ajax" src="{{asset('images/ajax.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="Github" src="{{asset('images/gitlogo.png')}}">
                </div>
            </div>
          </div>
 @include('sections.modal_hvacopcost')
          <div onclick="mostrar_modal('modal_hvacopcost');" class="bg-[#172c3d] max-w-sm rounded overflow-hidden  border-[3px] border-[#67788a] cursor-pointer hover:border-[#ec1c24]">
            <img class="w-full h-1/3" src="{{asset('images/hvacopcost_imgs/portada_hvac.png')}}" alt="Sunset in the mountains">
            <div class="px-6 py-4  h-1/3">
              <div class="font-bold text-xl mb-2 text-white">Desprosoft HVACopcost</div>
              <p class="text-[#67788a] font-roboto">
                {{__('index.hvacopcost_port_summary')}}
              </p>
            </div>
            <div class="px-6 pt-4 pb-2 grid grid-cols-7 gap-4  h-1/3">
                <div>
                    <img class="w-10 h-10" title="Laravel" src="{{asset('images/laravel.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="HTML" src="{{asset('images/html.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="CSS" src="{{asset('images/css.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="MySQL" src="{{asset('images/mysql.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="JavaScript" src="{{asset('images/JS.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="Ajax" src="{{asset('images/ajax.png')}}">
                </div>

                <div>
                    <img class="w-10 h-10" title="Github" src="{{asset('images/gitlogo.png')}}">
                </div>
            </div>
          </div>
@include('sections.modal_inventory')
          <div onclick="mostrar_modal('modal_inventory');" class="bg-[#172c3d] max-w-sm rounded overflow-hidden border-[3px] border-[#67788a] cursor-pointer hover:border-[#ec1c24]">
            <img class="w-full h-1/3" src="{{asset('images/inventory_imgs/portada_inventory.png')}}" alt="Sunset in the mountains">
            <div class="px-6 py-4 h-1/3">
                <div class="font-bold text-xl mb-2 text-white">Desprosoft Inventory Management</div>
              <p class="text-[#67788a] font-roboto">
                {{__('index.inventory_port_summary')}}
              </p>
            </div>

                <div class="px-6 pt-4 pb-2 grid grid-cols-8 gap-3 h-1/3">
                    <div>
                        <img class="w-10 h-10" title="Laravel" src="{{asset('images/laravel.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="HTML" src="{{asset('images/html.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="CSS" src="{{asset('images/css.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="MySQL" src="{{asset('images/mysql.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="JavaScript" src="{{asset('images/JS.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="Ajax" src="{{asset('images/ajax.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="Livewire" src="{{asset('images/livewire.png')}}">
                    </div>
                    <div>
                        <img class="w-10 h-10" title="Github" src="{{asset('images/gitlogo.png')}}">
                    </div>
                </div>

          </div>

          @include('sections.modal_hmop')
          <div onclick="mostrar_modal('modal_hmop');" class="bg-[#172c3d] max-w-sm rounded overflow-hidden border-[3px] border-[#67788a] cursor-pointer hover:border-[#ec1c24]">
            <img class="w-full h-1/3" src="{{asset('images/hmop_imgs/ajax.png')}}">
            <div class="px-6 py-4 h-1/3">
                <div class="font-bold text-xl mb-2 text-white">HMOP</div>
              <p class="text-[#67788a] font-roboto">
                {{__('index.en_processo')}}
              </p>
            </div>

                <div class="px-6 pt-4 pb-2 grid grid-cols-8 gap-3 h-1/3">
                    <div>
                        <img class="w-10 h-10" title="Laravel" src="{{asset('images/laravel.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="HTML" src="{{asset('images/html.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="CSS" src="{{asset('images/css.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="MySQL" src="{{asset('images/mysql.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="JavaScript" src="{{asset('images/JS.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="Ajax" src="{{asset('images/ajax.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="Livewire" src="{{asset('images/livewire.png')}}">
                    </div>
                    <div>
                        <img class="w-10 h-10" title="Github" src="{{asset('images/gitlogo.png')}}">
                    </div>
                </div>

          </div>

          @include('sections.modal_mant_chill')
          <div onclick="mostrar_modal('modal_mant_chill');" class="bg-[#172c3d] max-w-sm rounded overflow-hidden border-[3px] border-[#67788a] cursor-pointer hover:border-[#ec1c24]">
            <img class="w-full h-1/3" src="{{asset('images/mant_equipos_imgs/uno.png')}}">
            <div class="px-6 py-4 h-1/3">
                <div class="font-bold text-xl mb-2 text-white">Mantenimiento Chillers</div>
              <p class="text-[#67788a] font-roboto">
                {{__('index.en_processo')}}
              </p>
            </div>

                <div class="px-6 pt-4 pb-2 grid grid-cols-8 gap-3 h-1/3">
                    <div>
                        <img class="w-10 h-10" title="Laravel" src="{{asset('images/laravel.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="HTML" src="{{asset('images/html.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="CSS" src="{{asset('images/css.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="MySQL" src="{{asset('images/mysql.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="JavaScript" src="{{asset('images/JS.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="Ajax" src="{{asset('images/ajax.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="Livewire" src="{{asset('images/livewire.png')}}">
                    </div>
                    <div>
                        <img class="w-10 h-10" title="Github" src="{{asset('images/gitlogo.png')}}">
                    </div>
                </div>

          </div>


    </div>

</div>
<script>
$('#open').click(function() {
  $('#modal_petc').show().addClass('modal-open');
});

$('#close').click(function() {
  var elem = $('#modal_petc');
  elem.removeClass('modal-open');
  setTimeout(function() {
    elem.hide();
  },200);
});
</script>
