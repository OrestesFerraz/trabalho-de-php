<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .flex {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    body {

        background-color: #3b3b3b;

        color: #38caef;

        font-family: sans-serif;

        background-image: url('https://static.vecteezy.com/ti/vetor-gratis/p3/543691-abstrato-azul-tecnologia-com-ponto-de-linha-branca-conceito-de-negocio-e-conexao-internet-cyber-e-tema-de-rede-industria-inteligente-e-papel-de-parede-de-ciencia-de-computador-futurista-e-industria-4-0-vetor.jpg');
        background-size: cover;
        background-position: center;
    }

    .container {
        border: #2929291a groove 0.6vw;

        backdrop-filter: blur(7px);

        margin-top: 5vw;

        border-radius: 2vw;

        padding: 4vw;

        background-color: #2929291a;

        text-align: center;

        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1vw;

        flex-direction: column;

        transition: 1s;

    }

    .container:hover {

        -webkit-box-shadow: 0px -1px 67px 10px rgba(56,202,239,1);
        -moz-box-shadow: 0px -1px 67px 10px rgba(56,202,239,1);
        box-shadow: 0px -1px 67px 10px rgba(56,202,239,1);

    }

    .form__group {
    position: relative;
    padding: 20px 0 0;
    width: 100%;
    max-width: 180px;
}

.form__field {
    font-family: inherit;
    width: 100%;
    border: none;
    border-bottom: 2px solid #9b9b9b;
    outline: 0;
    font-size: 17px;
    color: #b5b5b5;
    padding: 7px 0;
    background: transparent;
    transition: border-color 0.2s;
}   

.form__field::placeholder {
    color: transparent;
}

.form__field:placeholder-shown ~ .form__label {
    font-size: 17px;
    cursor: text;
    top: 20px;
}

.form__label {
    position: absolute;
    top: 0;
    display: block;
    transition: 0.2s;
    font-size: 17px;
    color: #b5b5b5;
    pointer-events: none;
}

.form__field:focus {
    padding-bottom: 6px;
    font-weight: 700;
    border-width: 3px;
    border-image: linear-gradient(to right, #116399, #38caef);
    border-image-slice: 1;
}

.form__field:focus ~ .form__label {
    position: absolute;
    top: 0;
    display: block;
    transition: 0.2s;
    font-size: 17px;
    color: #b5b5b5;
    font-weight: 700;
}

/* reset input */
.form__field:required, .form__field:invalid {
  box-shadow: none;
}

.btn {
    font-size: 1.2rem;
    padding: 1rem 2.5rem;
    border: none;
    outline: none;
    border-radius: 0.4rem;
    cursor: pointer;
    text-transform: uppercase;
    background-color: #171717a1;
    backdrop-filter: blur(5px);
    color: rgb(234, 234, 234);
    font-weight: 700;
    transition: 0.6s;
    box-shadow: 0px 0px 60px #1f4c65;
    -webkit-box-reflect: below 10px linear-gradient(to bottom, rgba(0,0,0,0.0), rgba(0,0,0,0.4));
    margin-top: 3vw;
}

.btn:active {
  scale: 0.92;
}

.btn:hover {
    background: rgb(2,29,78);
    background: linear-gradient(270deg, rgba(2, 29, 78, 0.681) 0%, rgba(31, 215, 232, 0.873) 60%);
    color: rgb(4, 4, 38);
}
</style>
<body>
    <div class="flex">
        <form action="destino e get.php" method="post" class="container">
        <h1>
            Cadastro de Usuário
        </h1>
        <div class="form__group field">
            <input type="text" name="nome" required placeholder="nome" class="form__field">
            <label for="name" class="form__label">Nome</label>
        </div>
        <br>
        <div class="form__group field">
        <input type="number" name="numero" required placeholder="número" class="form__field" min="0" max="10">
        <label for="numero" class="form__label">número</label>
        </div>
        <br>
        <input type="submit" action="destino e get.php" class="btn">
    </form>
    </div>
</body>
</html>