class Rating
{
    constructor(ratingWrapper)
    {
        this.ratingWrapper = ratingWrapper;
        this.stars = ratingWrapper.querySelectorAll('.rating_star');
        
        this.stars.forEach((star, starNumber) =>
        {
            star.dataset.starnumber = starNumber + 1;
        });
        
        this.ratingWrapper.addEventListener('mouseover', this.updateStars.bind(this));
    }

    updateStars(event)
    {
        const isStar = event.target.classList.contains('rating_star');

        if (isStar)
        {
            const clickedStar = event.target;

            const starNumber = parseInt(clickedStar.dataset.starnumber);

            for (let i = 1; i <= starNumber; i++)
            {
                this.stars[i - 1].classList.remove('gray_rating_star');
                this.stars[i - 1].classList.add('gold_rating_star');
            }

            for (let i = starNumber + 1; i <= 5; i++)
            {
                this.stars[i - 1].classList.remove('gold_rating_star');
                this.stars[i - 1].classList.add('gray_rating_star');
            }
        }
    }
}