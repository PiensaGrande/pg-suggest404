<?php namespace pg_suggest404; ?>
<?php
global $lang1;

// default english // Suggest404 missing.php
$templ['suggest404'] = "Suggest inclusion";
$templ['suggest404_ok'] = "Suggestion Logged.";
$templ['suggest404_failed'] = "An error occured.";
$templ['suggest404_h2_message'] = "RACHEL couldn't find your page, perhaps because access has been blocked.";
#$templ['suggest404_h2_message'] = "RACHEL no ha encontrado su pagina, probablemente porque está bloqueado.";
$templ['suggest404_suggest_message'] = "Let us know if you would like to see this page in the next version.";
$templ['suggest404_blurb'] = "Suggest404 replaces the standard web server error messages for missing and forbidden pages with an explanation that allows the user to suggest inclusion of the missing page in the next image.";
$templ['suggest404Enabled'] = "Suggest404 has been enabled.  Your current settings are: ";
$templ['enableSuggest404'] = "Enable Suggest404";
$templ['enableSuggest404_ok'] = "Enable Suggest404 Succeeded";
$templ['enableSuggest404_failed'] = "Enable Suggest404 Failed";
$templ['disableSuggest404'] = "Disable Suggest404";
$templ['disableSuggest404_ok'] = "Disable Suggest404 Succeeded";
$templ['disableSuggest404_failed'] = "Disable Suggest404 Failed";
$templ['close'] = "Close";
$templ["goto_admin"] = "Goto Admin";
$templ["disk_space_avail"] = "Available disk space";
$templ["no_space_for_new"] = "Insufficient disk space to create new module.";
$templ["just_image"] = "Image";
$templ["just_title"] = "Title";
$templ["just_description"] = "Description";
$templ["large_file"] = "is too large";
$templ["fix_errors"] = "Please fix the following errors";
$templ["required"] = "is required";
$templ["special_chars"] = "Please eliminate the special characters";
$templ["allowed_chars_title"] = "Only alphamumeric characters, underscores, and dashes are allowed in the title";
$templ["no_upload_space"] = "There is not sufficient disk space to upload this image";
$templ["upload_your_content"] = "Upload your content!";
$templ["file_to_upload"] = "File to upload";
$templ["select"] = "Select";
$templ["content_type"] = "Content type";
$templ["upload"] = "Upload";
$templ["delete"] = "Delete";
$templ["error"] = "Error";
$templ["preview"] = "Preview";
$templ["save"] = "Save";
$templ["new"] = "New";
$templ["optional"] = "Optional";
$templ["finished"] = "Finished";
$templ["saved"] = "Saved!";
$templ["are_you_sure"] = "Are you sure?";
$templ["delete_element"] = "Delete Element";

// override with language translations when available
// This allows for partial translations to exists
switch ($lang1) {
	case ("es"):
                // Suggest404 missing.php
                $templ['suggest404'] = "Sugerir la inclusión";
                $templ['suggest404_ok'] = "Sugerencia Conectado.";
                $templ['suggest404_failed'] = "Ocurrió un error.";
                $templ['suggest404_h2_message'] = "RACHEL no ha encontrado su pagina, probablemente porque está bloqueado.";
                $templ['suggest404_suggest_message'] = "Háganos saber si usted piensa que esta página debe ser incluido en la próxima versión.";
		$templ['suggest404_blurb'] = "Suggest404 reemplaza los mensajes estándar de Apache por páginas perdidas y prohibidas con una explicación que permite al usuario sugerir la inclusión de la página faltante en la siguiente imagen.";
		$templ['suggest404Enabled'] = "Suggest404 se ha permitido con éxito. Tu configuración actual es: ";
		$templ['enableSuggest404'] = "Permitir Suggest404";
		$templ['enableSuggest404_ok'] = "Permitir Suggest404 - con éxito";
		$templ['enableSuggest404_failed'] = "Permitir Suggest404 - con error";
		$templ['disableSuggest404'] = "Desactivar Suggest404";
		$templ['disableSuggest404_ok'] = "Desactivar Suggest404 - con éxito";
		$templ['disableSuggest404_failed'] = "Desactivar Suggest404 - con error";
		$templ['close'] = "Cerrar";
		$templ["goto_admin"] = "Ir a Admin";
		$templ["no_space_for_new"] = "Insuficiente espacio en disco para crear.";
		$templ["fix_errors"] = "Arreglar los siguientes errores";
		$templ["required"] = "es requerido";
		$templ["special_chars"] = "Por favor, elimina los caracteres especiales"; 
		$templ["allowed_chars_title"] = "Sólo caracteres alfanuméricos, _ y - están permitidos en el Título";
		$templ["no_upload_space"] = "No hay suficiente espacio en el disco para cargar";
		$templ["upload_your_content"] = "¡Carga su contenido!";
		$templ["file_to_upload"] = "Archivo para cargar";
		$templ["select"] = "Seleccione";
		$templ["content_type"] = "Tipo de contenido";
		$templ["upload"] = "Cargar";
		$templ["delete"] = "Borrar";
		$templ["error"] = "Error";
		$templ["preview"] = "Preestreno";
		$templ["save"] = "Guardar";
		$templ["new"] = "Nuevo";
		$templ["optional"] = "Opcional";
		$templ["finished"] = "Acabado";
		$templ["saved"] = "¡Se guardó!";
		$templ["are_you_sure"] = "¿Seguro?";
		$templ["title_uri_required"] = "Título y Enlace necesitan valores";
		$templ["delete_element"] = "Borrar Elemento";
		break;
	// can support additional languages via extra cases 
}

?>
