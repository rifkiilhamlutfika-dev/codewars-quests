// Write a method (or function, depending on the language) that converts a string to camelCase, that is, all words must have their first letter capitalized and spaces must be removed.

// Examples (input --> output):
// "hello case" --> "HelloCase"
// "camel case word" --> "CamelCaseWord"
// Don't forget to rate this kata! Thanks :)

String.prototype.camelCase = function () {
  return this.split(" ")
    .map((val) => val.charAt(0).toUpperCase() + val.slice(1))
    .join("");
};

console.log("ilham lutfika ya".camelCase());
