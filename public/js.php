<?php

    $html= $_POST['html'];
    // $css= $_POST['css'];
    $js= $_POST['js'];

 $combine =
 '<!DOCTYPE html>
 <html lang="en">
 <head>
   
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
    

 </head>
 <body>'
 ."$html".
 '</body>

  <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/react/18.2.0/umd/react.production.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/18.2.0/umd/react-dom.production.min.js"></script> 
  <script type="text/javascript" "> '."$js".'</script>



 </html>'
;

echo $combine;
?>

