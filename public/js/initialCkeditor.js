function initialCkeditor(selector, path) {
    CKEDITOR.replace(selector, {
        filebrowserBrowseUrl: path + 'package/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: path + 'package/ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl: path + 'package/ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl: path + 'package/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: path + 'package/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: path + 'package/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    })
}
