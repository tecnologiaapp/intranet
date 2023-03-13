 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificadosController;
use App\Http\Controllers\SoporteController;
use App\Http\Controllers\SolicitudController;
use App\Models\Thesis;

Route::get('/', function () {
   return view('welcome');
})->name('welcome');

// Route::get('/', [App\Http\Controllers\User\HomeController::class, 'index']);
//No borrar, es para subir imágenes en las descripciones de las ofertas de empleabilidad
Route::post('ckeditor/upload/{path}', ['App\Http\Controllers\Base\CkeditorController', 'store'])->name('ckeditor.upload')->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
	return redirect()->route('index');
 
})->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/home',)
// Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('index');


/* ===========================================================
   Noticias - Usuario
=========================================================== */

Route::get('/emprendedores', [App\Http\Controllers\User\UserEntrepreneurshipController::class, 'index'])->name('user.entrepreneurship.index');

Route::get('/emprendimiento/{entrepreneurship}/', [App\Http\Controllers\User\UserEntrepreneurshipController::class, 'show'])->name('user.entrepreneurship.show');

Route::get('noticias', [App\Http\Controllers\User\NoticeController::class, 'index'])->name('user.notices.index');

Route::get('noticias/{notice}/', [App\Http\Controllers\User\NoticeController::class, 'show'])->name('user.notices.show');

Route::get('aprendamos', [App\Http\Controllers\User\LearnController::class, 'index'])->name('user.learn.index');

Route::get('aprendamos/{learn}/', [App\Http\Controllers\User\LearnController::class, 'show'])->name('user.learn.show');

Route::get('palabras-del-director', [App\Http\Controllers\User\DirectorsWordsController::class, 'index'])->name('user.words.index');

Route::get('palabras-del-director/{word}/', [App\Http\Controllers\User\DirectorsWordsController::class, 'show'])->name('user.words.show');

Route::get('/boletines/2', function () {
   return view('user.newsletters.show');
})->name('user.newsletters.show');

/* ===========================================================
   Suscribirse al envío de correos - Usuario
=========================================================== */

Route::get('suscribirse-a-la-lista-de-correo', [App\Http\Controllers\User\MailingController::class, 'index'])->name('user.mailing.index');

Route::post('suscribirse-a-la-lista-de-correo', [App\Http\Controllers\User\MailingController::class, 'store'])->name('user.mailing.store');


/* ===========================================================
   Nosotros
=========================================================== */


Route::get('equipo-app/{dependency}/', [App\Http\Controllers\User\TeamController::class, 'index'])->name('user.team.index');

Route::get('equipo-app/{dependency}/{user}', [App\Http\Controllers\User\TeamController::class, 'show'])->name('user.team.show');

Route::get('mercurio', [App\Http\Controllers\User\MercurioController::class, 'index'])->name('user.mercurio.index');

Route::get('aulaap', [App\Http\Controllers\User\AulaController::class, 'index'])->name('user.aula.index');

Route::get('mesa-de-ayuda', [App\Http\Controllers\User\SupportController::class, 'index'])->name('user.support.index');

Route::get('galeria', [App\Http\Controllers\User\GalleryController::class, 'index'])->name('user.gallery.index');

Route::get('institucional', [App\Http\Controllers\User\InstitutionalController::class, 'index'])->name('user.institutional.index');

Route::get('/auto-cuidado', function () {
   return view('user.self-care');
})->name('user.self-care');

/* ===========================================================
   Contratistas
=========================================================== */

Route::get('panel/editar-perfil', [App\Http\Controllers\Panel\ProfileController::class, 'edit'])->name('panel.profile.edit');

Route::post('panel/editar-perfil/{user}', [App\Http\Controllers\Panel\ProfileController::class, 'update'])->name('panel.profile.update');

Route::prefix('panel')->middleware(['auth:sanctum', 'role:rh|admin', 'verified'])->group(function () {
	//Agregar contratista
   Route::get('/agregar-contratista', [App\Http\Controllers\Panel\UserController::class, 'create'])->name('panel.user.create');

   Route::post('/agregar-contratista', [App\Http\Controllers\Panel\UserController::class, 'store'])->name('panel.user.store');

   //Lista de contratistas
   Route::get('/contratistas', [App\Http\Controllers\Panel\UserController::class, 'index'])->name('panel.user.index');

   //Lista de contratistas por (Sub)dirección
   Route::get('/contratistas/{dependency}', [App\Http\Controllers\Panel\UserController::class, 'dependency'])->name('panel.user.dependency.index');

   //Lista de contratistas inactivos
   Route::get('/contratistas-inactivos', [App\Http\Controllers\Panel\InactiveUserController::class, 'index'])->name('panel.user.inactive.index');

   //Editar un contratista
   Route::get('/contratista/{user}/editar', [App\Http\Controllers\Panel\UserController::class, 'edit'])->name('panel.user.edit');

   Route::post('/contratista/{user}/editar', [App\Http\Controllers\Panel\UserController::class, 'update'])->name('panel.user.update');

   Route::delete('/modificar-contratista/{user}', [App\Http\Controllers\Panel\UserController::class, 'destroy'])->name('panel.user.destroy');
});


/* ===========================================================
   Proyectos
=========================================================== */

Route::prefix('')->middleware(['auth:sanctum', 'verified'])->group(function () {
   //Proyectos
   Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('index');
   Route::get('/proyectos', [App\Http\Controllers\Panel\Projects\ProjectsController::class, 'index'])->name('panel.projects.index');

   // Registro de certificados tributarios
   Route::get('certificados', [CertificadosController::class, 'index'])->name('user.certificados.index');
   Route::get('certificate', [CertificadosController::class, 'user'])->name('user.certificados.user');
   Route::get('certificados/create', [CertificadosController::class, 'create'])->name('user.certificados.create');
   Route::post('certificados', [CertificadosController::class, 'store'])->name('user.certificados.store');
   Route::get('certificados/{id}', [CertificadosController::class, 'show'])->name('user.certificados.show');
   Route::get('certificados/{id}/edit', [CertificadosController::class, 'edit'])->name('user.certificados.edit');
   Route::put('certificados/{id}/update', [CertificadosController::class, 'update'])->name('user.certificados.update');
   Route::delete('certificados/{id}', [CertificadosController::class, 'destroy'])->name('user.certificados.destroy');


   Route::get('/crear-proyecto', [App\Http\Controllers\Panel\Projects\ProjectsController::class, 'create'])->name('panel.projects.create');

   Route::post('/crear-proyecto', [App\Http\Controllers\Panel\Projects\ProjectsController::class, 'store'])->name('panel.projects.store');

   Route::get('/proyectos/{project}/editar', [App\Http\Controllers\Panel\Projects\ProjectsController::class, 'edit'])->name('panel.projects.edit');

   Route::post('/proyectos/{project}/editar', [App\Http\Controllers\Panel\Projects\ProjectsController::class, 'update'])->name('panel.projects.update');

   //Tareas
   Route::get('/tarea/{project}/{task}', [App\Http\Controllers\Panel\Projects\TasksController::class, 'show'])->name('panel.projects.board.task.show');

   Route::get('/proyectos/{project}/tablero', [App\Http\Controllers\Panel\Projects\TasksController::class, 'index'])->name('panel.projects.board.index');

   Route::post('/agregar-tarea/{project}', [App\Http\Controllers\Panel\Projects\TasksController::class, 'store'])->name('panel.projects.tasks.store');

   //Tableros
   Route::post('/agregar-tablero/{project}', [App\Http\Controllers\Panel\Projects\BoardController::class, 'store'])->name('panel.projects.board.store');
});


/* ===========================================================
   Ciudades
=========================================================== */

Route::prefix('panel')->middleware(['auth:sanctum', 'verified'])->group(function () {
   //Agregar contratista
   Route::get('/ciudades', [App\Http\Controllers\Panel\Cities\CitiesController::class, 'index'])->name('panel.cities.index');

   Route::get('/agregar-ciudad', [App\Http\Controllers\Panel\Cities\CitiesController::class, 'create'])->name('panel.cities.create');
});

/* ===========================================================
   Noticias - Panel de administración
=========================================================== */

Route::prefix('panel')->middleware(['auth:sanctum', 'role:editor|admin', 'verified'])->group(function () {
   
   //Subir imágenes a las publicaciones
   Route::post('/ckeditor/upload', [App\Http\Controllers\Panel\Notices\NoticeController::class, 'ckeditor'])->name('ckeditor');
   
   //Presupuestos financieros
   Route::get('/Indicadores', [App\Http\Controllers\User\IndicadoresController::class, 'index'])->name('user.Indicadores.index');
   Route::get('/Convenios', [App\Http\Controllers\User\PaisajeController::class, 'index'])->name('user.Paisaje.index');
   Route::get('/Paisaje/Urbano', [App\Http\Controllers\User\PaisajeController::class, 'urbano'])->name('user.Paisaje.urbano');
   Route::get('/Paisaje/Patrimonio', [App\Http\Controllers\User\PaisajeController::class, 'patrimonio'])->name('user.Paisaje.patrimonio');
   Route::get('/Paisaje/Prado', [App\Http\Controllers\User\PaisajeController::class, 'prado'])->name('user.Paisaje.prado');
   Route::get('/Paisaje/POT', [App\Http\Controllers\User\PaisajeController::class, 'pot'])->name('user.Paisaje.POT');
   Route::get('/Inmo', [App\Http\Controllers\User\InmoController::class, 'index'])->name('user.Inmo.index');
   Route::get('/App', [App\Http\Controllers\User\AppController::class, 'index'])->name('user.App.index');



   //Agregar noticia
   Route::get('/agregar-noticia', [App\Http\Controllers\Panel\Notices\NoticeController::class, 'create'])->name('panel.notices.create');

   Route::post('/agregar-noticia', [App\Http\Controllers\Panel\Notices\NoticeController::class, 'store'])->name('panel.notices.store');

   //Lista de noticias
   Route::get('/noticias', [App\Http\Controllers\Panel\Notices\NoticeController::class, 'index'])->name('panel.notices.index');

   //Editar un noticia
   Route::get('/noticia/{notice}/editar', [App\Http\Controllers\Panel\Notices\NoticeController::class, 'edit'])->name('panel.notices.edit');

   Route::post('/noticia/{notice}/editar', [App\Http\Controllers\Panel\Notices\NoticeController::class, 'update'])->name('panel.notices.update');

   Route::delete('/modificar-noticia/{notice}', [App\Http\Controllers\Panel\Notices\NoticeController::class, 'destroy'])->name('panel.notices.destroy');


   //Agregar categoría de la noticia
   Route::get('/agregar-categoria', [App\Http\Controllers\Panel\CategoryNoticeController::class, 'create'])->name('panel.notices.categories.create');

   Route::post('/agregar-categoria', [App\Http\Controllers\Panel\CategoryNoticeController::class, 'store'])->name('panel.notices.categories.store');

   //Lista de categorías
   Route::get('/categorias-de-noticias', [App\Http\Controllers\Panel\CategoryNoticeController::class, 'index'])->name('panel.notices.categories.index');

   //Editar una categoría de la noticia
   Route::get('/categorias-de-noticia/{category}/editar', [App\Http\Controllers\Panel\CategoryNoticeController::class, 'edit'])->name('panel.notices.categories.edit');

   Route::post('/categorias-de-noticia/{category}/editar', [App\Http\Controllers\Panel\CategoryNoticeController::class, 'update'])->name('panel.notices.categories.update');

   //Agregar palabras del director
   Route::get('/agregar-palabras-del-director', [App\Http\Controllers\Panel\Notices\DirectorsWordsController::class, 'create'])->name('panel.words.create');

   Route::post('/agregar-palabras-del-director', [App\Http\Controllers\Panel\Notices\DirectorsWordsController::class, 'store'])->name('panel.words.store');

   //Lista de palabras del director
   Route::get('/palabras-del-director', [App\Http\Controllers\Panel\Notices\DirectorsWordsController::class, 'index'])->name('panel.words.index');

   //Editar las palabras del director
   Route::get('/palabras-del-director/{word}/editar', [App\Http\Controllers\Panel\Notices\DirectorsWordsController::class, 'edit'])->name('panel.words.edit');

   Route::post('/palabras-del-director/{word}/editar', [App\Http\Controllers\Panel\Notices\DirectorsWordsController::class, 'update'])->name('panel.words.update');

   Route::delete('/modificar-palabras-del-director/{word}', [App\Http\Controllers\Panel\Notices\DirectorsWordsController::class, 'destroy'])->name('panel.words.destroy');

   //Agregar información a "Aprendamos"
   Route::get('/agregar-aprendamos', [App\Http\Controllers\Panel\Notices\LearnController::class, 'create'])->name('panel.learn.create');

   Route::post('/agregar-aprendamos', [App\Http\Controllers\Panel\Notices\LearnController::class, 'store'])->name('panel.learn.store');

   //Lista de información a "Aprendamos"
   Route::get('/aprendamos', [App\Http\Controllers\Panel\Notices\LearnController::class, 'index'])->name('panel.learn.index');

   //Editar información a "Aprendamos"
   Route::get('/aprendamos/{learn}/editar', [App\Http\Controllers\Panel\Notices\LearnController::class, 'edit'])->name('panel.learn.edit');

   Route::post('/aprendamos/{learn}/editar', [App\Http\Controllers\Panel\Notices\LearnController::class, 'update'])->name('panel.learn.update');

   Route::delete('/modificar-aprendamos/{learn}', [App\Http\Controllers\Panel\Notices\LearnController::class, 'destroy'])->name('panel.learn.destroy');

   //Agregar emprendimientos
   Route::get('/agregar-emprendimiento', [App\Http\Controllers\Panel\Notices\EntrepreneurshipController::class, 'create'])->name('panel.entrepreneurship.create');

   Route::post('/agregar-emprendimiento', [App\Http\Controllers\Panel\Notices\EntrepreneurshipController::class, 'store'])->name('panel.entrepreneurship.store');

   //Lista de información a "emprendimiento"
   Route::get('/emprendimiento', [App\Http\Controllers\Panel\Notices\EntrepreneurshipController::class, 'index'])->name('panel.entrepreneurship.index');

   //Editar información a "emprendimiento"
   Route::get('/emprendimiento/{entrepreneurship}/editar', [App\Http\Controllers\Panel\Notices\EntrepreneurshipController::class, 'edit'])->name('panel.entrepreneurship.edit');

   Route::post('/emprendimiento/{entrepreneurship}/editar', [App\Http\Controllers\Panel\Notices\EntrepreneurshipController::class, 'update'])->name('panel.entrepreneurship.update');

   Route::delete('/modificar-emprendimiento/{entrepreneurship}', [App\Http\Controllers\Panel\Notices\EntrepreneurshipController::class, 'destroy'])->name('panel.entrepreneurship.destroy');

   Route::get('lista-de-suscriptores', [App\Http\Controllers\Panel\MailingController::class, 'index'])->name('panel.mailing.index');


/* ===========================================================
   Capacitaciones
=========================================================== */

   //Lista de capacitaciones
   Route::get('/capacitaciones', [App\Http\Controllers\Panel\Courses\CourseController::class, 'index'])->name('panel.courses.index');

   Route::get('/capacitaciones/{course}', [App\Http\Controllers\Panel\Courses\CourseController::class, 'show'])->name('panel.courses.show');

   //Guardar un nuevo capacitación
   Route::post('/capacitaciones', [App\Http\Controllers\Panel\Courses\CourseController::class, 'store'])->name('panel.courses.store');

   Route::get('/capacitaciones/{course}/edit', [App\Http\Controllers\Panel\Courses\CourseController::class, 'edit'])->name('panel.courses.edit');

   //Guardar una nueva capacitación
   Route::post('/capacitaciones/{course}/edit', [App\Http\Controllers\Panel\Courses\CourseController::class, 'update'])->name('panel.courses.update');


   //Inscribirse en una nueva capacitación
   Route::post('/capacitaciones/{course}/inscribirse', [App\Http\Controllers\Panel\Courses\CourseStudentController::class, 'store'])->name('panel.courses.student.store');

   //Lista de lecciones
   Route::get('/curso/{course}/lecciones', [App\Http\Controllers\Panel\Courses\LessonController::class, 'index'])->name('user.lesson.index');

   Route::get('/curso/{course}/agregar', [App\Http\Controllers\Panel\Courses\LessonController::class, 'create'])->name('user.lesson.create');

   //Ver lección
   Route::get('/cursos/{course}/{lesson}', [App\Http\Controllers\Panel\Courses\LessonController::class, 'show'])->name('user.lesson.show');

   
   
   
});


/* ===========================================================
Rutas base
=========================================================== */

Route::get('/herramientas', [App\Http\Controllers\User\Tools\ToolsController::class, 'index'])->name('user.tools.index');

// Route::get('/thesis', function () {
//    $theses = Thesis::all();
//    return view('user.archivo.thesis')->with('theses',$theses);
// });

Route::get('/archivo', function () {
   $theses = Thesis::all();
return view('user.archivo.thesis')->with('theses',$theses);
})->name('user.archivo.thesis');

Route::post('/thesis/register', [ThesisController::class, 'store'])->name('thesis_register');
Route::get('/thesis/file/{id}', [ThesisController::class, 'urlfile'])->name('thesis_file');
Route::post('/thesis/update', [ThesisController::class, 'update'])->name('thesis_update');
Route::get('/thesis/delete/{id}', [ThesisController::class, 'destroy'])->name('thesis_delete');

Route::get('APPyuda', [SoporteController::class, 'index'])->name('user.soporte.index');
Route::get('APPyuda/crear_caso', [SoporteController::class, 'caso'])->name('user.soporte.caso');
Route::get('APPyuda/crear_solicitud', [SoporteController::class, 'solicitud'])->name('user.soporte.solicitud');

  // Registro de certificados tributarios
  Route::get('APPyuda/solicitud/index', [SolicitudController::class, 'index'])->name('user.soporte.solicitud.index');
//   Route::get('certificate', [CertificadosController::class, 'user'])->name('user.certificados.user');
  Route::get('APPyuda/solicitud/create', [SolicitudController::class, 'create'])->name('user.soporte.solicitud.create');
  Route::post('APPyuda/solicitud', [SolicitudController::class, 'store'])->name('user.soporte.solicitud.store');
  Route::get('APPyuda/solicitud/{id}', [SolicitudController::class, 'show'])->name('user.soporte.solicitud.show');
  Route::get('APPyuda/solicitud/{id}/edit', [SolicitudController::class, 'edit'])->name('user.soporte.solicitud.edit');
  Route::put('APPyuda/solicitud/{id}/update', [SolicitudController::class, 'update'])->name('user.soporte.solicitud.update');
  Route::delete('APPyuda/solicitud/{id}', [SolicitudController::class, 'destroy'])->name('user.soporte.solicitud.destroy');