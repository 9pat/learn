// EXAMINE The Document Object 
/*
// console.dir(document);
console.log(document.domain);
console.log(document.URL);
console.log(document.title);

document.title = 123;
console.log(document.title);
console.log(document.head);
console.log(document.body);
console.log(document.all);
console.log(document.all[10]);

//document.all[10].textContent = 'Hello';

console.log(document.forms[0]);
console.log(document.links);
*/

// Get Element by ID
//console.log(document.getElementById('header-title'));

//var headerTitle = document.getElementById('header-title');
//var header = document.getElementById('main-header');

//console.log(headerTitle);
//headerTitle.textContent = 'hello';
//headerTitle.innerText = 'GoodBye';
//console.log(headerTitle.innerText);
//headerTitle.innerHTML = '<h3> Hi !! </h3>';
//header.style.borderBottom = 'solid 3px black';

/*
// GET ELEMENT BY CLASSNAME
var items = document.getElementsByClassName('list-group-item');
console.log(items);
console.log(items[1]);
items[1].textContent = 'hello, too';
items[1].style.fontWeight = 'bold';
items[1].style.backgroundColor = 'yellow';

for(i=0 ; i < items.length ; i++){
	items[i].style.backgroundColor = '#f4f4f4';
}
*/

/*
// GET ELEMENT BY TAG NAME
var li = document.getElementsByTagName('li');
console.log(li);
console.log(li[1]);
li[1].textContent = 'hello, too';
li[1].style.fontWeight = 'bold';
li[1].style.backgroundColor = 'yellow';

for(i=0 ; i < li.length ; i++){
	li[i].style.backgroundColor = '#f4f4f4';
}
*/

/*
// QUERY SELECTOR - any css selector 

var header = document.querySelector('#main-header');
header.style.borderBottom = 'solid 4px #ccc';

var input = document.querySelector('input');
input.value = 'hello patty';

var submit = document.querySelector('input[type="submit"]');
submit.value = 'SEND di';

var item = document.querySelector('.list-group-item');
item.style.color = 'green';

var lastItem = document.querySelector('.list-group-item:last-child');
lastItem.style.color = 'blue';

var secondItem = document.querySelector('.list-group-item:nth-child(2)');
secondItem.style.color = 'coral';
*/

/*
// QUERY SELECTOR ALL 

var title = document.querySelectorAll('.title');

console.log(title);
title[0].textContent = 'hello';

var odd = document.querySelectorAll('li:nth-child(odd)');
var even = document.querySelectorAll('li:nth-child(even)');

for(i=0; i<odd.length; i++){
	odd[i].style.backgroundColor = '#f4f4f4';
	even[i].style.backgroundColor = '#ccc';
}
*/
