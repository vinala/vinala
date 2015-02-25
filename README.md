# Fiesta
Fiesta PHP Framework v2.0

## Installation

Vous pouvez installer Fiesta via [Composer](https://getcomposer.org/) en utilisent la commande create-project dans votre terminal

	composer create-project fiesta/fiesta --prefer-dist

vous pouvez aussi includer le nom de projet :

	composer create-project fiesta/fiesta nom-de-votre-projet --prefer-dist
	
ou tout simplement télécharger depuis github [Ici](https://github.com/fiesta-framework/Fiesta/archive/master.zip)
	
## Exigences du Fiesta

Fiesta a quelques exigences du système:
* PHP >= 5.4
* Activation de Extension mod_rewrite dans Apache

## Versions
 
 [Fiesta v 2.0.0 (latest)](https://github.com/fiesta-framework/Fiesta/tree/master)

 [Fiesta v 1.5.0](https://github.com/fiesta-framework/Fiesta/tree/1.5.0)
 
 [Fiesta v 1.4.4](https://github.com/fiesta-framework/Fiesta/tree/1.4.4)
 
 [Fiesta v 1.4.3](https://github.com/fiesta-framework/Fiesta/tree/1.4.3)
 
 [Fiesta v 1.4.2](https://github.com/fiesta-framework/Fiesta/tree/1.4.2)
 
 [Fiesta v 1.4.1](https://github.com/fiesta-framework/Fiesta/tree/1.4.1)
 
 [Fiesta v 1.4.0](https://github.com/fiesta-framework/Fiesta/tree/1.4.0)
 
 [Fiesta v 1.3.2](https://github.com/fiesta-framework/Fiesta/tree/1.3.2)
 
 [Fiesta v 1.3.1](https://github.com/fiesta-framework/Fiesta/tree/1.3.1)

## Configuration

Après l'installation de Fiesta vous devez modifier quelques paramètres de configuration dans `app/config`, Mais d'abord vous devez modifier les clés de sécurité de votre projet dans `app/config/security.php` ,key1 doit consiste d'une chaine aléatoire de 32 caractères et key2 doit être consisté d'une chaine de votre choix. Si la clé d'application n'est pas réglée, vos données chiffrées ne seront pas sécurisées.

Aussi vous devez régler le paramètre de l'URL root `url` de votre projet que ce soit dans un serveur local où à distance dans `app/config/app.php`

Launched in 10/10/2014
Copyright 2014 Youssef Had, Inc.
