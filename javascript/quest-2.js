// This time no story, no theory. The examples below show you how to write function accum:

// Examples:
// accum("abcd") -> "A-Bb-Ccc-Dddd"
// accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
// accum("cwAt") -> "C-Ww-Aaa-Tttt"
// The parameter of accum is a string which includes only letters from a..z and A..Z.

function accum(s = "") {
  return s
    .toLocaleLowerCase()
    .split("")
    .map((val, idx) => {
      let text = "";
      for (let i = 0; i < idx + 1; i++) {
        if (i == 0) text += val.toUpperCase();
        else {
          text += val;
        }
      }
      return text;
    })
    .join("-");
}

console.log(accum("halo"));
