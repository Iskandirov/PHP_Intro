<!-- <script> -->
<?php 
    $(function(){
        $("#i_file".change( function() {
            $im = file_get_contents(this.value);
            console.log($im);
            $imdata = base64_encode($im);  
            console.log($imdata);   
            $("#img").attr('src',$imdata);
        }))
    });
?>
<!-- </script> -->