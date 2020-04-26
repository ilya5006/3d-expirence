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
    console.log(figures);

    figures.forEach((figure) =>
    {
        console.log(figure.image);
        const figureImage = URL.createObjectURL(b64toBlob(figure.image));

        figuresDiv.insertAdjacentHTML('beforeEnd',
        `
        <div class="figure">
            <a href="/figure.php?id_figure=${figure.id_figure}" class="figure_image_sepcs_wrapper">
                <div class="figure_image" style="background-image: url(${figureImage})"></div>
            
                <div class="figure_specs">
                    <p>Характеристики</p>
                    <p>Характеристики</p>
                    <p>Характеристики</p>
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
        </div>
        `);
    });
});