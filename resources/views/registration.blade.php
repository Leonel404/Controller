<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
    letter-spacing: 0.5px;
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
        width:390px;
        height: 500px;
        background-color: #051e2d;
        border-radius:20px;
        padding:20px;
    }
    .input{
        width:340px;
        height:30px;
        border-radius:5px;
        background-color: #124361;
        margin: 5px;
        padding: 0px 10px 0px 10px;
        border: 2px solid #124361;
        color: #B5E3FF;
    }
    .input:focus {
        border: 1px solid #f99b3c;
        outline: none
    }
    .input:hover {
        border: 1px solid #f99b3c;
        outline: none
    }
    .label{
        font-family:"poppins";
        color: #f99b3c;
        font-weight: 300;
        text-align: center;
        margin-bottom:20px;
        margin-left:5px;
        font-size: 10px;
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }
    .button{
        background-color:#f99b3c;
        width:200px;
        height: 30px;
        margin: 20px 0px 0px 80px;
        border-radius: 10px;
        font-family:"poppins";
        color: #051e2d;
        font-weight: 500;
    }
    .button:hover{
        border: 2px solid #B5E3FF;
    }
    .text{
        font-family:"poppins";
        color: #B5E3FF;
        font-weight: 800;
        text-align: center;
        margin-bottom:40px;
    }
    ::placeholder{
        color: #B5E3FF;
        opacity: 0.5;
    }
    input:focus::placeholder {
    color: transparent;
    }
    .signcon{
        display:flex;
        border-bottom: 1px solid #054267;
        justify-content: center;
        margin-bottom: 10px;
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
    }#fname{
        width:160px;
        height:30px;
        border-radius:5px;
        background-color: #124361;
        margin: 5px;
        padding: 0px 10px 0px 10px;
        border: 2px solid #124361;
        color: #B5E3FF;
        margin-right:10px;
    }#fname:focus {
        border: 1px solid #F99B3C;
        outline: none
    }#fname:hover {
        border: 1px solid #f99b3c;
        outline: none
    }#lname{
        width:160px;
        height:30px;
        border-radius:5px;
        background-color: #124361;
        margin: 5px;
        padding: 0px 10px 0px 10px;
        border: 2px solid #124361;
        color: #B5E3FF;
    }#lname:focus {
        border: 1px solid #F99B3C;
        outline: none
    }#lname:hover {
        border: 1px solid #f99b3c;
        outline: none
    }#firstn{
        margin-right:34%
    }

    </style>

</head>
<body>
    <div class="container">
       <form class="box" id="form">
            <div class="signcon">
                <h1 class="text">Sign up</h1>
            </div>
            <div class="input-control">
                <label for=""class="label"id="firstn">First Name</label><label for="" class="label">Last Name</label><br>
                <input type="text" name="firstname" class="inputn" placeholder="First Name" id="fname">
                <input type="text" name="lastname" class="inputn" placeholder="Last Name" id="lname"><br>
            </div>
            <div class="input-control">
                <label for="" class="label">Username</label><br>
                <input type="text" name=username class="input" placeholder="Username" id="uname"><br>
            </div>
            <div class="input-control">
                <label for="" class="label">Password</label><br>
                <input type="password" name=password class="input" placeholder="Password" id="pass"><br>
            </div>
            <div class="input-control">
                <label for="" class="label">Confirm Password</label><br>
                <input type="password" name="conpassword" class="input" placeholder="Confirm Password" id="conpass"><br>
            </div>
                <h5 class="sign">Already have an account? <a href="{{route('user.index')}}">Sign in</a></h5>
                <button type="submit" name="submit"class="button" id='submit'>Register</button><br>
       </form>  
    </div>
</body>
</html>