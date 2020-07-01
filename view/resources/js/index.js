let postsDiv = document.querySelector('.posts');

fetch(`/model/php/get-articles-info.php`)
.then((data) => {
    return data.json()
})
.then((articles) => {
    // document.querySelector('#content p').textContent = articleText;
    // console.log(articles);
    articles.forEach((article) => {
        postsDiv.insertAdjacentHTML('beforeEnd', 
        `
            <li style="background-image: url(/view/resources/img/article-img/${article.id_article}.jpg) "><p>${article.name_article}</p></li>
        `)
    })
})