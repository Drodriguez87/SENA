<div class="modal fade modalPermisos" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Permisos de Usuario Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
          dep($data);
        ?>
        <div class="col-md-12">
          <div class="tile">
            <form action="" id="formPermisos" name="formPermisos">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Modulo</th>
                      <th>Leer </th>
                      <th>Escribir</th>
                      <th>Actualizar</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                          $no=1;
                          $modulos = $data['modulos'];
                          for ($i=0; $i < count($modulos); $i++){
                            $permisos = $modulos[$i]['permisos'];
                            $rCheck = $permisos['r'] == 1 ? " checked " : "";
                            $wCheck = $permisos['w'] == 1 ? " checked " : "";
                            $uCheck = $permisos['u'] == 1 ? " checked " : "";
                            $dCheck = $permisos['d'] == 1 ? " checked " : "";

                            $idmod = $modulos[$i]['moduloid'];
                          }
                      ?>
                    <tr>
                      <td>Usuario</td>
                      <td>
                        <input type="checkbox" checked data-toggle="toggle">
                      </td>
                      <td>
                        <input type="checkbox" checked data-toggle="toggle">
                      </td>
                      <td>
                        <input type="checkbox" checked data-toggle="toggle">
                      </td>
                      <td>
                        <input type="checkbox" checked data-toggle="toggle">
                      </td>
                      <td>
                        <input type="checkbox" checked data-toggle="toggle">
                      </td>
                      <td>
                        <input type="checkbox" checked data-toggle="toggle">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="text-center">
                <button class="btn btn-success" type="submit">Guardar</button>
                <button class="btn btn-danger" type="button">Salir</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>