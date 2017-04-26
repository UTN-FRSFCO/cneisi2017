# cneisi2017
Repositorio oficial del proyecto Open Source CNEISI 2017

## Descripción

Repo creado para llevar adelante el sitio del undécimo Congreso Nacional de Estudiantes de Ingeniería en Sistemas de Información con sede en la [UTN Facultad Regional San Francisco](https://www.frsfco.utn.edu.ar/), conmemorandose además los 30 años de la inauguración de la carrera mencionada en la facultad regional.

## Descripción técnica

El sitio se desarrollará bajo Laravel 5.4, con PHP 7.x. 

## Features

- Página principal
- Conferencistas
- Cronograma de eventos y conferencias
- Espacio para sponsors
- Auth (registro, login, logout, password reset, mail, integración con redes sociales)
- Sección de fotos del evento
- Mapa de localizacion
- Mapa de identificación de auditorios.
- Checkin de conferencias
- Formulario de contacto

## Code Style

- PHP: [PSR-2 coding standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)

# Guía para contribuir al proyecto #

1) Cada tarea debe ser gestionada a través de un [issue](https://github.com/UTN-FRSFCO/cneisi2017/issues). Este issue tomara un numero, por ejemplo #17. Cada [issue](https://github.com/UTN-FRSFCO/cneisi2017/issues) tendrá una breve descripción y los detalles de implementación serán decididos por cada participante siguiendo lineamientos de [PSR-2 coding standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) y la estructura de Laravel. 

2) Para cada tarea, se debe crear una rama siguiendo la siguiente convención: nombre_del_issue_**n**, donde **n** es el numero de la issue. Por ejemplo, para la issue #17 de "crear usuarios", la rama se llamaría crear_usuarios_17

3) Luego de implementar nuevas tareas, se crea un [Pull Request](https://github.com/UTN-FRSFCO/cneisi2017/pulls) desde la rama generada para la tarea y se asigna a algún responsable de revisión, para que corrija errores si los hay y realize un merge a la rama principal en su defecto.

## Comandos útiles Git

```
git checkout master                     #Para volver a la rama master
```

```
git checkout -b nombre_issue_17         #Crea nueva rama
```

```
git status                              #Comprobar los archivos modificados y si estamos sobre la rama indicada
```

```
git add -A .                            #Agrega todos los archivos para ser commiteados
```

```
git commit -m "Mensaje del commit"      #El mensaje describe lo que hiciste (las commillas ESTAN incluidas)
```

```
git push origin nombre_de_rama          #Sube los commit a la rama indicada 
```  

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
