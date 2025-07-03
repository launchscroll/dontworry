server {
    location / {
        root /usr/share/nginx/html/www;
        index index.html;
        try_files $uri $uri/ /index.php;
    }

    # Handle 404 errors
    error_page 404 /404.html;
    location = /404.html {
        root /usr/share/nginx/html;
        internal;
    }

    # Handle server errors (50x)
    error_page 500 502 503 504 /50x.html;
    location = /50x.html {
        root /usr/share/nginx/html;
        internal;
    } 
