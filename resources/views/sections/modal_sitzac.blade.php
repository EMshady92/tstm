<div id="modal_sitzac" name="modal_sitzac" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <style>
datalist {
  position: absolute;
  background-color: white;
  border: 1px solid blue;
  border-radius: 0 0 5px 5px;
  border-top: none;
  font-family: sans-serif;
  width: 350px;
  padding: 5px;
}

datalist.option {
  background-color: white;
  padding: 4px;
  color: blue;
  margin-bottom: 1px;
  font-size: 18px;
  cursor: pointer;
}


    </style>
        <div class="flex  items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
          <!-- Fondo oscuro -->
          <div class="fixed inset-0 transition-opacity" onclick="ocultar_modal('modal_sitzac')">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
          </div>
          <!-- Contenedor del modal -->
          <div style="width: 60%" class="border-2 border-blue-600 inline-block align-bottom bg-[#011629] rounded-lg text-left overflow-hidden shadow-xl transform transition-all  justify-items-center" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="flex w-full py-2  mx-2">
                <h1 class="title_porject text-3xl text-white font-roboto">{{__('index.sistema_informatico_de')}} Tribunal de Justicia Administrativa del Estado de Zacatecas (SIT-ZAC)
                </h1>
            </div>
            <div class="bg-[#011629] pb-4">
              <div class="grid w-full">
               <div class="w-full">
                @include('body_carts_projects.portada_sitzac')
                @include('body_carts_projects.sumary_sitzac')
               </div>
              </div>
            </div>
            <div class="bg-[#172c3d] px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
              <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                <button type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-[#011629] text-base leading-6 font-medium text-[#ec1c24] shadow-sm hover:bg-[#67788a] focus:outline-none focus:border-blue-700 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5" onclick="ocultar_modal('modal_sitzac')">
                    {{__('index.cerrar')}}
                </button>
              </span>
            </div>
          </div>
        </div>
        <script>

        </script>
      </div>

