<?php require APPROOT . '/views/ini/header.php'; ?>
<style>
	.invalid-feedback{
		color: #ff0019;
		font-size: 0.75em; 
	}
</style>
<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
	<div class="relative py-3 sm:max-w-xl sm:mx-auto">

		<div class="absolute inset-0 bg-gradient-to-r from-green-700 to-green-300 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
		</div>
		<div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
			<div class="max-w-md mx-auto">
				<?php flash('register_success'); ?>

				<div class="flex  justify-between">
					<h1 class="text-5xl font-semibold  ">Login Account</h1>
					<img class=" max-w-6xl h-24" style=" margin-top: -3.75rem;" src="<?php echo URLROOT; ?>/img/logo2.png" alt="">
				</div>
				<div class="divide-y divide-gray-200">

					<form id="formregister" action="#" class="signin-form" action="<?php echo URLROOT; ?>/Users/login" method="POST">

						<div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
							
							<div class="form-group">
								<input id="email" name="email" type="email" class=" hover:border-green-600  h-10 w-full border-b-2 border-gray-300   " placeholder="Your Email" />
								<div id="erreuremail" class="invalid-feedback"></div>
							</div>
							<div class="form-group">
								<input id="password" name="password" type="password" class=" hover:border-green-600 h-10 w-full border-b-2 border-gray-300" placeholder="Password" />
								<div id="erreurpassword" class="invalid-feedback"></div>
							</div>
						
							<div class="relative flex justify-between  ">
								<button class="bg-green-600 text-white rounded-md px-2 py-1">Submit</button>
								<a href="<?php echo URLROOT; ?>/Users/register" class="italic hover:not-italic text-sm leading-10 text-emerald-800">Create an account</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<script defer src="<?php echo URLROOT; ?>/js/validationlogin.js"></script>
<?php require APPROOT . '/views/ini/footer.php'; ?>