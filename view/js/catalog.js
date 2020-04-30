const figuresDiv = document.querySelector('#figures');

const idCategory = parseInt(window.location.href.split('?id_category=')[1]);

fetch('/model/php/get-figures-by-category.php?id_category=' + idCategory)
.then((res) =>
{
    return res.json();
})
.then((imageInfo) =>
{
    console.log(imageInfo);

    imageInfo.forEach((figure) =>
    {
        const figureDiv = document.createElement('div');
        figureDiv.classList.add('figure');
    
        const avatar = URL.createObjectURL(b64toBlob(figure.image));

        figureDiv.innerHTML = 
        `
        <a href="/figure.php?id_figure=${figure.id_figure}" class="figure_image_sepcs_wrapper">
            <div class="figure_image" style="background-image: url(${avatar})"></div>
        
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

        new Rating(
            figureDiv.querySelector('.figure_rating'),
            parseInt(figure.grade),
            false
        );

        figuresDiv.insertAdjacentElement('beforeEnd', figureDiv);
    })

    
});
