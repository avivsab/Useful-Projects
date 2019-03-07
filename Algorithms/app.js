function fizzBuzz(num) {
    for (var i = 1; i <= num; i++) {
      if (i % 15 === 0) console.log('FizzBuzz');
      else if (i % 3 === 0) console.log('Fizz');
      else if (i % 5 === 0) console.log('Buzz');
      else console.log(i);
      document.getElementById('explain').innerHTML ='Fizz-buzz is example for efficiant way to write code with nested conditions.';
      document.getElementById('code').innerHTML = `
      function fizzBuzz(num) {
        for (var i = 1; i <= num; i++) {
          if (i % 15 === 0) console.log('FizzBuzz');
          else if (i % 3 === 0) console.log('Fizz');
          else if (i % 5 === 0) console.log('Buzz');
          else console.log(i);
      `
    }
   
  }
   
  function harmlessRansomNote(noteText, magazineText) {
    console.clear();
    var noteArr = noteText.split(' ');
    var magazineArr = magazineText.split(' ');
    var magazineObj = {};
    
    magazineArr.forEach(word => {
      if (!magazineObj[word]) magazineObj[word] = 0;
      magazineObj[word]++;
    });
    
    var noteIsPossible = true;
    noteArr.forEach(word => {
      if (magazineObj[word]) {
        magazineObj[word]--;
        if (magazineObj[word] < 0) noteIsPossible = false;
      }
      else noteIsPossible = false; 
    });
    
    console.log(noteIsPossible, ' True means all words in the note found in the paragraph, "false" means that not all the words found in the note');
    document.getElementById('explain').innerHTML = 'Harmless Random Note is an examle to search matching words from two sources.<br><br> You can learn from the algorithm about Binary search, Big O notation, Time complexity and from the code you can learn about forEach loop and the importance to avoid nested loops.'
    document.getElementById('code').innerHTML = `
    function harmlessRansomNote(noteText, magazineText) {
      console.clear();
      var noteArr = noteText.split(' ');
      var magazineArr = magazineText.split(' ');
      var magazineObj = {};
      
      magazineArr.forEach(word => {
        if (!magazineObj[word]) magazineObj[word] = 0;
        magazineObj[word]++;
      });
      
      var noteIsPossible = true;
      noteArr.forEach(word => {
        if (magazineObj[word]) {
          magazineObj[word]--;
          if (magazineObj[word] < 0) noteIsPossible = false;
        }
        else noteIsPossible = false; 
      });
      `
  }
  
  function isPalindrome(string) {
    string = string.toLowerCase();
    var charactersArr = string.split('');
    var validCharacters = 'abcdefghijklmnopqrstuvwxyz'.split('');
    
    var lettersArr = [];
    charactersArr.forEach(char => {
      if (validCharacters.indexOf(char) > -1) lettersArr.push(char);
    });
    
    console.log(lettersArr.join('') === lettersArr.reverse().join('')); console.log( `${lettersArr.join('')} is palindrom`);
    document.getElementById('explain').innerHTML = 'palindrome is a word you can read back and forword and it stays the same.<br><br> You can learn from the code how to solve complex problems easily using JS built-in methods.'
    document.getElementById('code').innerHTML = 'See source code in app.js and check the console';
  }
   
  // isPalindrome("Madam, I'm Adam");

  function caesarCipher(str,num) {
    console.clear();
    num = num % 26;
    var lowerCaseString = str.toLowerCase();
    var alphabet = 'abcdefghijklmnopqrstuvwxyz'.split('');
    var newString = '';
    
    for (var i = 0; i < lowerCaseString.length; i++) {
      var currentLetter = lowerCaseString[i];
      if (currentLetter === ' ') {
        newString += currentLetter;
        continue;
      }
      var currentIndex = alphabet.indexOf(currentLetter);
      var newIndex = currentIndex + num;
      if (newIndex > 25) newIndex = newIndex - 26;
      if (newIndex < 0) newIndex = 26 + newIndex;
      if (str[i] === str[i].toUpperCase()) {
        newString += alphabet[newIndex].toUpperCase();
      }
      else newString += alphabet[newIndex];
    };
    
    console.log(str , 'become ' + newString + ' when passing number ' + num + ' as parameter.');
    document.getElementById('explain').innerHTML = 'In Caesar Cipher, the number that pass as parameter to function change the letters in a string acording to that number, and another sring is creating in alphabetic order.<br><small>(See example in the console).</small> <br><br> You can learn how to solve problems by calculation and by using the modulus operator insted running new functions for edge cases. '
    document.getElementById('code').innerHTML = '';
  }

  function reverseWords(string) {
    var arrWords = string.split(' ');
    var reverseWordsArray = [];
 
  arrWords.forEach(word => {
    var reversWord = '';
    for (var i = word.length-1; i >= 0; i--) {
     reversWord += word[i]; 
     
    }
    reverseWordsArray.push(reversWord);

   
  });
  console.log(`${arrWords} become ${reverseWordsArray.join(' ')}`);
  document.getElementById('explain').innerHTML = 'The beautiful thing in the reverse word is the way using the For Loop that saves you from square thinking.';
  document.getElementById('code').innerHTML = '';
}; 

function reverseArray(arr) {
  for (var i = 0; i < arr.length / 2; i++) {
    console.log(arr);
    var tempVar = arr[i];
    arr[i] = arr[arr.length - 1 - i];
    arr[arr.length - 1 - i] = tempVar;
  }
  document.getElementById('explain').innerHTML = 'Reversing array teaching to manipulate an array using temp variable and iterating throw the same array.<br><small>See progress of the process in the console.</small>'
  document.getElementById('code').innerHTML = '';
  console.log(arr);
}

function meanMedianMode(array) {
  const message = document.getElementById('explain').innerHTML = 'Several tasks done with one call, array\'s meam, median, and max appirance check.<br>Planing the right functionality with functional programming and reusable code'
  return {
    mean: getMean(array),
    median: getMedian(array),
    mode: getMode(array),
    mesagge:  message,
    
  },
  document.getElementById('code').innerHTML = '';
}
 
function getMean(array) {
  var sum = 0;
  
  array.forEach(num => {
    sum += num;
  });
  
  var mean = sum / array.length;
  return mean;
}
 
function getMedian(array) {
  array.sort(function(a, b){return a-b});
  var median;
  
  if (array.length % 2 !== 0) {
    median = array[Math.floor(array.length / 2)];
  }
  else {
    var mid1 = array[(array.length / 2) - 1];
    var mid2 = array[array.length / 2];
    median = (mid1 + mid2) / 2;
  }
  
  return median;
}
 
function getMode(array) {
  var modeObj = {};
  
  // create modeObj
  array.forEach(num => {
    if (!modeObj[num]) modeObj[num] = 0;
    modeObj[num]++;
  });
  
  // create array of mode/s 
  var maxFrequency = 0;
  var modes = [];
  for (var num in modeObj) {
    if (modeObj[num] > maxFrequency) {
      modes = [num];
      maxFrequency = modeObj[num];
    }
    else if (modeObj[num] === maxFrequency) modes.push(num);
  }
  // if every value appears same amount of times 
  if (modes.length === Object.keys(modeObj).length) modes = [];
  return modes;
  
}

function twoSum(array, num) {
  const newArr = [];
  for (let i = 0; i < array.length; i++) {
   temp = array[i];
   for (let j = i+1; j < array.length; j++) {
     if (array[j]+temp === num) newArr.push([temp,array[j]]);
   }
  }
  console.log(newArr);
  document.getElementById('explain').innerHTML = 'The functionality of find pairs in array achive in the code but its not efficiant (Time complexcity O(n<sup>2</sup>).)';
  document.getElementById('code').innerHTML = '';
}
 
function twoSum2(numArray, sum) {
  var pairs = [];
  var hashTable = [];
 
  for (var i = 0; i < numArray.length; i++) {
    var currNum = numArray[i];
    var counterpart = sum - currNum;
    if (hashTable.indexOf(counterpart) !== -1) {
      pairs.push([ currNum, counterpart ]);
    }
    hashTable.push(currNum);
  }
  document.getElementById('explain').innerHTML = 'The functionality of find pairs in array achive in the code is efficiant (Time complexcity O(n).)';
  document.getElementById('code').innerHTML = '';
  console.log(pairs);
}
let multy = 1;
function factorial(num) { 
  if (num===1) {
    console.log(multy);
    document.getElementById('explain').innerHTML = 'First factorial represents code that uses 2 scopes (the global and the inner function scope) while the second factorial using only the  function\'s scope for the calculation.';
    return;
  }else{  
    multy = multy*(num);
    num--;
    factorial(num);
  }
  
}

function factorial2(num) {
  if (num===1) {
    return num;
  }else{
    return num * factorial2(num-1)
  }
}


function styleWithBootstrap() {
  document.addEventListener('DOMContentLoaded', function () {

    let btn = document.querySelectorAll("button")
    
    let i=0;
    for (var colorBtn of btn) {      
      if (i%2===0){
        colorBtn.className = "btn btn-primary";
      } else {
        colorBtn.className = "btn btn-success"   
      }
      i++;
    }
});
  
}
  styleWithBootstrap();
