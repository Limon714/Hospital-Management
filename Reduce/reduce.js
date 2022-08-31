const products = [
    {
        name: 'Pen',
        amount: 5,
        price:  50
    },
    
    {
        name: 'Paper',
        amount: 2,
        price:  100
    },
    
    {
        name: ' Book',
        amount: 10,
        price: 300 
    }
]
let sum = products.reduce((prev, curr) => {
    return prev + curr.amount * curr.price
}, 20);
 
console.log(sum); 
