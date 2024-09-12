<style>
    *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

body{ 
    background-image: url(image/Fundo9.png);
    background-position: center;
    background-size: cover;
}
.container {
    width: 360px;
    height: 400px;
    margin: 8% auto;
    background: transparent;
    border-radius: 5px;
    position: relative;
    overflow: hidden;
    border-left: 1px solid rgba(255, 255, 255, .3);
    border-top: 1px solid rgba(255, 255, 255, .3);
    box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);
}

h3 {
    text-align: center;
    margin-bottom: 40px;
    color: #777;
}

.container section{
    width: 280px;
    position: absolute;
    top: 100px;
    left: 40px;
    transition: 0.5s;
}

section input{
    background: transparent;
    width: 100%;
    padding: 10px 5px;
    margin: 5px 0;
    border: 0;
    border-bottom: 1px solid #999;
    outline: none;
}
::placeholder{
    color: #777;
}
.btn-box{
    width: 100%;
    margin:30px auto;
    text-align: center;
}
section button{
    width: 110px;
    height: 35px;
    margin: 0 10px;
    background: linear-gradient(to right, #1407d3, #0fce28);
    border-radius: 30px;
    border: 0;
    outline: none;
    color: #fff;
    cursor: pointer;
}
#Form2{
    left: 400px;
}
#Form3{
    left: 400px;
}
.step-row{
    width: 120px;
    height: 40px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    box-shadow: 0 -1px 5px -1px #000;
    position: relative;
}
.step-col{
    width: 120px;
    text-align: center;
    color: #333;
    position: relative;
}
#progress{
    position: absolute;
    height: 100%;
    width: 120px;
    background: linear-gradient(to right, #1407d3, #0fce28);
    transition: 1s;
}
#progress::after{
    content: '';
    height: 0;
    width: 0;
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
    position: absolute;
    right: -20px;
    top: 0;
    border-left: 20px solid #0fce28;
}
</style>