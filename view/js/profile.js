idUser = parseInt(window.location.href.split('?id_user=')[1]);
let fetchFavouritesURL = '/model/php/get-favourite-works.php';

if (idUser)
{
    fetchFavouritesURL += (`?id_user=${idUser}`);
    document.querySelector('#user_all_works').href += '?id_user=' + idUser;
}

const favouriteWorks = document.querySelector('#works');

fetch(fetchFavouritesURL)
.then((res) =>
{
    return res.json();
})
.then((works) =>
{
    console.log(works);
    works.forEach((work) =>
    {
        console.log(work);

        const workDiv = document.createElement('div');

        const image = URL.createObjectURL(b64toBlob(work.image));

        workDiv.innerHTML =
        `
        <div class="user_work">
            <a href="/figure.php?id_figure=${work.id_figure}" style="background-image: url(${image})" class="user_work_image"></a>

            <a href="/figure.php?id_figure=${work.id_figure}" class="user_work_name">${work.name}</a>

            <div class="work_rating">
                <div class="rating_star gold_rating_star"></div>
                <div class="rating_star gold_rating_star"></div>
                <div class="rating_star gold_rating_star"></div>
                <div class="rating_star gray_rating_star"></div>
                <div class="rating_star gray_rating_star"></div>
            </div>
        </div>
        `;

        new Rating(workDiv.querySelector('.work_rating'), work.grade);

        favouriteWorks.insertAdjacentElement('beforeEnd', workDiv);
    });
});
