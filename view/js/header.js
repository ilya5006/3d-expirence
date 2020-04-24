const avatarImg = document.querySelector('#profile_header img');
const usernameP = document.querySelector('#profile_header p');

fetch('/model/php/get-user-info-header.php')
.then((res) =>
{
    return res.text();
})
.then((userInfo) =>
{
    const userInfoObject = JSON.parse(userInfo);

    avatarImg.src = URL.createObjectURL(b64toBlob(userInfoObject.avatar));
    usernameP.textContent = userInfoObject.login;
})



// fetch('/model/php/get-user-avatar.php')
// .then((res) =>
// {
//     return res.blob();
// })
// .then((avatar) =>
// {
//     avatarImg.src = URL.createObjectURL(avatar);
// })