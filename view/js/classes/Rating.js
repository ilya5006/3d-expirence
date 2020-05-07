class Rating
{
    /**
     * 
     * Class to control rating stars ⭐⭐⭐⭐⭐
     * @constructor
     * @param {node} ratingWrapper - The DOM-element which contains the stars' div (⭐)
     * @param {number} value - Default rating value
     * @param {isChanging} bool - Is have to stars changes status on mouseover event
     * @param {onclick} function - Callback function, which executes onclick event (accept *  parameter - event)
     */
    constructor(ratingWrapper, value = 5, isChanging = false, onclick = null)
    {
        this.ratingWrapper = ratingWrapper;
        this.stars = ratingWrapper.querySelectorAll('.rating_star');
        
        this.stars.forEach((star, starNumber) =>
        {
            star.dataset.starnumber = starNumber + 1;
        });

        this.setValue(value);

        if (isChanging)
        {
            let updateStarsBind = this.updateStars.bind(this);
            let setValueBind = this.setValue.bind(this, value);

            this.ratingWrapper.addEventListener('mouseover', updateStarsBind);
            this.ratingWrapper.addEventListener('mouseout', setValueBind)
            this.ratingWrapper.addEventListener('click', (event) =>
            {
                this.ratingWrapper.removeEventListener('mouseover', updateStarsBind);
                this.ratingWrapper.removeEventListener('mouseout', setValueBind);
                
                if (onclick != null)
                    onclick(event);

            });
        }
    }

    /**
     * Setting value on click to star
     * @param {number} value - Value of star on range [1; 5] 
     */
    setValue(value)
    {
        for (let i = 1; i <= value; i++)
        {
            this.stars[i - 1].classList.remove('gray_rating_star');
            this.stars[i - 1].classList.add('gold_rating_star');
        }

        for (let i = value + 1; i <= 5; i++)
        {
            this.stars[i - 1].classList.remove('gold_rating_star');
            this.stars[i - 1].classList.add('gray_rating_star');
        }
    }

    /**
     * Updating stars status on mouse on mouseover event
     * @param {event} event - Mouse event 
     */
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