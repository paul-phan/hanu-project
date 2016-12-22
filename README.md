# hanu-project-4c13
**_By_**: <br />
    `Phan Thế Minh` `Nguyễn Trung Đức` `Trần Thị Thu` `Nguyễn Khắc Hoàn` `Trần Kim Tiến`

Import database into your phpMyadmin, by default, name the database:
`at_mobile` or you can redefined it in `Application\Configs\Settings.php`

**_Important:_** to use this project, config your virtualhost as below: 
Go to `(xampp)\apache\conf\extra\httpd-vhosts.conf` and paste this below other vhost: (remeber to change directory)

`<VirtualHost yourwebsitename.dev:80>` <br />
`   ServerName yourwebsitename.dev` <br/>
`   ServerAlias www.yourwebsitename.dev`<br/>
`   DocumentRoot "D:/yourprojectdir/mobileshop"` <br/>
`<Directory "D:/yourprojectdir/mobileshop">`
` 		Options All `<br/>
` 		AllowOverride All` <br/>
` 		Require all granted`<br/>
`         Order allow,deny`<br/>
`         Allow from all `<br/>
` </Directory>`<br/>
` </VirtualHost>`



**Next:** 
Open your host file(C:\Windows\System32\drivers\etc\hosts) and add: <br/>
`127.0.0.1	yourwebsitename.dev` 


[Demo page is now available here: http://www.hanu4c13.html-5.me] (http://www.hanu4c13.html-5.me)

