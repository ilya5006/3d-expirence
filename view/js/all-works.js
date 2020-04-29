const figuresDiv = document.querySelector('#figures');

const idUserAllWorks = parseInt(window.location.href.split('id_user=')[1]);

let fetchURLAllWorks = '/model/php/get-user-figures.php';

if (idUserAllWorks) fetchURLAllWorks += '?id_user=' + idUserAllWorks;

fetch(fetchURLAllWorks)
.then((res) =>
{
    return res.json();
})
.then((figures) =>
{
    figures.forEach((figure) =>
    {
        const figureImage = URL.createObjectURL(b64toBlob(figure.image));

        const figureDiv = document.createElement('div');
        figureDiv.classList.add('figure');
        
        figureDiv.innerHTML =
        `
        <a href="/figure.php?id_figure=${figure.id_figure}" class="figure_image_sepcs_wrapper">
            <div class="figure_image" style="background-image: url(${figureImage})"></div>
        
            <div class="figure_specs">
                <p>Пластик - ${figure.plastic}</p>
                <p>Время печати - ${figure.print_time}</p>
                <p>Заполнение - ${figure.filling_out}</p>
            </div>
        </a>

        <a href="/figure.php?id_figure=${figure.id_figure}" class="figure_name">${figure.name}</a>

        <div class="figure_rating">
            <div class="rating_star gold_rating_star"></div>
            <div class="rating_star gold_rating_star"></div>
            <div class="rating_star gold_rating_star"></div>
            <div class="rating_star gold_rating_star"></div>
            <div class="rating_star gold_rating_star"></div>
        </div>
        `;

        const figureRatingDiv = figureDiv.querySelector('.figure_rating');

        new Rating(figureRatingDiv, figure.grade);

        figuresDiv.insertAdjacentElement('beforeEnd', figureDiv);
    });
});