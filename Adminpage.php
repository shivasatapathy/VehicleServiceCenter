<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin page</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div>
  <div class="navbar navbar-dark bg-dark navbar-fixed-top na">
        <span>
          <center><h1>Welcome to the online vehicle service booking portal</h1></center>
        </span>
        <span>
          <a href="logout"><button>Logout</button></a>
        </span>
  </div>
  <div>
    <br><br><br><br><br><br>

  <form id="f">
    <center>Booking Id<input type="text" name="search" id="se" >
      
    </center>
  </form><br>

  <center>
    <button id="p">SHOW ALL</button>
  </center>

  <div id="d"></div></br>

  

  <script type="text/javascript">

    $(document).ready(function(){

      $("#p").click(function(){
        event.preventDefault();
        $.ajax({
          type:"post",
          url:"show.php",
          data:$('#f').serialize(),
          success: function(response){
            $("#d").html(response);
          }
        });
      });
    });
  </script>


  <script type="text/javascript">
    $(document).ready(function(){
      $('#se').keyup(function(){//#se is the input fiels's id
        event.preventDefault();
        $.ajax({
          type:"post",
          url:"check.php",
          data:$('#f').serialize(),//#f is the form fiels's id
          success: function(response){
            $("#d").html(response);//#se is the input fiels's id
          }
        });
      });
    });

  </script>
</div>
<br><br><br>
    <div class="footer navbar-dark bg-dark">
    <center><h3>All copyrights reserved</h3></center>
  </div>
</div>
</body>
</html>
