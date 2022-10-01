<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<input type="file" id="img">
<input type="button" id="sub" value="submit">


    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
    
       
$("#sub").on("click",function(e){

                        e.preventDefault();
                        var file_data = $('#img').prop('files')[0];
                        var form_data = new FormData();
                        form_data.append('file', file_data);


                $.ajax({
                        xhr: function() {
                            var xhr = new window.XMLHttpRequest();

                            xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                console.log(percentComplete);

                                if (percentComplete === 100) {

                                }

                            }
                            }, false);

                            return xhr;
                        },
                        url: "../uploadimage.php",
                        type: "POST",
                        data: form_data,
                        processData: false,
  contentType: false,
                        dataType: "json",
                        success: function(result) {
                            console.log(result);
                        }
                });
            
     });
    
    </script>
</body>
</html>