<?php
session_start();
if (isset($_SESSION["userName"]) && isset($_SESSION["Id"])) {

  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatRoom</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: system-ui;
      }

      body {
        display: flex;
        flex-direction: row;

        align-items: center;

        justify-content: center;

        min-height: 100vh;
        background-color: #ffe4e1;

      }

      .chat {
        background-color: #fff;
        padding: 2rem;
        text-align: center;
        border-radius: 10px;
        margin: 1rem;
        /* Add margin for spacing */
      }

      .proverb {
        display: flex;
        flex-direction: column;
        text-align: center;
        justify-content: center;
        background-color: #ffe4e1;

        width: 25%;
        color: black;
        font-weight: bold;
        padding: 7rem;
        /* Adjusted padding */
        border-radius: 10px;
        margin-top: 1rem;
        /* Add margin for spacing */
      }

      .proverbb {
        /* Additional styles for the proverb text */
        font-size: 30px;
        font-style: italic;
        opacity: 0.8;
      }

      .msg {
        width: 420px;
        height: 480px;
        border-top: 1px solid lightgray;
        border-bottom: 1px solid lightgray;
        padding: 1rem 0;
        display: flex;
        flex-direction: column;
        overflow-y: scroll;
      }

      ::-webkit-scrollbar {
        width: 0px;
      }

      .input_msg {
        display: flex;
        justify-content: space-between;
      }

      input {
        width: 60%;
        font-size: 1.3rem;
        padding: 0.4rem 1.3rem;
        border-radius: 10px;
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

      .msg p {
        background-color: whitesmoke;
        padding: 0.4rem 1rem;
        width: fit-content;
        border-radius: 5px;
        margin-bottom: 1rem;
      }

      .msg p span {
        display: block;
        font-weight: bold;
        opacity: 0.5;
      }

      .msg .sender {
        background-color: black;
        color: whitesmoke;
        align-self: end;
      }

      .logout {
        display: flex;
        flex-direction: column;
        margin-top: -43%;

        padding: 30px 30px;
        width: 13%;
        text-align: center;

      }

      .logout>a:hover {
        border-radius: 10px;
        background-color: black;
        color: white;
        text-decoration: none;


      }
    </style>
  </head>

  <body>

    <div class="proverb">

      <div class="proverbb">

      </div>
    </div>



    <div class="chat">
      <h2>Solve your question</h2>
      <div class="msg">



      </div>
      <div class="input_msg">
        <input type="text" placeholder="Ponder the question" id="input_msg">
        <button class="button-submit" onclick="update()">Send</button>
      </div>
    </div>
    <div class="proverb">
      <div class="proverbb">
        Knowledge is having the right answer. <br>Intelligence is asking the right question
      </div>
    </div>
    <div class="logout">
      <a href="destroychatsession.php">
        Logout from Chatroom
      </a>
    </div>
  </body>
  <script src="js/script.js"></script>

  </html>

  <?php

} else {

  header("location: login.php");


}
?>