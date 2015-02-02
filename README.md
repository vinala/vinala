# Fiesta
Fiesta PHP Framework

## Installation

Vous pouvez installer Fiesta via Composer en utilisent la commande create-project dans votre terminal

	composer create-project fiesta/fiesta --prefer-dist

vous pouvez aussi includer le nom de projet :

	composer create-project fiesta/fiesta "nom-de-votre-projet" --prefer-dist
	
## Exigences du Fiesta

Fiesta a quelques exigences du système:
* PHP >= 5.4

## Configuration

Après l'installation de Fiesta vous devez modifier quelques paramètres de configuration dans `app/config`, Mais d'abord vous devez modifier les clés de sécurité de votre projet dans `app/config/security.php` ,key1 doit consiste d'une chaine aléatoire de 32 caractères et key2 doit être consisté d'une chaine de votre choix. Si la clé d'application n'est pas réglée, vos données chiffrées ne seront pas sécurisées.

Aussi vous devez régler le paramètre de l'URL root `url` de votre projet que ce soit dans un serveur local où à distance dans `app/config/app.php`

Launched in 10/10/2014
Copyright 2014 Youssef Had, Inc.
