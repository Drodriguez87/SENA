<!-- Modal -->
<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="tile">
            <div class="tile-body">
              <form id="formRol" name="formRol">
                <input type="hidden" id="idRol" name="idRol" value="">
                <div class="form-group">
                  <label class="control-label">Nombre</label>
                  <input class="form-control" id="txtNombre" name="txtNombre" type="text" placeholder="Nombre del rol" require>
                </div>
                <div class="form-group">
                  <label class="control-label">Descripción</label>
                  <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="2" placeholder="Descripción del rol"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleSelect1">Estado</label>
                    <select class="form-control" id="listStatus" name="listStatus" required="">
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                    </select>
                </div>
                <div class="tile-footer">
                  <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#" data-dismiss="modal" ><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                </div>
              </form>
            </div>
          </div>
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

