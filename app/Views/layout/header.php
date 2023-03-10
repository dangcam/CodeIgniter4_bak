<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>QL -  <?=lang('site')?></title>


	<link rel="shortcut icon" href="<?= base_url() ?>public/images/icon.ico"/>
	<!-- Prevent the demo from appearing in search engines -->
	<meta name="robots" content="noindex">

	<!-- App CSS -->
	<link type="text/css" href="<?= base_url() ?>public/css/app.css" rel="stylesheet">
	<link type="text/css" href="<?= base_url() ?>public/css/app.rtl.css" rel="stylesheet">

	<!-- Simplebar -->
	<link type="text/css" href="<?= base_url() ?>public/vendor/simplebar.css" rel="stylesheet">




</head>
<body>

<!-- MDK -->
<div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-responsive-width="992px" data-has-scrolling-region>


	<!-- drawer -->
	<div class="mdk-drawer js-mdk-drawer" id="default-drawer">
		<div class="mdk-drawer__content">
			<div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">

				<nav class="drawer  drawer--dark">
					<div class="drawer-spacer">
						<div class="media align-items-center">
							<a href="<?= base_url() ?>" class="drawer-brand-circle mr-2">C</a>
							<div class="media-body">
								<a href="<?= base_url() ?>" class="h5 m-0 text-link"><?=lang('site')?></a>
							</div>
						</div>
					</div>
					<!-- HEADING -->
					<div class="py-2 drawer-heading">
						Dashboards
					</div>
					<!-- MENU -->
					<ul class="drawer-menu" id="dasboardMenu" data-children=".drawer-submenu">
						<li class="mm_dashboard drawer-menu-item ">
							<a href="<?= base_url() ?>">
								<i class="material-icons">dashboard</i>
								<span class="drawer-menu-text"> <?=lang('dashboard')?></span>
							</a>
						</li>
						<?php //if($this->dc_utils->checkFuntion($this->listFunctions, 'import', 'view')): ?>
						<li class="mm_import drawer-menu-item">
							<a href="<?= base_url() ?>import">
								<i class="material-icons">view_compact</i>
								<span class="drawer-menu-text"> <?=lang('goods_receipt')?></span>
							</a>
						</li>
						<?php// endif;?>
						<?php //if($this->dc_utils->checkFuntion($this->listFunctions, 'export', 'view')): ?>
						<li class="mm_export drawer-menu-item">
							<a href="<?= base_url() ?>export">
								<i class="material-icons">view_module</i>
								<span class="drawer-menu-text"> <?=lang('goods_issue')?></span>
							</a>
						</li>
						<?php //endif;?>
						<?php //if($this->dc_utils->checkFuntion($this->listFunctions, 'inventory', 'view')): ?>
						<li class="mm_inventory   drawer-menu-item">
							<a href="<?= base_url() ?>inventory">
								<i class="material-icons">filter_vintage</i>
								<span class="drawer-menu-text"> <?=lang('inventory_handling')?></span>
							</a>
						</li>
						<?php //endif;?>
						<li class="drawer-menu-item drawer-submenu">
							<a id="report" data-toggle="collapse" data-parent="#dasboardMenu" href="#" data-target="#ReportMenu" aria-controls="ReportMenu" aria-expanded="false" class="collapsed">
								<i class="material-icons">insert_chart</i>
								<span class="drawer-menu-text"> <?=lang('report')?></span>
							</a>
							<ul class="ul_report collapse" id="ReportMenu">
								<?php //if($this->dc_utils->checkFuntion($this->listFunctions, 'report', 'view')): ?>
								<li class="report_index drawer-menu-item "><a href="<?= base_url()?>report"><?=lang('inventory_report')?></a></li>
								<?php //endif;?>
							</ul>

						</li>
					</ul>

					<!-- HEADING -->
					<div class="py-2 drawer-heading">
						Components
					</div>

					<!-- MENU -->
					<ul class="drawer-menu" id="mainMenu" data-children=".drawer-submenu">
						<li class="drawer-menu-item drawer-submenu">
							<a id="user" data-toggle="collapse" data-parent="#mainMenu" href="#" data-target="#uiComponentsMenu" aria-controls="uiComponentsMenu" aria-expanded="false" class="collapsed">
								<i class="material-icons">people</i>
								<span class="drawer-menu-text"><?=lang('user')?></span>
							</a>
							<ul class="ul_user collapse" id="uiComponentsMenu">
								<?php //if($this->dc_utils->checkFuntion($this->listFunctions, 'users', 'view')): ?>
								<li class="user_index drawer-menu-item"><a href="<?= base_url() ?>user"><?=lang('list_users')?></a></li>
								<?php //endif?>
								<?php //if($this->dc_utils->checkFuntion($this->listFunctions, 'users', 'add')): ?>
								<li class="user_create_user drawer-menu-item"><a href="<?= base_url() ?>user/create_user"><?=lang('add_user')?></a></li>
								<?php //endif?>
							</ul>
						</li><li class="drawer-menu-item drawer-submenu">
							<a id="category" data-toggle="collapse" data-parent="#mainMenu" href="#" data-target="#categoryMenu" aria-controls="categoryMenu" aria-expanded="false" class="collapsed">
								<i class="material-icons">list</i>
								<span class="drawer-menu-text"><?=lang('category')?></span>
							</a>
							<ul class="ul_category collapse" id="categoryMenu">
								<?php //if($this->dc_utils->checkFuntion($this->listFunctions, 'source', 'view')): ?>
									<li class="category_source drawer-menu-item "><a href="<?=base_url()?>category/source"><?=lang('source')?></a></li>
								<?php //endif?>
								<?php //if($this->dc_utils->checkFuntion($this->listFunctions, 'packing', 'view')): ?>
									<li class="category_packing drawer-menu-item "><a href="<?=base_url()?>category/packing"><?=lang('packing')?></a></li>
								<?php //endif?>
								<?php //if($this->dc_utils->checkFuntion($this->listFunctions, 'type_rubber', 'view')): ?>
									<li class="category_type_rubber drawer-menu-item "><a href="<?=base_url()?>category/type_rubber"><?=lang('type_rubber')?></a></li>
								<?php //endif?>
							</ul>
						</li>

						<li class="drawer-menu-item drawer-submenu">
							<a id="settings" data-toggle="collapse" data-parent="#mainMenu" href="#" data-target="#formsMenu" aria-controls="formsMenu" aria-expanded="false" class="collapsed">
								<i class="material-icons">settings</i>
								<span class="drawer-menu-text"><?=lang('settings')?></span>
							</a>
							<ul class="ul_settings collapse" id="formsMenu">
								<?php //if($this->dc_utils->checkFuntion($this->listFunctions, 'groups', 'view')): ?>
								<li class="settings_group_management drawer-menu-item "><a href="<?=base_url()?>settings/group_management"><?=lang('group_management')?></a></li>
								<?php //endif?>
								<?php //if($this->dc_utils->checkFuntion($this->listFunctions, 'functions', 'view')): ?>
								<li class="settings_functions drawer-menu-item "><a href="<?=base_url()?>settings/functions"><?=lang('function_management')?></a></li>
								<?php //endif?>
							</ul>
						</li>
					</ul>
					<div class="py-2 drawer-heading">
						<?php//echo $this->session->userdata('username')//?>
					</div>
					<ul class="drawer-menu" id="mainMenu" data-children=".drawer-submenu">
						<li class="user_account drawer-menu-item">
							<a href="<?= base_url() ?>user/account/<?php //echo $this->session->userdata('username')?>">
								<i class="material-icons">account_circle</i>
								<span class="drawer-menu-text"><?=lang('account')?></span>
							</a>
						</li>
						<li class="drawer-menu-item">
							<a href="<?= base_url() ?>logout">
								<i class="material-icons">exit_to_app</i>
								<span class="drawer-menu-text"><?=lang('logout')?></span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<!-- // END drawer -->


	<div class="mdk-drawer-layout__content">
		<!-- header-layout -->
		<div class="mdk-header-layout js-mdk-header-layout  mdk-header--fixed  mdk-header-layout__content--scrollable">
			<!-- header -->
			<div class="mdk-header js-mdk-header bg-primary" data-fixed>
				<div class="mdk-header__content">

					<nav class="navbar navbar-expand-md navbar-dark bg-primary d-flex-none">
						<button class="btn btn-link text-white pl-0" type="button" data-toggle="sidebar">
							<i class="material-icons align-middle md-36">short_text</i>
						</button>
						<div class="page-title m-0"><?php //echo $page_title ?></div>

						<div class="collapse navbar-collapse" id="mainNavbar">
							<ul class="navbar-nav ml-auto align-items-center">
								<li class="nav-item dropdown nav-language d-flex align-items-center">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<?php //=$this->session->userdata('site_lang')=='vietnamese'?'VN':'EN'?>
									</a>
									<div class="dropdown-menu dropdown-menu-right ">
										<ul class="list-unstyled">
											<li>
												<a href="<?= base_url()?>dashboard/language/english"
												   class="dropdown-item <?php //echo$this->session->userdata('site_lang')=='english'?'active':''?>">
													<img src="<?= base_url()?>public/images/GB-United-Kingdom-Flag-icon.png" style="width: 25px; vertical-align: middle" alt="English"> English
												</a>
											</li>
											<li>
												<a href="<?= base_url() ?>dashboard/language/vietnamese"
												   class="dropdown-item <?php //$this->session->userdata('site_lang')=='vietnamese'?'active':''?> ">
													<img src="<?= base_url()?>public/images/VN-Vietnam-Flag-icon.png" style="width: 25px; vertical-align: middle" alt="Vietnamese"> Vietnamese
												</a>
											</li>
										</ul>
									</div>
								</li>

								<li class="nav-item nav-divider">
								<li class="nav-item">
									<a href="#" class="nav-link dropdown-toggle dropdown-clear-caret" data-toggle="sidebar" data-target="#user-drawer">
										<?php //$this->session->userdata('username')?>
									</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>

			<!-- content -->
			<div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
				<!-- main content -->
				<div class="container-fluid">
					<?php //if ($message) { ?>
					<div class="alert alert-primary alert-dismissable fade show" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						<?php //$message; ?>
					</div>
					<?php //} ?>
					<?php //if ($error) { ?>
						<div class="alert alert-danger alert-dismissable fade show" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							<?php//= $error; ?>
						</div>
					<?php //} ?>
