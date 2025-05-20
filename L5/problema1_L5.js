// Funcția care inversează un array
function inverseazaArray(arr) {
    // Metoda 1: Folosind reverse() nativ din JavaScript
    // return arr.reverse();
    
    // Metoda 2: Implementare manuală a inversării
    let rezultat = [];
    for (let i = arr.length - 1; i >= 0; i--) {
        rezultat.push(arr[i]);
    }
    return rezultat;
}

// Array-ul inițial
const arrayInitial = [0, 1, 2, 3, 4, 5];

// Inversarea array-ului
const arrayInversat = inverseazaArray(arrayInitial);

// Afișarea rezultatelor în pagină
document.getElementById('result').innerHTML = `
    <p><strong>Array inițial:</strong> [${arrayInitial.join(', ')}]</p>
    <p><strong>Array inversat:</strong> [${arrayInversat.join(', ')}]</p>
`;

// Afișarea rezultatelor și în consolă pentru debugging
console.log('Array inițial:', arrayInitial);
console.log('Array inversat:', arrayInversat);