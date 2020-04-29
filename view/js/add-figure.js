const figureCategory = document.querySelector('#figure_category');

fetch('/model/php/get-categories.php')
.then((res) =>
{
    return res.json();
})
.then((categories) =>
{
    categories.forEach((category) =>
    {
        category.name = category.name.replace(/_/g, ' ');

        figureCategory.insertAdjacentHTML('beforeEnd', `<option value="${category.id_category}">${category.name}</option>`);
    });
});