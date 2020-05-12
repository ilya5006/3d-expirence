const userAvatarImg = document.querySelector('#user_avatar');
const userNameSpan = document.querySelector('#user_name span');
const userAddressSpan = document.querySelector('#user_address span');
const roleP = document.querySelector('#user_role');

let idUser = parseInt(window.location.href.split('id_user=')[1]);

let fetchURL = '/model/php/get-user-info.php';

if (idUser) fetchURL += '?id_user=' + idUser;

fetch(fetchURL)
.then((res) =>
{
    return res.json();
})
.then((userInfo) =>
{
    const avatar = URL.createObjectURL(b64toBlob(userInfo.avatar));
    userAvatarImg.style.backgroundImage = `url(${avatar})`;

    userNameSpan.textContent = userInfo.login;

    const address = userInfo.address ? userInfo.address : 'Отсутствует';
    userAddressSpan.textContent = address;

    roleP.textContent = userInfo.role;
});