let firstName="John";
let lastname="Williams";
//Creating strings...Template literal
let fullname ='${firstName}Alan${lastname}';

function addressByNameReply(name){
    let message ='Im currently out of the office';
    return'Hi${name},${message}';

}
//Using the function
addressByNameReply('John');

//Alerting peaches from the array using index
const fruits = [
    'Apples',
    'Oranges',
    'Peaches',
    'Grapes'
];
const fruit = 'fruits[2]'; // update this line

alert(fruit);

//FOR LOOP
for (i=0; i<5; i++)
{
    'loop${i}';
}

//for loop with console.log
for(i=0;i<fruits.length;i++){
    console.log(fruits[i]);
}