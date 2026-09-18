# Parcial Primer Corte — Sistema de Gestión Empresarial

## Veterinaria Huellitas

**Asignatura:** Software de Gestión Empresarial
**Proyecto:** Sistema de Gestión Empresarial (SGE)
**Empresa:** Veterinaria Huellitas
**Estudiante:** Mónica Alejandra Parra
**Año:** 2026

---

# 1. Análisis de la empresa

## 1.1 Información general

**Nombre:** Veterinaria Huellitas

**Giro del negocio:**
Veterinaria Huellitas es una pequeña empresa dedicada a la atención médica de animales de compañía. Sus actividades incluyen consultas veterinarias, servicios relacionados con la salud y bienestar de las mascotas, además de la venta de medicamentos, alimentos, accesorios y productos para mascotas.

**Tamaño:** Pequeña empresa.

## 1.2 Procesos principales

Los principales procesos identificados son:

* Registro y gestión de clientes.
* Registro y seguimiento de mascotas.
* Gestión de citas y servicios veterinarios.
* Atención médica de las mascotas.
* Gestión de productos e inventario.
* Compra y reposición de productos.
* Venta de productos.
* Gestión de empleados.
* Generación de reportes.

---

# 2. Problemas identificados

## Problema 1: Información dispersa

La información de clientes, mascotas, citas y ventas puede encontrarse en diferentes registros, dificultando su consulta y actualización.

## Problema 2: Errores en el inventario

El control manual de productos puede provocar diferencias entre las existencias registradas y las existencias reales.

## Problema 3: Dificultad para consultar información

La búsqueda del historial de un cliente o de una mascota puede tomar tiempo cuando no existe una base de datos centralizada.

## Problema 4: Errores en la gestión de citas

La administración manual de citas puede generar cruces de horarios, olvidos o dificultades para consultar la disponibilidad.

## Problema 5: Poco apoyo para la toma de decisiones

Sin reportes consolidados es más difícil conocer las ventas, los servicios más solicitados y los productos con mayor movimiento.

---

# 3. Justificación del ERP

Se propone implementar un Sistema de Gestión Empresarial (SGE/ERP) que permita centralizar la información de la veterinaria.

El sistema permitirá:

* Centralizar clientes y mascotas.
* Registrar y consultar citas.
* Controlar productos e inventario.
* Registrar ventas.
* Gestionar empleados.
* Facilitar la consulta de información.
* Generar indicadores y reportes.
* Reducir errores derivados de registros manuales.
* Apoyar la toma de decisiones.

El ERP permitirá integrar los principales procesos de la empresa en una sola plataforma.

---

# 4. Modelo de datos

## 4.1 Entidades principales

El modelo conceptual contempla las siguientes entidades:

* **Clientes:** propietarios de las mascotas.
* **Mascotas:** pacientes atendidos por la veterinaria.
* **Productos:** medicamentos, alimentos, accesorios y otros productos.
* **Categorías:** clasificación de productos.
* **Servicios:** consultas y servicios veterinarios.
* **Citas:** programación de la atención.
* **Empleados:** personal que presta los servicios.
* **Ventas:** operaciones comerciales realizadas.

## 4.2 Relaciones principales

* Un cliente puede tener muchas mascotas.
* Una mascota pertenece a un cliente.
* Una mascota puede tener muchas citas.
* Un servicio puede estar asociado a muchas citas.
* Un empleado puede atender muchas citas.
* Una categoría puede contener muchos productos.
* Una venta puede contener varios productos.

## 4.3 Relación implementada

La relación implementada en esta primera etapa es:

**Cliente 1 : N Mascotas**

```text
CLIENTE
   |
   | 1:N
   |
   v
MASCOTA
```

La tabla `pets` contiene la clave foránea `client_id`, que referencia a `clients.id`.

---

# 5. Diccionario de datos

## 5.1 Tabla clients

| Campo      | Tipo         | Descripción                     |
| ---------- | ------------ | ------------------------------- |
| id         | BIGINT       | Identificador único del cliente |
| name       | VARCHAR(150) | Nombre completo                 |
| phone      | VARCHAR(20)  | Número telefónico               |
| email      | VARCHAR(150) | Correo electrónico              |
| address    | VARCHAR(200) | Dirección                       |
| created_at | TIMESTAMP    | Fecha de creación               |
| updated_at | TIMESTAMP    | Fecha de actualización          |

## 5.2 Tabla pets

| Campo      | Tipo         | Descripción                       |
| ---------- | ------------ | --------------------------------- |
| id         | BIGINT       | Identificador único de la mascota |
| client_id  | BIGINT       | Cliente propietario               |
| name       | VARCHAR(100) | Nombre de la mascota              |
| species    | VARCHAR(50)  | Especie                           |
| breed      | VARCHAR(100) | Raza                              |
| age        | INT          | Edad                              |
| gender     | VARCHAR(20)  | Género                            |
| created_at | TIMESTAMP    | Fecha de creación                 |
| updated_at | TIMESTAMP    | Fecha de actualización            |

## 5.3 Tabla products

La tabla `products` ya se encontraba disponible en el proyecto Laravel y fue reutilizada para el parcial.

| Campo       | Tipo          | Descripción                |
| ----------- | ------------- | -------------------------- |
| id          | BIGINT        | Identificador del producto |
| name        | VARCHAR(255)  | Nombre del producto        |
| code        | VARCHAR(255)  | Código único               |
| price       | DECIMAL(12,2) | Precio                     |
| stock       | INT           | Existencia disponible      |
| description | TEXT          | Descripción                |
| created_at  | TIMESTAMP     | Fecha de creación          |
| updated_at  | TIMESTAMP     | Fecha de actualización     |

---

# 6. Propuesta de módulos ERP

## 6.1 Módulo de clientes

Permite registrar, consultar y actualizar la información de los propietarios de las mascotas.

## 6.2 Módulo de mascotas

Permite asociar las mascotas con sus propietarios y almacenar información básica de cada paciente.

## 6.3 Módulo de citas y servicios

Permite gestionar las citas, los servicios veterinarios y la atención realizada por los empleados.

## 6.4 Módulo de productos e inventario

Permite administrar medicamentos, alimentos, accesorios y demás productos, controlando precios y existencias.

## 6.5 Módulo de ventas

Permite registrar las ventas realizadas a los clientes y controlar los productos vendidos.

## 6.6 Módulo de empleados

Permite gestionar la información del personal que trabaja en la veterinaria y asociarlo con las actividades realizadas.

## 6.7 Módulo de reportes

Permite consultar información consolidada para apoyar la toma de decisiones.

---

# 7. Flujo general del proceso

El flujo propuesto para la veterinaria es:

```text
Cliente llega con su mascota
          |
          v
Buscar o registrar cliente
          |
          v
Buscar o registrar mascota
          |
          v
Programar o consultar cita
          |
          v
Asignar empleado
          |
          v
Realizar servicio veterinario
          |
          v
¿Necesita productos?
       /       \
     Sí         No
     |           |
     v           |
Registrar venta  |
     |           |
     v           |
Actualizar       |
inventario       |
     |           |
     +-----+-----+
           |
           v
      Finalizar
       atención
```

---

# 8. Indicadores (KPIs)

| Indicador                 | Utilidad                                                 |
| ------------------------- | -------------------------------------------------------- |
| Ventas por período        | Analizar el comportamiento de las ventas                 |
| Productos con bajo stock  | Identificar productos que requieren reposición           |
| Citas atendidas           | Medir el volumen de atención                             |
| Servicios más solicitados | Identificar los servicios con mayor demanda              |
| Ingresos por servicios    | Analizar los ingresos generados por atención veterinaria |
| Ingresos por productos    | Analizar las ventas de productos                         |

---

# 9. Beneficios esperados

La implementación del ERP permitirá:

1. Centralizar la información de la veterinaria.
2. Mejorar el control de clientes y mascotas.
3. Facilitar la gestión de citas.
4. Mejorar el control del inventario.
5. Reducir errores de registro.
6. Facilitar la consulta de información.
7. Mejorar la organización de los procesos.
8. Generar información para la toma de decisiones.
9. Mejorar la atención al cliente.
10. Integrar los principales procesos empresariales en una sola plataforma.

---

# 10. Implementación en Laravel

## 10.1 Rama de trabajo

Se creó la rama:

`parcial`

Esta rama contiene el desarrollo correspondiente al primer corte.

## 10.2 Migraciones

Se implementaron las migraciones:

* `create_clients_table`
* `create_pets_table`

La tabla `products` ya existía en el proyecto y fue reutilizada para evitar duplicar una tabla existente.

## 10.3 Modelos

Se implementaron o configuraron los modelos:

* `Client`
* `Pet`
* `Product`

## 10.4 Relaciones

La relación entre clientes y mascotas se implementó de la siguiente manera:

* `Client` tiene muchas mascotas.
* `Pet` pertenece a un cliente.

## 10.5 Seeder

Se creó `ClientSeeder` para insertar datos de prueba.

Se registraron cinco clientes:

1. Laura Gómez
2. Carlos Rodríguez
3. María López
4. Andrés Martínez
5. Sofía Ramírez

La ejecución del Seeder fue exitosa.

---

# 11. Evidencias

Las evidencias del desarrollo se encuentran en la carpeta:

`docs/parcial/capturas/`

## Evidencia 1 — Clientes registrados

Se evidencia la ejecución de una consulta sobre la tabla `clients`, mostrando los cinco registros insertados mediante el Seeder.

## Evidencia 2 — Tablas de la base de datos

Se evidencia la consulta `SHOW TABLES`, donde se pueden verificar las tablas existentes en la base de datos, incluyendo `clients`, `pets`, `products` y las demás tablas del proyecto.

---

# 12. Conclusión

La propuesta de ERP para Veterinaria Huellitas busca integrar los procesos principales de la empresa mediante una plataforma centralizada.

La primera etapa implementada en Laravel establece la base de datos para clientes y mascotas, reutiliza la estructura existente de productos y establece la relación entre propietarios y mascotas.

Esta base permitirá continuar desarrollando módulos como citas, servicios, ventas, inventario, empleados y reportes, construyendo progresivamente un Sistema de Gestión Empresarial adaptado a las necesidades de la veterinaria.
