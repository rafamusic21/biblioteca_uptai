<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistente virtual</title>

    <link rel="stylesheet" href="../sistema/css/chat1.css">
    <link rel="stylesheet" href="../sistema/css/home.css">
    <link rel="stylesheet" href="../fontaweson/fontawesome-free-6.1.1-web/css/all.css">

</head>

<body>
    <!-- CHAT BAR BLOCK -->
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">
            <h3><img src="../sistema/img/genos.jpg"  class="imgRedonda" width="35px" STYLE="position:absolute; top:5px; right:30px; visibility:visible z-index1"/></h3>
              <div STYLE="position:absolute; top:10px; right:145px">𝐆𝐞𝐧𝐨𝐬 </div>
              
            <DIV STYLE="position:absolute; top:1px; right:23px; visibility:visible z-index1">
                <IMG height="12" SRC="../sistema/img/circuloverdeeeee1.png" width="12">
                </div>
                 
            
        </button>

        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"  STYLE="color:#333;"><span>Loading...</span></p>
                        </div>

                        <!-- User input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg"
                                    placeholder="'Enter'Para enviar mensaje">
                                <p STYLE="color:#333;"></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                    onclick="heartButton()"></i>
                                <i id="chat-icon" style="color: #333;" class="fa-solid fa-paper-plane"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p STYLE="color:#333;"></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</body>
<script src="../sistema/js/ajax.js"></script>
<script src="../sistema/js/responses1.js"></script>
<script src="../sistema/js/chat.js"></script>

</html>