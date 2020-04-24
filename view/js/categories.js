const categoriesDiv = document.querySelector('#categories');

fetch('/model/php/get-categories.php')
.then((res) =>
{
    return res.text();
})
.then((categories) =>
{
    const categoriesObject = JSON.parse(categories);

    categoriesObject.forEach((category) =>
    {
        categoriesDiv.insertAdjacentHTML('beforeEnd', `<a href="/catalog.php?id_category=${category.id_category}" style="background-image: url(./view/img/categories/${category.name}.jpg)"></a>`)
        // console.log(category.id_category, category.name);
    });
});