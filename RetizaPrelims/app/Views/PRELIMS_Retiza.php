<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px;
        }

        main {
            padding: 20px;
        }

        .about {
            margin-bottom: 30px;
        }

        .gallery {
            text-align: center;
        }

        .image-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        img {
            max-width: 300px;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Nature's Beauty</h1>
    </header>
    <main>
        <section class="about">
            <h2>About Us</h2>
            <p>Discover the wonders of nature with us!</p>
        </section>
        <section class="gallery">
            <h2>Gallery</h2>
            <div class="image-container">
                <img src="nature1.jpg" alt="Nature Image 1">
                <img src="nature2.jpg" alt="Nature Image 2">
                <img src="nature3.jpg" alt="Nature Image 3">
            </div>
        </section>
    </main>
</body>
</html>