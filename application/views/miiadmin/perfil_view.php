
<div class="banner">
    <h2>
    <a href="index">Home</a>
    <i class="fa fa-angle-right"></i>
    <span>Dashboard</span>
    </h2>
</div>

    <div class=" profile">

		<div class="profile-bottom">
			<h3><i class="fa fa-user"></i>Perfil</h3>
			<div class="profile-bottom-top">
			<div class="col-md-4 profile-bottom-img">
				<img style="" width="100px" height="100px" src="<?=base_url();?>assets/img/avatar.png">
			</div>
			<div class="col-md-8 profile-text">
                            
                            <form  id="form_perfil">
				<table>
                                <tr>
				<td>Nombre: </td>
				<td> :</td>
                                <td><input id="nombre" type="text" value="{{ User.nombre}}" class="form-control"> </td>
				</tr>
                                
                                <tr>
				<td>Apellido paterno: </td>
				<td> :</td>
                                <td><input id="paterno" type="text" value="{{ User.paterno}}" class="form-control"> </td>
				</tr>
                                
                                <tr>
				<td>Apellido materno: </td>
				<td> :</td>
                                <td><input id="materno" type="text" value="{{ User.materno }}" class="form-control"> </td>
				</tr>
                                
				<tr>
				<td>Email/user</td>
				<td> :</td>
                                <td><input id="email" type="text" value="{{ User.email}}" class="form-control"> </td>
				</tr>
<!--                                
                                <tr>
                                    <td colspan="3">Cambiar contraseña:</td>
				</tr>
                                
                                <tr>
				<td>Contraseña actual </td>
				<td> :</td>
                                <td><input id="pass_actual" type="password" value="" class="form-control"> </td>
				</tr>
                                
                                <tr>
				<td>Nueva contraseña </td>
				<td> :</td>
                                <td><input id="pass_new" type="password" value="" class="form-control"> </td>
				</tr>
                                
                                <tr>
				<td>Confirma actual </td>
				<td> :</td>
                                <td><input id="pass_newc" type="password" value="" class="form-control"> </td>
				</tr>-->
                                
				</table>
                            </form>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="profile-bottom-bottom">
			<div class="col-md-4 profile-fo">
                            <a href="#" class="pro1" ng-click="guardarPerfil();"><i class="fa fa-user"></i>Guardar</a>
			</div>
			<div class="clearfix"></div>
			</div>
			 
			
		</div>
	</div>

