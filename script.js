let calcForm = document.querySelector('#calcForm')
let hr = document.querySelector('.hr')
let amountToBePaid = document.querySelector('.amountToBePaid')
let container = document.querySelector('.container')

calcForm.onsubmit = async (e) => {
    e.preventDefault();

    let response = await fetch('calc.php', {
        method: 'POST',
        body: new FormData(calcForm),
    });

    let result = await response.json();

    document.getElementById('result').innerHTML = '&#8381 ' + result.sum

    hr.style.display = 'block'
    amountToBePaid.style.display = 'block'
    container.style.height = '750px'
};

