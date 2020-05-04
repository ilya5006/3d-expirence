const idFigure = parseInt(window.location.href.split('?id_figure=')[1]);

console.log(idFigure);

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