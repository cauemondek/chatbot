<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Bot</title>

    <link rel="stylesheet" href="./style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine&family=Inder&family=Manrope:wght@200;500&family=Montserrat:wght@200;300;500&family=Noto+Sans+JP:wght@200;400;500&family=Nunito&family=Poppins:wght@200;300;400;500;600;700;800&family=Roboto:wght@100;400&family=Sen:wght@700&family=Source+Code+Pro&display=swap"rel="stylesheet">

    <script src="https://kit.fontawesome.com/dc49a974a4.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <div class="title">Chatbot Online</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Como posso ajudar?</p>
                </div>
            </div>

        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Digite aqui..." required>
                <button id="send-btn">Enviar</button>
            </div>
        </div>
    </div>

    <footer>
        <p>© Cauê Guise Mondek - Todos os direitos reservados, <span id="ano"></span></p>
    </footer>

    <script>
        $(document).ready(() => {
            $(document).keypress((e) => {
                $key = e.which;
                if($key == 13) {
                    $value = $("#data").val();
                    if ($value != ""){
                        $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>'
                        $(".form").append($msg);
                        $transformedValue = $value.toLowerCase();
                        $("#data").val('');
                        // start ajax code
                        $.ajax({
                            url: 'message.php',
                            type: 'POST',
                            data: 'text=' + $transformedValue,
                            success: (result) => {
                                $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                                $(".form").append($replay);
                                $(".form").scrollTop(100000000000);
                            }
                        });
                    }
                }
            }); 

            $("#send-btn").on("click", () => {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>'
                $(".form").append($msg);
                $transformedValue = $value.toLowerCase();
                $("#data").val('');
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text=' + $transformedValue,
                    success: (result) => {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop(100000000000);
                    }
                });
            });
        })

        const year = document.querySelector('#ano');
        year.innerHTML = new Date().getFullYear();
    </script>
</body>

</html>