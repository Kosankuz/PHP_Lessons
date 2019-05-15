# PHP + Composer lessons



## Getting Started

Download Composer Latest

To quickly install Composer in the current directory,
 run the following script in your terminal. 
 
 

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"  
php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"  
php composer-setup.php  
php -r "unlink('composer-setup.php');"  
mv composer.phar /usr/local/bin/composer

This installer script will simply check some php.ini 
settings, warn you if they are set incorrectly, 
and then download the latest composer.phar 
#####in the current directory. 
The 4 lines above will, in order:

Download the installer to the current directory
Verify the installer SHA-384 which you can also cross-check here
Run the installer
Remove the installer

