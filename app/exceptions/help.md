To create an exception, execute in your terminal the command:

    php lumos make:exception the_exception_name

you can also add exception message to be shown in debug mode, to do that, add option `message` and enter the message:

    php lumos make:exception the_exception_name --message

you can also add exception view to be shown in client mode, to do that, add option `view` contains the view name:

    php lumos make:exception the_exception_name --view='errors.404'

when **Vinala Lumos** create the exception, it add an alias of the exception to `config/alias.php` file, to not to do that, add the option `not_aliased` to the  command:

    php lumos make:exception the_exception_name --not_aliased

For more help about **Vinala Lumos** excption creation use :

    php lumos make:exception -h
    
for more lumos commands execute :

    php lumos list

 > **Note** : you can at any time remove this file, its just for help