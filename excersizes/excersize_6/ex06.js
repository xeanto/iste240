let __color;

function jsStyle() {
  // function to change style
  // Change the color and the size of the font
  // in the paragraph with id='text'
  document.getElementById("text").style.color != "rgb(221, 120, 59)" ?
    (document.getElementById("text").style.color = "rgb(221, 120, 59)") :
    (document.getElementById("text").style.color = "rgb(77, 196, 255)");
  console.log(document.getElementById("styleMe").textContent);
  document.getElementById("styleMe").textContent.includes("Change Style") ?
    (document.getElementById("styleMe").textContent = "Revert Style") :
    (document.getElementById("styleMe").textContent = "Change Style");
}

function jsMove() {
  const text = document.getElementById("text");
  text.style.position = "relative";
  text.style.left == "" ?
  (text.style.left = "10px") :
  (text.style.left = parseInt(text.style.left) + 10 + 'px');
}

function howMany() {
  const base = document.getElementById("regForm");
  let count = base.getElementsByTagName("input");
  console.log(count.length + " input elements");
  var counter = 0;
  for (x of count) {
    x.type == "text" ?
    counter += 1 :
    counter=counter;
  }
  console.log(counter);
}

function jsReset() {
  document.getElementById("text").style.left = 0;
}

function getFormValues() {
  // function to send first and last names
  // to an 'alert' message
  const x = document.getElementById("fname").value;
  const y = document.getElementById("lname").value;
  alert(x + " " + y);
}

function getOptions() {
  // function to display the number of options in an alert()
  let alrt = "";
  const children = document.getElementById("mySelect").children;
  for (let x = 0; x <= children.length - 1; x++) {
    alrt += x + 1 + ". " + children[x].textContent + "\n";
  }
  alert(alrt);
}

function colorChanger() {
  let sel = document.getElementById('mySelect');
  let color = sel.value;
  document.getElementById("c").style.backgroundColor = color;
  __color = color;
}

function excelsior() {
  // on window load, grab the required element and add the event listeners, then define and assign the functions
  const p = document.getElementById("rb");
  p.addEventListener("mouseover", (event) => {
    mOver(event);
  });
  p.addEventListener("mouseout", (event) => {
    mExit(event);
  });
  let x = p.style.color;

  //create a function that is called on the mouseover that turns the text red
  function mOver(event) {
    event.target.style.color = __color;
  }
  //create a function that is called on the mouseout that turns the text black
  function mExit(event) {
    event.target.style.color = x;
  }
}

// code two functions multiply and divide functions here
//hints:
//when you get a value out of an input, you are getting a string.  To get a number, use parseInt()
//When you want to output something into the HTML you can use .innerHTML - like document.getElementById("result").innerHTML= "fred";
function divide() {
  const num = parseInt(document.getElementById("firstoperand").value);
  const den = parseInt(document.getElementById("secondoperand").value);
  const ans = num / den;
  let ansEl = document.createTextNode(ans);
  document.getElementById("result").appendChild(ansEl);
}

function multiply() {
  const one = parseInt(document.getElementById("firstoperand").value);
  const two = parseInt(document.getElementById("secondoperand").value);
  const ans = one * two;
  let ansEl = document.createTextNode(ans);
  document.getElementById("result").appendChild(ansEl);
}