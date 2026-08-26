# ANÁLISIS DE LA EMPRESA DE TRANSPORTE

## 1. Datos Generales

### Nombre de la empresa

**Empresa de Transporte Parra S.A.S.**

### Actividad económica

Empresa dedicada al **transporte terrestre de mercancías**, realizando el traslado de productos y diferentes tipos de carga desde un lugar de origen hasta un destino determinado.

### Clientes

La empresa presta sus servicios a **personas naturales y empresas** que requieren transportar mercancías.

### Objetivo del sistema

Desarrollar un sistema de gestión que permita organizar y controlar la información de clientes, conductores, vehículos, servicios y entregas.

---

## 2. Procesos Clave

### Solicitud de transporte

El cliente solicita un servicio indicando información como el origen, destino y fecha requerida para realizar el traslado de la mercancía.

### Cotización

La empresa analiza las características del servicio y establece el valor correspondiente al transporte.

### Asignación

Una vez aceptado el servicio, se asigna un conductor y un vehículo disponible para realizar el transporte.

### Transporte

El conductor realiza el traslado de la mercancía desde el lugar de origen hasta el destino indicado.

### Entrega

Al llegar al destino, se realiza la entrega de la mercancía y se registra la información correspondiente, permitiendo controlar la finalización del servicio.

### Gestión de vehículos y conductores

La empresa mantiene un registro de sus vehículos y conductores, permitiendo conocer su información y disponibilidad para asignarlos a los diferentes servicios.

---

## 3. Entidades (Tablas)

### Usuarios

Personas que utilizan el sistema para registrar y administrar las operaciones de la empresa.

**Campos principales:**

- id_usuario
- nombre
- correo
- password
- rol

### Clientes

Personas naturales o empresas que solicitan los servicios de transporte.

**Campos principales:**

- id_cliente
- nombre
- documento
- telefono
- correo
- direccion

### Conductores

Personas encargadas de realizar los servicios de transporte.

**Campos principales:**

- id_conductor
- nombre
- documento
- telefono
- licencia
- estado

### Vehículos

Vehículos utilizados para realizar el transporte de mercancías.

**Campos principales:**

- id_vehiculo
- placa
- tipo
- marca
- modelo
- capacidad
- estado

### Servicios

Representa cada operación de transporte solicitada por un cliente. Esta entidad relaciona al cliente, conductor, vehículo y usuario que registra el servicio.

**Campos principales:**

- id_servicio
- fecha
- fecha_programada
- tipo_servicio
- origen
- destino
- valor
- estado
- observaciones
- id_cliente
- id_conductor
- id_vehiculo
- id_usuario

### Entregas

Registra la información relacionada con la entrega de la mercancía al finalizar el servicio.

**Campos principales:**

- id_entrega
- fecha_entrega
- observaciones
- estado
- id_servicio

---

## 4. Relaciones Principales

### Clientes → Servicios

Un cliente puede solicitar varios servicios de transporte, mientras que cada servicio pertenece a un solo cliente.

**Relación: 1:N**

### Conductores → Servicios

Un conductor puede realizar varios servicios a lo largo del tiempo, mientras que cada servicio tiene un conductor asignado.

**Relación: 1:N**

### Vehículos → Servicios

Un vehículo puede ser utilizado en diferentes servicios, mientras que cada servicio tiene un vehículo asignado.

**Relación: 1:N**

### Usuarios → Servicios

Un usuario puede registrar varios servicios dentro del sistema, mientras que cada servicio es registrado por un usuario.

**Relación: 1:N**

### Servicios → Entregas

Un servicio puede estar pendiente de entrega y, cuando finaliza el transporte, puede registrarse la entrega correspondiente.

**Relación: 1:0..1**

---

## 5. Resumen

| Entidad | Relación | Entidad |
|---|---|---|
| Clientes | 1:N | Servicios |
| Conductores | 1:N | Servicios |
| Vehículos | 1:N | Servicios |
| Usuarios | 1:N | Servicios |
| Servicios | 1:0..1 | Entregas |
