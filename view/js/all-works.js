const figuresRatings = document.querySelectorAll('.figure_rating');

figuresRatings.forEach((div) =>
{
    new Rating(div);
});