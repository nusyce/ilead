<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
	<!-- core:css -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?= base_url()?>assets/vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url()?>assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="<?= base_url()?>assets/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?= base_url()?>assets/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="" style="padding: 0">

        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-12" style="padding: 0">
                <div class="card">
                    <div class="row">
<div class="col-1"></div>
                        <div class="col-md-10 pl-md-0">
                            <div class="auth-form-wrapper px-4 py-5">
                                <a href="#" class="noble-ui-logo d-block mb-2">i<span>LEAD</span></a>
                                <h5 class="text-muted font-weight-normal mb-4">Register for <?= $pack ?> PLAN</h5>
                                <form class="forms-sample" method="post" action="<?= base_url('auth/register')?>">
                                    <div class="row">
                                        <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Name</label>
                                        <input name="name" type="text" class="form-control" id="exampleInputUsername1"
                                               autocomplete="name" placeholder="name">
                                    </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">LastName</label>
                                                <input name="lastname" type="text" class="form-control" id="exampleInputUsername1"
                                                       autocomplete="name" placeholder="lastname">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                               placeholder="Email">
                                    </div>
                                    </div>
                                        <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Whatsapp Phone</label>
                                        <input name="whatsapp" type="text" class="form-control" id="exampleInputEmail1"
                                               placeholder="Whatsapp Phone">
                                    </div>
                                        </div>
                                        <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Country</label>
                                        <select style="color: black"  id="monselect" name="country">
                                            <?php foreach(countries() as $country) { ?>
                                            <option value="<?=$country['id'] ?>"><?=$country['name'] ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                    </div>
                                        <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Cluster</label>
                                        <select style="color: black"  id="monselect" name="cluster">
                                            <?php foreach(clusters() as $cluster) { ?>
                                                <option  value="<?=$cluster['id'] ?>"><?=$cluster['name'] ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                        </div>
                                        <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sponsor KEY</label>
                                        <input name="sponsor" id="sponsor" type="text" class="form-control" id="exampleInputEmail1"
                                               placeholder="Sponsor KEY">
                                        <span style="color: #727cf5;" id ="sponsor_name"></span>
                                    </div>
                                    </div>
                                        <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                                placeholder="Password">
                                    </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Sexe</label>
                                                <select style="color: black"  id="monselect" name="sexe">

                                                        <option value="Masculin">Masculin</option>
                                                    <option value="Feminin">Feminin</option>


                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mt-3">
                                        <label class="checkbox">
                                            <input type="checkbox" class="">
                                            Remember me
                                        </label>
                                    </div>
                                    <div class="mt-3">
                                        <input style="    width: 150px;" class="btn btn-primary text-white mr-2 mb-2 mb-md-0" type="submit" value="Sing up">

                                    </div>

                                    <a href="<?= base_url('auth/login')?>" class="d-block mt-3 text-muted">Already a user? Sign in</a>
                                </form>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
            </div>
        </div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="<?= base_url()?>assets/vendors/core/core.js"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="<?= base_url()?>assets/vendors/feather-icons/feather.min.js"></script>
	<script src="<?= base_url()?>assets/js/template.js"></script>
    <script>
        $(document).ready(function(){
            $("#sponsor").change(function(){

                $.get('<?=base_url("auth/get_sponsor_name")?>',
                    {
                        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
                        cle: $(this).val(),

                    },
                    function (data) {
                        $("#sponsor_name").html(data);

                    });
            });
        });

        </script>
	<!-- endinject -->
  <!-- custom js for this page -->
	<!-- end custom js for this page -->
</body>
</html>