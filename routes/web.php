<?php



Route::get('/', function () {
    return view('welcome');
});




Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');



// PROGRAMACION ACADEMICA 
//Año
route::get('/año','YearController@index')->name('year.index');
route::post('/año','YearController@addYear')->name('year.index');
route::get('/año/crear','YearController@add')->name('year.add');
//route::get('/año/editar','YearController@index')->name('year.edit');

//Grados
route::get('/año/grados','GradesController@index')->name('grades.index');
route::post('/año/grados','GradesController@addGra')->name('grades.index');
route::get('/año/grados/crear','GradesController@add')->name('grades.add');

//Cursos
route::get('/año/cursos','CoursesController@index')->name('courses.index');
route::get('/año/cursos/crear','CoursesController@add')->name('courses.add');

//Periodo
route::get('/año/periodo','PeriodController@index')->name('period.index');
route::get('/año/periodo/crear','PeriodController@add')->name('period.add');
route::get('/año/periodo/tipo','PeriodController@type')->name('period.type');

//Asignar cursos
route::get('/año/cargalectiva','LoadWorkController@index')->name('loadwork.index');

//Notificaciones
route::get('/notificaciones','NotificationController@index')->name('notification.index');
route::get('/notificaciones/agregar','NotificationController@add')->name('notification.add');

//usuarios
route::get('/usuarios','UserController@show')->name('users.index');
route::get('/usuarios/crear','UserController@create')->name('users.create');
route::get('/usuarios/tipos','UserController@types')->name('users.type');
route::get('/usuarios/perfil','UserController@profile')->name('users.profile');

//personas
route::get('/personas','PeopleController@index')->name('people.index');
route::post('/personas','PeopleController@addPeo')->name('people.index');
route::get('/personas/agregar','PeopleController@add')->name('people.add');

//matrículas
route::get('/matriculas','MatriculationsController@index')->name('matriculation.index');
route::post('/matriculas','MatriculationsController@addMat')->name('matriculation.index');
route::get('/matriculas/alumno','MatriculationsController@add')->name('matriculation.add');


//alumnos
route::get('/alumnos','StudentController@show')->name('students.index');
route::get('/alumnos/agregar','StudentController@add')->name('students.add');
route::get('/alumnos/lista','StudentController@list')->name('students.list');
route::get('/alumnos/asistencia','AssistanceController@index')->name('assistance.index');
route::get('/alumnos/asistencia/grado/curso/seccion','AssistanceController@grades')->name('assistance.grades');
route::get('/alumnos/asistencia/grado/curso/seccion/excel','AssistanceController@excel')->name('assistance.excel');
route::get('/alumnos/pagos/grado/curso/seccion','PaymentsController@payments')->name('payments.payments');

//padres
route::get('/padres','ParentsController@index')->name('parents.index');
route::get('/padres/agregar','ParentsController@add')->name('parents.add');
route::get('/padres/lista', 'ParentsController@list')->name('parents.list');

//docentes
route::get('/docentes','TeachersController@index')->name('teachers.index');
route::get('/docentes/agregar','TeachersController@add')->name('teachers.add');
route::get('/docentes/lista','TeachersController@list')->name('teachers.list');

//notas
route::get('/notas/agregar','ScoresController@index')->name('scores.index');
route::get('/notas/lista','ScoresController@list')->name('scores.list');
route::get('/notas/libretas','ScoresController@generate')->name('scores.generate');
route::get('/notas/administrar','ScoresController@add')->name('scores.add');
route::get('/notas/administrar/criterios','ScoresController@addcri')->name('scores.addcri');
route::get('/notas/alumnos/grado/seccion/curso','ScoresController@addstudents')->name('scores.addstudents');
//pagos
route::get('/pagos','PaymentsController@index')->name('payments.index');
route::get('/pagos/lista','PaymentsController@list')->name('payments.list');

//Notificaciones

