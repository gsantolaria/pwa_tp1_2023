# pwa_tp1_2023
1er TP de PWA 2023

Observaciones:

En los puntos 5) y 6) se realizaron las modificiaciones para que los datos password, authkey y accesstoken sean encriptados cuando
creamos un nuevo usuario, usando las funciones md5() y password_hash() para generar hashes para las 3 variables y que asì sean
ilegibles e irrecuperables para quien acceda a la base de datos.

Comentarios sobre el punto 11) del tp2:

parte del punto 11) la hice en el punto 7) cuando cree el modulo para desplegar las apis, porque cree los controladores para todos los
modelos y ademas los registre en el urlManager. Fueron todos probados con HTTPie y funcionaron todos los verbos sin pasar el action de
los mismos y las url sin pluralizar.

Sin perjuicio de ello, agregue el defaultController que lo habia eliminado, para poder ver la vista basica en http://localhost:8000/apiv1
y modifique los nombres de los controladores ReservaaulaController y HorariomateriaController, ya que los tenia en UpperCamelCase y entonces tenia que usar en las rules del urlManager 'apiv1/reserva-aula', 'apiv1/horario-materia' en vez de 'apiv1/reservaaula', 'apiv1/horariomateria'.
