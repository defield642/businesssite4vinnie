<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <style>
        /* Basic CSS for the header */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            font-size: 24px;
            font-weight: bold;
        }

        header nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        header nav ul li {
            margin-left: 20px;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        header nav ul li a:hover {
            text-decoration: underline;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }

            header nav ul {
                flex-direction: column;
                width: 100%;
            }

            header nav ul li {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="logo"></div>
        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="shop.html">SHOP NOW</a></li>
                <li><a href="contact.html">CONTACT US</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="canvas.html">CANVAS ARCHITECTURE</a></li>
                <li><a href="smallp.html">SMALL PRODUCT</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1><b>Welcome to EAST AFRICAN CANVAS COMPANY</b></h1>
        <p>
Inspired by the dramatic African landscape, we have created what are arguably the most innovative and exciting ‘safari chic’ styles of tented accommodation available worldwide.We are passionate about the thrilling and rejuvenating experience of being in a safari tent, in a place that offers much more than the barrier of brick-and-glass as you blend with the rich green surrounding spaces, the romance of lights on canvas walls and the soporific sounds of the wilderness.

Our spectacular bespoke safari tents are the product of our complementary passions for innovative creativity and wilderness experience. East African Canvas Company presents to you tents designed, manufactured and installed to perfection.
</p>
<h1><b>UNIQUE CANVAS ARCHITECTURE</b></h1>
<p>Our revolutionary tents reflect architectural expertise in a sweet combination of unsophisticated rustic pleasure and refined urbanity. Individual designs bespeak soft adventure and meticulous craftsmanship. We have a fine eye for detail and ensure our accommodations leave green footprints.</p>
    <h1><b>Bespoke Tents</b></h1>
    <p>East African Canvas Company’s bespoke tents are celebrations of innovation and diversity, used for shelter, for retreat, for stargazing, for game viewing or simply for immersion in nature, by those whose passion or profession transports them to wilderness areas.

</p>

    </main>

    <script>
        // JavaScript for any interactive functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Example: Add a class to the header when scrolled
            window.addEventListener('scroll', function() {
                const header = document.querySelector('header');
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
        });
    </script>

</body>
</html>