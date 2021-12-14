<template>
  <div>
      <div id="inicio">
    <div class="row">
        <div class="col-md-12">
            <div class="widget p-md" style="align-content: center;">

                <div style=";margin: 0px;">
                    <div class="row justify-content-center" style="padding:0;margin-top: 1em;">
                        <div class="col-md-6 col-sm-3 input-group" style="padding:2em; color: black;">
                            <h5>Configuración</h5>
                            <p>Agregar, eliminar y editar usuarios del sistema</p>
                            <button type="button"
                            class="btn btn-success waves-effect waves-light btn-success btn-sm"
                            data-toggle="modal"

                          data-target="#modal"
                            data-dismiss="modal" role="button">
                            <i class="mdi mdi-plus-box"></i>Nuevo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="widget p-md" style="align-content: center;">
                <div style="width: 100%;margin: 0px;">

                    <div class="row justify-content-center" style="padding:3em;" id="datos_tabla">
                        <div class="col-md-10 col-md-offset-1 col-sm-12 col-12 align-self-start table-responsive" style="text-align: center; color: black;font-size:14px;" id="tabla_editar">
                            <table data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%" id="LOL" style="font-family:Helvetica Neue, Helvetica,Arial,sans-serif;">
                                <thead >
                                    <tr>
                                    <th>NOMBRE</th>
                                    <th>USUARIO</th>
                                    <th>ACCIONES</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr v-for="us in usuarios" :key="us.id">
                                    <td>{{us.nombre}}</td>
                                    <td>{{us.usuario}}</td>
                                    <td>
                                        <button type="button"
                                        class="btn btn-success waves-effect waves-light btn-success btn-sm"
                                        data-toggle="modal"

                                            data-target="#modal_users_edit"
                                        data-dismiss="modal" role="button">
                                        <i class="zmdi zmdi-edit"></i></button>

                                 <!--        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> -->
                                    <a class="btn waves-effect waves-light btn-warning" onclick="inactivar();"
                                             style="margin-right: 10px;" role="button"><i
                                                class="zmdi zmdi-delete"></i></a>
                                        </td>

                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  </div>
</template>

<script>
    export default {

         data(){
            return{

                usuarios:[], //Este array contendrá las tareas de nuestra bd
            }
        },
        created() {
                  this.fetchProducts();
                  console.log(this.usuarios);
             },
       methods:{
         /*  async listar(){
              const res=await axios.get('/users');
              this.usuarios=res.data;

           } */
           fetchProducts(){
      axios.get('/lista_usuarios').then((responce)=>{
        this.usuarios = responce.data.users;
      });
    }

       },


    }
</script>

<style>

</style>
