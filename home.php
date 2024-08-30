<?php

    include("connection.php");
    include("login.php")

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malaysia Food !!!</title>
    
    <style>

        body {
            margin: 10px;
            padding: 10px;
            box-sizing: border-box;
            background-image: url(image/p1.png);
            color: black;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .food-item { 
            text-align: center;
            font-size: 20px;
            border-radius: 30px;
            background: linear-gradient(90deg, white, lightpink);
            padding: 10px;
            width: 500px;
            height: auto;
            margin: 10px;
            float: left;
            border: 2px solid lightcoral;
            box-shadow: 0 0 5px gray;
            box-sizing: border-box;

        }

        header {
            text-align: center;
            border-radius: 30px;
            background: pink;
            padding: 20px;
            margin: 10px;
        }

        header li a {
            text-decoration: none;
        }

        header li a:hover {
            color: chocolate;
        }

        .food-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .image-box {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px black;
            overflow: hidden; 
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto; 
            width: 100%; 
        }

        .image-box video {
            width: 100%;
            height: auto;
            max-height: 250px; 
            object-fit: cover; 
        }

        a {
            color: black; 
            text-decoration: none;
        }

        a:active {
            color: lightslategray; 
        }
        
    </style>
</head>


<body>
    <header>
        <ul>
           <h2> <li><a href="#">
            In here we can know about some popular food in Malaysia!
            </a></li></h2>
        </ul>
    </header>

    <h1>Malaysia Food !!!</h1> <br>

    <div class="food-container">
        <div class="food-item">
            <div class="image-box">
                <video src="image/p2.mp4" controls></video>
            </div>
            <h3>Durian</h3>
            <p><a href="image/p7.jpg" target="_blank">Kampung Durian</a></p> <!-- here -->
            <p><a href="image/p8.jpg" target="_blank">Musang King</a></p>
        </div>

        <div class="food-item">
            <div class="image-box">
                <video src="image/p5.mp4" controls></video>
            </div>
            <h3>Nasi Lemak</h3>
            <p><a href="image/p9.jpg" target="_blank">With Sambal(Sauces)</a></p>
            <p><a href="image/p10.jpg" target="_blank">Add Ikan(Fish)</a></p>
        </div>
          
        <div class="food-item">
            <div class="image-box">
                <video src="image/p3.mp4" controls></video>
            </div>
            <h3>Ais Kacang</h3>
            <p><a href="image/p12.jpg" target="_blank">Add Peanut</a></p>
            <p><a href="image/p11.jpg" target="_blank">Add Red Bean</a></p>
        </div>

        <div class="food-item">
            <div class="image-box">
                <img src="image/p4.jpg" >
            </div>
            <h3>Teh O Ais</h3>
            <p><a href="image/p6.mp4" target="_blank">With Limau(Lemon)</a></p>
            <p><a href="image/p13.mp4" target="_blank">Without Limau(Lemon)</a></p>
        </div>

        <div class="food-item">   
            <div class="image-box">
                <img src="image/p21.jpg" >
            </div>
            <h3>Satay</h3>
            <p><a href="image/p16.jpg" target="_blank">Ayam(Chicken)</a></p>
            <p><a href="image/p27.jpg" target="_blank">Kamping(Lamb)</a></p>
        </div>

        <div class="food-item">   
            <div class="image-box">
                <img src="image/p29.jpg" >
            </div>
            <h3>Laksa</h3>
            <p><a href="image/p30.jpg" target="_blank">Add Lemak(Creamy Coconut)</a></p>
            <p><a href="image/p26.jpg" target="_blank">Add Assam(Chili)</a></p>
        </div>

        <div class="food-item">  
            <div class="image-box">
                <img src="image/p17.jpg" >
            </div>
            <h3>Roti Canai</h3>
            <p><a href="image/p14.mp4" target="_blank">Roti Canai Plain</a></p>
            <p><a href="image/p15.mp4" target="_blank">Roti Canai Tissue</a></p>
        </div>

        <div class="food-item">  
            <div class="image-box">
                <img src="image/p23.jpg" >
            </div>
            <h3>Kopi O</h3>
            <p><a href="image/p19.jpg" target="_blank">Kopi O Gao(Strong or Thick)</a></p>
            <p><a href="image/p31.jpg" target="_blank">Kopi O Kosong(Lack of Sugar)</a></p>
        </div>

        <div class="food-item">  
            <div class="image-box">
                <img src="image/p24.jpg" >
            </div>
            <h3>Teh Tarik</h3>
            <p><a href="image/p20.jpg" target="_blank">Teh Tarik with Pandan</a></p>
            <p><a href="image/p25.jpg" target="_blank">Teh Tarik with Ginger</a></p>
        </div>

        <div class="food-item">  
            <div class="image-box">
                <img src="image/p18.jpg" >
            </div>
            <h3>Karipap</h3>
            <p><a href="image/p28.jpg" target="_blank">Karipap Daging(Beef)</a></p>
            <p><a href="image/p22.jpg" target="_blank">karipap Ayam(Chicken)</a></p>
        </div>
       
    </div>



    <div class="container">
        <h2>Game Time</h2>
        <p id="question"></p>
            <script>
                let number = Math.floor(Math.random() * questions.length);
            </script>
        <input type="text" id="answer" placeholder="Try type some thing here">
        
        <button onclick="checkAnswer()">Submit</button>
        <p class="message" id="message"></p>
    </div>
  
  <style>
        .container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px black;
            padding: 20px;
            width: 300px;
            text-align: center;
        }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid lavender;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: green;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: lightgreen;
        }
        .message {
            margin-top: 10px;
        }
    </style>
   
   <script>


        const questions = [
            { clue: 'peanut,red bean', answer: 'ais kacang' },
            { clue: 'limau', answer: 'teh o ais' },
            { clue: 'kampung,musang', answer: 'durian' },
            { clue: 'lemak,assam', answer: 'nasi lemak' },
            { clue: 'ayam,kamping', answer: 'satay' }
        ];

        let currentQuestionIndex = Math.floor(Math.random() * questions.length);

        function displayQuestion() {
            const question = questions[currentQuestionIndex];
            document.getElementById('question').innerText = Clue;{question.clue};
        }

        function checkAnswer() {
            const userAnswer = document.getElementById('answer').value.trim().toLowerCase();
            const correctAnswer = questions[currentQuestionIndex].answer.toLowerCase();

            if (userAnswer === correctAnswer) {
                document.getElementById('message').innerText = 'Wrong answer. Try again!';
                setTimeout(() => {
                    currentQuestionIndex = Math.floor(Math.random() * questions.length);
                    displayQuestion();
                    document.getElementById('answer').value = '';
                    document.getElementById('message').innerText = '';
                }, 2000);
            } else {
               
                document.getElementById('message').innerText = 'U are the Best!!!';
            }
        }

        displayQuestion();
    </script>



    <p id="demo"></p>
<script>
const d = new Date();
document.getElementById("demo").innerHTML = d;
</script>

</body>
</html>
