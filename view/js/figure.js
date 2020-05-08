const figureRatingDiv = document.querySelector('#figure_rating');
const reviewsDiv = document.querySelector('#reviews'); 

let idFigure = parseInt(window.location.href.split('?id_figure=')[1]);

fetch('/model/php/get-figure-info.php?id_figure=' + idFigure)
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
    new Rating(
        document.querySelector('#figure_rating'),
        figureInfo.grade,
        true,
        (event) =>
        {
            const grade = event.target.dataset.starnumber;

            fetch(`/model/php/set-figure-grade.php?grade=${grade}&id_figure=${idFigure}`)
            .then((res) =>
            {
                return res.text();
            })
            .then((res) =>
            {
                let message;

                switch(res)
                {
                    case '0':
                        message = 'Вы не авторизированы!';
                        break;
                    case '1':
                        message = 'Спасибо за отзыв!';
                        break;
                }

                new Messanger(message).showMessage();
            });

        }
    );

    // ОБРАБОТКА ОТЗЫВОВ
    figureInfo.reviews.forEach((review, index) =>
    {
        if (index > 4) throw BreakException;

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

    document.querySelector('#all_reviews').href += ('?id_figure=' + idFigure);
    document.querySelector('#write_review').href += ('?id_figure=' + idFigure);
});