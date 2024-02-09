/*
* @author Rebeca Sánchez Pérez
* @version 1.0
* @since 22/01/2023
*/

/*Se pone en uso la base de datos*/
USE DB204DWESAplicacionFinal;

/*Se insertan valores en la tabla Departamento*/
INSERT INTO T02_Departamento (T02_CodDepartamento, T02_DescDepartamento, T02_FechaCreacionDepartamento, T02_VolumenDeNegocio, T02_FechaBajaDepartamento) VALUES
    ('AAA', 'Departamento de Ventas', now(), 100000.50, NULL),
    ('AAB', 'Departamento de Marketing', now(), 50089.50, NULL),
    ('AAC', 'Departamento de Finanzas', now(), 600.50, '2023-11-13 13:06:00');

/*Se insertan valores en la tabla Usuario*/
INSERT INTO T01_Usuario (T01_CodUsuario, T01_Password, T01_DescUsuario, T01_Perfil) VALUES
    ('admin', SHA2('adminpaso', 256), 'administrador', 'administrador'),
    ('alvaro', SHA2('alvaropaso', 256), 'Álvaro Cordero Miñambres', 'usuario'),
    ('carlos', SHA2('carlospaso', 256), 'Carlos García Cachón', 'usuario'),
    ('oscar', SHA2('oscarpaso', 256), 'Oscar Pascual Ferrero', 'usuario'),
    ('borja', SHA2('borjapaso', 256), 'Borja Nuñez Refoyo', 'usuario'),
    ('rebeca', SHA2('rebecapaso', 256), 'Rebeca Sánchez Pérez', 'usuario'),
    ('erika', SHA2('erikapaso', 256), 'Erika Martínez Pérez', 'usuario'),
    ('ismael', SHA2('ismaelpaso', 256), 'Ismael Ferreras García', 'usuario'),
    ('heraclio', SHA2('heracliopaso', 256), 'Heraclio Borbujo Moran', 'administrador'),
    ('amor', SHA2('amorpaso', 256), 'Amor Rodriguez Navarro', 'administrador');

/*Se insertan valores en la tabla Departamento*/
INSERT INTO T11_Trabajo (T11_CodTrabajo, T11_DescTrabajo, T11_FechaCreacion, T11_FechaInicio, T11_FechaFin, T11_Estado, T11_Coste) VALUES
    ('C01', 'Poner la lavadora', '2024-02-08 14:00:00', '2024-02-09 15:30:00', '2024-02-09 15:35:00', 'finalizado', 6),
    ('C02', 'Tender la ropa', '2024-02-08 14:00:00', '2024-02-09 16:45:00', NULL, 'en curso', 0),
    ('C03', 'Aprobar DWES', '2024-01-26 11:02:50', '2024-01-27 12:00:00', NULL, 'en curso', 10.05),
    ('F01', 'Ir a comprar al Mercadona', '2024-02-07 20:23:30', NULL, NULL, 'pendiente', 56.95),
    ('F02', 'Echarle gasolina al coche', '2024-02-05 18:20:00', '2024-02-06 20:00:00', '2024-02-06 20:10:00', 'finalizado', 40.34);