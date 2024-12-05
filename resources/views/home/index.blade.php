<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        /* General */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
        }

        /* Header/Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #007BFF;
            color: white;
            padding: 10px 20px;
        }

        .navbar .logo {
            font-size: 1.5em;
            font-weight: bold;
        }

        .navbar .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .navbar .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .navbar .nav-links a:hover {
            text-decoration: underline;
        }

        /* Landing */
        .landing {
            text-align: center;
            padding: 50px 20px;
        }

        .hero h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .hero .cta {
            background: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .hero .cta:hover {
            background: #0056b3;
        }

        /* Footer */
        .footer {
            text-align: center;
            background: #333;
            color: white;
            padding: 10px 20px;
        }

        .footer a {
            color: #007BFF;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .navbar .nav-links {
                flex-direction: column;
                gap: 10px;
            }

            .hero h1 {
                font-size: 2em;
            }

            .hero p {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
<!-- Header/Navbar -->
<header class="navbar">
    <div class="logo">La Meva Aplicació</div>
    <nav>
        <ul class="nav-links">
            <li><a href="/">Inici</a></li>
            <li><a href="/books">Llibres</a></li>
            <li><a href="/armes">Armes</a></li>
        </ul>
    </nav>
</header>

<!-- Contingut principal -->
<main class="landing">
    <section class="hero">
        <h1>Benvingut a la meva pàgina web amb php</h1>
        <p>Una aplicació web amb un disseny MVC i funcionalitats de base de dades, amb un apartat per llibres i un per armes.</p>
    </section>
</main>

<!-- Footer -->
<footer class="footer">
    <p>© 2024 Marc Bertomeu Tafalla. Tots els drets reservats.</p>
    <p>Contacte: <a href="mailto:marcbertomeu@iesebre.com">marcbertomeu@iesebre.com</a></p>
</footer>
</body>
</html>
