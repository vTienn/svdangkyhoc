<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Login form responsive</title>  
    </head>
    <style>
        /*===== GOOGLE FONTS =====*/
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap");

/*===== VARIABLES CSS =====*/

/*=== Colores ===*/
:root{
    --first-color: #12192C;
    --text-color: #8590AD;
}

/*=== Fuente y tipografia ===*/
:root{
    --body-font: 'Roboto', sans-serif;
    --big-font-size: 2rem;
    --normal-font-size: 0.938rem;
    --smaller-font-size: 0.875rem;
}
@media screen and (min-width: 768px){
    :root{
        --big-font-size: 2.5rem;
        --normal-font-size: 1rem;
    }  
}

/*===== BASE =====*/
*,::before,::after{
    box-sizing: border-box;
}
body{
    margin: 0;
    padding: 0;
    font-family: var(--body-font);
    color: var(--first-color);
}
h1{
    margin: 0;
}
a{
    text-decoration: none;
}
img{
    max-width: 100%;
    height: auto;
}
/*===== FORM =====*/
.l-form{
    position: relative;
    height: 100vh;
    overflow: hidden;
}

/*=== Shapes ===*/
.shape1,
.shape2{
    position: absolute;
    width: 200px;
    height: 200px;
    border-radius: 50%;
}
.shape1{
    top: -7rem;
    left: -3.5rem;
    background: linear-gradient(180deg, var(--first-color) 0%, rgba(196,196,196,0) 100%);
}
.shape2{
    bottom: -6rem;
    right: -5.5rem;
    background: linear-gradient(180deg, var(--first-color) 0%, rgba(196,196,196,0) 100%);
    transform: rotate(180deg);
}
/*=== Form ===*/
.form{
    height: 100vh;
    display: grid;
    justify-content: center;
    align-items: center;
    padding: 0 1rem;
}
.form__content{
    width: 290px;
}
.form__img{
    display: none;
}
.form__title{
    font-size: var(--big-font-size);
    font-weight: 500;
    margin-bottom: 2rem;
}
.form__div{
    position: relative;
    display: grid;
    grid-template-columns: 7% 93%;
    margin-bottom: 1rem;
    padding: .25rem 0;
    border-bottom: 1px solid var(--text-color);
}
/*=== Div focus ===*/
.form__div.focus{
    border-bottom: 1px solid var(--first-color);
}

.form__div-one{
    margin-bottom: 3rem;
}

.form__icon{
    font-size: 1.5rem;
    color: var(--text-color);
    transition: .3s;
}
/*=== Icon focus ===*/
.form__div.focus .form__icon{
    color: var(--first-color);
}

.form__label{
    display: block;
    position: absolute;
    left: .75rem;
    top: .25rem;
    font-size: var(--normal-font-size);
    color: var(--text-color);
    transition: .3s;
}
/*=== Label focus ===*/
.form__div.focus .form__label{
    top: -1.5rem;
    font-size: .875rem;
    color: var(--first-color);
}

.form__div-input{
    position: relative;
}
.form__input{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
    outline: none;
    background: none;
    padding: .5rem .75rem;
    font-size: 1.2rem;
    color: var(--first-color);
    transition: .3s;
}
.form__forgot{
    display: block;
    text-align: right;
    margin-bottom: 2rem;
    font-size: var(--normal-font-size);
    color: var(--text-color);
    font-weight: 500;
    transition: .5;
}
.form__forgot:hover{
    color: var(--first-color);
    transition: .5s;
}
.form__button{
    width: 100%;
    padding: 1rem;
    font-size: var(--normal-font-size);
    outline: none;
    border: none;
    margin-bottom: 3rem;
    background-color: var(--first-color);
    color: #fff;
    border-radius: .5rem;
    cursor: pointer;
    transition: .3s;
}
.form__button:hover{
    box-shadow: 0px 15px 36px rgba(0,0,0,.15);
}

/*=== Form social===*/
.form__social{
    text-align: center;
}
.form__social-text{
    display: block;
    font-size: var(--normal-font-size);
    margin-bottom: 1rem;
}
.form__social-icon{
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 30px;
    height: 30px;
    margin-right: 1rem;
    padding: .5rem;
    background-color: var(--text-color);
    color: #fff;
    font-size: 1.25rem;
    border-radius: 50%;
}
.form__social-icon:hover{
    background-color: var(--first-color);
}
/*===== MEDIA QUERIS =====*/
@media screen and (min-width: 968px){
    .shape1{
        width: 400px;
        height: 400px;
        top: -11rem;
        left: -6.5rem;
    }
    .shape2{
        width: 300px;
        height: 300px;
        right: -6.5rem;
    }

    .form{
        grid-template-columns: 1.5fr 1fr;
        padding: 0 2rem;
    }
    .form__content{
        width: 320px;
    }
    .form__img{
        display: block;
        width: 700px;
        justify-self: center;
    }
}
    </style>
    <body>
        <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>

            <div class="form">
                <img src="assets/img/authentication.svg" alt="" class="form__img">

                <form id="loginForm" action="http://localhost/svdangkyhoc/dangnhap_ctrl/kiemtradn" class="form__content" method="post">
                    <h1 class="form__title">Welcome Utt 👨‍🏫</h1>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-user-circle'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Username</label>
                            <input id="masv" type="text" name="txtus" class="form__input">
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Password</label>
                            <input name="txtps" type="password" class="form__input">
                        </div>
                    </div>
                    <a href="#" class="form__forgot">Forgot Password?</a>

                    <input type="submit" class="form__button" value="Login" name="btndn">

                    <div class="form__social">
                        <span class="form__social-text">Our login with</span>

                        <a href="#" class="form__social-icon"><i class='bx bxl-facebook' ></i></a>
                        <a href="#" class="form__social-icon"><i class='bx bxl-google' ></i></a>
                        <a href="#" class="form__social-icon"><i class='bx bxl-instagram' ></i></a>
                    </div>
                </form>
            </div>

        </div>
        
        <!-- ===== MAIN JS ===== -->
        <script >
            /*===== FOCUS =====*/
const inputs = document.querySelectorAll(".form__input")

/*=== Add focus ===*/
function addfocus(){
    let parent = this.parentNode.parentNode
    parent.classList.add("focus")
}

/*=== Remove focus ===*/
function remfocus(){
    let parent = this.parentNode.parentNode
    if(this.value == ""){
        parent.classList.remove("focus")
    }
}

/*=== To call function===*/
inputs.forEach(input=>{
    input.addEventListener("focus",addfocus)
    input.addEventListener("blur",remfocus)
})

        </script>
    </body>
</html>