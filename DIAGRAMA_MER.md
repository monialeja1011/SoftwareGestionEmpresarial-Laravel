# Diagrama MER - Empresa de Transporte

```mermaid
erDiagram

    USUARIOS {
        int id_usuario PK
        string nombre
        string correo
        string password
        string rol
    }

    CLIENTES {
        int id_cliente PK
        string nombre
        string documento
        string telefono
        string correo
        string direccion
    }

    CONDUCTORES {
        int id_conductor PK
        string nombre
        string documento
        string telefono
        string licencia
        string estado
    }

    VEHICULOS {
        int id_vehiculo PK
        string placa
        string tipo
        string marca
        string modelo
        int capacidad
        string estado
    }

    SERVICIOS {
        int id_servicio PK
        date fecha
        date fecha_programada
        string tipo_servicio
        string origen
        string destino
        decimal valor
        string estado
        string observaciones
        int id_cliente FK
        int id_conductor FK
        int id_vehiculo FK
        int id_usuario FK
    }

    ENTREGAS {
        int id_entrega PK
        date fecha_entrega
        string observaciones
        string estado
        int id_servicio FK
    }

    CLIENTES ||--o{ SERVICIOS : solicita
    CONDUCTORES ||--o{ SERVICIOS : realiza
    VEHICULOS ||--o{ SERVICIOS : utiliza
    USUARIOS ||--o{ SERVICIOS : registra
    SERVICIOS ||--o| ENTREGAS : genera