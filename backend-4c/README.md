# hackademy-project

Import database into your phpMyadmin, by default, name the database:
`hackademy_project` or you can redefined it in `Application\Configs\Settings.php`

**_Important:_** to use this project, config your virtualhost as below: 
Go to `(xampp)\apache\conf\extra\httpd-vhosts.conf` and paste this below other vhost: (remeber to change directory)

`<VirtualHost backend.4c.dev:80>` <br />
`   ServerName hdm.dev` <br/>
`   ServerAlias www.backend.4c.dev`<br/>
`   DocumentRoot "D:/your/project/dir"` <br/>
`<Directory "D:/your/project/dir>`
` 		Options All `<br/>
` 		AllowOverride All` <br/>
` 		Require all granted`<br/>
`         Order allow,deny`<br/>
`         Allow from all `<br/>
` </Directory>`<br/>
` </VirtualHost>`



**Next:** 
Open your host file(C:\Windows\System32\drivers\etc\hosts) and add: <br/>
`127.0.0.1	backend.4c.dev` 

If got any problem, please Google by yourself to configure your vhosts.

