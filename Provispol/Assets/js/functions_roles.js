var tableRoles;

document.addEventListener('DOMContentLoaded', function(){
    tableRoles = $('#tableRoles').dataTable({
		"aProcessing":true, 
		"aServerSide":true,
        "language": {
        	"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Roles/getRoles",
            
            "dataSrc":""
        },
        "columns":[
            {"data":"idrol"},
            {"data":"nombrerol"},
            {"data":"descripcion"},
            {"data":"status"},
            {"data":"options"}
        ],
        "responsive":true,
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]]  
    });

    var formRol = document.querySelector("#formRol");

    formRol.onsubmit = function(e) {
        e.preventDefault();
        
        var intIdRol = document.querySelector("#idRol").value;
        var strNombre = document.querySelector("#txtNombre").value;
        var strDescripcion = document.querySelector("#txtDescripcion").value;
        var intStatus = document.querySelector("#listStatus").value;

        if (strNombre === '' || strDescripcion === '' || intStatus === '') {
            
            Swal.fire("Atención", "Todos los campos son obligatorios." , "error");
            return false;
        }
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url+'/Roles/setRol'; 
        var formData = new FormData(formRol);
        request.open("POST",ajaxUrl,true);
        request.send(formData);
        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200){
                var objData = JSON.parse(request.responseText);
                if(objData.status)
                {
                    $('#modalFormRol').modal("hide");
                    formRol.reset();
                    Swal.fire("Roles de usuario", objData.msg ,"success");
                    tableRoles.api().ajax.reload(function(){ 
                        fntEditRol();
                    });
                }else{
                    Swal.fire("Error", objData.msg , "error");
                }  
            }
        }
    }
});

$('#tableRoles').DataTable();

function openModal(){

    document.querySelector('#idRol').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML ="Nuevo Rol";
    document.querySelector("#formRol").reset();

    $('#modalFormRol').modal('show');
}

window.addEventListener('load',function(){
    fntEditRol();
    fntDelRol();
    fntPermisos();
}, false);

function fntEditRol(){
    var btnEditRol = document.querySelectorAll(".btnEditRol");
    btnEditRol.forEach(function(btnEditRol){
        btnEditRol.addEventListener('click',function(){

            document.querySelector('#titleModal').innerHTML ="Actualizar Rol";
            document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
            document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
            document.querySelector('#btnText').innerHTML ="Actualizar";

            var idrol = this.getAttribute("rl");
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url+'/Roles/getRol/'+idrol; 
            request.open("GET",ajaxUrl,true);
            request.send();

            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    
                    var objData = JSON.parse(request.responseText);

                    if(objData.status)
                    {
                        document.querySelector("#idRol").value = objData.data.idrol;
                        document.querySelector("#txtNombre").value = objData.data.nombrerol;
                        document.querySelector("#txtDescripcion").value = objData.data.descripcion;

                        if(objData.data.status == 1)
                        {
                            var optionSelect = '<option value="1" selected class="notBlock">Activo</option>';
                        }else{
                            var optionSelect = '<option value="2" selected class="notBlock">Inactivo</option>';
                        }
                        var htmlSelect = `${optionSelect}
                                          <option value="1">Activo</option>
                                          <option value="2">Inactivo</option>
                                        `;
                        document.querySelector("#listStatus").innerHTML = htmlSelect;
                        $('#modalFormRol').modal('show');
                    }else{
                        Swal.fire("Error", objData.msg , "error");
                    }
                }
            }
        });
    });
}


function fntDelRol() {
    var btnDelRol = document.querySelectorAll(".btnDelRol");
    btnDelRol.forEach(function (btnDelRol) {
        btnDelRol.addEventListener('click', function () {
            var idrol = this.getAttribute("rl");

            console.log('Botón de eliminación clicado. ID del rol:', idrol);

            Swal.fire({
                title: "Eliminar Rol",
                text: "¿Realmente quiere eliminar el Rol?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Si, eliminar!",
                cancelButtonText: "No, cancelar!",
                preConfirm: (isConfirmed) => {
                    return new Promise((resolve, reject) => {
                        if (isConfirmed) {
                            console.log('Usuario confirmó la eliminación. Enviando solicitud al servidor...');

                            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                            var ajaxUrl = base_url + '/Roles/delRol/';
                            var strData = "idrol=" + idrol;
                            request.open("POST", ajaxUrl, true);
                            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            request.send(strData);
                            request.onreadystatechange = function () {
                                if (request.readyState == 4 && request.status == 200) {
                                    var objData = JSON.parse(request.responseText);
                                    if (objData.status) {
                                        console.log('Eliminación exitosa. Recargando la tabla y realizando otras acciones...');

                                        Swal.fire("Eliminar!", objData.msg, "success");
                                        tableRoles.api().ajax.reload(function () {
                                            fntEditRol();
                                            fntDelRol();
                                            
                                        });
                                        resolve();
                                    } else {
                                        console.error('Error al eliminar el rol:', objData.msg);
                                        Swal.fire("Atención!", objData.msg, "error");
                                        reject('Error al eliminar el rol');
                                    }
                                }
                            }
                        } else {
                            console.log('Usuario canceló la eliminación.');
                            resolve();
                        }
                    });
                }
            });
        });
    });
}

function fntPermisos() {
    var btnPermisosRol = document.querySelectorAll(".btnPermisosRol");
    btnPermisosRol.forEach(function (btnPermisosRol) {
        btnPermisosRol.addEventListener('click', function(){

            var idrol = this.getAttribute("rl");
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
            var ajaxUrl = base_url+'/Permisos/getPermisosRol/'+idrol;
            request.open("GET", ajaxUrl , true);
            request.send();

            request.onreadystatechange = function(){
                if(request.status == 200){
                    console.log(request.responseText);
                    document.querySelector('#contentAjax').innerHTML = request.responseText;
                    $('.modalPermisos').modal('show');
                }
            }
        });
    });
}
