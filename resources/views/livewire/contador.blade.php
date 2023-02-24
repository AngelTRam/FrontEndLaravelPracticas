<div>
    <!-- FORMULARIO DE VIAJE-->
    <form wire:submit.prevent='guardar'>
        <div class="form-group">
            <label>Nombre</label>
            <input wire:model='data.nombre' type="text" class="form-control" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label>Latitud</label>
            <input wire:model="data.latitud" type="text" class="form-control" placeholder="Latitud">
        </div>
        <div class="form-group">
            <label>Longitud</label>
            <input wire:model="data.longitud" type="text" class="form-control" placeholder="Longitud">
        </div>
        <div class="form-group">
            <label ">Poblacion</label>
            <input wire:model="data.id_poblacion" type="text" class="form-control" placeholder="Poblacion">
        </div>
        <button class="btn btn-success">a</button>
    </form>

    <!-- FIN FORMULARIO DE VIAJE -->

    <!-- LISTA DE VIAJES -->
    <div class="x_panel">
        <div class="x_title">
            <h2>Viajes<small>Listado de viajes.</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">


            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            <th>
                                <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                            </th>
                            <th class="column-title">ID </th>
                            <th class="column-title">Nombre</th>
                            <th class="column-title">Latitud</th>
                            <th class="column-title">Longitud</th>
                            <th class="column-title">Poblacion</th>
                            <th class="column-title no-link last"><span class="nobr">Acciones</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($lugares as $lugar)
                        <tr class="even pointer">
                            <td class="a-center ">
                                <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                            </td>
                            <td class=" ">{{ $lugar['id_lugar'] }}</td>
                            <td class=" ">{{ $lugar['nombre'] }}</td>
                            <td class=" ">{{ $lugar['latitud'] }}</td>
                            <td class=" ">{{ $lugar['longitud'] }}</td>
                            <td class=" ">{{ $lugar['id_poblacion'] }}</td>
                            <td class=" "><button wire:click="guardar" class="btn btn-round btn-info btn-sm"><i class="fa fa-eraser"></i></button></td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- FIN LISTA DE VIAJES -->
</div>
<!-- <div>
    <h1></h1>
    <button class="btn btn-success" wire:click="add"> + </button>
    <button class="btn btn-danger" wire:click="substract"> - </button>
    <h2 style="color:red"></h2>
    <h1>Hola, mi nombre es </h1>
    <label for="">Hola, mi nombre es .</label>
    <input wire:model='nombre' type="text" class="form-control">
</div>

 -->