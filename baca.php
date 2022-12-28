<!doctype html>
<html lang="en">
  <head>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baca Quran</title>
   
    
  </head>
  <body class="scroll-behavior">
    <div>
       
        <div class="row">
           
            <div class="col-md-6">  
              <table class="table" >
               <style> .th {
                border: 1px solid black;
              }</style>
                <thead>
                  <tr style="background-color:#d6cca6;">
                    
                    <th width="310" style="text-align:center;" scope="col" id="surat"> Nama Surat</th>
                    
                  </tr>
                </thead>
             </table>
               
                <div id="show-data">
                  <!--kolom 1-->
                </div>
            </div>
               
            <div class="col-md-6">  
              <table class="table" >
               <style> .th {
                border: 1px solid black;
              }</style>
                <thead>
                  <tr style="background-color:#d6cca6;">
                    
                    <th style="text-align:center;width:500px" scope="col" id="surat"> ayat</th>

                  </tr>
                </thead>
             </table>
             <div id="show-ayah">
                   
                   </div>

            </div>
    </div>
    <script src="js/my.js"></script>
  </body>
</html>
