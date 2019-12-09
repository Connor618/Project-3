var getDwarf = function() {
    var request = new XMLHttpRequest();
    request.open("GET", "http://www.dnd5eapi.co/api/races/1",true );
    
    request.onload = function() {
        var data = JSON.parse(this.response);
        var name = data.name;
        var ability_bonuses = data.ability_bonuses;
        var speed = data.speed;
        var alignment = data.alignment;
        document.getElementById('raceName').innerHTML = name;
        document.getElementById('strength').innerHTML = ability_bonuses[0];
        document.getElementById('dexterity').innerHTML = ability_bonuses[1];
        document.getElementById('constituion').innerHTML = ability_bonuses[2];
        document.getElementById('intelligence').innerHTML = ability_bonuses[3];
        document.getElementById('wisdom').innerHTML = ability_bonuses[4];
        document.getElementById('charisma').innerHTML = ability_bonuses[5];
        document.getElementById('speed').innerHTML = speed;
        document.getElementById('alignment').innerHTML = alignment;
 };    
request.send();
}
var getElf = function() {
    var request = new XMLHttpRequest();
    request.open("GET", "http://www.dnd5eapi.co/api/races/2",true );
    
    request.onload = function() {
        var data = JSON.parse(this.response);
        var name = data.name;
        var ability_bonuses = data.ability_bonuses;
        var speed = data.speed;
        var alignment = data.alignment;
        document.getElementById('raceName').innerHTML = name;
        document.getElementById('strength').innerHTML = ability_bonuses[0];
        document.getElementById('dexterity').innerHTML = ability_bonuses[1];
        document.getElementById('constituion').innerHTML = ability_bonuses[2];
        document.getElementById('intelligence').innerHTML = ability_bonuses[3];
        document.getElementById('wisdom').innerHTML = ability_bonuses[4];
        document.getElementById('charisma').innerHTML = ability_bonuses[5];
        document.getElementById('speed').innerHTML = speed;
        document.getElementById('alignment').innerHTML = alignment;
 };    
request.send();
}
var getHalfling = function() {
    var request = new XMLHttpRequest();
    request.open("GET", "http://www.dnd5eapi.co/api/races/3",true );
    
    request.onload = function() {
        var data = JSON.parse(this.response);
        var name = data.name;
        var ability_bonuses = data.ability_bonuses;
        var speed = data.speed;
        var alignment = data.alignment;
        document.getElementById('raceName').innerHTML = name;
        document.getElementById('strength').innerHTML = ability_bonuses[0];
        document.getElementById('dexterity').innerHTML = ability_bonuses[1];
        document.getElementById('constituion').innerHTML = ability_bonuses[2];
        document.getElementById('intelligence').innerHTML = ability_bonuses[3];
        document.getElementById('wisdom').innerHTML = ability_bonuses[4];
        document.getElementById('charisma').innerHTML = ability_bonuses[5];
        document.getElementById('speed').innerHTML = speed;
        document.getElementById('alignment').innerHTML = alignment;
 };    
request.send();
}
var getHuman = function() {
    var request = new XMLHttpRequest();
    request.open("GET", "http://www.dnd5eapi.co/api/races/4",true );
    
    request.onload = function() {
        var data = JSON.parse(this.response);
        var name = data.name;
        var ability_bonuses = data.ability_bonuses;
        var speed = data.speed;
        var alignment = data.alignment;
        document.getElementById('raceName').innerHTML = name;
        document.getElementById('strength').innerHTML = ability_bonuses[0];
        document.getElementById('dexterity').innerHTML = ability_bonuses[1];
        document.getElementById('constituion').innerHTML = ability_bonuses[2];
        document.getElementById('intelligence').innerHTML = ability_bonuses[3];
        document.getElementById('wisdom').innerHTML = ability_bonuses[4];
        document.getElementById('charisma').innerHTML = ability_bonuses[5];
        document.getElementById('speed').innerHTML = speed;
        document.getElementById('alignment').innerHTML = alignment;
 };    
request.send();
}
var getCleric = function() {
    var request = new XMLHttpRequest();
    request.open("GET", "http://www.dnd5eapi.co/api/classes/3",true );
    
    request.onload = function() {
        var data = JSON.parse(this.response);
        var name = data.name;
        var hit_die = data.hit_die;
        document.getElementById('className').innerHTML = name;
        document.getElementById('hit_die').innerHTML = hit_die;
 };    
request.send();
}
var getWizard = function() {
    var request = new XMLHttpRequest();
    request.open("GET", "http://www.dnd5eapi.co/api/classes/12",true );
    
    request.onload = function() {
        var data = JSON.parse(this.response);
        var name = data.name;
        var hit_die = data.hit_die;
        document.getElementById('className').innerHTML = name;
        document.getElementById('hit_die').innerHTML = hit_die;
 };    
request.send();
}
var getFighter = function() {
    var request = new XMLHttpRequest();
    request.open("GET", "http://www.dnd5eapi.co/api/classes/5",true );
    
    request.onload = function() {
        var data = JSON.parse(this.response);
        var name = data.name;
        var hit_die = data.hit_die;
        document.getElementById('className').innerHTML = name;
        document.getElementById('hit_die').innerHTML = hit_die;
 };    
request.send();
}
var getRogue = function() {
    var request = new XMLHttpRequest();
    request.open("GET", "http://www.dnd5eapi.co/api/classes/9",true );
    
    request.onload = function() {
        var data = JSON.parse(this.response);
        var name = data.name;
        var hit_die = data.hit_die;
        document.getElementById('className').innerHTML = name;
        document.getElementById('hit_die').innerHTML = hit_die;
 };    
request.send();
}