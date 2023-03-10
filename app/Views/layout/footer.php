

<!-- drawer -->
<div class="mdk-drawer js-mdk-drawer" id="user-drawer" data-position="right" data-align="end">
	<div class="mdk-drawer__content">
		<div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">
			<nav class="drawer drawer--light">
				<div class="drawer-spacer drawer-spacer-border">
					<div class="media align-items-center">
						<div class="media-body">
							<a href="#" class="h5 m-0"><?php echo lang('hi'); echo ", ";
							echo "admin"?></a>
							<div>Account Manager</div>
						</div>
					</div>
				</div>

				<!-- MENU -->
				<ul class="drawer-menu" id="userMenu" data-children=".drawer-submenu">
					<li class="drawer-menu-item">
						<a href="<?= base_url() ?>user/account/<?php//=$this->session->userdata('username')?>">
							<i class="material-icons">account_circle</i>
							<span class="drawer-menu-text"> <?php//=lang('account')?></span>
						</a>
					</li>
					<li class="drawer-menu-item">
						<a href="<?= base_url() ?>user/account/<?php//=$this->session->userdata('username')?>#change_password">
							<i class="material-icons">lock</i>
							<span class="drawer-menu-text"> <?=lang('change_password')?></span>
						</a>
					</li>
					<li class="drawer-menu-item">
						<a href="<?= base_url() ?>logout">
							<i class="material-icons">exit_to_app</i>
							<span class="drawer-menu-text"> <?php//=lang('logout')?></span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<!-- // END drawer -->

</div>
<!-- // END drawer-layout -->

<script>
	(function() {
		'use strict';
		// Self Initialize DOM Factory Components
		domFactory.handler.autoInit()
		// Connect button(s) to drawer(s)
		var sidebarToggle = document.querySelectorAll('[data-toggle="sidebar"]')

		sidebarToggle.forEach(function(toggle) {
			toggle.addEventListener('click', function(e) {
				var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
				var drawer = document.querySelector(selector)
				if (drawer) {
					if (selector == '#default-drawer') {
						$('.container-fluid').toggleClass('container--max');
					}
					drawer.mdkDrawer.toggle();
				}
			})
		});
		$('.mm_<?php//=$m?>').addClass('active');
		$('.ul_<?php//=$m?>').addClass('show');
		$('.<?php//=$m?>_<?php//=$v?>').addClass('active');
		$('#<?php//=$m?>').removeClass('collapsed');
		$('#<?php//=$m?>').attr('aria-expanded',true);
		//alert('<?php//=$m?>_<?php//=$v?>');
	})()
</script>


</body>

</html>
