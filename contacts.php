<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactsPage</title>
    <link rel="stylesheet" href="view/resources/css/header.css">
    <link rel="stylesheet" href="view/resources/css/footer.css">
    <link rel="stylesheet" href="view/resources/css/style.css">
    <link rel="stylesheet" href="view/resources/css/contacts.css">
</head>
<body>
    <div class="wrapper">
        
        <?php include __DIR__."/view/header.php";?>
        
        <main>

            <div class="container">

                <div class="main-wrapper">
                    <h1>НАШИ КОНТАКТЫ</h1>
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, aut? Nulla perspiciatis quas non debitis ratione suscipit, adipisci corporis blanditiis inventore provident?
                    </p>
                    <ul class="links">
                        <li><img src="view/resources/img/article-img/7.jpg"><p>+7(123)456-78-90</p></li>
                        <li><img src="view/resources/img/article-img/7.jpg"><p>example@gmail.com</p></li>
                        <li><img src="view/resources/img/article-img/7.jpg"><a>vk.com/group123123</a></li>
                        <li><img src="view/resources/img/article-img/7.jpg"><a>for.example</a></li>
                    </ul>

                    <div class="line"></div>

                </div>

                <div class="textAndMap">
                    <div class="textAndMapContent">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est harum totam consequatur omnis maiores minus suscipit soluta provident nemo animi doloribus voluptate laborum, vitae, consectetur veritatis odio minima ea doloremque.</p>
                        <iframe src="https://api-maps.yandex.ru/frame/v1/" frameborder="1" allowfullscreen="true" class='map'></iframe>
                    </div>
                </div>

            </div>

        </main>

        <?php include __DIR__."/view/footer.php";?>

    </div>
</body>
</html>