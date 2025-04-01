-- Crear tabla de Visitantes
CREATE TABLE Visitantes (
    visitante_id INT AUTO_INCREMENT PRIMARY KEY,  -- Identificador único
    nombre VARCHAR(255) NOT NULL,                 -- Nombre del visitante
    identificacion VARCHAR(50) NOT NULL UNIQUE,   -- Número de identificación
    telefono VARCHAR(15),                         -- Teléfono del visitante
    email VARCHAR(100)                            -- Correo electrónico del visitante (opcional)
);

-- Crear tabla de Razones de Visita
CREATE TABLE Razones_Visita (
    razon_id INT AUTO_INCREMENT PRIMARY KEY,      -- Identificador único
    descripcion VARCHAR(255) NOT NULL             -- Descripción del motivo de la visita
);

-- Crear tabla de Empleados
CREATE TABLE Empleados (
    empleado_id INT AUTO_INCREMENT PRIMARY KEY,   -- Identificador único
    nombre VARCHAR(255) NOT NULL,                  -- Nombre del empleado
    cargo VARCHAR(100),                            -- Cargo del empleado
    telefono VARCHAR(15)                           -- Teléfono del empleado
);

-- Crear tabla de Registro de Visitas
CREATE TABLE Registro_Visitas (
    registro_id INT AUTO_INCREMENT PRIMARY KEY,    -- Identificador único del registro
    visitante_id INT,                              -- Relación con la tabla Visitantes
    razon_id INT,                                  -- Relación con la tabla Razones_Visita
    empleado_id INT,                               -- Relación con la tabla Empleados
    fecha_visita DATETIME NOT NULL,                -- Fecha y hora de la visita
    estado VARCHAR(50) DEFAULT 'Pendiente',        -- Estado de la visita (Pendiente, En Proceso, Completada)
    comentarios TEXT,                              -- Comentarios adicionales
    FOREIGN KEY (visitante_id) REFERENCES Visitantes(visitante_id) ON DELETE CASCADE,  -- Relación con la tabla Visitantes
    FOREIGN KEY (razon_id) REFERENCES Razones_Visita(razon_id) ON DELETE CASCADE,     -- Relación con la tabla Razones_Visita
    FOREIGN KEY (empleado_id) REFERENCES Empleados(empleado_id) ON DELETE CASCADE    -- Relación con la tabla Empleados
);

-- Index para optimizar las consultas por fecha y visitante
CREATE INDEX idx_registro_fecha ON Registro_Visitas (fecha_visita);
CREATE INDEX idx_registro_visitante ON Registro_Visitas (visitante_id);
