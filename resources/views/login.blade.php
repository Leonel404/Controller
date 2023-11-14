<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    margin:0;
    padding:0;
}
.container{
    display:flex;
    width:100%;
    height:100vh;
    background-color:#092536;
    justify-content:center;
    align-items:center;
}
.box{
    display:flex;
    width:300px;
    height: 350px;
    background-color: #051e2d;
    justify-content:center;
    display: flex;
    border-radius:20px;
    padding:20px;
}
.input{
    width:250px;
    height:30px;
    border-radius:5px;
    background-color: #124361;
    margin: 5px 10px 10px 15px;
    padding: 0px 10px 0px 10px;
    border: 1px solid #124361;
    color: #B5E3FF;
}
.input:hover {
    border: 1px solid #f99b3c;
    outline: none
}
.input:focus {
    border: 2px solid #f99b3c;
    outline: none
}
.inputpass{
    width:250px;
    height:30px;
    border-radius:5px;
    background-color: #124361;
    margin: 5px 10px 10px 15px;
    padding: 0px 10px 0px 10px;
    border: 1px solid #124361;
    color: #B5E3FF;
    position: relative;
}
.inputpass:focus {
    border: 2px solid #f99b3c;
    outline: none
}
.inputpass:hover {
    border: 1px solid #f99b3c;
    outline: none
}
.fa-eye{
    position: absolute;
    top:53%;
    left:57%;
}
::placeholder{
    color: #B5E3FF;
    opacity: 0.5;
}
.text{
    font-family:"poppins";
    color: #B5E3FF;
    font-weight: 800;
    text-align: center;
    margin-bottom:20px;
}
.button{
    background-color:#f99b3c;
    width:200px;
    height: 30px;
    margin: 30px 0px 10px 45px;
    border-radius: 10px;
    font-family:"poppins";
    color: #051e2d;
    font-weight: 800;
}
.button:hover{
    border: 2px solid #B5E3FF;
}
.line{
    margin-bottom: 20px;
    background-color:#054267;
    height: 1px;
}
input:focus::placeholder {
color: transparent;
}.label{
    font-family:"poppins";
    color: #f99b3c;
    font-weight: 300;
    text-align: center;
    margin-left:15px;
    font-size: 10px;
}
.signcon{
    display:flex;
    border-bottom: 1px solid #054267;
    justify-content: center;
    margin-bottom: 10px;
    padding-bottom:20px;
}
.sign{
    font-family:"poppins";
    color: #B5E3FF;
    font-weight: 300;
    text-align: center;
    font-size: 10px;
    margin-top: 10px;
}
a{
    color: #f99b3c;
}
.eye{
    position: absolute;
    left:57%;
    top:52%;
}

    </style>
</head>
<body>
<div class="container">
    <div class="box">
        <form>
        <div class="signcon">
            <h1 class="text">Sign in</h1>
        </div>
        <div>
            <div>
                <label for=""class="label">Username</label>
                <input type="text" placeholder="username" class="input"name="username">
            </div>
            <div>
                <label for=""class="label">Password</label>
                <input type="password"placeholder="password" class="inputpass" id="pass"name="password">
                <img src ="../resources/icon/hide.png" alt="eye" class="eye" id="eye">
            </div>
                <button type="submit" class="button">Login</button>
                <h5 class="sign">Create account? <a href="{{route('user.create')}}">Sign up</a></h5>
                <h5 class="sign">To <a href="{{route('dashboard')}}">Dashboard</a></h5>
                
        </div>   
        </form>
    </div>
</div>
<script>
        let pass= document.getElementById('pass');
        let eye= document.getElementById('eye');
        eye.onclick=function(){
            if(pass.type=="password"){
                pass.type="text";
                eye.src = "../icon/view.png"
            }else{
                pass.type="password";
                eye.src = "../resources/icon/hide.png"
            }
        }
</script>
</body>
</html>