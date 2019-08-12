<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Developer Student Club - IIT Bhilai</title>
    <style>
        p {
            font-size: 18px;
        }
    </style>
    <link rel="icon" type="image/png" href="favicon.png">
</head>

<body>
    <?php require('header.php'); ?>

    <div class="container">
        <h3 class="center-align" style="margin-bottom: 50px;">Introduction to Machine Learning with Python</h3>
        <div class="carousel carousel-slider z-depth-3 center">
            <div class="carousel-item white-text" style="background-image:url('./img/events/210419 (1)-min.jpg');">
            </div>
            <div class="carousel-item white-text" style="background-image:url('./img/events/210419 (2)-min.jpg');">
            </div>
            <div class="carousel-item white-text" style="background-image:url('./img/events/210419 (3)-min.jpg');">
            </div>
            <div class="carousel-item white-text" style="background-image:url('./img/events/210419 (4)-min.jpg');">
            </div>
        </div>
        <p>
            This is the introductory session which will commence with an introduction to Python. The introduction would cover basic constructs of the language – loops, lists and a couple of libraries which will be utilized in the later part of the session.
            We will then provide the motivation for Machine Learning followed by demonstrating some of the projects made by the Third Year Batch. Our focus would be to take the simplest of topics, explain the theory and intuition behind them followed by a working example of the same. The class will be interactive in nature with lots of visualization to facilitate a gentle introduction without overwhelming the audience with a lot of sophisticated concepts. The code examples will in Python and this is where the session will build upon the concepts taugth in the first part.
            We invite you all to be a part of this comunity of enthusiastic developers and hope that we will be able to promote this synergy in learning.
        </p>
        <br>
    </div>


    <?php require('footer.php'); ?>

    <script>
        function isHovered(e) {
            return e === e.parentElement.querySelector(':hover');
        }
        document.addEventListener('DOMContentLoaded', function() {
            let elems = document.querySelectorAll('.carousel');
            carousels = M.Carousel.init(elems, {
                fullWidth: true,
                indicators: true
            });
            window.setInterval(() => {
                // next slide when cursor is not hovering over
                if (!isHovered(elems[0])) {
                    carousels[0].next();
                }
            }, 5000);
        });
    </script>
</body>

</html>