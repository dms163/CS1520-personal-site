<?php
$pageTitle = 'Projects';
include('header.html');
$array = array("http://www.panamb-1078.appspot.com/", "https://github.com/nkowdley/1632-Deliverable1", "https://github.com/MeSz/CS1632_Project2_CoffeeMakerQuestUnitTesting", "https://github.com/dms163/CS1632-Deliverable-3");
?>


<div id = "content">
    I have done many projects during my career here at the university. Because I am still in the process of getting the rest of my projects on github here are the some from my recent classes:
    <br>
    <br>
    <dl>
        <dt><a href="<?php echo $array[0] ?>">Panamb</a></dt>
        <dd>Panamb was a website my friends and I built. It features the ability to stream music which was a great challenge.</dd>
        <br>
        <dt><a href="<?php echo $array[1] ?>">CS1632 Deliverable1</a></dt>
        <dd>The first deliverable in CS1632 which was a project where we were supposed to hand test a program which takes a lot of time.</dd>
        <br>
        <dt><a href="<?php echo $array[2] ?>">CS1632 Deliverable2</a></dt>
        <dd>The second deliverable involved creating unit tests and doing automated testing using JUnit and Mockito. </dd>
        <br>
        <dt><a href="<?php echo $array[3] ?>">CS1632 Deliverable3</a></dt>
        <dd>The third deliverable which used selenium to test websites. We chose to test <a href="http://wikirby.com/wiki/Kirby_Wiki">Wikirby</a>.</dd>
    </dl>

</div>
</body>
