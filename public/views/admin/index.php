<!DOCTYPE html>
<html lang="es">
  <head>
	<title>Title</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="{descripcion}">
	<!-- Style-->
	<link href="<?php echo TEMPLATE_URL; ?>/admin/css/main.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo TEMPLATE_URL; ?>/admin/img/favicon.png" rel="shortcut icon">
	<!-- Scripts-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="<?php echo TEMPLATE_URL; ?>/admin/js/main.js"></script>
	<!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
  </head>
  <body>
	<header>
	  <div class="header-top">
		<div class="header-inner">
		  <div class="header-logo"><a href="http://localhost/lrp-mama-de-piel/public/admin">Title</a></div>
		  <div class="header-nav">
              <nav>
                <ul>
                  <li><a href="<?php echo SITE_URL ?>/admin">Inicio</a></li>
                  <li><a target="_blank" href="<?php echo TEMPLATE_URL ?>/admin/excel/contact.xls">Exportar excel</a></li>
                  <li><a target="_blank" href="<?php echo SITE_URL ?>">Ir al Sitio</a></li>
                </ul>
              </nav>
            </div>
		</div>
	  </div>
	  <div class="header-menu-button secretmenu-button"></div>
	  <div class="header-menu secretmenu">
		<div class="header-menu-back"></div>
		<div class="header-menu-inner secretmenu-translate">
		  <div class="header-menu-content">
			<div data-copy=".header-nav" class="secretmenu-lvl"></div>
		  </div>
		</div>
	  </div>
	</header>
	<div id="body">
	  <div class="body-content">
		<div class="page">
		  <section>
			<div class="inner inner-2">
			  <div class="content">
				<h2>Listado de Contactos</h2>
				<div class="cols">
				  <div class="col col-100">
					<div class="col-inner">
					  <div class="inner lighter">
						<section class="lighter">
						  <div class="limit">
							<div class="inner inner-1">
								<?php //include 'pagination.php'; ?>
							</div>
						  </div>
							<div class="inner inner-2">
							  <div class="content">
								<div class="table-container">
								  <table>
									<tr>
									  <th class="center">xxxxx</th>
									  <th class="center">xxxxx</th>
									  <th class="center">xxxxx</th>
									  <th class="center">xxxxx</th>
									  <th class="center">xxxxx</th>
									  <th class="center">xxxxx</th>
									  <th class="center">xxxxx</th>
									  <th class="center">xxxxx</th>
									  <th class="center">xxxxx</th>
									  <th class="center">xxxxx</th>
									  <th class="center">Acciones</th>
									</tr>
									<!--<?php foreach ($all_data as $key => $data) {?>
										<tr>
											<td><?php echo $data['first_name']; ?> <?php echo $data['last_name']; ?></td>
											<td><?php echo $data['email']; ?></td>
											<td><?php echo $data['city']; ?></td>
											<td class="center"><?php echo ($data['info']==1) ? 'Aceptó' : 'No Aceptó'; ?></td>
											<td class="center"><?php echo ($data['terms']==1) ? 'Aceptó' : 'No Aceptó'; ?></td>
											<td class="center"><?php echo ($data['privacy']==1) ? 'Aceptó' : 'No Aceptó'; ?></td>
											<td class="center"><?php echo $data['single']; ?></td>
											<td class="center"><?php echo ($data['tw']==1) ? 'Compartió' : 'No Compartió'; ?></td>
											<td class="center"><?php echo ($data['fb']==1) ? 'Compartió' : 'No Compartió'; ?></td>
											<td class="center"><?php echo date('d-m-Y h:i:s',$data['created_at']); ?></td>
											<td class="center">
												<a href="<?php echo SITE_URL; ?>/admin/delete/<?php echo $data['id']; ?>" data-alert="Eliminar el elemento <?php echo $data['id']; ?>" data-content="¿Seguro que quieres hacer esto?" class="button button-small button-danger">Borrar</a>
											</td>

										</tr>
									<?php }?>-->
								  </table>
								</div>
							  </div>
							</div>
							<div class="inner inner-2">
								<?php //include 'pagination.php'; ?>
							</div>

						</section>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </section>
		</div>
	  </div>
	  <!--footer-->
	  
	  
	  
	  
	  
	</div>
  </body>
</html>