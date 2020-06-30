let idArticle = parseInt(window.location.href.split('?id_article=')[1])

fetch(`/model/php/get-article-info.php?id_article=${idArticle}`)
.then((data) => {
    return data.text()
})
.then((articleText) => {
    document.querySelector('#content p').textContent = articleText;
    // console.log(articleText);
})