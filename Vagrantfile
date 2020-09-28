# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.box = "laravel/homestead"
    config.vm.network "private_network", ip: "192.168.10.50"
    config.vm.synced_folder ".", "/var/www/html"
    config.vm.hostname = "blog-test"
    config.vm.provider "virtualbox" do |v|
        v.memory = 2048
        v.cpus = 1
    end

    $script = <<-SCRIPT
        sudo rm -f /etc/nginx/sites-enabled/default
        sudo rm -f /etc/nginx/sites-available/default
        echo 'server {
            listen 80;
            root "/var/www/html/public";
            index index.html index.htm index.php;
            charset utf-8;
            access_log off;
            sendfile off;
            client_max_body_size 100m;
            location / {
                try_files $uri $uri/ /index.php?$query_string;
            }
            location = /favicon.ico {
                access_log off;
                log_not_found off;
            }
            location = /robots.txt  {
                access_log off;
                log_not_found off;
            }
            location ~ \.php$ {
                fastcgi_split_path_info ^(.+\.php)(/.+)$;
                fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
                fastcgi_index index.php;
                include fastcgi_params;
                fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
                fastcgi_intercept_errors off;
                fastcgi_buffer_size 16k;
                fastcgi_buffers 4 16k;
                fastcgi_connect_timeout 300;
                fastcgi_send_timeout 300;
                fastcgi_read_timeout 300;
            }
            location ~ /\.ht {
                deny all;
            }
        }' | sudo tee /etc/nginx/sites-available/default
        sudo ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default
        sudo service nginx restart
        sudo rm -f /etc/php/7.4/fpm/conf.d/zray.ini
        sudo ln -s /etc/php/7.4/mods-available/xdebug.ini /etc/php/7.4/cli/conf.d/20-xdebug.ini
        sudo service php7.4-fpm restart
    SCRIPT

    config.vm.provision "shell", inline: $script
end

