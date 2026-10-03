# SimplePOS Database Import

This project includes a database export at `database/act2sapnu.sql`. The export creates the `act2sapnu` database and imports the `customers` and `users` tables with their sample records.

## Import with phpMyAdmin (XAMPP)

1. Start **Apache** and **MySQL** in the XAMPP Control Panel.
2. Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
3. Select the **Import** tab. Do not select a database first; the SQL export creates `act2sapnu` itself.
4. Click **Choose File** and select `database/act2sapnu.sql` from this project.
5. Leave the format set to **SQL** and click **Import**.
6. Confirm that the `act2sapnu` database now contains the `customers` and `users` tables, each with five records.

## Import with the MySQL command line

From the project folder, run:

```powershell
Get-Content -Raw database\act2sapnu.sql | & 'C:\xampp\mysql\bin\mysql.exe' -u root
```

If your MySQL `root` user has a password, use `-p` so MySQL can prompt for it:

```powershell
Get-Content -Raw database\act2sapnu.sql | & 'C:\xampp\mysql\bin\mysql.exe' -u root -p
```

## CodeIgniter connection settings

The project `.env` is already configured for XAMPP's default local MySQL setup:

```ini
app.baseURL = 'http://localhost/act2sapnu/'
database.default.hostname = localhost
database.default.database = act2sapnu
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

Change the username or password in `.env` if your local MySQL configuration differs. After importing, open `http://localhost/act2sapnu/customers` or `http://localhost/act2sapnu/users`.
