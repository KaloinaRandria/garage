<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
	<div class="app-brand demo">
		<a href="" class="app-brand-link">
			<span class="app-brand-text demo menu-text fw-bolder ms-2">Car garage</span>
		</a>

		<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
			<i class="bx bx-chevron-left bx-sm align-middle"></i>
		</a>
	</div>

	<div class="menu-inner-shadow"></div>

	<ul class="menu-inner py-1">
		<!-- Dashboard -->
		<li class="menu-item">
			<a href="<?=base_url()?>Service/" class="menu-link">
				<i class="menu-icon tf-icons bx bx-home-circle"></i>
				<div data-i18n="Analytics">Service</div>
			</a>
		</li>
		<li class="menu-item">
			<a href="<?=base_url()?>Reservation/devis" class="menu-link">
				<i class="menu-icon tf-icons bx bx-home-circle"></i>
				<div data-i18n="Analytics">Devis</div>
			</a>
		</li>
		<li class="menu-item">
			<a href="" class="menu-link">
				<i class="menu-icon tf-icons bx bx-home-circle"></i>
				<div data-i18n="Analytics">Dashboard</div>
			</a>
		</li>
		<li class="menu-item">
			<a href="" class="menu-link">
				<i class="menu-icon tf-icons bx bx-home-circle"></i>
				<div data-i18n="Analytics">Liste reservation</div>
			</a>
		</li>
		<li class="menu-item">
			<a href="<?=base_url()?>SuppData/supprimerDatabase" onclick="return confirm('Voulez vous confirmer la suppression')" class="menu-link">
				<div data-i18n="Analytics">Supprimer les donnees</div>
			</a>
		</li>
	</ul>
</aside>
<!-- / Menu -->


