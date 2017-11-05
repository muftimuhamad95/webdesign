<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Simple Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jquery-3.2.1.js"></script>

    <script  >

        $(document).ready(function() {
          $("#merah").click(function(){
            $("#color-change").css({"background-color":"red"});
          });

          $("#kuning").click(function(){
            $("#color-change").css({"background-color":"yellow"});
          });

          $("#hijau").click(function(){
            $("#color-change").css({"background-color":"green"});
          });


        });
    </script>
  </head>
  <body>

    <nav style="background-color: rgb(94, 96, 94);">
      <div class="">
        <a href="#" class="menu" id="merah">Merah</a>
        <a href="#" class="menu" id="kuning">Kuning</a>
        <a href="#" class="menu" id="hijau">Hijau</a>
      </div>
    </nav>

    <header style="background-color: rgb(245, 148, 21); color: white;">
      <h1 style=""> Simple Design With CSS3</h1>
    </header>



    <main>

    </main>

    <aside class="">
      <div id="background-color" style="background-color: rgb(238, 238, 238);">
          <div id="color-change">
            <p>Warna</p>
          </div>
      </div>

    </aside>

    <footer style="background-color: rgb(94, 96, 94); color: white;">Copyrigth Mufti</footer>
  </body>
</html>
