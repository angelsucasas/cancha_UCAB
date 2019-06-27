-------------------------------------------INVESTIGACION-----------------------------------

INSERT INTO Investigacion (enunciado_inv) VALUES('Patrones de Diseño de arquitecturas de Software Enterprises');
INSERT INTO Investigacion (enunciado_inv) VALUES('Aprendizaje automática basado en intercambio de operadores en sistemas inteligentes autónomos.');
INSERT INTO Investigacion (enunciado_inv) VALUES('Diseño e implementación de un sistema WEB para el control de asistencias de profesores, preparadores y ayudantes de cátedra de la UCAB vía RFID');

----------------------------------------- OBJETIVO GENERAL---------------------------------

INSERT INTO OBJETIVO_GENERAL (DESCRIPCION_OG,NIVEL_OG,FK_TDI) VALUES('Desarrollar un sistema reusable (framework) como solución que se plantean en el desarrollo de sistemas con arquitecturas de software de tipo Enterprise.',1,1);
INSERT INTO OBJETIVO_GENERAL (DESCRIPCION_OG,NIVEL_OG,FK_TDI) VALUES('los sistemas inteligentes autónomos (SIA) deben ser capaces de aprender el comportamiento de su ambiente y estructurar este aprendizaje al igual que, deben ser capaces de auto proponerse objetivos y construir planes  para alcanzar dichos objetivos.',1,1);
INSERT INTO OBJETIVO_GENERAL (DESCRIPCION_OG,NIVEL_OG,FK_TDI) VALUES('Diseñar desarrollar e implementar un sistema web para el control de asistencias de profesores preparadores y ayudantes de cátedra utilizando RFID.',1,1);

-------------------------------------------OBJETIVO ESPECIFICO------------------------------

INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('Analizar los problemas que se plantean en el desarrollo de sistemas con arquitecturas de software de tipo Enterprise',1);
INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('Mantener la separación de la lógica del negocio, la presentación y los datos; y, además, conservar el empaquetamiento logrado en el análisis usando criterios de cohesión del negocio.',1);
INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('Establecer criterios de diseño de estos sistemas con arquitecturas de software de tipo Enterprise. y qué tecnologías utilizar.',1);
INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('examinar los distintos Patrones de Diseño conocidos como solución a los distintos problemas que se plantean en el desarrollo de este tipo de sistemas con arquitecturas de software de tipo Enterprise; también las distintas implementaciones tecnológicas construidas en base a estos patrones.',1);
INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('El sistema obtendrá operadores de aprendizaje y planificación mediante la observación de las consecuencias de ejecutar acciones planteados en el ambiente',2);
INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('Evidenciar que una arquitectura multiagente mostrará cómo la interacción con otros sistemas de aprendizaje mejora la convergencia del aprendizaje y el comportamiento exitoso.',2);
INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('Establecer el estado del dominio de conocimiento sobre arquitecturas inteligentes (GINKO, PRODIGY, SOAR, LIVE, DYNA, Christiansen, Hayes-Roth y SIA) y presentar el entorno en el cual se plantea el problema a abordar en la tesis, además se señalan cuestiones relativas a la integración de la arquitectura elegida con una plataforma estándar.',2);
INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('Presentar los resultados experimentales del comportamiento del sistema inteligente autónomo implementado en la plataforma Khepera, y previo se sumarizan las respuestas a las mismas que aparecen a lo largo de la tesis.',2);
INSERT INTO OBJETIVO_ESPECIFICO (DESCRIPCION_OE,FK_OG) VALUES ('evaluar el tipo de etiqueta y antena RFID, la frecuencia de transmisión, así como el entorno en el que operará el sistema de control de asistencia.',3),
															  ('Implementar el uso de etiquetas RFID de acuerdo a la evaluación mencionada anteriormente.',3),
															  ('Estudiar los distintos aspectos relacionados con la seguridad del sistema RFID.',3),
															  ('Implementar el nivel de seguridad que se utilizara en el sistema para el envío y recepción de dados vía RFID.',3),
															  ('Construir el dispositivo receptor del sistema RFID',3),
															  ('Diseñar e implementar un modelo de base de datos que contenga la información de los preparadores y ayudantes de catedra y los profesores de la UCAB.',3),
															  ('Desarrollar una aplicación Web que gestione el control de asistencia de los profesores preparadores y ayudantes de catedra de la UCAB basados en los datos obtenidos mediante el uso del sistema RFID diseñado.',3),
															  ('Desarrollar un módulo de reportes en la aplicación Web para la visualización de las asistencias de los profesores, preparadores y ayudantes de catedra.',3);

--------------------------------------------TIPO DE INVESTIGACION-----------------------

INSERT INTO TIPO_DE_INVESTIGACION (NOMBRE_TDI,DESCRIPCION_TDI,FK_PDI) VALUES ('PROYECTIVA','ES UNA INVESTIGACION PROYECTIVA',1);
INSERT INTO TIPO_DE_INVESTIGACION (NOMBRE_TDI,DESCRIPCION_TDI,FK_PDI) VALUES ('PROYECTIVA','ES UNA INVESTIGACION PROYECTIVA',2);
INSERT INTO TIPO_DE_INVESTIGACION (NOMBRE_TDI,DESCRIPCION_TDI,FK_PDI) VALUES ('PROYECTIVA','ES UNA INVESTIGACION PROYECTIVA',3);

----------------------------------------PREGUNTA DE INVESTIGACION------------------------

INSERT INTO PREGUNTA_DE_INVESTIGACION (PREGUNTA_PDI,FK_INV) VALUES ('¿COMO SON LOS PATRONES DE DISEÑO DE ARQUITECTURA DE LOS SOFTWARE ENTERPRISE?',1);
INSERT INTO PREGUNTA_DE_INVESTIGACION (PREGUNTA_PDI,FK_INV) VALUES ('¿COMO ES EL APRENDIZAJE AUTOMATICO BASADO EN EL INTERCAMBIO DE OPERADORES EN LOS SISTEMAS INTELIGENTES AUTONOMOS?',2);
INSERT INTO PREGUNTA_DE_INVESTIGACION (PREGUNTA_PDI,FK_INV) VALUES ('¿Cómo se llevan a cabo el control de asistencias en la UCAB actualmente?',3);

----------------------------------------INSTRUMENTO--------------------------------------

INSERT INTO INSTRUMENTO (NOMBRE_INS,DESCRIPCION_INS) VALUES ('Análisis','Mediante un analisis detallado de varias fuentes se llega a un resultado');
INSERT INTO INSTRUMENTO (NOMBRE_INS,DESCRIPCION_INS) VALUES ('EXPERIMETNAL','SE APLICA VARIAS VECES UN PROCESO PARA CONSEGUIR UN PROMEDIO');
INSERT INTO INSTRUMENTO (NOMBRE_INS,DESCRIPCION_INS) VALUES ('Experimental ','Al implementar el sistema dependerá de profesores y estudiantes su uso');

-----------------------------------------CONTEXTO----------------------------------------


INSERT INTO CONTEXTO (NOMBRE_CON,DESCRIPCION_CON) VALUES ('APLICACIONES ENTERPRISE','SOFTWARES APLICADOS A VARIAS ENTERPRISES');
INSERT INTO CONTEXTO (NOMBRE_CON,DESCRIPCION_CON) VALUES ('Sistemas Inteligentes autonomos','SIA SON SISTEMAS QUE ACTUAN SEGUN LO PROGRAMADO');
INSERT INTO CONTEXTO (NOMBRE_CON,DESCRIPCION_CON) VALUES ('Control de asistencias','Control de asistencia de la UCAB');

-----------------------------------------FUENTE---------------------------------------------

INSERT INTO FUENTE (DESCRIPCION_FUE,FK_INS)VALUES ('NO HAY UNA FUENTE O FUENTES ESPECIFICADAS PARA ESE TRABAJO DE INVESTIGACION',1);
INSERT INTO FUENTE (DESCRIPCION_FUE,FK_INS)VALUES ('García Martinez(1997)',2),
												  ('Borrajo (1998)',2),
												  ('Fritz et al(1989)',2);
INSERT INTO FUENTE (DESCRIPCION_FUE,FK_INS)VALUES ('¿que son las bases de datos? (2007) Damian,P.',3),
												  ('Arquitectura Modelo/Vista/Controlador (2007) Catalani, E.',3);

------------------------------------------------EVENTO DE ESTUDIO-------------------------------

INSERT INTO EVENTO_DE_ESTUDIO (NOMBRE_EDE,DESCRIPCION_EDE,FK_INS) VALUES ('ANALISIS DE FRAMEWORK','SE ANALIZA DETALLADAMENTE UN FRAMEWORK',1);
INSERT INTO EVENTO_DE_ESTUDIO (NOMBRE_EDE,DESCRIPCION_EDE,FK_INS) VALUES ('ANALISIS DE PATRONES','SE ANALIZA LOS DIFERENTES PATRONES ENCONTRADOS',1);
INSERT INTO EVENTO_DE_ESTUDIO (NOMBRE_EDE,DESCRIPCION_EDE,FK_INS) VALUES ('CREACION DEL NUEVO SOFTWARE','SE DESARROLLA UN SOFTWARE QUE PLANTEE UNA SOLUCION',1);
INSERT INTO EVENTO_DE_ESTUDIO (NOMBRE_EDE,DESCRIPCION_EDE,FK_INS) VALUES ('Integración SIA-Khepera.','INTEGRACION DE SIA- KHEPERA',2);
INSERT INTO EVENTO_DE_ESTUDIO (NOMBRE_EDE,DESCRIPCION_EDE,FK_INS) VALUES ('Diseño Experimental.','SE ANALIZA LOS DIFERENTES PATRONES ENCONTRADOS',2);
INSERT INTO EVENTO_DE_ESTUDIO (NOMBRE_EDE,DESCRIPCION_EDE,FK_INS) VALUES ('Control de asistencia','control de asistencias por parte de profesores, preparadores y ayudantes de catedra',3);

------------------------------------------------ESTADIO-------------------------------------------

INSERT INTO ESTADIO (DESCRIPCION_EST,RECORRIDO_EST,FK_OE) VALUES ('SE DESCRIBEN LOS RESULTADOS OBTENIDOS BREVEMENTE','DESCRIPTIVO',1);
INSERT INTO ESTADIO (DESCRIPCION_EST,RECORRIDO_EST,FK_OE) VALUES ('SE DESCRIBEN LOS RESULTADOS OBTENIDOS BREVEMENTE','DESCRIPTIVO',1);
INSERT INTO ESTADIO (DESCRIPCION_EST,RECORRIDO_EST,FK_OE) VALUES (' Se estima la efectividad del sistema de control que ya está funcionando','Evaluativo',3);

-------------------------------------------------POBLACION-------------------------------------------

INSERT INTO POBLACION (DESCRIPCION_POB,FK_TDM) VALUES ('Los sistemas con arquitecturas de software de tipo Enterprise',1);
INSERT INTO POBLACION (DESCRIPCION_POB,FK_TDM) VALUES ('Los sistemas inteligentes autónomos (SIA)',2);
INSERT INTO POBLACION (DESCRIPCION_POB,FK_TDM) VALUES ('Profesores, preparadores y ayudantes de catedra de la UCAB',3);

-------------------------------------------------TECNICA DE MUESTREO---------------------------------

INSERT INTO TECNICA_DE_MUESTREO (DESCRIPCION_TDM,FK_MUE) VALUES ('SOFTWARE DE TIPO ENTERPRISE QUE SE DESEA DESARROLLAR',1);
INSERT INTO TECNICA_DE_MUESTREO (DESCRIPCION_TDM,FK_MUE) VALUES ('SIA AUTOMOS AL ALCANZE DEL INVESTIGADOR',2);
INSERT INTO TECNICA_DE_MUESTREO (DESCRIPCION_TDM,FK_MUE) VALUES ('Sistema RFID',3);

--------------------------------------------------MUESTRA--------------------------------------------

INSERT INTO MUESTRA (DESCRIPCION_MUE) VALUES ('SOFTWARE TIPO ENTERPRISE PROPUESTO');
INSERT INTO MUESTRA (DESCRIPCION_MUE) VALUES ('Un SIA propuesto por el investigador.');
INSERT INTO MUESTRA (DESCRIPCION_MUE) VALUES ('Profesores, preparadores y ayudantes de catedra de la UCAB de la escuela de ingeniería en informática de la UCAB.');

--------------------------------------------------SINERGIA--------------------------------------------

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
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('El problema de la extensión del modelo del SIA.','SE DESCRIBE EL PROBLEMA DE LA EXENTSION DEL MODELO DEL SIA',4,2);
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('Interacción entre intercambio de operadores y otras estrategias.','SE DESCRIBE LA INTERACCION ENTRE EL INTERCAMBIO DE OPERADORES',4,2);
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('Gráficas y su Interpretación','SE INTERPRETAN LAS GRAFICAS',5,2);
INSERT INTO SINERGIA (NOMBRE_SIN,DESCRIPCION_SIN,FK_EDE,FK_UDE) VALUES ('análisis de requerimientos.', 'Se analiza las necesidades de los profesores y preparadores',3,3),
																	   ('diseño.', 'Se genera el diseño optimo de la aplicacion',3,3),
																	   ('codificación', 'Se procede con la codificacion de los requerimientos funcionales',3,3),
																	   ('prueba', 'Se realizan pruebas entre un grupo de profesores',3,3);

---------------------------------------------INDICIO---------------------------------------------------------------

INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('Seguridad autenticación','SE VERIFICA LA SEGURIDAD MEDIANTE AUTENTICACION',1);
INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('Autorización','SE VERIFICA SI UN USUARIO ESTA AUTORIZADO',1);
INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('Arquitectura','SE ESTABLECE UNA ARQUITECTURA PARA EL GENERADOR DE CODIGO PARA EL FRAMEWORK',9);
INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('Tipos de generadores provistos.','SE ESTABLECEN LOS DIFERENTES TIPOS DE GENERADOES DISPONIBLES',9);
INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('Descripción del dominio','SE DESCRIBE EL DOMINIO A UTILIZAR',10);
INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('Modelo del dominio.','SE DEFINE EL MODELO DEL DOMINIO A USAR',10);
INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('Transición del análisis al diseño.','AL CULMINAR LA FASE DE ANALISIS SE COMIENZA LA FASE DE DISEÑO',10);
INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('Cantidad de situaciones y cantidad de teorías a lo largo del tiempo','CUANTAS SITUACIONES Y CANTIDADES DE TEORIAS HAN EXISTIDO',14);
INSERT INTO INDICIO (NOMBRE_IND,DESCRIPCION_IND,FK_SIN) VALUES ('evaluación de antena RFID.','Se verifica la antena RFID',1),
															   ('comunicación entre receptor RF y la base de datos.','se relaizan pruebas entre el receptor RFID y la base de datos',15),
															   ('definición de requerimientos.','Se determinan los requerimientos',15),
															   ('realización de los casos de uso y actores del sistema.','Se generan los diagramas uml necesarios para el diseño',15),
															   ('definición del modelo funcional.','Se genera el modelo funcional a partir de modelos UML',16),
															   ('arquitectura del receptor RFID.','Se toma en cuenta la arquitectura del receptor RFID para su implementacion en el diseño',16),
															   ('arquitectura de la aplicación web.','Se genera la arquitectura que debera tener la aplicacion teniendo en cuenta las consideraciones anteriores',16),
                                                               ('modelo de datos.','Se determinan los modelso de datos pertinentes',16),
															   ('análisis de estándares de codificación.','Se toman en cuenta los estandares de codificacion ya existentes',17);

------------------------------------UNIDAD_DE_ESTUDIO-------------------------------------------------

INSERT INTO UNIDAD_DE_ESTUDIO (DESCRIPCION_UDE,NOMBRE_UDE,FK_POB) VALUES ('LOS DIFERENTES PATRONES DE DISEÑO DISPONIBLES','PATRONES DE DISEÑO',1);;
INSERT INTO UNIDAD_DE_ESTUDIO (DESCRIPCION_UDE,NOMBRE_UDE,FK_POB) VALUES ('SIA MEJOR CONOCIDO COMO SITEMAS INTELIGENTES AUTONOMOS','Sistema inteligente autónomo',1);;
INSERT INTO UNIDAD_DE_ESTUDIO (DESCRIPCION_UDE,NOMBRE_UDE,FK_POB) VALUES ('Sistema de control de asistencia usado por los profesores','Sistema de control de asistencia',3);

-------------------------------------USUARIO----------------------------------------------------------

INSERT INTO USUARIO (COD_USU,NOMBRE_USU,CORREO_USU,CONTRASEÑA_USU,FK_ROL) VALUES (1,'DIEGO FERNANDO MONTALDO','DIEGO@FERNANDO.COM','12456',1);
INSERT INTO USUARIO (COD_USU,NOMBRE_USU,CORREO_USU,CONTRASEÑA_USU,FK_ROL) VALUES (2,'GUILLERMO PANTALEO','DIEGO@PANTALEO.COM','123',2);
INSERT INTO USUARIO (COD_USU,NOMBRE_USU,CORREO_USU,CONTRASEÑA_USU,FK_ROL) VALUES (3,'Pablo Maceri','pablo@maceri.com','12456',1);
INSERT INTO USUARIO (COD_USU,NOMBRE_USU,CORREO_USU,CONTRASEÑA_USU,FK_ROL) VALUES (4,'Ramón Garcia-Martinez','ramon@garcia,com','123',2);
INSERT INTO USUARIO (COD_USU,NOMBRE_USU,CORREO_USU,CONTRASEÑA_USU,FK_ROL) VALUES (5,'Elias Hiba','ELIAS@HIBA.COM','12456',1);
INSERT INTO USUARIO (COD_USU,NOMBRE_USU,CORREO_USU,CONTRASEÑA_USU,FK_ROL) VALUES (6,'Wilmer Pereira','WILMER@PEREIRA.COM','12456',2);

--------------------------------------ROL--------------------------------------------------------------

INSERT INTO ROL (NOMBRE_ROL,DESCRIPCION_ROL) VALUES ('INVESTIGADOR','SUJETO QUE INVESTIGA');
INSERT INTO ROL (NOMBRE_ROL,DESCRIPCION_ROL) VALUES ('TUTOR','SUJETO QUE GUIA AL INVESTIGADOR');

-------------------------------------EDE_PDI--------------------------------------

INSERT INTO EDE_PDI (FK_EDE, FK_PDI) VALUES (1, 1),
											(2, 1),
											(3, 1);
INSERT INTO EDE_PDI (FK_EDE, FK_PDI) VALUES (1, 2),
											(2, 2);											
INSERT INTO EDE_PDI (FK_EDE, FK_PDI) VALUES (1, 3);

-------------------------------------OE_PDI----------------------------------------
INSERT INTO OE_PDI (FK_OE, FK_PDI) VALUES (1, 1),
										  (2, 1),
										  (3, 1),
										  (4, 1);
INSERT INTO OE_PDI (FK_OE, FK_PDI) VALUES (1, 2),
										  (2, 2),
										  (3, 2),
										  (4, 2);
INSERT INTO OE_PDI (FK_OE, FK_PDI) VALUES (1, 3),
										  (2, 3),
										  (3, 3),
										  (4, 3),
										  (5, 3),
										  (6, 3),
										  (7, 3),
										  (8, 3);

-----------------------------------------PDI_UDE--------------------------------

INSERT INTO PDI_UDE (FK_PDI, FK_UDE) VALUES (1, 1);
INSERT INTO PDI_UDE (FK_PDI, FK_UDE) VALUES (2, 2);
INSERT INTO PDI_UDE (FK_PDI, FK_UDE) VALUES (3, 3);

-----------------------------------------PDI_CON--------------------------------

INSERT INTO PDI_CON (FK_PDI, FK_CON) VALUES (1, 1);
INSERT INTO PDI_CON (FK_PDI, FK_CON) VALUES (2, 2);
INSERT INTO PDI_CON (FK_PDI, FK_CON) VALUES (3, 3);

-----------------------CATEGORIA------------------------------------------------------------------------

INSERT INTO CATEGORIA (NOMBRE_CAT) VALUES ('CONCEPTUAL'),
										  ('TEORICO'),
										  ('REEFERENCIAL'),
										  ('CONTEXTUAL');
											

----------------------UNIDAD DE INFORMACION-------------------------------------------------------------
INSERT INTO UNIDAD_DE_INFORMACION (CITA_UDI,REFERENCIA_UDI,UBICACION_UDI,JUSTIFICACION_UDI,FK_EDE,FK_PDI,FK_CAT) VALUES
								  ('También denominada Fachada de Servicio (Facade), es la encargada de brindar los servicios necesarios a la capa de presentación.','[Martin Fowler, 2003] [Marinescu 2002]','DISPONIBLE EN LINEA','NECESARIA PARA DEFINIR CONCEPTO',1,1,1),
								  ('Para romper con esta dependencia se recurrió al uso del patrón de diseño Adapter.','[Gamma et al, 1995]','DISPONIBLE EN LINEA','NECESARIA PARA LA DEFINICION TEORICA',2,1,2),
								  ('Los parámetros intercambiados entre ambas capas son objetos DTO (Data Transfer Object).','[Martin Fowler, 2003] [Marinescu 2002]','DISPONIBLE EN LINEA','NECESARIA PARA LA DEFINICION DEL CONCEPTO',3,1,1),
								  ('Clave simple o compuesta (relación con Foreign Key y con Compound Key. Una clave simple hace uso de un solo campo en la base de datos y un solo atributo en el objeto asociado, mientras que una clave compuesta usa mas de uno. Una clave compuesta es de utilidad ya que contiene mayor información en determinados contextos, sin embargo, dificulta la generalización al momento de generar código para su administración.','[Martin Fowler, 2003]','DISPONIBLE EN LINEA','NECESARIA PARA LA DEFINICION DEL CONCEPTO MOSTRADO',1,1,1),
								  ('Pessimistic offline lock: fuerza a la obtención de un lock sobre los datos antes de comenzar a usarlos y los mantendrá en ese estado hasta que termine de usarlos, evitando así la posible inconsistencia. Este patrón es usado cuando la posibilidad de sesiones concurrentes sobre los mismos datos tienen una alta probabilidad. Su implementación está basada en un lock manager el cual administra una tabla de locks. Para los detalles asociados a cada uno ver .','[Martin Fowler, 2003]','DISPONIBLE EN LINEA','NECESARIA PARA LA DEFINICION',1,2,3),
								  ('Entre las características salientes de un sistema de tipo Enterprise,  se pueden mencionar las siguientes:  
									Datos masivos (gran volumen) y persistentes. 
									Acceso concurrente, lo que implica gran cantidad de usuarios. 
									Variedad de interfaces de usuario, lo que implica diversidad en la funcionalidad brindada. 
									Integración con otros sistemas, lo que implica que comparten funcionalidad y / o datos. 
									Disonancia conceptual (modelo de datos con distintas visiones), debido a que poseen un modelo de negocio subyacente que abarca distintos aspectos de un área de negocio. Por lo tanto prestan distintas funcionalidades a distintos tipos de usuarios. 
									Lógica de negocio, lo que implica procesamiento de datos.','[Rod Johnson, 2003], [Martin Fowler, 2003], [Marinescu 2002]','DISPONIBLE EN LINEA','NECESARIA PARA LA DEFINICION DE CARACTERISTICAS',1,1,1);
INSERT INTO UNIDAD_DE_INFORMACION (CITA_UDI,REFERENCIA_UDI,UBICACION_UDI,JUSTIFICACION_UDI,FK_EDE,FK_PDI,FK_CAT) VALUES
								  ('El paso de objetos por valor se revela como una de las características que diferencia RMI de las otras tecnologías de programación distribuida. Esta potente posibilidad se basa el uso del concepto de “socialización” para el paso de objetos a través de la red. Objetos todo tipo, tanto nativos JAVA como definidos por el usuario, pueden ser transferidos totalmente transparente al programador usando esta técnica.', '[Carlos Beltran, 1998-1999]', 'DISPONIBLE EN LINEA', 'NECESARIO PARA EL ENTENDIMIENTO DEL RMI', 3, 3 ,2 ),
								  ('Las interfaces definen el comportamiento y las clases definen la implementación', '[Carlos Beltran, 1998-1999]', 'DISPONIBLE EN LINEA', 'NECESARIO PARA EL MARCO TEORICO', 3, 3, 2),
								  ('La tecnología de la conectividad JINITM está basada en un concepto sencillo: los dispositivos deben trabajar en conjunto. Deben interconectarse sin problema. Sin drivers, ni problemas con sistemas operativos, ni cables o conectores extraños. No, obstante la tecnología ofrece  nuevos e interesantes conceptos y capacidades', '[Sun Microsystem, 2000]', 'DISPONIBLE EN LINEA', 'NECESARIO PARA COMPRENDER EL USO DE LA TECNOLOGIA JINI', 3, 3, 2),
								  ('La comunicación entre servicios es llevada a cabo usando la invocación de métodos remotos de Java (RMI). El mecanismo que soporta la comunicación entre los servicios no es por sí mismo un recurso que es encontrado y usado, sino que este es una parte de la infraestructura de la tecnología JINI.', '[Sun Microsystem, 2000]', 'DISPONIBLE EN LINEA','NECESARIO PARA COMPRENDER EL USO DE LA TECNOLOGIA JINI', 3, 3, 2),
								  ('El diseño del modelo de seguridad para la tecnología JINI es construido a partir de la doble noción de un director y una lista de control de acceso.', '[Sun Microsystem, 2000]', 'DISPONIBLE EN LINEA', 'NECESARIO PARA EL USO DE JINI', 3, 3, 2);

INSERT INTO UNIDAD_DE_INFORMACION (CITA_UDI,REFERENCIA_UDI,UBICACION_UDI,JUSTIFICACION_UDI,FK_EDE,FK_PDI,FK_CAT) VALUES
									('Un sistema inteligente autónomo ha sido definido  como aquél que puede descubrir y registrar si una acción hecha en una situación dada fue favorable.', '[Fritz y otros, 1989; 1990; García Martínez y Borrajo, 1996]', 'DISPONIBLE EN LINEA', 'NECESARIO PARA EL ENTENDIMIENTO DEL SIA', 4 , 2 , 1 ),
									('Tal modelo es parcial pero tiene la consistencia suficiente como para ser utilizado por su carácter predictivo en procesos de planificación suficiente', '[García Martínez, 1993a; 1993b; 1995], [García Martínez, 1996; 1997a; García Martínez et al., 1998a; 1998b; García Martínez et al., 1999a; 1999b]', 'DISPONIBLE EN LINEA', 'NECESARIO PARA EL MARCO TEORICO', 3, 2, 2),
									('En este contexto, el propósito de este proyecto es estudiar de que manera la interacción entre sistemas inteligentes autónomos mejora el modelo de funcionamiento del entorno que cada sistema va formando y cómo se integran en dicha interacción los modelos de refuerzo.', '[Sutton, 1984]', 'DISPONIBLE EN LINEA', 'NECESARIO PARA COMPRENDER LA INTERACCION ENTRE SISTEMAS INTELIGENTES', 3, 2, 2),
									('Un problema consiste de un estado inicial y una expresión objetivo. Para resolver un problema, el sistema PRODIGY debe encontrar una secuencia de operadores que, si se aplican a un estado inicial, produce un estado final satisfaciendo la expresión objetivo.', '[Carbonell y otros, 1991]', 'DISPONIBLE EN LINEA', 'NECESARIO PARA COMPRENDER EL USO DE LA TECNOLOGIA JIN', 3, 2, 2),
									('El programa ESTATICO produce reglas de control sin utilizar ningún ejemplo de entrenamiento.', '[Etzioni, 1991]', 'DISPONIBLE EN LINEA', 'NECESARIO PARA EL USO DE REGLAS DE CONTROL', 3, 2, 1),
									('LIVE es una arquitectura implementada para aprender del entorno.', '[Shen, 1991]', 'DISPONIBLE EN LINEA', 'NECESARIO PARA ENTENDER EL USO DE LA ARQUITECTURA LIVE', 3, 2, 1),
									('¿Cuál es la repetibilidad de los resultados de trabajos previos en la teoría de sistemas inteligentes autónomos al cambiar de plataforma robot (migrar de la plataforma a Khepera)?', '[García Martinez y Borrajo, 1997;1998], [Fritz et al., 1989]', 'DISPONIBLE EN LINEA', 'NECESARIO PARA MEDIR REPETIBILIDAD', 3, 2, 4),
									('En trabajos previos en la teoría de sistemas inteligentes autónomos se realizan experimentos similares en los que se grafican la cantidad de situación y de teorías a lo largo del tiempo y se comparan distintos métodos de aprendizaje a través del análisis del porcentaje de planes exitosos a lo largo del tiempo ', '[García Martinez y Borrajo, 1997;1998]', 'DISPONIBLE EN LINEA', 'NECESARIO ENTENDER LA TEORIA DE SISTEMAS INTELIGENTES AUTONOMOS', 3, 2, 3);








