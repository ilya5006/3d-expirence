const worksRatingsDivs = document.querySelectorAll('.work_rating');

worksRatingsDivs.forEach((div) =>
{
    new Rating(div);
});