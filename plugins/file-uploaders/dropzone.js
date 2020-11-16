

/********************************************
*               Multiple Files              *
********************************************/
Dropzone.options.dpzMultipleFiles = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 0.5, // MB
  clickable: true
}




/*****************************************************
*               Remove All Thumbnails                *
*****************************************************/
Dropzone.options.dpzRemoveAllThumb = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 1, // MB
  init: function () {

    // Using a closure.
    var _this = this;

    // Setup the observer for the button.
    $("#clear-dropzone").on("click", function () {
      // Using "_this" here, because "this" doesn't point to the dropzone anymore
      _this.removeAllFiles();
      // If you want to cancel uploads as well, you
      // could also call _this.removeAllFiles(true);
    });
  }
}
