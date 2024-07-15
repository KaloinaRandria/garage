<?php $this->load->view('includes/header'); ?>
<div class="container">
	<div class="row">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title text-center">Update User</h5>
				<form method="post" action="<?= base_url() ?>user/edit/<?=$id?>">
					<div class="mb-3">
						<label for="username" class="form-label">Username</label>
						<input type="text" name="username" value="<?=$user->username?>" class="form-control" id="username">
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email address</label>
						<input type="email" name="email" class="form-control" value="<?=$user->email?>" id="email" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
						<label for="mobile" class="form-label">Mobile</label>
						<input type="text" name="mobile" maxlength="10" value="<?=$user->mobile?>" class="form-control" id="mobile">
					</div>
					<div class="mb-3">
						<label for="address" class="form-label">Address</label>
						<input type="text" name="address" value="<?=$user->address?>" class="form-control" id="address">
					</div>

					<button type="submit" class="btn btn-primary">Update</button>
				</form>
				<div class="mb-3">
					<?php if($this->session->flashdata('success')) { ?>
					<div class="alert alert-success mt-3" role="alert">
						Successfully Updated 
					</div>
					<?php } ?>

					<?php if($this->session->flashdata('error')) { ?>
					<div class="alert alert-danger mt-3" role="alert">
						Failed !
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('includes/footer'); ?>
