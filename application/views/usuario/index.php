<button class="btn btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Nuevo Usuario</button>
<button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Refrescar</button>
<br />
<br />
<br />
<table style="font-size:11px" id="table" class="table table-hover table-condensed table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th style="font-size:11px">USUARIO</th>
                <th style="font-size:11px">ESTADO</th>
                <th style="font-size:11px">FECHA CREACION</th>
                <th style="font-size:11px">USUARIO CREACIÓN</th>
                <th style="width:140px; font-size:11px">ACCIÓN</th>
            </tr>
        </thead>
      
        <tbody>
        </tbody>
    </table>

    <button class="btn btn-danger" onclick="UsuariosEliminados()"><i class="glyphicon glyphicon-trash"></i> Usuarios Eliminados</button>


     <!-- Bootstrap modal Agregar - Actualizar -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Usuario</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Username</label>
                            <div class="col-md-9">
                                <input name="usuario" placeholder="Usuario" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">contraseña</label>
                            <div class="col-md-9">
                                <input name="contrasena" placeholder="Contraseña" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<!-- Bootstrap modal Eliminar -->
<div class="modal fade" id="modal_formDelete" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Usuario</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="formDelete" >
                    <input type="hidden" value="" name="idEliminar"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label text-danger">¿Estas seguro de Eliminar este usuario?</label>
                            <input name="usuarioEliminar" placeholder="Usuario" class="form-control" type="text" readonly="true">
                        </div>
                       
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->


<!-- Bootstrap modal Usuario Eliminados -->
<div class="modal fade" id="modal_form_usuarios_eliminados" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Usuario</h3>
            </div>
            <div class="modal-body ">
                <form action="#" id="form_usuarios_eliminados" >
                 <input type="hidden" value="" name="idUsuarioInactivo"/> 
                    <div class="">
                        <div class="">
                            <table style="font-size:11px" id="table_usuarios_eliminados" class="table table-hover table-condensed table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="font-size:11px">USUARIO</th>
                                        <th style="font-size:11px">ESTADO</th>
                                        <th style="width:40px; font-size:11px">ACCIÓN</th>
                                    </tr>
                                </thead>
                        
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->