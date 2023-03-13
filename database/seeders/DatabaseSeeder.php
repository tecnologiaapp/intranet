<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Dependency;
use App\Models\Training;
use App\Models\TrainingCategory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
	/**
	* Seed the application's database.
	*
	* @return void
	*/
	public function run()
	{
		// \App\Models\User::factory(10)->create();
		TrainingCategory::create(['title' => 'Mercurio', 'slug' => 'mercurio']);

		//Ciudades
		$city_1  = City::create(['name' => 'Medellín',  'state' => 'Antioquia', 'country' => 'co']);
		$city_2  = City::create(['name' => 'Envigado',  'state' => 'Antioquia', 'country' => 'co']);
		$city_3  = City::create(['name' => 'Sabaneta',  'state' => 'Antioquia', 'country' => 'co']);
		$city_4  = City::create(['name' => 'Itagüí', 	'state' => 'Antioquia', 'country' => 'co']);
		$city_5  = City::create(['name' => 'Guatapé', 	'state' => 'Antioquia', 'country' => 'co']);
		$city_6  = City::create(['name' => 'Pereira', 	'state' => 'Risaralda', 'country' => 'co']);
		$city_7  = City::create(['name' => 'Rionegro',  'state' => 'Antioquia', 'country' => 'co']);
		$city_8  = City::create(['name' => 'Barbosa', 	'state' => 'Antioquia', 'country' => 'co']);
		$city_9  = City::create(['name' => 'Bello', 		'state' => 'Antioquia', 'country' => 'co']);
		$city_10 = City::create(['name' => 'Caldas', 	'state' => 'Antioquia', 'country' => 'co']);
		$city_11 = City::create(['name' => 'Marinilla', 'state' => 'Antioquia', 'country' => 'co']);
		$city_12 = City::create(['name' => 'La Estrella', 'state' => 'Antioquia', 'country' => 'co']);
		$city_13 = City::create(['name' => 'Villavicencio', 'state' => 'Meta', 'country' => 'co']);
		$city_14 = City::create(['name' => 'Armenia', 'state' => 'Quindío', 'country' => 'co']);
		$city_15 = City::create(['name' => 'Cúcuta', 'state' => 'Norte de Santander', 'country' => 'co']);
		$city_16 = City::create(['name' => 'Campamento', 'state' => 'Antioquia', 'country' => 'co']);
		$city_17 = City::create(['name' => 'Palestina', 'state' => 'Caldas', 'country' => 'co']);
		$city_18 = City::create(['name' => 'Jericó', 'state' => 'Antioquia', 'country' => 'co']);
		$city_19 = City::create(['name' => 'Palmira', 'state' => 'Valle del Cauca', 'country' => 'co']);
		$city_20 = City::create(['name' => 'San Cristóbal', 'state' => 'Táchira', 'country' => 've']);
		$city_21 = City::create(['name' => 'Calarcá', 'state' => 'Quindío', 'country' => 'co']);
		$city_22 = City::create(['name' => 'Caucasia', 'state' => 'Antioquia', 'country' => 'co']);
		$city_23 = City::create(['name' => 'San Carlos', 'state' => 'Antioquia', 'country' => 'co']);
		$city_24 = City::create(['name' => 'Manizales', 'state' => 'Caldas', 'country' => 'co']);
		$city_25 = City::create(['name' => 'Santa Rosa de Osos', 'state' => 'Antioquia', 'country' => 'co']);
		$city_26 = City::create(['name' => 'Ibagué', 'state' => 'Tolima', 'country' => 'co']);
		$city_27 = City::create(['name' => 'La Ceja', 'state' => 'Antioquia', 'country' => 'co']);
		$city_28 = City::create(['name' => 'Caracas', 'state' => 'Miranda', 'country' => 've']);
		$city_29 = City::create(['name' => 'Lejanías', 'state' => 'Meta', 'country' => 'co']);
		$city_30 = City::create(['name' => 'Hispania', 'state' => 'Antioquia', 'country' => 'co']);
		$city_31 = City::create(['name' => 'Salazar', 'state' => 'Norte de Santander', 'country' => 'co']);
		$city_32 = City::create(['name' => 'Concordia', 'state' => 'Antiquia', 'country' => 'co']);
		$city_33 = City::create(['name' => 'Don Matías', 'state' => 'Antiquia', 'country' => 'co']);

		//Subdirecciones y direcciones
		$sub_app = Dependency::create([
			'title'					=> 'Subdirección de Gestión de Alianzas Público Privadas',
			'slug'					=>	'subdireccion-de-gestión-de-alianzas-público-privadas',
			'description'					=>	'<p> Con la necesidad de suplir la demanda de infraestructura, se hace necesario examinar los modelos convencionales mediante nuevos planteamientos que vinculen al sector público y privado para generar una adecuada prestación del servicio y garantizar su sostenibilidad. La Subdirección de Alianzas Público Privadas estructura, evalúa y promociona proyectos integrales que comprenden el diseño, construcción, financiación, operación y mantenimiento de infraestructura social y productiva.</p>',
			'owner_name'	=>	'Juan Manuel Mejía Salazar',
			'owner_username'	=>	'juan.mejia',
			'owner_image'					=>	'juan.mejia.jpg'
		]);

		$sub_landscape = Dependency::create([
			'title'					=> 'Subdirección de Paisaje y Patrimonio',
			'slug'					=>	'subdireccion-de-paisaje-y-patrimonio',
			'description'					=>	'<iframe width="100%" height="800px" src="https://agenciaapp.maps.arcgis.com/apps/MapSeries/index.html?appid=6ca89f7ad74f46758cbb166ef09ff25f&autoplay" frameborder="0" scrolling="no"></iframe>',
			'owner_name'	=>	'Daniel Madrigal Arango',
			'owner_username'	=>	'daniel.madrigal',
			'owner_image'					=>	'daniel.madrigal.jpg'
		]);

		$sub_inmo = Dependency::create([
			'title'					=> 'Subdirección de Gestión Inmobiliaria',
			'slug'					=>	'subdireccion-de-gestion-inmobiliaria',
			'description'					=>	'<p>Desarrolla modelos inmobiliarios novedosos que permiten gestionar alianzas público privadas en los bienes inmuebles propiedad del Municipio de Medellín (diferentes a la Ley 1508) para el desarrollo de proyectos públicos. Igualmente, genera recursos para su cualificación, mantenimiento y sostenimiento.</p>',
			'owner_name'	=>	'Natacha Gómez Hoyos',
			'owner_username'	=>	'natacha.gomez',
			'owner_image'					=>	'natacha.gomez.jpg'
		]);

		$dir_general = Dependency::create([
			'title'					=> 'Dirección General',
			'slug'					=>	'direccion-general',
			'description'					=>	'<p></p>',
			'owner_name'	=>	'Rodrigo Foronda Morales',
			'owner_username'	=>	'rodrigo.foronda',
			'owner_image'					=>	'rodrigo.foronda.jpg'
		]);

		$dir_tecnical = Dependency::create([
			'title'					=> 'Dirección Técnica',
			'slug'					=>	'direccion-tecnica',
			'description'					=>	'<p></p>',
			'owner_name'	=>	'Marisol Restrepo Montoya',
			'owner_username'	=>	'marisol.restrepo',
			'owner_image'					=>	'marisol.restrepo.jpg'
		]);

		//Usuarios - Dirección General

		User::create([
			'name'					=>	'Rodrigo Foronda Morales',
			'username'				=>	'rodrigo.foronda',
			'password'				=> bcrypt('rodrigo.foronda'),
			'email'					=>	'rodrigo.foronda@app.gov.co',
			'profile_photo_path' =>	'rodrigo.foronda.jpg',
			'day'						=>	'29',
			'month'					=>	'12',
			'sex'						=>	'Male',
			'user_type'				=>	'Linked',
			'city_id'				=>	1,
			'dependency_id'		=> 4,
			'phone_number'			=>	'4481740',
			'ext_number'			=>	'101',
			'position'				=>	'Director General',
			'profession'			=>	'Abogado'
		]);

		User::create([
			'name'					=>	'Aldemar Echavarría',
			'username'				=>	'comunicaciones',
			'password'				=> bcrypt('comunicaciones'),
			'email'					=>	'comunicaciones@app.gov.co',
			'profile_photo_path' =>	'comunicaciones.jpg',
			'day'						=>	'18',
			'month'					=>	'08',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 4,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya la gestión y desarrollo de la estrategia comunicacional y de posicionamiento de la AGENCIA APP',
			'profession'			=>	'Periodista'
		]);

		User::create([
			'name'					=>	'Angélica María Sánchez Álvarez',
			'username'				=>	'angelica.sanchez',
			'password'				=> bcrypt('angelica.sanchez'),
			'email'					=>	'angelica.sanchez@app.gov.co',
			'profile_photo_path' =>	'angelica.sanchez.jpg',
			'day'						=>	'05',
			'month'					=>	'07',
			'sex'						=>	'Female',
			'city_id'				=>	13,
			'dependency_id'		=> 4,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios como Abogada para apoyar a la AGENCIA APP',
			'profession'			=>	'Abogada'
		]);

		User::create([
			'name'					=>	'Alejandra María Torres Uechek',
			'username'				=>	'alejandra.torres',
			'password'				=> bcrypt('alejandra.torres'),
			'email'					=>	'alejandra.torres@app.gov.co',
			'profile_photo_path' =>	'alejandra.torres.jpg',
			'day'						=>	'13',
			'month'					=>	'01',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 4,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya a la Dirección General en asuntos propios de la gestión jurídica y contractual y acompañamiento en las sesiones del Consejo Directivo',
			'profession'			=>	'Abogada'
		]);

		User::create([
			'name'					=>	'Laura Andrea Gómez Rodask',
			'username'				=>	'laura.gomez',
			'password'				=> bcrypt('laura.gomez'),
			'email'					=>	'laura.gomez@app.gov.co',
			'profile_photo_path' =>	'laura.gomez.jpg',
			'day'						=>	'20',
			'month'					=>	'04',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 4,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya el seguimiento a los proyectos de las subdirecciones y asistencia a la Director General',
			'profession'			=>	'Ingeniera Civil'
		]);

		User::create([
			'name'					=>	'Mónica Alejandra Gómez Yepes',
			'username'				=>	'monica.gomez',
			'password'				=> bcrypt('monica.gomez'),
			'email'					=>	'monica.gomez@app.gov.co',
			'profile_photo_path' =>	'monica.gomez.jpg',
			'day'						=>	'22',
			'month'					=>	'12',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 4,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya la gestión de los procesos administrativos y operativos de la Dirección General y el equipo de comunicaciones',
			'profession'			=>	'Licenciada en Educación Física'
		]);

		User::create([
			'name'					=>	'Nathalia Gallego Mejía',
			'username'				=>	'nathalia.gallego',
			'password'				=> bcrypt('nathalia.gallego'),
			'email'					=>	'nathalia.gallego@app.gov.co',
			'profile_photo_path' =>	'nathalia.gallego.jpg',
			'day'						=>	'14',
			'month'					=>	'10',
			'sex'						=>	'Female',
			'city_id'				=>	14,
			'dependency_id'		=> 4,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya la gestión de los procesos administrativos y operativos de la Dirección General y el equipo de comunicaciones',
			'profession'			=>	'Arquitecta'
		]);

		User::create([
			'name'					=>	'Nicolás Tieck Macías',
			'username'				=>	'nicolas.tieck',
			'password'				=> bcrypt('nicolas.tieck'),
			'email'					=>	'nicolas.tieck@app.gov.co',
			'profile_photo_path' =>	'nicolas.tieck.jpg',
			'day'						=>	'08',
			'month'					=>	'04',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 4,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya la gestión de los procesos administrativos y operativos de la Dirección General y el equipo de comunicaciones',
			'profession'			=>	'Fotógrafo'
		]);

		User::create([
			'name'					=>	'Wilson Osorno García',
			'username'				=>	'wilson.osorno',
			'password'				=> bcrypt('wilson.osorno'),
			'email'					=>	'wilson.osorno@app.gov.co',
			'profile_photo_path' =>	'wilson.osorno.png',
			'day'						=>	'21',
			'month'					=>	'03',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 4,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya la gestión de los procesos administrativos y operativos de la Dirección General y el equipo de comunicaciones',
			'profession'			=>	'Ingeniero de Sistemas'
		]);

		
		//Usuarios de dirección técnica

		User::create([
			'name'					=>	'Marisol Restrepo Montoya',
			'username'				=>	'marisol.restrepo',
			'password'				=> bcrypt('marisol.restrepo'),
			'email'					=>	'marisol.restrepo@app.gov.co',
			'profile_photo_path' =>	'marisol.restrepo.jpg',
			'day'						=>	'27',
			'month'					=>	'05',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 5,
			'phone_number'			=>	'4481740',
			'position'				=>	'Directora Técnica',
			'ext_number'			=>	'112',
			'profession'			=>	'Ingeniera de Productividad y Calidad'
		]);

		User::create([
			'name'					=>	'Andrés Moreno',
			'username'				=>	'andres.moreno',
			'password'				=> bcrypt('andres.moreno'),
			'email'					=>	'andres.moreno@app.gov.co',
			'profile_photo_path' =>	'andres.moreno.JPG',
			'day'						=>	'26',
			'month'					=>	'02',
			'sex'						=>	'Male',
			'city_id'				=>	17,
			'dependency_id'		=> 5,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya la gestión de las tecnologías de la información y comunicaciones de los proyectos de la AGENCIA APP',
			'ext_number'			=>	'123',
			'profession'			=>	'Estudiante de último semestre de Ingeniería de Telecomunicaciones'
		]);

		User::create([
			'name'					=>	'Bibiana Andrea Torres Piedrahíta',
			'username'				=>	'bibiana.torres',
			'password'				=> bcrypt('bibiana.torres'),
			'email'					=>	'bibiana.torres@app.gov.co',
			'profile_photo_path' =>	'bibiana.torres.jpg',
			'day'						=>	'18',
			'month'					=>	'02',
			'sex'						=>	'Female',
			'city_id'				=>	16,
			'dependency_id'		=> 5,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya la gestión de tesorería, activos fijos y demás gestiones requeridas desde el área de presupuesto',
			'ext_number'			=>	'112',
			'profession'			=>	'Contadora pública'
		]);

		$brayan = User::create([
			'name'					=>	'Brayan Stiven Angarita Rivera',
			'username'				=>	'brayan.angarita',
			'password'				=> bcrypt('brayan.angarita'),
			'email'					=>	'brayan.angarita@app.gov.co',
			'profile_photo_path' =>	'brayan.angarita.JPG',
			'day'						=>	'13',
			'month'					=>	'11',
			'sex'						=>	'Male',
			'city_id'				=>	15,
			'dependency_id'		=> 5,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya la gestión para brindar acompañamiento a la operación de la plataforma Espacio Med del Aprovechamiento Económico del Espacio Público AEEP',
			'profession'			=>	'Ingeniero informático en formación'
		]);

		User::create([
			'name'					=>	'Catalina Pérez Mesa',
			'username'				=>	'catalina.perez',
			'password'				=> bcrypt('catalina.perez'),
			'email'					=>	'catalina.perez@app.gov.co',
			'profile_photo_path' =>	'catalina.perez.jpg',
			'day'						=>	'03',
			'month'					=>	'06',
			'sex'						=>	'Female',
			'city_id'				=>	18,
			'dependency_id'		=> 5,
			'phone_number'			=>	'4481740',
			'ext_number'			=> '128',
			'position'				=>	'Apoya desde el componente logístico los procesos y proyectos contractuales y administrativos gestionados por la AGENCIA APP',
			'ext_number'			=>	'112',
			'profession'			=>	'Contadora Pública'
		]);

		User::create([
			'name'					=>	'Gladys Ortiz Sánchez',
			'username'				=>	'gladys.ortiz',
			'password'				=> bcrypt('gladys.ortiz'),
			'email'					=>	'gladys.ortiz@app.gov.co',
			'profile_photo_path' =>	'gladys.ortiz.jpg',
			'day'						=>	'21',
			'month'					=>	'10',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 5,
			'phone_number'			=>	'4481740',
			'ext_number'			=> '107',
			'position'				=>	'Apoya desde el componente logístico los procesos y proyectos contractuales y administrativos gestionados por la AGENCIA APP',
			'ext_number'			=>	'112',
			'profession'			=>	'Administradora de Empresas'
		]);

		User::create([
			'name'					=>	'Juan Guillermo Salcedo Delgado',
			'username'				=>	'juan.salcedo',
			'password'				=> bcrypt('juan.salcedo'),
			'email'					=>	'juan.salcedo@app.gov.co',
			'profile_photo_path' =>	'juan.salcedo.JPG',
			'day'						=>	'05',
			'month'					=>	'05',
			'sex'						=>	'Male',
			'city_id'				=>	19,
			'dependency_id'		=> 5,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya la gestión administrativa de la AGENCIA APP',
			'ext_number'			=>	'112',
			'profession'			=>	'Economista en formación'
		]);

		$rh = Role::create(['name' => 'rh']);
		$admin = Role::create(['name' => 'admin']);

		$lina = User::create([
			'name'					=>	'Lina María Martínez Giraldo',
			'username'				=>	'lina.martinez',
			'password'				=> bcrypt('lina.martinez'),
			'email'					=>	'lina.martinez@app.gov.co',
			'profile_photo_path' =>	'lina.martinez.jpg',
			'day'						=>	'09',
			'month'					=>	'10',
			'sex'						=>	'Female',
			'city_id'				=>	5,
			'dependency_id'		=> 5,
			'phone_number'			=>	'4481740',
			'ext_number'			=> '108',
			'position'				=>	'Apoyo en la gestión humana de la AGENCIA APP',
			'ext_number'			=>	'108',
			'profession'			=>	'Profesional en Gestión Empresarial'
		]);

		$lina->assignRole($rh);
		$brayan->assignRole($admin);

		User::create([
			'name'					=>	'Liliana María Arteaga Restrepo',
			'username'				=>	'liliana.arteaga',
			'password'				=> bcrypt('liliana.arteaga'),
			'email'					=>	'liliana.arteaga@app.gov.co',
			'profile_photo_path' =>	'liliana.arteaga.JPG',
			'day'						=>	'26',
			'month'					=>	'02',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 5,
			'phone_number'			=>	'4481740',
			'ext_number'			=> '113',
			'position'				=>	'Apoya la gestión presupuestal, financiera y de planeación de la AGENCIA APP',
			'ext_number'			=>	'113',
			'profession'			=>	'Contadora Pública'
		]);

		User::create([
			'name'					=>	'María Alejandra Zapata Jaramillo',
			'username'				=>	'maria.zapata',
			'password'				=> bcrypt('maria.zapata'),
			'email'					=>	'maria.zapata@app.gov.co',
			'profile_photo_path' =>	'maria.zapata.jpg',
			'day'						=>	'10',
			'month'					=>	'07',
			'sex'						=>	'Female',
			'city_id'				=>	3,
			'dependency_id'		=> 5,
			'phone_number'			=>	'4481740',
			'ext_number'			=> '100',
			'position'				=>	'Apoya la gestión del servicio al ciudadano y los procesos operativos y administrativos de la AGENCIA APP',
			'ext_number'			=>	'100',
			'profession'			=>	'Administradora en formación'
		]);

		User::create([
			'name'					=>	'Mariluz Hidalgo Grisales',
			'username'				=>	'mariluz.hidalgo',
			'password'				=> bcrypt('mariluz.hidalgo'),
			'email'					=>	'mariluz.hidalgo@app.gov.co',
			'profile_photo_path' =>	'mariluz.hidalgo.jpg',
			'day'						=>	'11',
			'month'					=>	'10',
			'sex'						=>	'Female',
			'city_id'				=>	6,
			'dependency_id'		=> 5,
			'phone_number'			=>	'4481740',
			'ext_number'			=> '107',
			'position'				=>	'Apoya desde el componente logístico los procesos y proyectos contractuales y administrativos gestionados por la AGENCIA APP',
			'ext_number'			=>	'107',
			'profession'			=>	'Economista'
		]);

		User::create([
			'name'					=>	'Miguel Ángel Castro Tarazona',
			'username'				=>	'miguel.castro',
			'password'				=> bcrypt('miguel.castro'),
			'email'					=>	'miguel.castro@app.gov.co',
			'profile_photo_path' =>	'miguel.castro.jpg',
			'day'						=>	'07',
			'month'					=>	'06',
			'sex'						=>	'Male',
			'city_id'				=>	20,
			'dependency_id'		=> 5,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya la gestión de planeación y procesos organizacionales de la AGENCIA APP',
			'profession'			=>	'Ingeniero Industrial'
		]);

		User::create([
			'name'					=>	'Mónica María Rendón Gaviria',
			'username'				=>	'monica.rendon',
			'password'				=> bcrypt('monica.rendon'),
			'email'					=>	'monica.rendon@app.gov.co',
			'profile_photo_path' =>	'monica.rendon.jpg',
			'day'						=>	'27',
			'month'					=>	'05',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 5,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya la gestión contable y tributaria de la AGENCIA APP',
			'profession'			=>	'Contadora Pública'
		]);

		//Subdirección de APP

		User::create([
			'name'					=>	'Juan Manuel Mejía Salazar',
			'username'				=>	'manuel.mejia',
			'password'				=> bcrypt('manuel.mejia'),
			'email'					=>	'manuel.mejia@app.gov.co',
			'profile_photo_path' =>	'manuel.mejia.jpg',
			'day'						=>	'06',
			'month'					=>	'12',
			'sex'						=>	'Male',
			'city_id'				=>	21,
			'dependency_id'		=> 1,
			'phone_number'			=>	'4481740',
			'position'				=>	'Subdirector de Gestión de Alianzas Público Privadas',
			'profession'			=>	'Profesional en Finanzas y Comercio Internacional - Economista'
		]);

		User::create([
			'name'					=>	'Astrid García Monsalve',
			'username'				=>	'astrid.garcia',
			'password'				=> bcrypt('astrid.garcia'),
			'email'					=>	'astrid.garcia@app.gov.co',
			'profile_photo_path' =>	'astrid.garcia.jpg',
			'day'						=>	'01',
			'month'					=>	'06',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 1,
			'phone_number'			=>	'4481740',
			'position'				=>	'Asistente de la gerencia encargada de la ejecución de los estudios de factibilidad del proyecto de modernización de la UDAG',
			'profession'			=>	'Economista Industrial'
		]);

		User::create([
			'name'					=>	'Catalina Escobar Galvis',
			'username'				=>	'catalina.escobar',
			'password'				=> bcrypt('catalina.escobar'),
			'email'					=>	'catalina.escobar@app.gov.co',
			'profile_photo_path' =>	'catalina.escobar.JPG',
			'day'						=>	'26',
			'month'					=>	'02',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 1,
			'phone_number'			=>	'4481740',
			'position'				=>	'Acompaña desde el componente técnico la viabilidad urbanística de los proyectos gestionados por la Subdirección de Gestión de Alianzas Público Privadas de la AGENCIA APP',
			'profession'			=>	'Ingeniera Civil'
		]);

		User::create([
			'name'					=>	'Daniel Gómez Baraona',
			'username'				=>	'daniel.gomez',
			'password'				=> bcrypt('daniel.gomez'),
			'email'					=>	'daniel.gomez@app.gov.co',
			'profile_photo_path' =>	'daniel.gomez.jpg',
			'day'						=>	'07',
			'month'					=>	'08',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 1,
			'phone_number'			=>	'4481740',
			'ext_number'			=> '127',
			'position'				=>	'Apoya desde el componente técnico, la gestión, estructuración y supervisión de los proyectos',
			'profession'			=>	'Ingeniero Civil'
		]);

		User::create([
			'name'					=>	'Fabián Gonzálo Marín Cortés',
			'username'				=>	'fabian.marin',
			'password'				=> bcrypt('fabian.marin'),
			'email'					=>	'fabian.marin@app.gov.co',
			'profile_photo_path' =>	'fabian.marin.jpg',
			'day'						=>	'29',
			'month'					=>	'11',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 1,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya el componente jurídico del proyecto de Modernización de la UDAG',
			'profession'			=>	'Abogado'
		]);

		User::create([
			'name'					=>	'Gilberto de Jesús Giraldo Buitrago',
			'username'				=>	'gilberto.giraldo',
			'password'				=> bcrypt('gilberto.giraldo'),
			'email'					=>	'gilberto.giraldo@app.gov.co',
			'profile_photo_path' =>	'gilberto.giraldo.JPG',
			'day'						=>	'26',
			'month'					=>	'02',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 1,
			'phone_number'			=>	'4481740',
			'position'				=>	'Gerencia de la ejecución de los estudios de factibilidad del proyecto Modernización de la UDAG, bajo el mecanismo de Asociación Público Privada',
			'profession'			=>	'Economista Industrial'
		]);

		User::create([
			'name'					=>	'Luisa Fernanda Gutiérrez Maya',
			'username'				=>	'luisa.gutierrez',
			'password'				=> bcrypt('luisa.gutierrez'),
			'email'					=>	'luisa.gutierrez@app.gov.co',
			'profile_photo_path' =>	'luisa.gutierrez.jpeg',
			'day'						=>	'10',
			'month'					=>	'03',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 1,
			'phone_number'			=>	'4481740',
			'ext_number'			=> '118',
			'position'				=>	'Apoya la gestión técnica y la supervisión del componente urbano arquitectónico de los proyectos',
			'profession'			=>	'Arquitecta'
		]);

		User::create([
			'name'					=>	'Laura Vanessa Mouthon Toro',
			'username'				=>	'laura.mouthon',
			'password'				=> bcrypt('laura.mouthon'),
			'email'					=>	'laura.mouthon@app.gov.co',
			'profile_photo_path' =>	'laura.mouthon.jpg',
			'day'						=>	'04',
			'month'					=>	'06',
			'sex'						=>	'Female',
			'city_id'				=>	22,
			'dependency_id'		=> 1,
			'phone_number'			=>	'4481740',
			'position'				=>	'Presta sus servicios como Abogada para apoyar a la AGENCIA APP',
			'profession'			=>	'Abogada'
		]);

		User::create([
			'name'					=>	'Sixto Naranjo Guarín',
			'username'				=>	'sixto.naranjo',
			'password'				=> bcrypt('sixto.naranjo'),
			'email'					=>	'sixto.naranjo@app.gov.co',
			'profile_photo_path' =>	'sixto.naranjo.jpg',
			'day'						=>	'07',
			'month'					=>	'01',
			'sex'						=>	'Male',
			'city_id'				=>	22,
			'dependency_id'		=> 1,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya la gestión técnica de los proyectos y procesos de la Subdirección de Gestión de Alianzas Público Privadas de la Agencia APP',
			'profession'			=>	'Arquitecto'
		]);

		//Usuarios Inmobiliaria

		User::create([
			'name'					=>	'Natacha Gómez Hoyos',
			'username'				=>	'natacha.gomez',
			'password'				=> bcrypt('natacha.gomez'),
			'email'					=>	'natacha.gomez@app.gov.co',
			'profile_photo_path' =>	'natacha.gomez.jpg',
			'day'						=>	'02',
			'month'					=>	'08',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 3,
			'phone_number'			=>	'4481740',
			'ext_number'			=> '103',
			'position'				=>	'Apoya la gestión técnica de los proyectos y procesos de la Subdirección de Gestión de Alianzas Público Privadas de la Agencia APP',
			'profession'			=>	'Ingeniera Civil'
		]);

		User::create([
			'name'					=>	'Juan Sebastián Parra Peláez',
			'username'				=>	'juan.parra',
			'password'				=> bcrypt('juan.parra'),
			'email'					=>	'juan.parra@app.gov.co',
			'profile_photo_path' =>	'juan.parra.jpg',
			'day'						=>	'26',
			'month'					=>	'02',
			'sex'						=>	'Male',
			'city_id'				=>	24,
			'dependency_id'		=> 3,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios profesionales como Abogado para apoyar la AGENCIA APP',
			'profession'			=>	'Abogado'
		]);

		User::create([
			'name'					=>	'Diana Lucía Pérez',
			'username'				=>	'diana.perez',
			'password'				=> bcrypt('diana.perez'),
			'email'					=>	'diana.perez@app.gov.co',
			'profile_photo_path' =>	'diana.perez.jpeg',
			'day'						=>	'15',
			'month'					=>	'05',
			'sex'						=>	'Female',
			'city_id'				=>	25,
			'dependency_id'		=> 3,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya la gestión y el acompañamiento técnico de los proyectos y negocios inmobiliarios',
			'profession'			=>	'Tecnóloga en Administración Pública'
		]);

		User::create([
			'name'					=>	'Javier Barreto Bonilla',
			'username'				=>	'javier.barreto',
			'password'				=> bcrypt('javier.barreto'),
			'email'					=>	'javier.barreto@app.gov.co',
			'profile_photo_path' =>	'javier.barreto.jpg',
			'day'						=>	'07',
			'month'					=>	'08',
			'sex'						=>	'Male',
			'city_id'				=>	26,
			'dependency_id'		=> 3,
			'phone_number'			=>	'4481740',
			'ext_number'			=> '114',
			'position'				=>	'Profesional Especializado',
			'profession'			=>	'Economista'
		]);

		User::create([
			'name'					=>	'Juan Carlos Restrepo Monsalve',
			'username'				=>	'juanca.restrepo',
			'password'				=> bcrypt('juanca.restrepo'),
			'email'					=>	'juanca.restrepo22@gmail.com',
			'profile_photo_path' =>	'juanca.restrepo.jpg',
			'day'						=>	'30',
			'month'					=>	'01',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 3,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya desde el componente técnico la formulación, ejecución y supervisión de los proyectos que gestiona la AGENCIA APP',
			'profession'			=>	'Arquitecto'
		]);

		User::create([
			'name'					=>	'Martha Nelly Agudelo Vanegas',
			'username'				=>	'martha.agudelo',
			'password'				=> bcrypt('martha.agudelo'),
			'email'					=>	'm_agudelo@corpoeco.org',
			'profile_photo_path' =>	'martha.agudelo.jpg',
			'day'						=>	'20',
			'month'					=>	'09',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 3,
			'phone_number'			=>	'4481740',
			'position'				=>	'Acompañamiento técnico y apoyo a la supervisión desde el componente de mercado de los proyectos inmobiliarios gestionados por la AGENCIA APP',
			'profession'			=>	'Ingeniera Administradora'
		]);


		User::create([
			'name'					=>	'Óscar Oswaldo Manco López',
			'username'				=>	'oscar.manco',
			'password'				=> bcrypt('oscar.manco'),
			'email'					=>	'oscar.manco@app.gov.co',
			'profile_photo_path' =>	'oscar.manco.jpg',
			'day'						=>	'30',
			'month'					=>	'09',
			'sex'						=>	'Male',
			'city_id'				=>	25,
			'dependency_id'		=> 3,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya el componente financiero, socioeconómico y de los riesgos de los proyectos gestionados por la AGENCIA APP',
			'profession'			=>	'Ingeniero Administrador'
		]);

		User::create([
			'name'					=>	'Santiago Castro Hernández',
			'username'				=>	'santiago.castro',
			'password'				=> bcrypt('santiago.castro'),
			'email'					=>	'santiago.castro@app.gov.co',
			'profile_photo_path' =>	'santiago.castro.jpg',
			'day'						=>	'14',
			'month'					=>	'10',
			'sex'						=>	'Male',
			'city_id'				=>	10,
			'dependency_id'		=> 3,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya el componente técnico de los proyectos y negocios inmobiliarios, además de complementar, ajustar el inventario y realizar análisis de identificación y de oportunidad de los bienes inmuebles fiscales propiedad del Municipio de Medellín',
			'profession'			=>	'Arquitecto'
		]);

		User::create([
			'name'					=>	'Tatiana de los Ríos Gaviria',
			'username'				=>	'tatiana.delosrios',
			'password'				=> bcrypt('tatiana.delosrios'),
			'email'					=>	'tatiana.delosrios@app.gov.co',
			'profile_photo_path' =>	'tatiana.delosrios.jpg',
			'day'						=>	'16',
			'month'					=>	'09',
			'sex'						=>	'Female',
			'city_id'				=>	27,
			'dependency_id'		=> 3,
			'ext_number'			=> '115',
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya desde el componente técnico la gestión de proyectos',
			'profession'			=>	'Arquitecta'
		]);

		//Usuarios de Paisaje

		User::create([
			'name'					=>	'Daniel Madrigal Arango',
			'username'				=>	'daniel.madrigal',
			'password'				=> bcrypt('daniel.madrigal'),
			'email'					=>	'daniel.madrigal@app.gov.co',
			'profile_photo_path' =>	'daniel.madrigal.jpg',
			'day'						=>	'11',
			'month'					=>	'06',
			'sex'						=>	'Male',
			'city_id'				=>	28,
			'dependency_id'		=> 2,
			'ext_number'			=> '111',
			'phone_number'			=>	'4481740',
			'position'				=>	'Subdirector de Gestión del Paisaje y el Patrimonio',
			'profession'			=>	'Arquitecto'
		]);

		User::create([
			'name'					=>	'Alejandra Ramírez Rico',
			'username'				=>	'alejandra.ramirez',
			'password'				=> bcrypt('alejandra.ramirez'),
			'email'					=>	'ou.alejandraarq@gmail.com',
			'profile_photo_path' =>	'alejandra.ramirez.jpg',
			'day'						=>	'03',
			'month'					=>	'11',
			'sex'						=>	'Female',
			'city_id'				=>	9,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios profesionales como arquitecta para apoyar a la AGENCIA APP',
			'profession'			=>	'Arquitecta'
		]);

		User::create([
			'name'					=>	'Alejandro Álvarez Espinal',
			'username'				=>	'alejandro.alvarez',
			'password'				=> bcrypt('alejandro.alvarez'),
			'email'					=>	'alejandro.alvarez@app.gov.co',
			'profile_photo_path' =>	'alejandro.alvarez.jpg',
			'day'						=>	'03',
			'month'					=>	'02',
			'sex'						=>	'Male',
			'city_id'				=>	9,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios profesionales como arquitecto para apoyar a la AGENCIA APP',
			'profession'			=>	'Arquitecto'
		]);

		User::create([
			'name'					=>	'Ana Mileidy Holguín Pérez',
			'username'				=>	'ana.holguin',
			'password'				=> bcrypt('ana.holguin'),
			'email'					=>	'ana.holguin@app.gov.co',
			'profile_photo_path' =>	'ana.holguin.jpg',
			'day'						=>	'12',
			'month'					=>	'02',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya los procesos administrativos del Aprovechamiento Económico del Espacio Público',
			'profession'			=>	'Tecnóloga en Gestión Empresarial'
		]);

		User::create([
			'name'					=>	'Ana Milena Zapata Sánchez',
			'username'				=>	'ana.zapata',
			'password'				=> bcrypt('ana.zapata'),
			'email'					=>	'ana.zapata@app.gov.co',
			'profile_photo_path' =>	'ana.zapata.jpg',
			'day'						=>	'17',
			'month'					=>	'07',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios profesionales como Comunicadora Social para apoyar a la AGENCIA APP',
			'profession'			=>	'Comunicadora Social'
		]);

		User::create([
			'name'					=>	'Andrea Sierra Uribe',
			'username'				=>	'andrea.sierra',
			'password'				=> bcrypt('andrea.sierra'),
			'email'					=>	'andrea.sierra@app.gov.co',
			'profile_photo_path' =>	'andrea.sierra.jpg',
			'day'						=>	'16',
			'month'					=>	'03',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios profesionales como Abogada para apoyar a la AGENCIA APP',
			'profession'			=>	'Abogada'
		]);

		User::create([
			'name'					=>	'Andrés Felipe Ospina Montoya',
			'username'				=>	'andres.ospina',
			'password'				=> bcrypt('andres.ospina'),
			'email'					=>	'andres.ospina@app.gov.co',
			'profile_photo_path' =>	'andres.ospina.JPG',
			'day'						=>	'30',
			'month'					=>	'12',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios profesionales como tecnólogo en construcciones civiles para apoyar a la AGENCIA APP',
			'profession'			=>	'Tecnólogo en Construcciones Civiles'
		]);

		User::create([
			'name'					=>	'Aníbal Olarte Valbuena',
			'username'				=>	'anibal.olarte',
			'password'				=> bcrypt('anibal.olarte'),
			'email'					=>	'anibal.olarte@app.gov.co',
			'profile_photo_path' =>	'anibal.olarte.jpg',
			'day'						=>	'13',
			'month'					=>	'04',
			'sex'						=>	'Male',
			'city_id'				=>	29,
			'dependency_id'		=> 2,
			'phone_number'			=>	'3124245561',
			'position'				=>	'Apoya las actividades de la estrategia Integral para el Aprovechamiento Económico del Espacio Público del Municipio de Medellín',
			'profession'			=>	'Ingeniero Civil'
		]);

		User::create([
			'name'					=>	'Angela María Goez Holguín',
			'username'				=>	'angela.goez',
			'password'				=> bcrypt('angela.goez'),
			'email'					=>	'angela.goez@app.gov.co',
			'profile_photo_path' =>	'angela.goez.jpg',
			'day'						=>	'19',
			'month'					=>	'11',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios profesionales como arquitecta para apoyar a la AGENCIA APP',
			'profession'			=>	'Arquitecta'
		]);

		User::create([
			'name'					=>	'Any Xiomara Calderón Vergara',
			'username'				=>	'anny.calderon',
			'password'				=> bcrypt('anny.calderon'),
			'email'					=>	'anny.calderon@app.gov.co',
			'profile_photo_path' =>	'anny.calderon.jpg',
			'day'						=>	'10',
			'month'					=>	'04',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios profesionales como profesional en planeación y desarrollo social para apoyar a la AGENCIA APP',
			'profession'			=>	'Profesional en planeación y desarrollo social'
		]);

		User::create([
			'name'					=>	'Carlos Andrés Restrepo Fergusson',
			'username'				=>	'carlos.restrepo',
			'password'				=> bcrypt('carlos.restrepo'),
			'email'					=>	'carlos.restrepo@app.gov.co',
			'profile_photo_path' =>	'carlos.restrepo.JPG',
			'day'						=>	'20',
			'month'					=>	'04',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya y acompaña el seguimiento a la gestión de los procesos y proyectos a cargo de la  la Subdirección de Gestión del Paisaje y el Patrimonio AEEP',
			'profession'			=>	'Politólogo'
		]);

		User::create([
			'name'					=>	'Carlos David Hurtado Ángel',
			'username'				=>	'carlos.hurtado',
			'password'				=> bcrypt('carlos.hurtado'),
			'email'					=>	'carhur16@gmail.com',
			'profile_photo_path' =>	'carlos.hurtado.JPG',
			'day'						=>	'17',
			'month'					=>	'08',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Acompaña el desarrollo de la estrategia de acercamiento con la población impactada en los proyectos adelantados por la AGENCIA APP',
			'profession'			=>	'Bachiller'
		]);

		User::create([
			'name'					=>	'Carolina Correa Jaramillo',
			'username'				=>	'carolina.correa',
			'password'				=> bcrypt('carolina.correa'),
			'email'					=>	'carolina.correa@app.gov.co',
			'profile_photo_path' =>	'carolina.correa.jpg',
			'day'						=>	'14',
			'month'					=>	'09',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoyo técnico y de supervisión en los proyectos',
			'profession'			=>	'Arquitecta'
		]);

		User::create([
			'name'					=>	'César Augusto Ríos Novoa',
			'username'				=>	'cesar.rios',
			'password'				=> bcrypt('cesar.rios'),
			'email'					=>	'cesar.rios@app.gov.co',
			'profile_photo_path' =>	'cesar.rios.jpg',
			'day'						=>	'24',
			'month'					=>	'11',
			'sex'						=>	'Male',
			'city_id'				=>	13,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya el levantamiento de información técnica para los proyectos de la AGENCIA APP',
			'profession'			=>	'Ingeniero Civil'
		]);

		User::create([
			'name'					=>	'Claudia María Gómez Ossa',
			'username'				=>	'claudia.gomez',
			'password'				=> bcrypt('claudia.gomez'),
			'email'					=>	'claugo.2@hotmail.com',
			'profile_photo_path' =>	'claudia.gomez.jpg',
			'day'						=>	'26',
			'month'					=>	'02',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya desde el componente social los proyectos de la AGENCIA APP',
			'profession'			=>	'Comunicadora Social'
		]);

		User::create([
			'name'					=>	'David Cano Giraldo',
			'username'				=>	'david.cano',
			'password'				=> bcrypt('david.cano'),
			'email'					=>	'david.cano@app.gov.co',
			'profile_photo_path' =>	'david.cano.jpg',
			'day'						=>	'16',
			'month'					=>	'04',
			'sex'						=>	'Male',
			'city_id'				=>	2,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios profesionales como Arquitecto para apoyar a la AGENCIA APP',
			'profession'			=>	'Arquitecto'
		]);


		User::create([
			'name'					=>	'Daniela Suaza Saldarriaga',
			'username'				=>	'daniela.suaza',
			'password'				=> bcrypt('daniela.suaza'),
			'email'					=>	'danielasuaza28@gmail.com',
			'profile_photo_path' =>	'daniela.suaza.jpg',
			'day'						=>	'28',
			'month'					=>	'03',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios como Arquitecta para apoyar a la AGENCIA APP',
			'profession'			=>	'Arquitecta'
		]);

		User::create([
			'name'					=>	'Diana Catalina Arenas González',
			'username'				=>	'diana.arenas',
			'password'				=> bcrypt('diana.arenas'),
			'email'					=>	'diana.arenas@app.gov.co',
			'profile_photo_path' =>	'diana.arenas.jpg',
			'day'						=>	'26',
			'month'					=>	'10',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios como Arquitecta para apoyar a la AGENCIA APP',
			'profession'			=>	'Ingeniera Ambiental'
		]);

		User::create([
			'name'					=>	'Diana Marcela Sánchez López',
			'username'				=>	'diana.sanchez',
			'password'				=> bcrypt('diana.sanchez'),
			'email'					=>	'diana.sanchez@app.gov.co',
			'profile_photo_path' =>	'diana.sanchez.jpg',
			'day'						=>	'12',
			'month'					=>	'10',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios como administradora para apoyar a la AGENCIA APP',
			'profession'			=>	'Administradora de Empresas'
		]);

		User::create([
			'name'					=>	'Diana Vergara Ortíz',
			'username'				=>	'diana.vergara',
			'password'				=> bcrypt('diana.vergara'),
			'email'					=>	'diana.vergara@app.gov.co',
			'profile_photo_path' =>	'diana.vergara.jpg',
			'day'						=>	'11',
			'month'					=>	'04',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya las actividades de socialización y vinculación de privados (comerciantes y propietarios) a los proyectos',
			'profession'			=>	'Administradora de Negocios'
		]);

		User::create([
			'name'					=>	'Diego Mauricio Aguirre Mesa',
			'username'				=>	'diego.aguirre',
			'password'				=> bcrypt('diego.aguirre'),
			'email'					=>	'diegoaguirre_9@hotmail.com',
			'profile_photo_path' =>	'diego.aguirre.jpg',
			'day'						=>	'26',
			'month'					=>	'02',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios como Administrador para apoyar a la AGENCIA APP',
			'profession'			=>	'Administrador Tecnológico'
		]);

		User::create([
			'name'					=>	'Edwin Alexis Traslaviña Rodríguez',
			'username'				=>	'edwin.traslavina',
			'password'				=> bcrypt('edwin.traslavina'),
			'email'					=>	'edwin.traslaviña@app.gov.co',
			'profile_photo_path' =>	'edwin.traslavina.jpg',
			'day'						=>	'13',
			'month'					=>	'06',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios como Antropólogo para apoyar a la AGENCIA APP',
			'profession'			=>	'Antropólogo'
		]);

		User::create([
			'name'					=>	'Elizabeth Goéz Barrada',
			'username'				=>	'elizabeth.goez',
			'password'				=> bcrypt('elizabeth.goez'),
			'email'					=>	'elizabeth.goez@app.gov.co',
			'profile_photo_path' =>	'elizabeth.goez.JPG',
			'day'						=>	'13',
			'month'					=>	'05',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'3013953658',
			'position'				=>	'Apoya desde el componente social  los proyectos de la Subdirección de Gestión de Paisaje y Patrimonio',
			'profession'			=>	'Trabajadora social'
		]);

		User::create([
			'name'					=>	'Erika Yulima Sánchez Alzate',
			'username'				=>	'erika.sanchez',
			'password'				=> bcrypt('erika.sanchez'),
			'email'					=>	'erika.sanchez@app.gov.co',
			'profile_photo_path' =>	'erika.sanchez.jpg',
			'day'						=>	'15',
			'month'					=>	'04',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya el desarrollo de los instrumentos del POT que gestiona la AGENCIA APP',
			'profession'			=>	'Tecnóloga en administración y finanzas y administradora financiera'
		]);

		User::create([
			'name'					=>	'Germán Diego Jiménez López',
			'username'				=>	'german.jimenez',
			'password'				=> bcrypt('german.jimenez'),
			'email'					=>	'german.jimenez@app.gov.co',
			'profile_photo_path' =>	'german.jimenez.jpg',
			'day'						=>	'28',
			'month'					=>	'05',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya desde el componente técnico los proyectos de la AGENCIA APP',
			'profession'			=>	'Ingeniero Civil'
		]);

		User::create([
			'name'					=>	'Gustavo Adolfo Aguirre Núñez',
			'username'				=>	'gustavo.aguirre',
			'password'				=> bcrypt('gustavo.aguirre'),
			'email'					=>	'gustavo.aguirre@app.gov.co',
			'profile_photo_path' =>	'gustavo.aguirre.jpeg',
			'day'						=>	'01',
			'month'					=>	'08',
			'sex'						=>	'Male',
			'city_id'				=>	22,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios profesionales como arquitecto para apoyar a la AGENCIA APP',
			'profession'			=>	'Arquitecto'
		]);

		User::create([
			'name'					=>	'Henderson Alberto López Orozco',
			'username'				=>	'henderson.lopez',
			'password'				=> bcrypt('henderson.lopez'),
			'email'					=>	'henderson.lopez@app.gov.co',
			'profile_photo_path' =>	'henderson.lopez.jpg',
			'day'						=>	'11',
			'month'					=>	'11',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya la gestión del instrumento transferencia de derechos de construcción y aplicación de los demás instrumentos del POT',
			'profession'			=>	'Arquitecto'
		]);

		User::create([
			'name'					=>	'Jaime Rave Galvis',
			'username'				=>	'jaime.rave',
			'password'				=> bcrypt('jaime.rave'),
			'email'					=>	'jaime.rave@app.gov.co',
			'profile_photo_path' =>	'jaime.rave.jpg',
			'day'						=>	'01',
			'month'					=>	'08',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'3855555',
			'ext_number'			=> '8800',
			'position'				=>	'Apoya los procesos administrativos del aprovechamiento económico del espacio público (AEEP)',
			'profession'			=>	'Estudiante de Derecho'
		]);

		User::create([
			'name'					=>	'Javier Iván García González',
			'username'				=>	'javier.garcia',
			'password'				=> bcrypt('javier.garcia'),
			'email'					=>	'javier.garcia@app.gov.co',
			'profile_photo_path' =>	'javier.garcia.jpg',
			'day'						=>	'20',
			'month'					=>	'11',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya y coordina los procesos de reglamentación, implementación y operación de los instrumentos de gestión del suelo del Plan de Ordenamiento Territorial',
			'profession'			=>	'Arquitecto'
		]);

		User::create([
			'name'					=>	'Jesús Leonardo Pérez Pérez',
			'username'				=>	'leonardo.perez',
			'password'				=> bcrypt('leonardo.perez'),
			'email'					=>	'leonardo.perez@app.gov.co',
			'profile_photo_path' =>	'leonardo.perez.jpg',
			'day'						=>	'03',
			'month'					=>	'08',
			'sex'						=>	'Male',
			'city_id'				=>	31,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios como Arquitecto para apoyar a la AGENCIA APP',
			'profession'			=>	'Arquitecto'
		]);

		User::create([
			'name'					=>	'Johan Varón Giraldo',
			'username'				=>	'johan.varon',
			'password'				=> bcrypt('johan.varon'),
			'email'					=>	'johan.varon@app.gov.co',
			'profile_photo_path' =>	'johan.varon.jpg',
			'day'						=>	'06',
			'month'					=>	'09',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'ext_number' => '132',
			'position'				=>	'Apoya el desarrollo de los trámites administrativos que se derivan de la gestión del Aprovechamiento Económico del Espacio Público del Municipio de Medellín',
			'profession'			=>	'Arquitecto'
		]);

		User::create([
			'name'					=>	'Jorge Alexander Palacio Martínez',
			'username'				=>	'alexander.palacio',
			'password'				=> bcrypt('alexander.palacio'),
			'email'					=>	'alexander.palacio@app.gov.co',
			'profile_photo_path' =>	'alexander.palacio.jpg',
			'day'						=>	'15',
			'month'					=>	'02',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoyo desde el componente presupuestal y de seguimiento los proyectos de la Subdirección de Gestión del Paisaje y el Patrimonio',
			'profession'			=>	'Arquitecto'
		]);

		User::create([
			'name'					=>	'José David Gómez Jaramillo',
			'username'				=>	'jose.gomez',
			'password'				=> bcrypt('jose.gomez'),
			'email'					=>	'jose.gomez@app.gov.co',
			'profile_photo_path' =>	'jose.gomez.jpg',
			'day'						=>	'30',
			'month'					=>	'05',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoyo el componente técnico de los proyectos que gestiona la AGENCIA APP',
			'profession'			=>	'Arquitecto'
		]);

		User::create([
			'name'					=>	'Juan Alberto Gallego Arango',
			'username'				=>	'juan.gallego',
			'password'				=> bcrypt('juan.gallego'),
			'email'					=>	'juan.gallego@app.gov.co',
			'profile_photo_path' =>	'juan.gallego.JPG',
			'day'						=>	'03',
			'month'					=>	'09',
			'sex'						=>	'Male',
			'city_id'				=>	32,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios como licenciado en pedagogía para apoyar a la AGENCIA APP',
			'profession'			=>	'Licenciado en pedagogía reeducativa'
		]);

		User::create([
			'name'					=>	'Julián Santiago Ossa Ospina',
			'username'				=>	'julian.ossa',
			'password'				=> bcrypt('julian.ossa'),
			'email'					=>	'julian.ossa@app.gov.co',
			'profile_photo_path' =>	'julian.ossa.jpg',
			'day'						=>	'06',
			'month'					=>	'02',
			'sex'						=>	'Male',
			'city_id'				=>	32,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios como arquitecto para apoyar a la AGENCIA APP',
			'profession'			=>	'Arquitecto'
		]);

		User::create([
			'name'					=>	'Juan Diego Marulanda Giraldo',
			'username'				=>	'juan.marulanda',
			'password'				=> bcrypt('juan.marulanda'),
			'email'					=>	'juan.marulanda@app.gov.co',
			'profile_photo_path' =>	'juan.marulanda.jpg',
			'day'						=>	'30',
			'month'					=>	'06',
			'sex'						=>	'Male',
			'city_id'				=>	10,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios como arquitecto para apoyar a la AGENCIA APP',
			'profession'			=>	'Arquitecto'
		]);

		User::create([
			'name'					=>	'Juan Gonzalo Castrillón Tobón',
			'username'				=>	'juan.castrillon',
			'password'				=> bcrypt('juan.castrillon'),
			'email'					=>	'juan.castrillon@app.gov.co',
			'profile_photo_path' =>	'juan.castrillon.jpg',
			'day'						=>	'20',
			'month'					=>	'07',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios como ingeniero civil para apoyar a la AGENCIA APP',
			'profession'			=>	'Ingeniero Civil'
		]);

		User::create([
			'name'					=>	'Juan Lorenzo Villa Becerra',
			'username'				=>	'juan.villa',
			'password'				=> bcrypt('juan.villa'),
			'email'					=>	'juan.villa@app.gov.co',
			'profile_photo_path' =>	'juan.villa.jpg',
			'day'						=>	'25',
			'month'					=>	'11',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios como Administrador para apoyar a la AGENCIA APP',
			'profession'			=>	'Administrador de Negocios'
		]);

		User::create([
			'name'					=>	'Juan Pablo Ramos Gaviria',
			'username'				=>	'juan.ramos',
			'password'				=> bcrypt('juan.ramos'),
			'email'					=>	'juan.ramos@app.gov.co',
			'profile_photo_path' =>	'juan.ramos.jpg',
			'day'						=>	'27',
			'month'					=>	'12',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya desde el componente técnico los proyectos gestionados por la Subdirección de Gestión del Paisaje y el Patrimonio',
			'profession'			=>	'Arquitecto'
		]);

		User::create([
			'name'					=>	'Julián Hernández Valencia',
			'username'				=>	'julian.hernandez',
			'password'				=> bcrypt('julian.hernandez'),
			'email'					=>	'julian.hernandez@app.gov.co',
			'profile_photo_path' =>	'julian.hernandez.JPG',
			'day'						=>	'27',
			'month'					=>	'12',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya los procesos administrativos del aprovechamiento económico del espacio público (AEEP)',
			'profession'			=>	'Administrador de empresas'
		]);

		User::create([
			'name'					=>	'Lucas Cadavid Arango',
			'username'				=>	'lucas.cadavid',
			'password'				=> bcrypt('lucas.cadavid'),
			'email'					=>	'lucas.cadavid@app.gov.co',
			'profile_photo_path' =>	'lucas.cadavid.jpg',
			'day'						=>	'08',
			'month'					=>	'05',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoyo jurídico de la AGENCIA APP',
			'profession'			=>	'Abogado'
		]);

		User::create([
			'name'					=>	'Luis Fernando Giraldo Pérez',
			'username'				=>	'luis.giraldo',
			'password'				=> bcrypt('luis.giraldo'),
			'email'					=>	'luis.giraldo@app.gov.co',
			'profile_photo_path' =>	'luis.giraldo.jpg',
			'day'						=>	'24',
			'month'					=>	'09',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya el levantamiento de información técnica para los proyectos de la AGENCIA APP',
			'profession'			=>	'Arquitecto'
		]);

		User::create([
			'name'					=>	'Manuela Zea Robledo',
			'username'				=>	'manuela.zea',
			'password'				=> bcrypt('manuela.zea'),
			'email'					=>	'manuela.zea@app.gov.co',
			'profile_photo_path' =>	'manuela.zea.JPG',
			'day'						=>	'06',
			'month'					=>	'11',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoyo técnico a los proyectos gestionados por la Subdirección de Gestión del Paisaje y el Patrimonio',
			'profession'			=>	'Arquitecta'
		]);

		User::create([
			'name'					=>	'María José Barrera Roldán',
			'username'				=>	'maria.barrera',
			'password'				=> bcrypt('maria.barrera'),
			'email'					=>	'mariajose0897@outlook.com',
			'profile_photo_path' =>	'maria.barrera.jpg',
			'day'						=>	'25',
			'month'					=>	'08',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya el levantamiento de información técnica para los proyectos de la AGENCIA APP',
			'profession'			=>	'Arquitecta en formación'
		]);

		User::create([
			'name'					=>	'Mauricio Alexander Toro Zuleta',
			'username'				=>	'mauricio.toro',
			'password'				=> bcrypt('mauricio.toro'),
			'email'					=>	'mauricio.toro@app.gov.co',
			'profile_photo_path' =>	'mauricio.toro.jpg',
			'day'						=>	'31',
			'month'					=>	'08',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios para apoyar los trámites administrativos que se derivan de la gestión del AEEP',
			'profession'			=>	'Bachiller'
		]);

		User::create([
			'name'					=>	'Camila García Ortega',
			'username'				=>	'camila.garcia',
			'password'				=> bcrypt('camila.garcia'),
			'email'					=>	'camila.garcia@app.gov.co',
			'profile_photo_path' =>	'camila.garcia.jpg',
			'day'						=>	'26',
			'month'					=>	'09',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya el desarrollo de los trámites administrativos que se derivan de la gestión del Aprovechamiento Económico del Espacio Público AEEP',
			'profession'			=>	'Arquitecta'
		]);

		User::create([
			'name'					=>	'María Victoria Naranjo Jaramillo',
			'username'				=>	'maria.naranjo',
			'password'				=> bcrypt('maria.naranjo'),
			'email'					=>	'maria.naranjo@app.gov.co',
			'profile_photo_path' =>	'maria.naranjo.jpg',
			'day'						=>	'27',
			'month'					=>	'09',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya el componente técnico de los proyectos que gestiona la AGENCIA APP',
			'profession'			=>	'Arquitecta'
		]);

		User::create([
			'name'					=>	'Maryi Vallejo Ospina',
			'username'				=>	'maryi.vallejo',
			'password'				=> bcrypt('maryi.vallejo'),
			'email'					=>	'maryi011183@hotmail.com',
			'profile_photo_path' =>	'maryi.vallejo.jpg',
			'day'						=>	'26',
			'month'					=>	'02',
			'sex'						=>	'Female',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios como tecnóloga en salud ocupacional para apoyar a la AGENCIA APP',
			'profession'			=>	'Tecnóloga en Salud Ocupacional'
		]);

		User::create([
			'name'					=>	'Mauricio Correa Castrillón',
			'username'				=>	'mauricio.correa',
			'password'				=> bcrypt('mauricio.correa'),
			'email'					=>	'mauricio.correa@app.gov.co',
			'profile_photo_path' =>	'mauricio.correa.jpg',
			'day'						=>	'14',
			'month'					=>	'06',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya la gestión del Aprovechamiento Económico del Espacio Público del Municipio de Medellín',
			'profession'			=>	'Arquitecto'
		]);

		User::create([
			'name'					=>	'Mauricio de Fátima Jaramillo Vásquez',
			'username'				=>	'mauricio.jaramillo',
			'password'				=> bcrypt('mauricio.jaramillo'),
			'email'					=>	'mauricio.jaramillo@app.gov.co',
			'profile_photo_path' =>	'mauricio.jaramillo.jpg',
			'day'						=>	'13',
			'month'					=>	'05',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya el componente ambiental de los proyectos gestionados por la AGENCIA APP',
			'profession'			=>	'Ingeniero Forestal'
		]);

		User::create([
			'name'					=>	'Santiago Vélez Salamanca',
			'username'				=>	'santiago.velez',
			'password'				=> bcrypt('santiago.velez'),
			'email'					=>	'santiago.velez@app.gov.co',
			'profile_photo_path' =>	'santiago.velez.jpg',
			'day'						=>	'21',
			'month'					=>	'11',
			'sex'						=>	'Male',
			'city_id'				=>	1,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Prestación de servicios profesionales para apoyar el componente de arte urbano en los proyectos adelantados por la AGENCIA APP',
			'profession'			=>	'Maestro en ártes  plásticas'
		]);

		User::create([
			'name'					=>	'Yormey Esteban Vásquez Zuleta',
			'username'				=>	'yormey.vasquez',
			'password'				=> bcrypt('yormey.vasquez'),
			'email'					=>	'yormey.vasquez@app.gov.co',
			'profile_photo_path' =>	'yormey.vasquez.jpg',
			'day'						=>	'25',
			'month'					=>	'06',
			'sex'						=>	'Male',
			'city_id'				=>	33,
			'dependency_id'		=> 2,
			'phone_number'			=>	'4481740',
			'position'				=>	'Apoya el desarrollo de los trámites administrativos que se derivan de la gestión del Aprovechamiento Económico del Espacio Público del Municipio de Medellín',
			'profession'			=>	'Arquitecto'
		]);

		Training::create([
			'title' => 'Capacitación en Mercurio',
			'slug' => 'capacitacion-en-mercurio',
			'image' => 'https://fakeimg.pl/600x420/100/?text=MERCURIO',
			'training_category_id' => 1
		]);
	}
}
