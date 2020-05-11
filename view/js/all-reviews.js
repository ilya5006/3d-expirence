const idFigure = parseInt(window.location.href.split('?id_figure=')[1]);
const reviewsDiv = document.querySelector('#reviews'); 

fetch(`/model/php/get-figure-info.php?id_figure=${idFigure}`)
.then((res) =>
{
    return res.json();
})
.then((figureInfo) =>
{
    const figureImage = URL.createObjectURL(b64toBlob(figureInfo.image));

    // КАРТИНКА ФИГУРКИ
    document.querySelector('#figure_image').style.backgroundImage = `url(${figureImage})`;
    
    // ССЫЛКА НА АВТОРА
    document.querySelector('#figure_image_rating_author > a').href += ('?id_user=' + figureInfo.id_user);
    
    // НАЗВАНИЕ ФИГУРКИ
    document.querySelector('#figure_name').textContent = figureInfo.name;

    // ХАРАКТЕРИСТИКИ
    document.querySelector('#figure_specs').innerHTML =
    `
        <p>Пластик - ${figureInfo.plastic}</p>
        <p>Время печати - ${figureInfo.print_time}</p>
        <p>Заполнение - ${figureInfo.filling_out}</p>
    `;

    // РЕЙТИНГ ФИГУРКИ
    new Rating(document.querySelector('#figure_rating'), figureInfo.grade, true);
});

fetch(`/model/php/get-figure-reviews.php?id_figure=${idFigure}`)
.then((res) =>
{
    return res.json();
})
.then((reviews) =>
{
    console.log(reviews);

    reviews.forEach((review) =>
    {
        const reviewDiv = document.createElement('div');
        reviewDiv.classList.add('review');

        const userAvatar = URL.createObjectURL(b64toBlob(review.avatar));

        reviewDiv.innerHTML = 
        `
        <div class="review_user_info">
            <a href="/profile.php?id_user=${review.id_user}" class="user_avatar" style="background-image: url(${userAvatar})"></a>
            <div class="user_name_date_rating">
                <p><a href=""><span class="user_name">${review.login}</span></a> | <span class="user_date">${review.date}</span></p>
                <div id="user_rating">
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gray_rating_star"></div>
                    <div class="rating_star gray_rating_star"></div>
                </div>
            </div>
        </div>

        <p class="review_text">${review.text_review}</p>
        `;
        new Rating(reviewDiv.querySelector('#user_rating'), review.grade);

        reviewsDiv.insertAdjacentElement('beforeEnd', reviewDiv);
    });
});
