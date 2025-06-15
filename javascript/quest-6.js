// Usually when you buy something, you're asked whether your credit card number, phone number or answer to your most secret question is still correct. However, since someone could look over your shoulder, you don't want that shown on your screen. Instead, we mask it.

// Your task is to write a function maskify, which changes all but the last four characters into '#'.

// Examples (input --> output):
// "4556364607935616" --> "############5616"
//      "64607935616" -->      "#######5616"
//                "1" -->                "1"
//                 "" -->                 ""

// // "What was the name of your first pet?"
// "Skippy" --> "##ippy"
// "Nananananananananananananananana Batman!" --> "####################################man!"

// return masked string
function maskify(cc = "") {
  if (cc.length < 5) return cc;

  let limitChar = cc.length - 4;
  let textStart = limitChar;
  let text = "";
  for (let i = 0; i < limitChar; i++) text += "#";
  for (let i = 0; i < cc.length - limitChar; i++) {
    text += cc.at(textStart);
    textStart += 1;
  }

  return text;
}

function maskifyOtherPeople(cc) {
  return cc.slice(-4).padStart(cc.length, "#");
}

console.log(maskifyOtherPeople("Nananananananananananananananana Batman!"));
