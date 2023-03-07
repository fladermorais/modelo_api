# Apia para Upload de Arquivos
## Sobre este sistema

Este sistema foi criado para que o cliente possa nos enviar um arquivo do tipo csv e então, alimentarmos um banco de dados da AIBruna com seus respectivos valores


## Tecnologias Utilizadas

Back-End -> Php 8.0, Laravel 9.52.4
Banco de Dados -> Mysql



# Processo de Instalação
# Requisitos

- SO: Debian 11 ou Hospedagem Linux
- PHP: 8.0
- Webserver: Apache2
- Apache Modules:
 - rewrite
 - ssl
- MySQL/Mariadb


# Dependencias iniciais
<pre>
apt-get install git vim apache2 php php-mysql php-xml php-cgi php-bcmath curl php-curl php-mbstring php-zip libapache2-mod-php
</pre>
## Configurações

### Apache

Crie o arquivo ***/etc/apache2/sites-enabled/api.conf***

Adicione o conteúdo abaixo:
<pre>
 <VirtualHost *:80>
	ServerName api.local
	ServerAdmin suporte@toppen.com.br
	DocumentRoot /var/www/html/api/public/

	<Directory /var/www/html/api>
		AllowOverride All
		Require all granted 
	</Directory>

	ErrorLog ${APACHE_LOG_DIR}/error.log
	CustomLog ${APACHE_LOG_DIR}/access.log combined

 </VirtualHost>
</pre>

Ativando a configuração
<pre>
a2dissite 000-default
a2ensite api
rm /var/www/html/index.html
a2enmode rewrite
</pre>



### Clonando o Projeto
<pre>
cd /var/www/html
git clone https://itacomercios@bitbucket.org/fladerdev/diario_on_line.git diario
</pre>

### Instalando o composer
<pre>
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
chmod +x /usr/local/bin/composer
</pre>

### MYSQL
apt-get install mysql-server


### PRE-Configuracoes
<pre>
cd /var/www/html/api
cp .env.example .env
</pre>

Faça as configuraçẽs referentes no arquivo com o devido apontamento.

Atualize as dependencias
<pre>
cd /var/www/html/api
composer update
</pre>

### Criação das Tabelas no banco de dados
<pre>
cd /var/www/html/api
php artisan migrate --seed
</pre>



### storage
<pre>
php artisan storage:link
chown -R www-data.www-data /var/www/html/api/
</pre>

### key
<pre>
php artisan key:generate
</pre>
