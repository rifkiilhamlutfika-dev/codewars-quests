// You are going to be given a non-empty string. Your job is to return the middle character(s) of the string.

// If the string's length is odd, return the middle character.
// If the string's length is even, return the middle 2 characters.
// Examples:
// "test" --> "es"
// "testing" --> "t"
// "middle" --> "dd"
// "A" --> "A"

function getMiddle(s = "") {
  if (s.length % 2 == 0) {
    let text = s.split("");
    let indexStartSelect = s.length / 2;
    return text[indexStartSelect - 1] + text[indexStartSelect];
  } else {
    let text = s.split("");
    let indexStartSelect = Math.floor(s.length / 2);
    return text[indexStartSelect];
  }
}

console.log(getMiddle("middle"));
