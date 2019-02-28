<html> 
   <head>   
       <title>Halaman Administrator</title>   
       <style type="text/css">   
       .inner {   
           margin: 200px auto;   
           padding: 20px;   
           width: 400px;   
           border: 1px solid #333;   
           }
       *{
           box-sizing: border-box;
        }
        body{
            font-family: sans-serif;
            background-image:url("Wallpaper1.jpg");
        }
        .form_login{
            padding: 20px;
            font-size: 15px;
            width: 100%;
            height: 30px;
            border: 1px solid grey;
            border-radius: 10px;
        }
        .tombol_login{
            float: right;
            background: #FEA735; color: #fff;
            padding:10px;
            border:1px solid #FEA735;
            border-radius: 10px;
            font-weight: bolder; letter-spacing: 1px;
        }
       </style> 
    </head> 
    <body> 
       <?php 
          ini_set('display_errors', 1); 
          define('_VALID', 1); 
          // include file eksternal 
          require_once('./tugaspraktikum.php'); 
          init_login(); 
          validate(); 
       ?> 
       <h3>Simulasi Halaman Admin</h3> 
       <p> 
          <a href="?m=logout">Logout</a> 
       <p> 
       Menu-menu admin ada di sini 
    </body>
</html>