  <head>
           <meta charset="utf-8">
                <title>Dungeons and Dragons</title>
                <h1>Dungeons and Dragons</h1>
                <link type="text/css" rel="stylesheet" href="styles/mystyles.css" media="screen">
       </head>
       <div id=banner>
<?php
    if($_COOKIE['race'] == 'dwarf') {
        echo '<script type="text/javascript">';
        echo '$(document).ready(getDwarf(){});';
        echo '</script>';
    } else if($_COOKIE['race'] == 'elf') {
        echo '<script type="text/javascript">';
        echo '$(document).ready(getElf(){});';
        echo '</script>';
    } else if($_COOKIE['race'] == 'halfling') {
        echo '<script type="text/javascript">';
        echo '$(document).ready(getHalfling(){});';
        echo '</script>';
    } else if($_COOKIE['race'] == 'human') {
        echo '<script type="text/javascript">';
        echo '$(document).ready(getHuman(){});';
        echo '</script>';
    }
    if($_COOKIE['class'] == 'cleric') {
        echo '<script type="text/javascript">';
        echo '$(document).ready(getCleric(){});';
        echo '</script>';
    } else if($_COOKIE['class'] == 'wizard') {
        echo '<script type="text/javascript">';
        echo '$(document).ready(getElf(){});';
        echo '</script>';
    } else if($_COOKIE['class'] == 'fighter') {
        echo '<script type="text/javascript">';
        echo '$(document).ready(getHalfling(){});';
        echo '</script>';
    } else if($_COOKIE['class'] == 'rogue') {
        echo '<script type="text/javascript">';
        echo '$(document).ready(getRogue(){});';
        echo '</script>';
    }
?>
<html>
    <body>
        <table>
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
        <body id='alignment'>
        <table>
            <tr>
                <td id='classNameLabel'>Class Name</td >
                <td id='hitDieLabel'>Hit Die</td >
            </tr>
            <tr>
                <td id='className'> </td >
                <td id='hit_die'> </td >
            </tr>
        </table>
</html>