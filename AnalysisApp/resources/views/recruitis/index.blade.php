<DOCTYPE html>
    <html>
        <head>

        </head>
        <body>
            <header>

            </header>
            <main>
                <form method="POST" action="/recruitis/login">
                    @csrf
                    @method('PUT')
                    <input name="username" type="text" placeholder="Jméno" class="std-inp">
                    <input name="password" type="password" placeholder="Heslo" class="std-inp">
                    <input name="device_id" type="text" placeholder="ID zařízení" class="std-inp">
                    <input name="device_name" type="text" placeholder="Jméno zařízení" class="std-inp">
                    <input name="submit" type="submit" value="Přihlásit se" class="std-inp std-sub">
                </form>
            </main>
            <footer>

            </footer>
        </body>
    </html>
</DOCTYPE>
