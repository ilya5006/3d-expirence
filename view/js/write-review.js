idFigure = parseInt(window.location.href.split('?id_figure=')[1]);

const sendReviewButton = document.querySelector('#review_fields input[type="submit"]');


sendReviewButton.addEventListener('click', (event) =>
{
    event.preventDefault();

    const textReview = document.querySelector('textarea[name="text_review"]').value;

    fetch(`/model/php/check-figure-grade.php?id_figure=${idFigure}`)
    .then((res) =>
    {
        return res.text();
    })
    .then((res) =>
    {
        switch (res)
        {
            case '0':
                new Messanger('Поставьте оценку 3D-модели!').showMessage();
                break;
            case '1':
                window.location.href = `/model/php/add-review.php?id_figure=${idFigure}&text_review=${textReview}`;
                break;
        }
    });

});