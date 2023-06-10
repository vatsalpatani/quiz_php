<!DOCTYPE html>
<html>
<head>
  <title>General Knowledge Quiz</title>
  <style>
    /* CSS styles go here */
    /* Feel free to customize the styles based on your preferences */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
    h1 {
      text-align: center;
    }
    .question {
      margin-bottom: 20px;
    }
    .options label {
      display: block;
      margin-bottom: 10px;
    }
    .submit-btn {
      margin-top: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>General Knowledge Quiz</h1>
  
  <form method="post">
    <div class="question">
      <h3>Question 1: Who is the first President of the United States?</h3>
      <div class="options">
        <label><input type="radio" name="q1" value="George Washington" required> George Washington</label>
        <label><input type="radio" name="q1" value="Thomas Jefferson" required> Thomas Jefferson</label>
        <label><input type="radio" name="q1" value="Abraham Lincoln" required> Abraham Lincoln</label>
        <label><input type="radio" name="q1" value="Benjamin Franklin" required> Benjamin Franklin</label>
      </div>
    </div>
    
    <div class="question">
      <h3>Question 2: What is the capital of France?</h3>
      <div class="options">
        <label><input type="radio" name="q2" value="Paris" required> Paris</label>
        <label><input type="radio" name="q2" value="Rome" required> Rome</label>
        <label><input type="radio" name="q2" value="London" required> London</label>
        <label><input type="radio" name="q2" value="Madrid" required> Madrid</label>
      </div>
    </div>
    
    <div class="question">
      <h3>Question 3: Which planet is known as the Red Planet?</h3>
      <div class="options">
        <label><input type="radio" name="q3" value="Venus" required> Venus</label>
        <label><input type="radio" name="q3" value="Mars" required> Mars</label>
        <label><input type="radio" name="q3" value="Jupiter" required> Jupiter</label>
        <label><input type="radio" name="q3" value="Saturn" required> Saturn</label>
      </div>
    </div>
    
    <div class="question">
      <h3>Question 4: What is the largest ocean on Earth?</h3>
      <div class="options">
        <label><input type="radio" name="q4" value="Atlantic Ocean" required> Atlantic Ocean</label>
        <label><input type="radio" name="q4" value="Indian Ocean" required> Indian Ocean</label>
        <label><input type="radio" name="q4" value="Pacific Ocean" required> Pacific Ocean</label>
        <label><input type="radio" name="q4" value="Arctic Ocean" required> Arctic Ocean</label>
      </div>
    </div>
    
    <div class="question">
      <h3>Question 5: Who wrote the play "Romeo and Juliet"?</h3>
      <div class="options">
        <label><input type="radio" name="q5" value="William Shakespeare" required> William Shakespeare</label>
        <label><input type="radio" name="q5" value="Oscar Wilde" required> Oscar Wilde</label>
        <label><input type="radio" name="q5" value="Jane Austen" required> Jane Austen</label>
        <label><input type="radio" name="q5" value="Charles Dickens" required> Charles Dickens</label>
      </div>
    </div>
    
    <div class="question">
      <h3>Question 6: What is the chemical symbol for gold?</h3>
      <div class="options">
        <label><input type="radio" name="q6" value="Au" required> Au</label>
        <label><input type="radio" name="q6" value="Ag" required> Ag</label>
        <label><input type="radio" name="q6" value="Fe" required> Fe</label>
        <label><input type="radio" name="q6" value="Cu" required> Cu</label>
      </div>
    </div>
    
    <div class="question">
      <h3>Question 7: Who painted the Mona Lisa?</h3>
      <div class="options">
        <label><input type="radio" name="q7" value="Vincent van Gogh" required> Vincent van Gogh</label>
        <label><input type="radio" name="q7" value="Pablo Picasso" required> Pablo Picasso</label>
        <label><input type="radio" name="q7" value="Leonardo da Vinci" required> Leonardo da Vinci</label>
        <label><input type="radio" name="q7" value="Michelangelo" required> Michelangelo</label>
      </div>
    </div>
    
    <div class="question">
      <h3>Question 8: What is the world's tallest mountain?</h3>
      <div class="options">
        <label><input type="radio" name="q8" value="Mount Everest" required> Mount Everest</label>
        <label><input type="radio" name="q8" value="K2" required> K2</label>
        <label><input type="radio" name="q8" value="Kangchenjunga" required> Kangchenjunga</label>
        <label><input type="radio" name="q8" value="Makalu" required> Makalu</label>
      </div>
    </div>
    
    <div class="question">
      <h3>Question 9: Who discovered penicillin?</h3>
      <div class="options">
        <label><input type="radio" name="q9" value="Alexander Fleming" required> Alexander Fleming</label>
        <label><input type="radio" name="q9" value="Marie Curie" required> Marie Curie</label>
        <label><input type="radio" name="q9" value="Albert Einstein" required> Albert Einstein</label>
        <label><input type="radio" name="q9" value="Isaac Newton" required> Isaac Newton</label>
      </div>
    </div>
    
    <div class="question">
      <h3>Question 10: Which country is home to the kangaroo?</h3>
      <div class="options">
        <label><input type="radio" name="q10" value="Australia" required> Australia</label>
        <label><input type="radio" name="q10" value="Canada" required> Canada</label>
        <label><input type="radio" name="q10" value="Brazil" required> Brazil</label>
        <label><input type="radio" name="q10" value="South Africa" required> South Africa</label>
      </div>
    </div>
    
    <div class="submit-btn">
      <input type="submit" value="Submit" name="submit">
    </div>
  </form>
</body>
</html>

<?php 

    $con = mysqli_connect("localhost" , "root" , "" , "quiz");
    if($con)
    {
        if(isset($_REQUEST['submit']))
        {
          $q1 = $_REQUEST['q1'];
          $q2 = $_REQUEST['q2'];
          $q3 = $_REQUEST['q3'];
          $q4 = $_REQUEST['q4'];
          $q5 = $_REQUEST['q5'];
          $q6 = $_REQUEST['q6'];
          $q7 = $_REQUEST['q7'];
          $q8 = $_REQUEST['q8'];
          $q9 = $_REQUEST['q9'];
          $q10 = $_REQUEST['q10'];

          $arr = [$q1 , $q2 , $q3 , $q4 , $q5 , $q6 , $q7 , $q8 , $q9 , $q10];
          $sc=0;
          for($i=1;$i<=10;$i++)
          {
            $sql = "select ans from mcq where id = '$i'";
            $res = mysqli_query($con,$sql);
            $data = mysqli_fetch_assoc($res);
            if($data['ans'] == $arr[$i-1])
            {
              $sc++;
            }
          }
          echo "<script>alert('your score is $sc');</script>";
        } 
    }

?>