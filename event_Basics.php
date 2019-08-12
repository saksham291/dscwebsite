<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Developer Student Club - IIT Bhilai</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <style>
        p {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <?php require('header.php'); ?>

    <div class="container">
        <h3 class="center-align" style="margin-bottom: 50px;">Introduction to Progrmaming Basics for Freshers</h3>
        <div class="carousel carousel-slider z-depth-3 center">
            <div class="carousel-item white-text" style="background-image:url('./img/events/280719 (1)-min.jpg');">
            </div>
            <div class="carousel-item white-text" style="background-image:url('./img/events/280719 (2)-min.jpg');">
            </div>
            <div class="carousel-item white-text" style="background-image:url('./img/events/280719 (3)-min.jpg');">
            </div>
            <div class="carousel-item white-text" style="background-image:url('./img/events/280719 (4)-min.jpg');">
            </div>
            <div class="carousel-item white-text" style="background-image:url('./img/events/280719 (5)-min.jpg');">
            </div>
        </div>
        <p>
            This workshop was primarily conducted for the freshers as a gesture of welcome to the DSC IIT Bhilai Community. Since it was a first of its kind workshop for most of them, we decided to keep the topic gentle in nature. The best topic for starters would be Fundamentals of Programming. After a careful deliberation by the organizing committee, we agreed upon Python to the most convenient language for this session. A couple of factors motivated us to choose Python over C or Java. The first was the fact that we wanted to get the audience familiar with basic programming constructs without really overwhelming them with intricate syntax. Secondly setting up a Python environment would be a much easier for newbies.
        </p>
        <br>

        <p>
            The audience was quite diverse with a few students have previous programming experience in various languages. Hence, one of the crucial part of conducting the workshop was maintaining the right pace of concept presentation. The team did an excellent job of lucidly presenting the concepts without really dragging which kept the entire class hooked. The students were also presented with a problem set which covered the concepts taught and as a token of appreciation, the top ten scorers were presented with chocolates - a small but important gesture for motivating the freshmen. The session was conducted in two rooms and there was a huge participation. We received a very positive feedback from the participants. All were excited to be inducted in our community and hope to participate in more of such events.
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