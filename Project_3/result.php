<<<<<<< HEAD
  <head>
           <meta charset="utf-8">
                <title>Dungeons and Dragons</title>
                <h1>Dungeons and Dragons</h1>
                <link type="text/css" rel="stylesheet" href="styles/mystyles.css" media="screen">
       </head>
<?php
    if($_COOKIE['race'] == 'Dwarf') {
        echo '<span style="font-size:1.05em;color:white;text-align:center;">Your chosen race is Dwarf! Click the Dwarf button below to see your stats and some information about your chosen race! You can also click a different button to view the other options!';
    } else if($_COOKIE['race'] == 'Elf') {
        echo '<span style="font-size:1.05em;color:white;text-align:center;">Your chosen race is Elf! Click the Elf button below to see your stats and some information about your chosen race! You can also click a different button to view the other options!';
    } else if($_COOKIE['race'] == 'Halfling') {
        echo '<span style="font-size:1.05em;color:white;text-align:center;">Your chosen race is Halfling! Click the Halfling button below to see your stats and some information about your chosen race! You can also click a different button to view the other options!';
    } else if($_COOKIE['race'] == 'Human') {
        echo '<span style="font-size:1.05em;color:white;text-align:center;">Your chosen race is Human! Click the Human button below to see your stats and some information about your chosen race! You can also click a different button to view the other options!';
    }
    ?>
    <br><br>
    <?php
    if($_COOKIE['class'] == 'Cleric') {
        echo 'Your chosen class is Cleric! Click the Cleric button below to see your hit die! You can also click a different button to view the other options!';
    } else if($_COOKIE['class'] == 'Wizard') {
        echo 'Your chosen class is Wizard! Click the Wizard button below to see your hit die! You can also click a different button to view the other options!';
    } else if($_COOKIE['class'] == 'Fighter') {
        echo 'Your chosen class is Fighter! Click the Wizard button below to see your hit die! You can also click a different button to view the other options!';
    } else if($_COOKIE['class'] == 'Rogue') {
        echo 'Your chosen class is Rogue! Click the Rogue button below to see your hit die! You can also click a different button to view the other options!';
    }
?>
       <div id=banner>
        <h2 style="color:black">Press the button corresponding to your chosen race:</h2>
            <button onclick="getDwarf()">Dwarf</button>
            <button onclick="getElf()">Elf</button>
            <button onclick="getHalfling()">Halfling</button>
            <button onclick="getHuman()">Human</button>
            <br>
        <h2 style="color:black">Press one of these buttons to pick your class:</h2>
            <button onclick="getCleric()">Cleric</button>
            <button onclick="getWizard()">Wizard</button>
            <button onclick="getFighter()">Fighter</button>
            <button onclick="getRogue()">Rogue</button>
            <br><br><br>
<html>
    <body>
        <table align="center">
            <tr>
	            <td id='raceNameLabel'>Race Name</td >
                <td id='strengthLabel'>Strength</td >
                <td id='dexterityLabel'>Dexterity</td >
                <td id='constitutionLabel'>Constitution</td >
                <td id='intelligenceLabel'>Intelligence</td >
                <td id='wisdomLabel'>Wisdom</td >
                <td id='charismaLabel'>Charisma</td >
                <td id='speedLabel'>Speed</td >
            </tr >
            <tr>
	            <td id='raceName'> </td >
                <td id='strength'> </td >
                <td id='dexterity'> </td >
                <td id='constitution'> </td >
                <td id='intelligence'> </td >
                <td id='wisdom'> </td >
                <td id='charisma'> </td >
                <td id='speed'> </td >
            </tr >
        </table>
        <p id='alignment' style="color:black"></p>
        <p id='age' style="color:black"></p>
        <p id='size' style="color:black"></p>
        <table align="center">
            <tr>
                <td id='classNameLabel'>Class Name</td >
                <td id='hitDieLabel'>Hit Die</td >
            </tr>
            <tr>
                <td id='className'> </td >
                <td id='hit_die'> </td >
            </tr>
            <br><br>
        </table>
        <p style="color:black;font-size:0.75em;text-align:left;">Background image courtesy of Dungeons and Dragons: Warriors of Waterdeep,</p>
        <p style="color:black;font-size:0.75em;text-align:left;">no copyright infringement is intended.</p>
        <script src ="getAPI.js"> </script>
</html>
=======
<div id=banner>
  <head>
           <meta charset="utf-8">
                <title>Dungeons and Dragons</title>
                <h1>Dungeons and Dragons</h1>
                <link type="text/css" rel="stylesheet" href="styles/mystyles.css" media="screen">
       </head>
       

<?php 
if(!isset($_COOKIE['race']) || !isset($_COOKIE['class'])){
    echo '<p>Persistent favShow cookie not found </p>';
}
else {
    echo '<p>Your character is a(n) ' . $_COOKIE['race'] . ' ' . $_COOKIE['class'] . '.</p>';
}

?>
</div>
>>>>>>> e34703486fc9e0a23557d62ce1a183339842da5e
