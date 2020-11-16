<DOCTYPE html>
    <html>
        <head>
            <link href="css/main.css" rel="stylesheet">
        </head>
        <body>
            <header>
                <ul class="header-list">
                    <li class="header-link"><a class="header-address" href="/recruitis">Vstup do Recruitis</a></li>
                </ul>
            </header>
            <main>
                {{$uchazec->getResume()->findFirstName()}}

            </main>
            <footer>
                <section>
                    <h2>Vyhledat...</h2>
                    <form>
                        @csrf
                        <input name="keywords" class="std-inp" type="text" placeholder="Zadejte klíčová slova">
                        <br />
                        <input name="first_name" class="std-inp" type="text" placeholder="Zadejte křestní jméno">
                        <br />
                        <input name="last_name" class="std-inp" type="text" placeholder="Zadejte příjmení">
                        <br />
                        <input name="submit" class="std-inp std-sub" type="submit" placeholder="">
                    </form>
                    <ul class="search-list">
                        <li class="search-link"><button onclick="searchFirstName()" class="search-action">Vyhledat křestní jméno</button></li>
                        <li class="search-link"><button onclick="searchLastName()" class="search-action">Vyhledat příjmení</button></li>
                    </ul>
                </section>
            </footer>
        </body>
        <script>
            function searchFirstName()
            {
                return window.location.href = '/search-fist-name';
            }
            function searchLastName()
            {
                return window.location.href = '/search-last-name';
            }
        </script>
    </html>
</DOCTYPE>
