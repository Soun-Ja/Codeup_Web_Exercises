// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'red'; // TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
if (color == "red") {
	console.log("Red is the selected color.");
}else if (color =="orange") {
	console.log("Orange is the selected color.");
}else if (color == "yellow") {
	console.log("Yellow is the selected color.");
}else if (color == "green") {
	console.log("Green is the selected color.");
}else if (color == "blue") {
	console.log("Blue is the selected color.");
}

// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

if (color == "red") {
	console.log("The color is red like a ruby.");
}else if (color =="orange") {
	console.log("The color is orange like the fruit that has the same name.");
}else if (color == "yellow") {
	console.log("The color is yellow like the sun.");
}else if (color == "green") {
	console.log("The color is green like grass.");
}else if (color == "blue") {
	console.log("The color is blue like ocean water.");
}

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

if (color == "red") {
	console.log("The color is red like a ruby.");
}else if (color =="orange") {
	console.log("The color is orange like the fruit that has the same name.");
}else if (color == "yellow") {
	console.log("The color is yellow like the sun.");
}else if (color == "green") {
	console.log("The color is green like grass.");
}else if (color == "blue") {
	console.log("The color is blue like ocean water.");
}else {
	console.log("I do not know anything about that color.");
}

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.

 (color == favorite) ? console.log("The random color matches my favorite color") : console.log("The random color does not match my favorite color");




