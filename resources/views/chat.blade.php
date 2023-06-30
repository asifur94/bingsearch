<!DOCTYPE html>
<html>
<head>
    <title>ChatGPT Interface</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <style>
        
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 500px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.chat-container {
    height: 300px;
    overflow-y: scroll;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
}

#message-container {
    display: flex;
    flex-direction: column;
}

.user-message {
    align-self: flex-end;
    background-color: #e2f0fd;
    color: #333;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 5px;
}

.assistant-message {
    align-self: flex-start;
    background-color: #f7f7f7;
    color: #333;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 5px;
}

#chat-form {
    display: flex;
    margin-top: 20px;
}

#message-input {
    flex-grow: 1;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
}

button {
    padding: 8px 15px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}


    </style>
</head>
<body>
    <div class="container">
        <h1>ChatGPT Interface</h1>
        <div class="chat-container">
            <div id="message-container"></div>
        </div>
        <form id="chat-form">
                @csrf

            <input type="text" id="message-input" placeholder="Enter your message" required>
            <button type="submit">Send</button>
        </form>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        document.getElementById("chat-form").addEventListener("submit", function(event) {
            event.preventDefault();
            var messageInput = document.getElementById("message-input");
            var message = messageInput.value.trim();

            if (message !== "") {
                addMessage("user", message);
                messageInput.value = "";
                sendMessage(message);
            }
        });

        function sendMessage(message) {
            $.ajax({
                url: '<?php echo route('/chat') ?>',
                method: 'POST',
                data: { 'message': message },
                success: function(response) {
                    var reply = response.reply;
                    addMessage("assistant", reply);
                }
            });
        }

        function addMessage(role, content) {
            var messageContainer = document.getElementById("message-container");
            var messageElement = document.createElement("div");
            messageElement.className = role + "-message";
            messageElement.textContent = content;
            messageContainer.appendChild(messageElement);
        }






    </script>   

</body>
</html>
