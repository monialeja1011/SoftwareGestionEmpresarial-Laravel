# Análisis de la Empresa

## 1. Datos Generales

- **Nombre:** Empresa de Transporte Terrestre
- **Giro del negocio:** Transporte terrestre de pasajeros y/o carga.
- **Tamaño:** Pequeña empresa.

## 2. Procesos Clave

### Ventas

El proceso de ventas comprende el registro de las operaciones comerciales
realizadas con los clientes. El sistema permite asociar cada venta con un
cliente, registrar los productos o elementos relacionados con la operación,
indicar cantidades, precios y consultar el estado de la venta.

### Compras

Las compras corresponden a la adquisición de productos, repuestos,
lubricantes, herramientas y otros elementos necesarios para el funcionamiento
y mantenimiento de la empresa. En una siguiente etapa, este proceso podrá
integrarse al sistema para registrar proveedores, compras y entradas de
inventario.

### Inventario

El inventario permite controlar los productos utilizados por la empresa,
incluyendo repuestos, lubricantes, llantas, herramientas, elementos de
seguridad y otros suministros. Cada producto cuenta con una categoría,
precio y cantidad disponible en stock.

### Otros procesos

También se identifican procesos relacionados con la gestión de clientes,
organización de productos y seguimiento de las operaciones comerciales.
Estos procesos sirven como base para ampliar posteriormente el sistema con
módulos de vehículos, conductores, mantenimiento y proveedores.

## 3. Entidades Identificadas (Tablas)

Las principales entidades identificadas para el Sistema de Gestión
Empresarial son:

- **categories:** categorías de productos.
- **clients:** información de los clientes.
- **products:** productos y elementos utilizados por la empresa.
- **sales:** registro de ventas realizadas a los clientes.
- **sale_details:** detalle de los productos incluidos en cada venta.

Estas entidades permiten representar los procesos principales desarrollados
en el primer corte y establecer relaciones mediante claves foráneas.

## 4. Solución Propuesta

Se propone desarrollar un Sistema de Gestión Empresarial (SGE) utilizando
Laravel, con el objetivo de centralizar la información y facilitar la
administración de los principales procesos de la empresa.

El sistema utiliza el patrón de arquitectura MVC y una base de datos
relacional administrada mediante migraciones y Eloquent ORM.

## 5. Relaciones Principales

El modelo de datos contempla las siguientes relaciones:

- Una categoría puede tener muchos productos.
- Un producto pertenece a una categoría.
- Un cliente puede tener muchas ventas.
- Una venta pertenece a un cliente.
- Una venta puede tener muchos detalles.
- Un detalle pertenece a una venta.
- Un producto puede aparecer en muchos detalles de venta.
- Un detalle pertenece a un producto.

## 6. Beneficios Esperados

- Centralización de la información.
- Mejor organización de los datos.
- Control básico del inventario.
- Consulta rápida de productos y categorías.
- Seguimiento de ventas y clientes.
- Reducción de información duplicada.
- Base tecnológica para ampliar el sistema en futuras etapas.

## 7. Tecnologías Utilizadas

- Laravel 13
- PHP 8.5
- MySQL 8.4
- Docker
- Laravel Sail
- Blade
- Eloquent ORM
- Tailwind CSS
- Git y GitHub
