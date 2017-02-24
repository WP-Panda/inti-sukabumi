// "myAwesomeDropzone" is the camelized version of the HTML element's ID
Dropzone.options.myAwesomeDropzone = {
  url : '/myadmin/gallery/new',
  method: 'post',
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 2, // MB
  acceptedFiles: 'image/*',
  renameFilename 	: true,
  autoProcessQueue : true,
  accept: function(file, done) {
    console.log('Logging');
    done();
  }
};
