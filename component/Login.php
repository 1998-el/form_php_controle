<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="contain">
            <form action="traitement.php" method="POST">
                <h3>Welcome back among us!</h3>
                <div class="inputField">
                    <input type="text" placeholder="Nom" id="nom" name="nom">
                    <span id="erro_name"></span>
                </div>
                <div class="inputField">
                    <input type="text" placeholder="Prenom" id="prenom" name="prenom">
                    <span id="erro_name"></span>
                </div>
                <div class="inputField">
                    <input type="email" placeholder="Email" id="email" name="email">
                </div>
                <div class="inputField">
                <div class="input_select-sexe">
                    <label for="homme">Homme</label>
                    <input type="radio" id="homme" name="sexe" value="homme">
                </div>
                <div class="input_select-sexe">
                    <label for="femme">Femme</label>
                    <input type="radio" id="femme" name="sexe" value="femme">
                </div>
                    <span id="erro_name"></span>
                </div>
                <div class="inputField">
                <label for="option">Métier:</label>
                <select name="option" id="select">
                    <option value="Ingénieur DevOps">Ingénieur DevOps</option>
                    <option value="Architecte logiciel">Architecte logiciel</option>
                    <option value="Développeur web ou mobile">Développeur web ou mobile</option>
                    <option value="Testeur logiciel">Testeur logiciel</option>
                    <option value="Ingénieur en sécurité informatique">Ingénieur en sécurité informatique</option>
                </select>
                    <span id="erro_name"></span>
                </div>
                <p><a href="#">Forgot Password ?</a></p>
                <div class="button"><button type="submite" value="Sign In" id="btn-sunbmit">send</button></div>
            </form>
         <video src="/video/Bg.mp4" type="video/mp4" autoplay loop></video>
    </div>
</body>
<style>
*{
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;
}
body{
    background: #dad9e5;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.contain{
    position: relative;
    height: max-content;
    border: 1px solid #ccc;
}
.contain form h3{
    color: #4c4b4b;
    margin-bottom: 20px;
    text-transform:capitalize;
}
.contain form{
    display: flex;
    flex-direction: column;
    padding: 60px 60px;
    background: #dad9e529;
    backdrop-filter: blur(2px);
    border-radius: 3px;
}

.contain form p a, label{
    font-size: 12.5px;
    color: #6c6b6b;
    text-decoration: none;
}
.contain form .inputField{
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 350px;
    height: 40px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin: 10px 0;
    padding:  0 5px;
}
.inputField input{
    height: 70%;
    width: 90%;
    font-size: 12px;
    outline: none;
    border: none;
    background: transparent;
}
.button{
    
    width: 350px;
    height: 40px;
    border-radius: 3px;
    margin: 10px 0;
}
#btn-sunbmit{
    text-align: center;
    width: 100%;
    border: 1px solid;
}
.button button{
    cursor: pointer;
    height: 100%;
    width: 100%;
    font-size: 14px;
    border: none;
    color: #dad9e5;
    background: linear-gradient(30deg,rgb(163, 106, 233, 0.418),rgb(122, 66, 234),rgb(122, 66, 234, 0.418),rgba(74, 71, 218, 0.418));
    border-radius: 3px;
    animation-name: animate;
    animation-duration: 4s;
    animation-delay: 0s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-fill-mode: forwards;
}
.input_select-sexe, input{
    display: flex;
    align-items: center;
    width: 30%;
}

@keyframes animate {
    0%{background: #e00de4a1;}
    50%{background: rgba(85, 3, 123, 0.742);}
    100%{background: rgba(4, 74, 166, 0.578);}
    
}
select{
    background-color: transparent;
    padding: 10px;
    border: none;
    outline: none;
}
option{
    background-color:  transparent;
}
.contain video{
   position: absolute;
   z-index: -1;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   border-radius: 3px;
   
}
button{
    padding: 10px 0;

}

</style>
</html>