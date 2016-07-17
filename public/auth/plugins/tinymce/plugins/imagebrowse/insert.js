var ImageBrowse = {
	InsertSuccess : function(result) {
		parent.tinymce.EditorManager.activeEditor.insertContent('<img src="' + result.code +'" width="500">');
	}
};