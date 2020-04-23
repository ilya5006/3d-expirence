const loginButton = document.querySelector('form button');
const loginInput = document.querySelector('#login');
const passwordInput = document.querySelector('#password');

loginButton.addEventListener('click', (event) =>
{
    event.preventDefault();
    
    const login = loginInput.value;
    const password = passwordInput.value;

    fetch(`/model/php/login.php?login=${login}&password=${password}`)
    .then((res) =>
    {
        return res.text();
    })
    .then((message) =>
    {
        switch (message)
        {
            case '0':
                new Messanger('Вы ввели неверные данные').showMessage();
                break;
            case '1':
                window.location.href = '/index.php';
                break;
        }
    });
});