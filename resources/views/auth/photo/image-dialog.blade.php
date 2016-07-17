<html>
<head>
	<meta charset="UTF-8">
	<title>Image Upload Dialog</title>
	<link href="/auth/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/auth/css/core.css" rel="stylesheet" type="text/css">
	<link href="/auth/css/icons.css" rel="stylesheet" type="text/css">
	<link href="/auth/css/components.css" rel="stylesheet" type="text/css">
	<link href="/auth/css/pages.css" rel="stylesheet" type="text/css">
	<link href="/auth/css/menu.css" rel="stylesheet" type="text/css">
	<link href="/auth/css/responsive.css" rel="stylesheet" type="text/css">

</head>
<body>

<div class="content">
	<div class="container">
		<div class="row">
			<div class="card-box">
				<span>檔案最大上傳2MB</span>
				<div id="upload_form">
					<p>
						<!-- Change the url here to reflect your image handling controller -->
						{!! Form::open(array('url' => '/admin/upload', 'method' => 'POST', 'files' => true, 'target' => 'upload_target')) !!}
						{!! Form::file('file', array('accept'=>'image/*', 'onChange' => 'this.form.submit(); ImageUpload.inProgress();')) !!}
						{!! Form::close() !!}
					</p>
				</div>
				<div id="image_preview" style="display:none; font-style: helvetica, arial;">
					<iframe frameborder=0 scrolling="no" id="upload_target" name="upload_target" height=240 width="100%"></iframe>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script type="text/javascript" src="/auth/plugins/tinymce/plugins/imageupload/upload.js"></script>
	</div>
</div>
</body>
</html>

