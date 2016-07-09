var ImageUpload = {
	inProgress : function() {
		document.getElementById("upload_form").innerHTML = '<br><p>上傳圖片中...</p>';
	},
	uploadSuccess : function(result) {
		document.getElementById("image_preview").style.display = 'block';
		document.getElementById("upload_form").innerHTML = '<br><p>上傳成功</p>';
		parent.tinymce.EditorManager.activeEditor.insertContent('<img src="' + result.code +'">');
	},
	addImage : function(result) {
	document.getElementById("upload_form").innerHTML = '<br><p>插入成功</p>';
	parent.tinymce.EditorManager.activeEditor.insertContent('<img src="' + result.code +'">');
	}

};