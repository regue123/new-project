<style>
    * {
    margin: 0;
    padding: 0;
    outline: none;
}

body{ 
    background-image:url(image/connexion.png);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}     

.container {
    position: relative;
}

form {
    background: rgba(255, 255, 255, .3);
    width: 430px;
    height: 450px;
    border-radius: 20px;
    border-left: 1px solid rgba(255, 255, 255, .3);
    border-top: 1px solid rgba(255, 255, 255, .3);
    box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);
    text-align: center;  
}

h3 {
    color: rgb(0, 132, 255);
    font-weight: 500;
    opacity: 46;
    font-size: 2rem;
    margin-bottom: 60px;
    margin-top: 60px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, .3);
}
::placeholder {
    color: darkgray;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
    font-size: 19px;
}

a {
    color: #4074b8;
    text-decoration: underline;
    font-size: 15px;
    transition: all .3s;
}
a:hover {
    text-shadow: 2px 2px 6px rgba(0, 0, 0);  
    
}
form input{
    width: 80%;
    padding: 8px;
    margin: 5px 0;
    border: 0;
    border-bottom: 1px solid #999;
    outline: none;
    background: transparent;
    box-shadow: 4px 4px 60px rgba(0, 0, 0, .2);
    font-size: 22px;
}

input[type="button"] {
    cursor: pointer;
    margin-bottom: 40px;
    margin-top: 40px;
    font-size: 1.5em;
    width: 200px;
    border-radius: 50px;
}

</style>
