<!DOCTYPE html>

<head>

<link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Work+Sans">


<style>

    .Header {
  background-color: white;
  text-align: center;
        padding: 10px;
}

    .symptoms {
  margin: auto;
  margin-top: 10px;
  background: white;
  width: 800px;
  padding: 10px;
}

 .pictures {
  margin: auto;
  margin-top: 10px;
  background: white;
  align-items:  : center;
  padding: 10px;
}

.pictures img {
  border: 3px solid lightblue;
  border-radius: 4px;
  width: 180px;
  margin: auto;

    margin: auto;
}
    body 
    {

        padding: 0px;
          align-content: : center;
        background-color: lightblue;
    }

    h1   
    {
        color: lightblue;
        text-align: center;
        font-size: : 40px;
        font-family: 'Work Sans', bold;
    }

        h2
    {
        color: gray;
        text-align: left;
        font-size: : 30px;
        font-family: 'Work Sans', bold;
    }

    p    
    {
        color: red;
        
    }
    input[type="radio"]{
        margin: 0 87px 0 87px;
    }   

/* HIDE RADIO */
[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + img {
  outline: 2px solid #f00;
}
</style>

</head>


<html>
<body>


<div class="Header">
  <hr>
  <h1>Cybersickness Online Questionnaire</h1>
  <hr>
</div>

<div class="symptoms">
  <h2>General Discomfort</h2>
  <hr>
<form action="insert.php" method="post">
    <div class = "pictures">
        <label>
            <input type="radio" id="discomfort0" name="discomfort" value="0" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="discomfort1" name="discomfort" value="1" checked>
            <img src="images/discomfort1.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="discomfort2" name="discomfort" value="2" checked>
            <img src="images/discomfort2.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="discomfort3" name="discomfort" value="3" checked>
            <img src="images/discomfort3.png" alt="Basic">
        </label>
    </div>
</div>
</div>

<div class="symptoms">
  <h2>Fatigue</h2>
  <hr>

    <div class = "pictures">
        <label>
            <input type="radio" id="fatigue0" name="fatigue" value="0" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="fatigue1" name="fatigue" value="1" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="fatigue2" name="fatigue" value="2" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="fatigue3" name="fatigue" value="3" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
    </div>
</div>

<div class="symptoms">
  <h2>Headache</h2>
  <hr>

    <div class = "pictures">
        <label>
            <input type="radio" id="headache0" name="headache" value="0" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="headache1" name="headache" value="1" checked>
            <img src="images/headache1.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="headache2" name="headache" value="2" checked>
            <img src="images/headache2.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="headache3" name="headache" value="3" checked>
            <img src="images/headache3.gif" alt="Basic">
        </label>
    </div>
</div>

<div class="symptoms">
  <h2>Eye Strain</h2>
  <hr>

    <div class = "pictures">
        <label>
            <input type="radio" id="eyestrain0" name="eyestrain" value="0" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="eyestrain1" name="eyestrain" value="1" checked>
            <img src="images/eyeStrain1.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="eyestrain2" name="eyestrain" value="2" checked>
            <img src="images/eyeStrain2.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="eyestrain3" name="eyestrain" value="3" checked>
            <img src="images/eyeStrain3.gif" alt="Basic">
        </label>
    </div>
</div>


<div class="symptoms">
  <h2>Increased Salivation</h2>
  <hr>

    <div class = "pictures">
        <label>
            <input type="radio" id="saliva0" name="saliva" value="0" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="saliva1" name="saliva" value="1" checked>
            <img src="images/saliva1.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="saliva2" name="saliva" value="2" checked>
            <img src="images/saliva2.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="saliva3" name="saliva" value="3" checked>
            <img src="images/saliva3.gif" alt="Basic">
        </label>
    </div>
</div>

<div class="symptoms">
  <h2>Sweating</h2>
  <hr>

    <div class = "pictures">
        <label>
            <input type="radio" id="sweat0" name="sweat" value="0" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="sweat1" name="sweat" value="1" checked>
            <img src="images/sweat1.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="sweat2" name="sweat" value="2" checked>
            <img src="images/sweat2.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="sweat3" name="sweat" value="3" checked>
            <img src="images/sweat3.gif" alt="Basic">
        </label>
    </div>
</div>

<div class="symptoms">
  <h2>Nausea</h2>
  <hr>

    <div class = "pictures">
        <label>
            <input type="radio" id="nausea0" name="nausea" value="0" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="nausea1" name="nausea" value="1" checked>        
            <img src="images/nausea1.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="nausea2" name="nausea" value="2" checked>
            <img src="images/nausea2.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="nausea3" name="nausea" value="3" checked>
            <img src="images/nausea3.png" alt="Basic">
        </label>
    </div>
</div>

<div class="symptoms">
  <h2>Difficulty Concentrating</h2>
  <hr>

    <div class = "pictures">
        <label>
            <input type="radio" id="focus0" name="focus" value="0" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="focus1" name="focus" value="1" checked>
            <img src="images/focus1.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="focus2" name="focus" value="2" checked>
            <img src="images/focus2.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="focus3" name="focus" value="3" checked>
            <img src="images/focus3.gif" alt="Basic">
        </label>

            
    </div>
</div>

<div class="symptoms">
  <h2>Fullness of the Head</h2>
  <hr>

    <div class = "pictures">
        <label>
            <input type="radio" id="fullness0" name="fullness" value="0" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="fullness1" name="fullness" value="1" checked>
            <img src="images/base0.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="fullness2" name="fullness" value="2" checked>
            <img src="images/base0.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="fullness3" name="fullness" value="3" checked>
            <img src="images/base0.gif" alt="Basic">
        </label>
    </div>
</div>

<div class="symptoms">
  <h2>Blurred Vision</h2>
  <hr>

    <div class = "pictures">
        <label>
            <input type="radio" id="blurred0" name="blurred" value="0" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="blurred1" name="blurred" value="1" checked>
            <img src="images/blur1.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="blurred2" name="blurred" value="2" checked>
            <img src="images/blur2.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="blurred3" name="blurred" value="3" checked>
            <img src="images/blur3.png" alt="Basic">
        </label>
    </div>
</div>

<div class="symptoms">
  <h2>Dizziness with Eyes Open</h2>
  <hr>

    <div class = "pictures">
        <label>
            <input type="radio" id="dizzinessEyes0" name="dizzinessEyes" value="0" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="dizzinessEyes1" name="dizzinessEyes" value="1" checked>
            <img src="images/dizzy1.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="dizzinessEyes2" name="dizzinessEyes" value="2" checked>
            <img src="images/dizzy2.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="dizzinessEyes3" name="dizzinessEyes" value="3" checked>
            <img src="images/dizzy3.gif" alt="Basic">
        </label>
    </div>
</div>


<div class="symptoms">
  <h2>Dizziness with Eyes Closed</h2>
  <hr>

    <div class = "pictures">
        <label>
            <input type="radio" id="dizzyclose0" name="dizzyclose" value="0" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="dizzyclose1" name="dizzyclose" value="1" checked>
            <img src="images/dizzyClose1.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="dizzyclose2" name="dizzyclose" value="2" checked>
            <img src="images/dizzyClose2.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="dizzyclose3" name="dizzyclose" value="3" checked>
            <img src="images/dizzyClose3.gif" alt="Basic">
        </label>
    </div>
</div>



<div class="symptoms">
  <h2>Vertigo</h2>
  <hr>

    <div class = "pictures">
        <label>
            <input type="radio" id="vertigo0" name="vertigo" value="0" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="vertigo1" name="vertigo" value="1" checked>
            <img src="images/vertigo1.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="vertigo2" name="vertigo" value="2" checked>
            <img src="images/vertigo2.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="vertigo3" name="vertigo" value="3" checked>
            <img src="images/vertigo3.gif" alt="Basic">
        </label>
    </div>
</div>



<div class="symptoms">
  <h2>Stomach Awareness</h2>
  <hr>

    <div class = "pictures">
        <label>
            <input type="radio" id="stomach0" name="stomach" value="0" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="stomach1" name="stomach" value="1" checked>
            <img src="images/stomach1.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="stomach2" name="stomach" value="2" checked>
            <img src="images/stomach2.png" alt="Basic">
        <label>
            <input type="radio" id="stomach3" name="stomach" value="3" checked>
            <img src="images/stomach3.png" alt="Basic">
        </label>
    </div>
</div>



<div class="symptoms">
  <h2>Burping</h2>
  <hr>

    <div class = "pictures">
        <label>
            <input type="radio" id="burp0" name="burp" value="0" checked>
            <img src="images/base0.png" alt="Basic">
        </label>
        <label>
            <input type="radio" id="burp1" name="burp" value="1" checked>
            <img src="images/burp1.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="burp2" name="burp" value="2" checked>
            <img src="images/burp2.gif" alt="Basic">
        </label>
        <label>
            <input type="radio" id="burp3" name="burp" value="3" checked>
            <img src="images/burp3.gif" alt="Basic">
        </label>
    </div>
    <input type="submit" name="Submit" value="Submit">
</div>
</form>

</body>
</html>
?>
