<?php

  include_once 'assets/header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <title>Administration</title>
</head>
<style>
  .header{
    min-height: 65vh;
    background-color: #f8ceec;
    background-image: linear-gradient(315deg, #f8ceec 0%, #a88beb 74%);
  }
  body {
  margin: 0;
  padding: 0;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

p {
  position: relative;
  font-family: sans-serif;
  text-transform: uppercase;
  font-size: 2em;
  letter-spacing: 4px;
  overflow: hidden;
  background: linear-gradient(90deg, #000, #fff, #000);
  background-repeat: no-repeat;
  background-size: 80%;
  animation: animate 3s linear infinite;
  -webkit-background-clip: text;
  -webkit-text-fill-color: rgba(255, 255, 255, 0);
  display: flex;
  justify-content: center;
  align-items: center;
  padding-top: 100px;
}

@keyframes animate {
  0% {
    background-position: -500%;
  }
  100% {
    background-position: 500%;
  }
}
.button{
      display: flex;
      justify-content: center;
      align-items: center;
      padding-top: 100px;
      font-family: 'Architects Daughter', cursive;
}


</style>
<body>
    <header class="header">
      <p>Welcome Admin</p>
      <div class="button">
        <button type="button" class="btn btn-primary btn-lg"><h3>Start Auction</h3></button>
      </div>
      
    </header>
</body>
</html>
<?php

  include_once 'assets/footer.php';

?>