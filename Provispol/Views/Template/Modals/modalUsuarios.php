<!-- Modal -->
<div class="modal fade" id="modalFormUsuario" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <form id="formUsuario" name="formUsuario" class="form-horizontal">
                <input type="hidden" id="idUsuario" name="idUsuario" value="">
                <p class="text-primary">Todos los campos son obligatorios</p>
                
                <div class="mb-3 row">
                  <label for="txtIdentificacion" class="form-label col-md-3">Identificacion</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" placeholder="Ingrese su identificacion">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="txtNombre" class="form-label col-md-3">Nombre</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" placeholder="Ingrese su Nombre">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="txtApellido" class="form-label col-md-3">Apellido</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" placeholder="Ingrese su Apellido">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="txtEmail" class="form-label col-md-3">Email</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="email" placeholder="Ingrese su Email">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="txtTelefono" class="form-label col-md-3">Telefono</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="number" placeholder="Ingrese su Telefono">
                  </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="listRolid">Rol</label>
                    <select class="form-control" id="listRolid" name="listRolid">
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="listStatus">Status</label>
                    <select class="form-control" id="listStatus" name="listStatus">
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                    </select>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="txtPassword">Password</label>
                        <input type="password" class="form-control" id="txtPassword" name="txtPassword">
                    </div>
                  </div>
                  <div class="tile-footer">
                  <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;

                  <button class="btn btn-danger" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cerrar</button>

                  
                </div>
                </div>
              </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade modalPermisos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Permisos Roles de Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Responsive Table</h3>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Modulo</th>
                    <th>Leer</th>
                    <th>Escribir</th>
                    <th>Actualizar</th>
                    <th>Elminar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Usuario</td>
                      <td><div>
                          <input type="checkbox" checked data-toggle="toggle">
                        </div>
                      </td>
                      <td><div class="toggle-flip">
                          <label>
                            <input type="checkbox"><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                          </label>
                        </div></td>
                      <td><div class="toggle-flip">
                          <label>
                            <input type="checkbox"><span class="flip-indicator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                          </label>
                        </div></td>
                      <td><div class="toggle-flip">
                          <label>
                            <input type="checkbox"><span class="flip-indicator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                          </label>
                        </div></td>
                      <td><div class="toggle-flip">
                          <label>
                            <input type="checkbox"><span class="flip-indicator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                          </label>
                        </div></td>
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

