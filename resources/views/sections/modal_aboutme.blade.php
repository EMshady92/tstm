<div id="modal_aboutme" name="modal_aboutme" class="fixed z-10 inset-0 overflow-auto  mt-10 hidden ">
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

.rotate{
    transform: rotate(12deg);
}

.rotate:hover{
    transform: rotate(0deg);
}
    </style>
        <div class="flex  items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
          <!-- Fondo oscuro -->
          <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75" onclick="ocultar_modal('modal_aboutme')"></div>
          </div>
          <!-- Contenedor del modal -->
          <div style="width: 60%" class="border-2 border-blue-600 inline-block align-bottom bg-[#011629] rounded-lg text-left overflow-hidden shadow-xl transform transition-all  justify-items-center h-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-[#011629] pb-4 ">
              <div class="grid w-full mx-3 ">

                <div class="w-full flex my-2">
                <div class="w-1/2 h-full mt-[8rem] ">
                    <div class="flex w-full">
                        <div class="w-full">
                            <p style="text-shadow: 2px 2px 5px #6b7280;" class="text-white text-2xl font-roboto"><b class="text-3xl">!{{__('index.hola')}}</b>{{__('index.presentacion')}}</p>
                        </div>


                    </div>
                </div>
                <div class="w-1/2 h-full flex justify-center mt-[6rem]">
                    <div  class="girar rounded-md bg-[#172c3d]  w-[18rem] h-[18rem] block shadow-xl  border-dashed border-[5px] border-[#ec1c24]">
                        <img class="w-[17.5rem] h-[17.3rem] rounded-md aos-init aos-animate" src="{{asset('images/me.png')}}">
                    </div>
                </div>
               </div>
               <br>

               <div class="w-full">
                    <h1 class="font-bold text-[#67788a] text-2xl mx-2 my-2 indent-px">
                        {{__('index.educacion')}}
                    </h1>

                    <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                        {{__('index.escuela')}}: Instituto Tecnologico de Zacatecas.
                    </p>
                    <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                        {{__('index.ubicacion')}}: Zacatecas,México
                    </p>
                    <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                        {{__('index.perdiodo')}}: 2011-2016
                    </p>
                </div>
                <hr class="border-[#6b7280] w-[98.5%]">
                <div class="w-full">
                    <h1 class="font-bold text-[#67788a] text-2xl mx-2 my-2 indent-px">
                        {{__('index.experiencia')}}
                    </h1>
                  <div class="w-full">
                    <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                        {{__('index.empresa')}}: NDL Bussines and Growth.
                    </p>
                    <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                        {{__('index.puesto')}}: {{__('index.team_leader')}}
                    </p>
                    <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                        {{__('index.ubicacion')}}: Querétaro, México
                    </p>
                    <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                        {{__('index.perdiodo')}}: 02/2022 - {{__('index.actual')}}
                    </p>
                  </div>
                    <hr class="border-[#6b7280] w-[98.5%]">
                    <div class="w-full">
                        <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                             {{__('index.empresa')}}: TENORED.
                        </p>
                        <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                            {{__('index.puesto')}}: {{__('index.web_developer')}}
                        </p>
                        <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                            {{__('index.ubicacion')}}: Zacatecas, México
                        </p>
                        <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                            {{__('index.perdiodo')}}: 02/2021 - 12/2021
                        </p>
                    </div>
                    <hr class="border-[#6b7280] w-[98.5%]">
                    <div class="w-full">
                        <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                             {{__('index.empresa')}}: SEP.
                        </p>
                        <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                            {{__('index.puesto')}}: {{__('index.web_developer')}}
                        </p>
                        <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                            {{__('index.ubicacion')}}: Zacatecas, México
                        </p>
                        <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                            {{__('index.perdiodo')}}: 04/2019 - 02/2021
                        </p>
                    </div>
                    <hr class="border-[#6b7280] w-[98.5%]">
                    <div class="w-full">
                        <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                             {{__('index.empresa')}}: APTIV.
                        </p>
                        <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                            {{__('index.puesto')}}: {{__('index.tecnic')}}
                        </p>
                        <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                            {{__('index.ubicacion')}}: Zacatecas, México
                        </p>
                        <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                            {{__('index.perdiodo')}}: 02/2018 - 04/2019
                        </p>
                    </div>
                    <hr class="border-[#6b7280] w-[98.5%]">
                    <div class="w-full">
                        <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                             {{__('index.empresa')}}: NoMADA Industries.
                        </p>
                        <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                            {{__('index.puesto')}}: {{__('index.web_developer')}}
                        </p>
                        <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                            {{__('index.ubicacion')}}: Zacatecas, México
                        </p>
                        <p class="font-bold text-white text-xl mx-2 my-2 indent-px">
                            {{__('index.perdiodo')}}: 02/2016 - 01/2018
                        </p>
                    </div>
                </div>
              </div>
            </div>
            <div class="bg-[#172c3d] px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
              <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                <button type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-[#011629] text-base leading-6 font-medium text-[#ec1c24] shadow-sm hover:bg-[#67788a] focus:outline-none focus:border-blue-700 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5" onclick="ocultar_modal('modal_aboutme')">
                {{__('index.cerrar')}}
                </button>
              </span>
            </div>
          </div>
        </div>
        <script>

        </script>
      </div>

