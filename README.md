# biblioteca-JSON-php

## Descripción

Este repositorio contiene una aplicación escrita en PHP que simula una biblioteca con diferentes categorías de libros, cada uno con variantes de formato (por ejemplo, tapa dura y tapa blanda). Los datos son gestionados utilizando clases en PHP y finalmente convertidos a formato JSON para su representación.

El objetivo de este proyecto es crear un modelo de datos que permita agregar categorías de libros y diferentes variantes de cada libro, y luego exportar la información a un archivo JSON para su uso en aplicaciones web o sistemas de gestión de información.

## Estructura del Proyecto

Este proyecto está organizado en varias clases de PHP:

- **Biblioteca**: Contiene las categorías de libros.
- **Categoria**: Representa cada categoría de libros (por ejemplo, Ficción, No Ficción, Ciencia).
- **Libro**: Representa los libros dentro de cada categoría, incluyendo información como título, autor y precio.
- **Variante**: Representa las variantes del libro (por ejemplo, tapa dura, tapa blanda) con sus respectivos precios.

### Clases

- **Biblioteca**:  
  - `categorias`: Un array que almacena las categorías de libros.

- **Categoria**:  
  - `nombre`: El nombre de la categoría (Ficción, No Ficción, Ciencia).
  - `libros`: Un array que almacena los libros dentro de la categoría.

- **Libro**:  
  - `titulo`: El título del libro.
  - `autor`: El autor del libro.
  - `precio`: El precio base del libro.
  - `variantes`: Un array de variantes (tapa dura, tapa blanda, etc.).

- **Variante**:  
  - `formato`: El tipo de formato (Tapa dura, Tapa blanda).
  - `precio`: El precio de la variante.

## Instalación

Clona el repositorio:
```bash
git clone https://github.com/Javigarcilop/biblioteca-JSON-php.git



