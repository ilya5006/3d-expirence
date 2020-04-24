const signupButton = document.querySelector('form button');
const loginInput = document.querySelector('#login');
const passwordInput = document.querySelector('#password');
const passwordRepeatInput = document.querySelector('#password_repeat');
const emailInput = document.querySelector('#email');

signupButton.addEventListener('click', (event) =>
{
    event.preventDefault();

    let login = loginInput.value;
    let password = passwordInput.value;
    let passwordRepeat = passwordRepeatInput.value;
    let email = emailInput.value;

    if (password == passwordRepeat)
    {
        fetch(`/model/php/signup.php?login=${login}&password=${password}&email=${email}`)
        .then((res) =>
        {
            return res.text();
        })
        .then((message) =>
        {
            switch(message)
            {
                case '0':
                    new Message('Регистрация не удалась, попробуйте ещё раз').showMessage();
                    break;
                case '1':
                    window.location.href = '/index.php';
                    break;
            }
        });
    }
    else
    {
        new Messanger('Пароли не совпадают').showMessage();
    }
});