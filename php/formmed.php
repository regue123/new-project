<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="cc/stylesform.css">
</head>
<body>
    <div class="container">
        <form id="Form1">
            <h3>CREATE AN ACCOUNT</h3>
            <input type="text" placeholder="Name" required>
            <input type="text" placeholder="Email" required>
            <input type="password" placeholder="Password" required>

            <div class="btn-box">
                <button type="button" id="Next1">Next</button>
            </div>
        </form>

        <form id="Form2">
            <h3>PLACE OF WORK</h3>
            <input type="text" placeholder="Region">
            <input type="text" placeholder="Town">
            <input type="text" placeholder="Quarter">

            <div class="btn-box">
                <button type="button" id="Back1">Back</button>
                <button type="button" id="Next2">Next</button>
            </div>
        </form>

        <form id="Form3">
            <h3>PERSONNAL INFOS</h3>
            <input type="text" placeholder="id number" required>
            <input type="tel" placeholder="Mobile No." required>
            <input type="file" placeholder="Certificate" required>
            <label for="specialite">Spécialité :</label>
            <select id="specialite" name="specialite">
                <option value="cardiologie">Cardiologie</option>
                <option value="dermatologie">Dermatologie</option>
                <option value="pediatrie">Pédiatrie</option>
                <option value="neurologie">Neurologie</option>
                <option value="gynecologie">Gynécologie</option>
            </select>

            <div class="btn-box">
                <button type="button" id="Back2">Back</button>
                <button type="Submit">Submit</button>
            </div>
        </form>

        <div class="step-row">
          <div id="progress"></div>
           <div class="step-col"><small>Step 1</small></div>
           <div class="step-col"><small>Step 2</small></div>
           <div class="step-col"><small>Step 3</small></div>
        </div>

    </div>

<script>

     var Form1 = document.getElementById("Form1");
     var Form2 = document.getElementById("Form2");
     var Form3 = document.getElementById("Form3");
    
     var Next1 =  document.getElementById("Next1");
     var Next2 =  document.getElementById("Next2");
     var Back1 =  document.getElementById("Back1");
     var back2 =  document.getElementById("back2");
    
     var progress = document.getElementById("progress");

     Next1.onclick = function(){
         Form1.style.left = "-450px";
         Form2.style.left = "40px";
         progress.style.width = "240px";
     }
     Back1.onclick = function(){
         Form1.style.left = "40px";
         Form2.style.left = "450px";
         progress.style.width = "120px";
     }
     Next2.onclick = function(){
         Form2.style.left = "-450px";
         Form3.style.left = "40px";
         progress.style.width = "360px";
     }
     Back2.onclick = function(){
         Form2.style.left = "40px";
         Form3.style.left = "-450px";
         progress.style.width = "240px";
     }
</script>

</body>
</html>