<?php
session_start();
if(isset($_SESSION["userName"]) && isset($_SESSION["Id"])){

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ChatRoom</title>
  <style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: system-ui;
}
body{
  display: grid;
  place-content: center;
  min-height: 100vh;
  background-color:#f75d52;
}
h1{
  color: white;
  font-family: cursive;
  text-align: center;
  font-size: 3rem;
}
.chat{
  background-color: #fff;
  padding: 2rem;
  border-radius: 10px;
}
.chat h2{
  font-size: 2rem;
  font-family: sans-serif;
  text-align: center;
}
.msg{
  width: 420px;
  height: 480px;
  border-top: 1px solid lightgray;
  border-bottom: 1px solid lightgray;
  margin: 1rem auto;
  padding: 1rem 0;
  display: flex;
  flex-direction: column;
  
  overflow-y: scroll;
  
}
::-webkit-scrollbar {
  width: 0px;
}
.input_msg{
  display: flex;
  justify-content: space-between;
}
input{
  width: 60%;
  font-size: 1.3rem;
  padding: 0.4rem 1.3rem;
  border-radius:10px;
}
.button-submit {
    margin: 20px 0 10px 0;
    background-color: #151717;
    border: none;
    color: white;
    font-size: 15px;
    font-weight: 500;
    border-radius: 10px;
    height: 50px;
    width: 25%;
    cursor: pointer;
  }
  
  .button-submit:hover {
    background-color: #70369d;
  }

.msg p{
  background-color: grey;
  padding: 0.4rem 1rem;
  width: fit-content;
  border-radius: 5px;
  margin-bottom: 1rem;
}
.msg p span{
  display: block;
  font-weight: bold;
  opacity: 0.5;
}
.msg .sender{
  background-color: rgb(89, 255, 90);
  align-self: end;
}
    </style>
</head>

<body>
  
  <div class="chat">
    <h2>Solve your question</h2>
    <div class="msg">
      


    </div>
    <div class="input_msg">
      <input type="text"  placeholder="Ponder the question" id="input_msg">
      <button  class="button-submit" onclick="update()">Send</button>
    </div>
  </div>
</body>
<script src="js/script.js"></script>

</html>

<?php
}else{

  header("location: login.php");


}
?>

knowledge is having the right answer. Intelligence is asking the right question