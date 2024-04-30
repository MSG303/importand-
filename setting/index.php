<?php
include '../chatId.php';
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel AkangWeb</title>
  <link rel='stylesheet' href='https://cdn.rawgit.com/JacobLett/bootstrap4-latest/504729ba/bootstrap-4-latest.min.css'><link rel="stylesheet" href="./style.css">
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        }

        html,body{
        height: 100%;
        }

        body{
        display: grid;
        place-items: center;
        text-align: center;
        background: linear-gradient(-45deg, #F0F8FF, #F0F8FF, #F0F8FF, #F0F8FF);
        background-size: 400% 400%;
        animation: gradient 20s ease infinite;
        }
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
</style>

</head>
<body>
<div class="container" style="height:100vh;display:flex;align-items: center;justify-content: center;">

  <form class="container" id="needs-validation" onsubmit="return false">
    <div class="add">
      <div class="form-group">
      <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgw8wodWGHL-e22XzKzXl9mdhHpBO-C7yoqneglDK_FNzcqoLtVcptsOx85to2zJjgBtlGyq48TEpitA5zW4H1_Cj5B5EyLrakzld50GCUws4kbO9cpyOZLuFAshRohCCbDmmLNR3eRQyScGQB-s7VbhQ2GM6byv_tHGA_kDERZj1V7EzZ8M69f4EOQvSI/s1920/1.png" width="100%" height="100%">
      </div>

      <div class="jumbotron p-2">
      <nav class="navbar navbar-light bg-dark text-white p-0 pl-2 rounded">
        <a class="navbar-brand text-white" href="#">
          SETTING EMAIL BY AkangWeb 
        </a>
      </nav>
        <label class="mt-3" for="exampleInputEmail1">Bot Token Telegram</label>
        <input type="email" class="form-control" value="<?= $botToken; ?>" readonly>
        <label class="mt-2" for="exampleInputEmail1">Chat ID Telegram</label>
        <input type="email" class="form-control" value="<?= $chatID; ?>" readonly>

        <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#gantidata">Ganti Data</button>
      </div>




      


<div class="modal fade" id="gantidata" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">SETTING DATA</h5>
      </div>
      <div class="modal-body">
      <div class="form-group">
      <label for="exampleInputEmail1">Bot Telegram <br><small style="color: red;">Contoh: 5649865301:AAEtftEhsfXjV5qB1240X1b15hFvNfwD48E</small></label>
        <input type="text" id="valNama" class="form-control" value="<?= $botToken; ?>">
        <label class="mt-2" for="exampleInputEmail1">Chat ID <br><small style="color: red;">Contoh: 897126762</small></label>
        <input type="email" id="valMailzz" class="form-control" value="<?= $chatID; ?>">
      </div>

      </div>
      <div class="modal-footer d-flex justify-content-start">
        <button type="button" id="gantis" class="btn btn-success">Ganti</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>





  
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src='https://cdn.rawgit.com/JacobLett/bootstrap4-latest/504729ba/bootstrap-4-latest.min.js'></script><script  src="./script.js"></script>
<script>

  $('#gantis').click(function(){
  const nama = $('#valNama').val();
  const mailzz = $('#valMailzz').val();
  $(this).css('pointerEvents','none').css('opacity','0.5').css('cursor','no-drop');
  $.get('ganti.php?nama='+nama+'&mailzz='+mailzz,function(done){
    if(done == 200)
    {
      setTimeout(() => {
        $('#gantis').css('pointerEvents','unset').css('opacity','1').css('cursor','pointer');
        location.reload()
      },2000)
    }
  })
})
</script>

</body>
</html>