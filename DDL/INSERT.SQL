INSERT INTO Investigacion (enunciado_inv) VALUES('Patrones de Diseño de arquitecturas de Software Enterprises');
INSERT INTO OBJETIVO_GENERAL (DESCRIPCION_OG,NIVEL_OG,FK_TDI) VALUES('Desarrollar un sistema reusable (framework) como solución que se plantean en el desarrollo de sistemas con arquitecturas de software de tipo Enterprise.',1,1);
INSERT INTO TIPO_DE_INVESTIGACION (NOMBRE_TDI,DESCRIPCION_TDI,FK_PDI) VALUES ('PROYECTIVA','ES UNA INVESTIGACION PROYECTIVA',1);
INSERT INTO PREGUNTA_DE_INVESTIGACION (PREGUNTA_PDI,FK_INV) VALUES ('¿COMO SON LOS PATRONES DE DISEÑO DE ARQUITECTURA DE LOS SOFTWARE ENTERPRISE?',1);
INSERT INTO INSTRUMENTO (NOMBRE_INS,DESCRIPCION_INS) VALUES ('Análisis','Mediante un analisis detallado de varias fuentes se llega a un resultado');
INSERT INTO CONTEXTO (NOMBRE_CON,DESCRIPCION_CON) VALUES ('APLICACIONES ENTERPRISE','SOFTWARES APLICADOS A VARIAS ENTERPRISES');
INSERT INTO FUENTE (DESCRIPCION_FUE,FK_INS)VALUES ('NO HAY UNA FUENTE O FUENTES ESPECIFICADAS PARA ESE TRABAJO DE INVESTIGACION',1);
INSERT INTO EVENTO_DE_ESTUDIO (NOMBRE_EDE,DESCRIPCION_EDE,FK_INS) VALUES ('ANALISIS DE FRAMEWORK','SE ANALIZA DETALLADAMENTE UN FRAMEWORK',1);
INSERT INTO EVENTO_DE_ESTUDIO (NOMBRE_EDE,DESCRIPCION_EDE,FK_INS) VALUES ('ANALISIS DE PATRONES','SE ANALIZA LOS DIFERENTES PATRONES ENCONTRADOS',1);
INSERT INTO EVENTO_DE_ESTUDIO (NOMBRE_EDE,DESCRIPCION_EDE,FK_INS) VALUES ('CREACION DEL NUEVO SOFTWARE','SE DESARROLLA UN SOFTWARE QUE PLANTEE UNA SOLUCION',1);
INSERT INTO ESTADIO (DESCRIPCION_EST,RECORRIDO_EST,FK_OE) VALUES ('SE DESCRIBEN LOS RESULTADOS OBTENIDOS BREVEMENTE','DESCRIPTIVO',1);
INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('Analizar los problemas que se plantean en el desarrollo de sistemas con arquitecturas de software de tipo Enterprise',1);
INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('Mantener la separación de la lógica del negocio, la presentación y los datos; y, además, conservar el empaquetamiento logrado en el análisis usando criterios de cohesión del negocio.',1);
INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('Establecer criterios de diseño de estos sistemas con arquitecturas de software de tipo Enterprise. y qué tecnologías utilizar.',1);
INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('examinar los distintos Patrones de Diseño conocidos como solución a los distintos problemas que se plantean en el desarrollo de este tipo de sistemas con arquitecturas de software de tipo Enterprise; también las distintas implementaciones tecnológicas construidas en base a estos patrones.',1);
INSERT INTO POBLACION (DESCRIPCION_POB,FK_TDM) VALUES ('Los sistemas con arquitecturas de software de tipo Enterprise',1);
INSERT INTO TECNICA_DE_MUESTREO (DESCRIPCION_TDM,FK_MUE) VALUES ('SOFTWARE DE TIPO ENTERPRISE QUE SE DESEA DESARROLLAR',1);
INSERT INTO MUESTRA (DESCRIPCION_MUE) VALUES ('SOFTWARE TIPO ENTERPRISE PROPUESTO');
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('Análisis de la capa de servicio.', 'SE ANALIZA LA CAPA DE SERVICIO',1,1);
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('Análisis de la capa de modelo del dominio.','SE ANALIZA LA CAPA DE DOMINIO',1,1);
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('Análisis de capa de presentación.','SE ANALIZA LA CAPA DE PRESENTACION',1,1);
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('Realización del diagrama de paquetes del framework','SE REALIZA EL DIAGRAMA DE PAQUETES DEL FRAMEWORK',1,1);
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('Identificación.','SE IDENTIFICA EL PATRON UTILIZADO',2,1);
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('Asociación.','SE ASOCIA AL PATRON O PATRONES UTILIZADOS',2,1);
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('Mapeos de objetos de tablas','SE MAPEAN LOS OBJETOS DE TABLAS',2,1);
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('Reconocer patrones relacionados','SE INTENTAN RECONOCER LOS PATRONES RELACIONADOS SI ES QUE HAY ALGUNO',2,1);
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('Generador del código para el framework.','SE PROCEDE A GENERAR CODIGO PARA EL FRAMEWORK',3,1);
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('Caso de estudio.','SE DEFINE EL CASO AL CUAL SE VA A DESAROLLAR EL SOFTWARE',3,1);
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('Uso del framework','SE VERIFICA EL USO DEL FRAMEWORK DESARROLLADO',3,1);
INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('Seguridad autenticación','SE VERIFICA LA SEGURIDAD MEDIANTE AUTENTICACION',1);
INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('Autorización','SE VERIFICA SI UN USUARIO ESTA AUTORIZADO',1);
INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('Arquitectura','SE ESTABLECE UNA ARQUITECTURA PARA EL GENERADOR DE CODIGO PARA EL FRAMEWORK',9);
INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('Tipos de generadores provistos.','SE ESTABLECEN LOS DIFERENTES TIPOS DE GENERADOES DISPONIBLES',9);
INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('Descripción del dominio','SE DESCRIBE EL DOMINIO A UTILIZAR',10);
INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('Modelo del dominio.','SE DEFINE EL MODELO DEL DOMINIO A USAR',10);
INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('Transición del análisis al diseño.','AL CULMINAR LA FASE DE ANALISIS SE COMIENZA LA FASE DE DISEÑO',10);
INSERT INTO UNIDAD_DE_ESTUDIO (DESCRIPCION_UDE,NOMBRE_UDE,FK_POB) VALUES ('LOS DIFERENTES PATRONES DE DISEÑO DISPONIBLES','PATRONES DE DISEÑO',1);;
INSERT INTO USUARIO (COD_USU,NOMBRE_USU,CORREO_USU,CONTRASEÑA_USU,FK_ROL) VALUES (1,'DIEGO FERNANDO MONTALDO','DIEGO@FERNANDO.COM','12456',1);
INSERT INTO ROL (NOMBRE_ROL,DESCRIPCION_ROL) VALUES ('INVESTIGADOR','SUJETO QUE INVESTIGA');
INSERT INTO ROL (NOMBRE_ROL,DESCRIPCION_ROL) VALUES ('TUTOR','SUJETO QUE GUIA AL INVESTIGADOR');
INSERT INTO USUARIO (COD_USU,NOMBRE_USU,CORREO_USU,CONTRASEÑA_USU,FK_ROL) VALUES (2,'GUILLERMO PANTALEO','DIEGO@PANTALEO.COM','123',2);
INSERT INTO EDE_PDI (FK_EDE, FK_PDI) VALUES (1, 1),
											(2, 1),
											(3, 1);
INSERT INTO OE_PDI (FK_OE, FK_PDI) VALUES (1, 1),
										  (2, 1),
										  (3, 1),
										  (4, 1);
INSERT INTO PDI_UDE (FK_PDI, FK_UDE) VALUES (1, 1);
INSERT INTO PDI_CON (FK_PDI, FK_CON) VALUES (1, 1);


INSERT INTO Investigacion (enunciado_inv) VALUES('Aprendizaje automática basado en intercambio de operadores en sistemas inteligentes autónomos.');
INSERT INTO OBJETIVO_GENERAL (DESCRIPCION_OG,NIVEL_OG,FK_TDI) VALUES('los sistemas inteligentes autónomos (SIA) deben ser capaces de aprender el comportamiento de su ambiente y estructurar este aprendizaje al igual que, deben ser capaces de auto proponerse objetivos y construir planes  para alcanzar dichos objetivos.',1,1);
INSERT INTO TIPO_DE_INVESTIGACION (NOMBRE_TDI,DESCRIPCION_TDI,FK_PDI) VALUES ('PROYECTIVA','ES UNA INVESTIGACION PROYECTIVA',2);
INSERT INTO PREGUNTA_DE_INVESTIGACION (PREGUNTA_PDI,FK_INV) VALUES ('¿COMO ES EL APRENDIZAJE AUTOMATICO BASADO EN EL INTERCAMBIO DE OPERADORES EN LOS SISTEMAS INTELIGENTES AUTONOMOS?',2);
INSERT INTO INSTRUMENTO (NOMBRE_INS,DESCRIPCION_INS) VALUES ('EXPERIMETNAL','SE APLICA VARIAS VECES UN PROCESO PARA CONSEGUIR UN PROMEDIO');
INSERT INTO CONTEXTO (NOMBRE_CON,DESCRIPCION_CON) VALUES ('Sistemas Inteligentes autonomos','SIA SON SISTEMAS QUE ACTUAN SEGUN LO PROGRAMADO');
INSERT INTO FUENTE (DESCRIPCION_FUE,FK_INS)VALUES ('García Martinez(1997)',2),
												  ('Borrajo (1998)',2),
												  ('Fritz et al(1989)',2);
INSERT INTO EVENTO_DE_ESTUDIO (NOMBRE_EDE,DESCRIPCION_EDE,FK_INS) VALUES ('Integración SIA-Khepera.','INTEGRACION DE SIA- KHEPERA',2);
INSERT INTO EVENTO_DE_ESTUDIO (NOMBRE_EDE,DESCRIPCION_EDE,FK_INS) VALUES ('Diseño Experimental.','SE ANALIZA LOS DIFERENTES PATRONES ENCONTRADOS',2);
INSERT INTO ESTADIO (DESCRIPCION_EST,RECORRIDO_EST,FK_OE) VALUES ('SE DESCRIBEN LOS RESULTADOS OBTENIDOS BREVEMENTE','DESCRIPTIVO',1);
INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('El sistema obtendrá operadores de aprendizaje y planificación mediante la observación de las consecuencias de ejecutar acciones planteados en el ambiente',2);
INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('Evidenciar que una arquitectura multiagente mostrará cómo la interacción con otros sistemas de aprendizaje mejora la convergencia del aprendizaje y el comportamiento exitoso.',2);
INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('Establecer el estado del dominio de conocimiento sobre arquitecturas inteligentes (GINKO, PRODIGY, SOAR, LIVE, DYNA, Christiansen, Hayes-Roth y SIA) y presentar el entorno en el cual se plantea el problema a abordar en la tesis, además se señalan cuestiones relativas a la integración de la arquitectura elegida con una plataforma estándar.',2);
INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('Presentar los resultados experimentales del comportamiento del sistema inteligente autónomo implementado en la plataforma Khepera, y previo se sumarizan las respuestas a las mismas que aparecen a lo largo de la tesis.',2);
INSERT INTO POBLACION (DESCRIPCION_POB,FK_TDM) VALUES ('Los sistemas inteligentes autónomos (SIA)',2);
INSERT INTO TECNICA_DE_MUESTREO (DESCRIPCION_TDM,FK_MUE) VALUES ('SIA AUTOMOS AL ALCANZE DEL INVESTIGADOR',2);
INSERT INTO MUESTRA (DESCRIPCION_MUE) VALUES ('Un SIA propuesto por el investigador.');
--12
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('El problema de la extensión del modelo del SIA.','SE DESCRIBE EL PROBLEMA DE LA EXENTSION DEL MODELO DEL SIA',4,2);
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('Interacción entre intercambio de operadores y otras estrategias.','SE DESCRIBE LA INTERACCION ENTRE EL INTERCAMBIO DE OPERADORES',4,2);
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('Gráficas y su Interpretación','SE INTERPRETAN LAS GRAFICAS',5,2);
INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('Cantidad de situaciones y cantidad de teorías a lo largo del tiempo','CUANTAS SITUACIONES Y CANTIDADES DE TEORIAS HAN EXISTIDO',14);
INSERT INTO UNIDAD_DE_ESTUDIO (DESCRIPCION_UDE,NOMBRE_UDE,FK_POB) VALUES ('SIA MEJOR CONOCIDO COMO SITEMAS INTELIGENTES AUTONOMOS','Sistema inteligente autónomo',1);;
INSERT INTO USUARIO (COD_USU,NOMBRE_USU,CORREO_USU,CONTRASEÑA_USU,FK_ROL) VALUES (3,'Pablo Maceri','pablo@maceri.com','12456',1);
INSERT INTO USUARIO (COD_USU,NOMBRE_USU,CORREO_USU,CONTRASEÑA_USU,FK_ROL) VALUES (4,'Ramón Garcia-Martinez','ramon@garcia,com','123',2);
INSERT INTO EDE_PDI (FK_EDE, FK_PDI) VALUES (1, 2),
											(2, 2);
INSERT INTO OE_PDI (FK_OE, FK_PDI) VALUES (1, 2),
										  (2, 2),
										  (3, 2),
										  (4, 2);
INSERT INTO PDI_UDE (FK_PDI, FK_UDE) VALUES (2, 2);
INSERT INTO PDI_CON (FK_PDI, FK_CON) VALUES (2, 2);



INSERT INTO Investigacion (enunciado_inv) VALUES('Diseño e implementación de un sistema WEB para el control de asistencias de profesores, preparadores y ayudantes de cátedra de la UCAB vía RFID');
INSERT INTO PREGUNTA_DE_INVESTIGACION (PREGUNTA_PDI,FK_INV) VALUES ('¿Cómo se llevan a cabo el control de asistencias en la UCAB actualmente?',3);
INSERT INTO TIPO_DE_INVESTIGACION (NOMBRE_TDI,DESCRIPCION_TDI,FK_PDI) VALUES ('PROYECTIVA','ES UNA INVESTIGACION PROYECTIVA',3);
INSERT INTO OBJETIVO_GENERAL (DESCRIPCION_OG,NIVEL_OG,FK_TDI) VALUES('Diseñar desarrollar e implementar un sistema web para el control de asistencias de profesores preparadores y ayudantes de cátedra utilizando RFID.',1,1);
INSERT INTO INSTRUMENTO (NOMBRE_INS,DESCRIPCION_INS) VALUES ('Experimental ','Al implementar el sistema dependerá de profesores y estudiantes su uso');
INSERT INTO CONTEXTO (NOMBRE_CON,DESCRIPCION_CON) VALUES ('Control de asistencias','Control de asistencia de la UCAB');
INSERT INTO FUENTE (DESCRIPCION_FUE,FK_INS)VALUES ('¿que son las bases de datos? (2007) Damian,P.',3),
												  ('Arquitectura Modelo/Vista/Controlador (2007) Catalani, E.',3);
INSERT INTO EVENTO_DE_ESTUDIO (NOMBRE_EDE,DESCRIPCION_EDE,FK_INS) VALUES ('Control de asistencia','control de asistencias por parte de profesores, preparadores y ayudantes de catedra',3);
INSERT INTO ESTADIO (DESCRIPCION_EST,RECORRIDO_EST,FK_OE) VALUES (' Se estima la efectividad del sistema de control que ya está funcionando','Evaluativo',3);
INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('evaluar el tipo de etiqueta y antena RFID, la frecuencia de transmisión, así como el entorno en el que operará el sistema de control de asistencia.',3),
															  ('Implementar el uso de etiquetas RFID de acuerdo a la evaluación mencionada anteriormente.',3),
															  ('Estudiar los distintos aspectos relacionados con la seguridad del sistema RFID.',3),
															  ('Implementar el nivel de seguridad que se utilizara en el sistema para el envío y recepción de dados vía RFID.',3),
															  ('Construir el dispositivo receptor del sistema RFID',3),
															  ('Diseñar e implementar un modelo de base de datos que contenga la información de los preparadores y ayudantes de catedra y los profesores de la UCAB.',3),
															  ('Desarrollar una aplicación Web que gestione el control de asistencia de los profesores preparadores y ayudantes de catedra de la UCAB basados en los datos obtenidos mediante el uso del sistema RFID diseñado.',3),
															  ('Desarrollar un módulo de reportes en la aplicación Web para la visualización de las asistencias de los profesores, preparadores y ayudantes de catedra.',3);
INSERT INTO MUESTRA (DESCRIPCION_MUE) VALUES ('Profesores, preparadores y ayudantes de catedra de la UCAB de la escuela de ingeniería en informática de la UCAB.');
INSERT INTO TECNICA_DE_MUESTREO (DESCRIPCION_TDM,FK_MUE) VALUES ('Sistema RFID',3);
INSERT INTO POBLACION (DESCRIPCION_POB,FK_TDM) VALUES ('Profesores, preparadores y ayudantes de catedra de la UCAB',3);
INSERT INTO UNIDAD_DE_ESTUDIO (DESCRIPCION_UDE,NOMBRE_UDE,FK_POB) VALUES ('Sistema de control de asistencia usado por los profesores','Sistema de control de asistencia',3);
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('análisis de requerimientos.', 'Se analiza las necesidades de los profesores y preparadores',3,3),
																	   ('diseño.', 'Se genera el diseño optimo de la aplicacion',3,3),
																	   ('codificación', 'Se procede con la codificacion de los requerimientos funcionales',3,3),
																	   ('prueba', 'Se realizan pruebas entre un grupo de profesores',3,3);
INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('evaluación de antena RFID.','Se verifica la antena RFID',1),
															   ('comunicación entre receptor RF y la base de datos.','se relaizan pruebas entre el receptor RFID y la base de datos',15),
															   ('definición de requerimientos.','Se determinan los requerimientos',15),
															   ('realización de los casos de uso y actores del sistema.','Se generan los diagramas uml necesarios para el diseño',15),
															   ('definición del modelo funcional.','Se genera el modelo funcional a partir de modelos UML',16),
															   ('arquitectura del receptor RFID.','Se toma en cuenta la arquitectura del receptor RFID para su implementacion en el diseño',16),
															   ('arquitectura de la aplicación web.','Se genera la arquitectura que debera tener la aplicacion teniendo en cuenta las consideraciones anteriores',16),
                                                               ('modelo de datos.','Se determinan los modelso de datos pertinentes',16),
															   ('análisis de estándares de codificación.','Se toman en cuenta los estandares de codificacion ya existentes',17);
INSERT INTO USUARIO (COD_USU,NOMBRE_USU,CORREO_USU,CONTRASEÑA_USU,FK_ROL) VALUES (5,'Elias Hiba','ELIAS@HIBA.COM','12456',1);
INSERT INTO USUARIO (COD_USU,NOMBRE_USU,CORREO_USU,CONTRASEÑA_USU,FK_ROL) VALUES (6,'Wilmer Pereira','WILMER@PEREIRA.COM','12456',2);
INSERT INTO EDE_PDI (FK_EDE, FK_PDI) VALUES (1, 3);
INSERT INTO OE_PDI (FK_OE, FK_PDI) VALUES (1, 3),
										  (2, 3),
										  (3, 3),
										  (4, 3),
										  (5, 3),
										  (6, 3),
										  (7, 3),
										  (8, 3);
INSERT INTO PDI_UDE (FK_PDI, FK_UDE) VALUES (3, 3);
INSERT INTO PDI_CON (FK_PDI, FK_CON) VALUES (3, 3);