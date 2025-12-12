<?php
	$services = array(
		// Servicios Educativos
		// ********************
		// EMPieza
		array(
			'category' => 'Servicios Educativos',
			'title' => 'EMPieza',
			'title_EN' => 'EMPieza',
			'id' => 'empieza',
			'icon' => 'extension',
			'url' => 'https://empieza.educa.madrid.org/',
			'desc' => 'Gestión de grupos, herramientas y servicios de EducaMadrid.',
			'desc_EN' => 'Management of groups, tools, and EducaMadrid services.',
			'modalTitle' => 'EMPieza',
			'description' => '
				<p>xxxEMPiezayyy es una aplicación de xxxgestión de servicios y herramientasyyy de EducaMadrid.</p>
				<p>Representa un "centro de control" que permite creación de grupos de usuarios y gestión de diferentes herramientas de EducaMadrid para esos grupos.</p>
			',
			'description_EN' => '
				<p>xxxEMPiezayyy is an application for xxxmanaging EducaMadrid services and toolsyyy.</p>
				<p>It serves as a "control center" that allows the creation of user groups and the management of different EducaMadrid tools for those groups.</p>
			',
			'use' => '
				<p>xxxEMPiezayyy reúne en un mismo espacio las siguientes herramientas:</p>
				<ul>
					<li>Gestión de grupos</li>
					<li>Aula Virtual</li>
					<li>Cloud</li>
					<li>Correo corporativo</li>
					<li>Comparti2</li>
					<li>Videoconferencia</li>
					<li><em lang="en">Streaming</em></li>
					<li>Calendarios</li>
				</ul>									
			',
			'use_EN' => '
				<p>xxxEMPiezayyy brings together the following tools in one place:</p>
				<ul>
					<li>Group management</li>
					<li>Virtual Classroom</li>
					<li>Cloud</li>
					<li>Corporate email</li>
					<li>Comparti2</li>
					<li>Videoconferencing</li>
					<li><em>Streaming</em></li>
					<li>Calendars</li>
				</ul>
			',
			'help' => '
				<p>Encontrarás toda la información sobre xxxEMPiezayyy en la aaaAyuda de EducaMadrid: https://ayuda.educa.madrid.org/books/empiezabbb.</p>			
			',
			'help_EN' => '
				<p>You can find all the information about xxxEMPiezayyy in the aaaEducaMadrid Help: https://ayuda.educa.madrid.org/books/empiezabbb.</p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '
				<p class="text-left">Para usar xxxEMPiezayyy tienes que entrar con tus credenciales de EducaMadrid.</p>
				<p><a href="https://empieza.educa.madrid.org/" class="btn btn-primary">Acceder</a></p>			
			',
			'form_extra_html_EN' => '
				<p class="text-left">To use xxxEMPiezayyy you need to log in with your EducaMadrid credentials.</p>
				<p><a href="https://empieza.educa.madrid.org/" class="btn btn-primary">Access</a></p>
			',
			// Search bar
			'shortTitle' => 'EMPieza',
			'shortTitle_EN' => 'EMPieza',
			'searchBarURL' => 'https://empieza.educa.madrid.org/',
			'seo' => 'google portada drive classroom inicio buscador gestión de clases grupos mediateca correo aulas virtuales comparti2 gestión de grupos directos calendario',
			'seo_EN' => 'home search class management groups email virtual classrooms calendars'
		),
		// Portal
		array(
			'category' => 'Servicios Educativos',
			'title' => 'Webs y usuarios',
			'title_EN' => 'Webs and Users',
			'id' => 'portal',
			'icon' => 'supervised_user_circle',
			'url' => 'https://www.educa2.madrid.org/web/educamadrid/',
			'desc' => 'Gestión de usuarios, webs de centros, espacios colaborativos...',
			'desc_EN' => 'Management of users, school websites, collaborative spaces...',
			'modalTitle' => 'Webs y usuarios',
			'modalTitle_EN' => 'Webs and Users',
			'description' => '
				<p>El xxxPortal Educativoyyy es un servicio para la gestión de:</p>
				<ul>
					<li>Usuarios.</li>
					<li>Páginas web.</li>
					<li>Espacios colaborativos.</li>
				</ul>
			',
			'description_EN' => '
				<p>The xxxEducational Portalyyy is a service for the management of:</p>
				<ul>
					<li>Users.</li>
					<li>Web pages.</li>
					<li>Collaborative spaces.</li>
				</ul>
			',
			'use' => '
				<p>Con el xxxPortal Educativoyyy puedes:</p>
				<ul>
					<li>xxxGestionar las cuentas de EducaMadridyyy de centros, docentes y alumnado: altas, modificaciones, olvido de contraseña, cambio de centro, etc.</li>
					<li>Crear la página xxxweb de los centrosyyy y la página xxxweb de cada docenteyyy.</li>
					<li>Crear espacios de colaboración como xxxwebs de departamentos, de clases o comunidades virtualesyyy.</li>
				</ul>										
			',
			'use_EN' => '
				<p>With the xxxEducational Portalyyy you can:</p>
				<ul>
					<li>xxxManage EducaMadrid accountsyyy for schools, teachers, and students: registration, modifications, password recovery, school changes, etc.</li>
					<li>Create the xxxweb page of the schoolyyy and the xxxweb page of each teacheryyy.</li>
					<li>Create collaborative spaces such as xxxdepartment websites, class pages, or virtual communitiesyyy.</li>
				</ul>
			',
			'help' => '
				<p>Encontrarás toda la información sobre el xxxPortal Educativoyyy en la aaaAyuda de EducaMadrid: https://ayuda.educa.madrid.org/bbb.</p>			
			',
			'help_EN' => '
				<p>You can find all the information about the xxxEducational Portalyyy in the aaaEducaMadrid Help: https://ayuda.educa.madrid.org/bbb.</p>
			',
			'form' => true,
			'form_action' => 'https://www.educa2.madrid.org/web/educamadrid/principal?p_p_id=58&amp;p_p_lifecycle=1&amp;p_p_state=normal&amp;p_p_mode=view&amp;p_p_col_id=column-1&amp;p_p_col_count=3&amp;saveLastPath=0&amp;_58_struts_action=%2Flogin%2Flogin&amp;_58_customLanding=personalPages',
			'form_user_name' => '_58_login',
			'form_pass_name' => '_58_password',
			'form_extra_html' => '',
			// Search bar
			'shortTitle' => 'Portal',
			'shortTitle_EN' => 'Portal',
			'seo' => 'liferay usuarios educativo cms colaborativo webs de centro comunidades recursos',
			'seo_EN' => 'users educational collaborative CMS school websites communities resources'
		),
		// Aulas Virtuales (to review)
		array(
			'category' => 'Servicios Educativos',
			'title' => 'Aulas Virtuales',
			'title_EN' => 'Virtual Classrooms',
			'shortTitle' => 'Aulas Virtuales',
			'shortTitle_EN' => 'Virtual Classrooms',
			'id' => 'moodle',
			'icon' => 'school',
			'url' => 'http://aulavirtual3.educa.madrid.org/',
			'desc' => 'Recursos, actividades, exámenes, cuaderno del profesor...',
			'desc_EN' => 'Resources, activities, exams, teacher\'s gradebook...',
			'modalTitle' => 'Aulas Virtuales',
			'modalTitle_EN' => 'Virtual Classrooms',
			'description' => '
				<p>Las Aulas Virtuales son xxxentornos de aprendizajeyyy que permiten a centros, docentes y alumnado recrear el espacio de la clase en un ámbito xxxseguro y privadoyyy.</p>
			',
			'description_EN' => '
				<p>The Virtual Classrooms are xxxlearning environmentsyyy that allow schools, teachers, and students to recreate the classroom space in a xxxsafe and privateyyy setting.</p>
			',
			'use' => '
				<p>Las xxxAulas Virtualesyyy:</p>
				<ul>
					<li>Permiten a los centros educativos tener sus xxxcursos ordenados por niveles educativos, asignaturasyyy...</li>
					<li>Permiten al profesorado crear cursos <em>online</em> con diferentes xxxrecursos, foros, mensajería instantáneayyy...</li>
					<li>Permiten xxxevaluar lecciones y actividades, y realizar exámenesyyy. Las calificaciones se guardan automáticamente en el cuaderno de notas del docente.</li>
					<li>Ofrecen xxxdistintas formas de matriculaciónyyy para los cursos: para una clase o grupo, protegido con contraseña, para usuarios de EducaMadrid o público.</li>
				</ul>									
			',
			'use_EN' => '
				<p>The xxxVirtual Classroomsyyy:</p>
				<ul>
					<li>Allow schools to organize their xxxcourses by educational levels, subjectsyyy...</li>
					<li>Allow teachers to create <em>online</em> courses with different xxxresources, forums, instant messagingyyy...</li>
					<li>Allow xxxevaluating lessons and activities, and taking examsyyy. Grades are automatically saved in the teacher\'s gradebook.</li>
					<li>Offer xxxdifferent enrollment methodsyyy for courses: for a class or group, password-protected, for EducaMadrid users or public.</li>
				</ul>
			',
			'help' => '
				<p>Encontrarás toda la información sobre las xxxAulas Virtualesyyy en la aaaAyuda de EducaMadrid: https://ayuda.educa.madrid.org/bbb.</p>
			',
			'help_EN' => '
				<p>You can find all the information about the xxxVirtual Classroomsyyy in the aaaEducaMadrid Help: https://ayuda.educa.madrid.org/bbb.</p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '
				<p class="text-left">El acceso al xxxAula Virtualyyy de cada Centro requiere una cuenta de xxxEducaMadridyyy, pero antes tienes que buscar la de tu Centro.</p>
				<p><a href="./aula-virtual" class="btn btn-primary">Buscador de Aulas Virtuales</a></p>
			',
			'form_extra_html_EN' => '
				<p class="text-left">Access to each Center\'s xxxVirtual Classroomyyy requires an xxxEducaMadridyyy account, but you must first find your Center\'s account.</p>
				<p><a href="./aula-virtual" class="btn btn-primary">Virtual Classroom Finder</a></p>
			',
			// Search bar
			'shortTitle' => 'Aula Virtual',
			'shortTitle_EN' => 'Virtual Classroom',
			'searchBarURL' => 'https://www.educa2.madrid.org/educamadrid/aula-virtual',
			'seo' => 'moodle clases lms calificaciones rúbricas evaluar notas exelearning',
			'seo_EN' => 'classes LMS grades rubrics assess marks e-learning'
		),
		// Mediateca
		array(
			'category' => 'Servicios Educativos',
			'title' => 'Mediateca',
			'title_EN' => 'Media Library',
			'id' => 'mediateca',
			'icon' => 'movie',
			'url' => 'https://mediateca.educa.madrid.org/',
			'desc' => 'Vídeos, audios, imágenes, diseños 3D, rutas...',
			'desc_EN' => 'Videos, audios, images, 3D designs, routes...',
			'modalTitle' => 'Mediateca',
			'modalTitle_EN' => 'Media Library',
			'description' => '
				<p>La xxxMediatecayyy proporciona a los centros y al profesorado un xxxespacio para almacenar sus contenidos multimediayyy: vídeos, imágenes, audios, actividades Scratch, diseños 3D, documentos, rutas...</p>
				<p>Los contenidos se pueden xxxcompartir con la comunidad educativayyy de forma fácil y segura.</p>
			',
			'description_EN' => '
				<p>The xxxMedia Libraryyyy provides schools and teachers a xxxspace to store their multimedia contentyyy: videos, images, audios, Scratch activities, 3D designs, documents, routes...</p>
				<p>Content can be xxxshared with the educational communityyyy easily and safely.</p>
			',
			'use' => '
				<p class="em-sr">Ventajas de la xxxMediateca de EducaMadridyyy:</p>
				<ul>
					<li>Centros y docentes tienen su propio canal para xxxpublicar contenidos multimediayyy: vídeos, imágenes, audios, actividades Scratch, diseños 3D, documentos, rutas, etc.</li>
					<li>xxxEl alumnado puede subir contenidos con autorización de los docentesyyy, que mantendrán el control sobre lo publicado.</li>
					<li>xxxElige con quién compartes los contenidosyyy: acceso público, privado, mediante URL, con contraseña, sólo para usuarios de EducaMadrid...</li>
					<li>xxxInserta los contenidos multimediayyy en tus páginas web u otros espacios.</li>
					<li>xxxElige la licenciayyy con la que se publican tus contenidos.</li>
					<li>xxxEncuentra y utiliza contenidosyyy subidos por otros usuarios.</li>
				</ul>										
			',
			'use_EN' => '
				<p class="em-sr">Advantages of the xxxEducaMadrid Media Libraryyyy:</p>
				<ul>
					<li>Schools and teachers have their own channel to xxxpublish multimedia contentyyy: videos, images, audios, Scratch activities, 3D designs, documents, routes, etc.</li>
					<li>xxxStudents can upload content with teachers\' authorizationyyy, who maintain control over what is published.</li>
					<li>xxxChoose with whom to share contentyyy: public, private, via URL, password-protected, only for EducaMadrid users...</li>
					<li>xxxEmbed multimedia contentyyy in your web pages or other spaces.</li>
					<li>xxxChoose the licenseyyy for publishing your content.</li>
					<li>xxxFind and use contentyyy uploaded by other users.</li>
				</ul>
			',
			'help' => '
				<p>Encontrarás toda la información sobre la xxxMediatecayyy en la aaaAyuda de EducaMadrid: https://ayuda.educa.madrid.org/books/mediatecabbb.</p>			
			',
			'help_EN' => '
				<p>You can find all the information about the xxxMedia Libraryyyy in the aaaEducaMadrid Help: https://ayuda.educa.madrid.org/books/mediatecabbb.</p>
			',
			'form' => true,
			'form_action' => 'https://mediateca.educa.madrid.org/',
			'form_user_name' => 'user',
			'form_pass_name' => 'pass',
			'form_extra_html' => '',
			// Search bar
			'seo' => 'youtube slideshare prezi exelearning videos audios incrustar mapas documentos imágenes',
			'seo_EN' => 'slides audios embed maps documents images'
		),
		// Cloud
		array(
			'category' => 'Servicios Educativos',
			'title' => 'Cloud',
			'title_EN' => 'Cloud',
			'id' => 'cloud',
			'icon' => 'cloud',
			'url' => 'https://cloud.educa.madrid.org/',
			'desc' => 'Almacenamiento de archivos, edición colaborativa...',
			'desc_EN' => 'File storage, collaborative editing...',
			'modalTitle' => 'Cloud EducaMadrid',
			'modalTitle_EN' => 'EducaMadrid Cloud',
			'description' => '
				<p>xxxCloud es un disco duro virtualyyy donde puedes guardar tus documentos, tenerlos siempre accesibles desde cualquier lugar, editarlos de manera colaborativa y compartirlos con quien tú quieras.</p>										
			',
			'description_EN' => '
				<p>xxxCloud is a virtual hard driveyyy where you can store your documents, always have them accessible from anywhere, edit them collaboratively, and share with whomever you want.</p>										
			',
			'use' => '
				<ul>
					<li>xxxGuarda tus documentosyyy y accede a ellos desde cualquier lugar.</li>
					<li>xxxMantén tus archivos sincronizados en diferentes dispositivosyyy con las aplicaciones para ordenadores y dispositivos móviles.</li>
					<li>xxxIntegra tu Cloud con las Aulas Virtualesyyy de EducaMadrid.</li>
					<li>xxxEdita de manera colaborativayyy textos, presentaciones y hojas de cálculo.</li>
					<li>xxxComparte carpetas y archivosyyy mediante un enlace, restringiendo el acceso con contraseña o a determinados usuarios.</li>
					<li>xxxCloud analiza automáticamente en busca de virus y <em>malware</em>yyy bloqueando todos los archivos maliciosos.</li>
				</ul>										
			',
			'use_EN' => '
				<ul>
					<li>xxxStore your documentsyyy and access them from anywhere.</li>
					<li>xxxKeep your files synchronized across devicesyyy with applications for computers and mobile devices.</li>
					<li>xxxIntegrate your Cloud with EducaMadrid Virtual Classroomsyyy.</li>
					<li>xxxEdit texts, presentations, and spreadsheets collaborativelyyyy.</li>
					<li>xxxShare folders and filesyyy via a link, restricting access with password or to specific users.</li>
					<li>xxxCloud automatically scans for viruses and <em>malware</em>yyy, blocking all malicious files.</li>
				</ul>
			',
			'help' => '
				<p>Encontrarás toda la información sobre xxxCloudyyy en la aaaAyuda de EducaMadrid: https://ayuda.educa.madrid.org/books/cloudbbb.</p>			
			',
			'help_EN' => '
				<p>You can find all the information about xxxCloudyyy in the aaaEducaMadrid Help: https://ayuda.educa.madrid.org/books/cloudbbb.</p>			
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '',
			// Search bar
			'seo' => 'google drive almacenamiento nube ficheros gestor documentos',
			'seo_EN' => 'storage cloud files document manager'
		),
		// Correo
		array(
			'category' => 'Servicios Educativos',
			'title' => 'Correo',
			'title_EN' => 'Email',
			'id' => 'correo',
			'icon' => 'mail',
			'url' => 'https://correoweb.educa.madrid.org/',
			'desc' => 'Correo electrónico para docentes y alumnado.',
			'desc_EN' => 'Email service for teachers and students.',
			'modalTitle' => 'Correo electrónico',
			'modalTitle_EN' => 'Email',
			'description' => '
				<p>El correo electrónico proporciona a nuestra comunidad educativa (profesorado, alumnado y centros educativos) un servicio de xxxcorreo electrónico profesional e institucionalyyy.</p>
			',
			'description_EN' => '
				<p>Email provides our educational community (teachers, students, and schools) with a xxxprofessional and institutional email serviceyyy.</p>
			',
			'use' => '
				<p>El correo electrónico:</p>
				<ul>
					<li>Permite al alumnado disponer de una dirección para uso educativo. Sólo podrán recibir correos de cuentas de EducaMadrid.</li>
					<li>Los docentes pueden xxxmodificar la restricción de las cuentas del alumnadoyyy con consentimiento de los tutores legales.</li>
					<li>Dispone de un sistema de xxxfiltrado <em>antispam</em> y <em>antimalware</em>yyy, evitando correo basura o peligroso.</li>
					<li>Dispone de xxxacceso vía web o mediante clientes de correo en diferentes dispositivosyyy (<em>tablet</em>, móvil...), y utiliza protocolos seguros.</li>
				</ul>									
			',
			'use_EN' => '
				<p>Email:</p>
				<ul>
					<li>Allows students to have an address for educational use. They can only receive emails from EducaMadrid accounts.</li>
					<li>Teachers can xxxmodify student account restrictionsyyy with legal guardian consent.</li>
					<li>Includes a xxxspam and <em>antimalware</em> filteryyy, preventing junk or harmful email.</li>
					<li>Provides xxxweb access or via email clients on different devicesyyy (<em>tablet</em>, mobile...), using secure protocols.</li>
				</ul>
			',
			'help' => '
				<p>Encontrarás toda la información sobre el xxxCorreo electrónicoyyy en la aaaAyuda de EducaMadrid: https://ayuda.educa.madrid.org/books/correobbb.</p>			
			',
			'help_EN' => '
				<p>You can find all the information about xxxEmailyyy in the aaaEducaMadrid Help: https://ayuda.educa.madrid.org/books/correobbb.</p>			
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '',
			// Search bar
			'seo' => 'webmail email electrónico',
			'seo_EN' => 'webmail email electronic'
		),
		// Formularios
		array(
			'category' => 'Servicios Educativos',
			'title' => 'Formularios',
			'title_EN' => 'Forms',
			'id' => 'surveys',
			'icon' => 'question_answer',
			'url' => 'https://formularios.educa.madrid.org/',
			'desc' => 'Creación de formularios para recogida de datos.',
			'desc_EN' => 'Create forms for data collection.',
			'modalTitle' => 'Formularios',
			'modalTitle_EN' => 'Forms',
			'description' => '
				<p>El servicio permite a centros y docentes crear xxxformularios para la recogida de datosyyy.</p>
			',
			'description_EN' => '
				<p>The service allows schools and teachers to create xxxforms for data collectionyyy.</p>
			',
			'use' => '
				<ul>
					<li>Se trata de un servicio xxxrestringido a centros y docentesyyy de EducaMadrid.</li>
					<li>Permite crear xxxformulariosyyy para la recogida de datos.</li>
					<li>Permite xxxrecopilar y analizar las respuestasyyy de los participantes.</li>
					<li>Permite xxxdesactivar un formularioyyy una vez finalizado.</li>
					<li>Permite xxxexportar las respuestasyyy a distintos formatos (csv, xls, xlsx, spss).</li>
				</ul>									
			',
			'use_EN' => '
				<ul>
					<li>This is a xxxservice restricted to EducaMadrid schools and teachersyyy.</li>
					<li>Allows creating xxxformsyyy for data collection.</li>
					<li>Allows xxxcollecting and analyzing participant responsesyyy.</li>
					<li>Allows xxxdeactivating a formyyy once finished.</li>
					<li>Allows xxxexporting responsesyyy to different formats (csv, xls, xlsx, spss).</li>
				</ul>
			',
			'help' => '
				<p>Encontrarás toda la información sobre la aplicación de xxxFormulariosyyy en la aaaAyuda de EducaMadrid: https://ayuda.educa.madrid.org/books/formularios---limesurveybbb.</p>			
			',
			'help_EN' => '
				<p>You can find all the information about the xxxFormsyyy application in the aaaEducaMadrid Help: https://ayuda.educa.madrid.org/books/formularios---limesurveybbb.</p>			
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '',
			// Search bar
			'seo' => 'google forms cuestionarios encuestas',
			'seo_EN' => 'forms questionnaires surveys'
		),
		// MAX
		array(
			'category' => 'Servicios Educativos',
			'title' => 'MAX',
			'title_EN' => 'MAX',
			'id' => 'max',
			'icon' => 'computer',
			'url' => 'https://www.educa2.madrid.org/web/max',
			'desc' => 'Sistema operativo centrado en la comunidad educativa.',
			'desc_EN' => 'Operating system focused on the educational community.',
			'modalTitle' => 'MAX (MAdrid_linuX)',
			'modalTitle_EN' => 'MAX (MAdrid_linuX)',
			'description' => '
				<p>MAX (xxxMAyyydrid-linuxxxXyyy), es un sistema operativo libre basado en GNU/Linux que está xxxcentrado en la comunidad educativayyy.</p>
				<p>Está instalado por defecto en los equipos de las dotaciones, y se puede instalar gratuitamente en cualquier equipo.</p>
			',
			'description_EN' => '
				<p>MAX (xxxMAyyydrid-linuxxxXyyy) is a free GNU/Linux-based operating system xxxfocused on the educational communityyyy.</p>
				<p>It comes preinstalled on supplied computers, and can be installed for free on any device.</p>
			',
			'use' => '
				<p>xxxMAXyyy es un sistema operativo que...</p>
				<ul>
					<li>Incluye (casi) todos los programas que puedas necesitar en tu día a día.</li>
					<li>Está diseñado por educadores, pensando en el alumnado y los docentes.</li>
					<li>Ofrece diferentes perfiles para profesorado y alumnado.</li>
					<li>Fomenta la autonomía tecnológica de los usuarios.</li>
					<li>xxxTiene una comunidad inmensayyy que te ayuda.</li>
				</ul>
			',
			'use_EN' => '
				<p>xxxMAXyyy is an operating system that...</p>
				<ul>
					<li>Includes (almost) all the programs you might need daily.</li>
					<li>Designed by educators, focusing on students and teachers.</li>
					<li>Offers different profiles for teachers and students.</li>
					<li>Promotes user technological autonomy.</li>
					<li>xxxHas a huge communityyyy ready to help you.</li>
				</ul>
			',
			'help' => '
				<p>MAX tiene un <abbr title="Centro de Atención a Usuarios">CAU</abbr> propio:</p>
				<p class="text-center"><a href="https://portalcau.educa.madrid.org/" target="_blank" rel="noopener" title="Abrir en ventana nueva">portalcau.educa.madrid.org<span class="em-sr"> (se abre en ventana nueva)</span></a> - 900 100 172</p>
				<p>El CAU de MAX da soporte a los centros educativos de la Comunidad de Madrid que utilizan MAX, y ayuda a los centros que quieren empezar a usarlo, ya sea en modo nativo o dual (junto con otro sistema operativo).</p>
				<p>También se ofrece soporte a cualquier usuario en aaalos foros de MAX: https://foros.educa.madrid.org/viewforum.php?f=20bbb.</p>
			',
			'help_EN' => '
				<p>MAX has its own <abbr title="Centro de Atención a Usuarios">CAU</abbr>:</p>
				<p class="text-center"><a href="https://portalcau.educa.madrid.org/" target="_blank" rel="noopener" title="Open in new window">portalcau.educa.madrid.org<span class="em-sr"> (opens in a new window)</span></a> - 900 100 172</p>
				<p>The MAX CAU supports schools in the Community of Madrid using MAX, and helps schools that want to start using it, either natively or in dual mode (with another operating system).</p>
				<p>Support is also offered to any user in the MAX forums: https://foros.educa.madrid.org/viewforum.php?f=20bbb.</p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '
				<p class="text-left">xxxDescarga el sistema operativo MAXyyy y accede a todos los recursos desde aaahttps://www.educa2.madrid.org/web/maxbbb</p>
				<p class="text-left">Es una página abierta a todo el mundo, sin contraseña.</p>
				<p><a href="https://www.educa2.madrid.org/web/max" class="btn btn-primary">Acceder</a></p>
			',
			'form_extra_html_EN' => '
				<p class="text-left">xxxDownload the MAX operating systemyyy and access all resources from aaahttps://www.educa2.madrid.org/web/maxbbb</p>
				<p class="text-left">It\'s an open page for everyone, no password needed.</p>
				<p><a href="https://www.educa2.madrid.org/web/max" class="btn btn-primary">Access</a></p>
			',
			// Search bar
			'seo' => 'linux ubuntu redhat windows mac sistema operativo so alternativa software libre',
			'seo_EN' => 'operating system alternative open source software'
		),
		// Espacios de Formación
		// *********************
		// Formación en línea
		array(
			'category' => 'Espacios de Formación',
			'title' => 'Formación en línea',
			'title_EN' => 'Online Training',
			'id' => 'online',
			'icon' => 'device_hub',
			'url' => 'https://formacion.educa.madrid.org/',
			'desc' => 'Formación en línea para el profesorado.',
			'desc_EN' => 'Online training for teachers.',
			'modalTitle' => 'Formación en línea',
			'modalTitle_EN' => 'Online Training',
			'description' => '
				<p>La formación en línea para el profesorado es un entorno virtual de aprendizaje que permite a los xxxCentros de Formación del Profesoradoyyy ofrecer xxxcursos en línea dirigidos a docentesyyy.</p>
			',
			'description_EN' => '
				<p>Online training for teachers is a virtual learning environment that allows xxxTeacher Training Centersyyy to offer xxxonline courses aimed at teachersyyy.</p>
			',
			'use' => '
				<p>Esta plataforma:</p>
				<ul>
					<li>Ofrece a los Centros de Formación del Profesorado un sistema de xxxgestión de formación en línea para los docentesyyy.</li>
					<li>Ofrece un xxxentorno virtual, seguro, privado y altamente personalizableyyy.</li>
				</ul>									
			',
			'use_EN' => '
				<p>This platform:</p>
				<ul>
					<li>Provides Teacher Training Centers with a system for xxxmanaging online training for teachersyyy.</li>
					<li>Offers a xxxsecure, private, and highly customizable virtual environmentyyy.</li>
				</ul>
			',
			'help' => '
				<p>Encontrarás toda la información sobre el servicio de xxxFormación en líneayyy en la aaaAyuda de EducaMadrid: https://ayuda.educa.madrid.org/bbb.</p>			
			',
			'help_EN' => '
				<p>You will find all information about the xxxOnline Trainingyyy service in the aaaEducaMadrid Help: https://ayuda.educa.madrid.org/bbb.</p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '',
			// Search bar
			'searchEnabled' => false,
			'shortTitle' => 'Formación',
			'shortTitle_EN' => 'Training',
			'seo' => 'google mediateca youtube profesorado continua docentes acacias ctif cfie dat dga créditos cursos',
			'seo_EN' => 'teachers continuous training credits courses'
		),
		// MOOC educativos
		array(
			'category' => 'Espacios de Formación',
			'title' => 'InnovaMOOC',
			'title_EN' => 'InnovaMOOC',
			'id' => 'e-mooc',
			'icon' => 'assignment_turned_in',
			'url' => 'http://innovamooc.educa.madrid.org/',
			'desc' => 'Cursos de formación en formato MOOC para la comunidad educativa.',
			'desc_EN' => 'MOOC-format training courses for the educational community.',
			'modalTitle' => 'InnovaMOOC',
			'modalTitle_EN' => 'InnovaMOOC',
			'description' => '
				<p>Los cursos MOOC corresponden a siglas cuya traducción al castellano sería xxxcurso en línea masivo y abiertoyyy (aaaver en Mediateca: https://mediateca.educa.madrid.org/video/s9oo416rzc6gsgqobbb). Esto es, un curso que cualquiera con un ordenador, conexión a Internet y ganas por aprender, puede realizar.</p>
				<p>Desde esta web, la Comunidad de Madrid ofrece xxxcursos gratuitos completamente abiertosyyy y destinados a toda la comunidad educativa y al xxxpúblico en generalyyy, además de los ofertados a los xxxauxiliares de conversaciónyyy.</p>
			',
			'description_EN' => '
				<p>MOOC courses correspond to acronyms meaning xxxMassive Open Online Courseyyy (see Mediateca: https://mediateca.educa.madrid.org/video/s9oo416rzc6gsgqobbb). Anyone with a computer, internet connection, and desire to learn can take these courses.</p>
				<p>Through this website, the Community of Madrid offers xxxfree, fully open coursesyyy for the entire educational community and the xxxgeneral publicyyy, including those offered to xxxlanguage assistantsyyy.</p>
			',
			'use' => '
				<p>Formación abierta al público en temas de amplio interés educativo.</p>
			',
			'use_EN' => '
				<p>Open training for the public on topics of broad educational interest.</p>
			',
			'help' => '
				<p>La ayuda se ofrece a través de estas xxxpreguntas frecuentesyyy (aaaver PDF: https://www.educa2.madrid.org/documents/397121/28667513/FAQ+InnovaMOOC/9263fa38-2708-974f-b473-86c602b8c48cbbb). Si no encuentra la respuesta, o en caso de incidencia, póngase en contacto con nosotros a través de e-mail, según sea el caso:</p>
				<ul>
					<li>Cursos para xxxAuxiliares de Conversaciónyyy: <span class="c-info">innovamooc [...] educa punto madrid punto org</span></li>
					<li>Cursos abiertos para la xxxcomunidad educativayyy (convivencia, seguridad e identidad digital, lectura...): <span class="c-info">incidenciasmooc [...] educa punto madrid punto org</span></li>
				</ul>
			',
			'help_EN' => '
				<p>Help is provided through these xxxfrequently asked questionsyyy (see PDF: https://www.educa2.madrid.org/documents/397121/28667513/FAQ+InnovaMOOC/9263fa38-2708-974f-b473-86c602b8c48cbbb). If you do not find the answer or have an issue, contact us via e-mail as appropriate:</p>
				<ul>
					<li>Courses for xxxLanguage Assistantsyyy: <span class="c-info">innovamooc [...] educa.madrid.org</span></li>
					<li>Open courses for the xxxeducational communityyyy (coexistence, safety, digital identity, reading...): <span class="c-info">incidenciasmooc [...] educa.madrid.org</span></li>
				</ul>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '',
			// Search bar
			'searchEnabled' => false,
			'seo' => 'cursos abiertos open formación acacias ctif cfie moodle aula virtual',
			'seo_EN' => 'open courses training acacias ctif cfie moodle virtual classroom'
		),
		// FP a Distancia
		array(
			'category' => 'Espacios de Formación',
			'title' => 'FP a Distancia',
			'title_EN' => 'Distance Vocational Training',
			'id' => 'fpd',
			'icon' => 'card_membership',
			'url' => 'https://fpdistancia.educa.madrid.org/',
			'desc' => 'Aula virtual específica para FP a Distancia.',
			'desc_EN' => 'Virtual classroom specific for Distance Vocational Training.',
			'modalTitle' => 'FP a Distancia',
			'modalTitle_EN' => 'Distance Vocational Training',
			'description' => '
				<p>La FP a Distancia es una modalidad de xxxFormación Profesionalyyy que permite compaginar diversas situaciones profesionales y personales con estudios oficiales de formación profesional. Este aula virtual es la xxxplataforma de aprendizaje onlineyyy para los alumnos matriculados oficialmente en esta modalidad y también se encuentra información de los ciclos formativos de grado medio y grado superior ofrecidos actualmente en esta modalidad.</p>
			',
			'description_EN' => '
				<p>Distance Vocational Training is a xxxVocational Educationyyy modality that allows balancing professional and personal situations with official vocational studies. This virtual classroom is the xxxonline learning platformyyy for officially enrolled students and also provides information on currently offered intermediate and advanced vocational programs.</p>
			',
			'use' => '
				<p>Desarrollo de la actividad lectiva de la oferta pública de xxxFP en modalidad a Distanciayyy de la Comunidad de Madrid.</p>
			',
			'use_EN' => '
				<p>Conducting the teaching activities of the public xxxDistance Vocational Trainingyyy offer in the Community of Madrid.</p>
			',
			'help' => '
				<p>La xxxayuda al alumnadoyyy de FP a Distancia se ofrece a través de los profesores y de la figura del coordinador de FP a Distancia que existe en cada centro donde se imparte esta modalidad.</p>
				<p>La xxxayuda al profesoradoyyy se centraliza a través del coordinador de FP a Distancia y con el apoyo de la unidad competente en esta materia.</p>
			',
			'help_EN' => '
				<p>xxxStudent supportyyy for Distance Vocational Training is provided through teachers and the Distance FP coordinator in each center where the modality is offered.</p>
				<p>xxxTeacher supportyyy is centralized through the Distance FP coordinator with assistance from the responsible unit.</p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '
				<p class="text-left">Sitio web de la plataforma de aprendizaje a distancia: aaahttp://fpdistancia.educa.madrid.orgbbb</p>
			',
			'form_extra_html_EN' => '
				<p class="text-left">Website of the distance learning platform: aaahttp://fpdistancia.educa.madrid.orgbbb</p>
			',
			// Search bar
			'searchEnabled' => false,
			'seo' => 'formación profesional ciclos formativos',
			'seo_EN' => 'vocational training study programs'
		),
		// Bachillerato a Distancia
		array(
			'category' => 'Espacios de Formación',
			'title' => 'Bachillerato a Distancia',
			'title_EN' => 'Distance High School',
			'id' => 'bachillerato-distancia',
			'icon' => 'next_week',
			'url' => 'https://bachilleratodistancia.educa.madrid.org/',
			'desc' => 'Bachillerato a Distancia para personas adultas.',
			'desc_EN' => 'Distance High School for adult learners.',
			'modalTitle' => 'Bachillerato a Distancia',
			'modalTitle_EN' => 'Distance High School',
			'description' => '
				<p>La educación de personas adultas tiene la finalidad de ofrecer a todos los mayores de dieciocho años la posibilidad de adquirir, actualizar, completar o ampliar sus conocimientos y aptitudes para su desarrollo personal y profesional.</p>
				<p>La educación a distancia se desarrollará a través de la xxxplataforma virtual de aprendizajeyyy y el apoyo tutorial.</p>
			',
			'description_EN' => '
				<p>Adult education aims to provide all individuals over eighteen the opportunity to acquire, update, complete, or expand their knowledge and skills for personal and professional development.</p>
				<p>Distance education is delivered through the xxxvirtual learning platformyyy and tutorial support.</p>
			',
			'use' => '
				<p>La oferta específica del Bachillerato para personas adultas tendrá como finalidad proporcionar a las personas mayores de edad la formación académica que les permita mejorar su xxxpreparación para el ejercicio profesional y acceso a enseñanzas superioresyyy.</p>
			',
			'use_EN' => '
				<p>The specific offer of High School for adult learners aims to provide adults with the academic training to improve their xxxpreparation for professional practice and access to higher educationyyy.</p>
			',
			'help' => '
				<p>Se ofrece más información sobre esta modalidad en los Institutos de Educación Secundaria en los que se imparte, así como en la página de aaaoferta formativa de Educación de Personas Adultas en IES: https://www.comunidad.madrid/servicios/educacion/oferta-formativa-educacion-personas-adultas-iesbbb de la Comunidad de Madrid.</p>
			',
			'help_EN' => '
				<p>More information about this modality is available at the Secondary Education Institutes where it is offered, as well as on the aaaAdult Education Offer in IES webpage: https://www.comunidad.madrid/servicios/educacion/oferta-formativa-educacion-personas-adultas-iesbbb of the Community of Madrid.</p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '
				<p class="text-left">Para acceder a los cursos del aaaAula Virtual de Bachillerato para personas adultas: https://bachilleratodistancia.educa.madrid.org/bbb es necesario tener una cuenta de EducaMadrid (usuario y contraseña). Quienes no la tengan deberán solicitarla al formalizar matrícula.</p>
				<p><a href="https://bachilleratodistancia.educa.madrid.org/" class="btn btn-primary">Acceder</a></p>
			',
			'form_extra_html_EN' => '
				<p class="text-left">To access the courses in the aaaVirtual High School Classroom for adults: https://bachilleratodistancia.educa.madrid.org/bbb, an EducaMadrid account (username and password) is required. Those without an account must request it when enrolling.</p>
				<p><a href="https://bachilleratodistancia.educa.madrid.org/" class="btn btn-primary">Access</a></p>
			',
			// Search bar
			'searchEnabled' => false,
			'shortTitle' => 'Bachillerato a Distancia',
			'shortTitle_EN' => 'Distance High School',
			'seo' => 'bachillerato adultos eso mayores escuela de adultos educación para personas mayores acceso a la universidad',
			'seo_EN' => 'high school adults secondary adult education access to university'
		),
		// Canal EducaMadrid
		array(
			'category' => 'Espacios de Formación',
			'title' => 'Canal EducaMadrid',
			'id' => 'canalem',
			'icon' => 'cast_for_education',
			'url' => 'https://mediateca.educa.madrid.org/usuario/educamadrid',
			'desc' => 'Canal oficial de EducaMadrid en la Mediateca.',
			'desc_EN' => 'Official EducaMadrid channel in the Mediateca.',
			'modalTitle' => 'Canal EducaMadrid',
			'modalTitle_EN' => 'EducaMadrid Channel',
			'description' => '
				<p>En el xxxCanal EducaMadridyyy de la Mediateca encontrarás tutoriales, grabaciones de eventos y muchos otros contenidos de interés para docentes, familias y alumnado.</p>
			',
			'description_EN' => '
				<p>On the xxxEducaMadrid Channelyyy in the Mediateca, you will find tutorials, event recordings, and many other contents of interest for teachers, families, and students.</p>
			',
			'use' => '
				<ul>
					<li>xxxCanal EducaMadridyyy es en punto de publicación oficial de vídeos y otros contenidos difundidos desde la xxxPlataforma Educativa EducaMadridyyy.</li>
					<li>En él encontramos xxxvídeos y otros contenidosyyy de interés para toda la comunidad educativa.</li>
					<li>xxxSuscríbeteyyy al Canal EducaMadrid desde el apartado "Mi cuenta" de la Mediateca para estar al corriente de las novedades.</li>
				</ul>
			',
			'use_EN' => '
				<ul>
					<li>xxxEducaMadrid Channelyyy is the official publication point for videos and other contents distributed from the xxxEducaMadrid Educational Platformyyy.</li>
					<li>It contains xxxvideos and other contentyyy of interest for the entire educational community.</li>
					<li>xxxSubscribeyyy to the EducaMadrid Channel from the "My Account" section of the Mediateca to stay updated.</li>
				</ul>
			',
			'help' => '
				<p>Encontrarás toda la información sobre la xxxMediatecayyy, donde se encuentra el xxxCanal EducaMadridyyy, en la aaaAyuda de EducaMadrid: https://ayuda.educa.madrid.org/books/mediatecabbb.</p>
			',
			'help_EN' => '
				<p>You will find all the information about the xxxMediatecayyy, where the xxxEducaMadrid Channelyyy is located, in the EducaMadrid Help: https://ayuda.educa.madrid.org/books/mediatecabbb.</p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '
				<p class="text-left">Accede al xxxCanal EducaMadridyyy desde aaahttps://mediateca.educa.madrid.org/usuario/educamadridbbb. Si entras con tu cuenta de EducaMadrid podrás suscribirte.</p>
				<p><a href="https://mediateca.educa.madrid.org/usuario/educamadrid" class="btn btn-primary">Acceder</a></p>
			',
			'form_extra_html_EN' => '
				<p class="text-left">Access the xxxEducaMadrid Channelyyy at aaahttps://mediateca.educa.madrid.org/usuario/educamadridbbb. Log in with your EducaMadrid account to subscribe.</p>
				<p><a href="https://mediateca.educa.madrid.org/usuario/educamadrid" class="btn btn-primary">Access</a></p>
			',
			'searchEnabled' => true,
			'seo' => 'canal oficial de educamadrid youtube vídeos de educamadrid grabaciones de eventos streaming novedades retransmisiones',
			'seo_EN' => 'official educamadrid channel youtube educamadrid videos event recordings streaming news broadcasts'
		),
		// Robótica
		array(
			'category' => 'Espacios de Formación',
			'title' => 'Robótica',
			'id' => 'tecnorobot',
			'icon' => 'adb',
			'url' => 'https://tecnorobot.educa2.madrid.org/',
			'desc' => 'Tecnología, programación, robótica, impresión 3D, drones...',
			'desc_EN' => 'Technology, programming, robotics, 3D printing, drones...',
			'modalTitle' => 'Tecnología, Programación y Robótica',
			'modalTitle_EN' => 'Technology, Programming and Robotics',
			'description' => '
				<p>xxxTecnorobotyyy es un espacio para divulgar y compartir información sobre temas como xxxprogramaciónyyy, xxxrobóticayyy, xxximpresión 3Dyyy, xxxdronesyyy o cualquier materia relacionada con la tecnología.</p>
			',
			'description_EN' => '
				<p>xxxTecnorobotyyy is a space to share and disseminate information about topics such as xxxprogrammingyyy, xxxroboticsyyy, xxx3D printingyyy, xxxdronesyyy, or any other technology-related subject.</p>
			',
			'use' => '
				<p>xxxTecnorobotyyy ofrece:</p>
				<ul>
					<li><strong>Noticias</strong> sobre eventos y concursos.</li>
					<li><strong>Documentación y soporte</strong> sobre las impresoras 3D de los centros.</li>
					<li><strong>Concursos</strong> de impresión 3D.</li>
					<li>xxxCursosyyy de construcción de drones y programación.</li>
				</ul>
			',
			'use_EN' => '
				<p>xxxTecnorobotyyy offers:</p>
				<ul>
					<li><strong>News</strong> about events and contests.</li>
					<li><strong>Documentation and support</strong> about the 3D printers in the centers.</li>
					<li><strong>3D printing contests</strong>.</li>
					<li>xxxCoursesyyy on drone building and programming.</li>
				</ul>
			',
			'help' => '
				<p>Se ofrece ayuda a través de un foro donde la comunidad educativa puede exponer sus dudas e inquietudes: aaahttps://tecnorobot.educa2.madrid.org/forosbbb</p>			
			',
			'help_EN' => '
				<p>Help is provided through a forum where the educational community can post their questions and concerns: aaahttps://tecnorobot.educa2.madrid.org/forosbbb</p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => 'open',
			'form_extra_html_EN' => 'open',
			'searchEnabled' => false,
			'seo' => 'stem ciencias tecnología programación electrónica 3d',
			'seo_EN' => 'stem science technology programming electronics 3d'
		),
		// STEMadrid
		array(
			'category' => 'Espacios de Formación',
			'title' => 'STEMadrid',
			'id' => 'stemadrid',
			'icon' => 'developer_board',
			'url' => 'https://dgbilinguismoycalidad.educa.madrid.org/competicion_stem/',
			'desc' => 'Ciencias, tecnología, ingeniería y matemáticas.',
			'desc_EN' => 'Science, technology, engineering and mathematics.',
			'modalTitle' => 'Educación STEM',
			'modalTitle_EN' => 'STEM Education',
			'description' => '
				<p>xxxSTEMyyyadrid es el Plan diseñado por la Comunidad de Madrid para fomentar el estudio de las disciplinas xxx<abbr title="Siglas en inglés de: Science, Technology, Engineering and Mathematics">STEM</abbr>yyy entre el alumnado madrileño.</p>
			',
			'description_EN' => '
				<p>xxxSTEMyyyadrid is the Plan designed by the Community of Madrid to promote the study of xxx<abbr title="Acronyms in English: Science, Technology, Engineering and Mathematics">STEM</abbr>yyy disciplines among Madrid students.</p>
			',
			'use' => '
				<ul>
					<li>Impulsa vocaciones científicas y tecnológicas.</li>
					<li>Potencia la curiosidad acercando la tecnología al alumnado.</li>
					<li>Se integra en las redes sociales y medios de comunicación porque son factores clave en una sociedad xxxSTEMyyy.</li>
				</ul>
			',
			'use_EN' => '
				<ul>
					<li>Promotes scientific and technological vocations.</li>
					<li>Encourages curiosity by bringing technology closer to students.</li>
					<li>Integrates into social media and communication channels as they are key factors in a xxxSTEMyyy society.</li>
				</ul>
			',
			'help' => '
				<p>Si necesitas ayuda, escribe a <span class="c-info">educacionstem [...] educa punto madrid punto org</span></p>	
			',
			'help_EN' => '
				<p>If you need help, write to <span class="c-info">educacionstem [...] educa punto madrid punto org</span></p>	
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => 'open',
			'form_extra_html_EN' => 'open',
			'searchEnabled' => false,
			'seo' => 'ciencias tecnología ingeniería matemáticas igualdad',
			'seo_EN' => 'science technology engineering mathematics equality'
		),
		// Red de Formación
		array(
			'category' => 'Espacios de Formación',
			'title' => 'Formación',
			'id' => 'red-formacion',
			'icon' => 'how_to_reg',
			'url' => 'https://innovacionyformacion.educa.madrid.org/',
			'desc' => 'Innovación y Formación del Profesorado.',
			'desc_EN' => 'Innovation and Teacher Training.',
			'modalTitle' => 'Innovación y Formación',
			'modalTitle_EN' => 'Innovation and Training',
			'description' => '
				<p>Web de la Dirección General de Bilingüismo y Calidad de la Enseñanza que recoge toda la información relacionada con la xxxFormación del Profesorado de la Comunidad de Madridyyy.</p>
			',
			'description_EN' => '
				<p>Website of the General Directorate of Bilingualism and Teaching Quality that gathers all information related to xxxTeacher Trainingyyy in the Community of Madrid.</p>
			',
			'use' => '
				<p>Recoge actividades formativas, proyectos y recursos educativos ofrecidos por la xxxDirección General de Bilingüismo y Calidad de la Enseñanzayyy.</p>
			',
			'use_EN' => '
				<p>It gathers training activities, projects, and educational resources offered by the xxxGeneral Directorate of Bilingualism and Teaching Qualityyyy.</p>
			',
			'help' => '
				<p>Más información y ayuda sobre la xxxInnovación y Formación del Profesoradoyyy: <span class="c-info">formacionprofesorado [...] madrid punto org</span></p>			
			',
			'help_EN' => '
				<p>More information and help about xxxTeacher Innovation and Trainingyyy: <span class="c-info">formacionprofesorado [...] madrid punto org</span></p>			
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => 'open',
			'form_extra_html_EN' => 'open',
			'searchEnabled' => false,
			'seo' => 'innovación educación permanente docentes profesorado cursos créditos recursos materiales',
			'seo_EN' => 'innovation lifelong education teachers training courses credits resources materials'
		),	
		// Comunidades Virtuales
		// *********************
		// Revista Digital
		array(
			'category' => 'Comunidades Virtuales',
			'title' => 'Revista Digital',
			'title_EN' => 'Digital Magazine',
			'id' => 'revista',
			'icon' => 'local_library',
			'url' => 'https://www.educa2.madrid.org/web/revista-digital/',
			'desc' => 'Actualidad educativa, convocatorias...',
			'desc_EN' => 'Educational news, calls, and announcements...',
			'modalTitle' => 'Revista Digital',
			'modalTitle_EN' => 'Digital Magazine',
			'description' => '
				<p>La xxxRevista Digitalyyy es un recurso de la Dirección General de Bilingüismo y Calidad de la Enseñanza cuya finalidad es servir de xxxpunto de encuentro a la comunidad educativa madrileñayyy.</p>
			',
			'description_EN' => '
				<p>The xxxDigital Magazineyyy is a resource from the Directorate General of Bilingualism and Quality of Education, designed to serve as a xxxmeeting point for the educational community of Madridyyy.</p>
			',
			'use' => '
				<p>Incluye xxxinformación del mundo de la educaciónyyy, tanto de la Comunidad de Madrid, como de España y del resto del mundo.</p>
				<p>Facilita xxxrecursos de interésyyy para profesorado, alumnado y familias.</p>
				<p>Ofrece al profesorado madrileño la oportunidad de participar mediante el xxxenvío de colaboracionesyyy.</p>
			',
			'use_EN' => '
				<p>Includes xxxinformation about the education sectoryyy from the Community of Madrid, Spain, and worldwide.</p>
				<p>Provides xxxresources of interestyyy for teachers, students, and families.</p>
				<p>Offers Madrid teachers the opportunity to contribute via xxxsubmissionsyyy.</p>
			',
			'help' => '
				<p>Haz llegar tus comentarios o sugerencias, así como la información que desees difundir, a través de la siguiente dirección de correo electrónico: <span class="c-info">revista-digital [...] educa punto madrid punto org</span></p>			
			',
			'help_EN' => '
				<p>Send your comments or suggestions, as well as any information you wish to share, to the following email address: <span class="c-info">revista-digital [...] educa.madrid.org</span></p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => 'open',
			'form_extra_html_EN' => 'open',
			// Search bar
			'searchEnabled' => false,
			'seo' => 'actualidad noticias educación comunidad de madrid',
			'seo_EN' => 'news updates education community of Madrid'
		),
		// Recursos TIC
		array(
			'category' => 'Comunidades Virtuales',
			'title' => 'Recursos TIC',
			'title_EN' => 'ICT Resources',
			'id' => 'tic',
			'icon' => 'build',
			'url' => 'https://recursostic.educa2.madrid.org/',
			'desc' => 'Información, herramientas y utilidades.',
			'desc_EN' => 'Information, tools, and utilities.',
			'modalTitle' => 'Recursos TIC',
			'modalTitle_EN' => 'ICT Resources',
			'description' => '
				<p>Información y recursos de interés para los xxxCoordinadores TICyyy.</p>
				<p>Documentación y experiencias educativas.</p>
			',
			'description_EN' => '
				<p>Information and resources of interest for xxxICT Coordinatorsyyy.</p>
				<p>Documentation and educational experiences.</p>
			',
			'use' => '
				<p>En xxxRecursos TICyyy puedes consultar información básica relacionada con las xxxherramientas y servicios de EducaMadridyyy: gestión de usuarios, administración y gestión de la web del Centro...</p>
				<p>También ofrece una recopilación de xxxcontenidos digitales organizados por nivel educativoyyy, cursos de programación web, documentos con informes y normativa relacionada con las TIC, un blog con respuestas sobre las Aulas Virtuales y mucho más.</p>									
			',
			'use_EN' => '
				<p>In xxxICT Resourcesyyy you can find basic information related to xxxEducaMadrid tools and servicesyyy: user management, administration, and school website management...</p>
				<p>It also provides a collection of xxxdigital content organized by educational levelyyy, web programming courses, documents with reports and ICT regulations, a blog with Virtual Classroom answers, and more.</p>
			',
			'help' => '
				<p>Si tienes dudas relacionadas con xxxRecursos TICyyy contacta con el <abbr title="Centro de Atención a Usuarios">CAU</abbr> de EducaMadrid a través del correo: <span class="c-info">cau [...] educa punto madrid punto org</span></p>			
			',
			'help_EN' => '
				<p>If you have questions regarding xxxICT Resourcesyyy, contact the <abbr title="User Support Center">CAU</abbr> of EducaMadrid via email: <span class="c-info">cau [...] educa.madrid.org</span></p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => 'open',
			'form_extra_html_EN' => 'open',
			// Search bar
			'seo' => 'materiales descarga libre abiertos creative commons programas software contenidos',
			'seo_EN' => 'materials free open download creative commons programs software content'
		),
		// Comunidad Bilingüe
		array(
			'category' => 'Comunidades Virtuales',
			'title' => 'Comunidad Bilingüe',
			'title_EN' => 'Bilingual Community',
			'id' => 'idiomas',
			'icon' => 'language',
			'url' => 'https://www.educa2.madrid.org/web/bilinguismoycalidad/comunidadbilingue',
			'desc' => 'Información del Programa Bilingüe.',
			'desc_EN' => 'Information about the Bilingual Program.',
			'modalTitle' => 'Comunidad Bilingüe',
			'modalTitle_EN' => 'Bilingual Community',
			'description' => '
				<p>Espacio web gestionado por la Subdirección General de Bilingüismo y Calidad cuya finalidad es servir de punto de encuentro a la xxxcomunidad bilingüeyyy.</p>
			',
			'description_EN' => '
				<p>Web space managed by the Deputy Directorate of Bilingualism and Quality, aimed at serving as a meeting point for the xxxbilingual communityyyy.</p>
			',
			'use' => '
				<p>Esta Comunidad recoge xxxinformación importanteyyy para auxiliares de conversación, colegios e institutos acogidos al xxxprograma de bilingüismo de la Comunidad de Madridyyy.</p>
				<p>También ofrece xxxcursos abiertosyyy (MOOC) y xxxenlaces de interésyyy a recursos y espacios web creados por los propios centros educativos.</p>
			',
			'use_EN' => '
				<p>This Community provides xxximportant informationyyy for language assistants, schools, and institutes participating in the xxxbilingual program of the Community of Madridyyy.</p>
				<p>It also offers xxxopen coursesyyy (MOOCs) and xxxuseful linksyyy to resources and web spaces created by the educational centers themselves.</p>
			',
			'help' => '
				<p>Subdirección General de Programas de Innovación:</p>
				<p>91 720 12 03 - 91 720 11 20 - 91 720 13 81</p>
				<p><span class="c-info">auxiliares.conversacion [...] educa punto madrid punto org</span></p>			
			',
			'help_EN' => '
				<p>Deputy Directorate of Innovation Programs:</p>
				<p>91 720 12 03 - 91 720 11 20 - 91 720 13 81</p>
				<p><span class="c-info">auxiliares.conversacion [...] educa.madrid.org</span></p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => 'open',
			'form_extra_html_EN' => 'open',
			// Search bar
			'searchEnabled' => false,
			'shortTitle' => 'Bilingüe',
			'shortTitle_EN' => 'Bilingual',
			'seo' => 'dual inglés francés idiomas alemán centros bilingües colegios',
			'seo_EN' => 'dual English French languages German bilingual schools colleges'
		),
		// AbiesWeb
		array(
			'category' => 'Comunidades Virtuales',
			'title' => 'AbiesWeb',
			'title_EN' => 'AbiesWeb',
			'id' => 'abies_web',
			'icon' => 'library_books',
			'url' => 'https://www.educa2.madrid.org/web/abiesweb',
			'desc' => 'Gestión de bibliotecas escolares.',
			'desc_EN' => 'Management of school libraries.',
			'modalTitle' => 'AbiesWeb',
			'modalTitle_EN' => 'AbiesWeb',
			'description' => '
				<p>xxxAbiesWebyyy es la aplicación para la xxxgestión del catálogo de las bibliotecas escolaresyyy.</p>
				<p>Permite consultar y gestionar las xxxreferencias bibliográficasyyy de todos los documentos: libros, material gráfico, partituras o audiovisuales.</p>
			',
			'description_EN' => '
				<p>xxxAbiesWebyyy is the application for xxxmanaging the catalog of school librariesyyy.</p>
				<p>It allows consulting and managing xxxbibliographic referencesyyy of all documents: books, graphic materials, sheet music, or audiovisuals.</p>
			',
			'use' => '
				<ul>
					<li>xxxAbiesWebyyy es una herramienta para toda la comunidad educativa: docentes, alumnado y familias.</li>
					<li>Permite xxxguardar las fichasyyy bibliográficas de todos los documentes del Centro.</li>
					<li>Permite xxxgestionar usuarios y fondosyyy (préstamos, reservas, retrasos...).</li>
					<li>Dispone de xxxdiferentes perfilesyyy: Administrador, Encargado, Lector.</li>
					<li>Permite xxxconsultar el catálogo en líneayyy de cualquier Centro de la Comunidad de Madrid.</li>
					<li>Permite xxxhacer reservasyyy y ver el estado de cualquier ejemplar.</li>
				</ul>
			',
			'use_EN' => '
				<ul>
					<li>xxxAbiesWebyyy is a tool for the entire educational community: teachers, students, and families.</li>
					<li>Allows xxxsaving recordsyyy of all documents in the Center.</li>
					<li>Allows xxxmanaging users and collectionsyyy (loans, reservations, delays...).</li>
					<li>Provides xxxdifferent profilesyyy: Administrator, Manager, Reader.</li>
					<li>Allows xxxconsulting the catalog onlineyyy for any Center in the Community of Madrid.</li>
					<li>Allows xxxmaking reservationsyyy and checking the status of any item.</li>
				</ul>
			',
			'help' => '
				<p>Puedes consultar información de apoyo a los gestores de xxxAbiesWebyyy en aaahttps://www.educa2.madrid.org/web/abiesweb/bbb</p>
			',
			'help_EN' => '
				<p>You can consult support information for xxxAbiesWebyyy managers at aaahttps://www.educa2.madrid.org/web/abiesweb/bbb</p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '
				<p class="text-left">Puedes acceder desde aaahttps://www.educa2.madrid.org/web/abiesweb/bbb, con las credenciales de AbiesWeb.</p>
				<p><a href="https://abiesweb.educa.madrid.org/" class="btn btn-primary">Acceder</a></p>
			',
			'form_extra_html_EN' => '
				<p class="text-left">You can access from aaahttps://www.educa2.madrid.org/web/abiesweb/bbb with your AbiesWeb credentials.</p>
				<p><a href="https://abiesweb.educa.madrid.org/" class="btn btn-primary">Access</a></p>
			',
			// Search bar
			'searchEnabled' => false,
			'seo' => 'biblioteca librería epub libros préstamos catálogo',
			'seo_EN' => 'library books epub loans catalog'
		),
		// EducaSAAC
		array(
			'category' => 'Comunidades Virtuales',
			'title' => 'EducaSAAC',
			'title_EN' => 'EducaSAAC',
			'id' => 'educasaac',
			'icon' => 'accessibility',
			'url' => 'https://www.educa2.madrid.org/web/educasaac1/',
			'desc' => '<abbr title="Sistemas Alternativos y Aumentativos de la Comunicación">SAAC</abbr> unificados para toda la Comunidad Educativa.',
			'desc_EN' => 'Unified <abbr title="Alternative and Augmentative Communication Systems">SAAC</abbr> for the entire Educational Community.',
			'modalTitle' => 'EducaSAAC',
			'modalTitle_EN' => 'EducaSAAC',
			'description' => '
				<p>EducaSAAC es un proyecto que pretende unificar los xxxSistemas Alternativos y Aumentativos de la Comunicaciónyyy (SAAC) en los Centros de Educación Especial.</p>
				<p>Ofrece un gran xxxconjunto de fichas multisensorialesyyy a partir de un vocabulario de uso general en Educación Especial.</p>
			',
			'description_EN' => '
				<p>EducaSAAC is a project that aims to unify xxxAlternative and Augmentative Communication Systemsyyy (SAAC) in Special Education Centers.</p>
				<p>It provides a large xxxset of multisensory cardsyyy based on a general vocabulary used in Special Education.</p>
			',
			'use' => '
				<ul>
					<li>Los materiales de xxxEducaSAACyyy resultan especialmente útiles para personas con Discapacidad Intelectual, Trastorno del Espectro Autista (TEA), Discapacidades Sensoriales o dificultades de comprensión, ya sea por motivos neurológicos o simplemente por desconocimiento del idioma.</li>
					<li>Permite ver y descargar diferentes contenidos de sus xxxfichas multisensorialesyyy: pictogramas, imágenes, signos en <abbr title="Lengua de signos española">LSE</abbr>...</li>
					<li>Ofrece xxxinformación de actualidadyyy en redes sociales.</li>
				</ul>
			',
			'use_EN' => '
				<ul>
					<li>xxxEducaSAACyyy materials are especially useful for individuals with Intellectual Disabilities, Autism Spectrum Disorder (ASD), Sensory Disabilities, or comprehension difficulties, whether due to neurological reasons or language unfamiliarity.</li>
					<li>Allows viewing and downloading different contents of its xxxmultisensory cardsyyy: pictograms, images, Spanish Sign Language (<abbr title="Lengua de signos española">LSE</abbr>) signs...</li>
					<li>Provides xxxup-to-date informationyyy on social networks.</li>
				</ul>
			',
			'help' => '
				<p>Consulta toda la información sobre xxxEducaSAACyyy en aaahttps://www.educa2.madrid.org/web/educasaac1/ayuda-y-faqbbb</p>
				<p>Envía tus ideas, sugerencias, peticiones o materiales a <span class="c-info">educasaac [...] educa punto madrid punto org</span></p>
			',
			'help_EN' => '
				<p>Find all information about xxxEducaSAACyyy at aaahttps://www.educa2.madrid.org/web/educasaac1/ayuda-y-faqbbb</p>
				<p>Send your ideas, suggestions, requests, or materials to <span class="c-info">educasaac [...] educa.madrid.org</span></p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => 'open',
			'form_extra_html_EN' => 'open',
			'searchEnabled' => false,
			'seo' => 'accesibilidad nee necesidades especiales pictogramas material de apoyo discapacidad',
			'seo_EN' => 'accessibility special needs pictograms support materials disability'
		),
		// Albor TIC-NEE
		array(
			'category' => 'Comunidades Virtuales',
			'title' => 'Albor TIC-NEE',
			'title_EN' => 'Albor ICT-SEN',
			'id' => 'albor',
			'icon' => 'accessible',
			'url' => 'https://www.educa2.madrid.org/web/albor',
			'desc' => 'Acceso Libre de Barreras al Ordenador.',
			'desc_EN' => 'Barrier-Free Computer Access.',
			'modalTitle' => 'Albor TIC-NEE',
			'modalTitle_EN' => 'Albor ICT-SEN',
			'description' => '
				<p>El Programa "ALBOR: Acceso Libre de Barreras al Ordenador" tiene como objetivo xxxofrecer recursos y facilitar su acceso a las TICyyy a personas con Necesidades Educativas Especiales.</p>
			',
			'description_EN' => '
				<p>The "ALBOR: Barrier-Free Computer Access" program aims to xxxprovide resources and facilitate access to ICTyyy for individuals with Special Educational Needs.</p>
			',
			'use' => '
				<p>xxxAlbor TIC-NEEyyy pone a disposición de profesionales y familias:</p>
				<ul>
					<li><strong>Recursos tecnológicos</strong> para personas con Necesidades Educativas Especiales.</li>
					<li>Un aaaasistente de valoración: https://albor.educa.madrid.org/bbb para encontrar soluciones y ayudas técnicas para el acceso al ordenador por personas con discapacidad.</li>
					<li><strong>Experiencias pedagógicas</strong> con TIC relacionadas con Necesidades Educativas Especiales.</li>
					<li><strong>Noticias de actualidad</strong> sobre accesibilidad.</li>
				</ul>
			',
			'use_EN' => '
				<p>xxxAlbor ICT-SENyyy provides for professionals and families:</p>
				<ul>
					<li><strong>Technological resources</strong> for individuals with Special Educational Needs.</li>
					<li>An aaaassessment assistant: https://albor.educa.madrid.org/bbb to find solutions and technical aids for computer access by people with disabilities.</li>
					<li><strong>Pedagogical experiences</strong> with ICT related to Special Educational Needs.</li>
					<li><strong>Current news</strong> on accessibility.</li>
				</ul>
			',
			'help' => '
				<p>Para más información sobre xxxAlbor TIC-NEEyyy, enviar sugerencias o colaborar con alguna idea o enlace, escribe a <span class="c-info">albor [...] educa punto madrid punto org</span></p>
			',
			'help_EN' => '
				<p>For more information about xxxAlbor ICT-SENyyy, send suggestions or collaborate with any idea or link, write to <span class="c-info">albor [...] educa.madrid.org</span></p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => 'open',
			'form_extra_html_EN' => 'open',
			'searchEnabled' => false,
			'seo' => 'accesibilidad nee necesidades especiales material de apoyo discapacidad',
			'seo_EN' => 'accessibility SEN special educational needs support materials disability'
		),
		// Altas Capacidades
		array(
			'category' => 'Comunidades Virtuales',
			'title' => 'Altas Capacidades',
			'title_EN' => 'High Abilities',
			'id' => 'peac',
			'icon' => 'speed',
			'url' => 'https://www.educa2.madrid.org/web/peac',
			'desc' => 'Programa para Alumnos con Altas Capacidades.',
			'desc_EN' => 'Program for Students with High Abilities.',
			'modalTitle' => 'Altas Capacidades',
			'modalTitle_EN' => 'High Abilities',
			'description' => '
				<p>xxxPEACyyy (Programa de Enriquecimiento Educativo para Alumnos con Altas Capacidades) es un xxxprograma, voluntario y gratuito que se lleva a cabo fuera del horario escolaryyy.</p>
				<p>No sustituye en ningún momento el currículo oficial, sino que lo complementa y enriquece.</p>
				<p>xxxObjetivos del programa:yyy</p>
				<ul>
					<li>Contribuir al desarrollo de las capacidades y personalidad de las personas participantes.</li>
					<li>Desarrollar el pensamiento divergente y la creatividad.</li>
					<li>Afianzar estrategias positivas de relación entre iguales y habilidades sociales adaptadas al contexto en el que se desenvuelven.</li>
					<li>Actuar en contextos de aprendizaje enriquecidos.</li>
					<li>Apreciar el trabajo en equipo y valorar a los demás en sus diferencias.</li>
				</ul>				
			',
			'description_EN' => '
				<p>xxxPEACyyy (Educational Enrichment Program for Students with High Abilities) is a xxxvoluntary and free program conducted outside school hoursyyy.</p>
				<p>It does not replace the official curriculum but complements and enriches it.</p>
				<p>xxxProgram objectives:yyy</p>
				<ul>
					<li>Contribute to the development of participants’ abilities and personality.</li>
					<li>Develop divergent thinking and creativity.</li>
					<li>Strengthen positive peer relationship strategies and social skills adapted to their context.</li>
					<li>Engage in enriched learning contexts.</li>
					<li>Appreciate teamwork and value others in their differences.</li>
				</ul>
			',
			'use' => '
				<p>xxxPEACyyy pone a disposición de profesionales, alumnado y familias material para el enriquecimiento educativo en diferentes áreas:</p>
				<ul>
					<li><strong>Recursos, materiales, actividades</strong> para complementar y enriquecer diferentes áreas.</li>
					<li><strong>Experiencias pedagógicas</strong> enriquecidas.</li>
					<li><strong>Noticias de actualidad</strong> y canal PEAC en redes sociales.</li>
				</ul>
			',
			'use_EN' => '
				<p>xxxPEACyyy provides professionals, students, and families with material for educational enrichment in different areas:</p>
				<ul>
					<li><strong>Resources, materials, activities</strong> to complement and enrich various areas.</li>
					<li><strong>Enriched pedagogical experiences</strong>.</li>
					<li><strong>Current news</strong> and PEAC channel on social media.</li>
				</ul>
			',
			'help' => '
				<p>Para más información sobre xxxPEACyyy, enviar sugerencias o colaborar, escribe a <span class="c-info">enriquecimientoeducativo [...] educa punto madrid punto org</span></p>
			',
			'help_EN' => '
				<p>For more information about xxxPEACyyy, send suggestions or collaborate, write to <span class="c-info">enriquecimientoeducativo [...] educa.madrid.org</span></p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => 'open',
			'form_extra_html_EN' => 'open',
			'searchEnabled' => false,
			'shortTitle' => 'PEAC',
			'shortTitle_EN' => 'PEAC',
			'seo' => 'nee necesidades especiales superdotados',
			'seo_EN' => 'SEN special educational needs gifted'
		),
		// Animalandia
		array(
			'category' => 'Comunidades Virtuales',
			'title' => 'Animalandia',
			'title_EN' => 'Animalandia',
			'id' => 'animalandia',
			'icon' => 'bug_report',
			'url' => 'http://animalandia.educa.madrid.org/',
			'desc' => 'Espacio para la biodiversidad animal.',
			'desc_EN' => 'Space for animal biodiversity.',
			'modalTitle' => 'Animalandia',
			'modalTitle_EN' => 'Animalandia',
			'description' => '
				<p>En xxxAnimalandiayyy encontrarás todo tipo de xxxinformación sobre el mundo animalyyy: imágenes, vídeos, taxonomías, juegos educativos...</p>
				<p>xxxLos propios usuarios colaboranyyy en su ampliación y mejora facilitando recursos multimedia y aportando información.</p>
			',
			'description_EN' => '
				<p>In xxxAnimalandiayyy you will find all kinds of xxxinformation about the animal worldyyy: images, videos, taxonomies, educational games...</p>
				<p>xxxUsers themselves contributeyyy to its expansion and improvement by providing multimedia resources and information.</p>
			',
			'use' => '
				<ul>
					<li>xxxAnimalandia fomenta el conocimiento de la naturalezayyy y el respeto hacia el mundo natural a través del descubrimiento de las distintas especies.</li>
					<li>xxxOfrece diferentes tipos de recursosyyy como fichas, imágenes, vídeos o juegos.</li>
					<li>Hay recursos de muchísimas especies, y podrás usarlos para lo que quieras, porque todos tienen licencias "libres" y permiten su reutilización.</li>
				</ul>
			',
			'use_EN' => '
				<ul>
					<li>xxxAnimalandia promotes knowledge of naturenyy and respect for the natural world through the discovery of different species.</li>
					<li>xxxProvides various types of resourcesyyy such as cards, images, videos, or games.</li>
					<li>There are resources for many species, and you can use them freely, as all have "open" licenses and allow reuse.</li>
				</ul>
			',
			'help' => '
				<p>La web contiene una sección de ayuda donde encontrarás diversos manuales: aaahttp://animalandia.educa.madrid.org/ayuda-general.phpbbb</p>
				<p>Puedes contactar con el administrador del proyecto desde la propia web de xxxAnimalandiayyy.</p>
			',
			'help_EN' => '
				<p>The website contains a help section where you can find various manuals: aaahttp://animalandia.educa.madrid.org/ayuda-general.phpbbb</p>
				<p>You can contact the project administrator from the xxxAnimalandiayyy website itself.</p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '
				<p class="text-left">aaaAnimalandia: http://animalandia.educa.madrid.orgbbb es una página abierta a todo el mundo, pero puedes registrarte para colaborar.</p>
				<p><a href="http://animalandia.educa.madrid.org" class="btn btn-primary">Acceder</a></p>		
			',
			'form_extra_html_EN' => '
				<p class="text-left">aaaAnimalandia: http://animalandia.educa.madrid.orgbbb is an open page for everyone, but you can register to collaborate.</p>
				<p><a href="http://animalandia.educa.madrid.org" class="btn btn-primary">Access</a></p>		
			',
			'searchEnabled' => false,
			'seo' => 'biología ciencia animales ecología biodiversidad naturaleza',
			'seo_EN' => 'biology science animals ecology biodiversity nature'
		),
		// Espacios Institucionales
		// *********************		
		// Direcciones de Área Territorial
		array(
			'category' => 'Espacios Institucionales',
			'title' => 'Direcciones de Área Territorial',
			'title_EN' => 'Territorial Area Directions',
			'id' => 'dat',
			'icon' => 'home_work',
			'url' => 'https://www.educa2.madrid.org/web/direcciones-de-area',
			'desc' => 'Páginas web de las distintas Direcciones de Área Territorial.',
			'desc_EN' => 'Web pages of the different Territorial Area Directions.',
			'modalTitle' => 'Direcciones de Área Territorial',
			'modalTitle_EN' => 'Territorial Area Directions',
			'description' => '
				<p>Espacio web de la Consejería con xxxinformación dirigida a la comunidad educativa, organizada por áreas territorialesyyy.</p>
			',
			'description_EN' => '
				<p>Web space of the Ministry with xxxinformation aimed at the educational community, organized by territorial areasyyy.</p>
			',
			'use' => '
				<p>Desde las Direcciones de Área Territorial xxxse facilita el acceso a los recursos propiosyyy: Información y Registro, descarga de impresos, Secretaría General, Servicio de la Unidad de Programas Educativos, Servicio de Inspección Educativa y Dirección de Área.</p>
			',
			'use_EN' => '
				<p>From the Territorial Area Directions xxxaccess to their own resources is providedyyy: Information and Registry, form downloads, General Secretariat, Educational Programs Unit Service, Educational Inspection Service, and Area Direction.</p>
			',
			'help' => '
				<p>En la aaaweb de las Direcciones de Área Territorial: https://www.educa2.madrid.org/web/direcciones-de-areabbb se encuentran los datos de contacto para solicitar información adicional.</p>			
			',
			'help_EN' => '
				<p>On the Territorial Area Directions website: https://www.educa2.madrid.org/web/direcciones-de-areabbb you can find contact details to request additional information.</p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => 'open',
			'form_extra_html_EN' => 'open',
			'searchEnabled' => false,
			'shortTitle' => 'DAT',
			'shortTitle_EN' => 'TAD',
			'seo' => 'registro impressos secretaría inspección educativa',
			'seo_EN' => 'registry forms secretariat educational inspection'
		),
		// Raíces
		array(
			'category' => 'Espacios Institucionales',
			'title' => 'Raíces',
			'title_EN' => 'Raíces',
			'id' => 'raices',
			'icon' => 'nature_people',
			'url' => 'https://raices.educa.madrid.org/',
			'desc' => 'Web de ayuda, guías, guías visuales y tutoriales de Raíces.',
			'desc_EN' => 'Help, guides, visual guides, and tutorials for Raíces.',
			'modalTitle' => 'Raíces',
			'modalTitle_EN' => 'Raíces',
			'description' => '
				<p>Raíces es el xxxsistema integral de gestión educativayyy de la Comunidad de Madrid, al que se accede mediante aaahttp://raices.madrid.orgbbb</p>
				<p>Desde esta web se ofrece ayuda a profesorado y equipos directivos para la gestión de Raíces, mediante guías, guías visuales y tutoriales.</p>
			',
			'description_EN' => '
				<p>Raíces is the xxxcomprehensive educational management systemyyy of the Community of Madrid, accessible via aaahttp://raices.madrid.orgbbb</p>
				<p>This website offers help to teachers and management teams for managing Raíces through guides, visual guides, and tutorials.</p>
			',
			'use' => '
				<p>Ayuda al profesorado para el uso y gestión de aaaRaíces: http://raices.madrid.orgbbb.</p>
			',
			'use_EN' => '
				<p>Help for teachers on the use and management of aaaRaíces: http://raices.madrid.orgbbb.</p>
			',
			'help' => '
				<p>Las familias deben solicitar la ayuda en primera instancia al xxxcentro educativoyyy, y éste a su vez escalarlo a la xxxDATyyy correspondiente. En su defecto, las familias pueden contactar mediante el xxx012yyy.</p>			
			',
			'help_EN' => '
				<p>Families must first request help from the xxxeducational centeryyy, which will escalate it to the corresponding xxxDATyyy. Otherwise, families can contact via xxx012yyy.</p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => 'open',
			'form_extra_html_EN' => 'open',
			'searchEnabled' => false,
			'seo' => 'matriculaciones usuarios notas gestión centros calificaciones madrid',
			'seo_EN' => 'enrollments users grades management schools marks madrid'
		),
		// Delegación de Protección de Datos
		array(
			'category' => 'Espacios Institucionales',
			'title' => 'Protección de Datos',
			'title_EN' => 'Data Protection',
			'id' => 'dpd',
			'icon' => 'insert_chart',
			'url' => 'https://dpd.educa2.madrid.org',
			'desc' => 'Delegación de Protección de Datos de la Consejería.',
			'desc_EN' => 'Data Protection Delegation of the Ministry.',
			'modalTitle' => 'Delegación de Protección de Datos',
			'modalTitle_EN' => 'Data Protection Delegation',
			'description' => '
				<p>Esta página web proporciona información, recomendaciones y modelos para ayudar a la organización a xxxgarantizar la privacidad de las personasyyy (familias, alumnado, profesorado y otros trabajadores).</p>
				<p>La xxxDelegación de Protección de Datosyyy de la Consejería vela por el cumplimiento de la normativa de protección de datos en nuestra organización y sus servicios.</p>
			',
			'description_EN' => '
				<p>This website provides information, recommendations, and templates to help the organization xxxensure the privacy of individualsyyy (families, students, teachers, and other staff).</p>
				<p>The Ministry’s xxxData Protection Delegationyyy ensures compliance with data protection regulations within our organization and its services.</p>
			',
			'use' => '
				<p>Sus funciones principales son:</p>
				<ul>
					<li>xxxInformar y asesoraryyy al responsable del tratamiento de sus obligaciones.</li>
					<li>xxxSupervisaryyy la aplicación de las normas.</li>
					<li>xxxFormar y concienciaryyy a trabajadores en materia de protección de datos.</li>
					<li>Supervisar la aplicación del Reglamento General de Protección de Datos.</li>
					<li>Supervisar la documentación y notificar brechas de seguridad.</li>
					<li>Supervisar la respuesta a las solicitudes de la autoridad de control (<abbr title="Agencia Española de Protección de Datos">AEPD</abbr>).</li>
					<li>xxxEjercer de punto de contactoyyy con la autoridad de control.</li>
				</ul>
			',
			'use_EN' => '
				<p>Main functions include:</p>
				<ul>
					<li>xxxInform and adviseyyy the data controller about their obligations.</li>
					<li>xxxSuperviseyyy the application of regulations.</li>
					<li>xxxTrain and raise awarenessyyy among staff regarding data protection.</li>
					<li>Monitor the application of the General Data Protection Regulation.</li>
					<li>Supervise documentation and report security breaches.</li>
					<li>Monitor responses to requests from the supervisory authority (<abbr title="Agencia Española de Protección de Datos">AEPD</abbr>).</li>
					<li>xxxAct as a contact pointyyy with the supervisory authority.</li>
				</ul>
			',
			'help' => '
				<p>Información y ayuda de la xxxDelegación de Protección de Datosyyy: <span class="c-info">protecciondatos.educacion [...] madrid punto org</span></p>			
			',
			'help_EN' => '
				<p>Information and help from the xxxData Protection Delegationyyy: <span class="c-info">protecciondatos.educacion [...] madrid.org</span></p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => 'open',
			'form_extra_html_EN' => 'open',
			'searchEnabled' => false,
			'shortTitle' => 'Datos',
			'shortTitle_EN' => 'Data',
			'seo' => 'privacidad aviso legal lopd datos personales',
			'seo_EN' => 'privacy legal notice LOPD personal data'
		),
		// Consejo Escolar
		array(
			'category' => 'Espacios Institucionales',
			'title' => 'Consejo Escolar',
			'title_EN' => 'School Council',
			'id' => 'consejo_escolar',
			'icon' => 'how_to_vote',
			'url' => 'https://www.comunidad.madrid/servicios/educacion/consejo-escolar',
			'desc' => 'Órgano superior de consulta y participación democrática.',
			'desc_EN' => 'Highest body for consultation and democratic participation.',
			'modalTitle' => 'Consejo Escolar',
			'modalTitle_EN' => 'School Council',
			'description' => '
				<p>El aaaConsejo Escolar de la Comunidad de Madrid: https://www.comunidad.madrid/servicios/educacion/consejo-escolarbbb es el órgano superior de xxxconsulta y participación democráticayyy en la programación de la enseñanza no universitaria en la Comunidad de Madrid.</p>
				<p>Promueve la xxximplicación de las comunidades educativasyyy y la xxxmejora de la convenienciayyy, e invita a toda la comunidad educativa a que participe activamente a través de sus espacios web, compartiendo experiencias y otros contenidos.</p>
			',
			'description_EN' => '
				<p>The aaaSchool Council of the Community of Madrid: https://www.comunidad.madrid/servicios/educacion/consejo-escolarbbb is the highest body for xxxconsultation and democratic participationyyy in the programming of non-university education in the Community of Madrid.</p>
				<p>It promotes xxxinvolvement of educational communitiesyyy and xxximprovement of convenienceyyy, inviting the entire educational community to participate actively via its web spaces, sharing experiences and other content.</p>
			',
			'use' => '
				<ul>
					<li>xxxConsultasyyy relacionadas con la implicación de las comunidades educativas con el objetivo de lograr la promoción, extensión y mejora de nuestro sistema educativo.</li>
					<li>El aaaForo por la Convivencia del Consejo Escolar: https://www.educa2.madrid.org/web/foro-por-la-convivencia-del-consejo-escolarbbb incluye información sobre foros presenciales, referencias y enlaces, experiencias y buenas prácticas.</li>
					<li>La <a href="https://www.educa2.madrid.org/web/revistadebates/" target="_blank" rel="noopener" title="Abrir en ventana nueva">Revista Debates<span class="em-sr"> (se abre en ventana nueva)</span></a> ofrece entrevistas, recursos, artículos y otros contenidos de interés. Desde su web se pueden consultar todos los números publicados.</li>
				</ul>
			',
			'use_EN' => '
				<ul>
					<li>xxxConsultationsyyy related to the involvement of educational communities to promote, expand, and improve our education system.</li>
					<li>The aaaForum for Coexistence of the School Council: https://www.educa2.madrid.org/web/foro-por-la-convivencia-del-consejo-escolarbbb includes information about in-person forums, references and links, experiences, and best practices.</li>
					<li>The <a href="https://www.educa2.madrid.org/web/revistadebates/" target="_blank" rel="noopener" title="Open in new window">Revista Debates<span class="em-sr"> (opens in new window)</span></a> offers interviews, resources, articles, and other relevant content. All published issues can be consulted on its website.</li>
				</ul>
			',
			'help' => '
				<p>Para cualquier consulta adicional:</p>
				<p>xxxConsejo Escolar de la Comunidad de Madridyyy <br>Paseo de Recoletos, 14. 7º - 28001 (Madrid)<br><span class="c-info">consejoescolar [...] madrid punto org</span> - 91 420 82 15</p>
			',
			'help_EN' => '
				<p>For any additional inquiries:</p>
				<p>xxxSchool Council of the Community of Madridyyy <br>Paseo de Recoletos, 14. 7º - 28001 (Madrid)<br><span class="c-info">consejoescolar [...] madrid.org</span> - 91 420 82 15</p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '
				<p class="text-left">La web del aaaConsejo Escolar de la Comunidad de Madrid: https://www.comunidad.madrid/servicios/educacion/consejo-escolarbbb es un espacio abierto a todo el mundo, sin contraseña.</p>
				<p><a href="https://www.comunidad.madrid/servicios/educacion/consejo-escolar" class="btn btn-primary">Acceder</a></p>
				<p class="text-left">xxxOtros espacios:yyy <a href="https://www.educa2.madrid.org/web/foro-por-la-convivencia-del-consejo-escolar" target="_blank" rel="noopener" title="Abrir en ventana nueva">Foro por la Convivencia<span class="em-sr"> (se abre en ventana nueva)</span></a>, <a href="https://www.educa2.madrid.org/web/revistadebates/" target="_blank" rel="noopener" title="Abrir en ventana nueva">Revista Debates<span class="em-sr"> (se abre en ventana nueva)</span></a>.</p>
			',
			'form_extra_html_EN' => '
				<p class="text-left">The aaaSchool Council of the Community of Madrid website: https://www.comunidad.madrid/servicios/educacion/consejo-escolarbbb is open to everyone, without a password.</p>
				<p><a href="https://www.comunidad.madrid/servicios/educacion/consejo-escolar" class="btn btn-primary">Access</a></p>
				<p class="text-left">xxxOther spaces:yyy <a href="https://www.educa2.madrid.org/web/foro-por-la-convivencia-del-consejo-escolar" target="_blank" rel="noopener" title="Open in new window">Forum for Coexistence<span class="em-sr"> (opens in new window)</span></a>, <a href="https://www.educa2.madrid.org/web/revistadebates/" target="_blank" rel="noopener" title="Open in new window">Revista Debates<span class="em-sr"> (opens in new window)</span></a>.</p>
			',
			'searchEnabled' => false,
			'shortTitle' => 'C. Escolar',
			'shortTitle_EN' => 'S. Council',
			'seo' => 'participación comunidad educativa revista debates foros mejora de la convivencia',
			'seo_EN' => 'participation educational community debate magazine forums coexistence improvement'
		),
		// Practicum12
		array(
			'category' => 'Espacios Institucionales',
			'title' => 'Practicum12',
			'title_EN' => 'Practicum12',
			'id' => 'practicum',
			'icon' => 'home_work',
			'url' => 'https://dgbilinguismoycalidad.educa.madrid.org/practicum/',
			'desc' => 'Prácticas educativas.',
			'desc_EN' => 'Educational internships.',
			'modalTitle' => 'Practicum12',
			'modalTitle_EN' => 'Practicum12',
			'description' => '
				<p>Aplicación web para la gestión de plazas de xxxprácticas educativasyyy.</p>
			',
			'description_EN' => '
				<p>Web application for the management of xxxeducational internshipyyy positions.</p>
			',
			'use' => '
				<ul>
					<li>Solicitud de plazas para xxxPracticum del Másteryyy en Profesorado de Educación Secundaria Obligatoria y Bachillerato, Formación Profesional y Enseñanza de Idiomas y de la formación equivalente.</li>
					<li>Solicitud de plazas para xxxPracticum de los Gradosyyy de Magisterio, Pedagogía y Psicología, de Facultades y Escuelas Universitarias de Formación del Profesorado.</li>
					<li>Cumplimentación de las xxxencuestas de valoración de las prácticasyyy docentes.</li>
				</ul>
			',
			'use_EN' => '
				<ul>
					<li>Application for xxxMaster’s Practicumyyy positions in Secondary Education, Baccalaureate, Vocational Training, Language Teaching, and equivalent training.</li>
					<li>Application for xxxBachelor’s Practicumyyy positions in Teaching, Pedagogy, and Psychology from Faculties and University Schools of Teacher Training.</li>
					<li>Completion of xxxinternship evaluation surveyssyy for teaching practicums.</li>
				</ul>
			',
			'help' => '
				<ul>
					<li>Información general: <span class="c-info">formacionprofesorado [...] madrid punto org</span></li>
					<li>Practicum del Máster: <span class="c-info">practicum.master [...] educa punto madrid punto org</span></li>
					<li>Practicum de los Grados: <span class="c-info">practicum.magisterio.grado [...] educa punto madrid punto org</span></li>
				</ul>
			',
			'help_EN' => '
				<ul>
					<li>General information: <span class="c-info">formacionprofesorado [...] madrid.org</span></li>
					<li>Master’s Practicum: <span class="c-info">practicum.master [...] educa.madrid.org</span></li>
					<li>Bachelor’s Practicum: <span class="c-info">practicum.magisterio.grado [...] educa.madrid.org</span></li>
				</ul>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => 'open',
			'form_extra_html_EN' => 'open',
			'searchEnabled' => false,
			'seo' => 'prácticas en empresas fct formación trabajo',
			'seo_EN' => 'internships in companies vocational training work'
		),
		// Buscador de Centros
		array(
			'category' => 'Espacios Institucionales',
			'title' => 'Buscador de Centros',
			'title_EN' => 'School Finder',
			'id' => 'buscador',
			'icon' => 'find_in_page',
			'url' => 'https://gestiona.comunidad.madrid/wpad_pub/run/j/MostrarConsultaGeneral.icm',
			'desc' => 'Búsqueda de Centros de la Comunidad de Madrid.',
			'desc_EN' => 'Search for schools in the Community of Madrid.',
			'modalTitle' => 'Buscador de Centros',
			'description' => '
				<p>Información detallada sobre el xxxcentro de enseñanzayyy que te interesa.</p>
			',
			'description_EN' => '
				<p>Detailed information about the xxxeducational centeryyy you are interested in.</p>
			',
			'use' => '
				<p>Este servicio ofrece la posibilidad de xxxrealizar búsquedas por tipoyyy de enseñanza, zona geográfica, Dirección de Área Territorial, municipio, tipo de centro (público, concertado o privado), opciones lingüísticas (bilingüe español-inglés, convenio British Council...), comedor, transporte escolar, tipo de jornada escolar, centro adaptado y otras características.</p>
			',
			'use_EN' => '
				<p>This service allows you to xxxsearch by typeyyy of education, geographical area, Territorial Area Directorate, municipality, type of school (public, charter, or private), language options (Spanish-English bilingual, British Council agreement...), dining services, school transport, school day type, adapted school, and other features.</p>
			',
			'help' => '
				<p>Servicio de xxxinformación y atención al ciudadanoyyy de la Comunidad de Madrid: aaahttps://www.comunidad.madrid/servicios/informacion-atencion-ciudadano/contacta-opinabbb.</p>
			',
			'help_EN' => '
				<p>Information and citizen support service of the Community of Madrid: aaahttps://www.comunidad.madrid/servicios/informacion-atencion-ciudadano/contacta-opinabbb.</p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => 'open',
			'form_extra_html_EN' => '
				<p class="text-left">Access the School Finder at aaahttps://gestiona.comunidad.madrid/wpad_pub/run/j/MostrarConsultaGeneral.icmbbb.</p>
			',
			// Search bar
			'shortTitle' => 'Centros',
			'shortTitle_EN' => 'Schools',
			'searchEnabled' => false,
			'seo' => 'buscador de colegios centros educativos comunidad de madrid comparador',
			'seo_EN' => 'school search educational centers comparator'
		),	
		// Títulos no universitarios
		array(
			'category' => 'Espacios Institucionales',
			'title' => 'Títulos no universitarios',
			'title_EN' => 'Non-University Degrees',
			'id' => 'titulos',
			'icon' => 'book',
			'url' => 'https://www.educa2.madrid.org/web/expedicion-de-titulos-academicos-no-universitarios/',
			'desc' => 'Gestión de títulos académicos no universitarios.',
			'desc_EN' => 'Management of non-university academic degrees.',
			'modalTitle' => 'Títulos no universitarios',
			'description' => '
				<p>Espacio web gestionado por la Secretaría General Técnica de la Comunidad de Madrid en el que se informa del xxxprocedimiento de expedición de títulosyyy correspondientes a enseñanzas postobligatorias y certificados de nivel de idiomas.</p>
			',
			'description_EN' => '
				<p>Website managed by the Technical General Secretariat of the Community of Madrid, providing information on the xxxdegree issuance procedureyyy for post-compulsory education and language level certificates.</p>
			',
			'use' => '
				<p>En esta web podrás encontrar las xxxpautas para tramitar los títulos de Graduado en Educación Secundaria Obligatoria LOMCE y de Bachiller LOMCEyyy a través de las aplicaciones informáticas que la Consejería pone a disposición de los centros públicos (GITU) y privados (GITU PRIV).</p>
			',
			'use_EN' => '
				<p>On this website, you can find the xxxguidelines to process the Graduated in Compulsory Secondary Education (LOMCE) and Baccalaureate (LOMCE)yyy degrees through the IT applications provided by the Ministry for public (GITU) and private (GITU PRIV) schools.</p>
			',
			'help' => '
				<p>En la propia aaaweb de Títulos no universitarios: https://www.educa2.madrid.org/web/expedicion-de-titulos-academicos-no-universitarios/bbb encontrarás instrucciones y manuales de usuario.</p>
			',
			'help_EN' => '
				<p>On the official aaaNon-University Degrees website: https://www.educa2.madrid.org/web/expedicion-de-titulos-academicos-no-universitarios/bbb you can find instructions and user manuals.</p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => 'open',
			'form_extra_html_EN' => '
				<p class="text-left">Access the Non-University Degrees service at aaahttps://www.educa2.madrid.org/web/expedicion-de-titulos-academicos-no-universitarios/bbb.</p>
			',
			// Search bar
			'shortTitle' => 'Títulos',
			'shortTitle_EN' => 'Degrees',
			'searchEnabled' => false,
			'seo' => 'diplomas acreditaciones solicitud de títulos calificaciones documentos',
			'seo_EN' => 'diplomas accreditations degree applications grades documents'
		),
		// Estadística de la enseñanza
		array(
			'category' => 'Espacios Institucionales',
			'title' => 'Estadística de la enseñanza',
			'title_EN' => 'Education Statistics',
			'id' => 'estadistica',
			'icon' => 'pie_chart',
			'url' => 'https://www.educa2.madrid.org/web/estadistica-ensenanza/',
			'desc' => 'Datos y cifras de la educación.',
			'desc_EN' => 'Education data and figures.',
			'modalTitle' => 'Estadística de la enseñanza',
			'description' => '
				<p>Espacio web gestionado por la Dirección General de Bilingüismo y Calidad de la Enseñanza en el que se informa del xxxprocedimiento de recogida de datosyyy que sirven para la elaboración y publicación de las estadísticas de la enseñanza en la Comunidad de Madrid.</p>
			',
			'description_EN' => '
				<p>Website managed by the Directorate General of Bilingualism and Quality of Education providing information on the xxxdata collection procedureyyy used for preparing and publishing education statistics in the Community of Madrid.</p>
			',
			'use' => '
				<p>xxxEstadística de la enseñanza informa del procedimiento que han de seguir los centrosyyy públicos y privados para la grabación de los datos estadísticos, la validación de los mismos y su posterior envío telemático a través de las aplicaciones informáticas que la Consejería pone a disposición de los Centros.</p>
			',
			'use_EN' => '
				<p>xxxEducation Statistics provides information on the procedures that public and private schoolsyyy must follow for recording statistical data, validating it, and submitting it electronically through the IT applications provided by the Ministry.</p>
			',
			'help' => '
				<p>En la propia aaaweb de Estadística de la enseñanza: https://www.educa2.madrid.org/web/estadistica-ensenanza/bbb encontrarás instrucciones y manuales de usuario.</p>
			',
			'help_EN' => '
				<p>On the official aaaEducation Statistics website: https://www.educa2.madrid.org/web/estadistica-ensenanza/bbb you can find instructions and user manuals.</p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => 'open',
			'form_extra_html_EN' => '
				<p class="text-left">Access the Education Statistics service at aaahttps://www.educa2.madrid.org/web/estadistica-ensenanza/bbb.</p>
			',
			// Search bar
			'shortTitle' => 'Estadística',
			'shortTitle_EN' => 'Statistics',
			'searchEnabled' => false,
			'seo' => 'comparador informes educación madrid gráficas colegios',
			'seo_EN' => 'comparison reports education charts schools'
		)
	);
	$extraServices = array(
		// Portal CAU
		array(
			'title' => 'Portal CAU',
			'title_EN' => 'CAU Portal',
			'id' => 'portal-cau',
			'icon' => 'support_agent',
			'url' => 'https://portalcau.educa.madrid.org/',
			'desc' => 'Informa de problemas detectados y envía sugerencias de mejora.',
			'desc_EN' => 'Report detected problems and submit improvement suggestions.',
			'modalTitle' => 'Portal CAU',
			'description' => '
				<p>Utiliza el xxxPortal CAUyyy para avisar de cualquier fallo detectado en los servicios de la Plataforma o hacer sugerencias.</p>
			',
			'description_EN' => '
				<p>Use the xxxCAU Portalyyy to report any issues detected in the Platform services or to make suggestions.</p>
			',
			'use' => '
				<p>El xxxPortal CAUyyy te permite:</p>
				<ul>
					<li>Avisar de fallos detectados en cualquiera de los servicios de xxxEducaMadridyyy.</li>
					<li>Enviar sugerencias de mejora.</li>
					<li>Hacer un seguimiento de tus incidencias.</li>
				</ul>                                    
			',
			'use_EN' => '
				<p>The xxxCAU Portalyyy allows you to:</p>
				<ul>
					<li>Report detected issues in any of the xxxEducaMadridyyy services.</li>
					<li>Submit improvement suggestions.</li>
					<li>Track your incidents.</li>
				</ul>
			',
			'help' => '',            
			'help_EN' => '',            
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '
				<p class="text-left">El acceso al xxxPortal CAUyyy requiere una cuenta de xxxEducaMadridyyy.</p>
				<p><a href="https://portalcau.educa.madrid.org/" class="btn btn-primary">Portal CAU</a></p>            
				<p class="text-left">El Portal CAU nos ayuda a mejorar. Muchas gracias por utilizarlo.</p>
			',
			'form_extra_html_EN' => '
				<p class="text-left">Access to the xxxCAU Portalyyy requires an xxxEducaMadridyyy account.</p>
				<p><a href="https://portalcau.educa.madrid.org/" class="btn btn-primary">CAU Portal</a></p>            
				<p class="text-left">The CAU Portal helps us improve. Thank you for using it.</p>
			',
			'shortTitle' => 'Portal CAU',
			'shortTitle_EN' => 'CAU Portal',
			'searchEnabled' => false,
		),
		// Ayuda
		array(
			'title' => 'Ayuda',
			'title_EN' => 'Help',
			'id' => 'ayuda',
			'icon' => 'help_center',
			'url' => 'https://ayuda.educa.madrid.org/',
			'desc' => 'Información exhaustiva para aprender a manejar la Plataforma.',
			'desc_EN' => 'Comprehensive information to learn how to use the Platform.',
			'modalTitle' => 'Ayuda',
			'description' => '
				<p>xxxEducaMadridyyy te ofrece información detallada para aprender a manejar sus herramientas.</p>
				<p>La xxxAyuda de EducaMadridyyy recoge numerosos libros digitales con información para diferentes niveles de usuario: TIC y Dirección, principiantes o usuarios avanzados.</p>
			',
			'description_EN' => '
				<p>xxxEducaMadridyyy provides detailed information to learn how to use its tools.</p>
				<p>The xxxEducaMadrid Helpyyy contains numerous digital books with information for different user levels: ICT and Management, beginners, or advanced users.</p>
			',
			'use' => '',
			'use_EN' => '',
			'help' => '',            
			'help_EN' => '',            
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => 'open',
			'form_extra_html_EN' => 'open',
			'shortTitle' => 'Ayuda',
			'shortTitle_EN' => 'Help',
			'searchEnabled' => false,
		),
		// Comparti2
		array(
			'title' => 'Comparti2',
			'title_EN' => 'Comparti2',
			'id' => 'comparti2',
			'icon' => 'get_app',
			'url' => 'https://empieza.educa.madrid.org/comparti2/',
			'desc' => 'Comparte archivos pesados sin comprometer tu privacidad.',
			'desc_EN' => 'Share large files without compromising your privacy.',
			'modalTitle' => 'Comparti2',
			'description' => '
				<p>xxxComparti2yyy es una aplicación para compartir archivos grandes de forma temporal. Permite subir ficheros en el ámbito docente sin preocuparse por el espacio y respetando la privacidad de quienes los descargan.</p>
			',
			'description_EN' => '
				<p>xxxComparti2yyy is an application to share large files temporarily. It allows uploading files in the educational context without worrying about space and respecting the privacy of downloaders.</p>
			',
			'use' => '
				<p>Con xxxComparti2yyy puedes:</p>
				<ul>
					<li>Compartir archivos sin problemas de espacio.</li>
					<li>Proteger las descargas con contraseña.</li>
					<li>Establecer el tiempo límite para su descarga.</li>
					<li>Permitir, si quieres, una sola descarga.</li>
					<li>Borrar los ficheros o esperar a que se eliminen automáticamente.</li>
					<li>Autorizar por tiempo limitado la subida de archivos a los estudiantes.</li>
				</ul>                                    
			',
			'use_EN' => '
				<p>With xxxComparti2yyy you can:</p>
				<ul>
					<li>Share files without space limitations.</li>
					<li>Protect downloads with a password.</li>
					<li>Set a time limit for downloads.</li>
					<li>Allow a single download if desired.</li>
					<li>Delete files manually or wait for automatic deletion.</li>
					<li>Grant students temporary upload permissions.</li>
				</ul>                                    
			',
			'help' => '',            
			'help_EN' => '',            
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '
				<p class="text-left">xxxComparti2yyy está integrado en xxxEMPiezayyy, y el acceso requiere una cuenta de xxxEducaMadridyyy.</p>
				<p><a href="https://empieza.educa.madrid.org/comparti2/" class="btn btn-primary">Acceder</a></p>            
			',
			'form_extra_html_EN' => '
				<p class="text-left">xxxComparti2yyy is integrated into xxxEMPiezayyy, and access requires an xxxEducaMadridyyy account.</p>
				<p><a href="https://empieza.educa.madrid.org/comparti2/" class="btn btn-primary">Access</a></p>            
			',
			'shortTitle' => 'Comparti2',
			'shortTitle_EN' => 'Comparti2',
			'searchEnabled' => false,
		),
		// Repositorio
		/*
		array(
			'title' => 'Repositorio',
			'title_EN' => 'Repository',
			'id' => 'repositorio',
			'icon' => 'style',
			'url' => 'https://aulavirtual35.educa.madrid.org/aulas/',
			'desc' => 'Cursos y módulos completos de diferentes niveles educativos.',
			'desc_EN' => 'Complete courses and modules for different educational levels.',
			'modalTitle' => 'Repositorio de Aulas Virtuales',
			'description' => '
				<p>Una colección de xxxcursos cedidos por docentesyyy.</p>
				<p>Puedes entrar, mirar los contenidos cedidos para evaluar si te resultan útiles, y también utilizarlos en tu aula virtual.</p>
			',
			'description_EN' => '
				<p>A collection of xxxcourses shared by teachersyyy.</p>
				<p>You can enter, review the shared content to see if it is useful, and also use it in your virtual classroom.</p>
			',
			'use' => '
				<p>Todos los cursos están cedidos con aaalicencia CC-BY-NC-SA: https://creativecommons.org/licenses/by-nc-sa/4.0/deed.esbbb, de manera que xxxpuedes copiar y redistribuiryyy el material en cualquier medio o formato, xxxy remezclaryyy, transformar y construir a partir del material.</p>
				<p>Para xxxFormación Profesionalyyy se ofrecen módulos cedidos por docentes y ciclos formativos completos de FP a Distancia.</p>                                    
				<p>Consulta las indicaciones que encontrarás en el xxxRepositorioyyy para utilizar adecuadamente los materiales.</p>
			',
			'use_EN' => '
				<p>All courses are shared under a CC-BY-NC-SA license: https://creativecommons.org/licenses/by-nc-sa/4.0/deed.esbbb, so you xxxcan copy and redistributeyyy the material in any medium or format, xxxy remixyyy, transform, and build upon it.</p>
				<p>For xxxVocational Trainingyyy, modules shared by teachers and complete distance learning cycles are provided.</p>
				<p>Check the instructions in the xxxRepositoryyyy to properly use the materials.</p>
			',
			'help' => '
				<p>En el propio aaaRepositorio de Aulas Virtuales: https://aulavirtual35.educa.madrid.org/aulas/bbb se explica cómo incorporar recursos cedidos a un curso de tu aula virtual.</p>
				<p>Encontrarás más información sobre las xxxAulas Virtualesyyy en la Ayuda de EducaMadrid.</p>            
			',
			'help_EN' => '
				<p>In the aaaVirtual Classroom Repository: https://aulavirtual35.educa.madrid.org/aulas/bbb you will find instructions on how to incorporate shared resources into your virtual classroom course.</p>
				<p>More information about xxxVirtual Classroomsyyy is available in the EducaMadrid Help.</p>
			',            
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '
				<p class="text-left">El acceso a los contenidos del xxxRepositorio de Aulas Virtualesyyy requiere una cuenta de xxxEducaMadridyyy. Sin ella sólo podrás consultar el listado de recursos disponibles.</p>
				<p><a href="https://aulavirtual35.educa.madrid.org/aulas/" class="btn btn-primary">Repositorio de Aulas Virtuales</a></p>            
			',
			'form_extra_html_EN' => '
				<p class="text-left">Access to the content of the xxxVirtual Classroom Repositoryyyy requires an xxxEducaMadridyyy account. Without it, you can only view the list of available resources.</p>
				<p><a href="https://aulavirtual35.educa.madrid.org/aulas/" class="btn btn-primary">Virtual Classroom Repository</a></p>            
			',
			'shortTitle' => 'Repositorio',
			'shortTitle_EN' => 'Repository',
			'searchEnabled' => false,
		),
		*/
		// Generador de Boletines
		array(
			'category' => 'Servicios Educativos',
			'title' => 'Generador de Boletines',
			'title_EN' => 'Newsletter Generator',
			'id' => 'boletines',
			'icon' => 'contact_mail',
			'url' => 'https://boletines.educa.madrid.org/',
			'desc' => 'Generador de boletines (<em>newsletters</em>) en formato HTML.',
			'desc_EN' => 'Generator of newsletters (<em>newsletters</em>) in HTML format.',
			'modalTitle' => 'Generador de Boletines',
			'description' => '
				<p>El xxxGenerador de Boletinesyyy permite crear fácilmente boletines informativos (<em>newsletters</em>) para enviarlos por correo electrónico.</p>
			',
			'description_EN' => '
				<p>The xxxNewsletter Generatoryyy allows you to easily create informational newsletters (<em>newsletters</em>) to send via email.</p>
			',
			'use' => '
				<ul>
					<li>Permite xxxmaquetar información o noticiasyyy de interés para enviar por correo electrónico.</li>
					<li>Cada usuario tiene su propio xxxperfil que puede personalizaryyy.</li>
					<li>La herramienta te xxxproporciona un código HTML que podrás insertar en tu programa de correoyyy para enviarlo a sus destinatarios.</li>
				</ul>                                
			',
			'use_EN' => '
				<ul>
					<li>Allows you to xxxlayout information or newsyyy of interest to send via email.</li>
					<li>Each user has their own xxxprofileyyy that can be customized.</li>
					<li>The tool xxxprovides you with an HTML codeyyy that you can insert into your email program to send to recipients.</li>
				</ul>
			',
			'help' => '
				<p>Encontrarás toda la información sobre el xxxGenerador de Boletinesyyy en la aaaAyuda de EducaMadrid: https://ayuda.educa.madrid.org/books/boletines-de-noticiasbbb.</p>            
				<p>La propia aplicación incluye también instrucciones de manejo en su panel de administración.</p>
			',
			'help_EN' => '
				<p>You can find all information about the xxxNewsletter Generatoryyy in the aaaEducaMadrid Help: https://ayuda.educa.madrid.org/books/boletines-de-noticiasbbb.</p>            
				<p>The application itself also includes usage instructions in its admin panel.</p>
			',
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '',
			'shortTitle' => 'Boletines',
			'shortTitle_EN' => 'Newsletters',
			'searchEnabled' => false,
		),
	);
	// services-seach.php (common search bar)
	$otherServices = array(
		// Foros
		array(
			'title' => 'Foros',
			'title_EN' => 'Forums',
			'id' => 'foros',
			'icon' => 'chat',
			'url' => 'https://foros.educa.madrid.org/',
			'desc' => '',
			'desc_EN' => '',
			'modalTitle' => '',
			'description' => '',
			'description_EN' => '',
			'use' => '',
			'use_EN' => '',
			'help' => '',
			'help_EN' => '',            
			'form' => false,
			'form_action' => '',
			'form_user_name' => '',
			'form_pass_name' => '',
			'form_extra_html' => '',
			'shortTitle' => 'Foros',
			'shortTitle_EN' => 'Forums',
			'searchEnabled' => false,
		)
	);	
?>