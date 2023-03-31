<?php 

use core\app;
// ([a-zA-Z-_]+)
// ([0-9a-zA-Z-_]+)
// ([0-9a-zA-Z-_]+)
// ([0-9a-zA-Z-_\?\=\&\+]+)
// ([0-9]+)
// (.*?)

app::get('/', '/home/index', 'main');
app::get('/home', '/home/index', 'main');
app::get('/dd', '/dd/dd', 'main');

app::get('/creational/prototype/(.*?)', '/Creational/Prototype/(.*?)', 'code');
app::get('/creational/abstractfactory/(.*?)', '/Creational/AbstractFactory/(.*?)', 'code');
app::get('/creational/factorymethod/(.*?)', '/Creational/FactoryMethod/(.*?)', 'code');
app::get('/creational/singleton/(.*?)', '/Creational/Singleton/(.*?)', 'code');

/*error*/
app::get('/404', '/error/PageNotFound', 'main');
app::get('/error/type/([0-9a-zA-Z-_]+)', 
	'/error/errorType/([0-9a-zA-Z-_]+)', 'main');


