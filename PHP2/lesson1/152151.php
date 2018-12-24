
<script>
let a = 'dfajdf';
let b = 'sdfagda';

const post = {
  name: 'Peter',
  age: 'Simson'
};


const options = {
       method: 'POST',
       body: 'foo=bar&lorem=ipsum',
       headers:{
           "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
       };

fetch(`/PHP2/lesson1/152151.php`, options)
    .then(response => {return response.text()})
    .catch(error => alert(error));
console.log('hello');
</script>


<?php
var_dump($_POST);
?>

