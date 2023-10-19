
CREATE TABLE `tareas` (
  `id` identity NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `responsable` varchar(255) NOT NULL,
  `estado` enum('completa','incompleta') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `nombre`, `fecha`, `responsable`, `estado`) VALUES
(1, 'Tarea 1', '2023-10-18', 'Juan', 'incompleta'),
(2, 'Tarea 2', '2023-10-19', 'María', 'incompleta'),
(3, 'Tarea 3', '2023-10-20', 'Pedro', 'completa'),
(4, 'hola', '2023-03-01', 'asa', 'incompleta'),
(5, 'hola', '2085-05-04', 'lol', 'incompleta');


ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;


