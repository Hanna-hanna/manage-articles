## Manage Acticles

<div>
    <p>Clone project</p>
    <pre>git clone https://github.com/Hanna-hanna/manage-articles.git</pre>
    <pre>cd manage-articles</pre>
    <p>Install Requirements</p>
    <pre>composer install</pre>
    <pre>npm install</pre>
    <p>Create new database on the local database tool like TablePlus</p>
    <p>Create file .env from env.example (on the root) and add info</p>
    <pre>
    DB_DATABASE=name_your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    </pre>
    <p>Migrate Database</p>
    <pre>php artisan migrate --seed</pre>
    <p>Set key for application</p>
    <pre>php artisan key:generate</pre>
    <p>Start project from your server or use local</p>
    <pre>php artisan serve</pre>
    <p>Check API in Postman</p>
    <p>Register user (method post)</p>
    <pre>
    http://localhost:8000/api/register
    </pre>
    <pre>
    {
        "name": "John Doe",
        "email": "john.doe@example.com",
        "password": "password",
        "password_confirmation": "password"
    }
    </pre>
    <p>Login user and get token (method post)</p>
    <pre>
    http://localhost:8000/api/login
    </pre>
    <pre>
    {
        "email": "john.doe@example.com",
        "password": "password",
    }
    </pre>
    <p>Add the token to the Authorization header as a Bearer token to authenticate API requests.</p>
    <p>Index Articles Page (method get)</p>
    <pre>
    http://localhost:8000/api/articles
    </pre>
    <p>Index Articles Page (method get)</p>
    <pre>
    http://localhost:8000/api/articles
    </pre>
    <p>Create New Article (method post)</p>
    <pre>http://localhost:8000/api/articles</pre>
    <pre>
    {
        "title": "test",
        "body": "description",
        "published_at": "1997-09-20T00:00:00.000000Z",
        "user_id": "1"
    }
    </pre>
    <p>Update Article - it works only with your articles (method post)</p>
    <pre>http://localhost:8000/api/articles/{article's id}</pre>
    <pre>
    {
        "title": "test",
        "body": "description222",
        "published_at": "1997-09-20T00:00:00.000000Z",
        "user_id": "1"
    }
    </pre>
    <p>Delete Article - it works only with your articles (method delete)</p>
    <pre>http://localhost:8000/api/articles/{article's id}</pre>
   
</div>
