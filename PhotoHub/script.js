// Prompt the user for their name
let userName = prompt("Please enter your name:");

// Check if the user entered a name
if (userName !== null && userName !== "") {
    alert("Hello, " + userName + " welcome to PhotoHub");
} else {
    alert("You did not enter a name. Please try again.");
}