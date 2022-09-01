let select = ["Red", "Blue", "Blue", "Red", "White", "Blue"];
let find = select.reduce((prev, curr) => {

    if (prev[curr]) {
        prev[curr]++
    } else {
        prev[curr] = 1;
    }
    return prev;
},{});

console.log(find);