// JavaScript Document

var userLang = navigator.language || navigator.userLanguage;
var userLang_detected = userLang.toLowerCase();
if (userLang_detected != 'ru-ru' && userLang_detected != 'ru') {
    document.title = 'Example';
    document.getElementById('t1').innerHTML = 'Welcome!';
    document.getElementById('t2').innerHTML = 'All is running ;-)';
    document.getElementById('t3').innerHTML = 'Getting paths and convenient code output:';
    document.getElementById('t4').innerHTML = 'Working with classes:';
}
else {
    document.title = 'Шаблон';
    document.getElementById('t1').innerHTML = 'Привет!';
    document.getElementById('t2').innerHTML = 'Всё работает ;-)';
    document.getElementById('t3').innerHTML = 'Получение путей и удобный вывод кода:';
    document.getElementById('t4').innerHTML = 'Работа с классами:';
}