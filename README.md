Hey Chris,

The index.php file simply contains the basic html form. Of note is the "enctype='multipart/form-data'" which is necessary when doing file uploads.

For the processing file (upload_file.php) I cleaned it up to hopefully make it a bit more readable for you and got it working for me here locally.

If you have problems with it, you might want to check the permissions on the directory you're trying to upload to.